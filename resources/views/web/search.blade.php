@extends('web.common.layouts.master')
@section('content')

<!-- Service Box -->
<section class="section service-section">
  <div class="container">
   <div class="row">
      <div class="col-12 col-lg-12 col-md-12">
        <!-- Post Header -->
        <div class="post-area">
            <h2 class="post-title">Search Treatment</h2>
            <div class="post-subtitle">Submit your health information for get specialist prescription by email.</div>
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
                <a href="#step-1" type="button" class="btn active btn-circle">1</a>
                <p class="wizard-btn-title">Patient Information</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn inactive btn-circle" disabled="disabled">2</a>
                <p class="wizard-btn-title">Common Symptoms</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn inactive btn-circle" disabled="disabled">3</a>
                <p class="wizard-btn-title">Emergency Symptoms</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn inactive btn-circle" disabled="disabled">4</a>
                <p class="wizard-btn-title">Medical Conditions</p>
            </div>
        </div>
    </div>
    <form role="form" action="{{ route('search.store') }}" method="post">
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
                <div class="col-12 col-md-6 col-xl-6">
                  <label for="email">Your Email <span>*</span></label>
                  <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" required>
                </div>
                <div class="col-12 col-md-6 col-xl-6">
                  <label for="phone">Phone No (Optional)</label>
                  <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" id="phone">
                </div>
                <div class="col-12 col-md-6 col-xl-6">
                  <label for="city">City / District <span>*</span></label>
                  <select class="custom-select" name="city" id="city" required>
                      <option value="">Select</option>
                      <option value="Dhaka" @if(old('city') == 'Dhaka') selected @endif>Dhaka</option>
                      <option value="Bagerhat" @if(old('city') == 'Bagerhat') selected @endif>Bagerhat</option>
                      <option value="Bandarban" @if(old('city') == 'Bandarban') selected @endif>Bandarban</option>
                      <option value="Barguna" @if(old('city') == 'Barguna') selected @endif>Barguna</option>
                      <option value="Barisal" @if(old('city') == 'Barisal') selected @endif>Barisal</option>
                      <option value="Bhola" @if(old('city') == 'Bhola') selected @endif>Bhola</option>
                      <option value="Bogra" @if(old('city') == 'Bogra') selected @endif>Bogra</option>
                      <option value="Brahmanbaria" @if(old('city') == 'Brahmanbaria') selected @endif>Brahmanbaria</option>
                      <option value="Chandpur" @if(old('city') == 'Chandpur') selected @endif>Chandpur</option>
                      <option value="Chittagong" @if(old('city') == 'Chittagong') selected @endif>Chittagong</option>
                      <option value="Chuadanga" @if(old('city') == 'Chuadanga') selected @endif>Chuadanga</option>
                      <option value="Comilla" @if(old('city') == 'Comilla') selected @endif>Comilla</option>
                      <option value="Cox's Bazar" @if(old('city') == "Cox's Bazar") selected @endif>Cox's Bazar</option>
                      <option value="Dinajpur" @if(old('city') == 'Dinajpur') selected @endif>Dinajpur</option>
                      <option value="Faridpur" @if(old('city') == 'Faridpur') selected @endif>Faridpur</option>
                      <option value="Feni" @if(old('city') == 'Feni') selected @endif>Feni</option>
                      <option value="Gaibandha" @if(old('city') == 'Gaibandha') selected @endif>Gaibandha</option>
                      <option value="Gazipur" @if(old('city') == 'Gazipur') selected @endif>Gazipur</option>
                      <option value="Gopalganj" @if(old('city') == 'Gopalganj') selected @endif>Gopalganj</option>
                      <option value="Habiganj" @if(old('city') == 'Habiganj') selected @endif>Habiganj</option>
                      <option value="Jaipurhat" @if(old('city') == 'Jaipurhat') selected @endif>Jaipurhat</option>
                      <option value="Jamalpur" @if(old('city') == 'Jamalpur') selected @endif>Jamalpur</option>
                      <option value="Jessore" @if(old('city') == 'Jessore') selected @endif>Jessore</option>
                      <option value="Jhalakati" @if(old('city') == 'Jhalakati') selected @endif>Jhalakati</option>
                      <option value="Jhenaidah" @if(old('city') == 'Jhenaidah') selected @endif>Jhenaidah</option>
                      <option value="Khagrachari" @if(old('city') == 'Khagrachari') selected @endif>Khagrachari</option>
                      <option value="Khulna" @if(old('city') == 'Khulna') selected @endif>Khulna</option>
                      <option value="Kishoreganj" @if(old('city') == 'Kishoreganj') selected @endif>Kishoreganj</option>
                      <option value="Kurigram" @if(old('city') == 'Kurigram') selected @endif>Kurigram</option>
                      <option value="Kushtia" @if(old('city') == 'Kushtia') selected @endif>Kushtia</option>
                      <option value="Lakshmipur" @if(old('city') == 'Lakshmipur') selected @endif>Lakshmipur</option>
                      <option value="Lalmonirhat" @if(old('city') == 'Lalmonirhat') selected @endif>Lalmonirhat</option>
                      <option value="Madaripur" @if(old('city') == 'Madaripur') selected @endif>Madaripur</option>
                      <option value="Magura" @if(old('city') == 'Magura') selected @endif>Magura</option>
                      <option value="Manikganj" @if(old('city') == 'Manikganj') selected @endif>Manikganj</option>
                      <option value="Meherpur" @if(old('city') == 'Meherpur') selected @endif>Meherpur</option>
                      <option value="Moulvibazar" @if(old('city') == 'Moulvibazar') selected @endif>Moulvibazar</option>
                      <option value="Munshiganj" @if(old('city') == 'Munshiganj') selected @endif>Munshiganj</option>
                      <option value="Mymensingh" @if(old('city') == 'Mymensingh') selected @endif>Mymensingh</option>
                      <option value="Naogaon" @if(old('city') == 'Naogaon') selected @endif>Naogaon</option>
                      <option value="Narail" @if(old('city') == 'Narail') selected @endif>Narail</option>
                      <option value="Narayanganj" @if(old('city') == 'Narayanganj') selected @endif>Narayanganj</option>
                      <option value="Narsingdi" @if(old('city') == 'Narsingdi') selected @endif>Narsingdi</option>
                      <option value="Natore" @if(old('city') == 'Natore') selected @endif>Natore</option>
                      <option value="Nawabganj" @if(old('city') == 'Nawabganj') selected @endif>Nawabganj</option>
                      <option value="Netrakona" @if(old('city') == 'Netrakona') selected @endif>Netrakona</option>
                      <option value="Nilphamari" @if(old('city') == 'Nilphamari') selected @endif>Nilphamari</option>
                      <option value="Noakhali" @if(old('city') == 'Noakhali') selected @endif>Noakhali</option>
                      <option value="Pabna" @if(old('city') == 'Pabna') selected @endif>Pabna</option>
                      <option value="Panchagarh" @if(old('city') == 'Panchagarh') selected @endif>Panchagarh</option>
                      <option value="Patuakhali" @if(old('city') == 'Patuakhali') selected @endif>Patuakhali</option>
                      <option value="Pirojpur" @if(old('city') == 'Pirojpur') selected @endif>Pirojpur</option>
                      <option value="Rajbari" @if(old('city') == 'Rajbari') selected @endif>Rajbari</option>
                      <option value="Rajshahi" @if(old('city') == 'Rajshahi') selected @endif>Rajshahi</option>
                      <option value="Rangamati" @if(old('city') == 'Rangamati') selected @endif>Rangamati</option>
                      <option value="Rangpur" @if(old('city') == 'Rangpur') selected @endif>Rangpur</option>
                      <option value="Satkhira" @if(old('city') == 'Satkhira') selected @endif>Satkhira</option>
                      <option value="Shariatpur" @if(old('city') == 'Shariatpur') selected @endif>Shariatpur</option>
                      <option value="Sherpur" @if(old('city') == 'Sherpur') selected @endif>Sherpur</option>
                      <option value="Sirajganj" @if(old('city') == 'Sirajganj') selected @endif>Sirajganj</option>
                      <option value="Sunamganj" @if(old('city') == 'Sunamganj') selected @endif>Sunamganj</option>
                      <option value="Sylhet" @if(old('city') == 'Sylhet') selected @endif>Sylhet</option>
                      <option value="Tangail" @if(old('city') == 'Tangail') selected @endif>Tangail</option>
                      <option value="Thakurgaon" @if(old('city') == 'Thakurgaon') selected @endif>Thakurgaon</option>
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
                
                @foreach($disease->symptoms as $symptom)
                @if($symptom->risk_level != 3 && $symptom->show == 1 && $symptom->status == 1)
                <div class="col-12 col-md-6 col-xl-6">
                    <div class="single-check-form">
                        <div class="check-content">
                            <div class="single-check-title">{{ $symptom->name }}</div>
                        </div>
                        <div class="check-btn">
                            <label class="switch switch-left-right">
                                <input class="switch-input" type="checkbox" name="symptoms[]" value="{{ $symptom->id }}">
                                <span class="switch-label" data-on="Yes" data-off="No"></span> 
                                <span class="switch-handle"></span> 
                            </label>
                        </div>
                    </div>
                </div>
                @endif
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
                
                @foreach($disease->symptoms as $symptom)
                @if($symptom->risk_level == 3 && $symptom->show == 1 && $symptom->status == 1)
                <div class="col-12 col-md-6 col-xl-6">
                    <div class="single-check-form">
                        <div class="check-content">
                            <div class="single-check-title">{{ $symptom->name }}</div>
                        </div>
                        <div class="check-btn">
                            <label class="switch switch-left-right">
                                <input class="switch-input" type="checkbox" name="symptoms[]" value="{{ $symptom->id }}">
                                <span class="switch-label" data-on="Yes" data-off="No"></span> 
                                <span class="switch-handle"></span> 
                            </label>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach

              </div>
            </div>

            <div class="col-xs-12 col-lg-12">
              <div class="post-content">
                <p>If you have any emergency syndromes? Then you might be need health support. Please connect with doctor or call to 999.</p>
              </div>
            </div>

            <div class="col-xs-12 col-lg-12">
                <button class="btn nextBtn" type="button">Next</button>
            </div>
        </div>
        <div class="row setup-content" id="step-4">
            <div class="col-xs-12 col-lg-12">
                <h3 class="wizard-section-title">Serious Medical Conditions</h3>
            </div>

            <div class="col-xs-12 col-lg-12">
              <div class="form-row">
                
                @foreach($disease->conditions as $condition)
                @if($condition->show == 1 && $condition->status == 1)
                <div class="col-12 col-md-6 col-xl-6">
                    <div class="single-check-form">
                        <div class="check-content">
                            <div class="single-check-title">{{ $condition->name }}</div>
                        </div>
                        <div class="check-btn">
                            <label class="switch switch-left-right">
                                <input class="switch-input" type="checkbox" name="conditions[]" value="{{ $condition->id }}">
                                <span class="switch-label" data-on="Yes" data-off="No"></span> 
                                <span class="switch-handle"></span> 
                            </label>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach

              </div>
            </div>

            <div class="col-xs-12 col-lg-12">
                <button class="btn lastBtn" type="submit">Submit</button>
            </div>
        </div>
    </form>
  </div>
  <!-- Form Wizard -->

</section>
<!-- Service Box -->

@endsection