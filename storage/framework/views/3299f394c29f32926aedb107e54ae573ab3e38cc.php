<aside class="main-sidebar">
    <?php
        $path = Request::path();
    ?>
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <div class="img-circle" alt="User Image" style="margin-left:-5px;font-weight:bold;font-size:20px;color:white;background: #222d32;border:3px solid #fff;border-radius:50%;padding:3px 12px;"><?php echo e(strtoupper(Auth::user()->name[0])); ?></div>
        </div>
        <div class="pull-left info">
          <p><?php echo e(Auth::user()->name); ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <!-- Optionally, you can add icons to the links -->
        <?php if(Auth::user()->name == "mhs"): ?>
        <li><a href="<?php echo e(route("regis")); ?>"><i class="fa fa-certificate"></i> <span>Daftar Kelompok</span></a></li>
        <?php else: ?>
        <li><a href="<?php echo e(route("dashboard")); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="<?php echo e(route("manage_jurusan")); ?>"><i class="fa fa-building"></i> <span>Setting Jurusan</span></a></li>
        <li><a href="<?php echo e(route("tahunajaran")); ?>"><i class="fa fa-clock-o"></i> <span>Setting Tahun Ajaran</span></a></li>
        <?php endif; ?>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside><?php /**PATH F:\laragon\www\menpro\resources\views/include/sidebar.blade.php ENDPATH**/ ?>