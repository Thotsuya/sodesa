<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jarliev">
    <!-- Site Title -->
    <title>
        @yield('title', 'Inicio') - Sodesa Logística Aduanera
    </title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/odometer.css') }}">

    <link rel="icon" href="{{ asset('img/cropped-Logo-desarrollo-32x32.png') }}" sizes="32x32"/>
    <link rel="icon" href="{{ asset('img/cropped-Logo-desarrollo-192x192.png') }}" sizes="192x192"/>
    <link rel="apple-touch-icon" href="{{ asset('img/cropped-Logo-desarrollo-180x180.png') }}"/>



    {{--    <script src="{{ asset('js/plugins/odometer.js') }}"/>--}}
{{--    <script src="{{ asset('js/plugins/wow.min.js') }}"/>--}}
    <script src="https://cdn.jsdelivr.net/npm/wowjs@1.1.3/dist/wow.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/wowjs@1.1.3/css/libs/animate.min.css" rel="stylesheet">
    @vite(['resources/sass/default.scss', 'resources/sass/style.scss'])


    @yield('seo')

    <meta name="description" content="Soluciones y Desarrollo SA, agilidad y transparencia, cumplimiento de las normativas aduaneras y tributarias, aportando seguridad, eficiencia y puntualidad."/>
    <meta name="robots" content="max-image-preview:large"/>
    <link rel="canonical" href="{{ url()->current() }}"/>
    <meta property="og:locale" content="es_ES"/>
    <meta property="og:site_name" content="Sodesa - Logística Aduanera"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:image" content="{{ asset('assets/img/sodesa-logo.png') }} "/>
    <meta property="og:image:secure_url" content="{{ asset('assets/img/sodesa-logo.png') }}"/>
    <meta property="article:published_time" content="2023-07-27T08:57:15+00:00"/>
    <meta property="article:modified_time" content="2024-04-04T09:16:27+00:00"/>
</head>
@include('layouts.header')
<body>
{{--<div class="cs_preloader cs_accent_color cs_white_bg">--}}
{{--    <div class="cs_preloader bg-white d-flex justify-content-center align-items-center">--}}
{{--        <div class="cs_preloader_in">--}}
{{--            <img src="assets/img/favicon.png" alt="Logo">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

@yield('content')

@include('layouts.footer')
<!-- Script -->

@vite('resources/js/main.js')
</body>
</html>
