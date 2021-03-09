<?php $__env->startSection('content'); ?>
<section class="banner-area relative" id="home" data-parallax="scroll" data-image-src="<?php echo e(asset("blog/img/itens")); ?>.jpg" style="height:150px;">
    <div class="overlay-bg overlay"></div>
    <div class="container">
      <div class="row ">
        <div class="banner-content d-flex align-items-center col-lg-12 col-md-12" style="margin: 1.7% auto 11% auto !important; ">
          <h2 style="color:#f9f9f9;margin-top:3%;">
            Sistem Manajemen<br>
            Hari Kewirausahaan Itenas.								
          </h2>
      
        </div>	
        <div class="head-bottom-meta d-flex justify-content-between align-items-end col-lg-12">
          <div class="col-lg-6 flex-row d-flex meta-left no-padding">
            
          </div>
          <div class="col-lg-6 flex-row d-flex meta-right no-padding justify-content-end">
           
          </div>
        </div>												
      </div>
    </div>
  </section>
  <!-- End banner Area -->	


  <!-- Start category Area -->
  <section class="category-area section-gap" id="news" style="padding-top :30px;">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-10 col-lg-8">
          <div class="title text-center">
            <h2 class="">Pengumuman Terbaru Kewirausahaan Itenas</h2>
          </div>
        </div>
      </div>
      <?php if($peng->isEmpty()): ?>
          <h3 class="text-center" style="margin-top:60px;border:1px solid #333;padding:10px;"> Belum ada pengumuman </h3>
      <?php else: ?>
      <div class="active-cat-carusel">
        <?php $__currentLoopData = $peng; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="item single-cat">
          <img src="<?php echo e(asset("$p->thumbnail")); ?>" alt="" style="width:340px;height:226px;">
          <p class="date"><?php echo e($p->upl_date); ?></p>
          <h4><a href="<?php echo e(url("/news/".$p->id)); ?>"><?php echo e($p->judul); ?></a></h4>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      							
      </div>	
      <?php endif; ?>											
    </div>	
  </section>
  <!-- End category Area -->
  
  <!-- Start travel Area -->
  
  <!-- End travel Area -->
  
  <!-- Start fashion Area -->
  
  <!-- End fashion Area -->
  
  <!-- Start team Area -->

  <section class="team-area section-gap" id="team">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-70 col-lg-8">
          <div class="title text-center">
            <h1 class="mb-10">Team Koordinator Kewirausahaan</h1>
            <p></p>
          </div>
        </div>
      </div>
      <div class="row align-item-center d-flex justify-content-center">
      <div class="col-lg-6 team-left">	
        <?php echo App\KoorText::find(1)->content; ?>

      </div>
        <div class="col-lg-6 team-right d-flex justify-content-center">
          <div class="row active-team-carusel">
            <?php $__currentLoopData = App\KoorFoto::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
            <div class="single-cat">
              <div class="thumb">
                  <img class="img-fluid" src="<?php echo e(asset("$v->file")); ?>" alt=""  style="width: 240px;height:240px;">
                  <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                  </div>
              </div>
              <div class="meta-text mt-30 text-center">
                <h4><?php echo e($v->name); ?></h4>
                									    	
              </div>
          </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
          </div>
          </div>
        </div>
      </div>
    </div>	
  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\IF\Semester 8\MENPRO\resources\views/lpHome.blade.php ENDPATH**/ ?>