@extends('layouts.master')
@section('content')
	<!-- End header -->
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Kids</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Special Menu</h2>
					</div>
				</div>
			</div>
			<div>
				<form action="{{ route('sort.by') }}/{{ request()->route('id') }}" method="post">
					@csrf
				<input type="submit" name="lowest_price" sort_by='lowest_price' value="A-Z">
				<input type="submit" value="Z-A" sort_by="highest_price" name="highest_price" >
				</form>
			</div>
			<div class="row inner-menu-box">
				<div class="col-3 " id="select">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link " id="v-pills-home-tab" href="{{ route('subcategories') }}">All</a>
						@foreach ($categories as $category )
							
						<a href="{{ route('subcategories') }}/{{ $category->id  }}" class="nav-link" >{{ $category->name }}</a>
						@endforeach

					</div>




	<div class="filter">
    <div class="wrapper">
  
      <div class="price-input">
        <div class="field">
			<form action="{{ route('search.products') }}/{{ request()->route('id'); }}" method="post">
				@csrf
          <span>Min</span>
          <input type="number" class="input-min" name="rangemin" value="1">
        </div>
        <div class="separator">-</div>
        <div class="field">
          <span>Max</span>
          <input type="number" class="input-max" name="rangemax" value="70">
        </div>
      </div>
      <div class="slider">
        <div class="progress"></div>
      </div>
      <div class="range-input">
        <input type="range" class="range-min" min="0" max="10000" value="10" name="left_value" step="1">
        <input type="range" class="range-max" min="0" max="10000" value="7500" name="right_value" step="1">
      </div>
	  <input type="submit" value="Search">
	  </form>
	 


</div>
	</div>




<div class="cheackbox">
<fieldset class="checkbox-group">
	<div class="checkbox">
		<label class="checkbox-wrapper">
			<input type="checkbox" class="checkbox-input" />
			<span class="checkbox-tile">
			
				<span class="checkbox-label">Meat</span>
			</span>
		</label>
	</div>
	<div class="checkbox">
		<label class="checkbox-wrapper">
			<input type="checkbox" class="checkbox-input" />
			<span class="checkbox-tile">
			
				<span class="checkbox-label">cheiken</span>
			</span>
		</label>
	</div>
	<div class="checkbox">
		<label class="checkbox-wrapper">
			<input type="checkbox" class="checkbox-input" />
			<span class="checkbox-tile">
			
				<span class="checkbox-label">High Protein</span>
			</span>
		</label>
	</div>
	<div class="checkbox">
		<label class="checkbox-wrapper">
			<input type="checkbox" class="checkbox-input" />
			<span class="checkbox-tile">
			
				<span class="checkbox-label">Discord</span>
			</span>
		</label>
	</div>

</fieldset>
</div>









				</div>
				
				<div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">
								{{-- @if(isset($products)) --}}
									
								@foreach ($products as $product)
								<div class="col-lg-4 col-md-6 special-grid drinks" style="overflow: hidden;">
									<div class="gallery-single fix">
										{{-- <img src="../{{ $product->image}}" class="img-fluid" alt="Image"> --}}
										<div class="why-text">
											<h4>{{ $product->name}}</h4>
											<p>{{ $product->shortDescription}}</p>
											<div class="why-text-footer d-flex justify-content-between align-items-center">
												<h5>{{ $product->price}}</h5> 
												<button  id="cart" class="cart" name="{{ $product->id}}" namepr="{{ $product->name}}" image="{{ $product->img}}" des="{{ $product->shortDescription}} " price="{{ $product->price}}"> <i class="fa fa-cart-plus " aria-hidden="true" ></i></button>
												{{-- <button href="{{ route('add_to_cart', $product->id) }}"> <i class="fa fa-cart-plus " aria-hidden="true" ></i></button> --}}
												
												<a href="{{ route('cart') }}">
													show cart
												</a>
												<a href="{{ route('single') }}/{{ $product->id}}">
single
												</a>
											</div>

										</div>
									</div>
								</div>
								@endforeach

{{-- @else --}}



							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Menu -->
	
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
	
	<!-- Start Customer Reviews -->

	<!-- End Customer Reviews -->
	
	
	<!-- Start Footer -->
@endsection

</body>
</html>