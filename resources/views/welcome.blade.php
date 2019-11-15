{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}

<!DOCTYPE HTML>
<html>
	<head>
		<title></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		
	</head>
	<body class="homepage">

	<!-- Header -->
		<div id="header">
			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
						<h1><a href="#">Onnews Blog</a></h1>
						<span>Welcome to Onnew-Blog</span>
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
                        <li class="active" ><a href="{{"/"}}">Homepage</a></li>
							<li class="active" ><a href="">Contact</a></li>
							
						</ul>
					</nav>

			</div>
		</div>
	<!-- Header -->
			
	<!-- Main -->
		<div id="main">
				
			<div class="container">
				<header>
						
					<h2></h2>
				</header>
			
				<div class="row">
						@foreach ($posts as $post)
				
					
					
						
					<div class="3u">
						<section>
								<div class="card" style="width: 18rem;">
										<img src="images/pics12.jpg" alt="" class="card-img-top" alt="...">
										<div class="card-body">
										<h5 class="card-title"> <strong>{{$post->title}}</strong> </h5>
										  <p class="card-text" s></p>
										<a href="{{route('admin-page.show',$post->id)}}" class="btn btn-primary">Read More</a>
										</div>
										
						</section>
					</div>
					@endforeach
					<div class="3u">
						<section>
								<div class="card" style="width: 18rem;">
										<img src="images/pics12.jpg" alt="" class="card-img-top" alt="...">
										<div class="card-body">
										  <h5 class="card-title">Card title</h5>
										  <p class="card-text" s>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										  <a href="#" class="btn btn-primary">Go somewhere</a>
										</div>
						</section>
					</div>
					<!-----modal-->
					<div class="card" style="width: 18rem;">
							<img src="images/pics12.jpg" alt="" class="card-img-top" alt="...">
							<div class="card-body">
							  <h5 class="card-title">Card title</h5>
							  <p class="card-text" s>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  <a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						  </div>
						  	<!-----modal-->
					<div class="3u">
						<section>
							<a href="#" class="image full"><img src="images/pics13.jpg" alt="" /></a>
							<p>Tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis elementum.</p>
							<a href="#" class="button">Read More</a>
						</section>
					</div>
				</div>
				<div class="divider">&nbsp;</div>
				<div class="row">
				
					<!-- Content -->
						<div class="8u skel-cell-important">
							<section id="content">
								<header>
									<h2>Integer gravida nibh quis urna</h2>
									<span class="byline">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum</span>
								</header>
								<p><a href="#" class="image full"><img src="images/pics02.jpg" alt=""></a></p>
								<p>This is <strong>Monochromed</strong>, a responsive HTML5 site template freebie by <a href="http://templated.co">TEMPLATED</a>. Released for free under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so use it for whatever (personal or commercial) &ndash; just give us credit! Check out more of our stuff at <a href="http://templated.co">our site</a> or follow us on <a href="http://twitter.com/templatedco">Twitter</a>.</p>
								<a href="#" class="button">Read More</a>
							</section>
						</div>
					<!-- /Content -->
						
					<!-- Sidebar -->
						<div id="sidebar" class="4u">
							<section>
								<header>
									<h2>Gravida praesent</h2>
									<span class="byline">Praesent lacus congue rutrum</span>
								</header>
								<p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Maecenas luctus lectus at sapien. Consectetuer adipiscing elit.</p>
								<ul class="default">
									<li><a href="#">Pellentesque quis lectus gravida blandit.</a></li>
									<li><a href="#">Lorem ipsum consectetuer adipiscing elit.</a></li>
									<li><a href="#">Phasellus nec nibh pellentesque congue.</a></li>
									<li><a href="#">Cras aliquam risus pellentesque pharetra.</a></li>
									<li><a href="#">Duis non metus commodo euismod lobortis.</a></li>
									<li><a href="#">Lorem ipsum dolor adipiscing elit.</a></li>
								</ul>
							</section>
						</div>
					<!-- Sidebar -->
						
				</div>
			
			</div>
		</div>
	<!-- Main -->

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="3u">
						<section>
							<ul class="style1">
								<li><img src="images/pics05.jpg" width="78" height="78" alt="">
									<p>Nullam non wisi a sem eleifend. Donec mattis libero eget urna. </p>
									<p class="posted">August 11, 2014  |  (10 )  Comments</p>
								</li>
								<li><img src="images/pics06.jpg" width="78" height="78" alt="">
									<p>Nullam non wisi a sem eleifend. Donec mattis libero eget urna. </p>
									<p class="posted">August 11, 2014  |  (10 )  Comments</p>
								</li>
								<li><img src="images/pics07.jpg" width="78" height="78" alt="">
									<p>Nullam non wisi a sem eleifend. Donec mattis libero eget urna. </p>
									<p class="posted">August 11, 2014  |  (10 )  Comments</p>
								</li>
							</ul>
						</section>
					</div>
					<div class="3u">
						<section>
							<ul class="style1">
								<li class="first"><img src="images/pics08.jpg" width="78" height="78" alt="">
									<p>Nullam non wisi a sem eleifend. Donec mattis libero eget urna. </p>
									<p class="posted">August 11, 2014  |  (10 )  Comments</p>
								</li>
								<li><img src="images/pics09.jpg" width="78" height="78" alt="">
									<p>Nullam non wisi a sem eleifend. Donec mattis libero eget urna. </p>
									<p class="posted">August 11, 2014  |  (10 )  Comments</p>
								</li>
								<li><img src="images/pics10.jpg" width="78" height="78" alt="">
									<p>Nullam non wisi a sem eleifend. Donec mattis libero eget urna. </p>
									<p class="posted">August 11, 2014  |  (10 )  Comments</p>
								</li>
							</ul>
						</section>				
					</div>
					<div class="6u">
						<section>
							<header>
								<h2>Aenean elementum</h2>
							</header>
							<p>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus.</p>
							<ul class="default">
								<li><a href="#">Pellentesque quis lectus gravida blandit.</a></li>
								<li><a href="#">Lorem ipsum consectetuer adipiscing elit.</a></li>
								<li><a href="#">Phasellus nec nibh pellentesque congue.</a></li>
								<li><a href="#">Cras aliquam risus pellentesque pharetra.</a></li>
								<li><a href="#">Duis non metus commodo euismod lobortis.</a></li>
								<li><a href="#">Lorem ipsum dolor adipiscing elit.</a></li>
							</ul>
						</section>
					</div>
				</div>
			</div>
		</div>
	<!-- Footer -->

	
	</body>
</html>