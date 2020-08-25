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
                        <h5 class="font-medium m-b-20">{{ __('Verify Your Email Address') }}</h5>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">

                                <div class="card-body">
                                    @if (session('resent'))
                                        <div class="alert alert-success" role="alert">
                                            {{ __('A fresh verification link has been sent to your email address.') }}
                                        </div>
                                    @endif

                                    {{ __('Before proceeding, please check your email for a verification link.') }}
                                    {{ __('If you did not receive the email') }},
                                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                        @csrf
                                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Auth box.scss -->
        <!-- ============================================================== -->
@endsection
