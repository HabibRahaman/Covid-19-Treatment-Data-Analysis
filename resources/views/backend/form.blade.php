@extends('backend.common.layouts.master')
@section('content')

        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Form</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Form</a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title activator">Advanced Form Inputs</h5>
                                <form>
                                    <div class="row">
                                        <div class="input-field col s12 m6 l6">
                                            <input id="first_name" type="text">
                                            <label for="first_name">First Name</label>
                                        </div>
                                        <div class="input-field col s12 m6 l6">
                                            <input id="last_name" type="text">
                                            <label for="last_name">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12 m6 l6">
                                            <input id="email5" type="email">
                                            <label for="email5">Email</label>
                                        </div>
                                        <div class="input-field col s12 m6 l6">
                                            <input id="password5" type="password">
                                            <label for="password5">Password</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12 m6 l6">
                                            <select>
                                                <option value="" disabled selected>Choose your profile</option>
                                                <option value="1">Manager</option>
                                                <option value="2">Developer</option>
                                                <option value="3">Business</option>
                                            </select>
                                            <label>Select Profile</label>
                                        </div>
                                        <div class="input-field col s12 m6 l6">
                                            <input type="text" id="dob" class="datepicker">
                                            <label for="dob">DOB</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m6 l6">
                                            <div class="file-field input-field">
                                                <div class="btn cyan">
                                                    <span>File</span>
                                                    <input type="file">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s12 m6 l6">
                                            <div class="file-field input-field">
                                                <div class="btn cyan">
                                                    <span>File</span>
                                                    <input type="file" multiple>
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text" placeholder="Upload one or more files">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="message5" class="materialize-textarea" length="120"></textarea>
                                            <label for="message5">Message</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 l6">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title activator">Issue Tracking</h5>
                                <form>
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="f-name1" type="text">
                                                <label for="f-name1">Issue Title</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="opb" type="text">
                                                <label for="opb">Open By</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m6 l6">
                                            <div class="input-field">
                                                <input type="text" id="do" class="datepicker">
                                                <label for="do">Date Opened</label>
                                            </div>
                                        </div>
                                        <div class="col s12 m6 l6">
                                            <div class="input-field">
                                                <input type="text" id="df" class="datepicker">
                                                <label for="df">Date Fixed</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="input-field">
                                                <select>
                                                    <option value="" disabled selected>Choose your option</option>
                                                    <option value="1">Low</option>
                                                    <option value="2">Medium</option>
                                                    <option value="3">High</option>
                                                </select>
                                                <label>Priority</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <select>
                                                    <option value="" disabled selected>Choose your option</option>
                                                    <option value="1">Started</option>
                                                    <option value="2">Not Started</option>
                                                    <option value="3">Fixed</option>
                                                </select>
                                                <label>Status</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <textarea id="com" class="materialize-textarea"></textarea>
                                                <label for="com">Comments</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <a class="waves-effect waves-light btn cyan">Save</a>
                                            <a class="waves-effect waves-light btn grey darken-4">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l6">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title activator">Employee Timing</h5>
                                <form>
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="input-field">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="icon_prefix1" type="text" class="validate">
                                                <label for="icon_prefix1">Employee Name</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <i class="material-icons prefix">aspect_ratio</i>
                                                <input id="icon_prefix3" type="text" class="validate">
                                                <label for="icon_prefix3">Project Name</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <i class="material-icons prefix">assignment_turned_in</i>
                                                <input id="icon_prefix4" type="text" class="validate datepicker">
                                                <label for="icon_prefix4">Date</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <i class="material-icons prefix">attach_money</i>
                                                <input id="icon_prefix5" type="text" class="validate">
                                                <label for="icon_prefix5">Rate Per Hour</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m6 l6">
                                            <div class="input-field">
                                                <i class="material-icons prefix">cached</i>
                                                <input id="icon_prefix6" type="text" class="validate timepicker">
                                                <label for="icon_prefix6">Start Time</label>
                                            </div>
                                        </div>
                                        <div class="col s12 m6 l6">
                                            <div class="input-field">
                                                <i class="material-icons prefix">autorenew</i>
                                                <input id="icon_prefix7" type="text" class="validate timepicker">
                                                <label for="icon_prefix7">End Time</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <i class="material-icons prefix">class</i>
                                                <input id="icon_prefix8" type="text" class="validate">
                                                <label for="icon_prefix8">Notes</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="right">
                                                <a class="waves-effect waves-light btn cyan">Save</a>
                                                <a class="waves-effect waves-light btn grey darken-4">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title activator">Event Registration</h5>
                                <form>
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="text">
                                                <label for="full-n">Full Name</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="title" type="text">
                                                <label for="title">Title</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="com1" type="text">
                                                <label for="com1">Company</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="em1" type="text">
                                                <label for="em1">Email</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="con2" type="text">
                                                <label for="con2">Contact Number</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <label>Existing Customer</label>
                                            <p>
                                                <label>
                                                    <input name="group1" type="radio" checked />
                                                    <span>Yes</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input name="group1" type="radio" />
                                                    <span>No</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="right">
                                                <a class="waves-effect waves-light btn cyan">Save</a>
                                                <a class="waves-effect waves-light btn grey darken-4">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l6">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title activator">Login Form</h5>
                                <form>
                                    <!-- email -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="email_2" type="email" class="validate" required>
                                            <label for="email_2">Email</label>
                                        </div>
                                    </div>
                                    <!-- pwd -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="password_2" type="password" class="validate" required>
                                            <label for="password_2">Password</label>
                                        </div>
                                    </div>
                                    <!-- pwd -->
                                    <div class="row m-t-5">
                                        <div class="col s7">
                                            <label>
                                                <input type="checkbox" />
                                                <span>Remember Me?</span>
                                            </label>
                                        </div>
                                        <div class="col s5 right-align"><a href="#" class="link" id="to-recover">Forgot Pwd?</a></div>
                                    </div>
                                    <!-- pwd -->
                                    <div class="row m-t-40">
                                        <div class="col s12">
                                            <button class="btn cyan waves-effect waves-light" type="submit" name="action">Login
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l6">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title activator">Register Form</h5>
                                <form>
                                    <!-- email -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="name_3" type="text" class="validate" required>
                                            <label for="name_3">Name</label>
                                        </div>
                                    </div>
                                    <!-- email -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="email_3" type="email" class="validate" required>
                                            <label for="email_3">Email</label>
                                        </div>
                                    </div>
                                    <!-- pwd -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="password_3" type="password" class="validate" required>
                                            <label for="password_3">Password</label>
                                        </div>
                                    </div>
                                    <!-- pwd -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="cpassword_3" type="password" class="validate" required>
                                            <label for="cpassword_3">Confirm Password</label>
                                        </div>
                                    </div>
                                    <!-- pwd -->
                                    <div class="row m-t-5">
                                        <div class="col s7">
                                            <label>
                                                <input type="checkbox" />
                                                <span>Agree to all Terms</span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- pwd -->
                                    <div class="row m-t-40">
                                        <div class="col s12">
                                            <button class="btn cyan waves-effect waves-light" type="submit" name="action">Register
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->

@endsection