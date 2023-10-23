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
    <td width="33%">Bulan : Mei 2023</td>
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
    <?php for ($i = 1; $i <= 100; $i++): ?>
      <tr>
        <td>
          <?= $i ?>
        </td>
        <td class="nama">Beka Hani Suseno</td>
        <td>✓</td>
        <td>83 Ayat</td>
        <td></td>
        <td></td>
        <td>Al-Balad: 6</td>
        <td></td>
        <td></td>
      </tr>
      <?php $i++ ?>
      <tr>
        <td>
          <?= $i ?>
        </td>
        <td class="nama">Dwi Aditya</td>
        <td>✓</td>
        <td>40 Ayat</td>
        <td>✓</td>
        <td>58 Ayat</td>
        <td>Al-Fajr: 26</td>
        <td></td>
        <td></td>
      </tr>
    <?php endfor; ?>
  </tbody>

</table>