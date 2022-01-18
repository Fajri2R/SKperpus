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
                          <form class="card-header row justify-content-end" action="<?= base_url('laporan/datapeminjaman') ?>" method="POST">
                              <div class="col-sm-2">
                                  <h5 class="text-primary"><b>Filter Laporan Peminjaman</b></h5>
                              </div>
                              <div class="col-sm-2">
                                  <input type="text" name="tgl_awal" class="form-control" placeholder="Tanggal Pinjam" onfocus="(this.type='date')">
                              </div>
                              <div class="col-sm-2">
                                  <input type="text" name="tgl_akhir" class="form-control" placeholder="Tanggal Kembali" onfocus="(this.type='date')">
                              </div>
                              <div class="col-sm-2">
                                  <button type="submit" class="btn btn-primary btn-flat btn-block"><i class="fas fa-filter"></i> &nbsp;&nbsp;Filter</button>
                              </div>
                              <div class="col-sm-2">
                                  <a href="<?= base_url('laporan/datapeminjaman') ?>" class="btn btn-warning btn-flat btn-block"><i class="fas fa-sync-alt"></i> &nbsp;&nbsp;Refresh</a>
                              </div>
                              <div class="col-sm-2">
                                  <a href="<?= base_url('laporan/pdf_dapm') ?>" class="btn btn-danger btn-flat btn-block"><i class="far fa-file-pdf"></i> &nbsp;&nbsp;Cetak Laporan</a>
                              </div>
                          </form>
                          <!-- /.card-header -->
                          <div class="card-body">
                              <table id="example2" class="table table-bordered table-striped">
                                  <thead>
                                      <tr>
                                          <th>No.</th>
                                          <th>ID Peminjaman</th>
                                          <th>ID & Nama Peminjam</th>
                                          <th>Buku</th>
                                          <th>Tanggal Pinjam / Kembali</th>
                                          <th>Status</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $no = 1;
                                        foreach ($datapeminjaman as $row) {
                                            $tgl_kembali = new DateTime($row->tgl_kembali);
                                            $tgl_sekarang = new DateTime();
                                            $selisih = $tgl_sekarang->diff($tgl_kembali)->format("%a");
                                        ?>
                                          <tr>
                                              <td><?= $no++ ?></td>
                                              <td><?= $row->id_peminjaman; ?></td>
                                              <td>[<?= $row->id_anggota; ?>] <?= $row->name; ?></td>
                                              <td>[<?= $row->nomor_induk; ?>] <?= $row->judul_buku; ?></td>
                                              <td><?= shortdate_indo($row->tgl_pinjam) ?> / <?= shortdate_indo($row->tgl_kembali) ?></td>
                                              <td>
                                                  <?php
                                                    if ($tgl_kembali >= $tgl_sekarang or $selisih == 0) {
                                                        echo "<span class='badge badge-info'>Belum di Kembalikan</span>";
                                                    } else {
                                                        echo "Telat <b style = 'color:red;'>" . $selisih . "</b> Hari <br> <span class='badge badge-danger'> Denda Perhari = Rp. 500 </span>" . "<br> Atau sejumlah <br> " . rp($selisih * 500) . "";
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
                                          <th>ID & Nama Peminjam</th>
                                          <th>Buku</th>
                                          <th>Tanggal Pinjam / Kembali</th>
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