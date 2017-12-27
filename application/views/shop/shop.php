<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Online Lesson | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo base_url('assets/Ionicons/css/ionicons.min.css')?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url('assets/adminLTE/css/AdminLTE.min.css')?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url('assets/adminLTE/css/skins/_all-skins.min.css')?>">
        <!-- Morris chart -->
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/plugin/morris.js/morris.css')?>">
        <!-- jvectormap -->
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/plugin/jvectormap/jquery-jvectormap.css')?>">
        <!-- Date Picker -->
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/plugin/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')?>">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/plugin/bootstrap-daterangepicker/daterangepicker.css')?>">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>">

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
    </head>
    <body class="hold-transition skin-green layout-top-nav">
        <div class="wrapper">
            <?php echo $_header; ?>
            <!---<?php echo $_sidebar; ?>--->
            <?php echo $_content; ?>

        </div><!-- ./wrapper -->
        <footer class="main-footer">
          <div class="pull-right hidden-xs">
            <b>Version</b> 0.7 Alpha
          </div>
          <strong>Copyright &copy; 2014-2017 <a href="http://subayu.com">Subayu Studio</a>.</strong> All rights reserved.
          reserved.
        </footer>
        <!-- jQuery 3 -->
        <script src="<?php echo base_url('assets/bootstrap/plugin/jquery/dist/jquery.min.js')?>"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="<?php echo base_url('assets/bootstrap/plugin/jquery-ui/jquery-ui.min.js')?>"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
          $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
        <!-- Morris.js charts -->
        <script src="<?php echo base_url('assets/bootstrap/plugin/raphael/raphael.min.js')?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/plugin/morris.js/morris.min.js')?>"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url('assets/bootstrap/plugin/jquery-sparkline/dist/jquery.sparkline.min.js')?>"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')?>"></script>
        <script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')?>"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url('assets/bootstrap/plugin/jquery-knob/dist/jquery.knob.min.js')?>"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url('assets/bootstrap/plugin/moment/min/moment.min.js')?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/plugin/bootstrap-daterangepicker/daterangepicker.js')?>"></script>
        <!-- datepicker -->
        <script src="<?php echo base_url('assets/bootstrap/plugin/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')?>"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')?>"></script>
        <!-- Slimscroll -->
        <script src="<?php echo base_url('assets/bootstrap/plugin/jquery-slimscroll/jquery.slimscroll.min.js')?>"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url('assets/bootstrap/plugin/fastclick/lib/fastclick.js')?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url('assets/adminLTE/js/adminlte.min.js')?>"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url('assets/adminLTE/js/pages/dashboard.js')?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url('assets/adminLTE/js/demo.js')?>"></script>
    </body>
</html>
