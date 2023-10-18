<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Mohafidz - Monitoring Hafidz</title>

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
  <script src="./dist/js/demo-theme.min.js?1685973381"></script>
  <div class="page page-center">
    <div class="container container-tight py-4">
      <div class="text-center mb-4">
        <a href="." class="navbar-brand navbar-brand-autodark">
          <img src="./dist/img/logo-text-mohafidz.svg" alt="Mohafidz" class="navbar-brand-image" style="height: 5rem; width: auto" />
        </a>
      </div>
      <div class="card card-md">
        <div class="card-body">
          <h2 class="h2 text-center mb-4">Akses Eksklusif untuk Pengajar</h2>
          <?php if (null !== session('error')) { ?>
            <div class="mb-3 text-center">
              <label class="text-danger fs-5"><?php echo session('error') ?></label>
            </div>
          <?php }
          session()->remove('error'); ?>
          <form action="/login/pengajar" method="post" autocomplete="off">
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" class="form-control" name="username" placeholder="" autocomplete="off" oninvalid="this.setCustomValidity('Masukan Username Anda')" oninput="this.setCustomValidity('')" value="" required />
            </div>
            <div class=" mb-2">
              <label class="form-label"> Password </label>
              <div class="input-group input-group-flat">
                <input type="password" class="form-control" name="password" placeholder="" autocomplete="off" oninvalid="this.setCustomValidity('Masukan Password Anda')" oninput="this.setCustomValidity('')" value="" required />
              </div>
            </div>
            <div class=" mt-4">
              <label class="form-check">
                <input type="checkbox" class="form-check-input" name="remember" />
                <span class="form-check-label">Ingat saya di perangkat ini</span>
              </label>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Sign in</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Libs JS -->
  <!-- Tabler Core -->
  <script src="./dist/js/tabler.min.js" defer></script>
  <script src="./dist/js/demo.min.js" defer></script>
</body>

</html>