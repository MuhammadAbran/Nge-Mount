
<<<<<<< HEAD
@section('content')
<!DOCTYPE html>
<html>
<head>
 <title>login</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 <link rel="stylesheet" type="text/css" href="app.css">
</head>
<body class="body">
    <div class="logo">
        <img src="logo.png" class="logodalam">
        
    </div>
<div class="login">
    <div class="login-header"></div>
        <form class="login-container" method="POST" action="{{ route('login') }}">
            @csrf
            <p>Email</p>
            <p>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  required autofocus>
                @if ($errors->has('email'))
=======

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link href="{{ asset('/css/main.css') }}"  rel="stylesheet"> <!--===============================================================================================-->

<body>
  @extends('layouts.app')

@section('content')  
    <div class="limiter" >
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100" >
                <form class="login100-form validate-form"  >
                    <span class="login100-form-logo">
                        <img src="images/logo.png" width="120px" height="120px" >
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        <h1>LOG IN</h1> 
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter email">
                        <input class="input100" placeholder="Email"id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
>>>>>>> 1136c7deb546fb9d757bbd74ee09ccdf3b921ccd
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
<<<<<<< HEAD
            </p>
            <p>Password</p>
            <p>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
=======

                    </div>
>>>>>>> 1136c7deb546fb9d757bbd74ee09ccdf3b921ccd

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                         <input class="input100" placeholder="Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                          @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
<<<<<<< HEAD
            </p>
            <p class="p1">
                                    <input  class="col-md-1 offset-md-1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label  for="remember">
                                        Remember Me
                                    </label>
                            </p>
           <p>
                <input type="submit" value="Log in"class="btn btn-primary">
            </p>
          <a class="forgot" href="{{ route('password.request') }}">
                                   Forgot Your Password?
                                </a>
                            </div>
                       
        </form>
</div>
</body>
</html>
=======
                    </div>

                    

                   <div class="container-login100-form-btn">
                        <button  type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

>>>>>>> 1136c7deb546fb9d757bbd74ee09ccdf3b921ccd
@endsection