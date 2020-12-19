@extends('web.common.layouts.master')
@section('content')

<!-- Service Box -->
<section class="section service-section">
  <div class="container">
   <div class="row">
      <div class="col-12 col-lg-12 col-md-12">
        <!-- Post Header -->
        <div class="post-area">
            <h2 class="post-title">Probability Testing</h2>
        </div>
        <!-- Post Header -->
      </div>
    </div> 
  </div>


  <!-- Form Wizard -->
  <div class="container">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn 
                @if(isset($report))
                inactive 
                @else
                active 
                @endif
                btn-circle" @if(isset($report)) disabled="disabled" @endif>1</a>
                <p class="wizard-btn-title">Patient Information</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn inactive btn-circle">2</a>
                <p class="wizard-btn-title">Common Symptoms</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn inactive btn-circle" disabled="disabled">3</a>
                <p class="wizard-btn-title">Emergency Symptoms</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn 
                @if(isset($report))
                active 
                @else
                inactive 
                @endif
                btn-circle" @if(isset($report)) @else disabled="disabled" @endif>4</a>
                <p class="wizard-btn-title">Probable Result</p>
            </div>
        </div>
    </div>
    <form role="form" action="{{ route('testing.result') }}" method="post">
      @csrf

        @if($errors->any())
        <div class="row">
          <div class="col-12">
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  {{ $error }}
                </div>
            @endforeach
          </div>
        </div>
        @endif

        <!-- Message Display -->
        @if(Session::has('success'))
        <div class="row">
          <div class="col-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ Session::get('success') }}
            </div>
          </div>
        </div>
        @endif

        <div class="row setup-content" id="step-1">
            <div class="col-xs-12 col-lg-12">
                <h3 class="wizard-section-title">Patient Information</h3>
            </div>

            <div class="col-xs-12 col-lg-12">
              <div class="form-row">
                <div class="col-12 col-md-6 col-xl-6">
                  <label for="name">Full Name <span>*</span></label>
                  <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name" required>
                </div>
                {{-- <div class="col-12 col-md-6 col-xl-6">
                  <label for="email">Your Email (Optional)</label>
                  <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email">
                </div>
                <div class="col-12 col-md-6 col-xl-6">
                  <label for="phone">Phone No (Optional)</label>
                  <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" id="phone">
                </div> --}}
                <div class="col-12 col-md-6 col-xl-6">
                  <label for="city">City / District <span>*</span></label>
                  <select class="custom-select" name="city" id="city" required>
                      <option value="">Select</option>
                      <option value="Dhaka">Dhaka</option>
                      <option value="Bagerhat">Bagerhat</option>
                      <option value="Bandarban">Bandarban</option>
                      <option value="Barguna">Barguna</option>
                      <option value="Barisal">Barisal</option>
                      <option value="Bhola">Bhola</option>
                      <option value="Bogra">Bogra</option>
                      <option value="Brahmanbaria">Brahmanbaria</option>
                      <option value="Chandpur">Chandpur</option>
                      <option value="Chittagong">Chittagong</option>
                      <option value="Chuadanga">Chuadanga</option>
                      <option value="Comilla">Comilla</option>
                      <option value="Cox's Bazar">Cox's Bazar</option>
                      <option value="Dinajpur">Dinajpur</option>
                      <option value="Faridpur">Faridpur</option>
                      <option value="Feni">Feni</option>
                      <option value="Gaibandha">Gaibandha</option>
                      <option value="Gazipur">Gazipur</option>
                      <option value="Gopalganj">Gopalganj</option>
                      <option value="Habiganj">Habiganj</option>
                      <option value="Jaipurhat">Jaipurhat</option>
                      <option value="Jamalpur">Jamalpur</option>
                      <option value="Jessore">Jessore</option>
                      <option value="Jhalakati">Jhalakati</option>
                      <option value="Jhenaidah">Jhenaidah</option>
                      <option value="Khagrachari">Khagrachari</option>
                      <option value="Khulna">Khulna</option>
                      <option value="Kishoreganj">Kishoreganj</option>
                      <option value="Kurigram">Kurigram</option>
                      <option value="Kushtia">Kushtia</option>
                      <option value="Lakshmipur">Lakshmipur</option>
                      <option value="Lalmonirhat">Lalmonirhat</option>
                      <option value="Madaripur">Madaripur</option>
                      <option value="Magura">Magura</option>
                      <option value="Manikganj">Manikganj</option>
                      <option value="Meherpur">Meherpur</option>
                      <option value="Moulvibazar">Moulvibazar</option>
                      <option value="Munshiganj">Munshiganj</option>
                      <option value="Mymensingh">Mymensingh</option>
                      <option value="Naogaon">Naogaon</option>
                      <option value="Narail">Narail</option>
                      <option value="Narayanganj">Narayanganj</option>
                      <option value="Narsingdi">Narsingdi</option>
                      <option value="Natore">Natore</option>
                      <option value="Nawabganj">Nawabganj</option>
                      <option value="Netrakona">Netrakona</option>
                      <option value="Nilphamari">Nilphamari</option>
                      <option value="Noakhali">Noakhali</option>
                      <option value="Pabna">Pabna</option>
                      <option value="Panchagarh">Panchagarh</option>
                      <option value="Patuakhali">Patuakhali</option>
                      <option value="Pirojpur">Pirojpur</option>
                      <option value="Rajbari">Rajbari</option>
                      <option value="Rajshahi">Rajshahi</option>
                      <option value="Rangamati">Rangamati</option>
                      <option value="Rangpur">Rangpur</option>
                      <option value="Satkhira">Satkhira</option>
                      <option value="Shariatpur">Shariatpur</option>
                      <option value="Sherpur">Sherpur</option>
                      <option value="Sirajganj">Sirajganj</option>
                      <option value="Sunamganj">Sunamganj</option>
                      <option value="Sylhet">Sylhet</option>
                      <option value="Tangail">Tangail</option>
                      <option value="Thakurgaon">Thakurgaon</option>
                  </select>
                </div>
                <div class="col-12 col-md-12 col-xl-12 form-inline">
                  <label for="city">Gender <span>*</span></label>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="male" name="gender" value="1" @if(old('gender') == 1) checked @endif required>
                        <label class="custom-control-label" for="male">Male</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="female" name="gender" value="2" @if(old('gender') == 2) checked @endif required>
                        <label class="custom-control-label" for="female">Female</label>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-xl-12 form-inline">
                  <label for="city">Age <span>*</span></label>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="1" name="age" value="1" @if(old('age') == 1) checked @endif required>
                        <label class="custom-control-label" for="1">1 - 10</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="2" name="age" value="2" @if(old('age') == 2) checked @endif required>
                        <label class="custom-control-label" for="2">11 - 20</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="3" name="age" value="3" @if(old('age') == 3) checked @endif required>
                        <label class="custom-control-label" for="3">21 - 30</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="4" name="age" value="4" @if(old('age') == 4) checked @endif required>
                        <label class="custom-control-label" for="4">31 - 40</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="5" name="age" value="5" @if(old('age') == 5) checked @endif required>
                        <label class="custom-control-label" for="5">41 - 50</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="6" name="age" value="6" @if(old('age') == 6) checked @endif required>
                        <label class="custom-control-label" for="6">51 - 60</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="7" name="age" value="7" @if(old('age') == 7) checked @endif required>
                        <label class="custom-control-label" for="7">61 - 70</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="8" name="age" value="8" @if(old('age') == 8) checked @endif required>
                        <label class="custom-control-label" for="8">71 - 80</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="9" name="age" value="9" @if(old('age') == 9) checked @endif required>
                        <label class="custom-control-label" for="9">80+</label>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-lg-12">
                <button class="btn nextBtn" type="button">Next</button>
            </div>
        </div>
        <div class="row setup-content" id="step-2">
            <div class="col-xs-12 col-lg-12">
                <h3 class="wizard-section-title">Common Symptoms</h3>
            </div>

            <div class="col-xs-12 col-lg-12">
              <div class="form-row">

                @foreach($commons as $common)
                <div class="col-12 col-md-6 col-xl-6">
                    <div class="single-check-form">
                        <div class="check-content">
                            <div class="single-check-title">{{ $common->name }}</div>
                            {{-- <div class="single-check-subtitle">(আপনার কি জ্বড় আছে?)</div> --}}
                        </div>
                        <div class="check-btn">
                            <label class="switch switch-left-right">
                                <input class="switch-input" type="checkbox" name="symptoms[]" value="{{ $common->id }}">
                                <span class="switch-label" data-on="Yes" data-off="No"></span> 
                                <span class="switch-handle"></span> 
                            </label>
                        </div>
                    </div>
                </div>
                @endforeach

              </div>
            </div>

            <div class="col-xs-12 col-lg-12">
                <button class="btn nextBtn" type="button">Next</button>
            </div>
        </div>
        <div class="row setup-content" id="step-3">
            <div class="col-xs-12 col-lg-12">
                <h3 class="wizard-section-title">Emergency Symptoms</h3>
            </div>

            <div class="col-xs-12 col-lg-12">
              <div class="form-row">
                
                @foreach($emergencies as $emergency)
                <div class="col-12 col-md-6 col-xl-6">
                    <div class="single-check-form">
                        <div class="check-content">
                            <div class="single-check-title">{{ $emergency->name }}</div>
                            {{-- <div class="single-check-subtitle">(আপনার কি জ্বড় আছে?)</div> --}}
                        </div>
                        <div class="check-btn">
                            <label class="switch switch-left-right">
                                <input class="switch-input" type="checkbox" name="symptoms[]" value="{{ $emergency->id }}">
                                <span class="switch-label" data-on="Yes" data-off="No"></span> 
                                <span class="switch-handle"></span> 
                            </label>
                        </div>
                    </div>
                </div>
                @endforeach
                
              </div>
            </div>

            <div class="col-xs-12 col-lg-12">
                <button class="btn lastBtn" type="submit">Check</button>
            </div>
        </div>
        <div class="row setup-content" id="step-4">
            <div class="col-xs-12 col-lg-12">
                <h3 class="wizard-section-title">Probable Result</h3>
            </div>

            <div class="col-xs-12 col-lg-12">
              <div class="post-content">
              @if(isset($report))

                <h3>Infection Probability</h3>

                <table>
                    <tr>
                      @foreach($report->diseases as $disease)
                        <th>{{ $disease->name }}</th>
                      @endforeach
                    </tr>
                    <tr>
                      @foreach($report->diseases as $disease)
                        <td>{{ $disease->pivot->probability }} %</td>
                      @endforeach
                    </tr>
                </table>



                <h3>Patient Symptoms:</h3>

                <ul>
                    @foreach($report->symptoms as $symptom)
                      <li>{{ $symptom->name }}</li>
                    @endforeach
                </ul>


                <h3>Emergency Symptoms:</h3>

                @php
                  $emergency_issue = 0;
                @endphp
                <ul>
                    @foreach($report->symptoms as $symptom)
                      @if($symptom->risk_level == 3)
                      <li>{{ $symptom->name }}</li>

                      @php
                        $emergency_issue = 1;
                      @endphp
                      @endif
                    @endforeach
                </ul>

                @if($emergency_issue == 0)
                  <p>You don't have any emergency syndromes. Stay home and take care of your health.</p>
                @else
                  <p>You have emergency syndromes. You might be need health support. Please connect with doctor or call to 999.</p>
                @endif

              @endif
              </div>
            </div>

            <div class="col-xs-12 col-lg-12">
                <a class="btn link" href="{{ route('testing.search') }}">Check Again</a>
            </div>
        </div>
    </form>
  </div>
  <!-- Form Wizard -->

</section>
<!-- Service Box -->

@endsection