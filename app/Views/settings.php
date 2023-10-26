<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Data Santri - Mohafidz - Monitoring Hafidz</title>

  <link rel="apple-touch-icon" sizes="57x57" href="./icons/apple-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="60x60" href="./icons/apple-icon-60x60.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="./icons/apple-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="./icons/apple-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="./icons/apple-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="./icons/apple-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="./icons/apple-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="./icons/apple-icon-152x152.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="./icons/apple-icon-180x180.png" />
  <link rel="icon" type="image/png" sizes="192x192" href="./icons/android-icon-192x192.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./icons/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="96x96" href="./icons/favicon-96x96.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./icons/favicon-16x16.png" />
  <link rel="manifest" href="./app.webmanifest" />
  <meta name="msapplication-TileColor" content="#3376b8" />
  <meta name="msapplication-TileImage" content="./icons/ms-icon-144x144.png" />
  <meta name="theme-color" content="#3376b8" />

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
          <a href="/logout">
            <img src="./dist/img/logo-text-mohafidz.svg" style="height: 2.8rem; width: auto" class="navbar-brand-image" alt="Mohafidz logo" />
          </a>
        </h1>

        <!-- ketika layar responsive/ukuran mobile -->
        <div class="navbar-nav flex-row d-lg-none">
          <div class="nav-item dropdown">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
              <span class="avatar avatar-sm" style="background-image: url(https://www.aquaknect.com.au/wp-content/uploads/2014/03/blank-person.jpg)"></span>
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
            <li class="nav-item py-2">
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
              <!-- FOTO PROFIL ATAS KANAN -->
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
        <div class="container container-narrow">
          <div class="row g-2 align-items-center">
            <div class="col">
              <h2 class="page-title">Settings</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- Page body -->
      <div class="page-body">
        <div class="container container-narrow">
          <div class="card">
            <form action="/settings/updatePengajar/<?= session('id_pengajar'); ?>" method="post" autocomplete="off" enctype="multipart/form-data">
              <div class="card-body">
                <h2 class="mb-4">My Account</h2>
                <h3 class="card-title">Foto Profile</h3>
                <div class="row align-items-center">
                  <div class="col-auto">
                    <?php if (session('foto') !== '') { ?>
                      <span class="avatar avatar-xl" style="background-image: url(<?php echo base_url('/img/' . session('foto'))  ?>)">
                        <img class="avatar avatar-xl" id="updateFoto" src="<?php echo base_url('/img/' . session('foto'))  ?>" style="object-fit:cover">
                      </span>
                    <?php } else { ?>
                      <span class="avatar avatar-xl" style="background-image: url(https://www.aquaknect.com.au/wp-content/uploads/2014/03/blank-person.jpg)">
                        <img class="avatar avatar-xl" id="updateFoto" src="https://www.aquaknect.com.au/wp-content/uploads/2014/03/blank-person.jpg" style="object-fit:cover">
                      </span>
                    <?php } ?>
                  </div>
                  <div class="col-auto">
                    <label for="fileInput" class="btn"> Ganti Foto
                      <input type="file" id="fileInput" class="d-none" name="tambah-formFile" accept="image/*" onchange="document.getElementById('updateFoto').src = window.URL.createObjectURL(this.files[0])" />
                      <input type="hidden" name="ubah-formFoto" value="<?= session('foto') ?>" />
                    </label>
                  </div>
                  <div class="col-auto"><a href="/settings/deleteFoto" onclick="return confirm('Apakah anda yakin akan menghapus Foto Profil ?');" class="btn btn-outline-danger"> Hapus Foto </a></div>
                </div>
                <div class="row g-3 mt-3">
                  <div class="col-md">
                    <label for="nama-admin" class="form-label">Nama</label>
                    <input type="text" id="nama-admin" class="form-control" name="nama-admin" value="<?php echo session('nama') ?>" />
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md">
                    <label for="username-admin" class="form-label">Username</label>
                    <input type="text" id="username-admin" class="form-control" name="username-admin" value="<?php echo session('username') ?>" />
                  </div>
                  <div class="col-md mt-3 mt-md-0">
                    <label for="gelar-admin" class="form-label">Gelar</label>
                    <select name="gelar-admin" id="gelar-admin" class="form-control">
                      <?php if (session('gelar') === 'Ustadz') { ?>
                        <option value="Ustadz">Ustadz</option>
                        <option value="Ustadzah">Ustadzah</option>
                      <?php } else { ?>
                        <option value="Ustadzah">Ustadzah</option>
                        <option value="Ustadz">Ustadz</option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <!-- tambahin lagi jika ada data yang perlu ditambah, seperti alamat, umur, dll -->
                <h3 class="card-title mt-4">Ganti Password</h3>
                <p class="card-subtitle">Jika lupa password lama, bisa di ganti di Master Dashboard</p>
                <?php if (null !== session('error')) { ?>
                  <div class="mb-3 text-center">
                    <label class="text-danger fs-5"><?php echo session('error') ?></label>
                  </div>
                <?php };
                session()->remove('error'); ?>
                <div class="row">
                  <div class="col-md-6">
                    <label for="inputPasswordLama" class="visually-hidden">Password Lama</label>
                    <input type="password" class="form-control" id="inputPasswordLama" name="password-admin" placeholder="Masukan Password Lama">
                  </div>
                  <div class="col-md-6 mt-2 mt-md-0">
                    <label for="inputPasswordBaru" class="visually-hidden">Password Baru</label>
                    <input type="password" class="form-control" id="inputPasswordBaru" name="new-password-admin" placeholder="Masukan Password Baru">
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent mt-auto">
                <div class="btn-list justify-content-end">
                  <a href="javascript:window.location.href=window.location.href" class="btn"> Cancel </a>
                  <button type="submit" class="btn btn-primary"> Submit </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

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