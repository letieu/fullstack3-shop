@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>                    
                        </form>
                        <div >
                            <div style="text-align: center; margin: 20px 0;">
                                <span class="label-text">__________________     or connect with     __________________</span>
                            </div>
                            <ul class="card-columns" style="display: flex; justify-content: center;padding:0;">
                                <li class="card" style="width: 44px; margin:0 20px">
                                    <a href="{{ route('loginFacebook') }}">
                                        <img class="card-img"  src="{{ url('/images/facebook.svg') }}">
                                    </a>
                                </li>
                                <li class="card" style="width: 44px; margin:0 20px">
                                    <a href="{{ route('loginGoogle') }}">
                                        <img class="card-img"  alt="Login with Google" src="{{ url('/images/google.svg') }}">
                                    </a>
                                </li>
                                <li class="card" style="width: 44px; margin:0 20px">
                                    <a href="{{ route('loginGithub') }}">
                                        <img class="card-img" alt="Login with Github" src="{{ url('/images/github.svg') }}">
                                    </a>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
