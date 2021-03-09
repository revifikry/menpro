<header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><img src="<?php echo e(asset("images/wiralogobaru1.png")); ?>" style="width:100px;"></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="<?php echo e(asset("images/wiralogobaru1.png")); ?>" style="width:100px;"><b></b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              
            <span class="hidden-xs"><?php echo e(Auth::guard($grd)->user()->nama); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header text-center" style="height:auto;">
                <div class="" alt="User Image" style="margin: 0 auto;width:19%;font-weight:bold;font-size:20px;color:white;background: #3c8dbc;border:3px solid #fff;border-radius:50%;padding:6px 15px;"><?php echo e(strtoupper(Auth::guard($grd)->user()->nama[0])); ?></div>
        

                <p>
                    <?php echo e(Auth::guard($grd)->user()->nama); ?>

                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo e(route('logout')); ?>"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                  
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header><?php /**PATH C:\Installer\Xampp\xampp\htdocs\menpro\resources\views/include/navbar.blade.php ENDPATH**/ ?>