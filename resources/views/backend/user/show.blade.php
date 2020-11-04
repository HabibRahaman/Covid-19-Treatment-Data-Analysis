@extends('backend.common.layouts.master')
@section('content')

        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

            @include('backend.common.layouts.breadcrumb')


            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-header">
                                <a class="waves-effect waves-light btn blue" href="{{ route($route.'index') }}">Back</i></a>
                            </div>
                            <div class="card-content">
                                <div class="center-align m-t-30"> <img src="{{ asset('uploads/'.$path.'/'.$user->photo) }}" class="circle" width="150" />
                                    <h4 class="card-title m-t-10">{{ $user->name }}</h4>
                                    <h6 class="card-subtitle">{{ $user->designation }}, {{ $user->organization }}</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="card-content">
                                <small>Email</small>
                                <h6>{{ $user->email }}</h6>
                                <small>Phone</small>
                                <h6>{{ $user->phone }}</h6>
                                <small>Address</small>
                                <h6>{{ $user->address }}, {{ $user->city }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m8">
                        <div class="card">
                            <div class="row">
                                <div id="profile" class="col s12 profile-card">
                                    <div class="card-content">
                                        <div class="row">
                                            <h6>Personal info</h6>
                                        </div>
                                        <div class="row">
                                            <div class="col m4 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p>{{ $user->name }}</p>
                                            </div>
                                            <div class="col m4 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p>{{ $user->phone }}</p>
                                            </div>
                                            <div class="col m4"> <strong>Email</strong>
                                                <br>
                                                <p>{{ $user->email }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col m6 b-r"> <strong>Date Of Birth</strong>
                                                <br>
                                                <p>{{ $user->dob }}</p>
                                            </div>
                                            <div class="col m6"> <strong>Gender</strong>
                                                <br>
                                                <p>
                                                    @if($user->gender == 1)
                                                        Male
                                                    @elseif($user->gender == 2)
                                                        Female
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <h6>Professional info</h6>
                                        </div>
                                        <div class="row">
                                            <div class="col m4 b-r"> <strong>Designation</strong>
                                                <br>
                                                <p>{{ $user->designation }}</p>
                                            </div>
                                            <div class="col m4 b-r"> <strong>Department</strong>
                                                <br>
                                                <p>{{ $user->department }}</p>
                                            </div>
                                            <div class="col m4"> <strong>Organization</strong>
                                                <br>
                                                <p>{{ $user->organization }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <h6>Educational info</h6>
                                        </div>
                                        <div class="row">
                                            <div class="col m4 b-r"> <strong>Higher Degree</strong>
                                                <br>
                                                <p>{{ $user->higher_degree }}</p>
                                            </div>
                                            <div class="col m4 b-r"> <strong>Academy</strong>
                                                <br>
                                                <p>{{ $user->academy }}</p>
                                            </div>
                                            <div class="col m4"> <strong>Specialty</strong>
                                                <br>
                                                <p>{{ $user->specialty }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <h6>Address info</h6>
                                        </div>
                                        <div class="row">
                                            <div class="col m4 b-r"> <strong>Address</strong>
                                                <br>
                                                <p>{{ $user->address }}</p>
                                            </div>
                                            <div class="col m4 b-r"> <strong>City</strong>
                                                <br>
                                                <p>{{ $user->city }}</p>
                                            </div>
                                            <div class="col m4"> <strong>Country</strong>
                                                <br>
                                                <p>{{ $user->country }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30">
                                            <strong>Profile</strong>
                                            <br>
                                            {!! $user->profile !!}
                                        </p>
                                        <hr>
                                        <p class="m-t-30">
                                            <strong>Roles : </strong>
                                            <br>
                                            @if(!empty($user->getRoleNames()))
                                                @foreach($user->getRoleNames() as $v)
                                                    <div class="chip">
                                                        {{ $v }}
                                                    </div>
                                                @endforeach
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
@endsection