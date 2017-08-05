<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from avalon.redteamux.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Oct 2014 07:38:22 GMT -->
<head>
	<meta charset="utf-8">
	<title>Avalon Admin Theme</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="description" content="Avalon Admin Theme">
	<meta name="author" content="The Red Team">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('admin/assets/fonts/font-awesome/css/font-awesome.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/styles.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('admin/assets/plugins/jstree/dist/themes/avalon/style.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('admin/assets/plugins/codeprettifier/prettify.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('admin/assets/plugins/iCheck/skins/minimal/blue.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('admin/assets/plugins/form-daterangepicker/daterangepicker-bs3.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('admin/assets/plugins/switchery/switchery.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('admin/assets/plugins/fullcalendar/fullcalendar.css') }}" type="text/css" rel="stylesheet">-->
</head>

    <body class="infobar-offcanvas">
    	<script>
    		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    		})(window,document,'script','../www.google-analytics.com/analytics.js','ga');

    		ga('create', 'UA-44426473-3', 'auto');
    		ga('send', 'pageview');
    	</script>

    	@include('admin.partials.header')
		@include('admin.partials.side-bar')
		@yield('content')
		<!-- @include('admin.partials.footer') -->



</div>
</div>
</div>

@include('admin.partials.side-left')


@include('admin.partials.switch')
<!-- Load site level scripts -->

<script src="{{ asset('admin/assets/js/jquery-1.10.2.min.js') }}"></script> 							<!-- Load jQuery -->
<script src="{{ asset('admin/assets/js/jqueryui-1.9.2.min.js') }}"></script> 							<!-- Load jQueryUI -->
<script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script> 								<!-- Load Bootstrap -->

<script src="{{ asset('admin/assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script> 	<!-- Slimscroll for custom scrolls -->
<script src="{{ asset('admin/assets/plugins/sparklines/jquery.sparklines.min.js') }}"></script>  		<!-- Sparkline -->
<script src="{{ asset('admin/assets/plugins/jstree/dist/jstree.min.js') }}"></script>  				<!-- jsTree -->

<script src="{{ asset('admin/assets/plugins/codeprettifier/prettify.js') }}"></script> 				<!-- Code Prettifier  -->
<script src="{{ asset('admin/assets/plugins/bootstrap-switch/bootstrap-switch.js') }}"></script> 		<!-- Swith/Toggle Button -->

<script src="{{ asset('admin/assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js') }}"></script>  <!-- Bootstrap Tabdrop -->

<script src="{{ asset('admin/assets/plugins/iCheck/icheck.min.js') }}"></script>     					<!-- iCheck -->

<script src="{{ asset('admin/assets/js/enquire.min.js') }}"></script> 										<!-- Enquire for Responsiveness -->

<script src="{{ asset('admin/assets/plugins/bootbox/bootbox.js') }}"></script>					<!-- BOOTBOX -->

<script src="{{ asset('admin/assets/js/application.js') }}"></script>
<script src="{{ asset('admin/assets/demo/demo.js') }}"></script>
<script src="{{ asset('admin/assets/demo/demo-switcher.js') }}"></script>

<script src="{{ asset('admin/assets/plugins/simpleWeather/jquery.simpleWeather.min.js') }}"></script>

<!-- End loading site level scripts -->

<!-- Load page level scripts-->

<script src="{{ asset('admin/assets/plugins/form-daterangepicker/daterangepicker.js') }}"></script>     	<!-- Date Range Picker -->
<script src="{{ asset('admin/assets/plugins/form-daterangepicker/moment.min.js') }}"></script>             <!-- Moment.js for Date Range Picker -->

<script src="{{ asset('admin/assets/plugins/easypiechart/jquery.easypiechart.js') }}"></script> 			<!-- EasyPieChart -->
<script src="{{ asset('admin/assets/plugins/powerwidgets/js/powerwidgets.js') }}"></script> 				<!-- PowerWidgets -->
<script src="{{ asset('admin/assets/plugins/switchery/switchery.js') }}"></script>     					<!-- Switchery -->

<script src="{{ asset('admin/assets/plugins/fullcalendar/fullcalendar.min.js') }}"></script>   			<!-- FullCalendar -->

<!-- Charts -->
<script src="{{ asset('admin/assets/plugins/charts-flot/jquery.flot.min.js') }}"></script>             	<!-- Flot Main File -->
<script src="{{ asset('admin/assets/plugins/charts-flot/jquery.flot.stack.min.js') }}"></script>       	<!-- Flot Stacked Charts Plugin -->
<script src="{{ asset('admin/assets/plugins/charts-flot/jquery.flot.orderBars.min.js') }}"></script>   	<!-- Flot Ordered Bars Plugin-->
<script src="{{ asset('admin/assets/plugins/charts-flot/jquery.flot.resize.min.js') }}"></script>          <!-- Flot Responsive -->
<script src="{{ asset('admin/assets/plugins/charts-flot/jquery.flot.tooltip.min.js') }}"></script> 		<!-- Flot Tooltips -->

<!-- Maps -->
<script src="{{ asset('admin/assets/plugins/jQuery-Mapael/js/raphael/raphael-min.js') }}"></script>        <!-- Load Raphael as Dependency -->
<script src="{{ asset('admin/assets/plugins/jQuery-Mapael/js/jquery.mapael.js') }}"></script>              <!-- jQuery Mapael -->
<!-- <script src="assets/plugins/jQuery-mousewheel/jquery.mousewheel.min.js"></script> -->     <!-- Mousewheel Support in zoomed-in maps -->
<script src="{{ asset('admin/assets/plugins/jQuery-Mapael/js/maps/world_countries.js') }}"></script>       <!-- Vector Data of World Countries -->


<script src="{{ asset('admin/assets/js/admin.js') }}"></script>                                  <!-- Initialize scripts for this page-->
<script src="{{ asset('admin/assets/demo/demo-index.js') }}"></script> 									<!-- Initialize scripts for this page-->

<!-- End loading page level scripts-->

</body>

<!-- Mirrored from avalon.redteamux.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Oct 2014 07:42:50 GMT -->
</html>