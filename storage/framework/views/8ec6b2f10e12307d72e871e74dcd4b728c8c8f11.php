<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="colorlib">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Itenas</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
  <!--
    CSS
    ============================================= -->
  <link rel="stylesheet" href="<?php echo e(asset("blog/css/linearicons.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("blog/css/font-awesome.min.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("blog/css/bootstrap.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("blog/css/owl.carousel.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("blog/css/main.css")); ?>">
</head>

<body>

  <!-- Start Header Area -->
  <header class="default-header">
    <!-- Image and text -->
    <nav class="navbar navbar-light" style=" background-color: #fc8e22;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <title>icon</title>
          <script src="https://kit.fontawesome.com/e537e3df50.js" crossorigin="anonymous"></script>
          <style type="text/css">
            i {
              color: white;
              font-size: 17px;
              text-size-adjust: 15px;
            }
          </style>
          <i class="fas fa-mobile-alt"> 089123848007</i>
          <i class="far fa-envelope"> Kewirausahaan@itenas.ac.id</i>
          <!-- <img src="blog/img/phone.png" alt="" width="20" height="16" class="d-inline-block align-top"><style type="text/css">p {font-size: 13px;}</style><p>082266778899</p>
          <img src="blog/img/email.png" alt="" width="20" height="16" class="d-inline-block align-top"><style type="text/css">p {font-size: 13px;}</style><p>
            Kewirausahaan@itenas.ac.id</p> -->
        </a>
        <div class="col-lg-4 col-sm-12 header-social">
          <style type="text/css">
            i {
              color: white;
              font-size: 17px;
              text-size-adjust: 15px;
            }
          </style>
          <!-- <a href="#"><i class="fa fa-facebook" width="30" height="24"></i></a>Kewirausahaan Itenas  -->
          <a href="#"><i class="fa fa-twitter"> @KWU_itenas</i></a>
          <a href="#"><i class="fa fa-instagram"> @KWU_itenas</i></a>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="<?php echo e(url("/")); ?>">
          <img src="<?php echo e(asset("images/wira.jpg")); ?>" alt="" style="width:150px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li><a href="<?php echo e(url("/")); ?>">Home</a></li>
            <li><a href="<?php echo e(url("/pengumuman")); ?>">Pengumuman</a></li>

            <li><a href="<?php echo e(url("/timdosen")); ?>">Tim Dosen</a></li>
            <li><a href="<?php echo e(url("/proposal")); ?>">Pameran</a></li>
            <li><a href="<?php echo e(url("/kegiatan")); ?>">Kegiatan</a></li>
            <li><a href="<?php echo e(url("/matakuliah")); ?>">Mata Kuliah</a></li>
            <?php if(!Auth::check()): ?>
            <li><a href="<?php echo e(url("login")); ?>">Log In</a></li>
            <?php else: ?>
            <li><a href="<?php echo e(url("getIn")); ?>">Dashboard</a></li>
            <?php endif; ?>
            <!-- Dropdown -->
            
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- End Header Area -->

  <!-- start banner Area -->
  <?php echo $__env->yieldContent("content"); ?>
  <!-- End team Area -->

  <!-- start footer Area -->
  <footer class="footer-area section-gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-12">

        </div>
      </div>

      <div class="row footer-bottom d-flex justify-content-between">
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        <p class="col-lg-8 col-sm-12 footer-text">Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script> All rights reserved. Created by Revi Mochamad Fikry, Cindy Mawar Ningsih, Irgilian Satria | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        <div class="col-lg-4 col-sm-12 footer-social">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-dribbble"></i></a>
          <a href="#"><i class="fa fa-behance"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!-- End footer Area -->

  <script src="<?php echo e(asset("blog/js/vendor/jquery-2.2.4.min.js")); ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="<?php echo e(asset("blog/js/vendor/bootstrap.min.js")); ?>"></script>
  <script src="<?php echo e(asset("blog/js/jquery.ajaxchimp.min.js")); ?>"></script>
  <script src="<?php echo e(asset("blog/js/parallax.min.js")); ?>"></script>
  <script src="<?php echo e(asset("blog/js/owl.carousel.min.js")); ?>"></script>
  <script src="<?php echo e(asset("dist/js/vue.js")); ?>"></script>
  <script src="<?php echo e(asset("blog/js/jquery.magnific-popup.min.js")); ?>"></script>
  <script src="<?php echo e(asset("blog/js/jquery.sticky.js")); ?>"></script>
  <script src="<?php echo e(asset("blog/js/main.js")); ?>"></script>
  <?php echo $__env->yieldContent("script"); ?>
</body>

</html><?php /**PATH E:\IF\Semester 8\Projekan Menpro\menpro\resources\views/layouts/landing.blade.php ENDPATH**/ ?>