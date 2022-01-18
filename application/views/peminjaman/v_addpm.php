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
                                   <?= form_open_multipart('peminjaman/simpan'); ?>
                                   <?= $this->session->flashdata('pesan'); ?>
                                   <div class="form-group row">
                                       <label for="inputIDuser" class="col-sm-3 col-form-label">ID Peminjaman</label>
                                       <div class="col-sm-9">
                                           <input type="text" class="form-control <?= form_error('id_peminjaman') ? 'is-invalid' : null ?>" id="inputIDuser" placeholder="ID Penerbit" value="<?= $id_pm ?>" name="id_peminjaman" readonly>
                                           <?= form_error('id_peminjaman', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputNamauser" class="col-sm-3 col-form-label">Peminjam</label>
                                       <div class="col-sm-9">
                                           <select name="id_anggota" class="form-control select2 <?= form_error('id_anggota') ? 'is-invalid' : null ?> " style="width: 100%;">
                                               <option value="">Pilih Peminjam</option>
                                               <?php
                                                foreach ($pm as $row) { ?>
                                                   <option value="<?= $row->id_anggota; ?>" <?= set_value('id_anggota') == $row->id_anggota ? "selected" : null ?>>[<?= $row->id_anggota ?>] | <?= $row->name; ?></option>
                                               <?php }
                                                ?>
                                           </select>
                                           <?= form_error('id_anggota', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputNamauser" class="col-sm-3 col-form-label">Buku</label>
                                       <div class="col-sm-9">
                                           <select name="id_buku" class="form-control select2 <?= form_error('id_buku') ? 'is-invalid' : null ?> " style="width: 100%;">
                                               <option value="">Pilih Buku</option>
                                               <?php
                                                foreach ($buku as $row) { ?>
                                                   <option value="<?= $row->id_buku; ?>" <?= set_value('id_buku') == $row->id_buku ? "selected" : null ?>>[<?= $row->nomor_induk ?>] | <?= $row->judul_buku; ?></option>
                                               <?php }
                                                ?>
                                           </select>
                                           <?= form_error('id_buku', '<span class="error invalid-feedback">', '</span>')  ?>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputIDuser" class="col-sm-3 col-form-label">Tanggal Peminjaman</label>
                                       <div class="col-sm-9">
                                           <input type="date" class="form-control" id="inputIDuser" placeholder="ID Penerbit" value="<?= date('Y-m-d') ?>" name="tgl_pinjam" readonly>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="inputIDuser" class="col-sm-3 col-form-label">Tanggal Pengembalian</label>
                                       <div class="col-sm-9">
                                           <?php
                                            $tujuh_hari = mktime(0, 0, 0, date("n"), date("j") + 7, date("Y"));
                                            $tgl_kembali = date('Y-m-d', $tujuh_hari);
                                            ?>
                                           <input type="date" class="form-control" id="inputIDuser" placeholder="ID Penerbit" value="<?= $tgl_kembali ?>" name="tgl_kembali" readonly>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <div class="offset-sm-3 col-sm-9">
                                           <button type="submit" class="btn btn-primary">Simpan</button>
                                           <a href="<?= base_url('peminjaman') ?>" class="btn btn-warning">Cancel</a>
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