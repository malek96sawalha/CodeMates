<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="Volunteer work in training and education " />
    <meta name="keywords" content="Volunteer training  education" />

    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}">
    <link href="{{ url('https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap') }}"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ url('https://kit.fontawesome.com/659ed253a5.js') }}" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ url('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ url('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ url('css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ url('css/aos.css') }}">
    <link rel="stylesheet" href="{{ url('css/flatpickr.min.css') }}">
    <link rel="stylesheet" href=" {{ url('css/glightbox.min.css') }}">

    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href=" {{ url('css/home.css') }} ">



    <title>Volunteer </title>
    <style>
        .site-nav .site-navigation .site-menu .has-children .dropdown {
            right: 0;
            /* background: transparent; */
            text-align: center;
        }

        .fixed {
            position: fixed !important;
        }

        .bgtr {
            background: transparent;
        }
    </style>

</head>


<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <nav class="site-nav bgtr">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <div class="row g-0 align-items-center" style="display: flex; width: 100%;">
                        <div class="col-3 logos">
                            <a href="{{ route('home') }}" id='logo' class="logo m-0 float-start text-white">
                                <img src="{{ url('images/logoo.png') }}" alt="Logo Image" class="logo-image">

                            </a>
                        </div>
                        <div class="col-9 text-end">

                            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                                <li class="{{ request()->is('home*') ? 'active' : '' }}"><a
                                        href="{{ route('home') }}">Home</a></li>
                                <li class="{{ request()->is('products*') ? 'active' : '' }}"><a
                                        href="{{ route('products.index') }}">Bootcamps</a></li>

                                <li class="{{ request()->is('about*') ? 'active' : '' }}"><a href="about">About</a>
                                </li>
                                <li class="{{ request()->is('news*') ? 'active' : '' }}"><a
                                        href="{{ route('news') }}">News</a></li>
                                <li class="{{ request()->is('contact*') ? 'active' : '' }}"><a
                                        href="{{ route('contact') }}">Contact</a></li>
                                <li class="has-children">
                                    @if (Auth::check())
                                        <a href="#">
                                            <div><i class="fa-solid fa-user "></i>
                                            </div>
                                            <ul class="dropdown">

                                                {{-- <li> <a href="{{route('profile.show')}}">{{ Auth::user()->name }}</a></li> --}}
                                                <li><a href="{{ route('profile.show') }}">profile</a></li>
                                                <li><a href="chatify">Message</a></li>
                                                <li>
                                                    <!-- Authentication -->
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <button type="submit">{{ __('Log Out') }}</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </a>
                                    @else
                                <li class="{{ request()->is('login*') ? 'active' : '' }}"><a
                                        href="{{ route('login') }}">Login</a></li>
                                <li class="{{ request()->is('register*') ? 'active' : '' }}"><a
                                        href="{{ route('register') }}">Register</a></li>
                                @endif
                                </li>
                            </ul>

                        </div>
                        <div class="text-end" style="position: fixed; right: 20px; top: 20px;">
                            <a href="#"
                                class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                                <span></span>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <style>
            .scrolled {
                background-color: #fff !important;
                transition: background-color 200ms linear;
                box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            }

            .licolor {
                color: #59886b !important;
                font-weight: 700
            }
        </style>
    </nav>



    <!-- Preloader -->

    <script src="{{ url('js/navbar.js') }}"></script>

    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('js/tiny-slider.js') }}"></script>

    <script src="{{ url('js/flatpickr.min.js') }}"></script>
    <script src="{{ url('js/glightbox.min.js') }}"></script>


    <script src="{{ url('js/aos.js') }}"></script>
    <script src="{{ url('js/counter.js') }}"></script>
    <script src="{{ url('js/custom.js') }}"></script>
