<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Laravel Fundamentals</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
	<link rel="stylesheet" href="{{asset('public/asset/style.css')}}" />
</head>
<body>

	<div class="main_wrapper header_bg">
		<div class="wrapper">
			<header id="header">
				<div class="logo">
					<h1 class="hding">Laravel</h1>
				</div>
				<nav>
					<ul id="menu">
						<li><a class="links" href="{{url('/')}}">Home</a></li> <!-- when someone will click to this link it will be redirect to route controller file    -->
						<li><a class="links"  href="{{url('about')}}">About</a></li>
						<li><a class="links"  href="{{url('blog')}}">Blog</a></li>
						<li><a class="links"  href="{{url('services')}}">Services</a></li>
						<li><a class="links"  href="{{url('contact')}}">Contact</a></li>
					</ul>
				</nav>	
			</header>
			
		</div>
	</div>
	
	@yield('content')


	<div class="main_wrapper">
		<div class="wrapper">
			<footer id="ftr">
				<h1>Laravel</h1>
				<p>&copy; <?php echo date('Y'); ?> FusionsAid.com - All Rights Reserved</p>
				
				<div>
	
					<a class="fb links" href=""></a>	
					<a class="fb links" href=""></a>	
					<a class="fb links" href=""></a>	
					<a class="fb links" href=""></a>	
					
				</div>		
			</footer>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		
</body>
</html>