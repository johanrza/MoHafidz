<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mohafidz - Monitoring Hafidz</title>

  <link rel="apple-touch-icon" sizes="57x57" href="./icons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="./icons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="./icons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="./icons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="./icons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="./icons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="./icons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./icons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./icons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="./icons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="./icons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./icons/favicon-16x16.png">
  <link rel="manifest" href="./app.webmanifest">
  <meta name="msapplication-TileColor" content="#3376b8">
  <meta name="msapplication-TileImage" content="./icons/ms-icon-144x144.png">
  <meta name="theme-color" content="#3376b8">

  <!-- CSS files -->
  <link href="./dist/css/tabler.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./dist/css/libs/datatables/responsive.dataTables.min.css" />
  <link rel="stylesheet" href="./dist/css/libs/datatables/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="./dist/css/libs/sweetalert2/sweetalert2.min.css" />

  <style>
    @import url('https://rsms.me/inter/inter.css');

    :root {
      --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
    }

    body {
      font-feature-settings: 'cv03', 'cv04', 'cv11';
    }

    .container-ex.container {
      max-width: 1040px;
    }

    #data-santri img {
      object-fit: cover;
      height: 275px;
    }
  </style>
</head>

<body class="d-flex flex-column">
  <script src="./dist/js/demo-theme.min.js"></script>
  <div class="page page-center">
    <div class="container-ex container py-4">
      <div class="text-center mb-4">
        <a href="." class="navbar-brand navbar-brand-autodark">
          <img src="./dist/img/logo-text-mohafidz.svg" alt="Mohafidz" class="navbar-brand-image" style="height: 5rem; width: auto" />
        </a>
      </div>
      <div class="card card-md">
        <div class="card-body">
          <div class="text-center py-4 pb-sm-5 pt-sm-2">
            <img src="./dist/img/illustrations/undraw_sign_in_e6hj.svg" height="120" class="mb-2" alt="Mohafidz Logo" />
            <h1 class="mt-5">Selamat Datang di Mohafidz!</h1>
            <p class="text-secondary">
              Aplikasi Monitoring Hafalan Al-Qur'an (Tahfidz) <br />
              TPQ Al Khusna Namberan Gunungkidul
            </p>
          </div>
          <?php if (session('error') !== '') { ?>
            <div class="mb-3 text-center">
              <label class="text-danger fs-5"><?php echo session('error') ?></label>
            </div>
          <?php session()->remove('error');
          } ?>
          <form action="index/pencarian" method="post" autocomplete="off" enctype="multipart/form-data">
            <div class="input-group mb-3">
              <input type="text" class="form-control input-group-flat" placeholder="Masukan Nama Lengkap Santri" aria-label="Masukan Nama Lengkap Santri" aria-describedby="button-addon2" name="kata_kunci" />
              <button class="btn btn-primary" type="submit" id="button-addon2">
                <!-- search icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                  <path d="M21 21l-6 -6"></path>
                </svg>
              </button>
            </div>
          </form>
        </div>

        <!-- Ketika button diatas di klik, maka Menampilkan Data Santri Hasil Pencarian (kalo ketemu). Kode dibawah:-->
        <!-- ubah class dari "d-none" menjadi "d-block" untuk menampilkan data santri ketika berhasil ditemukan. Jika tidak ada, bisa tampilkan alert bahwa tidak ketemu (mis: sweetalert) -->
        <?php
        if (session('pencarian') !== null) {
          $data = session('pencarian');
          session()->remove('pencarian');
        ?>
          <div class="d-block">
          <?php } else {
          $data = [
            'foto'          => '',
            'nama'          => '',
            'alamat'        => '',
            'wali'          => '',
            'tanggal_lahir' => '',
            'kelas'         => ''
          ];
          ?>
            <div class="d-none">
            <?php } ?>
            <div class="hr-text hr-text-center hr-text-spaceless mb-3 fs-4">data santri</div>
            <div class="card-md">
              <div id="data-santri" class="card-body">
                <div class="mb-3">
                  <div class="row justify-content-center">
                    <div class="col-md-3 text-center">
                      <?php if ($data['foto'] !== '') { ?>
                        <img src="<?php echo base_url('/img/' . $data['foto'])  ?>" class="img-thumbnail" alt="Blank Person" />
                      <?php } else { ?>
                        <img src="https://www.aquaknect.com.au/wp-content/uploads/2014/03/blank-person.jpg" class="img-thumbnail" alt="Blank Person" />
                      <?php } ?>
                    </div>
                    <div class="col-md-4 mt-lg-3 mt-sm-5 mt-5">
                      <div class="mb-3">
                        <label class="form-label">Nama Lengkap Santri</label>
                        <input class="form-control" value="<?php echo $data['nama'] ?>" readonly />
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input class="form-control" value="<?php echo $data['alamat'] ?>" readonly />
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Nama Wali Santri</label>
                        <input class="form-control" value="<?php echo $data['wali'] ?>" readonly />
                      </div>
                    </div>
                    <div class="col-md-4 mt-lg-3 mt-sm-5">
                      <div class="mb-3">
                        <label class="form-label">Tempat dan Tanggal Lahir</label>
                        <input type="date" class="form-control" value="<?php echo $data['tanggal_lahir'] ?>" readonly />
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <input type="text" class="form-control" value="<?php echo $data['kelas'] ?>" readonly />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card card-md">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs ps-5" data-bs-toggle="tabs">
                  <li class="nav-item">
                    <a href="#tabs-4-surat" class="nav-link active" data-bs-toggle="tab">4 Surat</a>
                  </li>
                  <li class="nav-item">
                    <a href="#tabs-juz-30" class="nav-link" data-bs-toggle="tab">Juz 30</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane fade active show" id="tabs-4-surat">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4 class="m-0">4 Surat</h4>
                      <button class="btn btn-secondary">
                        <!-- download icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-download" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2"></path>
                          <path d="M7 11l5 5l5 -5"></path>
                          <path d="M12 4l0 12"></path>
                        </svg>
                        PDF
                      </button>
                    </div>

                    <!-- datatables -->
                    <div class="card">
                      <div class="card-body">
                        <div id="table-default" class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Surat</th>
                                <th>Ayat</th>
                                <th>Ket (S)</th>
                                <th>Muroja'ah</th>
                                <th>Ket (M)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>2023-07-20</td>
                                <td>Al-Fatihah</td>
                                <td>3</td>
                                <td>Lanjut</td>
                                <td>20 Juli 2023</td>
                                <td>Lanjut</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>2023-07-21</td>
                                <td>Al-Baqarah</td>
                                <td>255</td>
                                <td>Lanjut</td>
                                <td>21 Juli 2023</td>
                                <td>Lanjut</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Surat</th>
                                <th>Ayat</th>
                                <th>Ket (S)</th>
                                <th>Muroja'ah</th>
                                <th>Ket (M)</th>
                              </tr>
                            </tfoot>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tabs-juz-30">
                    <h4>Juz 30</h4>
                    <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <!-- akhir tampil data santri -->
          </div>

          <footer class="footer footer-transparent text-center pt-md-5 py-3">
            <div class="row align-items-center">
              <div class="col-md-auto order-md-last ms-auto">
                <a href="./login" class="btn btn-link link-secondary py-3">
                  <!-- login icon -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-login" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                    <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                  </svg>
                  Login as Admin
                </a>
              </div>
              <div class="col-md-auto me-auto mt-md-0 mt-5">
                <a href="https://janabadra.ac.id/" target="_blank">
                  <img src="./dist/img/logo_ujb.png" alt="Universitas Janabadra" width="150" />
                </a>
              </div>
              <div class="col-md-auto m-md-auto mt-5">
                <p class="m-0">Copyright &copy; 2023 - PKM-PM <a class="text-secondary" href="https://janabadra.ac.id/" target="_blank">Universitas Janabadra</a></p>
              </div>
            </div>
          </footer>
      </div>
    </div>
    <!-- Libs JS -->
    <script src="./dist/libs/jquery/jquery-3.7.0.js"></script>
    <script src="./dist/libs/datatables/jquery.dataTables.min.js"></script>
    <script src="./dist/libs/datatables/dataTables.responsive.min.js"></script>
    <script src="./dist/libs/datatables/dataTables.bootstrap5.min.js"></script>
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js" defer></script>
    <script src="./dist/js/demo.min.js" defer></script>
    <script src="./dist/libs/sweetalert2/sweetalert2.all.min.js"></script>
    <script>
      if (!navigator.onLine) {
        Swal.fire({
          icon: 'error',
          title: 'Anda sedang offline',
          text: 'Koneksi internet terputus. Harap periksa koneksi Anda.',
          confirmButtonText: 'Refresh',
        }).then((result) => {
          if (result.isConfirmed) {
            location.reload();
          }
        });
      }
    </script>
    <script>
      $(document).ready(function() {
        $('#table-default table').DataTable({
          searching: false,
          autoWidth: false,
          responsive: true,
          order: [
            [1, 'asc']
          ],
          pageLength: 15,
          lengthMenu: [15, 20, 25, 50],
        });
      });
    </script>
</body>

</html>