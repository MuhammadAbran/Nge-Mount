@extends('layouts.app')

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
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
            </p>
            <p>Password</p>
            <p>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
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
@endsection