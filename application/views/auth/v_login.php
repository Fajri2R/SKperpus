<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="" class="h1"><?= $title2 ?></a>
        </div>
        <div class="card-body">
            <?= $this->session->flashdata('pesan') ?>
            <p class="login-box-msg">Silahkan login terlebih dahulu</p>

            <form action="<?= base_url('auth')  ?>" method="post">
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
                    <input type="password" style="border-right: 0;" class="form-control <?= form_error('password') ? 'is-invalid' : null ?>" placeholder="Password" id="password" name="password">
                    <div class="input-group-append">
                        <div class="input-group-text" style="background-color: white;">
                            <span class="fas fa-eye fa-fw" id="click-eyepw"></span>
                        </div>
                    </div>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock fa-fw"></span>
                        </div>
                    </div>
                    <?= form_error('password', '<span class="error invalid-feedback">', '</span>')  ?>
                </div>
                <div class="row">
                    <!-- <div class="col-8">
                        </div> -->
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                    <br><br>
                    <!-- <div class="col-12">
                        <a href="<?= base_url('auth/register') ?>" class="btn btn-secondary btn-block">Register</a>
                    </div> -->
                    <!-- /.col -->
                </div>
            </form>
            <!-- <p class="mb-0" style="margin-top: 5px;">
                <a href="<?= base_url('auth/lupapw') ?>">Lupa password?</a>
            </p> -->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->