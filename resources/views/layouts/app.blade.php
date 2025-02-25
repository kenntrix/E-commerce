<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'E-commerce') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('css/font-awesome.min.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('css/elegant-icons.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('css/magnific-popup.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('css/nice-select.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('css/owl.carousel.min.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('css/slicknav.min.css') }} type="text/css">
    <link rel="stylesheet" href={{ asset('css/style.css') }} type="text/css">
    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <script src={{ asset('js/jquery-3.3.1.min.js') }}></script>
    <script src={{ asset('js/bootstrap.min.js') }}></script>
    <script src={{ asset('js/jquery.nice-select.min.js') }}></script>
    <script src={{ asset('js/jquery.nicescroll.min.js') }}></script>
    <script src={{ asset('js/jquery.magnific-popup.min.js') }}></script>
    <script src={{ asset('js/jquery.countdown.min.js') }}></script>
    <script src={{ asset('js/jquery.slicknav.js') }}></script>
    <script src={{ asset('js/mixitup.min.js') }}></script>
    <script src={{ asset('js/owl.carousel.min.js') }}></script>
    <script src={{ asset('js/main.js') }}></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">
    {{-- Toastr --}}
    @if (session('product_added'))
        <div class="alert alert-success">
            {{ session('product_added') }}
        </div>
    @endif

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <div class="min-h-screen bg-gray-100 ">
        @include('layouts.navigation')

        <!-- Page Heading -->
        {{-- @isset($header)
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset --}}
        <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="header__top__left">
                                <p>Free shipping, 30-day return or refund guarantee.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5">
                            <div class="header__top__right">
                                <div class="header__top__links">
                                    @auth
                                        <a href="#"><img class="rounded-circle border border-dark" width="25px"
                                                height="25px" src={{ auth()->user()->picture }} alt=""></a>

                                    @endauth


                                    <a href="{{ route('login') }}">Sign in</a>


                                    <a href="{{ route('logout') }}">Logout</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="header__logo">
                            <a href="#"><img src={{ asset('img/logo.png') }} alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="{{ route('shop') }}">Home</a></li>

                                {{-- <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href={{ route('cartPage') }}>Shopping Cart</a></li>
                                    @auth
                                        <li><a href={{ route('profile') }}>My Accoutn</a></li>
                                    @endauth
                                </ul>
                            </li> --}}

                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>


                                <li><a href={{ route('profile.edit') }}>My Account</a></li>
                                {{-- @if (auth()->user()->role == 'admin') --}}
                                <li><a href="{{ route('dashboard') }}">Admin Dashboard</a></li>
                                {{-- @endif --}}


                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="header__nav__option">
                            <a href="#" class="search-switch"><img src={{ asset('img/icon/search.png') }}
                                    alt=""></a>
                            {{-- <a href="#"><img src={{ asset('img/icon/heart.png') }} alt=""></a> --}}
                            @auth
                                @include('components.header.header-cart')
                            @endauth

                        </div>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </header>

        <!-- Page Content -->
        <main>
            {{-- @yield('content') --}}
            {{ $slot }}
        </main>
    </div>

    <!-- Js Plugins -->

</body>

</html>
