<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Master Dashboard - Mohafidz - Monitoring Hafidz</title>
  <!-- CSS files -->
  <link href="./dist/css/tabler.min.css" rel="stylesheet" />

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

<body class="d-flex flex-column">
  <?php include 'login-master-check.php'; ?>
  <script src="./dist/js/demo-theme.min.js?1685973381"></script>
  <div class="page">
    <div class="container container-narrow py-4">
      <div class="text-center mb-4">
        <a href="/logout" class="navbar-brand navbar-brand-autodark">
          <img src="./dist/img/logo-text-mohafidz.svg" alt="Mohafidz" class="navbar-brand-image" style="height: 5rem; width: auto" />
        </a>
      </div>
      <div class="card card-md">
        <div class="table-responsive">
          <table class="table table-vcenter card-table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Gelar</th>
                <th>
                  <!-- svg user-plus -->
                  <div class="d-flex justify-content-end">
                    <button class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#tambah-user">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                        <path d="M16 19h6"></path>
                        <path d="M19 16v6"></path>
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
                      </svg>
                    </button>
                  </div>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 1;
              foreach ($pengajar as $p) :
              ?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><?= $p['nama']; ?></td>
                  <td class="text-secondary"><?= $p['username']; ?></td>
                  <td class="text-secondary"><?= $p['gelar']; ?></td>
                  <td>
                    <div class="d-flex justify-content-center">
                      <button class="btn btn-primary btn-sm p-2" data-bs-toggle="modal" data-bs-target="#ubah-user-<?= $p['id_pengajar']; ?>">Edit</button>
                      <a href="/masterDashboard/deletePengajar/<?= $p['id_pengajar']; ?>" class="btn btn-danger btn-sm ms-2 p-2" onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $p['nama']; ?>')">Hapus</a>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- modal tambah user -->
    <div class="modal modal-blur fade" id="tambah-user" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Ustadz/Ustadzah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="/masterDashboard/addPengajar" method="post" autocomplete="off" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="modal-body">
              <div class="mb-3">
                <label for="nama-admin" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama-admin" name="nama-admin" required />
              </div>
              <div class="mb-3">
                <label for="username-admin" class="form-label">Username</label>
                <input type="text" class="form-control" id="username-admin" name="username-admin" required />
              </div>
              <div class="mb-3">
                <label for="password-admin" class="form-label">Password</label>
                <input type="password" class="form-control" id="password-admin" name="password-admin" required />
              </div>
              <div>
                <label for="gelar-admin" class="form-label">Gelar</label>
                <select class="form-select" id="gelar-admin" name="gelar-admin" required>
                  <option value="" hidden selected>Pilih Gelar</option>
                  <option value="Ustadz">Ustadz</option>
                  <option value="Ustadzah">Ustadzah</option>
                </select>
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
                Tambah
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- akhir modal tambah -->


    <!-- modal edit user -->
    <?php foreach ($pengajar as $p) : ?>
      <div class="modal modal-blur fade" id="ubah-user-<?= $p['id_pengajar']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Ubah Data Ustadz/Ustadzah</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/masterDashboard/updatePengajar/<?= $p['id_pengajar']; ?>" method="post" autocomplete="off" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="mb-3">
                  <label for="nama-admin" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama-admin" name="nama-admin" value="<?= $p['nama']; ?>" required />
                </div>
                <div class="mb-3">
                  <label for="username-admin" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username-admin" name="username-admin" value="<?= $p['username']; ?>" required />
                </div>
                <div class="mb-3">
                  <label for="password-admin" class="form-label">Password Baru</label>
                  <input type="text" class="form-control" id="password-admin" name="password-admin" placeholder="Masukkan Password Baru" />
                  <input type="hidden" name="password-admin-default" value="<?= $p['password']; ?>" required />
                </div>
                <div>
                  <label for="gelar-admin" class="form-label">Gelar</label>
                  <select class="form-select" id="gelar-admin" name="gelar-admin" required>
                    <option value="<?= $p['gelar']; ?>" hidden selected><?= $p['gelar']; ?></option>
                    <?php if ($p['gelar'] === "Ustadz") { ?>
                      <option value="Ustadzah">Ustadzah</option>
                    <?php } else { ?>
                      <option value="Ustadz">Ustadz</option>
                    <?php } ?>
                  </select>
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


  </div>
  <!-- Libs JS -->
  <!-- Tabler Core -->
  <script src="./dist/js/tabler.min.js" defer></script>
  <script src="./dist/js/demo.min.js" defer></script>
</body>

</html>