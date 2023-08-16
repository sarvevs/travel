<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->

    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css') }}">
    <!-- Font Awesome Cdn -->
    <!-- Google Fonts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <!-- Подключение Slick theme CSS (если необходимо) -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

{{--    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/slick/slick.css') }}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/slick/slick-theme.css') }}">--}}
{{--    <script src="{{ asset('plugins/slick/slick.min.js') }}"></script>--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>--}}
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
<body>
    <div id="app">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ route('main')}}" id="logo"><span>T</span>ravel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span><i class="fa-solid fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('main')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('book.create') }}">Book</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('main.packages') }}">Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('main.services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('main.gallery') }}">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('main.about') }}">About</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
        <!-- Navbar End -->
        <!-- Home Section Start -->
        <div class="home">
            <div class="content">
                <h5>Welcome To World</h5>
                <h1>Visit <span class="changecontent"></span></h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, nisi.</p>
                <a href="{{ route('book.create') }}">Book Place</a>
            </div>
        </div>
        <!-- Home Section End -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Footer Start -->
    <footer id="footer">
        <h1><span>T</span>ravel</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus fugiat, ipsa quos nulla qui alias.</p>
        <div class="social-links">
           <a href="https://twitter.com/"> <i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://ru.pinterest.com/"><i class="fa-brands fa-pinterest-p"></i></a>
        </div>
        <div class="credit">
            <p>Designed By <a href="#">@sarvesVS</a></p>
        </div>
        <div class="copyright">
            <p>&copy;Copyright @sarvesVS. All Rights Reserved</p>
        </div>
    </footer>
    <!-- Footer End -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Подключение Slick JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
<script>
    $(document).ready(function() {
        $('.slick-slider').slick({
            // slidesToShow: 1,
            // slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            prevArrow: '<button type="button" class="slick-prev" style="color: black; font-size: 30px"><i class="fas fa-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next" style="color: black; font-size: 30px"><i class="fas fa-chevron-right"></i></button>',
            dots: true,
            infinite: true,
            speed: 200,
            slidesToShow: 4,
            adaptiveHeight: true
    // $(document).ready(function(){
    //     $('.slick-slider').slick({
    //         slidesToShow: 1,
    //         slidesToScroll: 1,
    //         autoplay: true,
    //         autoplaySpeed: 3000,
    //         arrows: true,
    //         dots: true
            // Другие настройки по вашему выбору
        });
    });


</script>
</html>
