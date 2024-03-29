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
                           <div class="card-body">
                               <div class="tab-content">
                                   <?= form_open_multipart('buku/simpan'); ?>
                                   <?= $this->session->flashdata('pesan'); ?>
                                   <div class="form-group row">
                                       <label for="inputIDuser" class="col-sm-3 col-form-label">ID Buku</label>
                                       <div class="col-sm-9">
                                           <input type="text" class="form-control <?= form_error('id_buku') ? 'is-warning' : null ?>" id="inputIDuser" placeholder="ID Buku" value="<?= $id_buku ?>" name="id_buku" readonly>
                                           <?= form_error('id_buku', '<span class="error warning-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputNamauser" class="col-sm-3 col-form-label">Tanggal Terima</label>
                                       <div class="col-sm-9">
                                           <input type="date" class="form-control <?= form_error('tgl_terima') ? 'is-invalid' : null ?>" id="moddtpck" name="tgl_terima" value="<?= set_value('tgl_terima') ?>">
                                           <?= form_error('tgl_terima', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputNamauser" class="col-sm-3 col-form-label">Judul Buku</label>
                                       <div class="col-sm-9">
                                           <input type="text" class="form-control <?= form_error('judul_buku') ? 'is-invalid' : null ?>" placeholder="Judul Buku" id="judul_buku" name="judul_buku" value="<?= set_value('judul_buku') ?>">
                                           <?= form_error('judul_buku', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputNamauser" class="col-sm-3 col-form-label">Pengarang</label>
                                       <div class="col-sm-9">
                                           <select name="id_pengarang" class="form-control select2 <?= form_error('id_pengarang') ? 'is-invalid' : null ?> " style="width: 100%;">
                                               <option value="">Pilih Pengarang</option>
                                               <?php
                                                foreach ($pengarang as $row) { ?>
                                                   <option value="<?= $row->id_pengarang; ?>" <?= set_value('id_pengarang') == $row->id_pengarang ? "selected" : null ?>><?= $row->nama_pengarang; ?></option>
                                               <?php }
                                                ?>
                                           </select>
                                           <?= form_error('id_pengarang', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputNamauser" class="col-md-3 col-form-label">Penerbit</label>
                                       <div class="col-md-9">
                                           <select class="form-control select2 <?= form_error('id_penerbit') ? 'is-invalid' : null ?>" name="id_penerbit" style="width: 100%;">
                                               <option value="">Pilih Penerbit</option>
                                               <?php
                                                foreach ($penerbit as $row) { ?>
                                                   <option value="<?= $row->id_penerbit; ?>" <?= set_value('id_penerbit') == $row->id_penerbit ? "selected" : null ?>><?= $row->nama_penerbit; ?></option>
                                               <?php }
                                                ?>
                                           </select>
                                           <?= form_error('id_penerbit', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputNamauser" class="col-md-3 col-form-label">Tahun Terbit</label>
                                       <div class="col-md-9">
                                           <select class="form-control select2 <?= form_error('tahun_terbit') ? 'is-invalid' : null ?>" name="tahun_terbit" style="width: 100%;">
                                               <option value="">Pilih Tahun Terbit</option>
                                               <?php
                                                for ($tahun = date('Y') - 25; $tahun <= date('Y'); $tahun++) { ?>
                                                   <option value="<?= $tahun; ?>" <?= set_value('tahun_terbit') == $tahun ? "selected" : null ?>><?= $tahun; ?></option>
                                               <?php }
                                                ?>
                                           </select>
                                           <?= form_error('tahun_terbit', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputNamauser" class="col-md-3 col-form-label">Kelas</label>
                                       <div class="col-md-9">
                                           <select class="form-control select2 <?= form_error('kelas') ? 'is-invalid' : null ?>" name="kelas" style="width: 100%;">
                                               <option value="">Pilih Kelas</option>
                                               <option value="X" <?= set_value('kelas') == "X" ? "selected" : null ?>> X </option>
                                               <option value="XI" <?= set_value('kelas') == "XI" ? "selected" : null ?>> XI </option>
                                               <option value="XII" <?= set_value('kelas') == "XII" ? "selected" : null ?>> XII </option>
                                           </select>
                                           <?= form_error('kelas', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputNamauser" class="col-md-3 col-form-label">Program Keahlian</label>
                                       <div class="col-md-9">
                                           <select class="form-control select2 <?= form_error('prog_keahlian') ? 'is-invalid' : null ?>" name="prog_keahlian" style="width: 100%;">
                                               <option value="">Pilih Program Keahlian</option>
                                               <option value="UMUM" <?= set_value('prog_keahlian') == "UMUM" ? "selected" : null ?>> UMUM </option>
                                               <option value="PT" <?= set_value('prog_keahlian') == "PT" ? "selected" : null ?>> PT </option>
                                               <option value="PB" <?= set_value('prog_keahlian') == "PB" ? "selected" : null ?>> PB </option>
                                               <option value="TITL" <?= set_value('prog_keahlian') == "TITL" ? "selected" : null ?>> TITL </option>
                                           </select>
                                           <?= form_error('prog_keahlian', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputNamauser" class="col-sm-3 col-form-label">Sumber Buku</label>
                                       <div class="col-sm-9">
                                           <select class="form-control select2 <?= form_error('sumber') ? 'is-invalid' : null ?>" name="sumber" style="width: 100%;">
                                               <option value="">Pilih Sumber</option>
                                               <option value="B" <?= set_value('sumber') == "B" ? "selected" : null ?>> BOS </option>
                                               <option value="NB" <?= set_value('sumber') == "NB" ? "selected" : null ?>> Non BOS </option>
                                           </select>
                                           <?= form_error('sumber', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputNamauser" class="col-sm-3 col-form-label">Jumlah</label>
                                       <div class="col-sm-9">
                                           <input type="number" class="form-control <?= form_error('jumlah') ? 'is-invalid' : null ?>" placeholder="Jumlah Buku" id="jumlah" name="jumlah" value="<?= set_value('jumlah') ?>">
                                           <?= form_error('jumlah', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <div class="offset-sm-3 col-sm-9">
                                           <button type="submit" class="btn btn-primary">Simpan</button>
                                           <a href="<?= base_url('buku') ?>" class="btn btn-warning">Cancel</a>
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