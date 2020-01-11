<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Laravel Fundamentals</title>
	<link rel="stylesheet" href="{{asset('public/asset/style.css')}}" />
	
</head>
<body>

	<div class="main_wrapper header_bg">
		<div class="wrapper">
			<header id="header">
				<div class="logo">
					<h1>Laravel</h1>
				</div>
				<nav>
					<ul id="menu">
						<li><a href="{{url('/')}}">Home</a></li>
						<li><a href="{{url('about')}}">About</a></li>
						<li><a href="{{url('services')}}">Services</a></li>
						<li><a href="{{url('contact')}}">Contact</a></li>
					</ul>
				</nav>	
			</header>
			
		</div>
	</div>
	
	@yield('content')


	<div class="main_wrapper">
		<div class="wrapper">
			<footer id="ftr">
				<h1>Fusionsaid</h1>
				<p>&copy; 2019 FusionsAid.com - All Rights Reserved</p>
				
				<div>
	
					<a class="fb" href=""></a>	
					<a class="fb" href=""></a>	
					<a class="fb" href=""></a>	
					<a class="fb" href=""></a>	
					
				</div>		
			</footer>
		</div>
	</div>
	
		
</body>
</html>