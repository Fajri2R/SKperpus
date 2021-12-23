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
                          <div class="card-body">
                              <?= $this->session->flashdata('pesan'); ?>
                              <table id="example2" class="table table-bordered table-striped">
                                  <thead>
                                      <tr>
                                          <th>No.</th>
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
                                        foreach ($datapb as $row) { ?>
                                          <tr>
                                              <td style="width:5%;"><?= $no++ ?></td>
                                              <td><?= $row->name; ?></td>
                                              <td><?= $row->judul_buku; ?></td>
                                              <td style="width: 10%;"><?= shortdate_indo($row->tgl_pinjam) ?></td>
                                              <td style="width: 10%;"><?= shortdate_indo($row->tgl_kembali) ?></td>
                                              <td style="width: 10%;"><?= shortdate_indo($row->tgl_kembalikan) ?></td>
                                              <td style="width: 10%;">
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