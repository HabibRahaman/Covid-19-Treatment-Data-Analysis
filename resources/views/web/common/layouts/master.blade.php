<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Covid-19 Treatment & Data Analysis</title>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta http-equiv="content-language" content="{{ str_replace('_', '-', app()->getLocale()) }}" />
  <meta name="author" content="Covid-19 Treatment & Data Analysis">
  <meta name="keywords" content="">

  <!-- Social meta tags -->
  @yield('meta_tags')

  @include('web.common.includes.styles')
  @yield('page_css')
  
</head>
<body>


<!-- Header Box -->
<section class="section header-section">
  <div class="container-fluid">
   <div class="row">
    <div class="col-sm-12 col-md-2 col-lg-2">
        <!-- Logo Box -->
        <a href="{{ route('home') }}" class="header-logo">
            <img src="{{ asset('web/img/logo.png') }}" alt="Logo">
        </a>
        <!-- Logo Box -->
    </div>
    <div class="col-sm-12 col-md-10 col-lg-10">
        <div class="header-hotlines" style="background-image: url({{ asset('web/img/header_bg.png') }});">

            <!-- Single Hotline -->
            <div class="single-hotline">
                <div class="hotline-title">National Call center</div>
                <div class="hotline-subtitle">জাতীয় কল সেন্টার</div>
                <div class="hotline-number">333</div>
            </div>
            <!-- Single Hotline -->

            <!-- Single Hotline -->
            <div class="single-hotline">
                <div class="hotline-title">Ministry of Health</div>
                <div class="hotline-subtitle">স্বাস্থ্য বাতায়ন</div>
                <div class="hotline-number">16263</div>
            </div>
            <!-- Single Hotline -->

            <!-- Single Hotline -->
            <div class="single-hotline">
                <div class="hotline-title">IEDCR</div>
                <div class="hotline-subtitle">আইডিসিআর</div>
                <div class="hotline-number">10655</div>
            </div>
            <!-- Single Hotline -->

            <!-- Single Hotline -->
            <div class="single-hotline">
                <div class="hotline-title">Specialist Helpline</div>
                <div class="hotline-subtitle">বিশেষজ্ঞ হেলথ লাইন</div>
                <div class="hotline-number">09611677777</div>
            </div>
            <!-- Single Hotline -->

            <!-- Single Hotline -->
            <div class="single-hotline">
                <div class="hotline-title">National Helpline</div>
                <div class="hotline-subtitle">জাতীয় হেল্পলাইন</div>
                <div class="hotline-number">109</div>
            </div>
            <!-- Single Hotline -->
        </div>
    </div>
   </div>
  </div>
</section>
<!-- Header Box -->



<!-- Content Area -->
@yield('content')
<!-- Content Area -->



<!-- Footer Box -->
<section class="section footer-section" style="background-image: url({{ asset('web/img/footer_bg.png') }});">
  <div class="container">
   <div class="row">

    @php
        $tolal_blogs = count($blogs);
        $blog_list = round($tolal_blogs / 2);
    @endphp

    <!-- Single Footer -->
    <div class="col-12 col-md-6 col-lg-4 offset-lg-1">
        <div class="single-footer">
            <ul class="footer-nav">
                @foreach($blogs as $key => $blog)
                @if($key + 1 <= $blog_list)
                <li><a href="{{ route('blog.single', $blog->slug) }}"><span><i class="far fa-hand-point-right"></i></span> {{ $blog->name }}</a></li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
    <!-- Single Footer -->

    <!-- Single Footer -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="single-footer">
            <ul class="footer-nav">
                @foreach($blogs as $key => $blog)
                @if($key + 1 > $blog_list)
                <li><a href="{{ route('blog.single', $blog->slug) }}"><span><i class="far fa-hand-point-right"></i></span> {{ $blog->name }}</a></li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
    <!-- Single Footer -->


    <!-- Single Footer -->
    <div class="col-12 col-md-3 col-lg-3">
        <div class="footer-promo">
            <img src="{{ asset('web/img/thumb.png') }}" alt="Promo">
        </div>
    </div>
    <!-- Single Footer -->

   </div>
  </div>
</section>
<!-- Footer Box -->


  @include('web.common.includes.scripts')
  @yield('page_js')
  
</body>
</html>