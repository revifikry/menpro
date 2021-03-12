<?php $__env->startSection('content'); ?>
<div class="login-box">
    <div class="login-box-body">
        <div class="login-logo">
            <a href="#"><img src=""><img src="<?php echo e(asset("images/wira.jpg")); ?>" style="width:120px;"></a>
        </div>
        <!-- /.login-logo -->
        <p class="login-box-msg"> Daftar Baru</p>
        <form method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group has-feedback">
                <input id="name" type="text" class="form-control <?php if ($errors->has('nama')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nama'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="nama" placeholder="Nama" value="<?php echo e(old('nama')); ?>" required autocomplete="nama">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                <?php if ($errors->has('nama')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nama'); ?>
                <small class="invalid-feedback" role="alert" style="color:#cc0001;">
                    <strong><?php echo e($message); ?></strong>
                </small>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>

            
            <script>
                function isNumberKey(evt) {
                    var charCode = (evt.which) ? evt.which : event.keyCode
                    if (charCode > 31 && (charCode < 48 || charCode > 57))
                        return false;

                    return true;
                }
            </script>
            <div class="form-group has-feedback">
                <input id="nim" type="text" class="form-control <?php if ($errors->has('nim')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nim'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" onkeypress="return isNumberKey(event)" name="nim" maxlength="9" placeholder="NIM" value="<?php echo e(old('nim')); ?>" required autocomplete="nim">
                <span class="glyphicon glyphicon-tag form-control-feedback"></span>
                <?php if ($errors->has('nim')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nim'); ?>
                <small class="invalid-feedback" role="alert" style="color:#cc0001;">
                    <strong><?php echo e($message); ?></strong>
                </small>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>

            <div class="form-group has-feedback">
                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>" required autocomplete="email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                <small class="invalid-feedback" role="alert" style="color:#cc0001;">
                    <strong><?php echo e($message); ?></strong>
                </small>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>

            <div class="form-group has-feedback">
                <input id="username" type="username" class="form-control <?php if ($errors->has('username')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('username'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="username" placeholder="Username" value="<?php echo e(old('username')); ?>" required autocomplete="username">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <?php if ($errors->has('username')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('username'); ?>
                <small class="invalid-feedback" role="alert" style="color:#cc0001;">
                    <strong><?php echo e($message); ?></strong>
                </small>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>

            <div class="form-group has-feedback">
                <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" placeholder="Password" name="password" required autocomplete="new-password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                <small class="invalid-feedback" role="alert" style="color:#cc0001;">
                    <strong><?php echo e($message); ?></strong>
                </small>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>

            <div class="form-group has-feedback">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required autocomplete="new-password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                <small class="invalid-feedback" role="alert" style="color:#cc0001;">
                    <strong><?php echo e($message); ?></strong>
                </small>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
            </div>


            <div class="form-group row mb-0">
                <div class="col-md-12 ">
                    <button type="submit" class="btn btn-primary" style="width:100% !important">
                        Daftar
                    </button>
                </div>
            </div>
        </form>
        <a href="<?php echo e(route("login")); ?>" class="btn btn-success btn-flat" style="width:100% !important">Log in</a>

    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Installer\Github\Github\menpro\resources\views/auth/register.blade.php ENDPATH**/ ?>