@extends('web.common.layouts.master')
@section('content')

<!-- Service Box -->
<section class="section service-section">
  <div class="container">
   <div class="row">
      <div class="col-12 col-lg-12 col-md-12">
        <!-- Post Header -->
        <div class="post-area">
            <h2 class="post-title">Your Title is here</h2>
            <div class="post-content">
                <img src="{{ asset('web/img/post_thumb.png') }}" class="post-thumb" alt="Thumb">


                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                <br><br>

                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.



                <h3>Data comparison table</h3>

                <table>
                    <tr>
                        <th>Symptom</th>
                        <th>Covid19</th>
                        <th>Seasonal fever</th>
                        <th>Flu</th>
                        <th>Allergy</th>
                    </tr>
                    <tr>
                        <td>Fever</td>
                        <td>50%</td>
                        <td>50%</td>
                        <td>50%</td>
                        <td>50%</td>
                    </tr>
                    <tr>
                        <td>Cough</td>
                        <td>50%</td>
                        <td>50%</td>
                        <td>50%</td>
                        <td>50%</td>
                    </tr>
                    <tr>
                        <td>Weakness</td>
                        <td>50%</td>
                        <td>50%</td>
                        <td>50%</td>
                        <td>50%</td>
                    </tr>
                    <tr>
                        <td>Fatigue</td>
                        <td>50%</td>
                        <td>50%</td>
                        <td>50%</td>
                        <td>50%</td>
                    </tr>
                    <tr>
                        <td>Headache</td>
                        <td>50%</td>
                        <td>50%</td>
                        <td>50%</td>
                        <td>50%</td>
                    </tr>
                    <tr>
                        <td>Diarrhea</td>
                        <td>50%</td>
                        <td>50%</td>
                        <td>50%</td>
                        <td>50%</td>
                    </tr>
                </table>


                <h3>List Items:</h3>

                <ul>
                    <li>Data Entry</li>
                    <li>Website Audit</li>
                    <li>Social Media marketing</li>
                    <li>Email Marketing</li>
                    <li>Website Research</li>
                    <li>Product Research</li>
                    <li>Lead Generation</li>
                    <li>Keyword Research</li>
                </ul>
            </div>
        </div>
        <!-- Post Header -->
      </div>
    </div> 
  </div>
</section>
<!-- Service Box -->

@endsection