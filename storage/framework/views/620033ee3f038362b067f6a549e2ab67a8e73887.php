<?php $__env->startSection('content'); ?>
<!-- Start category Area -->
<div class="text-center feature-head">
    <br />
    <br />
    <br />
    <br />
    <center>
        <h1>Materi Kuliah</h1>
    </center>

    <div class="row" style="padding-top:50px;">
    </div>
    <div class="container">
        <div class="row">
            <a href="https://www.rubin.id/daftar-rubin.html">
                <?php if($kuliah->isEmpty()): ?>
                <h3 class="text-center" style="margin-top:60px;border:1px solid #333;padding:10px;"> Belum ada pengumuman </h3>
                <?php else: ?>
                <?php $__currentLoopData = $kuliah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <center>
                                <h4><a href="<?php echo e(url("/materi/".$p->id)); ?>"><?php echo e($p->judul); ?></a></h4>
                            </center>
                        </div>
                        <div class="card-body" style=" background-color: #f4f4f4;">
                            <center>
                                <img src="<?php echo e(asset("$p->thumbnail")); ?>" alt="" style="width:200px;height:300px;">
                            </center>
                        </div>
                        <div class="card-footer ">
                            <center>
                                <p class="pad">
                                <p class="date"><?php echo e($p->upl_date); ?></p>

                                </p>
                        </div>




                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </a>
            <br />
            <br />
        </div>

    </div>
</div>
<!-- End category Area -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Installer\Github\Github\menpro\resources\views/lpmateri.blade.php ENDPATH**/ ?>