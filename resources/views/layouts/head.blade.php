<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/line-icons.css') }}">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slicknav.css') }}">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nivo-lightbox.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('apple-touch-icon.png') }}site.webmanifest">
    <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#1976D2">

</head>