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
                   <div class="col-md-5">
                       <div class="card card-primary card-outline">
                           <div class=" card-body">
                               <div class="tab-content">
                                   <?= form_open_multipart('ubahpw/update'); ?>
                                   <?= $this->session->flashdata('pesan'); ?>
                                   <div class="form-group row">
                                       <label for="inputPwLama" class="col-sm-4 col-form-label">Password Lama</label>
                                       <div class="col-sm-8">
                                           <input type="password" class="form-control <?= form_error('pwold') ? 'is-invalid' : null ?>" id="inputPwLama" placeholder="Password Lama" value="" name="pwold">
                                           <?= form_error('pwold', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputPwBaru" class="col-sm-4 col-form-label">Password Baru</label>
                                       <div class="col-sm-8">
                                           <input type="password" class="form-control <?= form_error('pwnew') ? 'is-invalid' : null ?>" id="inputPwBaru" placeholder="Password Baru" value="" name="pwnew">
                                           <?= form_error('pwnew', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputKonfPwBaru" class="col-sm-4 col-form-label">Konfirmasi Password Baru</label>
                                       <div class="col-sm-8">
                                           <input type="password" class="form-control <?= form_error('pwnew2') ? 'is-invalid' : null ?>" id="inputKonfPwBaru" placeholder="Konfirmasi Password Baru" value="" name="pwnew2">
                                           <?= form_error('pwnew2', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <div class="offset-sm-4 col-sm-8">
                                           <button type="submit" class="btn btn-primary">Update</button>
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