@extends('layouts.front')

@section('content') 

<!-- banner section -->
<section class="banner">
	<div class="banner-info">
		<h2 class="project">Our Projects</h2>
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
<!-- Page Content -->
<section class="portfolio-header">
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active">Projects</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>
<section class="portfolio-content">
	<h2 class="text-center">Check Our Projects</h2>
	<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
	<div class="container"> 
 <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 img-portfolio">
                <a href="projects-item.html">
					<div class="hover01 column">
						<div>
							<figure><img class="img-responsive img-hover" src="images/port1.jpg" alt=""></figure>
						</div>
					</div>
                </a>
                <h3>
                    <a href="projects-item.html">Lorem Ipsum</a>
                </h3>
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="projects-item.html">
                    <div class="hover01 column">
						<div>
							<figure><img class="img-responsive img-hover" src="images/port2.jpg" alt=""></figure>
						</div>
					</div>
                </a>
                <h3>
                    <a href="portfolio-item.html">Dolor Sit Amet</a>
                </h3>
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="projects-item.html">
                    <div class="hover01 column">
						<div>
							<figure><img class="img-responsive img-hover" src="images/port3.jpg" alt=""></figure>
						</div>
					</div>
                </a>
                <h3>
                    <a href="projects-item.html">Consectetur</a>
                </h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 img-portfolio">
                <a href="projects-item.html">
                    <div class="hover01 column">
						<div>
							<figure><img class="img-responsive img-hover" src="images/port4.jpg" alt=""></figure>
						</div>
					</div>
                </a>
                <h3>
                    <a href="projects-item.html">Adipiscing</a>
                </h3>
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="projects-item.html">
                    <div class="hover01 column">
						<div>
							<figure><img class="img-responsive img-hover" src="images/port5.jpg" alt=""></figure>
						</div>
					</div>
                </a>
                <h3>
                    <a href="projects-item.html">Lorem Ipsum</a>
                </h3>
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="projects-item.html">
                    <div class="hover01 column">
						<div>
							<figure><img class="img-responsive img-hover" src="images/port6.jpg" alt=""></figure>
						</div>
					</div>
                </a>
                <h3>
                    <a href="projects-item.html">Dolor Sit Amet</a>
                </h3>
            </div>
        </div>

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 img-portfolio">
                <a href="projects-item.html">
                    <div class="hover01 column">
						<div>
							<figure><img class="img-responsive img-hover" src="images/port7.jpg" alt=""></figure>
						</div>
					</div>
                </a>
                <h3>
                    <a href="projects-item.html">Adipiscing</a>
                </h3>
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="projects-item.html">
					<div class="hover01 column">
						<div>
							<figure><img class="img-responsive img-hover" src="images/port8.jpg" alt=""></figure>
						</div>
					</div>
                </a>
                <h3>
                    <a href="projects-item.html">Consectetur</a>
                </h3>
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="projects-item.html">
                    <div class="hover01 column">
						<div>
							<figure><img class="img-responsive img-hover" src="images/port9.jpg" alt=""></figure>
						</div>
					</div>
                </a>
                <h3>
                    <a href="projects-item.html">Lorem Ipsum</a>
                </h3>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>	
        <hr>
<section class="portfolio-pages">
	<div class="container">
        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>	
@endsection