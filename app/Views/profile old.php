<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile - Mohafidz - Monitoring Hafidz</title>

  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('./icons/apple-icon-57x57.png'); ?>" />
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('./icons/apple-icon-60x60.png'); ?>" />
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('./icons/apple-icon-72x72.png'); ?>" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('./icons/apple-icon-76x76.png'); ?>" />
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('./icons/apple-icon-114x114.png'); ?>" />
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('./icons/apple-icon-120x120.png'); ?>" />
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('./icons/apple-icon-144x144.png'); ?>" />
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('./icons/apple-icon-152x152.png'); ?>" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('./icons/apple-icon-180x180.png'); ?>" />
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url('./icons/android-icon-192x192.png'); ?>" />
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('./icons/favicon-32x32.png'); ?>" />
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('./icons/favicon-96x96.png'); ?>" />
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('./icons/favicon-16x16.png'); ?>" />
  <link rel="manifest" href=<?php echo base_url('./app.webmanifest'); ?>" />
  <meta name="msapplication-TileColor" content="#3376b8" />
  <meta name="msapplication-TileImage" content="<?php echo base_url('./icons/ms-icon-144x144.png'); ?>" />
  <meta name="theme-color" content="#3376b8" />

  <!-- CSS files -->
  <link href="<?php echo base_url('./dist/css/tabler.min.css'); ?>" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url('./dist/css/libs/datatables/responsive.dataTables.min.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('./dist/css/libs/datatables/dataTables.bootstrap5.min.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('./dist/css/libs/sweetalert2/sweetalert2.min.css'); ?>" />

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

<body>
  <?php include 'login-check.php'; ?>
  <script src="<?php echo base_url('/dist/js/demo-theme.min.js'); ?>"></script>
  <div class="page">
    <!-- Sidebar -->
    <aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
          <a href=".">
            <img src="<?php echo base_url('./dist/img/logo-text-mohafidz.svg'); ?>" style="height: 2.8rem; width: auto" class="navbar-brand-image" alt="Mohafidz logo" />
          </a>
        </h1>

        <!-- ketika layar responsive/ukuran mobile -->
        <div class="navbar-nav flex-row d-lg-none">
          <div class="nav-item dropdown">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
              <?php if (session('foto') !== '') { ?>
                <span class="avatar avatar-sm" style="background-image: url(<?php echo base_url('/img/' . session('foto'))  ?>)"></span>
              <?php } else { ?>
                <span class="avatar avatar-sm" style="background-image: url(https://www.aquaknect.com.au/wp-content/uploads/2014/03/blank-person.jpg)"></span>
              <?php } ?>
              <div class="d-none d-xl-block ps-2">
                <div><?php echo session('nama') ?></div>
                <div class="mt-1 small text-secondary"><?php echo session('gelar') ?></div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                </svg>
                Dark Mode
              </a>
              <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                  <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                </svg>
                Light Mode
              </a>


              <a class="dropdown-item" href="<?= base_url('/settings'); ?>">Settings</a>
              <a class="dropdown-item" href="<?= base_url('/logout'); ?>">Logout</a>
            </div>
          </div>
        </div>
        <!-- end responsive -->

        <div class="collapse navbar-collapse" id="sidebar-menu">
          <ul class="navbar-nav pt-lg-3">
            <li class="nav-item py-2">
              <a class="nav-link" href="<?php echo base_url('./dashboard'); ?>">
                <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                  </svg>
                </span>
                <span class="nav-link-title"> Home </span>
              </a>
            </li>
            <li class="nav-item py-2">
              <a class="nav-link" href="<?php echo base_url('./data-santri'); ?>">
                <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- users -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                  </svg>
                </span>
                <span class="nav-link-title"> Data Santri </span>
              </a>
            </li>
            <li class="nav-item py-2">
              <a class="nav-link" href="<?php echo base_url('./data-prestasi'); ?>">
                <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- users -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                  </svg>
                </span>
                <span class="nav-link-title"> Data Prestasi </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </aside>
    <!-- Navbar -->
    <header class="navbar navbar-expand-md d-none d-lg-flex d-print-none">
      <div class="container-xl">
        <div class="navbar-nav w-100 justify-content-between">
          <div class="d-none d-md-flex me-5">
            <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
              <!-- icon moon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
              </svg>
              Dark Mode
            </a>
            <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
              <!-- icon sun -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
              </svg>
              Light Mode
            </a>
          </div>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
              <?php if (session('foto') !== '') { ?>
                <span class="avatar avatar-sm" style="background-image: url(<?php echo base_url('/img/' . session('foto'))  ?>)"></span>
              <?php } else { ?>
                <span class="avatar avatar-sm" style="background-image: url(https://www.aquaknect.com.au/wp-content/uploads/2014/03/blank-person.jpg)"></span>
              <?php } ?>
              <div class="d-none d-xl-block ps-2">
                <div><?php echo session('nama') ?></div>
                <div class="mt-1 small text-secondary"><?php echo session('gelar') ?></div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

              <a href="<?php echo base_url('./settings'); ?>" class="dropdown-item">Settings</a>
              <a href="<?php echo base_url('./logout'); ?>" class="dropdown-item">Logout</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="page-wrapper">
      <!-- Page header -->
      <div class="page-header d-print-none">
        <div class="container">
          <div class="row">
            <div class="col">
              <!-- Page pre-title -->
              <div class="page-pretitle">Overview</div>
              <h2 class="page-title">Profile Santri</h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
              <div class="btn-list">
                <div class="d-none d-lg-block">
                  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-edit-santri">
                    <!-- edit svg -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                      <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                      <path d="M16 5l3 3"></path>
                    </svg>
                    Ubah Profile
                  </button>
                  <a href="/profile/deleteProfile/<?= $santri['id_santri']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $santri['nama']; ?>')">
                    <!-- trash svg -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M4 7l16 0"></path>
                      <path d="M10 11l0 6"></path>
                      <path d="M14 11l0 6"></path>
                      <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                      <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                    </svg>
                    Hapus Profile
                  </a>
                </div>

                <!-- responsive button -->
                <div class="d-lg-none">
                  <button class="btn btn-primary" aria-label="Ubah Profile" data-bs-toggle="modal" data-bs-target="#modal-edit-santri">
                    <!-- edit svg -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit m-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                      <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                      <path d="M16 5l3 3"></path>
                    </svg>
                  </button>
                  <button class="btn btn-danger" aria-label="Hapus Profile">
                    <!-- trash svg -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash m-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M4 7l16 0"></path>
                      <path d="M10 11l0 6"></path>
                      <path d="M14 11l0 6"></path>
                      <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                      <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                    </svg>
                  </button>
                </div>
                <!-- end responsive button -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page body -->
      <div class="page-body">
        <div class="container-xl">
          <div class="card-md">
            <div id="data-santri" class="card-body">
              <div class="mb-3">
                <div class="row justify-content-center">
                  <div class="col-md-3 text-center">
                    <?php if ($santri['foto'] !== '') { ?>
                      <img src="<?php echo base_url('/img/' . $santri['foto'])  ?>" class="img-thumbnail" alt="Blank Person" />
                    <?php } else { ?>
                      <img src="https://www.aquaknect.com.au/wp-content/uploads/2014/03/blank-person.jpg" class="img-thumbnail" alt="Blank Person" />
                    <?php } ?>

                  </div>
                  <div class="col-md-4 mt-lg-3 mt-sm-5 mt-5">
                    <div class="mb-3">
                      <label class="form-label">Nama Lengkap Santri</label>
                      <input class="form-control" value="<?= $santri['nama'] ?>" readonly />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Alamat</label>
                      <input class="form-control" value="<?= $santri['alamat'] ?>" readonly />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Nama Wali Santri</label>
                      <input class="form-control" value="<?= $santri['wali'] ?>" readonly />
                    </div>
                  </div>
                  <div class="col-md-4 mt-lg-3 mt-sm-5">
                    <div class="mb-3">
                      <label class="form-label">Tempat dan Tanggal Lahir</label>
                      <input type="date" class="form-control" value="<?= $santri['tanggal_lahir'] ?>" readonly />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Kelas</label>
                      <input type="text" class="form-control" value="<?= $santri['kelas'] ?>" readonly />
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

                <!-- 4 surat -->
                <div class="tab-pane fade active show" id="tabs-4-surat">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="m-0">4 Surat</h4>
                    <div class="btn-list">
                      <button class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-hafalan-santri" aria-label="Tambah Data Hafalan">
                        <!-- plus icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M12 5l0 14" />
                          <path d="M5 12l14 0" />
                        </svg>
                        Tambah Data Hafalan
                      </button>
                      <button class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-hafalan-santri" aria-label="Tambah Data">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M12 5l0 14" />
                          <path d="M5 12l14 0" />
                        </svg>
                      </button>
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
                  </div>

                  <!-- datatables -->
                  <div class="card">
                    <div class="card-body">
                      <div id="table-default" class="table-responsive">
                        <table class="table table-vcenter table-nowrap">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Tanggal</th>
                              <th>Surat</th>
                              <th>Ayat</th>
                              <th>Ket (S)</th>
                              <th>Muroja'ah</th>
                              <th>Ket (M)</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $i = 1;
                            foreach ($empat_surat as $surat) :
                            ?>
                              <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $surat['tanggal'] ?></td>
                                <td><?= $surat['surat'] ?></td>
                                <td><?= $surat['ayat_awal'] ?> - <?= $surat['ayat_akhir'] ?></td>
                                <td><?= $surat['keterangan_s'] ?></td>
                                <td><?= $surat['murojaah'] ?></td>
                                <td><?= $surat['keterangan_m'] ?></td>
                                <td>
                                  <!-- responsive button -->
                                  <div class="btn-list">
                                    <button class="btn btn-primary btn-icon" aria-label="Ubah Hafalan" data-bs-toggle="modal" data-bs-target="#modal-hafalan-santri" data-edit-hafalan="true" data-user-id="XTY21312" data-id-hafalan="<?= $surat['id_4surat'] ?>" data-date="<?= $surat['tanggal'] ?>" data-surat="<?= $surat['surat'] ?>" data-ayat-awal="<?= $surat['ayat_awal'] ?>" data-ayat-akhir="<?= $surat['ayat_akhir'] ?>" data-ket-s="<?= $surat['keterangan_s'] ?>" data-murojaah="<?= $surat['murojaah'] ?>" data-ket-m="<?= $surat['keterangan_m'] ?>">
                                      <!-- edit svg -->
                                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                        <path d="M16 5l3 3"></path>
                                      </svg>
                                    </button>
                                    <a href="/profile/delete4Surat/<?= $surat['id_4surat']; ?>" class="btn btn-danger btn-icon" aria-label="Hapus Profile">
                                      <!-- trash svg -->
                                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7l16 0"></path>
                                        <path d="M10 11l0 6"></path>
                                        <path d="M14 11l0 6"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                      </svg>
                                    </a>
                                  </div>
                                  <!-- end responsive button -->
                                </td>
                              </tr>
                            <?php endforeach; ?>
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
                              <th>Aksi</th>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-- akhir datatables -->
                </div>
                <!-- akhir 4 surat -->

                <!-- juz 30 -->
                <div class="tab-pane fade" id="tabs-juz-30">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="m-0">Juz 30</h4>
                    <div class="btn-list">
                      <button class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-hafalan-santri" aria-label="Tambah Data Hafalan">
                        <!-- plus icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M12 5l0 14" />
                          <path d="M5 12l14 0" />
                        </svg>
                        Tambah Data Hafalan
                      </button>
                      <button class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-hafalan-santri" aria-label="Tambah Data">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M12 5l0 14" />
                          <path d="M5 12l14 0" />
                        </svg>
                      </button>
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
                  </div>

                  <!-- datatables -->
                  <div class="card">
                    <div class="card-body">
                      <div id="table-default" class="table-responsive">
                        <table class="table table-vcenter table-nowrap">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Tanggal</th>
                              <th>Surat</th>
                              <th>Ayat</th>
                              <th>Ket (S)</th>
                              <th>Muroja'ah</th>
                              <th>Ket (M)</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $j = 1;
                            foreach ($juz_30 as $juz) :
                            ?>
                              <tr>
                                <td><?= $j++; ?></td>
                                <td><?= $juz['tanggal'] ?></td>
                                <td><?= $juz['surat'] ?></td>
                                <td><?= $juz['ayat_awal'] ?> - <?= $juz['ayat_akhir'] ?></td>
                                <td><?= $juz['keterangan_s'] ?></td>
                                <td><?= $juz['murojaah'] ?></td>
                                <td><?= $juz['keterangan_m'] ?></td>
                                <td>
                                  <!-- responsive button -->
                                  <div class="btn-list">
                                    <button class="btn btn-primary btn-icon" aria-label="Ubah Hafalan" data-bs-toggle="modal" data-bs-target="#modal-hafalan-juz30-santri" data-edit-hafalan-juz="true" data-user-id="XTY21312" data-id-hafalanjuz="<?= $juz['id_juz30'] ?>" data-date="<?= $juz['tanggal'] ?>" data-surat="<?= $juz['surat'] ?>" data-ayat-awal="<?= $juz['ayat_awal'] ?>" data-ayat-akhir="<?= $juz['ayat_akhir'] ?>" data-ket-s="<?= $juz['keterangan_s'] ?>" data-murojaah="<?= $juz['murojaah'] ?>" data-ket-m="<?= $juz['keterangan_m'] ?>">
                                      <!-- edit svg -->
                                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                        <path d="M16 5l3 3"></path>
                                      </svg>
                                    </button>
                                    <a href="/profile/delete4Surat/<?= $juz['id_juz30'] ?>" class="btn btn-danger btn-icon" aria-label="Hapus Profile">
                                      <!-- trash svg -->
                                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7l16 0"></path>
                                        <path d="M10 11l0 6"></path>
                                        <path d="M14 11l0 6"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                      </svg>
                                    </a>
                                  </div>
                                  <!-- end responsive button -->
                                </td>
                              </tr>
                            <?php endforeach; ?>
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
                              <th>Aksi</th>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- akhir juz 30 -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- modal edit profile santri -->
      <div class="modal modal-blur fade" id="modal-edit-santri" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Ubah Data Santri</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/profile/updateProfile/<?= $santri['id_santri']; ?>" method="post" autocomplete="off" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="mb-3">
                  <div class="mb-3">
                    <label for="ubah-formFile" class="form-label">Foto Santri</label>
                    <input type="file" class="form-control" id="ubah-formFile" name="ubah-formFile" />
                    <input type="hidden" name="ubah-formFoto" value="<?= $santri['foto']; ?>" />
                  </div>
                  <label for="ubah-nama-lengkap" class="form-label">Nama Lengkap Santri</label>
                  <input type="text" class="form-control" id="ubah-nama-lengkap" name="ubah-nama-lengkap" value="<?= $santri['nama']; ?>" required />
                </div>
                <div class="mb-3">
                  <label for="ubah-alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="ubah-alamat" name="ubah-alamat" value="<?= $santri['alamat']; ?>" required />
                </div>
                <div class="mb-3">
                  <label for="ubah-nama-wali" class="form-label">Nama Wali Santri</label>
                  <input type="text" class="form-control" id="ubah-nama-wali" name="ubah-nama-wali" value="<?= $santri['wali']; ?>" required />
                </div>
                <div class="mb-3">
                  <label for="ubah-ttl" class="form-label">Tempat dan Tanggal Lahir</label>
                  <input type="date" class="form-control" id="ubah-ttl" name="ubah-ttl" value="<?= $santri['tanggal_lahir']; ?>" required />
                </div>
                <div class="mb-3">
                  <label for="ubah-kelas" class="form-label">Kelas</label>
                  <input type="text" class="form-control" id="ubah-kelas" name="ubah-kelas" value="<?= $santri['kelas']; ?>" required />
                </div>
              </div>
              <div class="modal-footer">
                <button type="reset" class="btn btn-link link-secondary" data-bs-dismiss="modal">Cancel</button>
                <button class="btn btn-primary ms-auto" type="submit" name="submit-ubah">
                  <!-- ubah svg -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                    <path d="M16 5l3 3"></path>
                  </svg>
                  Ubah profile santri
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- akhir modal edit  profile-->

      <!-- modal tambah/edit hafalan Surat santri -->
      <div class="modal modal-blur fade" id="modal-hafalan-santri" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 id="modal-title-hafalan" class="modal-title">Tambah Data Hafalan</h5>
              <small id="sub-modal-title-hafalan">4 Surat</small>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Karena <form> modal 'tambah data hafalan' dan 'edit data hafalan' dijadikan satu, maka terdapat 2 action <form>. Untuk 'tambah data hafalan' action-nya adalah tambah-hafalan.php dan untuk 'edit data hafalan' adalah edit-hafalan.php. Jika ingin dilakukan perubahan maka:-->
            <!-- 
                1. Untuk 'Tambah data hafalan':
                - ubah action yang ada di <form>
                - dan ubah formHafalan.action di tag script paling bawah (sudah di beri penanda komentar)

                2. Untuk 'Edit data hafalan':
                - cukup ubah formHafalan.action di tag script bagian 'edit hafalan' di bawah (sudah di beri penanda komentar)
              -->
            <form id="form-hafalan" action="/profile/add4Surat/<?= $santri['id_santri'] ?>" method="post" autocomplete="off" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="mb-3">
                  <label for="tanggal-hafalan" class="form-label">Tanggal</label>
                  <input type="date" class="form-control" id="tanggal-hafalan" name="tanggal-hafalan" required />
                </div>
                <div class="mb-3">
                  <label for="surat-hafalan" class="form-label">Surat</label>
                  <select id="surat-hafalan" class="form-select" aria-label="Pilih surat" name="surat-hafalan" required>
                    <option selected disabled hidden>Pilih Surat</option>
                    <option value="Ar-Rahman">Ar-Rahman</option>
                    <option value="Al-Waaqi'ah">Al-Waaqi'ah</option>
                    <option value="Al-Mulk">Al-Mulk</option>
                    <option value="Yaasin">Yaasin</option>
                  </select>
                </div>
                <div class="mb-3">
                  <div class="row">
                    <div class="col">
                      <label for="ayat-start-hafalan" class="form-label">Ayat Awal</label>
                      <select id="ayat-start-hafalan" class="form-select" aria-label="Pilih ayat awal" name="ayat-start-hafalan" required>
                        <option value="0" selected disabled>Pilih surat terlebih dahulu</option>
                      </select>
                    </div>
                    <div class="col-1 my-auto pt-4">
                      <span aria-label="sampai">—</span>
                    </div>
                    <div class="col">
                      <label for="ayat-start-hafalan" class="form-label">Ayat Akhir</label>
                      <select id="ayat-end-hafalan" class="form-select" aria-label="Pilih ayat akhir" name="ayat-end-hafalan" required>
                        <option value="0" selected disabled>Pilih surat terlebih dahulu</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="ket-s" class="form-label">Keterangan (S)</label>
                  <input type="text" class="form-control" id="ket-s" name="ket-s" required />
                </div>
                <div class="mb-3">
                  <label for="murojaah" class="form-label">Muroja'ah</label>
                  <input type="text" class="form-control" id="murojaah" name="murojaah" required />
                </div>
                <div class="mb-3">
                  <label for="ket-m" class="form-label">Keterangan (M)</label>
                  <input type="text" class="form-control" id="ket-m" name="ket-m" required />
                </div>
              </div>
              <div class="modal-footer">
                <button type="reset" class="btn btn-link link-secondary" data-bs-dismiss="modal">Cancel</button>
                <button id="submit-hafalan" class="btn btn-primary ms-auto" type="submit" name="submit-hafalan">
                  Tambah Hafalan
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- akhir modal/edit tambah hafalan -->

      <footer class="footer footer-transparent d-print-none">
        <div class="container-xl">
          <div class="row text-center align-items-center">
            <div class="col-12 col-lg-auto mt-3 mt-lg-0">
              <ul class="list-inline list-inline-dots mb-0">
                <li class="list-inline-item">
                  Copyright &copy; 2023 - PKM-PM
                  <a class="text-secondary" href="https://janabadra.ac.id/" target="_blank">Universitas Janabadra</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!-- Libs JS -->
  <script src="<?php echo base_url('./dist/libs/jquery/jquery-3.7.0.js'); ?>"></script>
  <script src="<?php echo base_url('./dist/libs/datatables/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?php echo base_url('./dist/libs/datatables/dataTables.responsive.min.js'); ?>"></script>
  <script src="<?php echo base_url('./dist/libs/datatables/dataTables.bootstrap5.min.js'); ?>"></script>
  <!-- Tabler Core -->
  <script src="<?php echo base_url('./dist/js/tabler.min.js'); ?>" defer></script>
  <script src="<?php echo base_url('./dist/js/demo.min.js'); ?>" defer></script>
  <script src="<?php echo base_url('./dist/libs/sweetalert2/sweetalert2.all.min.js'); ?>"></script>

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
          [1, 'desc']
        ],
        pageLength: 15,
        lengthMenu: [15, 20, 25, 50],
      });
    });
  </script>

  <!-- script untuk tambah hafalan santri -->
  <script>
    const fourSuratTab = document.querySelector("a[href='#tabs-4-surat']");
    const juz30Tab = document.querySelector("a[href='#tabs-juz-30']");
    const subModalTitle = document.querySelector('#sub-modal-title-hafalan');

    const nameSurat = document.querySelector('#surat-hafalan');
    const ayatStart = document.querySelector('#ayat-start-hafalan');
    const ayatEnd = document.querySelector('#ayat-end-hafalan');

    let totalVerses;

    nameSurat.addEventListener('change', () => {
      listJumlahAyatDanAyatAwal();
    });

    ayatStart.addEventListener('change', () => {
      tampilAyatAkhir();
    });

    fourSuratTab.addEventListener('click', () => {
      setSuratOption('4 Surat', ['Ar-Rahman', "Al-Waaqi'ah", 'Al-Mulk', 'Yaasin']);
    });

    juz30Tab.addEventListener('click', () => {
      setSuratOption('Juz 30', ['Al-Ikhlas', 'Al-Falaq', 'An-Nas']); // masukan nama surat juz 30 didalam array
    });

    const setSuratOption = (title, arrSurat) => {
      if (typeof title === 'string' && Array.isArray(arrSurat)) {
        defaultValueAyat();

        subModalTitle.innerHTML = title;
        nameSurat.innerHTML = '<option selected disabled hidden>Pilih Surat</option>';
        arrSurat.forEach((surat) => {
          nameSurat.innerHTML += `<option value="${surat}">${surat}</option>`;
        });
      }
    };

    const listJumlahAyatDanAyatAwal = () => {
      switch (nameSurat.value) {
        // 4 Surat disini
        case 'Ar-Rahman':
          totalVerses = 78;
          break;
        case "Al-Waaqi'ah":
          totalVerses = 96;
          break;
        case 'Al-Mulk':
          totalVerses = 30;
          break;
        case 'Yaasin':
          totalVerses = 83;
          break;

          // Juz 30 disini
        case 'Al-Ikhlas':
          totalVerses = 4;
          break;
        case 'Al-Falaq':
          totalVerses = 5;
          break;
        case 'An-Nas':
          totalVerses = 5;
          break;
          // dst

        default:
          totalVerses = 0;
          break;
      }

      ayatStart.innerHTML = '<option value="0" selected disabled>Pilih ayat awal...</option>';
      ayatEnd.innerHTML = '<option value="0" selected disabled>Pilih ayat awal dahulu...</option>';

      for (let i = 1; i <= totalVerses; i++) {
        const optionStart = document.createElement('option');
        optionStart.value = optionStart.textContent = i;
        ayatStart.appendChild(optionStart);
      }
    };

    const tampilAyatAkhir = () => {
      ayatEnd.innerHTML = '<option value="0" selected disabled>Pilih ayat akhir...</option>';

      for (let i = parseInt(ayatStart.value) || 1; i <= parseInt(ayatStart.lastChild.value); i++) {
        const optionEnd = document.createElement('option');
        optionEnd.value = optionEnd.textContent = i;
        ayatEnd.appendChild(optionEnd);
      }
    };

    const defaultValueAyat = () => {
      ayatStart.innerHTML = '<option value="0" selected disabled>Pilih surat terlebih dahulu</option>';
      ayatEnd.innerHTML = '<option value="0" selected disabled>Pilih surat terlebih dahulu</option>';
    };
  </script>

  <!-- script edit hafalan surat -->
  <script>
    const table = document.getElementById('table-default');
    const modalTitle = document.querySelector('#modal-title-hafalan');
    const formHafalan = document.querySelector('#form-hafalan');
    const btnSubmitHafalan = document.querySelector('#submit-hafalan');

    const handleEditClick = (event) => {
      const target = event.target;
      const isEditButton = target.closest('[data-edit-hafalan="true"]');
      if (isEditButton) {
        btnSubmitHafalan.innerHTML = 'Ubah Hafalan';

        // action edit data hafalan
        formHafalan.action = '/profile/update4Surat/' + isEditButton.dataset.idHafalan;

        modalTitle.innerHTML = 'Ubah Data Hafalan';

        // jika 'id' tidak ingin menggunakan 'angka' maka hapus 'Number'
        formHafalan.insertAdjacentHTML('afterbegin', `<input type="number" class="form-control" id="id-hafalan" name="id-hafalan" value="${Number(isEditButton.dataset.idHafalan)}" hidden />`);

        formHafalan.insertAdjacentHTML('afterbegin', `<input type="text" class="form-control" id="user-id-hafalan" name="user-id-hafalan" value="${isEditButton.dataset.userId}" hidden />`);

        document.querySelector('#tanggal-hafalan').value = isEditButton.dataset.date;

        document.querySelectorAll('#surat-hafalan option').forEach((item) => {
          if (item.value === isEditButton.dataset.surat) {
            item.selected = 'true';
            listJumlahAyatDanAyatAwal();
          }
        });

        document.querySelectorAll('#ayat-start-hafalan option').forEach((item) => {
          if (item.value === isEditButton.dataset.ayatAwal) {
            item.selected = 'true';
            tampilAyatAkhir();
          }
        });

        document.querySelectorAll('#ayat-end-hafalan option').forEach((item) => {
          if (item.value === isEditButton.dataset.ayatAkhir) {
            item.selected = 'true';
          }
        });

        document.querySelector('#ket-s').value = isEditButton.dataset.ketS;
        document.querySelector('#murojaah').value = isEditButton.dataset.murojaah;
        document.querySelector('#ket-m').value = isEditButton.dataset.ketM;
      } else {
        console.error('Terjadi bug edit di DOM. Atribut data-edit-hafalan tidak ada atau tidak bernilai true');
      }
    };

    table.addEventListener('click', handleEditClick);

    document.querySelector('#modal-hafalan-santri').addEventListener('hidden.bs.modal', () => {
      modalTitle.innerHTML = 'Tambah Data Hafalan';
      const idHafalan = document.querySelector('#id-hafalan');
      const idUserHafalan = document.querySelector('#user-id-hafalan');

      if (idHafalan && idUserHafalan) {
        idHafalan.remove();
        idUserHafalan.remove();
      }

      btnSubmitHafalan.innerHTML = 'Tambah Hafalan';
      formHafalan.reset();
      // action tambah data hafalan
      formHafalan.action = '/profile/add4Surat/<?= $santri['id_santri'] ?>';

      defaultValueAyat();
    });
  </script>
</body>

</html>