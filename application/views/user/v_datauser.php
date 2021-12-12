  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1><?= $title ?></h1>
                  </div>
              </div>
          </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
                      <div class="card card-primary card-outline card-outline-tabs">
                          <div class="card-header">
                              <div class="col-md-2">
                                  <a href="" class="btn btn-success btn-block"><i class="fas fa-plus"></i> &nbsp;&nbsp;Tambah Pengarang</a>
                              </div>
                          </div>
                          <div class="card-header p-0 border-bottom-0">
                              <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                  <li class="nav-item">
                                      <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Data Anggota</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Data Admin</a>
                                  </li>
                              </ul>
                          </div>
                          <div class="card-body">
                              <div class="tab-content" id="custom-tabs-four-tabContent">
                                  <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                      <table id="example2" class="table table-bordered table-striped">
                                          <thead>
                                              <tr>
                                                  <th>No.</th>
                                                  <th>ID Anggota</th>
                                                  <th>Nama</th>
                                                  <th>Jenis Kelamin</th>
                                                  <th>Alamat</th>
                                                  <th>Nomor Whatsapp</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <?php
                                                $no = 1;
                                                foreach ($dataanggota as $row) { ?>
                                                  <tr>
                                                      <td><?= $no++ ?></td>
                                                      <td><?= $row->id_anggota ?></td>
                                                      <td><?= $row->name ?></td>
                                                      <td><?= $row->jenkel ?></td>
                                                      <td><?= $row->alamat ?></td>
                                                      <td><?= $row->no_hp ?></td>
                                                  </tr>
                                              <?php }
                                                ?>
                                          </tbody>
                                          <tfoot>
                                              <tr>
                                                  <th>No.</th>
                                                  <th>ID Anggota</th>
                                                  <th>Nama</th>
                                                  <th>Jenis Kelamin</th>
                                                  <th>Alamat</th>
                                                  <th>Nomor Whatsapp</th>
                                              </tr>
                                          </tfoot>
                                      </table>
                                  </div>
                                  <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                      <table id="example3" class="table table-bordered table-striped">
                                          <thead>
                                              <tr>
                                                  <th>No.</th>
                                                  <th>ID Anggota</th>
                                                  <th>Nama</th>
                                                  <th>Jenis Kelamin</th>
                                                  <th>Alamat</th>
                                                  <th>Nomor Whatsapp</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <?php
                                                $no = 1;
                                                foreach ($dataadmin as $row) { ?>
                                                  <tr>
                                                      <td><?= $no++ ?></td>
                                                      <td><?= $row->id_anggota ?></td>
                                                      <td><?= $row->name ?></td>
                                                      <td><?= $row->jenkel ?></td>
                                                      <td><?= $row->alamat ?></td>
                                                      <td><?= $row->no_hp ?></td>
                                                  </tr>
                                              <?php }
                                                ?>
                                          </tbody>
                                          <tfoot>
                                              <tr>
                                                  <th>No.</th>
                                                  <th>ID Anggota</th>
                                                  <th>Nama</th>
                                                  <th>Jenis Kelamin</th>
                                                  <th>Alamat</th>
                                                  <th>Nomor Whatsapp</th>
                                              </tr>
                                          </tfoot>
                                      </table>
                                  </div>
                              </div>
                          </div>
                          <!-- /.card -->
                      </div>
                  </div>
                  <!-- /.col -->
              </div>
              <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->