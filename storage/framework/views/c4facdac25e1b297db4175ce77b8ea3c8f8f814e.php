<?php $__env->startSection('content'); ?>
<div class="post-wrapper pt-100">
    <!-- Start post Area -->
    <section class="post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8" style="padding-bottom: 60px;">
                    <div class="single-page-post">
                        <img class="img-fluid" src="<?php echo e(asset("$materi->thumbnail")); ?>" alt="" style="width:740px;height:487px;">
                        <div class="top-wrapper ">
                            <div class="row d-flex justify-content-between">
                                <h2 class="col-lg-8 col-md-12 text-uppercase">
                                    <?php echo e($materi->judul); ?>

                                </h2>
                                <div class="col-lg-4 col-md-12 right-side d-flex justify-content-end">
                                    <div class="desc">
                                        <h3><?php echo e($materi->upload_date); ?></h3>
                                    </div>
                                    <div class="user-img">
                                        <img src="img/user.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="single-post-content">
                            <?php echo $materi->isi; ?>

                        </div>

                        <!-- End nav Area -->

                        <!-- Start comment-sec Area -->

                        <!-- End comment-sec Area -->


                        <!-- End commentform Area -->

                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End post Area -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\IF\Semester 8\Projekan Menpro\menpro\resources\views/vmateri.blade.php ENDPATH**/ ?>