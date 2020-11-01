@extends('web.common.layouts.master')
@section('content')

<!-- Error Page -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8 col-lg-6 offset-md-2 offset-lg-3">
        <!-- Post Header -->
        <div class="post-area">
            <h2 class="post-title">Whoops</h2>
            <div class="post-subtitle">Looks like the page you're looking for is missing.</div>
            <a href="{{ route('home') }}" class="post-btn">Back to Home</a>
        </div>
        <!-- Post Header -->
      </div>
    </div>
  </div>
</section>
<!-- Error Page -->

@endsection