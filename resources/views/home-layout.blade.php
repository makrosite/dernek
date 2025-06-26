<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Home | Kbiz - Modern Business and Corporate HTML Template</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
        <!-- bootstrap v4 css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
        <!-- back menus css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/back-menus.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.css')}}">
        <!-- elegant-icon css  -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/elegant-icon.css')}}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
        <!-- back-animations css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/back-animations.css')}}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
        <!-- Spacing css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/back-spacing.css')}}">
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">



          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    </head>
    <body>
        <div class="back-search-overlay"></div>
        <!-- Preloader Start Here-->
       <!-- <div id="back__preloader">
            <div id="back__circle_loader"></div>
            <div class="back__loader_logo"><img src="assets/images/preload.png" alt=""></div>
        </div> -->
        <!-- Preloader End Here-->

        <!-- Toolbar Start -->

        <!-- Toolbar End -->

        <!-- Header Start Here -->
        @include('inc.header')
        <!-- Header End Here -->

        <!-- back wrapper Start Here -->
        @yield('page')
        <!-- back wrapper End Here -->

        <!-- Footer Start Here -->
        @include('inc.footer')
        <!-- Footer End Here-->

        <!-- Scroll to Top Start -->
        <div id="backscrollUp">
            <span aria-hidden="true" class="arrow_carrot-up"></span>
        </div>
        <!-- Scroll to Top End -->

        <!-- Searchbar Start -->
        <!-- Arama popup alanı kaldırıldı -->
        <!-- Searchbar End -->

        <!-- jquery latest version -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <!-- modernizr js -->
        <script src="{{asset('assets/js/modernizr-2.8.3.min.js')}}"></script>
        <!-- bootstrap js -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <!-- owl.carousel js -->
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <!-- magnific popup -->
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- counter up js -->
        <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
        <!-- wow js -->
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <!-- parallax js -->
        <script src="{{asset('assets/js/parallax.min.js')}}"></script>
        <!-- back menus js -->
        <script src="{{asset('assets/js/back-menus.js')}}"></script>
        <!-- plugins js -->
        <script src="{{asset('assets/js/plugins.js')}}"></script>
		<!-- main js -->
        <script src="{{asset('assets/js/main.js')}}"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    </body>
</html>
