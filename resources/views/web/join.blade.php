@extends('web.common.layouts.master')
@section('content')

<!-- Service Box -->
<section class="section service-section">
  <div class="container">
   <div class="row">
      <div class="col-12 col-lg-12 col-md-12">
        <!-- Post Header -->
        <div class="post-area">
            <h2 class="post-title">Become a Covid Fighter</h2>
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
                <p class="wizard-btn-title">Account Information</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn inactive btn-circle" disabled="disabled">2</a>
                <p class="wizard-btn-title">Professional Information</p>
            </div>
        </div>
    </div>
    <form role="form" action="{{ route('join.doctor') }}" method="post">
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
                <h3 class="wizard-section-title">Account Information</h3>
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
                  <label for="phone">Phone No <span>*</span></label>
                  <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" id="phone" required>
                </div>
                <div class="col-12 col-md-6 col-xl-6">
                  <label for="dob">Date Of Birth <span>*</span></label>
                  <input type="date" class="form-control" name="dob" value="{{ old('dob') }}" id="dob" required>
                </div>
                <div class="col-12 col-md-6 col-xl-6">
                  <label for="address">Address <span>*</span></label>
                  <input type="text" class="form-control" name="address" value="{{ old('address') }}" id="address" required>
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
                    {{-- <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="common" value="2" hidden="">
                    </div> --}}

                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="male" name="gender" value="1" @if(old('gender') == 1) checked @endif required>
                        <label class="custom-control-label" for="male">Male</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="female" name="gender" value="2" @if(old('gender') == 2) checked @endif required>
                        <label class="custom-control-label" for="female">Female</label>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-6">
                  <label for="password">Password <span>*</span></label>
                  <input type="password" class="form-control" name="password" value="{{ old('password') }}" id="password" required>
                </div>
                <div class="col-12 col-md-6 col-xl-6">
                  <label for="password_confirmation">Confirm Password <span>*</span></label>
                  <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" id="password_confirmation" required autocomplete="password">
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-lg-12">
                <button class="btn nextBtn" type="button">Next</button>
            </div>
        </div>
        <div class="row setup-content" id="step-2">
            <div class="col-xs-12 col-lg-12">
                <h3 class="wizard-section-title">Professional Information</h3>
            </div>

            <div class="col-xs-12 col-lg-12">
              <div class="form-row">
                <div class="col-12 col-md-6 col-xl-6">
                  <p class="wizard-section-subtitle">Career info</p>

                  <div class="form-element">
                  <label for="designation">Designation <span>*</span></label>
                  <input type="text" class="form-control" name="designation" value="{{ old('designation') }}" id="designation" required>
                  </div>

                  <div class="form-element">
                  <label for="department">Department <span>*</span></label>
                  <input type="text" class="form-control" name="department" value="{{ old('department') }}" id="department" required>
                  </div>

                  <div class="form-element">
                  <label for="organization">Organization <span>*</span></label>
                  <input type="text" class="form-control" name="organization" value="{{ old('organization') }}" id="organization" required>
                  </div>
                    
                </div>
                <div class="col-12 col-md-6 col-xl-6">
                  <p class="wizard-section-subtitle">Educational info</p>
                    
                  <div class="form-element">
                  <label for="higher_degree">Higher Degree <span>*</span></label>
                  <input type="text" class="form-control" name="higher_degree" value="{{ old('higher_degree') }}" id="higher_degree" required>
                  </div>

                  <div class="form-element">
                  <label for="academy">Academy <span>*</span></label>
                  <input type="text" class="form-control" name="academy" value="{{ old('academy') }}" id="academy" required>
                  </div>

                  <div class="form-element">
                  <label for="specialty">Specialty <span>*</span></label>
                  <input type="text" class="form-control" name="specialty" value="{{ old('specialty') }}" id="specialty" required>
                  </div>

                </div>
                <div class="col-12 col-md-12 col-xl-12">
                  <hr/>
                  <label for="profile">About You</label>
                  <textarea class="form-control" rows="4" name="profile" value="{{ old('profile') }}" id="profile"></textarea>
                </div>
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