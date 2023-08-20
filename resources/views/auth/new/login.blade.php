<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/login/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/login/css/fontawesome-all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/login/css/iofrm-style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/login/css/iofrm-theme3.css')}}">
</head>

<body>
	<div class="form-body">
		<div class="website-logo">
			<a href="#">
				<div class="logo">
					<img class="logo-size" src="{{ asset('frontend/login/images/logo-light.svg')}}" alt="">
				</div>
			</a>
		</div>
		<div class="row">
			<div class="img-holder">
				<div class="bg"></div>
				<div class="info-holder">
					<!--  -->
				</div>
			</div>
			<div class="form-holder">
				<div class="form-content">
					<div class="form-items">
						<h3>Get more things done with Loggin platform.</h3>
						<p>Access to the most powerfull tool in the entire design and web industry.</p>
						<div class="page-links">
							<a href="#" class="active">
								Login
							</a>
							<a href="{{ route('register') }}">
								Register
							</a>
						</div>
						<div class="alert alert-warning alert-dismissible fade show with-icon" role="alert">
							Please fill the following form with your information
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="POST" action="{{ route('login') }}">
							@csrf
							<input class="form-control" type="text" name="email" placeholder="E-mail Address" required>
							<input class="form-control" type="password" name="password" placeholder="Password" required>
							<div class="form-button">
								<button id="submit" type="submit" class="ibtn">Login</button>
								@if (Route::has('password.request'))
								<a class="underline text-sm text-gray-600 
								dark:text-gray-400 hover:text-gray-900 
								dark:hover:text-gray-100 rounded-md focus:outline-none 
								focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
									href="{{ route('password.request') }}">
									{{ __('Forgot your password?') }}
								</a>
								@endif
							</div>
						</form>
						<div class="other-links">
							<span>Or login with</span>
							<a href="#">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a href="#">
								<i class="fab fa-google"></i>
							</a>
							<a href="#">
								<i class="fab fa-linkedin-in"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="{{ asset('frontend/login/js/jquery.min.js')}}"></script>
	<script src="{{ asset('frontend/login/js/popper.min.js')}}"></script>
	<script src="{{ asset('frontend/login/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('frontend/login/js/main.js')}}"></script>
</body>

</html>