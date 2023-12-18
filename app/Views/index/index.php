<?= $this->extend('layout/layout'); ?>

<?= $this->section('contenido'); ?>


<div class="bannerhny-content">
  <!--/banner-slider-->
  <div class="content-baner-inf">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="carousel-caption">
              <a href="#" class="shop-button btn"> Ver </a>
            </div>
          </div>
        </div>
        <div class="carousel-item item2">
          <div class="container">
            <div class="carousel-caption">
              <a href="#" class="shop-button btn"> Ver </a>
            </div>
          </div>
        </div>
        <div class="carousel-item item3">
          <div class="container">
            <div class="carousel-caption">
              <a href="#" class="shop-button btn"> Ver </a>
            </div>
          </div>
        </div>
        <div class="carousel-item item4">
          <div class="container">
            <div class="carousel-caption">
              <a href="#" class="shop-button btn"> Ver </a>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
</div>
</section>

<section class="features-4">
  <div class="features4-block py-1">
    <div class="container py-lg-1">
      <div class="features4-grids text-center row mt-1">
        <div class="col-lg-4 col-md-6 grids5-info column-img" id="zoomIn">
          <a href="<?= base_url('/baterias') ?>">
            <figure>
              <img class="img-fluid2" src="<?= base_url()?>public/images/bg1.jpg" alt="blog-image" />
            </figure>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 grids5-info column-img" id="zoomIn">
          <a href="<?= base_url('/compras') ?>">
            <figure>
              <img class="img-fluid2" src="<?= base_url()?>public/images/bg2.jpg" alt="blog-image" />
            </figure>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 grids5-info column-img" id="zoomIn">
          <figure>
            <img class="img-fluid2" src="<?= base_url()?>public/images/bg3.jpg" alt="blog-image" />
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="w3l-ecommerce-main">
  <div class="ecom-contenthny py-2">
    <div class="container py-lg-2">
      <h3 class="hny-title mb-0 text-center">O<span>fertas</span></h3>
      <!-- /row-->
      <div class="ecom-products-grids row mt-lg-2 mt-1">
        <?php foreach ($ofertas as $oferta): ?>
        <div class="col-lg-3 col-6 product-incfhny mt-4">
          <div class="product-grid2 transmitv">
            <div class="product-image2">
              <a href="/articulo/<?= $oferta->id; ?>">
                <img class="pic-1 img-fluid" src="https://www.alfarorepuestos.cl/kallfu/<?= $oferta->imagen; ?>" />
                <img class="pic-2 img-fluid" src="https://www.alfarorepuestos.cl/kallfu/<?= $oferta->imagen; ?>" />
              </a>
              <ul class="social">
                <li>
                  <a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a>
                </li>
              </ul>
              <div class="transmitv single-item">
                <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart my-cart-btn my-cart-b"
                  data-id="<?= $oferta->id; ?>" data-name="<?= $oferta->descripcion; ?>" data-summary="summary 1"
                  data-price="<?= $oferta->precio; ?>" data-quantity="1"
                  data-image="https://www.alfarorepuestos.cl/kallfu/<?= $oferta->imagen; ?>">
                  Agregar
                </button>
              </div>
            </div>
            <div class="product-content">
              <h3 class="title"><a href="#"><?= $oferta->descripcion; ?></a></h3>
              <span class="price">$ <?= number_format($oferta->precio, 0, ',', '.');?></span>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
</section>

<section class="w3l-content-w-photo-6">
  <div class="content-photo-6-mian py-2">
    <div class="container py-lg-3">
      <div class="align-photo-6-inf-cols row">
        <div class="photo-6-inf-right col-lg-6">
          <h3 class="hny-title-wh text-left">Cotiza y encarga tus Respuestos, <span>Nosotros lo gestionamos por
              Ti</span></h3>
          <a href="#" class="read-more btn">Cotizar</a>
        </div>
        <div class="photo-6-inf-left col-lg-6">
          <img src="<?= base_url()?>public/images/1.jpg" class="img-fluid" alt="" />
        </div>
      </div>
    </div>
  </div>
</section>

