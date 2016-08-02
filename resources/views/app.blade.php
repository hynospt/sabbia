<<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="{{url('assets')}}/css/vendor/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="{{url('assets')}}/css/vendor/dist/AdminLTE.min.css">
	<link rel="stylesheet" href="{{url('assets')}}/css/vendor/dist/skins/_all-skins.min.css">
	<link rel="stylesheet" href="{{url('assets')}}/css/vendor/plugins/iCheck/flat/blue.css">
	<link rel="stylesheet" href="{{url('assets')}}/css/vendor/plugins/morris/morris.css">
	<link rel="stylesheet" href="{{url('assets')}}/css/vendor/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="{{url('assets')}}/css/vendor/plugins/datepicker/datepicker3.css">
	<link rel="stylesheet" href="{{url('assets')}}/css/vendor/plugins/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="{{url('assets')}}/css/vendor/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

	@yield('loadCss')

</head>


<body class="skin-blue sidebar-mini wysihtml5-supported">
	
	<div class="wrapper">
		
		@include('admin.layouts.header')

		@include('admin.layouts.sidebar')

		@yield('body')

		@include('admin.layouts.footer')

		@include('admin.layouts.rightSidebar')

	</div>


	<script src="{{url('assets')}}/js/vendor/plugins/jQuery/jquery-2.2.3.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	<script src="{{url('assets')}}/js/vendor/bootstrap/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="{{url('assets')}}/js/vendor/plugins/morris/morris.min.js"></script>
	<script src="{{url('assets')}}/js/vendor/plugins/sparkline/jquery.sparkline.min.js"></script>
	<script src="{{url('assets')}}/js/vendor/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="{{url('assets')}}/js/vendor/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="{{url('assets')}}/js/vendor/plugins/knob/jquery.knob.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
	<script src="{{url('assets')}}/js/vendor/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="{{url('assets')}}/js/vendor/plugins/datepicker/bootstrap-datepicker.js"></script>
	<script src="{{url('assets')}}/js/vendor/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	<script src="{{url('assets')}}/js/vendor/plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<script src="{{url('assets')}}/js/vendor/plugins/fastclick/fastclick.js"></script>
	<script src="{{url('assets')}}/js/vendor/dist/app.min.js"></script>
	<script src="{{url('assets')}}/js/vendor/dist/pages/dashboard.js"></script>
	<script src="{{url('assets')}}/js/vendor/dist/demo.js"></script>

	@yield('scriptJs')
</body>
</html>