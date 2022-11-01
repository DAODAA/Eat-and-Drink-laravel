<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>EAT & DRINK SHOP- @yield('title')</title> <!-- definition d'une variable title par @\yield() -->
    <!-- /*asset pour faire
    reference au dossier public*/ -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_assets/css/style.css') }}">

</head>

<body>
    @include('flash-messages')
    @yield('content')
    <!-- appellera le contenu defini dans hom.blade-->

    <script type="text/javascript" src="{{ asset('front_assets/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
</body>

</html>
