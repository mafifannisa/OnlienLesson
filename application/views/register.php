<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Ionicons/css/ionicons.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminLTE/css/AdminLTE.min.css')?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/square/blue.css')?>">
  <!--- Fav icon --->
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('assets/favicon/apple-icon-57x57.png')?>">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('assets/favicon/apple-icon-60x60.png')?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/favicon/apple-icon-72x72.png')?>">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/favicon/apple-icon-76x76.png')?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/favicon/apple-icon-114x114.png')?>">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets/favicon/apple-icon-120x120.png')?>">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('assets/favicon/apple-icon-144x144.png')?>">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets/favicon/apple-icon-152x152.png')?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/favicon/apple-icon-180x180.png')?>">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url('assets/favicon/android-icon-192x192.png')?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/favicon/favicon-32x32.png')?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/favicon/favicon-96x96.png')?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/favicon/favicon-16x16.png')?>">
  <link rel="manifest" href="<?php echo base_url('assets/favicon/manifest.json')?>">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo base_url('assets/favicon/ms-icon-144x144.png')?>">
  <meta name="theme-color" content="#ffffff">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Online</b>Lesson</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Daftar Pengguna Baru</p>

    <form action="../../index.html" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nama Lengkap">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <a href="login" class="text-center">Sudah terdaftar?</a>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Mendaftar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/bootstrap/plugin/jquery/dist/jquery.min.js')?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js')?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
