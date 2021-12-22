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
                   <!-- /.col -->
                   <div class="col-md-12">
                       <div class="card card-primary card-outline">
                           <div class=" card-body">
                               <div class="tab-content">
                                   <?= form_open_multipart('admin/simpan'); ?>
                                   <?= $this->session->flashdata('pesan'); ?>
                                   <div class="form-group row">
                                       <label for="inputIDuser" class="col-sm-3 col-form-label">ID User</label>
                                       <div class="col-sm-9">
                                           <input type="text" class="form-control <?= form_error('id_anggota') ? 'is-invalid' : null ?>" id="inputIDuser" placeholder="ID User" value="<?= $id_anggota ?>" name="id_anggota" readonly>
                                           <?= form_error('id_anggota', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputNamauser" class="col-sm-3 col-form-label">Nama User</label>
                                       <div class="col-sm-9">
                                           <input type="text" class="form-control <?= form_error('name') ? 'is-invalid' : null ?>" placeholder="Nama Lengkap" id="name" name="name" value="<?= set_value('name') ?>">
                                           <?= form_error('name', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputUsername" class="col-sm-3 col-form-label">Username</label>
                                       <div class="col-sm-9">
                                           <input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : null ?>" placeholder="Username" id="username" name="username" value="<?= set_value('username') ?>">
                                           <?= form_error('username', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                                       <div class="col-sm-5">
                                           <input type="password" class="form-control <?= form_error('password1') ? 'is-invalid' : null ?>" placeholder="Password" id="password1" name="password1">
                                           <span class="fas fa-eye fa-fw <?= form_error('password1') ? 'eyepwer-icon' : 'eyepw-icon' ?>" id="click-eyepw1"></span>
                                           <?= form_error('password1', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                       <div class="col-sm-4">
                                           <input type="password" class="form-control <?= form_error('password2') ? 'is-invalid' : null ?>" placeholder="Konfirmasi Password" id="password2" name="password2">
                                           <span class="fas fa-eye fa-fw <?= form_error('password2') ? 'eyepwer-icon' : 'eyepw-icon' ?>" id="click-eyepw2"></span>
                                           <?= form_error('password2', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputUsername" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                       <div class="col-sm-9">
                                           <select class="form-control <?= form_error('jenkel') ? 'is-invalid' : null ?>" name="jenkel" id="jenkel" style="width: 100%;">
                                               <option value="">Pilih Jenis Kelamin</option>
                                               <option value="Laki-laki" <?= set_value('jenkel') == "Laki-laki" ? "selected" : null ?>> Laki-laki </option>
                                               <option value="Perempuan" <?= set_value('jenkel') == "Perempuan" ? "selected" : null ?>> Perempuan </option>
                                           </select>
                                           <?= form_error('jenkel', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputAlamat" class="col-sm-3 col-form-label">Alamat</label>
                                       <div class="col-sm-9">
                                           <textarea class="form-control" id="inputAlamat" placeholder="Alamat" name="alamat"><?= set_value('alamat')  ?></textarea>
                                           <?= form_error('alamat', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputAlamat" class="col-sm-3 col-form-label">Nomor Whatsapp</label>
                                       <div class="col-sm-9">
                                           <input type="number" class="form-control <?= form_error('no_hp') ? 'is-invalid' : null ?>" placeholder="Nomor Whatsapp (Cth: 08xxxxx)" id="no_hp" name="no_hp" value="<?= set_value('no_hp') ?>">
                                           <?= form_error('no_hp', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputAlamat" class="col-sm-3 col-form-label">Role</label>
                                       <div class="col-sm-9">
                                           <select class="form-control <?= form_error('role_id') ? 'is-invalid' : null ?>" name="role_id" id="role_id" style="width: 100%;">
                                               <option value="">Pilih</option>
                                               <option value="1" <?= set_value('role_id') == "1" ? "selected" : null ?>> Admin </option>
                                               <option value="2" <?= set_value('role_id') == "2" ? "selected" : null ?>> Member </option>
                                           </select>
                                           <?= form_error('role_id', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <div class="offset-sm-3 col-sm-9">
                                           <button type="submit" class="btn btn-primary">Simpan</button>
                                           <a href="<?= base_url('admin/datauser') ?>" class="btn btn-warning">Cancel</a>
                                       </div>
                                   </div>
                                   </form>
                               </div>
                               <!-- /.tab-content -->
                           </div><!-- /.card-body -->
                       </div>
                       <!-- /.card -->
                   </div>
                   <!-- /.col -->
               </div>
               <!-- /.row -->
           </div><!-- /.container-fluid -->
       </section>
       <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->