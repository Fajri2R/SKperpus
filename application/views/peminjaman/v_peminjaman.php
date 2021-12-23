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
                                  <a href="<?= base_url('peminjaman/addPM') ?>" class="btn btn-success btn-flat"><i class="fas fa-plus"></i> &nbsp;&nbsp;Tambah Peminjaman</a>
                              </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                              <?= $this->session->flashdata('pesan'); ?>
                              <table id="example2" class="table table-bordered table-striped">
                                  <thead>
                                      <tr>
                                          <th>No.</th>
                                          <th>ID Peminjaman</th>
                                          <th>ID Anggota</th>
                                          <th>Nama Peminjam</th>
                                          <th>Buku</th>
                                          <th>Tanggal Pinjam</th>
                                          <th>Tanggal Kembali</th>
                                          <th>Status</th>
                                          <th>Nomor Whatsapp</th>
                                          <th>Aksi</th>
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
                                              <td style="width:2%;"><?= $no++ ?></td>
                                              <td style="width:5%;"><?= $row->id_peminjaman; ?></td>
                                              <td style="width:5%;"><?= $row->id_anggota; ?></td>
                                              <td><?= $row->name; ?></td>
                                              <td><?= $row->judul_buku; ?></td>
                                              <td style="width: 8%;"><?= shortdate_indo($row->tgl_pinjam) ?></td>
                                              <td style="width: 8%;"><?= shortdate_indo($row->tgl_kembali) ?></td>
                                              <td style="width: 4%;">
                                                  <?php
                                                    if ($tgl_kembali >= $tgl_sekarang or $selisih == 0) {
                                                        echo "<span class='badge badge-info'>Belum di Kembalikan</span>";
                                                    } else {
                                                        echo "Telat <b style = 'color:red;'>" . $selisih . "</b> Hari <br> <span class='badge badge-danger'> Denda Perhari = Rp. 1.000 </span>" . "<br> Atau sejumlah <br> " . rp($selisih * 1000) . "";
                                                    }
                                                    ?>
                                              </td>
                                              <td style="width: 5%;"><?= hp($row->no_hp); ?></td>
                                              <?php
                                                date_default_timezone_set("Asia/Bangkok");
                                                $waktu = date("H");
                                                if ($waktu < "12") {
                                                    $salam = "pagi";
                                                } elseif ($waktu >= "12" && $waktu < "17") {
                                                    $salam = "siang";
                                                } elseif ($waktu >= "17" && $waktu < "19") {
                                                    $salam = "sore";
                                                } elseif ($waktu >= "19") {
                                                    $salam = "malam";
                                                }
                                                $nomor = hp($row->no_hp);
                                                $jdlbuku = ($row->judul_buku);
                                                $e1 = '%20%F0%9F%98%81%0A%0A';
                                                $e2 = '%20%F0%9F%A5%BA.';
                                                $e3 = '%20%F0%9F%99%8F%2C';
                                                $pesanreal = '&text=' . 'Halo selamat ' . $salam . $e1 . 'Ini dari perpustakaan, ingin mengingatkan bahwa waktu pinjam buku berjudul ' . $jdlbuku . ' telah habis' . $e2 . ' Mohon segera dikembalikan' . $e3 . ' terima kasih';
                                                $penutup = '%0A%0ASalam hangat dari Petugas Perpustakaan%20%F0%9F%98%89';
                                                if ($this->agent->is_mobile()) $linkWA = 'https://api.whatsapp.com/send?phone=' . $nomor . $pesanreal . $penutup;
                                                // tapi kalau desktop pakai web.whatsapp.com
                                                else $linkWA = 'https://web.whatsapp.com/send?phone=' . $nomor . $pesanreal . $penutup;
                                                ?>
                                              <td style="width:8%">
                                                  <a href="<?php echo $linkWA ?>" target="_blank" class="btn btn-success btn-xs" onclick="return confirm('Kirim notifikasi pengembalian buku ke anggota ini?');"><i class="fab fa-whatsapp"></i> Notifikasi</a>
                                                  <a href="<?= base_url() ?>peminjaman/kembalikan/<?= $row->id_peminjaman; ?>" class="btn btn-primary btn-xs" onclick="return confirm('Yakin anggota ini sudah mengembalikan buku?');"><i class="fa fa-undo"></i> Kembalikan</a>
                                                  <a href="<?= base_url() ?>peminjaman/hapus/<?= $row->id_peminjaman; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin mau menghapus data peminjaman ini?');"><i class="fa fa-trash"></i> Hapus</a>
                                              </td>
                                          </tr>
                                      <?php }
                                        ?>
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                          <th>No.</th>
                                          <th>ID Peminjaman</th>
                                          <th>ID Anggota</th>
                                          <th>Nama Peminjam</th>
                                          <th>Buku</th>
                                          <th>Tanggal Pinjam</th>
                                          <th>Tanggal Kembali</th>
                                          <th>Status</th>
                                          <th>Nomor Whatsapp</th>
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