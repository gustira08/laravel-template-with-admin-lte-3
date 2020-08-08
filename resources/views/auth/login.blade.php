<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel | {{ __('Login') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    {{-- TODO: Get with npm --}}
    {{-- iCheck --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css">

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card">
            <div class="card-body login-card-body">
                {{-- Login logo --}}
                <div class="login-logo mb-4">
                    <a href="{{ route('login') }}">
                        <img
                            src="{{ asset('images/AdminLTELogo.png') }}"
                            alt="logo"
                            style="width:30%;height:auto;"
                        >
                    </a>
                </div>

                <div class="divider"></div>

                {{-- Error box --}}
                <div class="error-box text-center @error('email') mb-4 @enderror text-danger" role="alert">
                    @error('email')
                        <span>{{ $message }}</span>
                    @enderror

                    @error('password')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                {{-- Login form --}}
                <form method="POST">
                    @csrf

                    {{-- Email --}}
                    <div class="input-group mb-3">
                        <input
                            type="email"
                            name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            placeholder="{{ __('email') }}"
                            value="{{ old('email') }}"
                            required autocomplete="email"
                            autofocus
                        >
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    {{-- Password --}}
                    <div class="input-group mb-4">
                        <input
                            type="password"
                            name="password"
                            class = "form-control @error('password') is-invalid @enderror"
                            placeholder="{{ __('Password') }}"
                            required
                            autocomplete="current-password"
                        >
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    {{-- Remember me & Login button --}}
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input
                                    type="checkbox"
                                    name="remember"
                                    id="remember"
                                    {{ old('remember') ? 'checked' : '' }}
                                >
                                <label for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>
                        </div>
                    </div>
                </form>

                {{-- Forgot password link --}}
                @if (Route::has('password.request'))
                    <p class="mb-1 mt-4">
                        <a href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </p>
                @endif
            </div>
        </div>
    </div>

    @include('partials._app-js')
</body>
</html>
