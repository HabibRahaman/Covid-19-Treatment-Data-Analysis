@extends('backend.common.layouts.master')
@section('page_css')
<link href="{{ asset('backend/css/pages/dashboard1.css') }}" rel="stylesheet">
@endsection
@section('content')

        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Summery -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title">Orders</h5>
                                <div class="row">
                                    <!-- Column -->
                                    <div class="col l3 m6">
                                        <div class="card danger-gradient">
                                            <div class="card-content">
                                                <div class="center-align">
                                                    <h3 class="white-text m-b-0">44</h3>
                                                    <span class="white-text">Total</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <!-- Column -->
                                    <div class="col l3 m6">
                                        <div class="card info-gradient">
                                            <div class="card-content">
                                                <div class="center-align">
                                                    <h3 class="white-text m-b-0">33</h3>
                                                    <span class="white-text">Pending</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <!-- Column -->
                                    <div class="col l3 m6">
                                        <div class="card success-gradient">
                                            <div class="card-content">
                                                <div class="center-align">
                                                    <h3 class="white-text m-b-0">66</h3>
                                                    <span class="white-text">Progress</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <!-- Column -->
                                    <div class="col l3 m6">
                                        <div class="card warning-gradient">
                                            <div class="card-content">
                                                <div class="center-align">
                                                    <h3 class="white-text m-b-0">11</h3>
                                                    <span class="white-text">Approve</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
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
<!-- ============================================================== -->
<!-- Dashboard js -->
<!-- ============================================================== -->
<script src="{{ asset('backend/libs/chartist/dist/chartist.min.js') }}"></script>
<script src="{{ asset('backend/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('backend/extra-libs/sparkline/sparkline.js') }}"></script>
<script src="{{ asset('backend/js/pages/dashboards/dashboard1.js') }}"></script>

@endsection