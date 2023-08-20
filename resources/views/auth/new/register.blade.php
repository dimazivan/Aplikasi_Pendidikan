<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/login/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/login/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/login/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/login/css/iofrm-theme3.css')}}">
</head>

<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
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
                            <a href="{{ route('login') }}">
                                Login
                            </a>
                            <a href="#" class="active">
                                Register
                            </a>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <input class="form-control" type="password" name="password_confirmation"
                                placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Register</button>
                            </div>
                        </form>
                        <div class="other-links">
                            <span>Or register with</span>
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