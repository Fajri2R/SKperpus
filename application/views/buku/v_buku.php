<?php if ($this->session->userdata('role_id') == '1') { ?>
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
                                    <a href="<?= base_url('buku/addBK') ?>" class="btn btn-success btn-flat"><i class="fas fa-plus"></i> &nbsp;&nbsp;Tambah Buku</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <?= $this->session->flashdata('pesan'); ?>
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>ID Buku</th>
                                            <th>Judul Buku</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Kelas</th>
                                            <th>Program Keahlian</th>
                                            <th>Sumber</th>
                                            <th>Tanggal Terima</th>
                                            <th>Jumlah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($databuku as $row) { ?>
                                            <tr>
                                                <td style="width: 3%;"><?= $no++ ?></td>
                                                <td style="width: 7%;"><?= $row->id_buku ?></td>
                                                <td><?= $row->judul_buku ?></td>
                                                <td><?= $row->nama_pengarang ?></td>
                                                <td><?= $row->nama_penerbit ?></td>
                                                <td style="width: 5%;"><?= $row->tahun_terbit ?></td>
                                                <td style="width: 5%;"><?= $row->kelas ?></td>
                                                <td style="width: 11%;"><?= $row->prog_keahlian ?></td>
                                                <td style="width: 5%;"><?= $row->sumber ?></td>
                                                <td style="width: 10%;"><?= mediumdate_indo($row->tgl_terima) ?></td>
                                                <td style="width: 5%;"><?= $row->jumlah ?></td>
                                                <td style="width: 5%;">
                                                    <a href="<?= base_url() ?>buku/edit/<?= $row->id_buku; ?>" class="btn btn-success btn-xs"><i class="fas fa-edit"></i>Edit</a>
                                                    <a href="<?= base_url() ?>buku/hapus/<?= $row->id_buku; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin mau menghapus data buku ini?');"><i class="fas fa-trash"></i>Hapus</a>
                                                </td>
                                            </tr>
                                        <?php }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>ID Buku</th>
                                            <th>Judul Buku</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Kelas</th>
                                            <th>Program Keahlian</th>
                                            <th>Sumber</th>
                                            <th>Tanggal Terima</th>
                                            <th>Jumlah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table><br>
                                <b>Keterangan :</b>
                                <ol>
                                    <li>PT = Geologi Pertambangan</li>
                                    <li>PB = Perbankan Syariah</li>
                                    <li>TITL = Teknik Instalasi Tenaga Listrik</li>
                                </ol>
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

<?php } else if ($this->session->userdata('role_id') == '2') { ?>
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
                                            <th>ID Buku</th>
                                            <th>Judul Buku</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Kelas</th>
                                            <th>Program Keahlian</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($databuku as $row) { ?>
                                            <tr>
                                                <td style="width: 3%;"><?= $no++ ?></td>
                                                <td style="width: 7%;"><?= $row->id_buku ?></td>
                                                <td><?= $row->judul_buku ?></td>
                                                <td><?= $row->nama_pengarang ?></td>
                                                <td><?= $row->nama_penerbit ?></td>
                                                <td style="width: 10%;"><?= $row->tahun_terbit ?></td>
                                                <td style="width: 5%;"><?= $row->kelas ?></td>
                                                <td style="width: 11%;"><?= $row->prog_keahlian ?></td>
                                                <td style="width: 5%;"><?= $row->jumlah ?></td>
                                            </tr>
                                        <?php }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>ID Buku</th>
                                            <th>Judul Buku</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Kelas</th>
                                            <th>Tanggal Terima</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </tfoot>
                                </table><br>
                                <b>Keterangan :</b>
                                <ol>
                                    <li>PT = Geologi Pertambangan</li>
                                    <li>PB = Perbankan Syariah</li>
                                    <li>TITL = Teknik Instalasi Tenaga Listrik</li>
                                </ol>
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
<?php }
