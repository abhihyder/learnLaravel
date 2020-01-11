@extends('welcome')
@section('content')
			
<div class="main_wrapper content_bg">
		<div class="wrapper cntnt_wrp">
			<div id="content">
				<section class="sctn">
				
					<article id="artcl">
						<img class="cntnt_img" src="{{asset('public/asset/img/blog_template.png')}}" alt="" />
						<h1>Duis aute irure dolor in henderit in voluptate</h1>
						<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipop ex ea commo doconsequat, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur...</p>
						<a class="cntn_r" href="#">Continue Reading</a>
					</article>
					
					<article id="artcl">
						<img class="cntnt_img" src="{{asset('public/asset/img/blog_template1.png')}}" alt="" />
						<h1>Duis aute irure dolor in henderit in voluptate</h1>
						<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipop ex ea commo doconsequat, sunt in culpa qui officia deserunt mollit anim id est laborum. 
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur...</p>
						<a class="cntn_r" href="#">Continue Reading</a>
					</article>
				</section>
			
				
				<div id="sidber">
				
					<aside class="asd">
						<h1>About Fusionsaid</h1>
						<p>Duis aute irure dolor in repre henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
						<p>Excepteur sint occaecat sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</aside>
					
					<aside class="asd">
						<h1 id="hdng">Search</h1>
						<input id="srch" type="text" placeholder="What are you looking for?" />
					</aside>
					
					<aside class="asd">
						<h1 id="hdng">Stay Tuned</h1>
						<div class="eml_sbmt">
							<input type="email" placeholder="Your Email" />
							<input id="sbmt" type="submit" />
						</div>
						
					</aside>
				</div>
			
				
			</div>
			
	
			<div class="wrapper">
				<div class="prvs_nxt">
					<a id="prvs" href="#"> &#8592; previous</a>
					<a id="nxt" href="#">next &#8594; </a>
				</div>
			</div>
		</div>
    </div>
    @endsection