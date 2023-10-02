@extends('layouts.master')
<style>
  .wll{
        margin: 39px;
    position: relative;
    FONT-SIZE: 20PX;
    FONT-WEIGHT: 500;
    BACKGROUND: GREEN;
    COLOR: white;
    PADDING: 5px 10PX;
    border-radius: 6px;
    z-index: 5;
  }
 .carousel-dark {
    margin-top: 13px;
  }
  .all{
    padding-top: 60px;
  }
  .Choose{
    text-align: center;
    font-size: 30px;
    font-weight: 600;
    text-transform: capitalize;
    margin-top: 40px;
    color: #696060  ;
  }
</style>
  </head>
@section('content')
    
  <body>
    
 



<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light ">
			<div class="container">
				<a class="navbar-brand" href="index.html">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i><strong style="color: white;"> <span style="color:#2a722e"> Nutri</span>zen</strong></h1>
					
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						                    <a href="index.html" class="nav-item nav-link ">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="menu.html" class="nav-item nav-link active" >Menu</a>
                 
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                    <a href="login.html" class="nav-item nav-link btn-primary" style="margin-top: 35px;
    padding: 6px 15px;
    height: 41px; border-radius: 12px;">Register</a>
                    <a href="cart.html" class="nav-item nav-link" style="background-color: transparent;"><img src="images/Shopping_cart_icon.svg.png"  width="30px"> <span style="color: white;">cart</span></a>
                  </div>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<!-- End header -->
	
	<!-- Start header -->
	<div class="all-page-title page-breadcrumb " style=" padding-top: 100px;">
		<div class="container text-center" >
			<div class="row">
				<div class="col-lg-12">
				
				</div></div>
			</div>
		</div>




    
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">



<p class="Choose">Choose the meal that inspires you!!</p>
    
<!-- --------------------------------  -->
    <div class="all">
            <SPan class="wll">STURDAY</SPan>

      <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card-wrapper container-sm d-flex  justify-content-around">
              <div class="card  " style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
  <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
 <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
        </div>

<div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
<div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
        </div>




        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
 <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div>
</div>
    </div>
    <div class="carousel-item">
      <div class="card-wrapper container-sm d-flex   justify-content-around">
      <div class="card  " style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
<div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div><div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
 <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
        </div>
        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
  <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
        </div>
        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
 <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div>
    </div>
    </div>
    <div class="carousel-item">
      <div class="card-wrapper container-sm d-flex  justify-content-around">
      <div class="card " style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
<div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div>
        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    
  </div>
        </div>
        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    
  </div>
</div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>

    
</div>

    
    
    


    
<!-- --------------------------------  -->
    <div class="all">
            <SPan class="wll">STURDAY</SPan>

      <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card-wrapper container-sm d-flex  justify-content-around">
              <div class="card  " style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
  <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
 <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
        </div>

<div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
<div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
        </div>




        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
 <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div>
</div>
    </div>
    <div class="carousel-item">
      <div class="card-wrapper container-sm d-flex   justify-content-around">
      <div class="card  " style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
<div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div><div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
 <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
        </div>
        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
  <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
        </div>
        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
 <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div>
    </div>
    </div>
    <div class="carousel-item">
      <div class="card-wrapper container-sm d-flex  justify-content-around">
      <div class="card " style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
<div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div>
        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    
  </div>
        </div>
        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    
  </div>
</div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>

    
</div>

    
    
    


    
<!-- --------------------------------  -->
    <div class="all">
            <SPan class="wll">STURDAY</SPan>

      <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card-wrapper container-sm d-flex  justify-content-around">
              <div class="card  " style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
  <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
 <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
        </div>

<div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
<div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
        </div>




        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
 <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div>
</div>
    </div>
    <div class="carousel-item">
      <div class="card-wrapper container-sm d-flex   justify-content-around">
      <div class="card  " style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
<div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div><div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
 <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
        </div>
        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
  <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
        </div>
        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
 <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div>
    </div>
    </div>
    <div class="carousel-item">
      <div class="card-wrapper container-sm d-flex  justify-content-around">
      <div class="card " style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
<div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div>
        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    
  </div>
        </div>
        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    
  </div>
</div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>

    
</div>

    
    
    


    
<!-- --------------------------------  -->
    <div class="all">
            <SPan class="wll">STURDAY</SPan>

      <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card-wrapper container-sm d-flex  justify-content-around">
              <div class="card  " style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
  <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
 <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
        </div>

<div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
<div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
        </div>




        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
 <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div>
</div>
    </div>
    <div class="carousel-item">
      <div class="card-wrapper container-sm d-flex   justify-content-around">
      <div class="card  " style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
<div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div><div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
 <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
        </div>
        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
  <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
        </div>
        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
 <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div>
    </div>
    </div>
    <div class="carousel-item">
      <div class="card-wrapper container-sm d-flex  justify-content-around">
      <div class="card " style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
<div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div>
        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    
  </div>
        </div>
        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    
  </div>
</div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>

    
</div>

    
    
    


    
<!-- --------------------------------  -->
    <div class="all">
            <SPan class="wll">STURDAY</SPan>

      <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card-wrapper container-sm d-flex  justify-content-around">
              <div class="card  " style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
  <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
 <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
        </div>

<div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
<div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
        </div>




        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
 <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div>
</div>
    </div>
    <div class="carousel-item">
      <div class="card-wrapper container-sm d-flex   justify-content-around">
      <div class="card  " style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
<div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div><div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
 <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
        </div>
        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
  <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
        </div>
        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
 <div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div>
    </div>
    </div>
    <div class="carousel-item">
      <div class="card-wrapper container-sm d-flex  justify-content-around">
      <div class="card " style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
<div class="card-body">
    <div class="card-title">
      <div class="con1">
      <div class="con2">

      <span>Tomito</span>
      <span>120cal</span>
      </div>
      <span>More</span>
</div>
    </div>
       <div  class="add_to_cart d-flex flex-column" style="width:100px !important;"> <a href="cart.html" style="color: white !important ; ">Select</a></div>

    
  </div>
</div>
        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    
  </div>
        </div>
        <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    
  </div>
</div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>

    
</div>
  </body>
  </html>
  @endsection
  