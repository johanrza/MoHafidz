<style>
  img {
    width: 80px;
    object-fit: contain;
  }

  tbody tr td {
    text-align: center;
  }
</style>

<htmlpageheader name="header">
  <table width="100%">
    <tr>
      <td>
        <h1>KARTU SETORAN TAHFIDZ</h1>
      </td>
      <td style="text-align: right;"><img src="./dist/img/rumah-tahfidz_conv.png" alt="Rumah Tahfidz"></td>
    </tr>

  </table>
  <br>
  <table width="100%">
    <tr>
      <td width="150px">NAMA SANTRI</td>
      <td width="20px">:</td>
      <td><?= strtoupper($data_santri['nama']); ?></td>
      <td rowspan="2" style="text-align: right;">
        <img src="./dist/img/ppa-darul-quran.png" alt="PPA Darul Quran">
      </td>
    </tr>
    <tr>
      <td width="150px">RUMAH TAHFIDZ</td>
      <td width="20px">:</td>
      <td>AL - KHUSNA NAMBERAN</td>
    </tr>
  </table>
</htmlpageheader>

<setpageheader name="header" value="ON" show-this-page="1" />

<table border="1" width="100%" style="border-collapse: collapse;">
  <thead>
    <tr>
      <th>NO</th>
      <th>TGL.</th>
      <th width="100px">SURAT</th>
      <th>AYAT</th>
      <th>KET (S)</th>
      <th>MUROJA'AH</th>
      <th>KET (M)</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;
    foreach ($data_hafalan as $h) {
      $selesai = 'error';
      if ($h['surat'] == 'Ar-Rahman') {
        $selesai = '78';
      }
      if ($h['surat'] == 'Al-Waaqi\'ah') {
        $selesai = '96';
      }
      if ($h['surat'] == 'Al-Mulk') {
        $selesai = '30';
      }
      if ($h['surat'] == 'Yaasin') {
        $selesai = '83';
      } ?>
      <tr>
        <td> <?= $i++ ?> </td>
        <td><?= $h['tanggal'] ?></td>
        <td><?= $h['surat'] ?></td>
        <td><?= $h['ayat_awal'] ?> - <?= ($h['ayat_akhir'] == 999) ? $selesai : $h['ayat_akhir'] ?></td>
        <td><?= $h['keterangan_s'] ?></td>
        <td><?= $h['murojaah'] ?></td>
        <td><?= $h['keterangan_m'] ?></td>
      </tr>
    <?php } ?>
  </tbody>

</table>