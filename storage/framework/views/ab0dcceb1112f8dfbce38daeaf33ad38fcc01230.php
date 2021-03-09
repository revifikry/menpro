<?php $__env->startSection('content'); ?>
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
        <?php if($keg->isEmpty()): ?>
        <h3 class="text-center" style="margin-top:60px;border:1px solid #333;padding:10px;"> Belum ada Kegiatan </h3>
        <?php else: ?>
        <div class="active-cat-carusel">
            <?php $__currentLoopData = $keg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item single-cat">
                <img src="<?php echo e(asset("$g->thumbnail")); ?>" alt="" style="width:340px;height:226px;">
                <p class="date"><?php echo e($g->upl_date); ?></p>
                <h4><a href="<?php echo e(url("/news/".$p->id)); ?>"><?php echo e($g->judul); ?></a></h4>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <?php endif; ?>
    </div>
</section>
<!-- End category Area -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\menpro\resources\views/lpkegiatan.blade.php ENDPATH**/ ?>