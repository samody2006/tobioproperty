@extends('layouts.front')

@section('content') 

<!-- banner section -->
<section class="banner">
	<div class="banner-info">
		<h3 class="contact">Contact Us</h3>
	</div>
	<div id="slideshow-banner2">
	<ul>
			<li class="slideshow-item"><img src="{{ asset('front/images/banner1.jpg') }}" alt="" /></li>
			<li class="slideshow-item"><img src="{{ asset('front/images/banner3.jpg') }}" alt="" /></li>
			<li class="slideshow-item"><img src="{{ asset('front/images/banner4.jpg') }}" alt="" /></li>
			<li class="slideshow-item"><img src="{{ asset('front/images/banner2.jpg') }}" alt="" /></li>
		</ul>
	</div>
</section>
<!-- google map -->
<section class="about-header">
	<div class="container">
		<!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>
<section class="contact-page-header">
	<h3 class="text-center">Locate Us Right Here</h3>
</section>
<section class="map">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d380510.6741687111!2d-88.01234121699822!3d41.83390417061058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1455598377120" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>	
		</div>
	</div>
</section>
<!-- /google map -->
<!-- contact section -->
<section class="our-contacts" id="contact">
	<h3>Contact Us</h3>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 slideanim">
				<form role="form">
					<div class="row">
						<div class="form-group col-lg-4">
							<input type="text" class="form-control user-name" placeholder="Your Name" required/>
						</div>
						<div class="form-group col-lg-4">
							<input type="email" class="form-control mail" placeholder="Your Email" required/>
						</div>
						<div class="form-group col-lg-4">
							<input type="tel" class="form-control pno" placeholder="Your Phone Number" required/>
						</div>
						<div class="clearfix"></div>
						<div class="form-group col-lg-12">
							<textarea class="form-control" rows="6" placeholder="Your Message" required/></textarea>
						</div>
						<div class="form-group col-lg-12">
							<button type="submit" href="#" class="btn-outline">Submit</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-4">
				<div class="contact-details">
					<h4>Get In Touch</h4>
					<div class="contact-info">
						<div class="address">	
							<i class="glyphicon glyphicon-globe"></i>
							<p class="p3">Lekki, Ajah</p> 
							<p class="p4">Lagos, Nigeria</p>
						</div>
						<div class="phone">
							<i class="glyphicon glyphicon-phone-alt"></i>
							<p class="p3">+234 705 204 3210</p>
							<p class="p4">+234 803 855 3455</p>
						</div>
						<div class="email-info">
							<i class="glyphicon glyphicon-envelope"></i>
							<p class="mail"><a href="mailto:myemail@example.com">tobioproperties@gmail.com</a></p> 
						</div>
					</div>
					<div class="footer-links">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://wa.link/5agshf"><i class="fa fa-whatsapp"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCt0yNt9KdsGEV-KUmBqlT1Q"><i class="fa fa-youtube"></i></a></li>
							<!-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
							<li><a href="#"><i class="fa fa-tiktok"></i></i></a></li>
							
						</ul>	
					</div>
				</div>	
			</div>	
		</div>
	</div>
</section>
<!-- /contact section -->
@endsection