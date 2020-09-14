@extends('web.common.layouts.master')
@section('content')

<!-- Header Box -->
<section class="section header-section">
  <div class="container-fluid">
   <div class="row">
    <div class="col-md-2">
        <!-- Logo Box -->
        <a href="#" class="header-logo">
            <img src="{{ asset('web/img/logo.png') }}" alt="Logo">
        </a>
        <!-- Logo Box -->
    </div>
    <div class="col-md-10">
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



<!-- Service Box -->
<section class="section service-section">
  <div class="container">
   <div class="row">

     <!-- Single Service -->
     <div class="col-12 col-md-6">
       <a href="#" class="signle-service-box">
         <div class="service-icon-area">
             <img src="{{ asset('web/img/services/online_survey.png') }}" alt="Icon">
         </div>
         <div class="service-text-area">
             <div class="service-title">Attend Survey</div>
             <div class="service-subtitle">জরিপে অংশ নিন</div>
             <p class="service-details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
         </div>
       </a>
     </div>
     <!-- Single Service -->

     <!-- Single Service -->
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
     <!-- Single Service -->

     <!-- Single Service -->
     <div class="col-12 col-md-6">
       <a href="#" class="signle-service-box">
         <div class="service-icon-area">
             <img src="{{ asset('web/img/services/test_tool.png') }}" alt="Icon">
         </div>
         <div class="service-text-area">
             <div class="service-title">Probability Testing</div>
             <div class="service-subtitle">সম্ভাব্যতা যাচাই</div>
             <p class="service-details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
         </div>
       </a>
     </div>
     <!-- Single Service -->

     <!-- Single Service -->
     <div class="col-12 col-md-6">
       <a href="#" class="signle-service-box">
         <div class="service-icon-area">
             <img src="{{ asset('web/img/services/join_doctor.png') }}" alt="Icon">
         </div>
         <div class="service-text-area">
             <div class="service-title">Become a Covid Fighter</div>
             <div class="service-subtitle">কোভিড যোদ্ধা হন</div>
             <p class="service-details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
         </div>
       </a>
     </div>
     <!-- Single Service -->

    </div> 
  </div>
</section>
<!-- Service Box -->



<!-- Graph Box -->
<section class="section">
  <div class="container">
   <div class="row">
       <div class="col-12">
           <div class="section-title-area">
                <div class="section-subtitle">Work</div>
               <h2 class="section-title">How it's work</h2>
           </div>
       </div>
   </div>
   <div class="row">

     <!-- Single Graph -->
     <div class="col-12 col-md-6 col-lg-6">
       <div class="signle-graph-box">
         <div class="single-graph-header">
             <div class="graph-title">Real Chart</div>
         </div>
         <div class="single-graph-body">
            <div class="demo-container" style="height:400px; width: 100%;">
                <div id="placeholder" class="flot-chart-content"></div>
            </div>
         </div>
       </div>
     </div>
     <!-- Single Graph -->

     <!-- Single Graph -->
     <div class="col-12 col-md-6 col-lg-6">
       <div class="signle-graph-box">
         <div class="single-graph-header">
             <div class="graph-title">Moving Line Chart</div>
         </div>
         <div class="single-graph-body">
            <div class="flot-chart">
                <div class="flot-chart-content" id="flot-line-chart-moving"></div>
            </div>
         </div>
       </div>
     </div>
     <!-- Single Graph -->

     <!-- Single Graph -->
     <div class="col-12 col-md-6 col-lg-6">
       <div class="signle-graph-box">
         <div class="single-graph-header">
             <div class="graph-title">Pie Chart</div>
         </div>
         <div class="single-graph-body">
            <div class="flot-chart">
                <div class="flot-chart-content" id="flot-pie-chart"></div>
            </div>
         </div>
       </div>
     </div>
     <!-- Single Graph -->

     <!-- Single Graph -->
     <div class="col-12 col-md-6 col-lg-6">
       <div class="signle-graph-box">
         <div class="single-graph-header">
             <div class="graph-title">Sales Bar Chart</div>
         </div>
         <div class="single-graph-body">
            <div class="flot-chart">
                <div class="sales-bars-chart" style="height: 400px;"> </div>
            </div>
         </div>
       </div>
     </div>
     <!-- Single Graph -->

     <!-- Single Graph -->
     <div class="col-12 col-md-12 col-lg-12">
       <div class="signle-graph-box">
         <div class="single-graph-header">
             <div class="graph-title">Basic Bar Chart</div>
         </div>
         <div class="single-graph-body">
             <div id="basic-bar" style="height:400px;"></div>
         </div>
       </div>
     </div>
     <!-- Single Graph -->

     <!-- Single Graph -->
     <div class="col-12 col-md-12 col-lg-12">
       <div class="signle-graph-box">
         <div class="single-graph-header">
             <div class="graph-title">Stacked Bar Chart</div>
         </div>
         <div class="single-graph-body">
             <div id="stacked-bar" style="height:400px;"></div>
         </div>
       </div>
     </div>
     <!-- Single Graph -->

     <!-- Single Graph -->
     <div class="col-12 col-md-12 col-lg-12">
       <div class="signle-graph-box">
         <div class="single-graph-header">
             <div class="graph-title">Stacked column Chart</div>
         </div>
         <div class="single-graph-body">
             <div id="stacked-column" style="height:400px;"></div>
         </div>
       </div>
     </div>
     <!-- Single Graph -->

     <!-- Single Graph -->
     <div class="col-12 col-md-12 col-lg-12">
       <div class="signle-graph-box">
         <div class="single-graph-header">
             <div class="graph-title">Bar Basic Chart</div>
         </div>
         <div class="single-graph-body">
             <div id="bar-basic" style="height:400px;"></div>
         </div>
       </div>
     </div>
     <!-- Single Graph -->

     <!-- Single Graph -->
     <div class="col-12 col-md-6 col-lg-6">
       <div class="signle-graph-box">
         <div class="single-graph-header">
             <div class="graph-title">Basic Pie chart</div>
         </div>
         <div class="single-graph-body">
             <div id="basic-pie" style="height:400px;"></div>
         </div>
       </div>
     </div>
     <!-- Single Graph -->

     <!-- Single Graph -->
     <div class="col-12 col-md-6 col-lg-6">
       <div class="signle-graph-box">
         <div class="single-graph-header">
             <div class="graph-title">Basic Doughnut Chart</div>
         </div>
         <div class="single-graph-body">
             <div id="basic-doughnut" style="height:400px;"></div>
         </div>
       </div>
     </div>
     <!-- Single Graph -->

     <!-- Single Graph -->
     {{-- <div class="col-12 col-md-6 col-lg-6">
       <div class="signle-graph-box">
         <div class="single-graph-header">
             <div class="graph-title">Nested Pie Chart</div>
         </div>
         <div class="single-graph-body">
             <div id="nested-pie" style="height:400px;"></div>
         </div>
       </div>
     </div> --}}
     <!-- Single Graph -->

     <!-- Single Graph -->
     {{-- <div class="col-12 col-md-6 col-lg-6">
       <div class="signle-graph-box">
         <div class="single-graph-header">
             <div class="graph-title">Pole Chart</div>
         </div>
         <div class="single-graph-body">
             <div id="pole-chart" style="height:400px;"></div>
         </div>
       </div>
     </div> --}}
     <!-- Single Graph -->

      <!-- Single Graph -->
     <div class="col-12 col-md-6 col-lg-6">
       <div class="signle-graph-box">
         <div class="single-graph-header">
             <div class="graph-title">Title Here</div>
         </div>
         <div class="single-graph-body">
             
         </div>
       </div>
     </div>
     <!-- Single Graph -->

    </div> 
  </div>
