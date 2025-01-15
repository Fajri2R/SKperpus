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
                              <table id="example2" class="table table-bordered table-striped nowrap">
                                  <thead>
                                      <tr>
                                          <th>No.</th>
                                          <th>ID Pengembalian</th>
                                          <th>ID & Nama Peminjam</th>
                                          <th>Buku</th>
                                          <th>Tanggal Pinjam / Kembali</th>
                                          <th>Tanggal Dikembalikan</th>
                                          <th>Denda</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        $no = 1;
                                        foreach ($datapb as $row) { ?>
                                          <tr>
                                              <td style="width:2%;"><?= $no++ ?></td>
                                              <td style="width:5%;"><?= $row->id_pengembalian; ?></td>
                                              <td>[<?= $row->id_anggota; ?>] <?= $row->name; ?></td>
                                              <td>[<?= $row->nomor_induk; ?>] <?= $row->judul_buku; ?></td>
                                              <td style="width: 8%;"><?= shortdate_indo($row->tgl_pinjam) ?> / <?= shortdate_indo($row->tgl_kembali) ?></td>
                                              <td style="width: 8%;"><?= shortdate_indo($row->tgl_kembalikan) ?></td>
                                              <td style="width: 10%;">
                                                  <?php
                                                    $tgl_kembali = new DateTime($row->tgl_kembali);
                                                    $tgl_kembalikan = new DateTime($row->tgl_kembalikan);
                                                    $selisih = $tgl_kembalikan->diff($tgl_kembali)->format("%a");
                                                    if ($tgl_kembali >= $tgl_kembalikan or $selisih == 0) {
                                                        echo "Tidak ada denda";
                                                    } else {
                                                        echo rp(500 * $selisih);
                                                    }
                                                    ?>
                                              </td>
                                              <td style="width:5%">
                                                  <a href="<?= base_url() ?>pengembalian/hapus/<?= $row->id_pengembalian; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin mau menghapus data pengembalian ini?');" data-toggle="tooltip" data-placement="left" title="Hapus"><i class="fa fa-trash"></i> Hapus</a>
                                              </td>
                                          </tr>
                                      <?php }
                                        ?>
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                          <th>No.</th>
                                          <th>ID Pengembalian</th>
                                          <th>ID & Nama Peminjam</th>
                                          <th>Buku</th>
                                          <th>Tanggal Pinjam / Kembali</th>
                                          <th>Tanggal Dikembalikan</th>
                                          <th>Denda</th>
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