@include('backend.common.layouts.header')

    @include('backend.common.layouts.sidebar')

        <!-- Main Content -->
        @yield('content')
        <!-- Main Content -->

@include('backend.common.layouts.footer')