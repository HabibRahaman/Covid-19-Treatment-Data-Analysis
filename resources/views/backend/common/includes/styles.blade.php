	
    <link href="{{ asset('backend/css/dropzone.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/custom.css') }}" rel="stylesheet">
    <!-- This page CSS -->

    <link href="{{ asset('backend/extra-libs/prism/prism.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/toastr.min.css') }}" rel="stylesheet">

    <!-- ============================================================== -->
    <!-- Toastr Notification -->
    <!-- ============================================================== -->
    
    <style type="text/css">
        #toast-container{
            right: 0;
            top: 0;
        }
    </style>
    <!-- Page CSS -->
    @yield('page_css')
    <!-- Page CSS -->

    <!-- Common JS -->
    <script src="{{ asset('backend/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/js/dropzone.min.js') }}"></script>