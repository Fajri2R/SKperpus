<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/')  ?>plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/')  ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/')  ?>dist/css/adminlte.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/')  ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/')  ?>plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/')  ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Logo Favicon  -->
    <link rel="icon" href="<?= base_url('assets/img/') ?>icon.png" type="image/gif">

    <style>
        .bglogin {
            /* background-image: url('<?= base_url('assets/img/')  ?>bg1.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
            filter: blur(8px);
            -webkit-filter: blur(8px); */
            background-image: url('<?= base_url('assets/img/')  ?>bg1.jpg');
            width: 100%;
            height: 100%;
            filter: blur(2px);
            -webkit-filter: blur(2px);
            z-index: 0;
            position: absolute;
            background-position: center;
            background-size: cover
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="bglogin"></div>