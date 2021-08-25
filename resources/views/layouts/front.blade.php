<!DOCTYPE html>
<html>
<head>
<title>Tobio Properties | Home </title>
<!--mobile apps-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="ofada, mowe, Houseing, Amen, Ajah, Lagos, ibeju-lekki, buy-sale, Rent, property, real-estate, Land" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- fonts -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css">
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
<!-- /fonts -->
<!-- css files -->
<link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('front/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('front/css/progressbar.css') }}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{ asset('front/css/team.css') }}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{ asset('front/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
<!-- /css files -->
<!-- js files -->
<script src="{{ asset('front/js/modernizr.custom.js') }}"></script>
<!-- /js files -->
</head>
<body>
    
<!-- navigation -->
@include('frontend.partials.navbar')
<!-- /navigation -->
@yield('content')

<!-- /contact section -->
<!-- footer section -->

  @include('frontend.partials.footer')

<!-- /footer section -->
<!-- js files -->
<script src="{{ asset('front/js/jquery.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/SmoothScroll.min.js') }}"></script>
<!-- js for banner -->
<script type="text/javascript" src="front/js/jquery.slide.js') }}"></script>
<script type="text/javascript">
	$('#slideshow-banner').slide({
		cdTime : 5000,      
	    controllerLeftButton : "front/images/left.png",    
	    controllerRightButton : "front/images/right.png"   
	});
</script>
<!-- /js for banner -->
<!-- js for team section -->
<script src="front/js/index.js"></script>
<!-- /js for team section -->
<!-- js for pricing table pop up  -->

<script src="{{ asset('front/js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
<script>
	$(document).ready(function() {
	$('.popup-with-zoom-anim').magnificPopup({
	type: 'inline',
	fixedContentPos: false,
	fixedBgPos: true,
	overflowY: 'auto',
	closeBtnInside: true,
	preloader: false,
	midClick: true,
	removalDelay: 300,
	mainClass: 'my-mfp-zoom-in'
	});
	});
</script>
<!-- /js for pricing table pop up  -->
<!-- js for skill section -->

<script src="{{ asset('front/js/progressbar.js') }}"></script>
<script>
    // Display the progress bar calling progressbar.js
	$('.progressbarPhp').progressBar({
		shadow : true,
		percentage : false,
		animation : true,
		animateTarget : true,
		barColor : "rgb(86, 79, 77)",
	});
	//Menu
	$(".spinDown").click(function() {
		var target = $(this).data("target");
		var scrollFix = -80;
		target = "#" + target;
		$("html,body").animate({
			scrollTop : $(target).offset().top + scrollFix
		}, 1000);
		return false;
	});
</script>
<!-- /js for skill section -->
<script src="{{ asset('front/js/main.js') }}"></script>
<!-- /js files -->
</body>
</html>