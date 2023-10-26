<style>
  .nama {
    text-align: left;
  }
</style>

<table>
  <tr>
    <td width="33.33%">
      <img width="120px" src="./dist/img/rumah-tahfidzQu.png" alt="Rumah TahfidzQu">
    </td>
    <td width="33.33%">
      <p style="font-weight: bold; font-size: 16px;">DATA PRESTASI HAFALAN SANTRI</p>
    </td>
  </tr>
</table>

<br>
<table width="100%">
  <tr>
    <?php if (!is_array($waktu)) { ?>
      <td width="33%">Bulan : <?= $waktu . ' ' . $tahun ?></td>
    <?php } else { ?>
      <td width="33%">Bulan : <?= $waktu[0] . ' - ' . $waktu[1] . ' ' . $tahun ?></td>
    <?php } ?>
    <td width="33%" style="text-align: center;">Rumah Tahfidz : Al - Khusna</td>
    <td width="33%" style="text-align: right;">NO : 27</td>
  </tr>
</table>
<br>

<table id="#" border="1" width="100%" style="border-collapse: collapse; text-align: center;">
  <thead>
    <tr>
      <th width="50px">NO</th>
      <th>Nama</th>
      <th width="100px">Ar Rahman</th>
      <th width="100px">Al Waaqi'ah</th>
      <th width="100px">Al Mulk</th>
      <th width="100px">Yaasin</th>
      <th width="100px">Juz 30</th>

      <!-- ? -->
      <th width="100px">Juz 29</th>
      <th width="100px">Juz 28</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;
    foreach ($santri as $s) {
      $p = $s['prestasi'];
      $arRahman  = $p['arRahman'];
      $alWaaqiah = $p['alWaaqiah'];
      $alMulk    = $p['alMulk'];
      $Yaasin    = $p['Yaasin'];
      $j = $p['Juz30']; ?>
      <tr>
        <td>
          <?= $i++; ?>
        </td>
        <td class="nama">
          <?= $s['nama']; ?>
        </td>
        <td>
          <?= ($arRahman['ayat_akhir'] === '78') ? "✓" : (($arRahman['ayat_akhir'] !== " ") ? $arRahman['ayat_akhir'] . " Ayat" : ''); ?>
        </td>
        <td>
          <?= ($alWaaqiah['ayat_akhir'] === '96') ? "✓" : (($alWaaqiah['ayat_akhir'] !== " ") ? $alWaaqiah['ayat_akhir'] . " Ayat" : ''); ?>
        </td>
        <td>
          <?= ($alMulk['ayat_akhir'] === '30') ? "✓" : (($alMulk['ayat_akhir'] !== " ") ? $alMulk['ayat_akhir'] . " Ayat" : ''); ?>
        </td>
        <td>
          <?= ($Yaasin['ayat_akhir'] === '83') ? "✓" : (($Yaasin['ayat_akhir'] !== " ") ? $Yaasin['ayat_akhir'] . " Ayat" : ''); ?>
        </td>
        <td>
          <?= $j['surat']; ?>
          <?= ($j['surat'] !== " ") ? ":" : " "; ?>
          <?= $j['ayat_akhir']; ?>
        </td>
        <td></td>
        <td></td>
      </tr>
    <?php } ?>
  </tbody>
  <!-- kurang hitungan centang -->

</table>