<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Alfaro Repuestos</title>
  <link rel="shortcut icon" type="image/png" href="/logo4.png">

  <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet" />


  <link rel="stylesheet" href="<?= base_url() ?>public/css/style.css" />
</head>

<body>

  <?=  $this->include('layout/header'); ?>
  <?=  $this->renderSection('contenido'); ?>
  <?=  $this->include('layout/footer'); ?>


  <div class="modal fade" id="checkout-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel"><span class="fa fa-shopping-cart"></span> Carro de Compras</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">

          <div class="row">
            <div class="col-lg-5 col-5 product-incfhny mt-1">
              <h4>Compra Sin Registro</h4>
              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="cemail" name="cemail" placeholder="Confirma tu Email"
                    required="">
                </div>
              </form>
            </div>
            <div class="col-lg-7 col-7 product-incfhny mt-1">
              <h4>Pedido</h4>
              <table class="table table-responsive">
                <thead>
                  <tr>
                    <th>Cantidad</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody id="ddta">
                </tbody>
              </table>
            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="rett()">Comprar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="retiro-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel"><span class="fa fa-shopping-cart"></span> Carro de Compras</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="<?= base_url('envia') ?>" method="post" id="fretiro" name="fretiro">
          <div class="modal-body">

            <div class="row">
              <div class="col-lg-6 col-6 product-incfhny mt-1">
                <h4>Datos de Qui&eacute;n Retira</h4>
                <div class="form-group">
                  <input type="email" class="form-control" id="emailr" name="emailr" readonly>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="rut" name="rut" placeholder="RUT">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="telef" name="telef" placeholder="Telefono">
                </div>
                <h5 class="text-center"><b>M&eacute;todos de pago</b></h5>
                <br>
                <div class="form-group">
                  <input type="radio" id="rdo02" name="rdo01" value="2" checked>
                  <label for="rdo01">Pago en Tienda</label>
                </div>
                <br>
              </div>
              <div class="col-lg-6 col-6 product-incfhny mt-1">
                <h4>Pedido</h4>
                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th>Cantidad</th>
                      <th>Producto</th>
                      <th>Precio</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody id="mddta">
                  </tbody>
                </table>
              </div>
              <input hidden id="deta" name="deta" type="text" value="">
              <div class="clearfix"> </div>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="envia()">Comprar</button>
          </div>

        </form>
      </div>
    </div>
  </div>

</body>




</html>


<script src="<?= base_url() ?>public/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url() ?>public/js/jquery-2.1.4.min.js"></script>
<script src="<?= base_url() ?>public/js/jquery.magnific-popup.js"></script>
<script src="<?= base_url() ?>public/js/bootstrap.min.js"></script>

<script src="<?= base_url() ?>public/js/jquery.mycart.js"></script>
<script src="<?= base_url() ?>public/js/shop.js"></script>