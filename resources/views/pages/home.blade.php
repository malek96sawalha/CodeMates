@extends('layouts.master')
@section('content')
    
	<!-- End header -->
	<main>
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-left">
				<img src="{{ url('images/slider-01.jpg') }}" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> <span style="color:#2a722e"> Nutri</span>zen</strong></h1>
							<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
							trends to see any changes in performance over time.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#"  style="background-color: #2a722e; color: white !important;">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="{{ url('images/slider-02.jpg') }}" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> <span style="color:#2a722e"> Nutri</span>zen</strong></h1>
							<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
							trends to see any changes in performance over time.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#" style="background-color: #2a722e; color: white !important;">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="{{ url('images/slider-03.jpg') }}" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> <span style="color:#2a722e"> Nutri</span>zen</strong></h1>
							<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
							trends to see any changes in performance over time.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#" style="background-color: #2a722e; color: white !important;">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
<h1 class="m-b-20"><strong>Welcome To <br> <span style="color:#2a722e"> Nutri</span>zen</strong></h1>
						
						<p>Nourishing: We believe in nourishing your body with the best nature has to offer.

Wholesome: Our products are made from wholesome ingredients that promote well-being.

Sustainability: Committed to sustainability, we source our ingredients responsibly.
</p>
						<p>
Healthy Living: Encouraging a lifestyle of healthy living through nutritious choices.

Pure: We're dedicated to purity and the natural goodness of real food.</p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="menu.html"  style="background-color: #2a722e; color: white !important;">Menu</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="images/health.jpg" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
					<span class="lead">Michael Strahan</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Menu -->
				{{-- @dd($categories) --}}
	
	
<div class="container">
    <div class="row category" id="category">
	
			<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Our Category </h2>
						<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p> -->
					</div>
				</div>
			<div class="category-content d-flex">
@foreach ( $categories as $category )
	
        <div class="col-sm-6 category1">
          <span>{{ $category->name }}</span> 
			<a href="{{ route('subcategories') }}/{{ $category->id  }}"><img src="{{ $category->img }}" alt=""></a>
        </div>
@endforeach

       
    </div>
    </div>
</div>
@php
	
@endphp
	
	<!-- End Gallery -->
	<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="CodeHim">
      <!-- Style CSS -->
      <link rel="stylesheet" href="./css/pricing.css">
      <!-- Demo CSS (No need to include it into your project) -->
      <link rel="stylesheet" href="./css/demo.css">
      <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
      <main class="cd__main">
 <div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Pricing </h2>
					</div>
				</div> 
<div id="generic_price_table"> 
   
