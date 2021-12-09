<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?= base_url('auth') ?>" class="h1"><?= $title2 ?></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Kamu lupa password? Disini kamu bisa meminta password yang baru.</p>
      <form action="<?= base_url('auth/resetPw') ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : null ?>" placeholder="Username" id="username" name="username" value="<?= set_value('username') ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-address-card fa-fw"></span>
            </div>
          </div>
          <?= form_error('username', '<span class="error invalid-feedback">', '</span>')  ?>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Minta password baru</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mt-3 mb-1">
        <a href="<?= base_url('auth') ?>">Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->