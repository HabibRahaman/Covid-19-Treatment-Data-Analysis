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
                    <div class="col s8">
                        <a class="waves-effect waves-light btn blue" href="{{ route($route.'index') }}">Back</i></a>

                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title">{{ $title }} Name : {{ $user->name }}</h5>
                            </div>
                            <div class="card-content">
                                <ul class="m-t-40">
                                    <hr>
                                    <li class="d-flex align-items-center">
                                        <strong>Email :</strong>
                                        {{ $user->email }}
                                    </li>
                                    <hr>
                                    <li class="d-flex align-items-center">
                                        Roles : 
                                        
                                        @if(!empty($user->getRoleNames()))
                                            @foreach($user->getRoleNames() as $v)
                                                <div class="chip">
                                                    {{ $v }}
                                                </div>
                                            @endforeach
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->

@endsection