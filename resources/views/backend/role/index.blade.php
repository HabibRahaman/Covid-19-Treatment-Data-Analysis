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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($roles as $role)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>

                                                <a class="waves-effect waves-light btn btn-small green edit-btn" href="{{ route($route.'edit', [$role->id]) }}"><i class="fas fa-edit"></i></a>

                                                <a class="waves-effect waves-light btn btn-small blue" href="{{ route($route.'show', [$role->id]) }}"><i class="fas fa-eye"></i></a>

                                                <a class="waves-effect waves-light btn btn-small red" data-toggle="tooltip" data-placement="top" title="Delete"
                                                    onclick="alertFunction('delete',{{$role->id}});">
                                                   <i class="fas fa-trash-alt"></i>
                                                </a>
                                                <form id="delete{{$role->id}}" action="{{ route($route.'destroy', [$role->id]) }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                    @method('DELETE')
                                                </form>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="pagination">
                                    {{ $roles->links() }}
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