@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="login-logo mt-5">
                <h3 style="font-family: 'Bahnschrift'; font-weight: lighter; text-align: center">Jijenge Investments</h3>
            </div>
            <div style="background-color: transparent">
                <form method="POST" action="{{ route('login') }}" >
                    @csrf
                        <div class="card elevation-1" style="width: 350px; height: 350px">
                            <div class="card-body login-card-body" style="">
                                <div class="form-group row">
                                 <div class="col-md-12">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" style="text-align: center" placeholder="Enter e-mail address" value="{{ old('email') }}" required autocomplete="email" autofocus
                                               style="border: none; border-bottom: solid 1px; border-bottom-color: black; -webkit-border-radius: 0; border-radius: 0;">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                   <div class="col-md-12">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" style="text-align: center" placeholder="Enter password" required autocomplete="current-password"
                                               style="border: none; border-bottom: solid 1px; border-bottom-color: black; -webkit-border-radius: 0; border-radius: 0;">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row m-0">
                                    <div class="col-md-10 mt-1">
                                        <div class="form-check" style="float: left">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-0">
                                        <button type="submit" class="btn" style="background-color: #0cc170; margin: 0 auto; padding-left: 2rem; padding-right: 2rem; margin-top: 20px; color: white">
                                            {{ __('Login') }}
                                        </button><br>
                                    </div>

                                <div class="form-group row mb-0">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" style="color: #1e991a; float: right; margin-top: 30px" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                                <div class="form-group row mb-0">
                                    <p style="margin-left: 12px; margin-top: 0px">
                                        Don't have an account?
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" style="color: #1e991a;" href="{{ route('password.request') }}">
                                            {{ __('Register with Us') }}
                                        </a>
                                    @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
