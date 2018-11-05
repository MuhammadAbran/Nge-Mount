@extends('layouts.app')

@section('title')
  Profile | {{ Auth::user()->username }}
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Profile</div>

                <div class="card-body">
                  <div class="container">
                    <img src="{{url('/')}}/uploads/{{ $user->avatar }}" alt="{{ $user->username }}" class="img-thumbnail" style="width:200px;height:200px;margin-left:230px;">
                    <form action="{{ route('del.avatar') }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn-del">
                          <i class="fas fa-minus-circle"></i>
                      </button>
                    </form>
                    <br><br>
                      <form method="POST" action="{{ route('profile.update_avatar', Auth::user()->id) }}" enctype="multipart/form-data">
                          @csrf
                          <div class="custom-file col-md-2" style="margin-left:235px;">
                              <input type="file" class="custom-file-input" name="avatar">
                              <label class="custom-file-label" for="customFile"></label>
                          </div>
                        <button type="submit" class="btn btn-secondary" style="margin-top:7px;margin-left:3px;">
                            Upload
                        </button>
                    </form>
                    <br><br>
                  </div>
                  <form method="POST" action="{{ route('profile.update', Auth::user()->id) }}">
                    @csrf
                    @method('POST')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Username</label>

                            <div class="col-md-6">
                                <input id="name" value="{{ $user->username }}" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                name="username" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" value="{{ $user->email }}" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
