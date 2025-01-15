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
                                  <a href="<?= base_url('penerbit/addPN') ?>" class="btn btn-success btn-flat"><i class="fas fa-plus"></i> &nbsp;&nbsp;Tambah Penerbit</a>
                              </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                              <?= $this->session->flashdata('pesan'); ?>
                              <table id="example2" class="table table-bordered table-striped">
                                  <thead>
                                      <tr>
                                          <th>No.</th>
                                          <th>ID Penerbit</th>
                                          <th>Nama Penerbit</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $no = 1;
                                        foreach ($datapenerbit as $row) { ?>
                                          <tr>
                                              <td style="width:5%;"><?= $no++ ?></td>
                                              <td style="width:15%;"><?= $row->id_penerbit ?></td>
                                              <td><?= $row->nama_penerbit ?></td>
                                              <td style="width: 10%;">
                                                  <a href="<?= base_url() ?>penerbit/edit/<?= $row->id_penerbit; ?>" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="left" title="Edit"><i class="fas fa-edit"></i> Edit</a>
                                                  <a href="<?= base_url() ?>penerbit/hapus/<?= $row->id_penerbit; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin mau menghapus data penerbit ini?');" data-toggle="tooltip" data-placement="left" title="Hapus"><i class="fas fa-trash"></i> Hapus</a>
                                              </td>
                                          </tr>
                                      <?php }
                                        ?>
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                          <th>No.</th>
                                          <th>ID Penerbit</th>
                                          <th>Nama Penerbit</th>
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