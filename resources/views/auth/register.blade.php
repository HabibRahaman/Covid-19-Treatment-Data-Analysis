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
                        <h5 class="font-medium m-b-20">{{ __('Register') }}</h5>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <form class="col s12" method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- email -->
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="name" type="text" class="validate form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <label for="name">{{ __('Name') }}</label>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- email -->
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="email" class="validate form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
                                    <input id="password" type="password" class="validate form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    <label for="password">{{ __('Password') }}</label>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- pwd -->
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password-confirm" type="password" class="validate form-control" name="password_confirmation" required autocomplete="new-password">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                </div>
                            </div>
                            <!-- pwd -->
                            <div class="row m-t-5">
                                <div class="col s7">
                                    <label for="confirm">
                                        <input type="checkbox" class="validate" id="confirm" required/>
                                        <span>Agree to all Terms</span>
                                    </label>
                                </div>
                            </div>
                            <!-- pwd -->
                            <div class="row m-t-40">
                                <div class="col s12">
                                    <button class="btn-large w100 red" type="submit">{{ __('Register') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="center-align m-t-20 db">
                        Already have an account? <a href="{{ route('login') }}">Login</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Auth box.scss -->
        <!-- ============================================================== -->

@endsection