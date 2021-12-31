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
                                  <a href="<?= base_url('laporan/datapengembalian') ?>" class="btn btn-warning btn-flat btn-block"><i class="fas fa-sync-alt"></i> &nbsp;&nbsp;Refresh</a>
                              </div>
                              <div class="col-sm-2">
                                  <a href="<?= base_url('laporan/pdf_dapb') ?>" class="btn btn-danger btn-flat btn-block"><i class="far fa-file-pdf"></i> &nbsp;&nbsp;Cetak Laporan</a>
                              </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                              <table id="example2" class="table table-bordered table-striped">
                                  <thead>
                                      <tr>
                                          <th>No.</th>
                                          <th>ID Pengembalian</th>
                                          <th>ID Anggota</th>
                                          <th>Nama Peminjam</th>
                                          <th>Buku</th>
                                          <th>Tanggal Pinjam</th>
                                          <th>Tanggal Kembali</th>
                                          <th>Tanggal Dikembalikan</th>
                                          <th>Denda</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $no = 1;
                                        foreach ($datapengembalian as $row) { ?>
                                          <tr>
                                              <td><?= $no++ ?></td>
                                              <td><?= $row->id_pengembalian; ?></td>
                                              <td><?= $row->id_anggota; ?></td>
                                              <td><?= $row->name; ?></td>
                                              <td><?= $row->judul_buku; ?></td>
                                              <td><?= shortdate_indo($row->tgl_pinjam) ?></td>
                                              <td><?= shortdate_indo($row->tgl_kembali) ?></td>
                                              <td><?= shortdate_indo($row->tgl_kembalikan) ?></td>
                                              <td>
                                                  <?php
                                                    $tgl_kembali = new DateTime($row->tgl_kembali);
                                                    $tgl_kembalikan = new DateTime($row->tgl_kembalikan);
                                                    $selisih = $tgl_kembalikan->diff($tgl_kembali)->format("%a");
                                                    if ($tgl_kembali >= $tgl_kembalikan or $selisih == 0) {
                                                        echo "Tidak ada denda";
                                                    } else {
                                                        echo rp(1000 * $selisih);
                                                    }
                                                    ?>
                                              </td>
                                          </tr>
                                      <?php }
                                        ?>
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                          <th>No.</th>
                                          <th>ID Pengembalian</th>
                                          <th>ID Anggota</th>
                                          <th>Nama Peminjam</th>
                                          <th>Buku</th>
                                          <th>Tanggal Pinjam</th>
                                          <th>Tanggal Kembali</th>
                                          <th>Tanggal Dikembalikan</th>
                                          <th>Denda</th>
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