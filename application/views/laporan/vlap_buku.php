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
                          <div class="card-header row justify-content-end">
                              <div class="col-sm-2">
                                  <a href="<?= base_url('laporan/databuku') ?>" class="btn btn-warning btn-flat btn-block"><i class="fas fa-sync-alt"></i> &nbsp;&nbsp;Refresh</a>
                              </div>
                              <div class="col-sm-2">
                                  <a href="<?= base_url('laporan/pdf_dabk') ?>" class="btn btn-danger btn-flat btn-block"><i class="far fa-file-pdf"></i> &nbsp;&nbsp;Cetak Laporan</a>
                              </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                              <table id="example2" class="table table-bordered table-striped">
                                  <thead>
                                      <tr>
                                          <th>No.</th>
                                          <th>Nomor Induk</th>
                                          <th>Tanggal Terima</th>
                                          <th>Judul Buku</th>
                                          <th>Pengarang</th>
                                          <th>Penerbit</th>
                                          <th>Tahun Terbit</th>
                                          <th>Jumlah</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $no = 1;
                                        foreach ($databuku as $row) { ?>
                                          <tr>
                                              <td style="width: 5%;"><?= $no++ ?></td>
                                              <td><?= $row->nomor_induk ?></td>
                                              <td><?= slashdate_indo($row->tgl_terima) ?></td>
                                              <td><?= $row->judul_buku ?></td>
                                              <td><?= $row->nama_pengarang ?></td>
                                              <td><?= $row->nama_penerbit ?></td>
                                              <td><?= $row->tahun_terbit ?></td>
                                              <td><?= $row->jumlah ?></td>
                                          </tr>
                                      <?php }
                                        ?>
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                          <th>No.</th>
                                          <th>Nomor Induk</th>
                                          <th>Tanggal Terima</th>
                                          <th>Judul Buku</th>
                                          <th>Pengarang</th>
                                          <th>Penerbit</th>
                                          <th>Tahun Terbit</th>
                                          <th>Jumlah</th>
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