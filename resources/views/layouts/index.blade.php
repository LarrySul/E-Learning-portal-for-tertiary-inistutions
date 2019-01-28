<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = { csrfToken: '{{ csrf_token() }}'}</script>
    <title>E-learning Classroom</title>
    <!-- Scripts -->
    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <!-- <link rel="stylesheet" href="{{asset('css/v-toaster.css')}}" > -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/modals.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/blog.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/blog_responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/courses.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/courses_responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about_responsive.css')}}">
    <link rel="stylesheet" href="{{ asset('css/v-toaster.css')}}">


</head>
<style>
span{
    color:red
}
</style>
<body>
    <div id="app">
        @yield('content')
        @extends('layouts.footer')
    </div>
    
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('js/TimelineMax.min.js') }}"></script>
    <script src="{{ asset('js/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('js/animation.gsap.min.js') }}"></script>
    <script src="{{ asset('js/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/easing.js') }}"></script>
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/blog.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/v-toaster.js') }}"></script>
</body>
</html>
