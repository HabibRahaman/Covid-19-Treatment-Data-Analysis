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
                                    <div class="col s12">
                                        <div class="input-field">
                                            <input type="text" name="name" value="{{ $user->name }}" id="name" required>
                                            <label for="name">User Name <span>*</span></label>
                                        </div>
                                    </div>
                                    <div class="col s12">
                                        <div class="input-field">
                                            <input type="email" name="email" value="{{ $user->email }}" id="email" disabled>
                                            <label for="email">Email</label>
                                        </div>
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