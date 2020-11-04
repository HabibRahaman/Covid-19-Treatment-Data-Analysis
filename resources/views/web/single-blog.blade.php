@extends('web.common.layouts.master')
@section('content')

<!-- Service Box -->
<section class="section service-section">
  <div class="container">
   <div class="row">
      <div class="col-12 col-lg-12 col-md-12">
        <!-- Post Header -->
        <div class="post-area">
            <h2 class="post-title">{{ $blog->name }}</h2>
            <div class="post-content">
                @if(is_file('uploads/blog/'.$blog->thumb))
                <img src="{{ asset('uploads/blog/'.$blog->thumb) }}" class="post-thumb" alt="Thumb">
                @endif

                {!! $blog->details !!}
            </div>
        </div>
        <!-- Post Header -->
      </div>
    </div> 
  </div>
</section>
<!-- Service Box -->

@endsection