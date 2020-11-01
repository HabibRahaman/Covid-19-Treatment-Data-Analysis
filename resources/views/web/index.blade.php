@extends('web.common.layouts.master')
@section('content')

<!-- Service Box -->
<section class="section service-section">
  <div class="container">
   <div class="row">

     <!-- Single Service -->
     <div class="col-12 col-md-6 col-lg-6">
       <a href="{{ route('survey') }}" class="signle-service-box">
         <div class="service-icon-area">
             <img src="{{ asset('web/img/services/online_survey.png') }}" alt="Icon">
         </div>
         <div class="service-text-area">
             <div class="service-title">Attend Survey</div>
             <div class="service-subtitle">জরিপে অংশ নিন</div>
             <p class="service-details">Help others by share your recover information from covid disease.</p>
         </div>
       </a>
     </div>
     <!-- Single Service -->

     <!-- Single Service -->
     <div class="col-12 col-md-6 col-lg-6">
       <a href="{{ route('search') }}" class="signle-service-box">
         <div class="service-icon-area">
             <img src="{{ asset('web/img/services/medicine_search.png') }}" alt="Icon">
         </div>
         <div class="service-text-area">
             <div class="service-title">Search Treatment</div>
             <div class="service-subtitle">চিকিৎসা অনুসন্ধান করুন</div>
             <p class="service-details">Get medicine and care prescription online by share your health conditions.</p>
         </div>
       </a>
     </div>
     <!-- Single Service -->

     <!-- Single Service -->
     <div class="col-12 col-md-6 col-lg-6">
       <a href="{{ route('test') }}" class="signle-service-box">
         <div class="service-icon-area">
             <img src="{{ asset('web/img/services/test_tool.png') }}" alt="Icon">
         </div>
         <div class="service-text-area">
             <div class="service-title">Probability Testing</div>
             <div class="service-subtitle">সম্ভাব্যতা যাচাই</div>
             <p class="service-details">Find Out your covid infection probability by share your current syndromes.</p>
         </div>
       </a>
     </div>
     <!-- Single Service -->

     <!-- Single Service -->
     <div class="col-12 col-md-6 col-lg-6">
       <a href="{{ route('join') }}" class="signle-service-box">
         <div class="service-icon-area">
             <img src="{{ asset('web/img/services/join_doctor.png') }}" alt="Icon">
         </div>
         <div class="service-text-area">
             <div class="service-title">Become a Covid Fighter</div>
             <div class="service-subtitle">কোভিড যোদ্ধা হন</div>
             <p class="service-details">If you are a doctor, Then join with us to provide digital treatments.</p>
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
       <div class="col-12 col-lg-12">
           <div class="section-title-area">
                <div class="section-subtitle">Explore</div>
               <h2 class="section-title">Analytical Statistics</h2>
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
     {{-- <div class="col-12 col-md-6 col-lg-6">
       <div class="signle-graph-box">
         <div class="single-graph-header">
             <div class="graph-title">Basic Pie chart</div>
         </div>
         <div class="single-graph-body">
             <div id="basic-pie" style="height:400px;"></div>
         </div>
       </div>
     </div> --}}
     <!-- Single Graph -->

     <!-- Single Graph -->
     {{-- <div class="col-12 col-md-6 col-lg-6">
       <div class="signle-graph-box">
         <div class="single-graph-header">
             <div class="graph-title">Basic Doughnut Chart</div>
         </div>
         <div class="single-graph-body">
             <div id="basic-doughnut" style="height:400px;"></div>
         </div>
       </div>
     </div> --}}
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
     <div class="col-12 col-md-12 col-lg-12">
       <div class="signle-graph-box">
         <div class="single-graph-header">
             <div class="graph-title">Easy Pie Chart</div>
         </div>
         <div class="single-graph-body">
             <div class="row">
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="chart easy-pie-chart-1" data-percent="75"> <span class="percent">8/100</span> </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="chart easy-pie-chart-2" data-percent="75"> <span class="percent">75</span> </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="easy-pie-chart-3 chart pie-chart" data-percent="25"> <span>25% <br>
                        <small class="text-muted">/Fever</small></span> </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="chart easy-pie-chart-4" data-percent="75"> <span class="percent">8/100</span> </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="chart easy-pie-chart-5" data-percent="75"> <span class="percent">75</span> </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="easy-pie-chart-6 chart pie-chart" data-percent="25"> <span>25% <br>
                      <small class="text-muted">/Cough</small></span> </div>
                </div>
            </div>
         </div>
       </div>
     </div>
     <!-- Single Graph -->

    </div> 
  </div>
</section>
<!-- Graph Box -->

@endsection