<section class="w3l-customers-sec-6">
  <div class="customers-sec-6-cintent py-2">
    <div class="container py-lg-5">
      <h3 class="hny-title text-center mb-0">Productos <span>Destacados</span></h3>
      <div class="row customerhny my-lg-5 my-4">
        <div class="col-md-12">
          <div id="customerhnyCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#customerhnyCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#customerhnyCarousel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-4">
                    <div class="customer-info text-center">
                      <div class="feedback-hny">
                        <div class="col-lg-12 col-12 product-incfhny mt-4">
                          <div class="product-grid2">
                            <div class="product-image2">
                              <a href="#">
                                <img class="pic-1 img-fluid" src="<?= base_url()?>public/images/shop1.jpg" />
                                <img class="pic-2 img-fluid" src="<?= base_url()?>public/images/shop1.jpg" />
                              </a>
                              <ul class="social">
                                <li>
                                  <a href="#" data-tip="Ver"><span class="fa fa-eye"></span></a>
                                </li>
                                <li>
                                  <a href="#" data-tip="Comprar"><span class="fa fa-shopping-bag"></span></a>
                                </li>
                              </ul>
                              <button type="submit"
                                class="transmitv-cart ptransmitv-cart add-to-cart my-cart-btn my-cart-b" data-id="1966"
                                data-name="Aceite 10W40 <br> mobil Super 2000" data-summary="summary 1"
                                data-price="24500" data-quantity="1"
                                data-image="<?= base_url()?>public/images/shop1.jpg">
                                Agregar
                              </button>
                            </div>
                            <div class="product-content">
                              <h3 class="title"><a href="#">Aceite 10W40 <br> mobil Super 2000</a></h3>
                              <span class="price">$ 24.500</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="customer-info text-center">
                      <div class="feedback-hny">
                        <div class="col-lg-12 col-12 product-incfhny mt-4">
                          <div class="product-grid2">
                            <div class="product-image2">
                              <a href="#">
                                <img class="pic-1 img-fluid" src="<?= base_url()?>public/images/shop2.jpg" />
                                <img class="pic-2 img-fluid" src="<?= base_url()?>public/images/shop2.jpg" />
                              </a>
                              <ul class="social">
                                <li>
                                  <a href="#" data-tip="Ver"><span class="fa fa-eye"></span></a>
                                </li>
                                <li>
                                  <a href="#" data-tip="Comprar"><span class="fa fa-shopping-bag"></span></a>
                                </li>
                              </ul>
                              <button type="submit"
                                class="transmitv-cart ptransmitv-cart add-to-cart my-cart-btn my-cart-b" data-id="1966"
                                data-name="Aceite 10W40 mobil" data-summary="summary 1" data-price="16000"
                                data-quantity="1" data-image="<?= base_url()?>public/images/shop2.jpg">
                                Agregar
                              </button>
                            </div>
                            <div class="product-content">
                              <h3 class="title"><a href="#">Aceite 10W40 <br> mobil</a></h3>
                              <span class="price">$ 16.000</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="customer-info text-center">
                      <div class="feedback-hny">
                        <div class="col-lg-12 col-12 product-incfhny mt-4">
                          <div class="product-grid2">
                            <div class="product-image2">
                              <a href="#">
                                <img class="pic-1 img-fluid" src="<?= base_url()?>public/images/shop3.jpg" />
                                <img class="pic-2 img-fluid" src="<?= base_url()?>public/images/shop3.jpg" />
                              </a>
                              <ul class="social">
                                <li>
                                  <a href="#" data-tip="Ver"><span class="fa fa-eye"></span></a>
                                </li>
                                <li>
                                  <a href="#" data-tip="Comprar"><span class="fa fa-shopping-bag"></span></a>
                                </li>
                              </ul>
                              <button type="submit"
                                class="transmitv-cart ptransmitv-cart add-to-cart my-cart-btn my-cart-b" data-id="1966"
                                data-name="Aceite 5W30 mobil" data-summary="summary 1" data-price="38000"
                                data-quantity="1" data-image="<?= base_url()?>public/images/shop3.jpg">
                                Agregar
                              </button>
                            </div>
                            <div class="product-content">
                              <h3 class="title"><a href="#">Aceite 5W30 <br> mobil</a></h3>
                              <span class="price">$ 38.000</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-4">
                    <div class="customer-info text-center">
                      <div class="feedback-hny">
                        <div class="col-lg-12 col-12 product-incfhny mt-4">
                          <div class="product-grid2">
                            <div class="product-image2">
                              <a href="#">
                                <img class="pic-1 img-fluid" src="<?= base_url()?>public/images/shop4.jpg" />
                                <img class="pic-2 img-fluid" src="<?= base_url()?>public/images/shop4.jpg" />
                              </a>
                              <ul class="social">
                                <li>
                                  <a href="#" data-tip="Ver"><span class="fa fa-eye"></span></a>
                                </li>
                                <li>
                                  <a href="#" data-tip="Comprar"><span class="fa fa-shopping-bag"></span></a>
                                </li>
                              </ul>
                              <button type="submit"
                                class="transmitv-cart ptransmitv-cart add-to-cart my-cart-btn my-cart-b" data-id="1966"
                                data-name="Refrigerante Prestone 33%" data-summary="summary 1" data-price="12500"
                                data-quantity="1" data-image="<?= base_url()?>public/images/shop4.jpg">
                                Agregar
                              </button>
                            </div>
                            <div class="product-content">
                              <h3 class="title"><a href="#">Refrigerante Prestone <br> 33%</a></h3>
                              <span class="price">$ 12.500</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="customer-info text-center">
                      <div class="feedback-hny">
                        <div class="col-lg-12 col-12 product-incfhny mt-4">
                          <div class="product-grid2">
                            <div class="product-image2">
                              <a href="#">
                                <img class="pic-1 img-fluid" src="<?= base_url()?>public/images/shop5.jpg" />
                                <img class="pic-2 img-fluid" src="<?= base_url()?>public/images/shop5.jpg" />
                              </a>
                              <ul class="social">
                                <li>
                                  <a href="#" data-tip="Ver"><span class="fa fa-eye"></span></a>
                                </li>
                                <li>
                                  <a href="#" data-tip="Comprar"><span class="fa fa-shopping-bag"></span></a>
                                </li>
                              </ul>
                              <button type="submit"
                                class="transmitv-cart ptransmitv-cart add-to-cart my-cart-btn my-cart-b" data-id="1966"
                                data-name="Refrigerante Prestone 50/50 Rosado" data-summary="summary 1"
                                data-price="15000" data-quantity="1"
                                data-image="<?= base_url()?>public/images/shop5.jpg">
                                Agregar
                              </button>
                            </div>
                            <div class="product-content">
                              <h3 class="title"><a href="#">Refrigerante Prestone 50/50 Rosado</a></h3>
                              <span class="price">$ 15.000</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>