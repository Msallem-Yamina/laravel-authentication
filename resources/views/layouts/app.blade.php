<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NGO | Business Card Portfolio - Digi vCard</title>
	<link rel="icon" href="assets/images/favicon/icon.png">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	 <!-- CSS Files -->
	 <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cursor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/media-query.css') }}">

</head>
<body>
    <div id="app">
        <!-- Background images start -->
		<div class="background-img">
			<img src="assets/images/main-img/shape1.png" alt="shape-img" class="shape1">
			<img src="assets/images/main-img/shape2.png" alt="shape-img" class="shape2">
			<img src="assets/images/main-img/shape3.png" alt="shape-img" class="shape3">
		</div>
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="assets/svg/logo.svg" alt="logo">
                    </a>
                    <div class="language-sec">
							<div class="dropdown">
								<button class="btn dropdown-toggle custom-language-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="assets/svg/language-icon.svg" alt="icon">En
								</button>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="javascript:void(0)"><img class="flag-icon" src="assets/images/flag/flag1.png" alt="flag-img">English</a></li>
									<li class="mt-5"><a class="dropdown-item" href="javascript:void(0)"><img class="flag-icon" src="assets/images/flag/flag2.png" alt="flag-img">Italian</a></li>
									<li class="mt-5"><a class="dropdown-item" href="javascript:void(0)"><img class="flag-icon" src="assets/images/flag/flag3.png" alt="flag-img">Turkish</a></li>
									<li class="mt-5"><a class="dropdown-item" href="javascript:void(0)"><img class="flag-icon" src="assets/images/flag/flag4.png" alt="flag-img">Arabic</a></li>
									<li class="mt-5"><a class="dropdown-item" href="javascript:void(0)"><img class="flag-icon" src="assets/images/flag/flag5.png" alt="flag-img">German</a></li>
									<li class="mt-5"><a class="dropdown-item" href="javascript:void(0)"><img class="flag-icon" src="assets/images/flag/flag6.png" alt="flag-img">Portugise</a></li>
									<li class="mt-5"><a class="dropdown-item" href="javascript:void(0)"><img class="flag-icon" src="assets/images/flag/flag7.png" alt="flag-img">Français</a></li>
									<li class="mt-5"><a class="dropdown-item" href="javascript:void(0)"><img class="flag-icon" src="assets/images/flag/flag8.png" alt="flag-img">Spanish</a></li>
									<li class="mt-5"><a class="dropdown-item" href="javascript:void(0)"><img class="flag-icon" src="assets/images/flag/flag9.png" alt="flag-img">Russian</a></li>
									<li class="mt-5"><a class="dropdown-item" href="javascript:void(0)"><img class="flag-icon" src="assets/images/flag/flag10.png" alt="flag-img">Chienese</a></li>
								</ul>
							</div>
						</div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li><a href="{{ url('/home') }}" class="nav-link">Home</a></li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <div class="footer mt-10">
			<p>Made By Digi vCard Builder 💖 The_Krishna</p>
		</div>
    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/js/slick.min.js') }}"></script>    	
		<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('assets/js/cursor.js') }}"></script>
		<script src="{{ asset('assets/js/gallery.js') }}"></script>
    	<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
