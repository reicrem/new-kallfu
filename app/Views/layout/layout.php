<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kallfu</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/fontawesome-free/css/all.min.css" />
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <link rel="stylesheet" href="<?= base_url() ?>public/css/theme.css" />
</head>

<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
  <div class="wrapper">

    <?=  $this->include('layout/header'); ?>
    <?=  $this->include('layout/lateral'); ?>
    <?=  $this->renderSection('contenido'); ?>
    <?=  $this->include('layout/footer'); ?>

  </div>

  <script src="<?= base_url() ?>public/plugins/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>public/plugins/jquery-ui/jquery-ui.min.js"></script>
  <script>
    $.widget.bridge("uibutton", $.ui.button);
  </script>
  <script src="<?= base_url() ?>public/plugins/popper/popper.min.js"></script>
  <script src="<?= base_url() ?>public/plugins/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="<?= base_url() ?>public/js/adminlte.js"></script>
</body>

</html>