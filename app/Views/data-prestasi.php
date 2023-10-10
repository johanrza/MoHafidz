<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Data Prestasi - Mohafidz - Monitoring Hafidz</title>

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
            <li class="nav-item py-2 active">
              <a class="nav-link" href="./data-prestasi">
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
              <h2 class="page-title">Data Prestasi</h2>
            </div>
          </div>
        </div>
      </div>

      <!-- datatables -->
      <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="d-flex">
            <input type="date" class="form-control" id="tanggalAwal" />
            <p class="my-auto mx-4">sampai</p>
            <input type="date" class="form-control" id="tanggalAkhir" disabled />
            <button class="btn btn-primary ms-3" id="tampilkan" disabled>Tampilkan</button>
          </div>
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
        <div class="card">
          <div class="card-body">
            <div id="table-default" class="table-responsive">
              <table class="table table-vcenter table-nowrap">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Ar-Rahman</th>
                    <th>Al-Waaqi'ah</th>
                    <th>Al-Mulk</th>
                    <th>Yaasin</th>
                    <th>Juz 30</th>
                    <th>Juz 29</th>
                    <th>Juz 28</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Budi Satria</td>
                    <td>✓</td>
                    <td>✓</td>
                    <td>✓</td>
                    <td>✓</td>
                    <td>Al-Fajr:12</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Bekka Hani</td>
                    <td>✓</td>
                    <td>✓</td>
                    <td>✓</td>
                    <td>✓</td>
                    <td>Al-Qori'ah:11</td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <th class="text-center" colspan="2">Jumlah</th>
                    <th>2</th>
                    <th>2</th>
                    <th>2</th>
                    <th>2</th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir data santri -->

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
        searching: true, // data prestasi, true
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
  <script>
    const tanggalAwal = document.getElementById('tanggalAwal');
    const tanggalAkhir = document.getElementById('tanggalAkhir');
    const tampilkan = document.getElementById('tampilkan');

    tanggalAwal.addEventListener('change', () => {
      tanggalAkhir.min = tanggalAwal.value;
      if (tanggalAwal.value === '') {
        tanggalAkhir.disabled = true;
        tampilkan.disabled = true;
      } else {
        tanggalAkhir.disabled = false;
        tampilkan.disabled = false;
      }
    });
  </script>
</body>

</html>