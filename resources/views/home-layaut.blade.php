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
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <!-- back menus css -->
        <link rel="stylesheet" type="text/css" href="assets/css/back-menus.css">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
        <!-- elegant-icon css  -->
        <link rel="stylesheet" type="text/css" href="assets/fonts/elegant-icon.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
        <!-- back-animations css -->
        <link rel="stylesheet" type="text/css" href="assets/css/back-animations.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- Spacing css -->
        <link rel="stylesheet" type="text/css" href="assets/css/back-spacing.css">
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
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
        <div class="searchbar-expanded">
            <div class="searchbar">
                <form>
                    <button type="submit"><span aria-hidden="true" class="icon_search"></span></button>
                    <input type="text" placeholder="Start Searching...">
                </form>
                <span id="search-close" class="search-close icon_close"></span>
            </div>
        </div>
        <!-- Searchbar End -->

        <!-- jquery latest version -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- modernizr js -->
        <script src="assets/js/modernizr-2.8.3.min.js"></script>
        <!-- bootstrap js -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- owl.carousel js -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- magnific popup -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- counter up js -->
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <!-- wow js -->
        <script src="assets/js/wow.min.js"></script>
        <!-- parallax js -->
        <script src="assets/js/parallax.min.js"></script>
        <!-- back menus js -->
        <script src="assets/js/back-menus.js"></script>
        <!-- plugins js -->
        <script src="assets/js/plugins.js"></script>
		<!-- main js -->
        <script src="assets/js/main.js"></script>
    </body>
</html>
