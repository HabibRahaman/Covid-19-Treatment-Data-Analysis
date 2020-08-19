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
                                                    <span class="white-text">Total Orders</span>
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
                                                    <span class="white-text">Pending Orders</span>
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
                                                    <span class="white-text">Progress Orders</span>
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
                                                    <span class="white-text">Approve Orders</span>
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
                <!-- ============================================================== -->
                <!-- Sales Summery -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col s12 l8">
                        <div class="card">
                            <div class="card-content">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="card-title">Yearly Sales</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <ul class="list-inline font-12 dl m-r-10">
                                            <li class="cyan-text"><i class="fa fa-circle"></i> Earnings</li>
                                            <li class="blue-text text-accent-4"><i class="fa fa-circle"></i> Sales</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sales Summery -->
                                <div class="p-t-20">
                                    <div class="row">
                                        <div class="col s12">
                                            <div id="sales" style="height: 332px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l4">
                        <div class="card card-hover">
                            <div class="card-content">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-20">
                                        <h1 class=""><i class="ti-light-bulb"></i></h1></div>
                                    <div>
                                        <h3 class="card-title">Sales Analytics</h3>
                                        <h6 class="card-subtitle">March  2017</h6> </div>
                                </div>
                                <div class="row d-flex align-items-center">
                                    <div class="col s6">
                                        <h3 class="font-light m-t-10"><sup><small><i class="ti-arrow-up"></i></small></sup>35487</h3>
                                    </div>
                                    <div class="col s6 right-align">
                                        <div class="p-t-10 p-b-10">
                                            <div class="spark-count" style="height:65px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-hover">
                            <div class="card-content">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-20">
                                        <h1 class=""><i class="ti-pie-chart"></i></h1></div>
                                    <div>
                                        <h3 class="card-title">Bandwidth usage</h3>
                                        <h6 class="card-subtitle">March  2017</h6> 
                                    </div>
                                </div>
                                <div class="row d-flex align-items-center">
                                    <div class="col s6">
                                        <h3 class="font-light m-t-10">50 GB</h3>
                                    </div>
                                    <div class="col s6 p-t-10 p-b-20 right-align">
                                        <div class="p-t-10 p-b-10 m-r-20">
                                            <div class="spark-count2" style="height:65px"></div>
                                        </div>
                                    </div>
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