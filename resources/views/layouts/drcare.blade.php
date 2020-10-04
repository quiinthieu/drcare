<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dr. Care</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{asset('storage/drcare/favicons/favicon.png') }}"/>

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('drcare/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('drcare/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('drcare/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('drcare/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('drcare/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('drcare/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('drcare/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('drcare/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('drcare/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('drcare/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('drcare/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('drcare/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('drcare/css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('drcare/js/map.js')}}"></script>
</head>
<body>
<x-header/>

@yield('content')

<x-footer/>

<x-loader/>


<script src="{{asset('drcare/js/jquery.min.js')}}"></script>
<script src="{{asset('drcare/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('drcare/js/popper.min.js')}}"></script>
<script src="{{asset('drcare/js/bootstrap.min.js')}}"></script>
<script src="{{asset('drcare/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('drcare/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('drcare/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('drcare/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('drcare/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('drcare/js/aos.js')}}"></script>
<script src="{{asset('drcare/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('drcare/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('drcare/js/jquery.timepicker.min.js')}}"></script>
<script src="{{asset('drcare/js/scrollax.min.js')}}"></script>
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>--}}
<script src="{{asset('drcare/js/google-map.js')}}"></script>
<script src="{{asset('drcare/js/main.js')}}"></script>

</body>
</html>
