<?php

namespace App\Controllers;

use \App\Models\pengajarModel;
use \App\Models\santriModel;
use \App\Models\hafalanModel;
use App\Models\masterModel;

helper('url');

// helper('filesystem');

class Main extends BaseController
{
    protected $pengajarModel;
    protected $santriModel;
    protected $hafalanModel;
    protected $masterModel;

    public function __construct()
    {
        $this->pengajarModel      = new pengajarModel();
        $this->santriModel        = new santriModel();
        $this->hafalanModel       = new hafalanModel();
        $this->masterModel        = new masterModel();
    }
    public function index(): string
    {
        return view('index');
    }
    public function indexPencarian()
    {
        $kata_kunci     = $this->request->getVar('kata_kunci');
        $pencarian      = $this->santriModel->where(array('nama' => $kata_kunci))->get()->getRowArray();
        session()->remove('pencarian');
        session()->remove('error');
        if (isset($pencarian)) {
            session()->set('pencarian', $pencarian);
            return redirect()->back();
        } else {
            session()->set('error', 'Santri yang anda cari tidak ditemukan, tuliskan nama lengkap santri untuk mencari data santri');
            return redirect()->back();
        }
    }
    public function login()
    {
        if (isset($_COOKIE["LOGIN"], $_COOKIE["_YTWD"])) {
            $username       = $_COOKIE["LOGIN"];
            $cekUsername    = $this->pengajarModel->where(array('username' => $username))->get()->getRowArray();
            if ($cekUsername['password'] === $_COOKIE["_YTWD"] &&  password_hash($cekUsername['username'], PASSWORD_DEFAULT) === $_COOKIE["LOGIN"] ) {
                session()->remove('error');
                session()->set('id_pengajar', $cekUsername['id_pengajar']);
                session()->set('nama', $cekUsername['nama']);
                session()->set('username', $cekUsername['username']);
                session()->set('gelar', $cekUsername['gelar']);
                session()->set('foto', $cekUsername['foto']);
                return redirect()->to('/dashboard');
            }
        } else {
            return view('login');
        }
    }
    public function loginPengajar()
    {
        $username       = $this->request->getVar('username');
        $password       = $this->request->getVar('password');
        // Kelemahan jika username sama maka akan terjadi bentrok
        $cekUsername    = $this->pengajarModel->where(array('username' => $username))->get()->getRowArray();
        $verifikasi     = password_verify($password, $cekUsername['password']);
        if ($verifikasi) {
            session()->remove('error');
            session()->set('id_pengajar', $cekUsername['id_pengajar']);
            session()->set('nama', $cekUsername['nama']);
            session()->set('username', $cekUsername['username']);
            session()->set('gelar', $cekUsername['gelar']);
            session()->set('foto', $cekUsername['foto']);
            if (!empty($this->request->getVar('remember'))) {
                setcookie("LOGIN", $username, time() + 5000);
                setcookie("_YTWD", password_hash($password, PASSWORD_DEFAULT), time() + 5000);
            }
            return redirect()->to('/dashboard');
        } else {
            session()->set('error', 'Password/Username yang anda masukkan salah');
            return redirect()->to('/login');
        }
    }
    public function logout()
    {
        setcookie("LOGIN", '', time() - 1);
        setcookie("_YTWD", '', time() - 1);
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
    public function profile($id_santri)
    {
        $santri         = $this->santriModel->find($id_santri);
        $empat_surat    = $this->hafalanModel->where(array('id_santri' => $id_santri))->where(array('jenis' => '4 Surat'))->get()->getResultArray();
        $juz_30         = $this->hafalanModel->where(array('id_santri' => $id_santri))->where(array('jenis' => 'Juz 30'))->get()->getResultArray();
         
        // Extract the 'date' and 'name' columns into separate arrays
        $dates = array_column($juz_30, 'tanggal');
        $names = array_column($juz_30, 'id_hafalan');
         
        // Sort the multidimensional array based on the 'date' column
        array_multisort($dates, SORT_DESC, $names, SORT_DESC, $juz_30);

        $data = [
            'santri'        => $santri,
            'empat_surat'   => $empat_surat,
            'juz_30'        => $juz_30
        ];
        return view('profile', $data);
    }
    public function updateProfile($id_santri)
    {
        $foto       = $this->request->getFile('ubah-formFile');
        if ($foto->getError() == 4) {
            $namaFoto = $this->request->getVar('ubah-formFoto');
        } else {
            $replace = $this->request->getVar('ubah-formFoto');
            if ($replace !== '') {
                unlink('./img/' . $replace);
            }
            $namaFoto   = $foto->getRandomName();
            $foto->move('img', $namaFoto);
        }

        $this->santriModel->save([
            'id_santri'         => $id_santri,
            'nama'              => $this->request->getVar('ubah-nama-lengkap'),
            'alamat'            => $this->request->getVar('ubah-alamat'),
            'wali'              => $this->request->getVar('ubah-nama-wali'),
            'tanggal_lahir'     => $this->request->getVar('ubah-ttl'),
            'kelas'             => $this->request->getVar('ubah-kelas'),
            'foto'              => $namaFoto
        ]);
        return redirect()->back();
    }
    public function deleteProfile($id_santri)
    {
        $data = $this->santriModel->find($id_santri);
        if ($data['foto'] !== '') {
            unlink('./img/' . $data['foto']);
        }
        $this->santriModel->delete($id_santri);
        return redirect()->to('/data-santri');
    }
    public function addHafalan($id_santri)
    {
        $this->hafalanModel->save([
            'id_santri'     => $id_santri,
            'jenis'         => $this->request->getVar('jenis-hafalan'),
            'tanggal'       => $this->request->getVar('tanggal-hafalan'),
            'surat'         => $this->request->getVar('surat-hafalan'),
            'ayat_awal'     => $this->request->getVar('ayat-start-hafalan'),
            'ayat_akhir'    => $this->request->getVar('ayat-end-hafalan'),
            'keterangan_s'  => $this->request->getVar('ket-s'),
            'murojaah'      => $this->request->getVar('murojaah'),
            'keterangan_m'  => $this->request->getVar('ket-m')
        ]);

        return redirect()->back();
    }
    public function updateHafalan($id_hafalan)
    {
        $this->hafalanModel->save([
            'id_hafalan'     => $id_hafalan,
            'tanggal'       => $this->request->getVar('tanggal-hafalan'),
            'surat'         => $this->request->getVar('surat-hafalan'),
            'ayat_awal'     => $this->request->getVar('ayat-start-hafalan'),
            'ayat_akhir'    => $this->request->getVar('ayat-end-hafalan'),
            'keterangan_s'  => $this->request->getVar('ket-s'),
            'murojaah'      => $this->request->getVar('murojaah'),
            'keterangan_m'  => $this->request->getVar('ket-m')
        ]);

        return redirect()->back();
    }
    public function deleteHafalan($id_hafalan)
    {
        $this->hafalanModel->delete($id_hafalan);
        return redirect()->back();
    }
    public function settings(): string
    {
        return view('settings');
    }
    public function dashboard(): string
    {
        $pengajar   = count($this->pengajarModel->get()->getResultArray());
        $santri     = count($this->santriModel->get()->getResultArray());
        $data       = [
            'pengajar'  => $pengajar,
            'santri'    => $santri
        ];
        return view('dashboard', $data);
    }
    public function dataSantri(): string
    {
        $santri = $this->santriModel->findAll();
        $i = 0;
        foreach ($santri as $s) :
            $pengajar   = $this->pengajarModel->where(array('id_pengajar' => $s['input_oleh']))->get()->getRowArray();
            $s['input_oleh'] = $pengajar['nama'];
            $santri[$i] = $s;
            $i++;
        endforeach;
        $data = [
            'santri'        => $santri,
            'validation'    => \Config\Services::validation()
        ];
        // dd($data);
        return view('data-santri', $data);
    }
    public function addSantri()
    {
        // VALIDASI BELUM KEPAKAI

        // if (!$this->validate([
        //     'tambah-formFile'  => [
        //         'rules' => 'max_size[tambah-formFile,2048]|is_image[tambah-formFile]|mime_in[tambah-formFile,image/jpg,image/jpeg,image/png]',
        //         'errors' => [
        //             'max_size'  => 'Ukuran gambar terlalu besar, maksimal 2MB',
        //             'is_image'  => 'File yang anda pilih bukan gambar',
        //             'mime_in'   => 'File yang anda pilih bukan gambar'
        //         ]
        //     ]
        // ])) {
        //     return redirect()->to('/data-santri')->withInput();
        // }

        // UPLOAD GAMBAR & DATA

        $foto       = $this->request->getFile('tambah-formFile');
        if ($foto->getError() == 4) {
            $namaFoto = $this->request->getVar('ubah-formFoto');
        } else {
            $replace = $this->request->getVar('ubah-formFoto');
            if ($replace !== '') {
                unlink('./img/' . $replace);
            }
            $namaFoto   = $foto->getRandomName();
            $foto->move('img', $namaFoto);
        }

        $this->santriModel->save([
            'nama'              => $this->request->getVar('tambah-nama-lengkap'),
            'alamat'            => $this->request->getVar('tambah-alamat'),
            'wali'              => $this->request->getVar('tambah-nama-wali'),
            'tanggal_lahir'     => $this->request->getVar('tambah-ttl'),
            'kelas'             => $this->request->getVar('tambah-kelas'),
            'foto'              => $namaFoto,
            'input_oleh'        => session('id_pengajar'),
            'tgl_input'         => date("Y-m-d")
        ]);
        return redirect()->to('/data-santri');
    }
    public function updateSantri($id_santri)
    {
        $foto       = $this->request->getFile('ubah-formFile');
        if ($foto->getError() == 4) {
            $namaFoto = $this->request->getVar('ubah-formFoto');
        } else {
            $replace = $this->request->getVar('ubah-formFoto');
            if ($replace !== '') {
                unlink('./img/' . $replace);
            }
            $namaFoto   = $foto->getRandomName();
            $foto->move('img', $namaFoto);
        }

        // dd($this->request->getVar());

        $this->santriModel->save([
            'id_santri'         => $id_santri,
            'nama'              => $this->request->getVar('ubah-nama-lengkap'),
            'alamat'            => $this->request->getVar('ubah-alamat'),
            'wali'              => $this->request->getVar('ubah-nama-wali'),
            'tanggal_lahir'     => $this->request->getVar('ubah-ttl'),
            'kelas'             => $this->request->getVar('ubah-kelas'),
            'foto'              => $namaFoto
        ]);

        return redirect()->to('/data-santri');
    }
    public function deleteSantri($id_santri)
    {
        $data = $this->santriModel->find($id_santri);
        $dataHafalan = $this->hafalanModel->where(array('id_santri' => $id_santri))->get()->getResultArray();
        // dd($dataHafalan);
        if ($dataHafalan !== 0) {
            foreach ($dataHafalan as $h) :
                $this->hafalanModel->delete($h);
            endforeach;
        }
        if ($data['foto'] !== '') {
            unlink('./img/' . $data['foto']);
        }
        $this->santriModel->delete($id_santri);
        return redirect()->to('/data-santri');
    }
    public function dataPrestasi(): string
    {
        return view('data-Prestasi');
    }
    public function masterLogin(): string
    {
        return view('masterLogin');
    }
    public function loginMaster()
    {
        $username       = $this->request->getVar('username');
        $password       = $this->request->getVar('password');
        $cekUsername    = $this->masterModel->where(array('username' => $username))->where(array('password' => $password))->get()->getRowArray();
        if (isset($cekUsername)) {
            // dd($cekUsername);
            session()->remove('error');
            session()->set('usernameMaster', $cekUsername['username']);
            return redirect()->to('/masterDashboard');
        } else {
            session()->set('error', 'Password/Username yang anda masukkan salah');
            return redirect()->to('/masterLogin');
        }
    }
    public function masterDashboard(): string
    {
        $pengajar = $this->pengajarModel->findAll();
        $data = [
            'pengajar' => $pengajar
        ];
        return view('masterDashboard', $data);
    }
    public function addPengajar()
    {
        $password = password_hash($this->request->getVar('password-admin'), PASSWORD_DEFAULT);;
        $this->pengajarModel->save([
            'nama'      => $this->request->getVar('nama-admin'),
            'username'  => $this->request->getVar('username-admin'),
            'password'  => $password,
            'gelar'     => $this->request->getVar('gelar-admin')
        ]);

        return redirect()->to('/masterDashboard');
    }
    public function updatePengajar($id_pengajar)
    {
        $passwordBaru = $this->request->getVar('password-admin');
        if ($passwordBaru == '') {
            $setPassword = $this->request->getVar('password-admin-default');
        } else {
            $setPassword = password_hash($passwordBaru, PASSWORD_DEFAULT);
        }

        $this->pengajarModel->save([
            'id_pengajar'   => $id_pengajar,
            'nama'          => $this->request->getVar('nama-admin'),
            'username'      => $this->request->getVar('username-admin'),
            'password'      => $setPassword,
            'gelar'         => $this->request->getVar('gelar-admin')
        ]);

        return redirect()->to('/masterDashboard');
    }
    public function deletePengajar($id_pengajar)
    {
        $this->pengajarModel->delete($id_pengajar);
        return redirect()->to('/masterDashboard');
    }
    public function settingsUpdatePengajar($id_pengajar)
    {
        $foto = $this->request->getFile('tambah-formFile');
        if ($foto->getError() == 4) {
            $namaFoto = $this->request->getVar('ubah-formFoto');
        } else {
            $replace = $this->request->getVar('ubah-formFoto');
            if ($replace !== '') {
                unlink('./img/' . $replace);
            }
            $namaFoto   = $foto->getRandomName();
            $foto->move('img', $namaFoto);
            session()->set('foto', $namaFoto);
        }
        $newPassword = $this->request->getVar('new-password-admin');
        if ($newPassword !== '') {
            $changePassword = $newPassword;
        } else {
            $ambilData      = $this->pengajarModel->where(array('username' => session('username')))->get()->getRowArray();
            $changePassword = $ambilData['password'];
        }
        $this->pengajarModel->save([
            'id_pengajar'   => $id_pengajar,
            'nama'          => $this->request->getVar('nama-admin'),
            'username'      => $this->request->getVar('username-admin'),
            'password'      => $changePassword,
            'gelar'         => $this->request->getVar('gelar-admin'),
            'foto'          => $namaFoto
        ]);
        return redirect()->to('/settings');
    }
    public function deleteFoto()
    {
        unlink('./img/' . session('foto'));
        $this->pengajarModel->save([
            'id_pengajar'   => session('id_pengajar'),
            'foto'          => ''
        ]);
        session()->set('foto', '');
        return redirect()->to('/settings');
    }
}
