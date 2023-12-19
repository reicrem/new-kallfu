<!DOCTYPE html>
<html lang="es" class="body-full-height">

<head>
  <title>Kallfu ERP</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" type="text/css" id="theme" href="<?= base_url() ?>public/css/theme.css" />
</head>


<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="/"><b>Admin</b>LTE</a>
    </div>
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">
          <?php if(isset($mensaje)): ?>
          <?= $mensaje; ?>
          <?php endif ?>
        </p>
        <form action="<?php echo base_url();?>auth/login" method="post">
          <div class="input-group mb-3">

            <input type="text" class="form-control" placeholder="Usuario" name="usuario" id="usuario">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Contraseña" name="password" id="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
            </div>
          </div>
        </form>
        <p class="mb-1">
          <a href="forgot-password.html">Olvide mi contraseña</a>
        </p>
      </div>
    </div>
  </div>

</html>