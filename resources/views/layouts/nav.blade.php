<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">
     <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- font awsome  -->
	<link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
	<!-- Site CSS -->
    <link rel="stylesheet" href=" {{url('css/style.css') }}">    
    <link rel="stylesheet" href="{{url ('css/menu.css') }}">    
    <link rel="stylesheet" href="{{ url('css/pricing.css') }}">   
    <link rel="stylesheet" href="{{ url('css/single-proudact.css') }}">    

    <link rel="stylesheet" href="{{ url('css/category.css') }}">    
    <link rel="stylesheet" href="{{ url('css/footer.css') }}">    
    <link rel="stylesheet" href="{{ url('css/sub-category.css') }}">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{url('css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('css/custom.css') }}">
<link rel="stylesheet" href="{{url('css/cart.css') }}">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title></title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->

	<!-- font awsome  -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Site CSS -->
  
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

    <link rel="stylesheet" href="{{ url('css/stylem.css') }}">
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




    <nav class="site-nav bgtr">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <div class="row g-0 align-items-center" style="display: flex; width: 100%;">
                        <div class="col-2 logos">
                            <a href="{{ route('home') }}" id='logo' class="logo m-0 float-start text-white">
                                {{-- <img src="{{ url('images/logoo.png') }}" alt="Logo Image" class="logo-image"> --}}
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i><strong style="color: white;"> <span style="color:#2a722e"> Nutri</span>zen</strong></h1>

                            </a>
                        </div>
                        <div class="col-10 text-end">

                            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                                <li class="{{ request()->is('home*') ? 'active' : '' }}"><a
                                        href="{{ route('home') }}">Home</a></li>
                                <li class="{{ request()->is('products*') ? 'active' : '' }}"><a
                                        href="{{ route('products.index') }}">Menu</a></li>

                                <li class="{{ request()->is('about*') ? 'active' : '' }}"><a href="about">About</a>
                                </li>
                                <li class="{{ request()->is('news*') ? 'active' : '' }}"><a
                                        href="{{ route('news') }}">News</a></li>
                                <li class="{{ request()->is('contact*') ? 'active' : '' }}"><a
                                        href="{{ route('contact') }}">cart</a></li>
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
