@extends('web.common.layouts.master')
@section('content')

<!-- Service Box -->
<section class="section service-section">
  <div class="container">
   <div class="row">

     <!-- Single Service -->
     <div class="col-12 col-md-6 col-lg-6">
       <a href="{{ route('survey.index') }}" class="signle-service-box">
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
       <a href="{{ route('search.index') }}" class="signle-service-box">
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
       <a href="{{ route('testing.search') }}" class="signle-service-box">
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
       <a href="{{ route('join.index') }}" class="signle-service-box">
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
     {{-- <div class="col-12 col-md-6 col-lg-6">
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
     </div> --}}
     <!-- Single Graph -->

     <!-- Single Graph -->
     {{-- <div class="col-12 col-md-6 col-lg-6">
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
     </div> --}}
     <!-- Single Graph -->

     <!-- Single Graph -->
     <div class="col-12 col-md-6 col-lg-6">
       <div class="signle-graph-box">
         <div class="single-graph-header">
             <div class="graph-title">By Gender</div>
         </div>
         <div class="single-graph-body">
            <div class="flot-chart">
                <div class="flot-chart-content" id="gender-chart"></div>
            </div>
         </div>
       </div>
     </div>
     <!-- Single Graph -->

     <!-- Single Graph -->
     <div class="col-12 col-md-6 col-lg-6">
       <div class="signle-graph-box">
         <div class="single-graph-header">
             <div class="graph-title">By Age</div>
         </div>
         <div class="single-graph-body">
            <div class="flot-chart">
                <div class="flot-chart-content" id="age-chart"></div>
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
             <div class="graph-title">Top Medicines by Symptoms</div>
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
             <div class="graph-title">Bar Basic Chart</div>
         </div>
         <div class="single-graph-body">
             <div id="bar-basic" style="height:400px;"></div>
         </div>
       </div>
     </div>
     <!-- Single Graph -->

     <!-- Single Graph -->
     <div class="col-12 col-md-12 col-lg-12">
       <div class="signle-graph-box">
         <div class="single-graph-header">
             <div class="graph-title">Top Symptoms</div>
         </div>
         <div class="single-graph-body">
             <div class="row">
                @foreach($symptoms as $key => $symptom)
                    @php
                        $symptom_percent = round(100 / $total_patients) * $symptom->patients->count();
                    @endphp
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="easy-pie-chart-{{ $key + 1 }} chart pie-chart" data-percent="{{ $symptom_percent }}"> <span>{{ $symptom_percent }}% <br>
                        <small class="text-muted">{{ $symptom->name }}</small></span> </div>
                </div>
                @endforeach
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

@include('web.common.includes.chart')