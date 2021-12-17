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
                  <?php
                    if (!empty($this->session->flashdata('pesan'))) { ?>
                      <div class="alert alert-success" role="alert"><?= $this->session->flashdata('pesan'); ?></div>
                  <?php }
                    ?>
                  <div class="col-12">
                      <div class="card card-primary card-outline card-outline-tabs">
                          <div class="card-header row">
                              <div class="col-sm-2">
                                  <a href="<?= base_url('admin/adduser') ?>" class="btn btn-success btn-flat" style="border-top: green;"><i class="fas fa-plus"></i>&nbsp; Tambah User</a>
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
                                                  <th>Aksi</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <?php
                                                $no = 1;
                                                foreach ($dataanggota as $row) { ?>
                                                  <tr>
                                                      <td style="width:5%;"><?= $no++ ?></td>
                                                      <td style="width:10%;"><?= $row->id_anggota ?></td>
                                                      <td><?= $row->name ?></td>
                                                      <td><?= $row->jenkel ?></td>
                                                      <td><?= $row->alamat ?></td>
                                                      <td><?= $row->no_hp ?></td>
                                                      <td>
                                                          <a href="<?= base_url() ?>admin/edit/<?= $row->id_anggota; ?>" class="btn btn-success btn-xs"><i class="fas fa-edit"></i> Edit</a>
                                                          <a href="<?= base_url() ?>admin/hapus/<?= $row->id_anggota; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin mau menghapus user ini?');"><i class="fas fa-trash"></i> Hapus</a>
                                                      </td>
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
                                                  <th>Aksi</th>
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
                                                  <th>Aksi</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <?php
                                                $no = 1;
                                                foreach ($dataadmin as $row) { ?>
                                                  <tr>
                                                      <td style="width:5%;"><?= $no++ ?></td>
                                                      <td style="width:10%;"><?= $row->id_anggota ?></td>
                                                      <td><?= $row->name ?></td>
                                                      <td><?= $row->jenkel ?></td>
                                                      <td><?= $row->alamat ?></td>
                                                      <td><?= $row->no_hp ?></td>
                                                      <td>
                                                          <a href="<?= base_url() ?>admin/edit/<?= $row->id_anggota; ?>" class="btn btn-success btn-xs"><i class="fas fa-edit"></i> Edit</a>
                                                          <a href="<?= base_url() ?>admin/hapus/<?= $row->id_anggota; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin mau menghapus user ini?');"><i class="fas fa-trash"></i> Hapus</a>
                                                      </td>
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
                                                  <th>Aksi</th>
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