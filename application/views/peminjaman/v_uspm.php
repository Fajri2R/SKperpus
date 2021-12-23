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
                                          <th>ID Peminjaman</th>
                                          <th>Nama Peminjam</th>
                                          <th>Buku</th>
                                          <th>Tanggal Pinjam</th>
                                          <th>Tanggal Kembali</th>
                                          <th>Status</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $no = 1;
                                        foreach ($datapm as $row) {
                                            $tgl_kembali = new DateTime($row->tgl_kembali);
                                            $tgl_sekarang = new DateTime();
                                            $selisih = $tgl_sekarang->diff($tgl_kembali)->format("%a");
                                        ?>
                                          <tr>
                                              <td style="width:5%;"><?= $no++ ?></td>
                                              <td style="width:10%;"><?= $row->id_peminjaman; ?></td>
                                              <td><?= $row->name; ?></td>
                                              <td><?= $row->judul_buku; ?></td>
                                              <td style="width: 15%;"><?= shortdate_indo($row->tgl_pinjam) ?></td>
                                              <td style="width: 15%;"><?= shortdate_indo($row->tgl_kembali) ?></td>
                                              <td style="width: 10%;">
                                                  <?php
                                                    if ($tgl_kembali >= $tgl_sekarang or $selisih == 0) {
                                                        echo "<span class='badge badge-warning'>Belum di Kembalikan</span>";
                                                    } else {
                                                        echo "Telat <b style = 'color:red;'>" . $selisih . "</b> Hari <br> <span class='label label-danger'> Denda Perhari = 1.000";
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
                                          <th>ID Peminjaman</th>
                                          <th>Nama Peminjam</th>
                                          <th>Buku</th>
                                          <th>Tanggal Pinjam</th>
                                          <th>Tanggal Kembali</th>
                                          <th>Status</th>
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