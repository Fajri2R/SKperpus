    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1><?= $content ?></h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-6 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>Profil</h3>

                  <p style="visibility: hidden;">New Orders</p>
                </div>
                <div class="icon">
                  <i class="far fa-user"></i>
                </div>
                <a href="<?= base_url('profile') ?>" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>Daftar Buku</h3>

                  <p style="visibility: hidden;">Bounce Rate</p>
                </div>
                <div class="icon">
                  <i class="fas fa-book"></i>
                </div>
                <a href="<?= base_url('buku') ?>" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- START ACCORDION-->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">VISI, MISI, DAN TUJUAN SATUAN PENDIDIKAN SMK MUHAMMADIYAH KOTA JAMBI</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                  <div id="accordion">
                    <div class="card card-primary">
                      <div class="card-header">
                        <h4 class="card-title w-100">
                          <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                            VISI SATUAN PENDIDIKAN
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                          3
                          wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                          laborum
                          eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                          nulla
                          assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                          nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                          beer
                          farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                          labore sustainable VHS.
                        </div>
                      </div>
                    </div>
                    <div class="card card-warning">
                      <div class="card-header">
                        <h4 class="card-title w-100">
                          <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                            MISI SATUAN PENDIDIKAN
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                          3
                          wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                          laborum
                          eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                          nulla
                          assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                          nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                          beer
                          farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                          labore sustainable VHS.
                        </div>
                      </div>
                    </div>
                    <div class="card card-success">
                      <div class="card-header">
                        <h4 class="card-title w-100">
                          <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                            TUJUAN PENDIDIKAN
                          </a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                          3
                          wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                          laborum
                          eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                          nulla
                          assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                          nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                          beer
                          farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                          labore sustainable VHS.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <!-- END ACCORDION-->
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->