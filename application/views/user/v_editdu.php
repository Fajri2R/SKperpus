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
                                   <?= form_open_multipart('admin/update'); ?>
                                   <?= $this->session->flashdata('pesan'); ?>
                                   <div class="form-group row">
                                       <label for="inputIDuser" class="col-sm-3 col-form-label">ID User</label>
                                       <div class="col-sm-9">
                                           <input type="text" class="form-control <?= form_error('id_anggota') ? 'is-invalid' : null ?>" id="inputIDuser" placeholder="ID User" value="<?= $data['id_anggota'] ?>" name="id_anggota" readonly>
                                           <?= form_error('id_anggota', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputUsername" class="col-sm-3 col-form-label">Username</label>
                                       <div class="col-sm-9">
                                           <input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : null ?>" id="inputUsername" placeholder="Username" value="<?= $data['username'] ?>" name="username" readonly>
                                           <?= form_error('username', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputNamauser" class="col-sm-3 col-form-label">Nama User</label>
                                       <div class="col-sm-9">
                                           <input type="text" class="form-control <?= form_error('name') ? 'is-invalid' : null ?>" id="inputNamauser" placeholder="Nama User" value="<?= $data['name'] ?>" name="name">
                                           <?= form_error('name', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputJenkel" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                       <div class="col-sm-9">
                                           <select class="form-control" name="jenkel" id="inputJenkel">
                                               <?php
                                                if ($data['jenkel'] == "Laki-laki") { ?>
                                                   <option value="Laki-laki" selected> Laki-laki </option>
                                                   <option value="Perempuan"> Perempuan </option>
                                               <?php } else { ?>
                                                   <option value="Laki-laki"> Laki-laki </option>
                                                   <option value="Perempuan" selected> Perempuan </option>
                                               <?php }
                                                ?>
                                           </select>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputAlamat" class="col-sm-3 col-form-label">Alamat</label>
                                       <div class="col-sm-9">
                                           <textarea class="form-control" id="inputAlamat" placeholder="Alamat" name="alamat"><?= $data['alamat'] ?></textarea>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputNo_hp" class="col-sm-3 col-form-label">Nomor Whatsapp</label>
                                       <div class="col-sm-9">
                                           <input type="number" class="form-control <?= form_error('no_hp') ? 'is-invalid' : null ?>" id="inputNo_hp" placeholder="Nomor Whatsapp (cth: 08xxxxx)" value="<?= $data['no_hp'] ?>" name="no_hp">
                                           <?= form_error('no_hp', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputRole" class="col-sm-3 col-form-label">Role</label>
                                       <div class="col-sm-9">
                                           <select name="role_id" class="form-control" id="inputRole">
                                               <?php
                                                if ($data['role_id'] == "1") { ?>
                                                   <option value="1" selected> Admin </option>
                                                   <option value="2"> Member </option>
                                               <?php } else { ?>
                                                   <option value="1"> Admin </option>
                                                   <option value="2" selected> Member </option>
                                               <?php }
                                                ?>
                                           </select>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <div class="offset-sm-3 col-sm-9">
                                           <button type="submit" class="btn btn-primary">Update</button>
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