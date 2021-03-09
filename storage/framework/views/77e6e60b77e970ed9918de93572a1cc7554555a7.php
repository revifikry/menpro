<?php $__env->startSection('content'); ?>
<div class="login-box">
    <div class="login-logo">
      <a href="#"><img src=""><img src="<?php echo e(asset("images/logoz.png")); ?>" style="width:40px;"><b>Itenas</b>Kewirausahaan</a>
    </div>
    <!-- /.login-logo -->
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
      <p class="login-box-msg">Login</p>
      
     
      <form action="<?php echo e(url("admin-login")); ?>" method="POST">
    
        <?php echo e(csrf_field()); ?>

        <div class="form-group has-feedback">
         
            <input type="username" name="nid" value="<?php echo e(old("nid")); ?>" class="form-control" placeholder="NID">
        
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="PIN">
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
      
  
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\menpro\resources\views/auth/adminLogin.blade.php ENDPATH**/ ?>