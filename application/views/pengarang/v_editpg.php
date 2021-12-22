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
                                   <?= form_open_multipart('pengarang/update'); ?>
                                   <?= $this->session->flashdata('pesan'); ?>
                                   <div class="form-group row">
                                       <label for="inputIDuser" class="col-sm-3 col-form-label">ID Pengarang</label>
                                       <div class="col-sm-9">
                                           <input type="text" class="form-control <?= form_error('id_pengarang') ? 'is-invalid' : null ?>" id="inputIDuser" placeholder="ID User" value="<?= $data['id_pengarang'] ?>" name="id_pengarang" readonly>
                                           <?= form_error('id_pengarang', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputNamauser" class="col-sm-3 col-form-label">Nama Pengarang</label>
                                       <div class="col-sm-9">
                                           <input type="text" class="form-control <?= form_error('name') ? 'is-invalid' : null ?>" placeholder="Nama Pengarang" id="name" name="name" value="<?= $data['nama_pengarang'] ?>">
                                           <?= form_error('name', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <div class="offset-sm-3 col-sm-9">
                                           <button type="submit" class="btn btn-primary">Update</button>
                                           <a href="<?= base_url('pengarang') ?>" class="btn btn-warning">Cancel</a>
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