@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
 <title>sign Up</title>
 <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="app.css">
</head>
<body class="body">
<div class="login">
    <div class="login-header">
        <div class="logo2">
        <img src="logo2.png" class="logodalam2">
        
    </div>
    </div>
        <form class="login-container"  method="POST" action="{{ route('register') }}">
            @csrf
            <p>Username</p>
            <p>
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"  }} required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
            </p>
            <p>Email</p>
            <p >
                <input  id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required>

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
            <p>Re-Type Password</p>
            <p>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </p>
           
            <p>
                <input type="submit" value="Register">
            </p>
         

        </form>
</div>
</body>
@endsection