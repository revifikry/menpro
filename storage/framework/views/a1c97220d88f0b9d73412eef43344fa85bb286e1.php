<aside class="main-sidebar">
  <?php
  $path = Request::path();
  $isAda = '';
  if(auth()->guard("web")->check()){

  $mhs =auth()->guard("web")->user()->id;
  $dtKel = \DB::table("detail_kelompok")->where("id_user",$mhs);

  $isAda = $dtKel->exists();

  if($isAda){
  $dtKel = $dtKel->first();
  // $kelompok = App\Kelompok::find($dtKel->id_kelompok);
  // dd($kelompok->mhs()->get());
  }
  }
  ?>
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <div class="img-circle" alt="User Image" style="margin-left:-5px;font-weight:bold;font-size:20px;color:white;background: #222d32;border:3px solid #fff;border-radius:50%;padding:3px 12px;"><?php echo e(strtoupper(Auth::guard($grd)->user()->nama[0])); ?></div>
      </div>
      <div class="pull-left info">
        <p><?php echo e(Auth::guard($grd)->user()->nama); ?></p>
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
      <li><a href="<?php echo e(url("/")); ?>"><i class="fa fa-home"></i> <span>Home </span></a></li>
      <li><a href="<?php echo e(url("proposal")); ?>"><i class="fa fa-file"></i> <span>Semua Proposal </span></a></li>
      <?php if(Auth::user()->role == 4): ?>
      <li><a href="<?php echo e(route("regis")); ?>"><i class="fa fa-users"></i> <span>Kelompok </span></a></li>
      <?php if($isAda): ?>
      <li><a href="<?php echo e(route("uplProposal")); ?>"><i class="fa fa-file"></i> <span>Upload Proposal</span></a></li>
      <li><a href="<?php echo e(route("uplBanner")); ?>"><i class="fa fa-image"></i> <span>Banner & Bussiness Canvas</span></a></li>
      <?php else: ?>
      <li><a href="#" onclick="alert('Belum Input Data Kelompok')"><i class="fa fa-file"></i> <span>Upload Proposal</span></a></li>
      <li><a href="#" onclick="alert('Belum Input Data Kelompok')"><i class="fa fa-image"></i> <span>Banner & Bussiness Canvas</span></a></li>
      <?php endif; ?>
      <?php elseif(Auth::user()->role == 2): ?>
      <li><a href="<?php echo e(url("koordb")); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard </span></a></li>
      <li><a href="<?php echo e(route("createPengumuman")); ?>"><i class="fa fa-bullhorn"></i> <span>Buat Pengumuman</span></a></li>

      <?php elseif(Auth::user()->role == 1): ?>
      <li><a href="<?php echo e(route("dashboard")); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard </span></a></li>
      <li><a href="<?php echo e(route("manage_jurusan")); ?>"><i class="fa fa-building"></i> <span>Setting Jurusan</span></a></li>
      <li><a href="<?php echo e(route("tahunajaran")); ?>"><i class="fa fa-clock-o"></i> <span>Setting Tahun Ajaran</span></a></li>
      <li><a href="<?php echo e(route("setDosen")); ?>"><i class="fa fa-user"></i> <span>Dosen</span></a></li>
      <li><a href="<?php echo e(route("setUser")); ?>"><i class="fa fa-user"></i> <span>Setting User</span></a></li>
      <li><a href="<?php echo e(route("setKelas")); ?>"><i class="fa fa-hourglass-half"></i> <span>Setting Kelas</span></a></li>
      <li><a href="<?php echo e(url("setKoor")); ?>"><i class="fa fa-user"></i> <span>Setting Team Koordinator</span></a></li>
      <li><a href="<?php echo e(route("createKegiatan")); ?>"><i class="fa fa-user"></i> <span>Setting Kegiatan</span></a></li>
      <?php elseif(Auth::user()->role == 3): ?>
      <li><a href="<?php echo e(url("dosendb")); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li><a href="<?php echo e(route("dataKelompok")); ?>"><i class="fa fa-users"></i> <span>Data Kelompok & Kelas</span></a></li>
      <li><a href="<?php echo e(route("materikuliah")); ?>"><i class="fa fa-users"></i> <span>Materi Kuliah</span></a></li>
      <?php elseif(Auth::user()->role == 6): ?>
      <li><a href="<?php echo e(url("rektordb")); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard </span></a></li>
      <?php endif; ?>

      
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside><?php /**PATH E:\IF\Semester 8\Projekan Menpro\menpro\resources\views/include/sidebar.blade.php ENDPATH**/ ?>