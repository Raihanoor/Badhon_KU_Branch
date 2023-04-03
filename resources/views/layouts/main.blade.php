<!DOCTYPE html>
<html>
<head>
<title>BloodBank</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('layout/styles/main.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('layout/styles/mediaqueries.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/styles.css" rel="stylesheet')}}" type="text/css" media="all">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="{{ asset('//fonts.gstatic.com')}}">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Nunito')}}" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('css/styles.css')}}" rel="stylesheet">
</head>
<body class="">
    {{-- @include('site.pertials.nav') --}}
    {{-- Header Section   --}}
    @include('site.pertials.header')
    {{-- Navigation --}}
    @include('site.pertials.navigation')


<!-- Scripts -->
    <script src="{{asset('https://code.jquery.com/jquery-latest.min.js')}}"></script>
    <script src="{{asset('https://code.jquery.com/ui/1.10.1/jquery-ui.min.js')}}"></script>
    <script>window.jQuery || document.write('<script src="layout/scripts/jquery-latest.min.js}"><\/script>\
    <script src="layout/scripts/jquery-ui.min.js"><\/script>')</script>
    <script>jQuery(document).ready(function($){ $('img').removeAttr('width height'); });</script>
    <script src="{{asset('layout/scripts/jquery-mobilemenu.min.js')}}"></script>
    <script src="{{asset('layout/scripts/custom.js')}}"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js')}}" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js')}}" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>