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
                <form id="addnew" action="{{ route($route.'update', [$role->id]) }}" method="post" enctype="multipart/form-data" novalidate>
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
                                            <input type="text" name="name" id="name" value="{{ $role->name }}" required>
                                            <label for="name">Role Name <span>*</span></label>
                                        </div>
                                    </div>
                                </div>

                                <span>Permission</span><br/>
                                @foreach($permission as $value)
                                <div class="row m-t-15">
                                    <div class="col s12">
                                        <div class="input-field">
                                          <label>
                                            <input type="checkbox" name="permission[]" value="{{ $value->id }}"

                                                @foreach($rolePermissions as $rolePermission)
                                                    @if($rolePermission->permission_id == $value->id) checked @endif
                                                @endforeach  
                                            >
                                            <span>{{ $value->name }}</span>
                                          </label>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <br>
                                <div class="row m-t-40">
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