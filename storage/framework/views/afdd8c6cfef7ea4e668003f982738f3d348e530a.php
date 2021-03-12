<?php $__env->startSection('content'); ?>
<div class="post-wrapper pt-100">
        <!-- Start post Area -->
        <section class="post-area" >
            <div class="container" style="border: 1px solid #c9c9c9; background:white;padding-top:40px;border-radius:5px;box-shadow: 1px 1px 8px; margin-bottom:70px;">
                <div class="row justify-content-center">
                    <div class="col-lg-8" style="padding-bottom: 60px;">
                        <div class="single-page-post">
                            <?php if(!empty($pen->canvas)): ?>
                            <img class="img-fluid" src="<?php echo e(asset("$pen->canvas")); ?>" onclick="window.open('<?php echo e(asset($pen->canvas)); ?>')" alt="Klik untuk lihat detail" style="width:60%;max-height:487px;margin-left:25%;border: 1px solid #c9c9c9;cursor:zoom-in;">
                            <?php else: ?>
                            <img class="img-fluid" src="<?php echo e(asset("$pen->banner")); ?>" onclick="window.open('<?php echo e(asset($pen->banner)); ?>')" alt="Klik untuk lihat detail" style="width:60%;max-height:487px;margin-left:25%;border: 1px solid #c9c9c9;cursor:zoom-in;">
                            <?php endif; ?>
                            <div class="top-wrapper ">
                                <div class="row d-flex justify-content-between">
                                    <h2 class="col-lg-8 col-md-12 text-uppercase">
                                       Judul : <?php echo e($pen->judul); ?>  <?php if(Auth::check() && Auth::user()->role != 4): ?>
                                       <a  href="<?php echo e(url($pen->historyLatest()->first()->file_proposal)); ?>" download class="btn btn-info" style="color:#f9f9f9 !important;font-size:12px;"><i class="fa fa-download" style="color:#f9f9f9 !important"></i>  Download Proposal </a>
                                       <?php endif; ?>
                                    </h2>
                                    <div class="col-lg-4 col-md-12 right-side d-flex justify-content-end">
                                        <div class="desc">
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="single-post-content">
                                
                                <h4>Nama Kelompok :</h4>
                                <?php $__currentLoopData = $pen->kelompok->mhs()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                • [<?php echo e($kel->nomor); ?>] <?php echo e($kel->nama); ?><br>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 <br>
                                 <h4>Jurusan : </h4>
                                 <?php echo e($pen->kelompok->kelas->jurusan->nama); ?>

                                 <br><br>
                                 <h4>Jenis : </h4>
                                 <?php echo e(ucfirst($pen->jenis)); ?>

                                 
                                 
                                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <br><br>
                                  <h4><?php echo e($v); ?> : </h4>
                                  <?php echo $pen->{$k}; ?>     
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('layouts.landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Installer\Github\Github\menpro\resources\views/lpPropview.blade.php ENDPATH**/ ?>