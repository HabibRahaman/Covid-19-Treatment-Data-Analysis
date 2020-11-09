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
                <div class="alert alert-danger" role="alert">
                  {{ $error }}
                </div>
            @endforeach
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