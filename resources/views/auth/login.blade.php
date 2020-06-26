@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="login-logo mt-5">
                <h1 style="font-family: 'Arial';">Jijenge Investments</h1><br>
            </div>
            <div style="background-color: transparent">
                <form method="POST" action="{{ route('login') }}" >
                    @csrf
                    <div class="login-box elevation-1" style="height: 500px">
                        <div class="card" style="width: 400px;">
                            <div class="card-body login-card-body" style="display: inline-block; text-align: center; -webkit-border-radius: 55px; border-radius: 55px;">
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
                                    <div class="col-md-6 mt-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-0 mt-1">
                                        <button type="submit" class="btn" style="background-color: #0cc170; padding-left: 2rem; padding-right: 2rem; color: white">
                                            {{ __('Login') }}
                                        </button><br>
                                    </div>

                                <div class="form-group row mb-0">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" style="color: #1e991a; float: right" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
