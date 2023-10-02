

@extends('layouts.master')
  @section('content')

<body>
	<!-- Start header -->
	

	<!-- End header -->
	
	<!-- Start header -->
	<div class="all-page-title page-breadcrumb " style=" padding-top: 100px;">
		<div class="container text-center" >
			<div class="row">
				<div class="col-lg-12">
				
				</div></div>
			</div>
		</div>
	<!-- End header -->
	<!-- End header -->
	
	<!-- Start All Pages -->
	
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	<div class=""><iframe s src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3364.026402418738!2d35.842011224586955!3d32.52544179680065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c7727e2d21ea5%3A0xee3f8b9f68c773f5!2z2LPZiNio2LEg2YXYp9ix2YPYqiDYp9mE2KrZhdmK2YXZig!5e0!3m2!1sar!2sjo!4v1691433054486!5m2!1sar!2sjo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" style="width: 100%;" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Contact</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form id="contactForm">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
									<div class="help-block with-errors"></div>
								</div> 
							</div>
							<div class="col-md-12">
									<div class="help-block with-errors"></div>
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group"> 
									<textarea class="form-control" id="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="submit-button text-center">
									<button class="btn btn-common" id="submit" type="submit">Send Message</button>
									<div id="msgSubmit" class="h3 text-center hidden"></div> 
									<div class="clearfix"></div> 
								</div>
							</div>
						</div>            
					</form>
				</div>
			</div>
		</div>
	</div>
	
	
	
</body>
</html>
@endsection