</section>
<!-- Graph Box -->



<!-- Footer Box -->
<section class="section footer-section" style="background-image: url({{ asset('web/img/footer_bg.png') }});">
  <div class="container">
   <div class="row">

    <!-- Single Footer -->
    <div class="col-md-4 offset-md-1 col-lg-4 offset-lg-1">
        <div class="single-footer">
            <ul class="footer-nav">
                <li><a href="#"><span><i class="far fa-hand-point-right"></i></span> Home Treatments</a></li>
                <li><a href="#"><span><i class="far fa-hand-point-right"></i></span> Home Treatments</a></li>
                <li><a href="#"><span><i class="far fa-hand-point-right"></i></span> Home Treatments</a></li>
                <li><a href="#"><span><i class="far fa-hand-point-right"></i></span> Home Treatments</a></li>
                <li><a href="#"><span><i class="far fa-hand-point-right"></i></span> Home Treatments</a></li>
                <li><a href="#"><span><i class="far fa-hand-point-right"></i></span> Home Treatments</a></li>
            </ul>
        </div>
    </div>
    <!-- Single Footer -->

    <!-- Single Footer -->
    <div class="col-md-4 col-lg-4">
        <div class="single-footer">
            <ul class="footer-nav">
                <li><a href="#"><span><i class="far fa-hand-point-right"></i></span> Home Treatments</a></li>
                <li><a href="#"><span><i class="far fa-hand-point-right"></i></span> Home Treatments</a></li>
                <li><a href="#"><span><i class="far fa-hand-point-right"></i></span> Home Treatments</a></li>
                <li><a href="#"><span><i class="far fa-hand-point-right"></i></span> Home Treatments</a></li>
                <li><a href="#"><span><i class="far fa-hand-point-right"></i></span> Home Treatments</a></li>
                <li><a href="#"><span><i class="far fa-hand-point-right"></i></span> Home Treatments</a></li>
            </ul>
        </div>
    </div>
    <!-- Single Footer -->


    <!-- Single Footer -->
    <div class="col-md-3 col-lg-3">
        <div class="footer-promo">
            <img src="{{ asset('web/img/doctor.png') }}" alt="Promo">
        </div>
    </div>
    <!-- Single Footer -->

   </div>
  </div>
</section>
<!-- Footer Box -->

@endsection