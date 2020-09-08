@extends('web.common.layouts.master')
@section('content')

<!-- Service Box -->
<section class="section service-section">
  <div class="container">
   <div class="row">

     <div class="col-12 col-md-6">
       <a href="#" class="signle-service-box">
         <div class="service-icon-area">
             <img src="{{ asset('web/img/services/online_survey.png') }}" alt="Icon">
         </div>
         <div class="service-text-area">
             <div class="service-title">Attended Survey</div>
             <div class="service-subtitle">জরিপে অংশ নিয়েছে</div>
             <p class="service-details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
         </div>
       </a>
     </div>

     <div class="col-12 col-md-6">
       <a href="#" class="signle-service-box">
         <div class="service-icon-area">
             <img src="{{ asset('web/img/services/medicine_search.png') }}" alt="Icon">
         </div>
         <div class="service-text-area">
             <div class="service-title">Search Treatment</div>
             <div class="service-subtitle">চিকিৎসা অনুসন্ধান করুন</div>
             <p class="service-details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
         </div>
       </a>
     </div>

     <div class="col-12 col-md-6">
       <a href="#" class="signle-service-box">
         <div class="service-icon-area">
             <img src="{{ asset('web/img/services/test_tool.png') }}" alt="Icon">
         </div>
         <div class="service-text-area">
             <div class="service-title">Online Testing</div>
             <div class="service-subtitle">অনলাইন পরিক্ষা</div>
             <p class="service-details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
         </div>
       </a>
     </div>

     <div class="col-12 col-md-6">
       <a href="#" class="signle-service-box">
         <div class="service-icon-area">
             <img src="{{ asset('web/img/services/join_doctor.png') }}" alt="Icon">
         </div>
         <div class="service-text-area">
             <div class="service-title">Telemedicine</div>
             <div class="service-subtitle">টেলিমেডিসিন</div>
             <p class="service-details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
         </div>
       </a>
     </div>
    </div> 
  </div>
</section>
<!-- Service Box -->

@endsection