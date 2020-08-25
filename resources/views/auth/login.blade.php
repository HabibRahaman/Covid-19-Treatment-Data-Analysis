@extends('auth.common.master')
@section('content')

        <!-- ============================================================== -->
        <!-- Auth box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url({{ asset('backend/images/big/auth-bg.jpg') }}) no-repeat center center;">
            <div class="auth-box">
                <div id="loginform">
                    <div class="logo">
                        <span class="db"><img src="{{ asset('web/img/logo.png') }}" alt="logo" /></span>
                        <h5 class="font-medium m-b-20">{{ __('Login') }}</h5>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <form class="col s12" method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- email -->
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="email" class="validate form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <label for="email">{{ __('E-Mail Address') }}</label>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- pwd -->
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" type="password" class="validate form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <label for="password">{{ __('Password') }}</label>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- capcha -->
                            <div class="row">
                                <div class="input-field col s12">
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display(['data-theme' => 'default']) !!}

                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <!-- pwd -->
                            <div class="row m-t-5">
                                <div class="col s7">
                                    <label for="remember">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span>{{ __('Remember Me') }}</span>
                                    </label>
                                </div>
                                <div class="col s5 right-align">
                                    @if (Route::has('password.request'))
                                        <a class="link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <!-- pwd -->
                            <div class="row m-t-40">
                                <div class="col s12">
                                    <button class="btn-large w100 blue accent-4" type="submit">{{ __('Login') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="center-align m-t-20 db">
                        Don't have an account? <a href="{{ route('register') }}">Sign Up!</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Auth box.scss -->
        <!-- ============================================================== -->

@endsection