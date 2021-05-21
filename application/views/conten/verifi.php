<!DOCTYPE html>
<html lang="en">

<head>
  <title>Verifikasi Member</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="<?= base_url('asset/login/images/icons/favicon.ico') ?>" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('asset/login/vendor/bootstrap/css/bootstrap.min.css') ?>">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('asset/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('asset/login/vendor/animate/animate.css') ?>">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('asset/login/vendor/css-hamburgers/hamburgers.min.css') ?>">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('asset/login/vendor/select2/select2.min.css') ?>">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('asset/login/css/util.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('asset/login/css/main.css') ?>">
  <!--===============================================================================================-->
</head>

<body>

  <div class="limiter">
    <div class="container-login100">

      <div class="card" style="border-radius: 28px;">
        <div class="col-sm-12 mt-3">
          <h1 class="card-title text-center"><b style="text-shadow: 2px 1px #818c84;">Verifikasi Sukses </b> <i class="fa fa-check text-success" aria-hidden="true" style="text-shadow: 2px 2px #818c84;"></i>
          </h1>
        </div>
      </div>

    </div>
  </div>

  <!--===============================================================================================-->
  <script src="<?= base_url('asset/login/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
  <!--===============================================================================================-->
  <script src="<?= base_url('asset/login/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
  <script src="<?= base_url('asset/login/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
  <!--===============================================================================================-->
  <script src="<?= base_url('asset/login/vendor/select2/select2.min.js') ?>"></script>
  <!--===============================================================================================-->
  <script src="<?= base_url('asset/login/vendor/tilt/tilt.jquery.min.js') ?>"></script>
  <script>
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
  <!--===============================================================================================-->
  <script src="<?= base_url('asset/login/js/main.js') ?>"></script>
  <script>
    function close_window() {
      if (confirm("Close Window?")) {
        self.close();
      }
    }
  </script>

</body>

</html>