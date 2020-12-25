@extends('web.common.layouts.master')
@section('content')

<!-- Service Box -->
<section class="section service-section">
  <div class="container">
   <div class="row">
      <div class="col-12 col-lg-12 col-md-12">
        <!-- Post Header -->
        <div class="post-area">
            <h2 class="post-title">Thank You!!!</h2>
            <div class="post-content">

                <!-- Message Display -->
                @if(Session::has('success'))
                    <p>{{ Session::get('success') }}</p>
                @endif

                <br>

                <a class="btn link" href="{{ route('home') }}">Back To Home</a>
            </div>
        </div>
        <!-- Post Header -->
      </div>
    </div> 
  </div>
</section>
<!-- Service Box -->

@endsection