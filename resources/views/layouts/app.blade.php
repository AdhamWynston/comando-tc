<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/toastr.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

<!-- Page Loader -->
@include('shared.loader')
<!-- Page Loader END-->

<!-- Page NAV -->
@include('shared.nav')
<!-- Page NAV END-->



<div class="container">
    @yield('content')
</div>
</body>
<!-- START FOOTER -->

<!-- END FOOTER -->
<!-- Scripts -->
<script type="text/javascript" src="{{URL::asset('js/jquery-3.2.1.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/waitMe.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.maskedinput.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/toastr.min.js')}}"></script>
<script type="text/javascript" src="{{mix('js/app.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery.validate.js')}}"></script>
<script src="{{asset('js/materialize.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/main.js')}}"></script>
</html>
