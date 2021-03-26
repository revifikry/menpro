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
  <link rel="stylesheet" href="{{asset("blog/css/linearicons.css")}}">
  <link rel="stylesheet" href="{{asset("blog/css/font-awesome.min.css")}}">
  <link rel="stylesheet" href="{{asset("blog/css/bootstrap.css")}}">
  <link rel="stylesheet" href="{{asset("blog/css/owl.carousel.css")}}">
  <link rel="stylesheet" href="{{asset("blog/css/main.css")}}">
</head>

<body>

  <!-- Start Header Area -->
  <header class="default-header">
    <!-- Image and text -->
    <nav class="navbar navbar-light" style=" background-color: #fc8e22;">
      <!-- <div class="container-fluid"> -->
      <div class="hgroup-wrap clearfix">
        <section class="hgroup-right">
          <div class="social-icons clearfix" style="color:white; margin-left: 200px;">
            <ul>
            <li class="fa fa-phone">
                  <a title="Travelify on telephone" target="_blank" style="font-size: 14px;">089123848007</a>
                </li>
                <li class="fa fa-envelope">
                  <a href="https://gmail.com" style="align-items:flex-start; color:white; font-size: 14px; " target="_blank">Kewirausahaan@itenas.ac.id</a>
                </li>
                <li class="fa fa-facebook"  style="margin-left: 300px;">
                <a href="https://facebook.com" target="_blank" style="color:white; font-size: 14px;"> Kewirausahaan Itenas</a>
                </li>
                <li class="fa fa-twitter">
                  <a href="https://twitter.com" target="_blank" style="color:white; font-size: 14px;"> @kwu_itenas</a>
                </li>
                <li class="fa fa-instagram">
                  <a href="https://www.instagram.com" target="_blank" style="color:white; font-size: 14px;"> @kwu_itenas</a>
                </li>
                <li class="fa fa-youtube">
                  <a href="https://youtube.com" target="_blank" style="color:white; font-size: 14px;"> Kewirausahaan Itenas</a>                
            </ul>
          </div>
        </section>
      </div>
      <!-- <div id="utilitybar" class="utilitybar ">
        	<div class="ubarinnerwrap">
                <div class="socialicons">
                    <ul class="list-inline">
                      <li><a href="https://colorlib.com" title="facebook" target="_blank"><i class="fa fa-facebook">KWU Itenas</i></a></li>
                      <li><a href="https://colorlib.com" title="twitter" target="_blank"><i class="fa fa-twitter">@KWU_itenas</i></a></li>
                      <li><a href="https://colorlib.com" title="youtube" target="_blank"><i class="fa fa-youtube"></i></a></li> 
                      <li><a href="https://colorlib.com" title="instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>  
                    </ul>                
                <div class="topphone">
                    <i class="fa fa-phone">+62 22 7272215 ext 234</i>      	                   
                </div>               
                <div class="topphone">
                    <i class="fa fa-mail">kemahasiswaan@itenas.ac.id</i>                          
                </div>
                 
                
                                                               
            </div> 
        </div> -->
      <!-- <a class="navbar-brand" href="#">
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
          <i class="far fa-envelope"> Kewirausahaan@itenas.ac.id</i> -->
      <!-- <img src="blog/img/phone.png" alt="" width="20" height="16" class="d-inline-block align-top"><style type="text/css">p {font-size: 13px;}</style><p>082266778899</p>
          <img src="blog/img/email.png" alt="" width="20" height="16" class="d-inline-block align-top"><style type="text/css">p {font-size: 13px;}</style><p>
            Kewirausahaan@itenas.ac.id</p> -->
      <!-- </a>
        <div class="col-lg-4 col-sm-12 header-social">
          <style type="text/css">
            i {
              color: white;
              font-size: 17px;
              text-size-adjust: 15px;
            }
          </style>
          <!-- <a href="#"><i class="fa fa-facebook" width="30" height="24"></i></a>Kewirausahaan Itenas  -->
      <!-- <a href="#"><i class="fa fa-twitter"> @KWU_itenas</i></a>
          <a href="#"><i class="fa fa-instagram"> @KWU_itenas</i></a> -->
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="{{ url("/") }}">
          <img src="{{asset("images/wira.jpg")}}" alt="" style="width:150px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li><a href="{{ url("/") }}">Home</a></li>
            <li><a href="{{ url("/pengumuman") }}">Pengumuman</a></li>

            <li><a href="{{ url("/timdosen") }}">Tim Dosen</a></li>
            <li><a href="{{ url("/proposal") }}">Pameran</a></li>
            <li><a href="{{ url("/kegiatan") }}">Kegiatan</a></li>
            <li><a href="{{ url("/matakuliah") }}">Materi Kuliah</a></li>
            @if(!Auth::check())
            <li><a href="{{ url("login") }}">Log In</a></li>
            @else
            <li><a href="{{ url("getIn") }}">Dashboard</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                KELUAR</a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>
            @endif
            <!-- Dropdown -->
            {{-- <li class="dropdown">
                  <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Pages
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="single.html">Single</a>
                    <a class="dropdown-item" href="category.html">Category</a>
                    <a class="dropdown-item" href="search.html">Search</a>
                    <a class="dropdown-item" href="archive.html">Archive</a>
                    <a class="dropdown-item" href="generic.html">Generic</a>
                    <a class="dropdown-item" href="elements.html">Elements</a>
                  </div>
                </li>         --}}
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- End Header Area -->

  <!-- start banner Area -->
  @yield("content")
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

  <script src="{{asset("blog/js/vendor/jquery-2.2.4.min.js")}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="{{asset("blog/js/vendor/bootstrap.min.js")}}"></script>
  <script src="{{asset("blog/js/jquery.ajaxchimp.min.js")}}"></script>
  <script src="{{asset("blog/js/parallax.min.js")}}"></script>
  <script src="{{asset("blog/js/owl.carousel.min.js")}}"></script>
  <script src="{{ asset("dist/js/vue.js") }}"></script>
  <script src="{{asset("blog/js/jquery.magnific-popup.min.js")}}"></script>
  <script src="{{asset("blog/js/jquery.sticky.js")}}"></script>
  <script src="{{asset("blog/js/main.js")}}"></script>
  @yield("script")
</body>

</html>