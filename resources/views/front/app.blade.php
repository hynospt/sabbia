<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        
        <link rel="stylesheet" href="{{url('assets')}}/sabbia/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{url('assets')}}/sabbia/css/bootstrap-theme.min.css">
        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{url('assets')}}/sabbia/css/sidenav.css">
		<link rel="stylesheet" href="{{url('assets')}}/sabbia/css/style.css">
		<link rel="stylesheet" href="{{url('assets')}}/sabbia/css/library.css">
		<link rel="stylesheet" href="{{url('assets')}}/sabbia/css/override.css">
        @yield('customStyle')
    </head>

    <body>
        @include('front.layouts.sidebar')
        <div class="container margin-left-200 col-xs-12" id="content">
            @yield('body')

            @include('front.layouts.footer')
        </div>

        <!-- JavaScript & Jquery --> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="{{url('assets')}}/sabbia/js/jquery.animateNumber.js"></script>

        <script src="{{url('assets')}}/sabbia/js/vendor/bootstrap.min.js"></script>
        <script src="{{url('assets')}}/sabbia/js/main.js"></script>
        @yield('customScript')

    </body>

