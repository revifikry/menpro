<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
  <style type="text/css">
    .utilitybar {
      background-color: #fc8e22;
    }

    body {
      font-family: Montserrat;
      font-size: 14px;
      color: #575757;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .comment-reply-title,
    .widget .widget-title,
    .entry-header h1.entry-title {
      font-family: Montserrat;
    }

    .themecolor {
      color: #fc8e22;
    }

    .themebgcolor {
      background-color: #fc8e22;
    }

    .themebordercolor {
      border-color: #fc8e22;
    }

    .tx-slider .owl-pagination .owl-page>span {
      background: transparent;
      border-color: #fc8e22;
    }

    .tx-slider .owl-pagination .owl-page.active>span {
      background-color: #fc8e22;
    }

    .tx-slider .owl-controls .owl-buttons .owl-next,
    .tx-slider .owl-controls .owl-buttons .owl-prev {
      background-color: #fc8e22;
    }

    .nxs-gradient .nx-slider .da-img:after {
      background: rgba(231, 14, 119, .72);
      background: linear-gradient(135deg, rgba(231, 14, 119, .72) 0%, rgba(250, 162, 20, .72) 100%);
    }

    a,
    a:visited,
    .blog-columns .comments-link a:hover {
      color: #fc8e22;
    }

    input:focus,
    textarea:focus,
    .woocommerce #content div.product form.cart .button {
      border: 1px solid #fc8e22;
    }

    button,
    input[type="submit"],
    input[type="button"],
    input[type="reset"],
    .nav-container .current_page_item>a>span,
    .nav-container .current_page_ancestor>a>span,
    .nav-container .current-menu-item>a span,
    .nav-container .current-menu-ancestor>a>span,
    .nav-container li a:hover span {
      background-color: #fc8e22;
    }

    .nav-container li:hover>a,
    .nav-container li a:hover {
      color: #fc8e22;
    }

    .nav-container .sub-menu,
    .nav-container .children,
    .header-icons.woocart .cartdrop.widget_shopping_cart.nx-animate {
      border-top: 2px solid #fc8e22;
    }

    .ibanner,
    .da-dots span.da-dots-current,
    .tx-cta a.cta-button,
    .header-iconwrap .header-icons.woocart>a .cart-counts {
      background-color: #fc8e22;
    }

    #ft-post .entry-thumbnail:hover>.comments-link,
    .tx-folio-img .folio-links .folio-linkico,
    .tx-folio-img .folio-links .folio-zoomico {
      background-color: #fc8e22;
    }

    .entry-header h1.entry-title a:hover,
    .entry-header>.entry-meta a:hover,
    .header-icons.woocart .cartdrop.widget_shopping_cart li a:hover {
      color: #fc8e22;
    }

    .featured-area div.entry-summary>p>a.moretag:hover,
    body:not(.max-header) ul.nav-menu>li.nx-highlight:before {
      background-color: #fc8e22;
    }

    .site-content div.entry-thumbnail .stickyonimg,
    .site-content div.entry-thumbnail .dateonimg,
    .site-content div.entry-nothumb .stickyonimg,
    .site-content div.entry-nothumb .dateonimg {
      background-color: #fc8e22;
    }

    .entry-meta a,
    .entry-content a,
    .comment-content a,
    .entry-content a:visited {
      color: #fc8e22;
    }

    .format-status .entry-content .page-links a,
    .format-gallery .entry-content .page-links a,
    .format-chat .entry-content .page-links a,
    .format-quote .entry-content .page-links a,
    .page-links a {
      background: #fc8e22;
      border: 1px solid #fc8e22;
      color: #ffffff;
    }

    .format-gallery .entry-content .page-links a:hover,
    .format-audio .entry-content .page-links a:hover,
    .format-status .entry-content .page-links a:hover,
    .format-video .entry-content .page-links a:hover,
    .format-chat .entry-content .page-links a:hover,
    .format-quote .entry-content .page-links a:hover,
    .page-links a:hover {
      color: #fc8e22;
    }

    .iheader.front,
    .nx-preloader .nx-ispload,
    .site-footer .widget-area .widget .wpcf7 .wpcf7-submit {
      background-color: #fc8e22;
    }

    .navigation a,
    .tx-post-row .tx-folio-title a:hover,
    .tx-blog .tx-blog-item h3.tx-post-title a:hover {
      color: #fc8e22;
    }

    .paging-navigation div.navigation>ul>li a:hover,
    .paging-navigation div.navigation>ul>li.active>a {
      color: #fc8e22;
      border-color: #fc8e22;
    }

    .comment-author .fn,
    .comment-author .url,
    .comment-reply-link,
    .comment-reply-login,
    .comment-body .reply a,
    .widget a:hover {
      color: #fc8e22;
    }

    .widget_calendar a:hover,
    #wprmenu_menu_ul li.wprmenu-cart span.cart-counts {
      background-color: #fc8e22;
      color: #ffffff;
    }

    .widget_calendar td#next a:hover,
    .widget_calendar td#prev a:hover,
    .woocommerce #content div.product form.cart .button {
      background-color: #fc8e22;
      color: #ffffff;
    }

    .site-footer div.widget-area .widget a:hover {
      color: #fc8e22;
    }

    .site-main div.widget-area .widget_calendar a:hover,
    .site-footer div.widget-area .widget_calendar a:hover {
      background-color: #fc8e22;
      color: #ffffff;
    }

    .widget a:visited,
    .product a:hover {
      color: #373737;
    }

    .widget a:hover,
    .entry-header h1.entry-title a:hover,
    .error404 .page-title:before,
    .tx-service-icon span i {
      color: #fc8e22;
    }

    .da-dots>span>span,
    .tx-slider .tx-slide-button a,
    .tx-slider .tx-slide-button a:visited {
      background-color: #fc8e22;
    }

    .iheader,
    .format-status,
    .tx-service:hover .tx-service-icon span,
    .nav-container .tx-highlight:after {
      background-color: #fc8e22;
    }

    .tx-cta {
      border-left: 6px solid #fc8e22;
    }

    .paging-navigation #posts-nav>span:hover,
    .paging-navigation #posts-nav>a:hover,
    .paging-navigation #posts-nav>span.current,
    .paging-navigation #posts-nav>a.current,
    .paging-navigation div.navigation>ul>li a:hover,
    .paging-navigation div.navigation>ul>li>span.current,
    .paging-navigation div.navigation>ul>li.active>a {
      border: 1px solid #fc8e22;
      color: #fc8e22;
    }

    .entry-title a {
      color: #141412;
    }

    .tx-service-icon span {
      border: 2px solid #fc8e22;
    }

    .ibanner .da-slider .owl-item .da-link,
    .sidebar.nx-prod-pop.nx-leftsidebar .widget ul.product-categories li:hover>a {
      background-color: #fc8e22;
      color: #FFF;
    }

    .ibanner .da-slider .owl-item .da-link:hover {
      background-color: #373737;
      color: #FFF;
    }

    .ibanner .da-slider .owl-controls .owl-page span {
      border-color: #fc8e22;
    }

    .ibanner .da-slider .owl-controls .owl-page.active span,
    .ibanner .da-slider .owl-controls.clickable .owl-page:hover span {
      background-color: #fc8e22;
    }

    .ibanner .sldprev,
    .ibanner .da-slider .owl-prev,
    .ibanner .sldnext,
    .ibanner .da-slider .owl-next {
      background-color: #fc8e22;
    }

    .colored-drop .nav-container ul ul a,
    .colored-drop ul.nav-container ul a,
    .colored-drop ul.nav-container ul,
    .colored-drop .nav-container ul ul {
      background-color: #fc8e22;
    }

    .sidebar.nx-prod-pop.nx-leftsidebar .widget ul.product-categories>li ul {
      border-bottom-color: #fc8e22;
    }

    .woocommerce #page ul.products li.product:hover .add_to_cart_button {
      background-color: #fc8e22;
      border-color: 1px solid #fc8e22;
    }

    .nx-nav-boxedicons .header-icons.woocart .cartdrop.widget_shopping_cart.nx-animate {
      border-bottom-color: #fc8e22
    }

    .nx-nav-boxedicons .site-header .header-icons>a>span.genericon:before,
    ul.nav-menu>li.tx-heighlight:before,
    .woocommerce .nxowoo-box:hover a.button.add_to_cart_button {
      background-color: #fc8e22
    }
  </style>
  <style id="wprmenu_css" type="text/css">
    /* apply appearance settings */
    .menu-toggle {
      display: none !important;
    }

    @media (max-width: 1069px) {

      .menu-toggle,
      #navbar {
        display: none !important;
      }
    }

    #wprmenu_bar {
      background: #2e2e2e;
    }

    #wprmenu_bar .menu_title,
    #wprmenu_bar .wprmenu_icon_menu {
      color: #F2F2F2;
    }

    #wprmenu_menu {
      background: #2E2E2E !important;
    }

    #wprmenu_menu.wprmenu_levels ul li {
      border-bottom: 1px solid #131212;
      border-top: 1px solid #0D0D0D;
    }

    #wprmenu_menu ul li a {
      color: #CFCFCF;
    }

    #wprmenu_menu ul li a:hover {
      color: #606060;
    }

    #wprmenu_menu.wprmenu_levels a.wprmenu_parent_item {
      border-left: 1px solid #0D0D0D;
    }

    #wprmenu_menu .wprmenu_icon_par {
      color: #CFCFCF;
    }

    #wprmenu_menu .wprmenu_icon_par:hover {
      color: #606060;
    }

    #wprmenu_menu.wprmenu_levels ul li ul {
      border-top: 1px solid #131212;
    }

    #wprmenu_bar .wprmenu_icon span {
      background: #FFFFFF;
    }

    #wprmenu_menu.left {
      width: 80%;
      left: -80%;
      right: auto;
    }

    #wprmenu_menu.right {
      width: 80%;
      right: -80%;
      left: auto;
    }



    /* show the bar and hide othere navigation elements */
    @media  only screen and (max-width: 1069px) {
      html {
        padding-top: 42px !important;
      }

      #wprmenu_bar {
        display: block !important;
      }

      div#wpadminbar {
        position: fixed;
      }
    }
  </style>
  <style type="text/css" id="custom-background-css">
    body.custom-background {
      background-image: url("https://kemahasiswaan.itenas.ac.id/wp-content/themes/i-craft/images/bg7.jpg");
      background-position: center top;
      background-size: cover;
      background-repeat: repeat;
      background-attachment: fixed;
    }
  </style>
  <link rel="icon" href="https://kemahasiswaan.itenas.ac.id/wp-content/uploads/2021/02/cropped-logo-itenas-32x32.png" sizes="32x32" />
  <link rel="icon" href="https://kemahasiswaan.itenas.ac.id/wp-content/uploads/2021/02/cropped-logo-itenas-192x192.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="https://kemahasiswaan.itenas.ac.id/wp-content/uploads/2021/02/cropped-logo-itenas-180x180.png" />
  <meta name="msapplication-TileImage" content="https://kemahasiswaan.itenas.ac.id/wp-content/uploads/2021/02/cropped-logo-itenas-270x270.png" />
  <style id="kirki-inline-styles">
    .site-header .home-link img {
      max-height: 64px;
    }

    .site-header.fixeddiv .home-link img {
      max-height: 48px;
    }

    .nav-container li a {
      font-size: 14px;
      font-weight: 400;
    }

    .footer-bg,
    .site-footer .sidebar-container {
      background-color: #383838;
    }

    .site-footer .widget-area .widget .widget-title {
      color: #FFFFFF;
    }

    .site-footer .widget-area .widget,
    .site-footer .widget-area .widget li {
      color: #bbbbbb;
    }

    .site-footer .widget-area .widget a {
      color: #dddddd;
    }

    .site-footer {
      background-color: #272727;
    }

    .site-footer .site-info,
    .site-footer .site-info a {
      color: #777777;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(https://kemahasiswaan.itenas.ac.id/wp-content/fonts/montserrat/JTUSjIg1_i6t8kCHKm459WRhzSTh89ZNpQ.woff) format('woff');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(https://kemahasiswaan.itenas.ac.id/wp-content/fonts/montserrat/JTUSjIg1_i6t8kCHKm459W1hzSTh89ZNpQ.woff) format('woff');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(https://kemahasiswaan.itenas.ac.id/wp-content/fonts/montserrat/JTUSjIg1_i6t8kCHKm459WZhzSTh89ZNpQ.woff) format('woff');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(https://kemahasiswaan.itenas.ac.id/wp-content/fonts/montserrat/JTUSjIg1_i6t8kCHKm459WdhzSTh89ZNpQ.woff) format('woff');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(https://kemahasiswaan.itenas.ac.id/wp-content/fonts/montserrat/JTUSjIg1_i6t8kCHKm459WlhzSTh89Y.woff) format('woff');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
  </style> <!-- Fonts Plugin CSS - https://fontsplugin.com/ -->
  <style>
  </style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Itenas</title>
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo e(asset("bower_components/bootstrap/dist/css/bootstrap.min.css")); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset("bower_components/font-awesome/css/font-awesome.min.css")); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo e(asset("bower_components/Ionicons/css/ionicons.min.css")); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset("dist/css/AdminLTE.min.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("dist/css/select2.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")); ?>">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="<?php echo e(asset("dist/css/skins/skin-yellow.min.css")); ?>">

  <?php echo $__env->yieldContent("style"); ?>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition skin-yellow sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <?php echo $__env->make("include.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Left side column. contains the logo and sidebar -->
    <?php echo $__env->make("include.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <?php echo $__env->yieldContent("content-header"); ?>

      <!-- Main content -->
      <section class="content container-fluid">

        <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <?php echo $__env->yieldContent("content"); ?>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="pull-right hidden-xs">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED JS SCRIPTS -->

  <!-- jQuery 3 -->
  <script src="<?php echo e(asset("bower_components/jquery/dist/jquery.min.js")); ?>"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo e(asset("bower_components/bootstrap/dist/js/bootstrap.min.js")); ?>"></script>
  <script src="<?php echo e(asset("bower_components/datatables.net/js/jquery.dataTables.min.js")); ?>"></script>
  <script src="<?php echo e(asset("bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js")); ?>"></script>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <!-- AdminLTE App -->

  <script src="<?php echo e(asset("dist/js/adminlte.min.js")); ?>"></script>
  <script src="<?php echo e(asset("dist/js/vue.js")); ?>"></script>
  <script src="<?php echo e(asset("dist/js/adminlte.min.js")); ?>"></script>
  <script src="<?php echo e(asset("dist/js/sweetalert.js")); ?>"></script>
  <script src="<?php echo e(asset("dist/js/axios.js")); ?>"></script>
  <script src="<?php echo e(asset("bower_components/bootstrap/js/tooltip.js")); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
  <script>
    $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    })
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  </script>


  <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
  <?php echo $__env->yieldContent("script"); ?>
</body>

</html><?php /**PATH E:\IF\Semester 8\Projekan Menpro\menpro\resources\views/layouts/home.blade.php ENDPATH**/ ?>