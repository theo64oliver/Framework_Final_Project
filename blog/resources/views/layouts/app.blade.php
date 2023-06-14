<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .header {
	 padding: 10px 16px;
	 position: sticky;
	 top: 0;
	 background: #000;
	 color: #ffffff;
	}
		
	.title_header
	{
	 color: #ffffff;
	 -webkit-animation: glow 1s ease-in-out infinite alternate;
  	 -moz-animation: glow 1s ease-in-out infinite alternate;
 	 animation: glow 1s ease-in-out infinite alternate;
	}
	
	@-webkit-keyframes glow {
  	from {
   	  text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
 	 }
 	 to {
   	  text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
	 }
	}
    </style>
</head>
<body>
    <div id="app">
        <main class="py-4">
		<div class="header" id="myHeader">
	  	    	<h1 class="title_header">GYM INSHAPE</h1>
	  	    	@if (Route::has('login'))
		        <div class="login_register" style="position: absolute;right:20px;top:30px">
		            @auth
								<form action="{{ route('home') }}">
		 		    	<button type="submit">Home</button>
		            @else
		                <form action="{{ route('login') }}">
		 		    <button type="submit">Log in</button>
	      			</form>

		                @if (Route::has('register'))
		                    <form action="{{ route('register') }}">
		 		    	<button type="submit">Register</button>
	      			    </form>

		                @endif
		            @endauth
		        </div>
		    @endif
		</div>
            <div class="container">
            @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
