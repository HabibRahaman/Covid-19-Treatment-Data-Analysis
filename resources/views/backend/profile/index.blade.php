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
                            <div class="card-content">
                                <div class="center-align m-t-30"> <img src="{{ asset('backend/images/users/5.jpg') }}" class="circle" width="150" />
                                    <h4 class="card-title m-t-10">{{ $user->name }}</h4>
                                    <h6 class="card-subtitle">{{ $user->designation }}</h6>
                                    <div class="center-align">
                                        <div>
                                            <a href="javascript:void(0)" class="m-r-40"><i class="icon-people"></i> <font class="font-medium">254</font></a>
                                            <a href="javascript:void(0)"><i class="icon-picture"></i> <font class="font-medium">54</font></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-content">
                                <small>Email address </small>
                                <h6>{{ $user->email }}</h6>
                                <small>Phone</small>
                                <h6>{{ $user->phone }}</h6>
                                <small>Address</small>
                                <h6>{{ $user->address }}</h6>
                                <small class="db m-t-20">Social Profile</small>
                                <a href="javascript:void(0)" class="btn-floating indigo darken-2 m-t-10"><i class="fab fa-facebook"></i></a>
                                <a href="javascript:void(0)" class="btn-floating blue darken-1 m-t-10"><i class="fab fa-twitter"></i></a>
                                <a href="javascript:void(0)" class="btn-floating deep-orange m-t-10"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m8">
                        <div class="card">
                            <div class="row">
                                <div class="col s12">
                                    <ul class="tabs">
                                        <li class="tab col s3"><a href="#profile">Profile</a></li>
                                        <li class="tab col s3"><a href="#settings">Settings</a></li>
                                        <li class="tab col s3"><a href="#password">Reset Password</a></li>
                                    </ul>
                                </div>
                                <div id="profile" class="col s12">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col m3 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p>{{ $user->name }}</p>
                                            </div>
                                            <div class="col m3 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p>{{ $user->phone }}</p>
                                            </div>
                                            <div class="col m3 b-r"> <strong>Email</strong>
                                                <br>
                                                <p>{{ $user->email }}</p>
                                            </div>
                                            <div class="col m3"> <strong>Location</strong>
                                                <br>
                                                <p>{{ $user->country }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30">
                                            {!! $user->profile !!}
                                        </p>
                                    </div>
                                </div>
                                <div id="settings" class="col s12">
                                    <div class="card-content">
                                        <form id="addnew" action="{{ route('admin.profile.store') }}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input name="name" id="name" type="text" value="{{ $user->name }}">
                                                    <label for="name">Full Name <span>*</span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input name="designation" id="designation" type="text" value="{{ $user->designation }}">
                                                    <label for="designation">Designation</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input name="email" id="email" type="email" value="{{ $user->email }}" disabled="disabled">
                                                    <label for="email">Email <span>*</span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input name="phone" id="phone" type="text" value="{{ $user->phone }}">
                                                    <label for="phone">Phone No</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <textarea name="address" id="Address" class="materialize-textarea">{{ $user->address }}</textarea>
                                                    <label for="address">Address</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <textarea name="profile" id="profile" class="materialize-textarea">{{ $user->profile }}</textarea>
                                                    <label for="profile">Profile</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select name="country" id="country">
                                                        <option value="" disabled>Choose Country</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="India">India</option>
                                                    </select>
                                                    <label for="country">Select Country</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <button class="btn teal waves-effect waves-light" type="submit" name="action">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div id="password" class="col s12">
                                    <div class="card-content">
                                        <form action="{{ route('admin.profile.changePass') }}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="password" name="oldpass" id="oldpass">
                                                    <label for="oldpass">Old Password</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="password" name="newpass" id="newpass">
                                                    <label for="newpass">New Password</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="password" name="newpass_confirmation" id="confirmpass">
                                                    <label for="confirmpass">Confirm Password</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <button class="btn teal waves-effect waves-light" type="submit" name="action">Change Password</button>
                                                </div>
                                            </div>
                                        </form>
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

@section('page_js')
<script type="text/javascript">
    $(document).ready(function(){
        $("#addnew").validate({
            rules: {
                name:"required",
                email: "required",
            }
        });
    });
</script>
@endsection