<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/')  ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/')  ?>dist/css/adminlte.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/')  ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/')  ?>plugins/daterangepicker/daterangepicker.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/')  ?>plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/')  ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/')  ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/')  ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/')  ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Logo Favicon  -->
    <link rel="icon" href="<?= base_url('assets/img/') ?>icon.png" type="image/gif">
    <!-- Modif CSS  -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>mod.css">
</head>

<body class="sidebar-collapse">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #28af46;">
            <div class="container" style="margin-left: 20px;">
                <a href="#" class="navbar-brand">
                    <img src="<?= base_url('assets/img/') ?>icon.png" alt="SMK MUHI" height="35" style="border-radius: 50%; background-color: white;" class="d-inline-block align-top" />
                    <span class="pull-left" style="font-family: 'Righteous', Arial, Helvetica;color:white;">
                        &nbsp;<span class="d-none d-md-inline d-lg-inline">E-Perpustakaan SMK Muhammadiyah Kota Jambi</span>
                        <span class="d-md-none">E-PERPUS MUHI</span>
                    </span>
                </a>
            </div>
            <!-- Right navbar links -->
            <div class="container" style="justify-content: end;">
                <a href="<?= base_url('auth') ?>" class="navbar-brand">
                    <span class="pull-left" style="font-family: 'Righteous', Arial, Helvetica;color:white;font-size: 16px;">
                        &nbsp;<span class="d-none d-md-inline d-lg-inline">Login <i class="fas fa-sign-in-alt fa-fw"></i></span>
                        <span class="d-md-none">Login</span>
                    </span>
                </a>
            </div>
        </nav>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <!-- <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Collapsed Sidebar</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Layout</a></li>
                                <li class="breadcrumb-item active">Collapsed Sidebar</li>
                            </ol>
                        </div>
                    </div> -->
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Cek Peminjaman dan Pengembalian Buku</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <form class="row" style="margin-left: 0px;" action="<?= base_url('home') ?>" method="POST">
                                                    <input style="width: 30%;" type="text" class="form-control <?= form_error('username') ? 'is-invalid' : null ?>" placeholder="Masukkan Username" id="username" name="username" value="<?= set_value('username') ?>">
                                                    <button type="submit" class="btn btn-primary" style="margin-left: 15px;">Submit</button>
                                                    <a href="<?= base_url('home') ?>" class="btn btn-warning" style="margin-left: 15px;">Refresh</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php if (!empty($this->session->userdata('username'))) { ?>
                                    <div class="card-header p-0 border-bottom-0">
                                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Peminjaman</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Pengembalian</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="custom-tabs-four-tabContent">
                                            <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                                <table id="example2" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>ID Peminjaman</th>
                                                            <th>ID Anggota</th>
                                                            <th>Nama Peminjam</th>
                                                            <th>Buku</th>
                                                            <th>Tanggal Pinjam / Kembali</th>
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
                                                                <td style="width:2%;"><?= $no++ ?></td>
                                                                <td><?= $row->id_peminjaman; ?></td>
                                                                <td><?= $row->id_anggota; ?> </td>
                                                                <td><?= $row->name; ?></td>
                                                                <td>[<?= $row->nomor_induk; ?>] <?= $row->judul_buku; ?></td>
                                                                <td><?= shortdate_indo($row->tgl_pinjam) ?> / <?= shortdate_indo($row->tgl_kembali) ?></td>
                                                                <td>
                                                                    <?php
                                                                    if ($tgl_kembali >= $tgl_sekarang or $selisih == 0) {
                                                                        echo "<span class='badge badge-info'>Belum di Kembalikan</span>";
                                                                    } else {
                                                                        echo "Telat <b style = 'color:red;'>" . $selisih . "</b> Hari <br> <span class='badge badge-danger'> Denda Perhari = Rp. 500 </span>" . "<br> Atau sejumlah <br> " . rp($selisih * 500);
                                                                    }
                                                                    ?>
                                                                </td>
                                                            </tr>
                                                        <?php }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                                <table id="example3" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>ID Pengembalian</th>
                                                            <th>ID Anggota</th>
                                                            <th>Nama Peminjam</th>
                                                            <th>Buku</th>
                                                            <th>Tanggal Pinjam / Kembali</th>
                                                            <th>Tanggal Dikembalikan</th>
                                                            <th>Denda</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $no = 1;
                                                        foreach ($datapb as $row) { ?>
                                                            <tr>
                                                                <td style="width:2%;"><?= $no++ ?></td>
                                                                <td><?= $row->id_pengembalian; ?></td>
                                                                <td><?= $row->id_anggota; ?></td>
                                                                <td><?= $row->name; ?></td>
                                                                <td>[<?= $row->nomor_induk; ?>] <?= $row->judul_buku; ?></td>
                                                                <td><?= shortdate_indo($row->tgl_pinjam) ?> / <?= shortdate_indo($row->tgl_kembali) ?></td>
                                                                <td><?= shortdate_indo($row->tgl_kembalikan) ?></td>
                                                                <td>
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
                                                            </tr>
                                                        <?php }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="card-footer">
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Daftar Buku</h3>
                                </div>
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th style="white-space: nowrap;">No.</th>
                                                <th style="white-space: nowrap;">Nomor Induk</th>
                                                <th style="white-space: nowrap;">Judul Buku</th>
                                                <th style="white-space: nowrap;">Pengarang</th>
                                                <th style="white-space: nowrap;">Penerbit</th>
                                                <th style="white-space: nowrap;">Tahun Terbit</th>
                                                <th style="white-space: nowrap;">Kelas</th>
                                                <th style="white-space: nowrap;">Program Keahlian</th>
                                                <th style="white-space: nowrap;">Tanggal Terima</th>
                                                <th style="white-space: nowrap;">Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($databuku as $row) { ?>
                                                <tr>
                                                    <td style="width: 3%;"><?= $no++ ?></td>
                                                    <td style="width: 7%;"><?= $row->nomor_induk ?></td>
                                                    <td><?= $row->judul_buku ?></td>
                                                    <td><?= $row->nama_pengarang ?></td>
                                                    <td><?= $row->nama_penerbit ?></td>
                                                    <td style="width: 5%;"><?= $row->tahun_terbit ?></td>
                                                    <td style="width: 5%;"><?= $row->kelas ?></td>
                                                    <td style="width: 11%;"><?= $row->prog_keahlian ?></td>
                                                    <td style="width: 10%;"><?= slashdate_indo($row->tgl_terima) ?></td>
                                                    <td style="width: 5%;"><?= $row->jumlah ?></td>
                                                </tr>
                                            <?php }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="white-space: nowrap;">No.</th>
                                                <th style="white-space: nowrap;">Nomor Induk</th>
                                                <th style="white-space: nowrap;">Judul Buku</th>
                                                <th style="white-space: nowrap;">Pengarang</th>
                                                <th style="white-space: nowrap;">Penerbit</th>
                                                <th style="white-space: nowrap;">Tahun Terbit</th>
                                                <th style="white-space: nowrap;">Kelas</th>
                                                <th style="white-space: nowrap;">Program Keahlian</th>
                                                <th style="white-space: nowrap;">Tanggal Terima</th>
                                                <th style="white-space: nowrap;">Jumlah</th>
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
                                <div class="card-footer">
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="main-footer">
            <!-- <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.1.0
    </div> -->
            <strong>Copyright &copy; <?= date('Y') ?> <a href="">SMK Muhammadiyah Kota Jambi</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- jQuery -->
    <script src="<?= base_url('assets/adminlte/')  ?>plugins/jquery/jquery.min.js"></script>
    <!-- Moment  -->
    <script src="<?= base_url('assets/adminlte/')  ?>plugins/moment/moment.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/adminlte/')  ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('assets/adminlte/')  ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/adminlte/')  ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/adminlte/')  ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('assets/adminlte/')  ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/adminlte/')  ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('assets/adminlte/')  ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/adminlte/')  ?>plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url('assets/adminlte/')  ?>plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('assets/adminlte/')  ?>plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url('assets/adminlte/')  ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('assets/adminlte/')  ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('assets/adminlte/')  ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Select2 -->
    <script src="<?= base_url('assets/adminlte/')  ?>plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="<?= base_url('assets/adminlte/')  ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/adminlte/')  ?>dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('assets/adminlte/')  ?>dist/js/demo.js"></script>
    <!-- date-range-picker -->
    <script src="<?= base_url('assets/adminlte/')  ?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url('assets/adminlte/')  ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Private JS Content -->
    <script src="<?= base_url('assets/js/')  ?>content.js"></script>
    <!-- Tooltip -->
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>

</html>