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
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-header row">
                              <div class="col-sm-2">
                                  <a href="" class="btn btn-success btn-flat"><i class="fas fa-plus"></i> &nbsp;&nbsp;Tambah Pengarang</a>
                              </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                              <table id="example2" class="table table-bordered table-striped">
                                  <thead>
                                      <tr>
                                          <th>No.</th>
                                          <th>ID Pengarang</th>
                                          <th>Nama Pengarang</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $no = 1;
                                        foreach ($datapengarang as $row) { ?>
                                          <tr>
                                              <td style="width:5%;"><?= $no++ ?></td>
                                              <td style="width:10%;"><?= $row->id_pengarang ?></td>
                                              <td><?= $row->name ?></td>
                                              <td>
                                                  <a href="<?= base_url() ?>pengarang/edit/<?= $row->id_pengarang; ?>" class="btn btn-success btn-xs"><i class="fas fa-edit"></i> Edit</a>
                                                  <a href="<?= base_url() ?>pengarang/hapus/<?= $row->id_pengarang; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin mau menghapus user ini?');"><i class="fas fa-trash"></i> Hapus</a>
                                              </td>
                                          </tr>
                                      <?php }
                                        ?>
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                          <th>No.</th>
                                          <th>ID Pengarang</th>
                                          <th>Nama Pengarang</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </tfoot>
                              </table>
                          </div>
                          <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
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