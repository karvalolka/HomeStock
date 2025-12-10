<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'News HTML-5 Template')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">

    <!-- CSS here -->
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/sample/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample/ticker-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="">
                </div>
            </div>
        </div>
    </div> -->

    <header>
        <!-- Header Start -->
        @include('partials.header')
        <!-- Header End -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>

    <!-- JS here -->
    @include('partials.scripts')
</body>
</html>
