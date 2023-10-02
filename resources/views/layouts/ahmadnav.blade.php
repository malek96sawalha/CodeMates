<!doctype html>
<html lang="en">
                    

<head>
        {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
   
    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="Volunteer work in training and education " />
    <meta name="keywords" content="Volunteer training  education" />
     <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}">
    <script src="{{ url('https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js') }}"></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Bootstrap CSS -->
	<!-- font awsome  -->
	<link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Site CSS -->
    <link rel="stylesheet" href=" {{url('css/style.css') }}">    
    <link rel="stylesheet" href=" {{url('css/navcart.css') }}">    
    <link rel="stylesheet" href=" {{url('css/superslides.css') }}">    
    <link rel="stylesheet" href=" {{url('css/stylem.css') }}">    
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
   <link rel="stylesheet" href="{{url ('//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css') }}">
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
  
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}">
    <link href="{{ url('https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap') }}"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ url('https://kit.fontawesome.com/659ed253a5.js') }}" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="{{ url('fonts/icomoon/style.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ url('fonts/flaticon/font/flaticon.css') }}"> --}}

    {{-- <link rel="stylesheet" href="{{ url('css/tiny-slider.css') }}"> --}}
    <link rel="stylesheet" href="{{ url('css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ url('css/aos.css') }}">
    <link rel="stylesheet" href="{{ url('css/flatpickr.min.css') }}">
    <link rel="stylesheet" href=" {{ url('css/glightbox.min.css') }}">

    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href=" {{ url('css/home.css') }} ">

    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">    
		{{-- <link rel="stylesheet" href="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css') }}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="{{ url('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') }}">
        

    <title>rrrr </title>
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


<style>
    .site-nav {
        background: #59886b !important;
        
    }
    .site-nav .site-navigation .site-menu>li>a:hover{
color: #ffc107 !important;
    }
    .transparent-bg{
        background: transparent !important;
    }
    
</style>
<?php 

use App\Models\Cart;
use App\Models\Products;
    if (Auth::check()) {
            $user = Auth::user();
            $cartItems = Cart::where('userId', $user->id)->get();
            $cart = [];

            foreach ($cartItems as $cartItem) {
                // Fetch the associated product details
                $product = Products::find($cartItem->productId);

                // Create an array with the desired product details
                $cart[$cartItem->productId] = [
                    "id" => $cartItem->productId,
                    "product_id" => $product->productId,
                    "name" => $product->name,
                    "img" => $product->img  ,
                    "price" => $product->price,
                    'cartDescription' => $product->cartDescription,
                    "quantity" => $cartItem->quantity
                    // Add other product details if needed
                ];
            }
        


            session()->put('cart', $cart);
        }

      
    
?>
{{-- @dd(session('cart')) --}}
    <nav class="site-nav {{ request()->is('home*') ? 'transparent-bg' : '' }} ">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <div class="row g-0 align-items-center" style="display: flex; width: 100%;">
                        <div class="col-2 logos">
                            <a href="{{ route('home') }}" id='logo' class="logo m-0 float-start text-white">
                                {{-- <img src="{{ asset ('../../images/Nutrizen') }}" alt="Logo Image" class="logo-image"> --}}
{{-- <img src="" alt=""> --}}
                <h1 class="text-primary m-0"><strong style="color: white;"> <span style="color:#2a722e"> Nutri</span>zen</strong></h1>

                            </a>
                        </div>
                        <div class="col-10 text-end">

                            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                                <li class="{{ request()->is('home*') ? 'active' : '' }}"><a
                                        href="{{ route('home') }}">Home</a></li>
                                <li class="{{ request()->is('products*') ? 'active' : '' }}"><a
                                        href="{{ route('subcategories') }}">menu</a></li>

                                <li class="{{ request()->is('about*') ? 'active' : '' }}"><a href="about">About</a>
                                </li>
                                {{-- <li class="{{ request()->is('news*') ? 'active' : '' }}"><a
                                        href="{{ route('news') }}">News</a></li> --}}
                                <li class="{{ request()->is('contact*') ? 'active' : '' }}"><a
                                        href="{{ route('contact') }}">Contact</a></li>
                                        <li>
   <div class="dropdown" style="padding: 0">
                 
               <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="    margin: 0px 0 -11px 0px !important;
    padding: 0;
    background: transparent;
    border: none;"   >
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i><span id="countcart" class="badge bg-danger" style="    position: absolute;
    top: -3px;
    left: 13px;">{{ count((array) session('cart')) }}</span>
                </button>
 
                <div class="dropdown-menu" aria-labelledby="dLabel">
                    <div class="row total-header-section">
                        @php $total = 0 @endphp

                        @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach
                        <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                            <p>Total: <span class="text-success" id="total">$ {{ $total }}</span></p>
                        </div>
                    </div>
                    
                    <div id="baba">
                       @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                        <a href="{{ route('single') }}/{{ $details['id'] }}">
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img ">
                                    <img src="../{{ $details['img'] }}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['name'] }}</p>
                                    <span class="price text-success"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                    
                                </div>
                                
                            </div>
                            </a>
                        @endforeach
                        @endif
                    </div>
                    <div class="row">
                     
                        <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                    </div>
                </div>
                 
            </div>

                                        </li>
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
                        {{-- <div class="text-end" style="position: fixed; right: 20px; top: 20px;">
                            <a href="#"
                                class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                                <span></span> --}}
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


<script>
      var navbar = document.querySelector('.site-nav');
          var image = document.querySelector(".logo-image");
          var lii = document.querySelectorAll(".site-nav .site-navigation .site-menu>li>a ");
          // Get the initial offset of the navigation bar
          var offset = navbar.offsetTop;

          // Function to handle the scroll event
          function handleScroll() {
                    lii.forEach((li) => {
                              if (!(li.classList.contains('active'))) {
                                        if (window.scrollY < 60) {
                                                  // Add the 'fixed' class to the navigation bar
                                                //   image.src =
                                                            // "https://www.canva.com/design/DAFvvMCk2jU/pfEVznJlBACby3VnAQSByQ/view?utm_content=DAFvvMCk2jU&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink";
                                                  navbar.classList.add("fixed");
                                                  navbar.classList.remove("scrolled");
                                                  li.classList.remove("licolor");

                                                  // Set the background color to red
                                                  navbar.style.background = "transparent";
                                        } else {
                                                  // Remove the 'fixed' class from the navigation bar
                                                  navbar.classList.remove("fixed");
                                                  navbar.classList.add("scrolled");
                                                  li.classList.add("licolor");
                                                //   image.src =
                                                            // "https://www.canva.com/design/DAFvvMCk2jU/pfEVznJlBACby3VnAQSByQ/view?utm_content=DAFvvMCk2jU&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink";


                                                  // Reset the background color
                                        }
                              }
                    });

          }

          // Attach the scroll event listener to the window
          window.addEventListener('scroll', handleScroll);
        
</script>
    </nav>

