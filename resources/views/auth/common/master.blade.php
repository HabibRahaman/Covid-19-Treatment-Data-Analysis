<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- favicon -->
    <link rel="icon" href="{{ asset('web/img/favicon.jpg') }}" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('web/img/favicon.jpg') }}">

    <title>Bangladesh Tourism Guide</title>
    
    @include('backend.common.includes.styles')

    <!-- This page CSS -->
    <link href="{{ asset('backend/css/pages/authentication.css') }}" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Bangladesh Tourism Guide Admin</p>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        
        <!-- Main Content -->
        @yield('content')
        <!-- Main Content -->

        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    @include('backend.common.includes.scripts')
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script type="text/javascript">
        $('.tooltipped').tooltip();
        
        $(function() {
            $(".preloader").fadeOut();
        });
    </script>
</body>

</html>