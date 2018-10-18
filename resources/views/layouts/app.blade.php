
<!DOCTYPE html>
<html lang="en">
<head>

    <title>@yield('title')</title>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trendy CV Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="{{ asset('/css/bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
<link href="{{ asset('/css/style.css') }}" type="text/css" rel="stylesheet" media="all">   
<link href="{{ asset('/css/font-awesome.css') }}" rel="stylesheet"> <!-- font-awesome icons --> 
<!-- //Custom Theme files --> 
<!-- js -->
<script src="{{ asset('/js/jquery-2.2.3.min.js') }}"></script>  
<!-- //js -->
<!-- web-fonts -->    
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<!-- //web-fonts -->
 <link rel="shortcut icon" type="image/png" href="{{ asset('/images/favicon.png') }}"/>
</head>
<body style="background-image: url({{ URL::asset('images/bg.png') }}); color:#333; opacity: 1;"> 
	<!-- banner -->
	<div class="banner">
		<div class="banner-w3lsinfo"> 
			<!-- header -->
			<div class="header">
				<div class="container">
					<div class="logo">
						<h1><a href="{{ route('index') }}">Research Profile</a></h1>
					</div> 
					<div class="menu">
						<a href="#" class="navicon"></a> 
						<div class="toggle effect-3"> 
							<ul class="toggle-menu">
								<li><a href="{{ route('index') }}" class="active"> Home</a></li>
								<li><a href="{{ route('about') }}"> About</a></li>  
								<li><a href="{{ route('skills') }}"> Skills</a></li>
								<li><a href="{{ route('experience') }}">Experience</a></li> 
								<li><a href="{{ route('education') }}">Education</a></li>
								<li><a href="{{ route('projects') }}"> My Projects</a></li>							
								<li><a href="{{ route('contact') }}"> Contact Us</a></li>
                                                                @if (Auth::user())
                                                                <li>
                                                                    <a href="{{ url('/logout') }}"
                                                                        onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">
                                                                        Logout
                                                                    </a>

                                                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                                        {{ csrf_field() }}
                                                                    </form>
                                                                </li>
                                                                @else
                                                                <li><a href="{{ url('/login') }}">Login</a></li> 
                                                                @endif
                                                                
							</ul>
						</div> 
					</div>   
					<div class="social-w3licon">
						<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
						<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
						<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //header --> 
			<!-- banner-text -->
			@yield('banner')
			<!-- //banner-text -->
			<div class="w3agile-address"> 
				<div class="container"> 
					<ul>
						<li><i class="fa fa-map-marker" aria-hidden="true"></i>Broome St, Canada, NY 10002, New York</li>
						<li><i class="fa fa-phone" aria-hidden="true"> </i>  +01 111 222 3333</li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com"> mail@example.com</a></li>
					</ul>
				</div> 
			</div> 
		</div>
	</div>
	<!-- //banner -->
        @yield('content')
	<!-- footer -->  
	<div class="w3agile-footer">
		<div class="container"> 
			<p>© 2017 Mehadi Hassan. All rights reserved | Under developed by <a href="http://www.facebook.com/jahid.jabed" target="_blank">JAHID</a></p>
		</div>
	</div>
	<!-- //footer --> 
	<!-- menu-js -->
	<script>
		$('.navicon').on('click', function (e) {
		  e.preventDefault();
		  $(this).toggleClass('navicon--active');
		  $('.toggle').toggleClass('toggle--active');
		});
	</script> 
	<!-- //menu-js --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
</body>
</html>