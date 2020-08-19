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
                <form id="addnew" action="{{ route($route.'store') }}" method="post" enctype="multipart/form-data" novalidate>
                @csrf

                <div class="row">
                    <div class="col s8">
                        <a class="waves-effect waves-light btn blue" href="{{ route($route.'index') }}">Back</i></a>

                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title activator">Add {{ $title }}</h5>

                                <div class="row">
                                    <div class="col s12">
                                        <div class="input-field">
                                            <input type="text" name="name" id="name" required>
                                            <label for="name">User Name</label>
                                        </div>
                                    </div>
                                    <div class="col s12">
                                        <div class="input-field">
                                            <input type="email" name="email" id="email" required>
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col s12">
                                        <div class="input-field">
                                            <input type="password" name="password" id="password" required>
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                    <div class="col s12">
                                        <div class="input-field">
                                            <input type="password" name="confirm-password" id="confirm-password" required>
                                            <label for="confirm-password">Confirm Password</label>
                                        </div>
                                    </div>
                                    <div class="col s12">
                                        <div class="input-field">
                                            <select name="roles[]" id="roles" multiple="multiple" required>
                                                @foreach($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                            <label for="roles">Roles</label>
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