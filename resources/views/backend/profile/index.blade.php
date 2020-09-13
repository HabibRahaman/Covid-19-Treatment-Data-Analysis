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
                                <div class="col s12">
                                    <ul class="tabs">
                                        <li class="tab col s3"><a href="#profile">Profile</a></li>
                                        <li class="tab col s3"><a href="#settings">Settings</a></li>
                                        <li class="tab col s3"><a href="#password">Reset Password</a></li>
                                    </ul>
                                </div>
                                <div id="profile" class="col s12 profile-card">
                                    <div class="card-content">
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
                                    </div>
                                </div>
                                <div id="settings" class="col s12">
                                    <div class="card-content">
                                        <form id="addnew" action="{{ route('admin.profile.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <input name="name" id="name" type="text" value="{{ $user->name }}" required>
                                                    <label for="name">Full Name <span>*</span></label>
                                                </div>

                                                <div class="input-field col s6">
                                                    <input name="email" id="email" type="email" value="{{ $user->email }}" disabled="disabled">
                                                    <label for="email">Email <span>*</span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <span>Date of Birth</span> <span>*</span>
                                                    <input name="dob" id="dob" type="date" value="{{ $user->dob }}" required>
                                                </div>

                                                <div class="input-field col s6">
                                                    <span>Gender: </span> <span>*</span>
                                                    <p>
                                                        <label for="male"><input type="radio" class="with-gap" name="gender" id="male" value="1" required @if($user->gender == '1') checked @endif> <span>Male</span></label>
                                                    </p>
                                                    <p>
                                                        <label for="female"><input type="radio" class="with-gap" name="gender" id="female" value="2" required @if($user->gender == '2') checked @endif> <span>Female</span></label>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s4">
                                                    <input name="designation" id="designation" type="text" value="{{ $user->designation }}" required>
                                                    <label for="designation">Designation <span>*</span></label>
                                                </div>

                                                <div class="input-field col s4">
                                                    <input name="department" id="department" type="text" value="{{ $user->department }}">
                                                    <label for="department">Department</label>
                                                </div>

                                                <div class="input-field col s4">
                                                    <input name="organization" id="organization" type="text" value="{{ $user->organization }}" required>
                                                    <label for="organization">Organization <span>*</span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s4">
                                                    <input name="higher_degree" id="higher_degree" type="text" value="{{ $user->higher_degree }}" required>
                                                    <label for="higher_degree">Higher Degree <span>*</span></label>
                                                </div>

                                                <div class="input-field col s4">
                                                    <input name="academy" id="academy" type="text" value="{{ $user->academy }}" required>
                                                    <label for="academy">Academy <span>*</span></label>
                                                </div>

                                                <div class="input-field col s4">
                                                    <input name="specialty" id="specialty" type="text" value="{{ $user->specialty }}">
                                                    <label for="specialty">Specialty</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field file-field col s6">
                                                    <div class="btn blue darken-1">
                                                        <span>Photo</span>
                                                        <input type="file" name="photo" id="photo">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text">
                                                    </div>
                                                </div>

                                                <div class="input-field col s6">
                                                    <input name="phone" id="phone" type="text" value="{{ $user->phone }}">
                                                    <label for="phone">Phone No</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s4">
                                                    <textarea name="address" id="Address" class="materialize-textarea" required>{{ $user->address }}</textarea>
                                                    <label for="address">Address <span>*</span></label>
                                                </div>

                                                <div class="input-field col s4">
                                                    <input name="city" id="city" type="text" value="{{ $user->city }}" required>
                                                    <label for="city">City <span>*</span></label>
                                                </div>

                                                <div class="input-field col s4">
                                                    <select name="country" id="country" required>
                                                        <option value="" disabled>Choose Country</option>
                                                        <option value="Bangladesh" @if($user->country == 'Bangladesh') selected @endif>Bangladesh</option>
                                                        <option value="India" @if($user->country == 'India') selected @endif>India</option>
                                                    </select>
                                                    <label for="country">Select Country <span>*</span></label>
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
                                                    <input type="password" name="oldpass" id="oldpass" required>
                                                    <label for="oldpass">Old Password <span>*</span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="password" name="newpass" id="newpass" required>
                                                    <label for="newpass">New Password <span>*</span></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="password" name="newpass_confirmation" id="confirmpass" required>
                                                    <label for="confirmpass">Confirm Password <span>*</span></label>
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
<!-- Custom js -->
<!-- ============================================================== -->
<script type="text/javascript">
    $(document).ready(function(){
        $("form").parsley();
    });
</script>
@endsection