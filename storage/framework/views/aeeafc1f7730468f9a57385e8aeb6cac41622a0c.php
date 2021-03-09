<?php $__env->startSection('content'); ?>
<section class="banner-area relative" id="home">
  <div class="overlay-bg overlay"></div>
  <div class="container">
    <div class="row ">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="<?php echo e(asset("blog/img/itens")); ?>.jpg" alt="..." style="height:500px; width:1200px;>
          </div>
          <div class=" carousel-item" data-bs-interval="2000">
            <img src="..." class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
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

<!-- Start Kegiatan Area -->
<section class="category-area section-gap" id="kegiatan" style="padding-top :30px;">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="menu-content pb-10 col-lg-8">
        <div class="title text-center">
          <h2 class="">Kegiatan Kewirausahaan Itenas</h2>
        </div>
      </div>
    </div>
    <?php if($peng->isEmpty()): ?>
    <h3 class="text-center" style="margin-top:60px;border:1px solid #333;padding:10px;"> Belum ada Kegiatan </h3>
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
              <img class="img-fluid" src="<?php echo e(asset("$v->file")); ?>" alt="" style="width: 240px;height:240px;">
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
<?php echo $__env->make('layouts.landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MENPRO\resources\views/lpHome.blade.php ENDPATH**/ ?>