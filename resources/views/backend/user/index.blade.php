@extends('backend.common.layouts.master')
@section('page_css')
<link href="{{ asset('backend/css/pages/user-card.css') }}" rel="stylesheet">
<link href="{{ asset('backend/libs/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet">
@endsection
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
                <div class="row el-element-overlay">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-header">
                                <form action="{{ route($route.'index') }}" method="get" class="row">
                                    <div class="input-field col s1">
                                        <!-- ================================ -->
                                        <!-- Add Item Modal -->
                                        <!-- ================================ -->
                                        <a class="waves-effect waves-light btn" href="{{ route($route.'create') }}">Add New</a>
                                    </div>
                                    <div class="input-field col s3">
                                        <input type="text" name="name" placeholder="Name" class="validate" value="{{ !empty($name) ? $name : "" }}">
                                    </div>
                                    <div class="input-field col s3">
                                        <input type="text" name="email" placeholder="Email" class="validate" value="{{ !empty($email) ? $email : "" }}">
                                    </div>
                                    <div class="input-field col s3">
                                        <input type="text" name="area" placeholder="Area" class="validate" value="{{ !empty($area) ? $area : "" }}">
                                    </div>
                                    <div class="input-field col s2">
                                        <button class="btn cyan waves-effect waves-light" type="submit" name="action">Search
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <!-- ================================ -->
                            <!-- Item List Table -->
                            <!-- ================================ -->
                                {{-- <table id="row_create_call" class="table table-striped table-bordered display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Roles</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                            @if(!empty($user->getRoleNames()))
                                              @foreach($user->getRoleNames() as $v)
                                                <div class="chip">
                                                    {{ $v }}
                                                </div>
                                              @endforeach
                                            @endif
                                            </td>
                                            <td>

                                                <a class="waves-effect waves-light btn btn-small green edit-btn" href="{{ route($route.'edit', [$user->id]) }}"><i class="fas fa-edit"></i></a>

                                                <a class="waves-effect waves-light btn btn-small blue" href="{{ route($route.'show', [$user->id]) }}"><i class="fas fa-eye"></i></a>

                                                <a class="waves-effect waves-light btn btn-small red" data-toggle="tooltip" data-placement="top" title="Delete"
                                                    onclick="alertFunction('delete',{{$user->id}});">
                                                   <i class="fas fa-trash-alt"></i>
                                                </a>
                                                <form id="delete{{$user->id}}" action="{{ route($route.'destroy', [$user->id]) }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                    @method('DELETE')
                                                </form>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table> --}}



                            @foreach($users as $user)
                                <div class="col m6 l3">
                                    <div class="card">
                                        <div class="card-image">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> 

                                                    <img src="{{ asset('uploads'.'/'.$file_path.'/'.$user->photo) }}" style="height: 300px; width: 100%;" alt="Thumbnail"/>

                                                    <div class="el-overlay">
                                                        <ul class="el-info">
                                                            <li><a class="btn-floating" href="{{ route($route.'show', [$user->id]) }}"><i class="material-icons">link</i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="el-card-content">
                                                    <h5 class="m-b-0">{{ $user->name }}</h5>
                                                    <small>{{ $user->designation }}, {{ $user->organization }}</small>
                                                </div>
                                                <div class="m-t-15 no-block d-flex align-items-center">
                                                    @if(!empty($user->getRoleNames()))
                                                        @foreach($user->getRoleNames() as $v)
                                                            <div class="chip">
                                                                {{ $v }}
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <hr>
                                                <div class="no-block d-flex align-items-center">
                                                    <a class="waves-effect waves-light btn btn-small green" href="{{ route($route.'edit', [$user->id]) }}"><i class="fas fa-edit"></i></a>

                                                    <a class="waves-effect waves-light btn btn-small blue" href="{{ route($route.'show', [$user->id]) }}"><i class="fas fa-eye"></i></a>

                                                    <a class="waves-effect waves-light btn btn-small red" data-toggle="tooltip" data-placement="top" title="Delete"
                                                        onclick="alertFunction('delete',{{$user->id}});">
                                                       <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                    <form id="delete{{$user->id}}" action="{{ route($route.'destroy', [$user->id]) }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                        @method('DELETE')
                                                    </form>
                                                </div>


                                                <!-- ================================ -->
                                                <!-- Edit Item Modal -->
                                                <!-- ================================ -->
                                                <!-- Modal Structure -->
                                                <div id="edititem-{{ $user->id }}" class="modal">
                                                    <div class="modal-content">
                                                    <div class="card">
                                                        <div class="card-content">
                                                            <h5 class="card-title activator">Edit {{ $title }}</h5>
                                                            <form  action="{{ route($route.'update', [$user->id]) }}" method="post" novalidate>
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="country">
                                                                    
                                                                </div>
                                                                
                                                                <div class="row">
                                                                    <div class="col s12">
                                                                        <a href="#!" class="modal-action modal-close waves-effect waves-light btn grey darken-4">Cancel</a>
                                                                        <button type="submit" class="waves-effect waves-light btn cyan submit-btn">Update</button>
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
                                </div>
                                @endforeach


                            <div class="pagination">
                                {{ $users->links() }}
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
<script src="{{ asset('backend/libs/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('backend/libs/magnific-popup/meg.init.js') }}"></script>
</script>
@endsection