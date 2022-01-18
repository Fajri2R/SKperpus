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
                              <table id="example2" class="table table-bordered table-striped nowrap">
                                  <thead>
                                      <tr>
                                          <th>No.</th>
                                          <th>ID Peminjaman</th>
                                          <th>ID & Nama Peminjam</th>
                                          <th>Buku</th>
                                          <th>Tanggal Pinjam / Kembali</th>
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
                                              <td style="width:5%;">[<?= $row->id_anggota; ?>] <?= $row->name; ?></td>
                                              <td>[<?= $row->nomor_induk; ?>] <?= $row->judul_buku; ?></td>
                                              <td style="width: 8%;"><?= shortdate_indo($row->tgl_pinjam) ?> / <?= shortdate_indo($row->tgl_kembali) ?></td>
                                              <td style="width: 4%;">
                                                  <?php
                                                    if ($tgl_kembali >= $tgl_sekarang or $selisih == 0) {
                                                        echo "<span class='badge badge-info'>Belum di Kembalikan</span>";
                                                    } else {
                                                        echo "Telat <b style = 'color:red;'>" . $selisih . "</b> Hari <br> <span class='badge badge-danger'> Denda Perhari = Rp. 500 </span>" . "<br> Atau sejumlah <br> " . rp($selisih * 500);
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
                                                } elseif ($waktu >= "19" && $waktu <= "23") {
                                                    $salam = "malam";
                                                }
                                                $nomor = hp($row->no_hp);
                                                $jdlbuku = ($row->judul_buku);
                                                //URLEncoded Unicode Emoticons (emojis) https://www.urlencoder.org/
                                                $e1 = '%20%F0%9F%98%81%0A%0A';
                                                $e2 = '%F0%9F%91%8C%0A';
                                                $e3 = '%F0%9F%98%B1';
                                                $pesanreal = '&text=' . 'Halo selamat ' . $salam . $e1 . 'Ini dari perpustakaan, ingin mengingatkan bahwa waktu pinjam buku berjudul %22' . $jdlbuku . '%22 telah habis. Mohon segera dikembalikan secepatnya, agar denda yang harus kamu bayar tidak semakin besar, terima kasih ' . $e2 . 'Psssstt, ingat loh denda perharinya jika telat yaitu Rp. 1000,-%20 ' . $e3;
                                                $penutup = '%0A%0A-%20Salam hangat dari Petugas Perpustakaan%20%F0%9F%98%89';
                                                if ($this->agent->is_mobile()) $linkWA = 'https://api.whatsapp.com/send?phone=' . $nomor . $pesanreal . $penutup;
                                                // tapi kalau desktop pakai web.whatsapp.com
                                                else $linkWA = 'https://web.whatsapp.com/send?phone=' . $nomor . $pesanreal . $penutup;
                                                ?>
                                              <td style="width:5%">
                                                  <a href="<?= $linkWA ?>" target="_blank" class="btn btn-success btn-xs" onclick="return confirm('Kirim notifikasi pengembalian buku ke anggota ini?');" data-toggle="tooltip" data-placement="left" title="Notifikasi"><i class="fab fa-whatsapp"></i></a>
                                                  <a href="<?= base_url() ?>peminjaman/kembalikan/<?= $row->id_peminjaman; ?>" class="btn btn-primary btn-xs" onclick="return confirm('Yakin anggota ini sudah mengembalikan buku?');" data-toggle="tooltip" data-placement="left" title="Kembalikan"><i class="fa fa-undo"></i></a>
                                                  <a href="<?= base_url() ?>peminjaman/hapus/<?= $row->id_peminjaman; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin mau menghapus data peminjaman ini?');" data-toggle="tooltip" data-placement="left" title="Hapus"><i class="fa fa-trash"></i></a>
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