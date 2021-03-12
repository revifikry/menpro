<?php $__env->startSection('content'); ?>
<br />
<br />
<br />
<section class="banner-area relative" id="home">
  <div class="overlay-bg overlay"></div>
  <div class="container">
    <div class="row ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" style="height: 482.88px;" background-position: center center src="<?php echo e(asset('blog/img/itens.jpg')); ?>" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" style="height: 482.88px;" background-position: center center src="<?php echo e(asset('blog/img/itens1.jpg')); ?>" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" style="height: 482.88px;" background-position: center center src="<?php echo e(asset('blog/img/itens2.jpg')); ?>" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- End banner Area -->

<!-- Start travel Area -->

<!-- End travel Area -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Installer\Github\Github\menpro\resources\views/lpHome.blade.php ENDPATH**/ ?>