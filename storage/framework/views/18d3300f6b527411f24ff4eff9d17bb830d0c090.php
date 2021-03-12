<?php $__env->startSection('content'); ?>
<div class="text-center feature-head">
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />

    <center>
        <h1>Kegiatan</h1>
    </center>

    <div class="row" style="padding-top:50px;">
        <div class="container">
            <div class="row">
                <a href="https://www.rubin.id/daftar-rubin.html">
                    <?php if($keg->isEmpty()): ?>
                    <h3 class="text-center" style="margin-top:60px;border:1px solid #333;padding:10px;"> Belum ada Kegiatan </h3>
                    <?php else: ?>
                    <?php $__currentLoopData = $keg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <center>
                                    <h4><a href="<?php echo e(url("/news/".$g->id)); ?>"><?php echo e($g->judul); ?></a></h4>
                                </center>
                            </div>
                            <div class="card-body" style=" background-color: #f4f4f4;">
                                <center>
                                    <img src="<?php echo e(asset("$g->thumbnail")); ?>" alt="" style="width:200px;height:300px;">
                                </center>
                            </div>
                            <div class="card-footer ">
                                <center>
                                    <p class="pad">
                                    <p class="date"><?php echo e($g->upl_date); ?></p>

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
</div>
<?php echo $__env->make('layouts.landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Installer\Github\Github\menpro\resources\views/lpKegiatan.blade.php ENDPATH**/ ?>