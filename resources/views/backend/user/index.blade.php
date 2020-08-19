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
                    <div class="col s12">
                        <div class="card">
                            <div class="card-header">

                                <!-- ================================ -->
                                <!-- Add Item Modal -->
                                <!-- ================================ -->
                                <a class="waves-effect waves-light btn" href="{{ route($route.'create') }}">Add New</a>
                            </div>

                            <!-- ================================ -->
                            <!-- Item List Table -->
                            <!-- ================================ -->
                            <div class="card-content">
                                <table id="row_create_call" class="table table-striped table-bordered display" style="width:100%">
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
                                </table>

                                <div class="pagination">
                                    {{ $users->links() }}
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