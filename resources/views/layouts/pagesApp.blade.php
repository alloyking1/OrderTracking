<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/Feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/flickity/dist/flickity.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/flickity-fade/flickity-fade.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/aos/dist/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/jarallax/dist/jarallax.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/highlightjs/styles/vs2015.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.css')}}">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.min.css">
    <style>#map {
      height: 400px;  /* The height is 400 pixels */
      width: 100%;  /* The width is the width of the web page */
      padding-top: 5% !important;
      padding-bottom: 5% !important;
      border-radius: 5px;
     }</style>

    <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

        <!--Load the API from the specified URL
        * The async attribute allows the browser to render the page while the API loads
        * The key parameter will contain your own API key (which is not needed for this tutorial)
        * The callback parameter executes the initMap() function
        -->
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGaRtwRpvp-W26bYk8fLbCsre3XOxQbr4"></script> -->
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGaRtwRpvp-W26bYk8fLbCsre3XOxQbr4&callback=initMap" type="text/javascript"></script> -->
    <!-- <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script> -->

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <!-- <script src="assets/libs/flickity/dist/flickity.pkgd.min.js"></script>
    <script src="assets/libs/flickity-fade/flickity-fade.js"></script>
    <script src="assets/libs/aos/dist/aos.js"></script>
    <script src="assets/libs/smooth-scroll/dist/smooth-scroll.min.js"></script>
    <script src="assets/libs/jarallax/dist/jarallax.min.js"></script>
    <script src="assets/libs/jarallax/dist/jarallax-video.min.js"></script>
    <script src="assets/libs/jarallax/dist/jarallax-element.min.js"></script>
    <script src="assets/libs/typed.js/lib/typed.min.js"></script>
    <script src="assets/libs/countup.js/dist/countUp.min.js"></script>
    <script src="assets/libs/highlightjs/highlight.pack.min.js"></script> -->
    <!-- <script src="assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.js"></script> -->
    <!-- <script src="assets/libs/isotope-layout/dist/isotope.pkgd.min.js"></script> -->
    <!-- <script src="assets/libs/imagesloaded/imagesloaded.pkgd.min.js"></script> -->

    <!-- Map -->
    <!-- <script src='../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script> -->
</body>
</html>
