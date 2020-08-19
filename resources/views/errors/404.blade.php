@extends('web.common.layouts.master')
@section('page_css')
  <style type="text/css">
    .show-on-scroll {
      top: 0px;
    }
    .show-on-scroll .top-navbar {
      background: transparent;
    }
    .show-on-scroll.active .top-navbar {
      background: #fff;
    }
    .show-on-scroll.active {
      top: 0px;
    }

    @media screen and (max-width: 991.98px) { 

    .show-on-scroll .top-navbar {
      background: #fff;
    }
    .navbar-light .navbar-toggler {
      color: #202020;
    }

    }
  </style>
@endsection

@section('content')

<!-- Error Page -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8 col-lg-6 offset-md-2 offset-lg-3">
        <div class="error-page-content">
          <div class="error-page-image">
            <img src="{{ asset('web/img/error.png') }}" alt="Error 404">
          </div>
          <h1 class="error-page-title">Whoops</h1>
          <p class="error-page-subtitle">Looks like the page you're looking for is missing.</p>
          <a href="{{ route('home') }}" class="error-page-btn">go back to home page</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Error Page -->

@endsection

@section('page_js')
<script type="text/javascript">
  // Scroll Nav Hide/Show
  (function ($) {
    $(document).ready(function(){

      // hide .navbar first
      $(".show-on-scroll").removeClass('active');

      // fade in .navbar
      $(function () {
          $(window).scroll(function () {

              // set distance user needs to scroll before we start fadeIn
              if ($(this).scrollTop() > 10) {
                  $('.show-on-scroll').addClass('active');
              } else {
                  $('.show-on-scroll').removeClass('active');
              }

          });
      });

  });
  }(jQuery));
</script>
@endsection