<?php $__env->startSection('content'); ?>
<div class="login-box">
  <?php if($message = Session::get('error')): ?>
  <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong><?php echo e($message); ?></strong>
  </div>
  <?php endif; ?>

  <?php if(count($errors) > 0): ?>
  <div class="alert alert-danger">
    <ul>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><?php echo e($error); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
  <?php endif; ?>
  <div class="login-box-body">
    <div class="login-logo">
      <a href="#"><img src=""><img src="<?php echo e(asset("images/wira.jpg")); ?>" style="width:120px;"></a>
    </div>
    <!-- /.login-logo -->
    <b class="login-box-msg">Silahkan Masukan Username dan Password</b>

    <form action="<?php echo e(url("login")); ?>" method="POST">

      <?php echo e(csrf_field()); ?>

      <div class="form-group has-feedback">

        <input type="username" name="username" value="<?php echo e(old("username")); ?>" class="form-control" placeholder="Username">

        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-success btn-flat" style="width:100% !important">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <br>
    <a href="<?php echo e(route("register")); ?>" class="btn btn-primary btn-flat" style="width:100% !important">Daftar Akun Baru</a>
    <br><br>
    <a href="<?php echo e(url("/password/reset")); ?>" class="" style="width:100% !important">Lupa Password</a>

  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Installer\Github\Github\menpro\resources\views/auth/login.blade.php ENDPATH**/ ?>