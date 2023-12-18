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
      <h3 class="hny-title mb-0 text-center"></h3>
      <div class="ecom-products-grids row mt-lg-2 mt-1">
        <div class="col-lg-12 col-12 mt-4">

          <br>
          <br>
          <?php foreach ($msg as $msg): ?>
          <h3 class="hny-title mb-0 text-center"><?= $msg; ?></h3>
          <?php endforeach; ?>

          <br>
          <br>
          <br>
          <br>
          <br>


        </div>
      </div>
    </div>
</section>

<?= $this->endSection(); ?>