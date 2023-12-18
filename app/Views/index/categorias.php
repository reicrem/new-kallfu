<?= $this->extend('layout/layout'); ?>

<?= $this->section('contenido'); ?>


<br>
<br>
<br>
<br>
<br>
<br>
<br>

</div>
</section>

<section class="w3l-ecommerce-main">
  <div class="ecom-contenthny py-2">
    <div class="container py-lg-2">
      <h3 class="hny-title mb-0 text-center"><?= $titulo; ?></h3>
      <div class="ecom-products-grids row mt-lg-2 mt-1">
        <?php foreach ($result as $result): ?>
        <div class="col-lg-3 col-6 product-incfhny mt-4">
          <div class="product-grid2 transmitv">
            <div class="product-image2">
              <a href="/articulo/<?= $result->id; ?>">
                <img class="pic-1 img-fluid" src="https://www.alfarorepuestos.cl/kallfu/<?= $result->imagen; ?>" />
                <img class="pic-2 img-fluid" src="https://www.alfarorepuestos.cl/kallfu/<?= $result->imagen; ?>" />
              </a>
              <ul class="social">
                <li>
                  <a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a>
                </li>
              </ul>
              <div class="transmitv single-item">
                <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart my-cart-btn my-cart-b"
                  data-id="<?= $result->id; ?>" data-name="<?= $result->descripcion; ?>" data-summary="summary 1"
                  data-price="<?= $result->precio; ?>" data-quantity="1"
                  data-image="https://www.alfarorepuestos.cl/kallfu/<?= $result->imagen; ?>">
                  Agregar
                </button>
              </div>
            </div>
            <div class="product-content">
              <h3 class="title"><a href="#"><?= $result->descripcion; ?></a></h3>
              <span class="price">$ <?= number_format($result->precio, 0, ',', '.');?> </span>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
    </div>
</section>

<?= $this->endSection(); ?>