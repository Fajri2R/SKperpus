<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="<?= base_url('auth') ?>" class="h1"><?= $title2 ?></a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Daftar akun untuk menjadi anggota perpustakaan</p>
            <form action="<?= base_url('auth/register') ?>" method="post">

                <div class="input-group mb-3">
                    <input type="text" class="form-control <?= form_error('id_anggota') ? 'is-warning' : null ?>" placeholder="ID Anggota" id="id_anggota" name="id_anggota" value="<?= $id_anggota; ?>" readonly>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-id-badge fa-fw"></span>
                        </div>
                    </div>
                    <?= form_error('id_anggota', '<span class="error warning-feedback">', '</span>')  ?>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control <?= form_error('name') ? 'is-invalid' : null ?>" placeholder="Nama Lengkap" id="name" name="name" value="<?= set_value('name') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user fa-fw"></span>
                        </div>
                    </div>
                    <?= form_error('name', '<span class="error invalid-feedback">', '</span>')  ?>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : null ?>" placeholder="Username" id="username" name="username" value="<?= set_value('username') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-address-card fa-fw"></span>
                        </div>
                    </div>
                    <?= form_error('username', '<span class="error invalid-feedback">', '</span>')  ?>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control <?= form_error('email') ? 'is-invalid' : null ?>" placeholder="Email" id="email" name="email" value="<?= set_value('email') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope fa-fw"></span>
                        </div>
                    </div>
                    <?= form_error('email', '<span class="error invalid-feedback">', '</span>')  ?>
                </div>
                <div class="input-group mb-3">
                    <input type="password" style="border-right: 0;" class="form-control <?= form_error('password1') ? 'is-invalid' : null ?>" placeholder="Password" id="password1" name="password1">
                    <div class="input-group-append">
                        <div class="input-group-text" style="background-color: transparent;">
                            <span class="fas fa-eye fa-fw" id="click-eyepw1"></span>
                        </div>
                    </div>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock fa-fw"></span>
                        </div>
                    </div>
                    <?= form_error('password1', '<span class="error invalid-feedback">', '</span>')  ?>
                </div>
                <div class="input-group mb-3">
                    <input type="password" style="border-right: 0;" class="form-control" placeholder="Konfirmasi Password" id="password2" name="password2">
                    <div class="input-group-append">
                        <div class="input-group-text" style="background-color: transparent;">
                            <span class="fas fa-eye fa-fw" id="click-eyepw2"></span>
                        </div>
                    </div>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock fa-fw"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="number" class="form-control <?= form_error('no_hp') ? 'is-invalid' : null ?>" placeholder="Nomor Whatsapp (Cth: 08xxxxx)" id="no_hp" name="no_hp" value="<?= set_value('no_hp') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fab fa-whatsapp-square fa-fw"></span>
                        </div>
                    </div>
                    <?= form_error('no_hp', '<span class="error invalid-feedback">', '</span>')  ?>
                </div>
                <div class="input-group mb-3">
                    <select class="form-control select2 <?= form_error('jenkel') ? 'is-invalid' : null ?>" name="jenkel" id="jenkel">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki" <?= set_value('jenkel') == "Laki-laki" ? "selected" : null ?>> Laki-laki </option>
                        <option value="Perempuan" <?= set_value('jenkel') == "Perempuan" ? "selected" : null ?>> Perempuan </option>
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-venus-mars fa-fw"></span>
                        </div>
                    </div>
                    <?= form_error('jenkel', '<span class="error invalid-feedback">', '</span>')  ?>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12 mb-2">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="<?= base_url('auth') ?>" class="text-center">Sudah memiliki akun?</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->