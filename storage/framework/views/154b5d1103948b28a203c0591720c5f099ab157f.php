<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Itenas</title>
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo e(asset("bower_components/bootstrap/dist/css/bootstrap.min.css")); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset("bower_components/font-awesome/css/font-awesome.min.css")); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo e(asset("bower_components/Ionicons/css/ionicons.min.css")); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset("dist/css/AdminLTE.min.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("dist/css/select2.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")); ?>">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="<?php echo e(asset("dist/css/skins/skin-yellow.min.css")); ?>">

  <?php echo $__env->yieldContent("style"); ?>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <?php echo $__env->make("include.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Left side column. contains the logo and sidebar -->
  <?php echo $__env->make("include.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <?php echo $__env->yieldContent("content-header"); ?>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <?php echo $__env->yieldContent("content"); ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo e(asset("bower_components/jquery/dist/jquery.min.js")); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(asset("bower_components/bootstrap/dist/js/bootstrap.min.js")); ?>"></script>
<script src="<?php echo e(asset("bower_components/datatables.net/js/jquery.dataTables.min.js")); ?>"></script>
<script src="<?php echo e(asset("bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js")); ?>"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<!-- AdminLTE App -->

<script src="<?php echo e(asset("dist/js/adminlte.min.js")); ?>"></script>
<script src="<?php echo e(asset("dist/js/vue.js")); ?>"></script>
<script src="<?php echo e(asset("dist/js/adminlte.min.js")); ?>"></script>
<script src="<?php echo e(asset("dist/js/sweetalert.js")); ?>"></script>
<script src="<?php echo e(asset("dist/js/axios.js")); ?>"></script>
<script src="<?php echo e(asset("bower_components/bootstrap/js/tooltip.js")); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script>
 $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
<?php echo $__env->yieldContent("script"); ?>
</body>
</html><?php /**PATH C:\Installer\Xampp\xampp\htdocs\menpro\resources\views/layouts/home.blade.php ENDPATH**/ ?>