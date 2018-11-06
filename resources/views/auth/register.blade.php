@extends('layouts.app')

@section('content')
<body class="body" style="background: url('{{ url('/') }}/BG.png');background-size:cover;">
<div class="login">
    <div class="login-header">
        <div class="logo2">
        <img src="{{ url('/') }}/img/icon/1.png" class="logodalam2">

    </div>
    </div>
        <form method="POST" action="{{ route('register') }}" class="login-container">
            @csrf
            <p>Username</p>
            <p>
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="username"  }} required autofocus>

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
