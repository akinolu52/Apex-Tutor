<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">

        <!-- Viewport mobile tag for sensible mobile support -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts - try and get lemon_milk -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!--STYLES-->
        <link rel="stylesheet" href="{{ URL::to('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/colors.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/components.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/core.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/mbr-additional.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/mobirise-style.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/moborise-slider-style.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/style.css') }}">
        <!--STYLES END-->
    </head>
    <body>
        
        @yield('header')
        @yield('content')
        
        <!--SCRIPTS-->
        <script src="{{ URL::to('js/jquery.js') }}"></script>
        <script src="{{ URL::to('js/bootstrap.min.js')}}"></script>
        <script src="{{ URL::to('js/SmoothScroll.js')}}"></script>
        <script src="{{ URL::to('js/bootstrap-carousel-swipe.js')}}"></script>
        <script src="{{ URL::to('js/jarallax.js')}}"></script>
        <script src="{{ URL::to('js/mobirise-script.js')}}"></script>
        <!--SCRIPTS END-->
    </body>
</html>
