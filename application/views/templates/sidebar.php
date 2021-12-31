<?php if ($this->session->userdata('role_id') == '1') { ?>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('assets/img/') . $user['image'] ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $user['name'] ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-header">Main Navigation</li>
                <li class="nav-item">
                    <a href="<?= $user['role_id'] == 1 ? base_url('admin') : base_url('user') ?>" class="nav-link <?= $this->uri->segment(1) == 'admin' && $this->uri->segment(2) == '' ||  $this->uri->segment(1) == 'user' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/datauser') ?>" class="nav-link <?= $this->uri->segment(2) == 'datauser' || $this->uri->segment(2) == 'adduser' || $this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'edit' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Data User</p>
                    </a>
                </li>
                <li class="nav-item <?= $this->uri->segment(1) == 'pengarang' || $this->uri->segment(1) == 'penerbit' || $this->uri->segment(1) == 'noinduk' || $this->uri->segment(1) == 'klasifikasi' || $this->uri->segment(1) == 'buku'   ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $this->uri->segment(1) == 'pengarang' || $this->uri->segment(1) == 'penerbit' || $this->uri->segment(1) == 'noinduk' || $this->uri->segment(1) == 'klasifikasi' || $this->uri->segment(1) == 'buku'   ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Data Buku
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('pengarang') ?>" class="nav-link <?= $this->uri->segment(1) == 'pengarang'   ? 'active' : '' ?>">
                                <i class="<?= $this->uri->segment(1) == 'pengarang'   ? 'far fa-dot-circle' : 'far fa-circle' ?>  nav-icon"></i>
                                <p>Pengarang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('penerbit') ?>" class="nav-link <?= $this->uri->segment(1) == 'penerbit'   ? 'active' : '' ?>">
                                <i class="<?= $this->uri->segment(1) == 'penerbit'   ? 'far fa-dot-circle' : 'far fa-circle' ?> nav-icon"></i>
                                <p>Penerbit</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="<?= base_url('noinduk') ?>" class="nav-link <?= $this->uri->segment(1) == 'noinduk'   ? 'active' : '' ?>">
                                <i class="<?= $this->uri->segment(1) == 'noinduk'   ? 'far fa-dot-circle' : 'far fa-circle' ?> nav-icon"></i>
                                <p>Nomor Induk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('klasifikasi') ?>" class="nav-link <?= $this->uri->segment(1) == 'klasifikasi'   ? 'active' : '' ?>">
                                <i class="<?= $this->uri->segment(1) == 'klasifikasi'   ? 'far fa-dot-circle' : 'far fa-circle' ?> nav-icon"></i>
                                <p>Klasifikasi</p>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="<?= base_url('buku') ?>" class="nav-link <?= $this->uri->segment(1) == 'buku'   ? 'active' : '' ?>">
                                <i class="<?= $this->uri->segment(1) == 'buku'   ? 'far fa-dot-circle' : 'far fa-circle' ?> nav-icon"></i>
                                <p>Daftar Buku</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?= $this->uri->segment(1) == 'peminjaman' || $this->uri->segment(1) == 'pengembalian'  ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $this->uri->segment(1) == 'peminjaman' || $this->uri->segment(1) == 'pengembalian'  ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-chart-area"></i>
                        <p>
                            Transaksi
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('peminjaman') ?>" class="nav-link <?= $this->uri->segment(1) == 'peminjaman'   ? 'active' : '' ?>">
                                <i class="<?= $this->uri->segment(1) == 'peminjaman'   ? 'far fa-dot-circle' : 'far fa-circle' ?> nav-icon"></i>
                                <p>Peminjaman</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('pengembalian') ?>" class="nav-link <?= $this->uri->segment(1) == 'pengembalian'   ? 'active' : '' ?>">
                                <i class="<?= $this->uri->segment(1) == 'pengembalian'   ? 'far fa-dot-circle' : 'far fa-circle' ?> nav-icon"></i>
                                <p>Pengembalian</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item mb-2 <?= $this->uri->segment(2) == 'dataanggota' || $this->uri->segment(2) == 'databuku' || $this->uri->segment(2) == 'datapeminjaman' || $this->uri->segment(2) == 'datapengembalian' ? 'menu-open' : '' ?>" style="border-bottom: 1px solid #4f5962;">
                    <a href="#" class="nav-link <?= $this->uri->segment(2) == 'dataanggota' || $this->uri->segment(2) == 'databuku' || $this->uri->segment(2) == 'datapeminjaman' || $this->uri->segment(2) == 'datapengembalian' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Laporan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('laporan/dataanggota') ?>" class="nav-link <?= $this->uri->segment(2) == 'dataanggota' ? 'active' : '' ?>">
                                <i class="<?= $this->uri->segment(2) == 'dataanggota'   ? 'far fa-dot-circle' : 'far fa-circle' ?> nav-icon"></i>
                                <p>Laporan Data Anggota</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('laporan/databuku') ?>" class="nav-link <?= $this->uri->segment(2) == 'databuku' ? 'active' : '' ?>">
                                <i class="<?= $this->uri->segment(2) == 'databuku'   ? 'far fa-dot-circle' : 'far fa-circle' ?> nav-icon"></i>
                                <p>Laporan Data Buku</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('laporan/datapeminjaman') ?>" class="nav-link <?= $this->uri->segment(2) == 'datapeminjaman' ? 'active' : '' ?>">
                                <i class="<?= $this->uri->segment(2) == 'datapeminjaman'   ? 'far fa-dot-circle' : 'far fa-circle' ?> nav-icon"></i>
                                <p>Laporan Peminjaman</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('laporan/datapengembalian') ?>" class="nav-link <?= $this->uri->segment(2) == 'datapengembalian' ? 'active' : '' ?>">
                                <i class="<?= $this->uri->segment(2) == 'datapengembalian'   ? 'far fa-dot-circle' : 'far fa-circle' ?> nav-icon"></i>
                                <p>Laporan Pengembalian</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">Account Navigation</li>
                <li class="nav-item">
                    <a href="<?= base_url('profile') ?>" class="nav-link <?= $this->uri->segment(1) == 'profile' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Profil</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('ubahpw') ?>" class="nav-link <?= $this->uri->segment(1) == 'ubahpw' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-key"></i>
                        <p>Ganti Password</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('auth/logout') ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>
<?php } else if ($this->session->userdata('role_id') == '2') { ?>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('assets/img/') . $user['image'] ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $user['name'] ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-header">Main Navigation</li>
                <li class="nav-item">
                    <a href="<?= $user['role_id'] == 1 ? base_url('admin') : base_url('user') ?>" class="nav-link <?= $this->uri->segment(1) == 'admin' || $this->uri->segment(1) == 'user'   ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('buku') ?>" class="nav-link <?= $this->uri->segment(1) == 'buku' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Daftar Buku</p>
                    </a>
                </li>
                <li class="nav-item <?= $this->uri->segment(1) == 'peminjaman' || $this->uri->segment(1) == 'pengembalian' ? 'menu-open' : '' ?>" style="border-bottom: 1px solid #4f5962;">
                    <a href="#" class="nav-link <?= $this->uri->segment(1) == 'peminjaman' || $this->uri->segment(1) == 'pengembalian' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-history"></i>
                        <p>
                            Riwayat
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('peminjaman') ?>" class="nav-link <?= $this->uri->segment(1) == 'peminjaman'   ? 'active' : '' ?>">
                                <i class="<?= $this->uri->segment(1) == 'peminjaman'   ? 'far fa-dot-circle' : 'far fa-circle' ?> nav-icon"></i>
                                <p>Peminjaman</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('pengembalian') ?>" class="nav-link <?= $this->uri->segment(1) == 'pengembalian'   ? 'active' : '' ?>">
                                <i class="<?= $this->uri->segment(1) == 'pengembalian'   ? 'far fa-dot-circle' : 'far fa-circle' ?> nav-icon"></i>
                                <p>Pengembalian</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header mt-2">Account Navigation</li>
                <li class="nav-item">
                    <a href="<?= base_url('profile') ?>" class="nav-link <?= $this->uri->segment(1) == 'profile' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Profil</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('ubahpw') ?>" class="nav-link <?= $this->uri->segment(1) == 'ubahpw' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-key"></i>
                        <p>Ganti Password</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('auth/logout') ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>
<?php }
