<!-- navigation -->
<section class="navigation">
	<div class="navbar-wrapper">
		<div class="container">
			<nav class="navbar navbar-inverse navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/"><h1>Tobio Properties</h1></a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right cl-effect-14">
							<li class="{{ Request::is('/') ? 'active' : '' }}">
                            <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="{{ Request::is('/about*') ? 'active' : '' }}">
                            <a href="{{ route('about') }}">About</a>
                            </li>
                            <li class="{{ Request::is('/property*') ? 'active' : '' }}">
                            <a href="{{ route('property') }}">Property</a>
                            </li>
                            <li class="{{ Request::is('/blog*') ? 'active' : '' }}">
                            <a href="{{ route('blog') }}">Blog</a>
                            </li>
                            <li class="{{ Request::is('/contact') ? 'active' : '' }}">
                            <a href="{{ route('contact') }}">Contact</a>
                            </li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
    </div>
</section>
<!-- /navigation -->