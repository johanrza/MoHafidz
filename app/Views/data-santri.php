<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Data Santri - Mohafidz - Monitoring Hafidz</title>

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
  </style>
</head>

<body>
  <?php include 'login-check.php'; ?>
  <script src="./dist/js/demo-theme.min.js"></script>
  <div class="page">
    <!-- Sidebar -->
    <aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
          <a href=".">
            <img src="./dist/img/logo-text-mohafidz.svg" style="height: 2.8rem; width: auto" class="navbar-brand-image" alt="Mohafidz logo" />
          </a>
        </h1>

        <!-- ketika layar responsive/ukuran mobile -->
        <div class="navbar-nav flex-row d-lg-none">
          <div class="nav-item dropdown">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
              <?php if (session('foto') !== '') { ?>
                <span class="avatar avatar-sm" style="background-image: url(<?php echo base_url('/img/' . session('foto')) ?>)"></span>
              <?php } else { ?>
                <span class="avatar avatar-sm" style="background-image: url(https://www.aquaknect.com.au/wp-content/uploads/2014/03/blank-person.jpg)"></span>
              <?php } ?>
              <div class="d-none d-xl-block ps-2">
                <div>
                  <?php echo session('nama') ?>
                </div>
                <div class="mt-1 small text-secondary">
                  <?php echo session('gelar') ?>
                </div>
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

              <a href="#" class="dropdown-item">Status</a>
              <a href="#" class="dropdown-item">Feedback</a>
              <div class="dropdown-divider"></div>
              <a href="./settings" class="dropdown-item">Settings</a>
              <a href="/logout" class="dropdown-item">Logout</a>
            </div>
          </div>
        </div>
        <!-- end responsive -->

        <div class="collapse navbar-collapse" id="sidebar-menu">
          <ul class="navbar-nav pt-lg-3">
            <li class="nav-item py-2">
              <a class="nav-link" href="./dashboard">
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
            <li class="nav-item py-2 active">
              <a class="nav-link" href="./data-santri">
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
              <a class="nav-link" href="./data-prestasi">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- users -->
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
                <span class="avatar avatar-sm" style="background-image: url(<?php echo base_url('/img/' . session('foto')) ?>)"></span>
              <?php } else { ?>
                <span class="avatar avatar-sm" style="background-image: url(https://www.aquaknect.com.au/wp-content/uploads/2014/03/blank-person.jpg)"></span>
              <?php } ?>
              <div class="d-none d-xl-block ps-2">
                <div>
                  <?php echo session('nama') ?>
                </div>
                <div class="mt-1 small text-secondary">
                  <?php echo session('gelar') ?>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <a href="#" class="dropdown-item">Status</a>
              <a href="#" class="dropdown-item">Feedback</a>
              <div class="dropdown-divider"></div>
              <a href="./settings" class="dropdown-item">Settings</a>
              <a href="/logout" class="dropdown-item">Logout</a>
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
              <h2 class="page-title">Data Santri</h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
              <div class="btn-list">
                <button class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-add-santri">
                  <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 5l0 14" />
                    <path d="M5 12l14 0" />
                  </svg>
                  Tambah Santri
                </button>
                <button class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-add-santri">
                  <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 5l0 14" />
                    <path d="M5 12l14 0" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- datatables -->
      <div class="container mt-5">
        <div class="card">
          <div class="card-body">
            <div id="table-default" class="table-responsive">
              <table class="table table-vcenter table-nowrap">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Diinputkan oleh</th>
                    <th>Diinputkan pada tanggal</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  foreach ($santri as $s) :
                  ?>
                    <tr>
                      <td>
                        <?= $i++; ?>
                      </td>
                      <td><a href="/profile/<?= $s['id_santri'] ?>" class="link-body-emphasis link-offset-2 link-underline-opacity-75 link-underline-opacity-75-hover">
                          <?= $s['nama']; ?>
                        </a></td>
                      <td>
                        <?= $s['kelas']; ?>
                      </td>
                      <td><span class="badge badge-outline text-teal">
                          <?= $s['input_oleh']; ?>
                        </span></td>
                      <td>
                        <?= $s['tgl_input']; ?>
                      </td>
                      <td>
                        <div class="d-none d-lg-block">
                          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-edit-santri-<?= $s['id_santri']; ?>">
                            <!-- edit svg -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                              <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                              <path d="M16 5l3 3"></path>
                            </svg>
                            Ubah
                          </button>
                          <a href="/data-santri/deleteSantri/<?= $s['id_santri']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $s['nama']; ?>')">
                            <!-- trash svg -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M4 7l16 0"></path>
                              <path d="M10 11l0 6"></path>
                              <path d="M14 11l0 6"></path>
                              <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                              <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                            </svg>
                            Hapus
                          </a>
                          </button>
                        </div>

                        <!-- responsive button -->
                        <div class="d-lg-none">
                          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-edit-santri-<?= $s['id_santri']; ?>">
                            <!-- edit svg -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit m-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                              <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                              <path d="M16 5l3 3"></path>
                            </svg>
                          </button>
                          <button class="btn btn-danger">
                            <a href="/data-santri/deleteSantri/<?= $s['id_santri']; ?>" style="all : unset;" onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $s['nama']; ?>')">
                              <!-- trash svg -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash m-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 7l16 0"></path>
                                <path d="M10 11l0 6"></path>
                                <path d="M14 11l0 6"></path>
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                              </svg>
                            </a>
                          </button>
                        </div>
                        <!-- end responsive button -->
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Diinputkan oleh</th>
                    <th>Diinputkan pada tanggal</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir data santri (datatables) -->

      <!-- modal tambah santri -->
      <div class="modal modal-blur fade" id="modal-add-santri" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Tambah Data Santri</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/data-santri/addSantri" method="post" autocomplete="off" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="mb-3">
                  <div class="mb-3">
                    <label for="tambah-formFile" class="form-label">Foto Santri</label>
                    <input type="file" class="form-control" id="tambah-formFile" name="tambah-formFile" />
                    <input type="hidden" name="ubah-formFoto" value="" />
                  </div>
                  <label for="tambah-nama-lengkap" class="form-label">Nama Lengkap Santri</label>
                  <input type="text" class="form-control" id="tambah-nama-lengkap" name="tambah-nama-lengkap" required />
                </div>
                <div class="mb-3">
                  <label for="tambah-alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="tambah-alamat" name="tambah-alamat" required />
                </div>
                <div class="mb-3">
                  <label for="tambah-nama-wali" class="form-label">Nama Wali Santri</label>
                  <input type="text" class="form-control" id="tambah-nama-wali" name="tambah-nama-wali" required />
                </div>
                <div class="mb-3">
                  <label for="tambah-ttl" class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="tambah-ttl" name="tambah-ttl" required />
                </div>
                <div class="mb-3">
                  <label for="tambah-kelas" class="form-label">Kelas</label>
                  <input type="text" class="form-control" id="tambah-kelas" name="tambah-kelas" required />
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-link link-secondary" data-bs-dismiss="modal">Cancel</button>
                <button class="btn btn-primary ms-auto" type="submit" name="submit-tambah">
                  <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 5l0 14" />
                    <path d="M5 12l14 0" />
                  </svg>
                  Tambah
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- akhir modal tambah santri -->

      <!-- modal edit santri -->
      <?php foreach ($santri as $s) : ?>
        <div class="modal modal-blur fade" id="modal-edit-santri-<?= $s['id_santri']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Ubah Data Santri</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="/data-santri/updateSantri/<?= $s['id_santri']; ?>" method="post" autocomplete="off" enctype="multipart/form-data">
                <div class="modal-body">
                  <div class="mb-3">
                    <div class="mb-3">
                      <div class="row align-items-center">
                        <label for="ubah-formFile" class="form-label">Foto Santri</label>
                        <div class="col-auto">
                          <?php if ($s['foto'] !== '') { ?>
                            <span>
                              <img class="avatar avatar-xl" id="gantiFoto-<?= $s['id_santri']; ?>" src="<?php echo base_url('/img/' . $s['foto']) ?>" style="object-fit: contain;">
                            </span>
                          <?php } else { ?>
                            <span>
                              <img class="avatar avatar-xl" id="gantiFoto-<?= $s['id_santri']; ?>" src="https://www.aquaknect.com.au/wp-content/uploads/2014/03/blank-person.jpg" style="object-fit: contain;">
                            </span>
                          <?php } ?>


                          <!-- kalo ga ada fotonya pakai blank picture -->
                          <!-- <span class="avatar avatar-xl"
                              style="background-image: url(https://www.aquaknect.com.au/wp-content/uploads/2014/03/blank-person.jpg)">
                              <img class="avatar avatar-xl" id="gantiFoto"
                                src="https://www.aquaknect.com.au/wp-content/uploads/2014/03/blank-person.jpg"
                                style="object-fit:cover">
                            </span> -->
                        </div>
                        <div class="col-auto">
                          <label for="fileInput-<?= $s['id_santri']; ?>" class="btn"> Ganti Foto
                            <input type="file" id="fileInput-<?= $s['id_santri']; ?>" class="d-none" name="ubah-formFile" accept="image/*" onchange="document.getElementById('gantiFoto-<?= $s['id_santri']; ?>').src = window.URL.createObjectURL(this.files[0])" />
                            <input type="hidden" name="ubah-formFoto" value="<?= $s['foto']; ?>" />
                          </label>
                        </div>
                        <div class="col-auto mt-2">
                          <a href="/data-santri/deleteFotoSantri/<?= $s['id_santri']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus Foto Santri ?');" class="btn btn-outline-danger">
                            Hapus Foto
                          </a>
                        </div>
                      </div>
                      <!-- yang lama -->
                      <!-- <input type="file" class="form-control" id="ubah-formFile" name="ubah-formFile" />
                      <input type="hidden" name="ubah-formFoto" value="" /> -->
                    </div>
                    <label for="ubah-nama-lengkap" class="form-label">Nama Lengkap Santri</label>
                    <input type="text" class="form-control" id="ubah-nama-lengkap" name="ubah-nama-lengkap" value="<?= $s['nama']; ?>" required />
                  </div>
                  <div class="mb-3">
                    <label for="ubah-alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="ubah-alamat" name="ubah-alamat" value="<?= $s['alamat']; ?>" required />
                  </div>
                  <div class="mb-3">
                    <label for="ubah-nama-wali" class="form-label">Nama Wali Santri</label>
                    <input type="text" class="form-control" id="ubah-nama-wali" name="ubah-nama-wali" value="<?= $s['wali']; ?>" required />
                  </div>
                  <div class="mb-3">
                    <label for="ubah-ttl" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="ubah-ttl" name="ubah-ttl" value="<?= $s['tanggal_lahir']; ?>" required />
                  </div>
                  <div class="mb-3">
                    <label for="ubah-kelas" class="form-label">Kelas</label>
                    <input type="text" class="form-control" id="ubah-kelas" name="ubah-kelas" value="<?= $s['kelas']; ?>" required />
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-link link-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button class="btn btn-primary ms-auto" type="submit" name="submit-ubah">
                    <!-- ubah svg -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                      <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                      <path d="M16 5l3 3"></path>
                    </svg>
                    Ubah
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      <!-- akhir modal edit -->

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
        searching: true, // data santri, true
        autoWidth: false,
        responsive: true,
        pageLength: 15,
        lengthMenu: [15, 20, 25, 50],
      });
    });
  </script>
</body>

</html>