<section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--PRICE HEADING START-->
                    <div class="price-heading clearfix">
                    </div>
                    <!--//PRICE HEADING END-->
                </div>
            </div>
        </div>
        <div class="container contpricing">
            <span class="kidsoption">Kids</span>
            <span class="employeeoption" >Employee</span>
            <!--BLOCK ROW START-->
            <div class="row pricing_click">
               
                @foreach ($plans as $plan)
					
                <div class="col-md-6">
                
                	<!--PRICE CONTENT START-->
                    <div class="generic_content active clearfix">
                        
                        <!--HEAD PRICE DETAIL START-->
                        <div class="generic_head_price clearfix">
                        
                            <!--HEAD CONTENT START-->
                            <div class="generic_head_content clearfix">
                            
                            	<!--HEAD START-->
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span>{{ $plan->name }}</span>
                                </div>
                                <!--//HEAD END-->
                                
                            </div>
                            <!--//HEAD CONTENT END-->
                            
                            <!--PRICE START-->
                            <div class="generic_price_tag clearfix">
							
                                <span class="prices">	
                                    <span class="sign">JOD</span>
                                    <span class="price">{{ $plan->price }}</span>
                                    {{-- <span class="cent"></span> --}}
                                    <span class="period">/Weekly</span>
                                </span>
                            </div>
                            <!--//PRICE END-->
                            
                        </div>                            
                        <!--//HEAD PRICE DETAIL END-->
                        
                        <!--FEATURE LIST START-->
                        <div class="generic_feature_list">
                        	<ul>
                            	<li><span>5</span> Meals</li>
                                                                <li><span></span> Free Delivery</li>
                                <li><span>12</span> Accounts</li>
                                <li><span>7</span> Host Domain</li>
                                <li><span>24/7</span> Support</li>
                            </ul>
                        </div>
                        <!--//FEATURE LIST END-->
                        
                        <!--BUTTON START-->
                        <div class="generic_price_btn clearfix">
                       <a class="" href="{{ route('plans.show', $plan->slug) }}"style="background: transparent"> Subscribe </a>
                        	
                        </div>
					
                        <!--//BUTTON END-->
                        
                    </div>
                    <!--//PRICE CONTENT END-->
                        
                </div>
				@endforeach

		{{-- --------------- --}}


                {{-- <div class="col-md-6">
                
                	<!--PRICE CONTENT START-->
                    <div class="generic_content clearfix">
                        
                        <!--HEAD PRICE DETAIL START-->
                        <div class="generic_head_price clearfix">
                        
                            <!--HEAD CONTENT START-->
                            <div class="generic_head_content clearfix">
                            
                            	<!--HEAD START-->
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span>Unlimited</span>
                                </div>
                                <!--//HEAD END-->
                                
                            </div>
                            <!--//HEAD CONTENT END-->
                            
                            <!--PRICE START-->
                            <div class="generic_price_tag clearfix">
								<form action="" method="post">

                                <span class="prices">
                                    <span class="sign">JOD</span>
                                    <span class="price">29.99</span>
                                    <span class="period">/MON</span>
                                </span>
                            </div>
                            <!--//PRICE END-->
                            
                        </div>                            
                        <!--//HEAD PRICE DETAIL END-->
                        
                        <!--FEATURE LIST START-->
                        <div class="generic_feature_list">
                        	<ul>
                              	<li><span>20</span> Meals</li>
                                <li><span></span> Free Delivery</li>
                                <li><span>12</span> Accounts</li>
                                <li><span>7</span> Host Domain</li>
                                <li><span>24/7</span> Support</li>
                            </ul>
                        </div>
                        <!--//FEATURE LIST END-->
                        
                        <!--BUTTON START-->
                        <div class="generic_price_btn clearfix">
                       <a class="" href=""style="background: transparent"> Subscribe </a>

                        </div>
                        <!--//BUTTON END-->
                        
                    </div>
                    <!--//PRICE CONTENT END-->
                        
                </div> --}}
            </div>	
            <!--//BLOCK ROW END-->
            
        </div>
    </section>             
	
</div>
         <!-- END EDMO HTML (Happy Coding!)-->
      </main>
      
      <!-- Script JS -->
      <script src="./js/script.js"></script>
   
<div class="cardds">
   <div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2> Most popular</h2>
					</div>
				</div>
			</div>
			

				<div class="col-12">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">
								@foreach ($products as $product )
									@if($product)
										
									@endif
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-01.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>{{ $product->name }}</h4>
											<p>{{ $product->shortDescription }}</p>
											<div class="why-text-footer d-flex justify-content-between align-items-center">
												<h5>$ {{ $product->price }}</h5> 
												<a href="{{ route('single') }}/ {{ $product->id }} ">	<i class="fa fa-cart-plus " aria-hidden="true" style="color: #2a722e"></i></a>
												{{-- <a href="{{ route('add_to_cart', $product->id) }} ">Add to cart</a> --}}
                        <button  id="cart" class="cart" name="{{ $product->id}}" namepr="{{ $product->name}}" image="{{ $product->img}}" des="{{ $product->shortDescription}} " price="{{ $product->price}}"> <i class="fa fa-cart-plus " aria-hidden="true" ></i></button>
												
											</div>
											
										</div>
									</div>
								</div>
								@endforeach
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- /flip-card-container -->


	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row" style="padding-bottom: 70px;">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
  					</div>
				</div>
			
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							@foreach ( $reviews as $key => $review)
             <div class="carousel-item text-center{{ $key === 0 ? ' active' : '' }}">
                    <div class="img-box p-1 border rounded-circle m-auto">
                        <img class="d-block w-100 rounded-circle" src="{{ url($review->user->image) }}" alt="" style="height: 128px;">
                    </div>
                    <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase" style="color: #2a722e !important">{{ $review->user->name }}</strong></h5>
                    <h6 class="text-dark m-0">
                        @for ($i = 0; $i < $review->Star; $i++)
                            <span class="star" data-star="{{ $i + 1 }}" style="color: gold">&#9733;</span>
                        @endfor
                    </h6>
                    <p class="m-0 pt-3">{{ $review->description }}</p>
                </div>
							@endforeach




						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	</div>
@endsection
	

</body>
</html>