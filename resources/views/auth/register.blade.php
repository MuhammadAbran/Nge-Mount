

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
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}" >
                    <span class="login100-form-logo">
                        <img src="images/logo.png" width="120px" height="120px" >
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        <h1>REGISTER</h1> 
                    </span>

                    <div class="wrap-input100 validate-input" >
                       <input class="input100" id="name" placeholder="Name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus >

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert" >
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                    </div>
                    <div class="wrap-input100 validate-input" >
                        <input id="email" class="input100" placeholder="Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                    </div>

                    <div class="wrap-input100 validate-input">
                  <input class="input100"id="password"  placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>

                                @endif
                    </div>

                    <div class="wrap-input100 validate-input" >
                   <input class="input100" placeholder="Password Confirmation" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>

                    

                   <div class="container-login100-form-btn">
                        <button  type="submit" class="login100-form-btn">
                            Register
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

@endsection