<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Admin Dashboard') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset ('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin/css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin/css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin/css/dropzone/dropzone.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin/css/educate-custon-icon.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin/css/morrisjs/morris.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin/css/metisMenu/metisMenu-vertical.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin/css/responsive.css')}}">
    <link rel="stylesheet" href="{{ asset ('admin/css/form/all-type-forms.css')}}">

</head>
<body>
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    
    <script src="{{ asset('admin/js/vendor/jquery-1.12.4.min.js') }}"></script>
		
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

    <script src="{{asset('admin/js/vendor/modernizr-2.8.3.min.js')}}"></script>
		
    <script src="{{ asset('admin/js/wow.min.js') }}"></script>
		
    <script src="{{ asset('admin/js/jquery-price-slider.js') }}"></script>
		
    <script src="{{ asset('admin/js/jquery.meanmenu.js') }}"></script>
		
    <script src="{{ asset('admin/js/owl.carousel.min.js') }}"></script>
		
    <script src="{{ asset('admin/js/jquery.sticky.js') }}"></script>
		
    <script src="{{ asset('admin/js/jquery.scrollUp.min.js') }}"></script>
		
    <script src="{{ asset('admin/js/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('admin/js/counterup/waypoints.min.js') }}"></script>
    <script src="{{ asset('admin/js/counterup/counterup-active.js') }}"></script>
		
    <script src="{{ asset('admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('admin/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
		
    <script src="{{ asset('admin/js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin/js/metisMenu/metisMenu-active.js') }}"></script>

    <script src="{{ asset('admin/js/plugins.js') }}"></script>
    <script src="{{ asset('admin/js/main.js') }}"></script>
    <script src="{{ asset('admin/js/dropzone/dropzone.js')}}"></script>
</body>
</html>
