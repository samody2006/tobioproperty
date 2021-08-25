@extends('layouts.front')

@section('content') 
<!-- banner section -->
<section class="banner">
	<div class="banner-info">
		<h2 class="blog">Our Blog</h2>
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
<section class="blog-header">
 <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active">Blog</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>
<section class="blog-content">
	<div class="container">
  <!-- Blog Post Row -->
        <div class="row">
            <div class="col-md-1 text-center">
                <p class="icon"><i class="fa fa-camera fa-4x"></i>
                </p>
                <p>June 17, 2014</p>
            </div>
            <div class="col-md-5">
                <a href="blog-post.html">
					<div class="hover01 column">
						<div>
							<figure><img class="img-responsive img-hover" src="images/blog1.jpg" alt=""></figure>
						</div>
					</div>
                </a>
            </div>
            <div class="col-md-6">
                <h3>
                    <a href="blog-post.html">Lorem Ipsum Dolor Sit Amet</a>
                </h3>
                <p class="p1">by <a href="#">Mike Tyson</a>
                </p>
                <p class="p2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <a class="btn btn-primary btn-outline" href="blog-post.html">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Blog Post Row -->
        <div class="row">
            <div class="col-md-1 text-center">
                <p class="icon"><i class="fa fa-film fa-4x"></i>
                </p>
                <p>June 17, 2014</p>
            </div>
            <div class="col-md-5">
                <a href="blog-post.html">
                    <div class="hover01 column">
						<div>
							<figure><img class="img-responsive img-hover" src="images/blog2.jpg" alt=""></figure>
						</div>
					</div>
                </a>
            </div>
            <div class="col-md-6">
                <h3><a href="blog-post.html">Consectetur Adipiscing Elit</a>
                </h3>
                <p class="p1">by <a href="#">Bruce Lee</a>
                </p>
                <p class="p2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <a class="btn btn-primary btn-outline" href="blog-post.html">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Blog Post Row -->
        <div class="row">
            <div class="col-md-1 text-center">
                <p class="icon"><i class="fa fa-file-text fa-4x"></i>
                </p>
                <p>June 17, 2014</p>
            </div>
            <div class="col-md-5">
                <a href="blog-post.html">
					<div class="hover01 column">
						<div>
							<figure><img class="img-responsive img-hover" src="images/blog3.jpg" alt=""></figure>
						</div>
					</div>
                </a>
            </div>
            <div class="col-md-6">
                <h3><a href="blog-post.html">Proin Lobortis Tellus Sit Amet</a>
                </h3>
                <p class="p1">by <a href="#">John Rambo</a>
                </p>
                <p class="p2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <a class="btn btn-primary btn-outline" href="blog-post.html">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>	
        <hr>
<section class="blog-pages">
	<div class="container">
        <!-- Pager -->
        <div class="row">
            <ul class="pager">
                <li class="previous"><a href="#">&larr; Older</a>
                </li>
                <li class="next"><a href="#">Newer &rarr;</a>
                </li>
            </ul>
        </div>
        <!-- /.row -->
	</div>
</section>	
        <hr>

        @endsection