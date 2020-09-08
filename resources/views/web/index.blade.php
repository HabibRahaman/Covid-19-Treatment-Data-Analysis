@extends('web.common.layouts.master')
@section('content')

<!-- Service Box -->
<section class="section service-section">
  <div class="container">
   <div class="row">
     <div class="col-12 col-md-6">
       <a href="#" class="signle-service-box">
         <div class="service-icon-area">
             <img src="{{ asset('web/img/services/survey.png') }}" alt="Icon">
         </div>
         <div class="service-text-area">
             <div class="service-title">Attended Survey</div>
             <div class="service-subtitle">জরিপে অংশ নিয়েছে</div>
             <p class="service-details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
         </div>
       </a>
     </div>
    </div> 
  </div>
</section>
<!-- Service Box -->

@endsection