<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Blank Page - Zeiss Template</title>

	<!-- Main Styles -->
	<link rel="stylesheet" href="panel/assets/styles/style.min.css">

	<!-- Material Design Icon -->
	<link rel="stylesheet" href="panel/assets/fonts/material-design/css/materialdesignicons.css">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="panel/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="panel/assets/plugin/waves/waves.min.css">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="panel/assets/plugin/sweet-alert/sweetalert.css">

	<!-- Color Picker -->
	<link rel="stylesheet" href="panel/assets/color-switcher/color-switcher.min.css">
</head>

<body>
@include('panel.inc.sidebar')
<!-- /.main-menu -->

<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Blank Page</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->

</div>
<!-- /.fixed-navbar -->



<div id="wrapper">
	<div class="main-content">

@yield('admin-main')
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!--
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="panel/assets/scripts/jquery.min.js"></script>
	<script src="panel/assets/scripts/modernizr.min.js"></script>
	<script src="panel/assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="panel/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="panel/assets/plugin/nprogress/nprogress.js"></script>
	<script src="panel/assets/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="panel/assets/plugin/waves/waves.min.js"></script>
	<!-- Full Screen Plugin -->
	<script src="panel/assets/plugin/fullscreen/jquery.fullscreen-min.js"></script>

	<script src="panel/assets/scripts/main.min.js"></script>
	<script src="panel/assets/color-switcher/color-switcher.min.js"></script>
</body>
</html>
