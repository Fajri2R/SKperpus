   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Profile</h1>
                   </div>
               </div>
           </div><!-- /.container-fluid -->
       </section>
       <!-- Main content -->
       <section class="content">
           <div class="container-fluid">
               <div class="row">

                   <!-- /.col -->
                   <div class="col-md-3">
                       <div class="card card-primary card-outline">
                           <!-- style="height: 436px;"     -->
                           <div class="card-body">
                               <div class="tab-content">
                                   <div class="text-center">
                                       <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/img/') . $user['image'] ?>" alt="User profile picture">
                                   </div>
                                   <h3 class="profile-username text-center"><?= $user['name'] ?></h3>
                                   <p class="text-muted text-center"><?= $user['role_id'] == 1 ? 'Admin' : 'Member' ?></p>
                                   <ul class="list-group list-group-unbordered mb-3">
                                       <li class="list-group-item">
                                           <b>Email</b> <a class="float-right" style="color: black;"><?= $user['email'] ?></a>
                                       </li>
                                       <li class="list-group-item">
                                           <b>Username</b> <a class="float-right" style="color: black;"><?= $user['username'] ?></a>
                                       </li>
                                       <li class="list-group-item">
                                           <b>Jenis Kelamin</b> <a class="float-right" style="color: black;"><?= $user['jenkel'] ?></a>
                                       </li>
                                       <li class="list-group-item">
                                           <b>Nomor Whatsapp</b> <a class="float-right" style="color: black;"><?= $user['no_hp'] ?></a>
                                       </li>
                                       <li class="list-group-item">
                                           <b>Alamat</b> <a class="float-right" style="color: black;"><?= $user['alamat'] ?></a>
                                       </li>
                                   </ul>
                               </div>
                               <!-- /.tab-content -->
                           </div><!-- /.card-body -->
                       </div>
                       <!-- /.card -->
                   </div>
                   <!-- /.col -->
                   <!-- /.col -->
                   <div class="col-md-9">
                       <div class="card card-primary card-outline">
                           <div class="card-header p-2">
                               <ul class="nav nav-pills">
                                   <li class="nav-item"><a class="nav-link active">Update Profile</a></li>
                               </ul>
                           </div><!-- /.card-header -->
                           <div class=" card-body">
                               <div class="tab-content">
                                   <form class="form-horizontal">
                                       <div class="form-group row">
                                           <label for="inputId_anggota" class="col-sm-2 col-form-label">ID Anggota</label>
                                           <div class="col-sm-10">
                                               <input type="text" class="form-control" id="inputId_anggota" placeholder="ID Anggota" value="<?= $user['id_anggota'] ?>" readonly>
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                           <div class="col-sm-10">
                                               <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="<?= $user['email'] ?>">
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label for="inputNo_HP" class="col-sm-2 col-form-label">Nomor Whatsapp</label>
                                           <div class="col-sm-10">
                                               <input type="number" class="form-control" id="inputNo_HP" placeholder="Nomor Whatsapp (cth: 08xxxxx)" value="<?= $user['no_hp'] ?>">
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                                           <div class="col-sm-10">
                                               <textarea class="form-control" id="inputAlamat" placeholder="Alamat"><?= $user['alamat'] ?></textarea>
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <label for="inputAlamat" class="col-sm-2 col-form-label">Ganti Foto</label>
                                           <div class="col-sm-10">
                                               <div class="input-group">
                                                   <div class="custom-file">
                                                       <input type="file" class="custom-file-input" id="exampleInputFile">
                                                       <label class="custom-file-label" for="exampleInputFile">Choose file (Format: jpg, jpeg, png. Ukuran foto max. 512x512. Ukuran file max. 2MB)</label>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="form-group row">
                                           <div class="offset-sm-2 col-sm-10">
                                               <button type="submit" class="btn btn-danger">Submit</button>
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