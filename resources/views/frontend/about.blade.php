@extends('layouts.front')

@section('content') 

<!-- banner section -->
<section class="banner">
	<div class="banner-info">
		<h2 class="about">About Us</h2>
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
<section class="about-header">
	<div class="container">
		<!-- Page Heading/Breadcrumbs -->
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb">
					<li><a href="/">Home</a></li>
					<li class="active">About Us</li>
				</ol>
			</div>
		</div>
		<!-- /.row -->
	</div>
</section>
<section class="about-content">	
	<div class="container">
		<!-- Intro Content -->
		<div class="row">
			<div class="col-md-6">
				<div class="hover01 column">
					<div>
						<figure><img class="img-responsive" src="{{ asset('front/images/about.jpg') }}" alt=""></figure>
					</div>
				</div>
			</div>	
			<div class="col-md-6">
				<h3>About Modern Business</h3>
				<p>Welcome to Tobio Properties, your number one Realtor and Real Estate Consultant for all kind of Real Estate, with a focus on fast, trust and efficient service.</p>
				<p>Founded in August 2018 by Mercy T. Okoro, Tobio Properties has come a long way to assist home and abroad to axis. When Mercy T. Okoro first started out, her passion for fast and trustworthy drove them to do tons of search so that Tobio Properties can offer you the world's most advanced real state search engine. We now serve customers all over the world, and are thrilled that we're able to turn our passion into our own website.</p>
				<p>We hope you enjoy our service as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.</p>
			</div>
		</div>
	</div>
</section>	
<!-- Our Customers -->
<!-- <section class="customers">
	<h3 class="text-center">Our Customers</h3>
	<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	<div class="container">
	<hr>
		<div class="row">
            <div class="col-md-2 col-sm-4 col-xs-6">
				<div class="hover01 column">
					<div>
						<figure><img class="img-responsive customer-img" src="images/cust1.jpg" alt=""></figure>
					</div>
				</div>
				<h4 class="cust1">Sarah Jane</h4>
				<p class="cust2">Web Designer</p>
				<ul class="social-icons">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
				<div class="hover01 column">
					<div>
						<figure><img class="img-responsive customer-img" src="images/cust2.jpg" alt=""></figure>
					</div>
				</div>
				<h4 class="cust1">John Mclaine</h4>
				<p class="cust2">Enterprenuer</p>
				<ul class="social-icons">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
				<div class="hover01 column">
					<div>
						<figure><img class="img-responsive customer-img" src="images/cust3.jpg" alt=""></figure>
					</div>
				</div>
				<h4 class="cust1">Amy Winehouse</h4>
				<p class="cust2">Guitar Artist</p>
				<ul class="social-icons">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
				<div class="hover01 column">
					<div>
						<figure><img class="img-responsive customer-img" src="images/cust4.jpg" alt=""></figure>
					</div>
				</div>
				<h4 class="cust1">Margarette</h4>
				<p class="cust2">Police Officer</p>
				<ul class="social-icons">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
				<div class="hover01 column">
					<div>
						<figure><img class="img-responsive customer-img" src="images/cust5.jpg" alt=""></figure>
					</div>
				</div>
				<h4 class="cust1">Bruce Willis</h4>
				<p class="cust2">Executive Manager</p>
				<ul class="social-icons">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
				<div class="hover01 column">
					<div>
						<figure><img class="img-responsive customer-img" src="images/cust6.jpg" alt=""></figure>
					</div>
				</div>
				<h4 class="cust1">Chyna</h4>
				<p class="cust2">Event Director</p>
				<ul class="social-icons">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>	 -->
<!-- testimonial section -->
<section class="testimonials">
	<h2 class="text-center">What Our Customers Say</h2>
	<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	<div class="container">
		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="{{ asset('front/images/test1.png') }}" alt="test1" class="img-responsive">
					<h4 class="text-center">Johnny Blaze - Business Man</h4>
					<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
				<div class="item">
					<img src="{{ asset('front/images/test2.png') }}" alt="test1" class="img-responsive">
					<h4 class="text-center">Kate Winslet - Executive Manager</h4>
					<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
				<div class="item">
					<img src="{{ asset('front/images/test3.png') }}" alt="test1" class="img-responsive">
					<h4 class="text-center">Max Payne - CEO</h4>
					<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
				<div class="item">
					<img src="{{ asset('front/images/test4.png') }}" alt="test1" class="img-responsive">
					<h4 class="text-center">Britney Spears - Marketing Manager</h4>
					<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</section>
<!-- /testimonial section -->
@endsection