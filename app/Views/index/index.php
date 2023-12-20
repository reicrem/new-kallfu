<?= $this->extend('layout/layout'); ?>

<?= $this->section('contenido'); ?>

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-6">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>
                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Agenda</h3>
              <div class="card-tools">
                <a href="" class="btn btn-tool">
                  <i class="fas fa-plus-circle"></i>
                </a>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="timeline">
                <div class="time-label">
                  <span class="bg-red">10 Feb. 2014</span>
                </div>
                <div>
                  <i class="fas fa-envelope bg-blue"></i>
                  <div class="timeline-item">
                    <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                    <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
                  </div>
                </div>
                <div>
                  <i class="fas fa-user bg-green"></i>
                  <div class="timeline-item">
                    <span class="time"><i class="fas fa-clock"></i> 5 mins ago</span>
                    <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                    </h3>
                  </div>
                </div>
                <div>
                  <i class="fas fa-comments bg-yellow"></i>
                  <div class="timeline-item">
                    <span class="time"><i class="fas fa-clock"></i> 27 mins ago</span>
                    <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
                  </div>
                </div>
                <div class="time-label">
                  <span class="bg-green">3 Jan. 2014</span>
                </div>
                <div>
                  <i class="fas fa-comments bg-yellow"></i>
                  <div class="timeline-item">
                    <span class="time"><i class="fas fa-clock"></i> 27 mins ago</span>
                    <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
                  </div>
                </div>
                <div>
                  <i class="fas fa-clock bg-gray"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


<?= $this->endSection(); ?>