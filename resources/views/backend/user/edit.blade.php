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
                <form id="addnew" action="{{ route($route.'update', [$user->id]) }}" method="post" enctype="multipart/form-data" novalidate>
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col s8">
                        <a class="waves-effect waves-light btn blue" href="{{ route($route.'index') }}">Back</i></a>

                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title activator">Edit {{ $title }}</h5>

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
                                    <div class="col s12">
                                        <div class="input-field">
                                            <select name="roles[]" id="roles" multiple="multiple" required>
                                                @foreach($roles as $role)
                                                <option value="{{ $role->id }}"
                                                    @foreach($userRoles as $userRole)
                                                        @if($userRole->id == $role->id) selected @endif
                                                    @endforeach
                                                    >{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                            <label for="roles">Roles <span>*</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <button type="submit" class="waves-effect waves-light btn cyan">Save</button>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                </form>
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