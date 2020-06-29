@extends('layouts.app')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <p class="font-weight-bold">
                Jijenge<b class="font-weight-light">Investments</b>
            </p>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg"><strong>Sign in</strong> to start your session</p>

                <form method="POST" action="{{ route('login') }}" >
                    @csrf
                    <div class="input-group mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-mail address" required>

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="far fa-envelope"></span>
                            </div>
                        </div>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <div class="col-8">
                            <div class="icheck-success">
                                <input type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-success btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>

                    <p class="mb-1" align="center">
                        @if (Route::has('password.request'))
                            <a style="color: #1e991a;" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        @endif
                    </p>
                </form>
            </div>
        </div>
    </div>
    <p class="mb-1" align="center">
        <a style="color: #000000;" href="{{ route('register') }}" class="text-center">I don't have an account</a>
    </p>

@endsection
