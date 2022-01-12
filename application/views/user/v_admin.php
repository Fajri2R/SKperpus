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
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <!-- small box -->
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3><?= $anggota ?></h3>
                                <p>Jumlah Anggota</p>
                            </div>
                            <div class="icon">
                                <i class="far fa-user"></i>
                            </div>
                            <a href="<?= base_url('admin/datauser') ?>" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-12 col-12">
                        <!-- small box -->
                        <div class="small-box bg-secondary">
                            <div class="inner">
                                <h3><?= $buku ?></h3>
                                <p>Jumlah Buku</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <a href="<?= base_url('buku') ?>" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-12 col-12">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3><?= $pinjam ?></h3>
                                <p>Buku Yang Sudah Dipinjam</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-bookmark"></i>
                            </div>
                            <a href="<?= base_url('peminjaman') ?>" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-12 col-12">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3><?= $kembali ?></h3>
                                <p>Buku Yang Sudah Dikembalikan</p>
                            </div>
                            <div class="icon">
                                <i class="far fa-bookmark"></i>
                            </div>
                            <a href="<?= base_url('pengembalian') ?>" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->