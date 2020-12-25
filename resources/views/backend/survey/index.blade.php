@extends('backend.common.layouts.master')
@section('content')

    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <div class="page-wrapper">

        @include('backend.common.layouts.breadcrumb')
        
        <!-- ============================================================== -->
        <!-- Container fluid scss in scafholding.scss -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-header">

                        </div>

                        <!-- ================================ -->
                        <!-- Item List Table -->
                        <!-- ================================ -->
                        <div class="card-content">
                          <div class="responsive-table">
                            <table id="file_export" class="table table-striped display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Reg ID</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Age</th>
                                        <th>City</th>
                                        <th>Medical Test</th>
                                        <th>Health Condition</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($surveys as $key => $survey)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $survey->reg_id }}</td>
                                        <td>{{ $survey->name }}</td>
                                        <td>
                                            @if($survey->gender == 1)
                                            Male
                                            @elseif($survey->gender == 2)
                                            Female
                                            @endif
                                        </td>
                                        <td>
                                            @if($survey->age == 1)
                                            1 - 10
                                            @elseif($survey->age == 2)
                                            11 - 20
                                            @elseif($survey->age == 3)
                                            21 - 30
                                            @elseif($survey->age == 4)
                                            31 - 40
                                            @elseif($survey->age == 5)
                                            41 - 50
                                            @elseif($survey->age == 6)
                                            51 - 60
                                            @elseif($survey->age == 7)
                                            61 - 70
                                            @elseif($survey->age == 8)
                                            71 - 80
                                            @elseif($survey->age == 9)
                                            80+
                                            @endif
                                        </td>
                                        <td>{{ $survey->city }}</td>
                                        <td>
                                            @if($survey->medical_test == 1)
                                            <span class="new badge red">Positive</span>
                                            @else
                                            <span class="new badge green">Negative</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($survey->health_condition == 1)
                                                Healthy
                                            @elseif($survey->health_condition == 2)
                                                Illness
                                            @elseif($survey->health_condition == 0)
                                                Death
                                            @endif
                                        </td>
                                        <td>
                                            @if($survey->status == 1)
                                            <span class="new badge blue">Pending</span>
                                            @elseif($survey->status == 2)
                                            <span class="new badge green">Approved</span>
                                            @elseif($survey->status == 0)
                                            <span class="new badge red">Rejected</span>
                                            @endif
                                        </td>
                                        <td>
                                        <a class="waves-effect waves-light btn btn-small blue modal-trigger" href="#viewitem-{{ $survey->id }}" data-toggle="tooltip" data-placement="top" title="View">
                                            <i class="fas fa-eye "></i>
                                        </a>

                                        <a class="waves-effect waves-light btn btn-small green" data-toggle="tooltip" data-placement="top" title="Reject" href="{{ route($route.'show', [$survey->id]) }}">
                                           <i class="fas fa-check-square"></i>
                                        </a>

                                        <a class="waves-effect waves-light btn btn-small red" data-toggle="tooltip" data-placement="top" title="Reject" href="{{ route($route.'edit', [$survey->id]) }}">
                                           <i class="fas fa-window-close"></i>
                                        </a>

                                        {{-- <a class="waves-effect waves-light btn btn-small red" data-toggle="tooltip" data-placement="top" title="Delete"
                                            onclick="alertFunction('delete',{{$survey->id}});">
                                           <i class="fas fa-trash-alt"></i>
                                        </a>
                                        <form id="delete{{$survey->id}}" action="{{ route($route.'destroy', [$survey->id]) }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            @method('DELETE')
                                        </form> --}}


                                        <!-- ================================ -->
                                        <!-- View Item Modal -->
                                        <!-- ================================ -->
                                        <!-- Modal Structure -->
                                        <div id="viewitem-{{ $survey->id }}" class="modal modal-fixed-footer">
                                            <div class="modal-content">
                                            <div class="card">
                                                <div class="card-content">
                                                    <h5 class="card-title activator">View {{ $title }}</h5>
                                                        
                                                    <div class="row">
                                                      <div class="col s12">
                                                          <span class="card-title">{{ $survey->name }}</span>

                                                          @if(isset($survey->email))
                                                          <br/>
                                                          Email : {{ $survey->email }}
                                                          @endif

                                                          @if(isset($survey->phone))
                                                          <br/>
                                                          Phone : {{ $survey->phone }}
                                                          @endif

                                                          <hr/>
                                                          <table>
                                                              <tr>
                                                                  <td>Medical Test</td>
                                                                  <td>Ventilation</td>
                                                                  <td>ICU</td>
                                                                  <td>Health Condition</td>
                                                              </tr>
                                                              <tr>
                                                                  <td>
                                                                    @if($survey->medical_test == 1)
                                                                    <span class="new badge red">Positive</span>
                                                                    @else
                                                                    <span class="new badge green">Negative</span>
                                                                    @endif
                                                                  </td>
                                                                  <td>
                                                                    @if($survey->ventilation == 1)
                                                                    <span class="new badge red">Yes</span>
                                                                    @else
                                                                    <span class="new badge green">No</span>
                                                                    @endif
                                                                  </td>
                                                                  <td>
                                                                    @if($survey->icu == 1)
                                                                    <span class="new badge red">Yes</span>
                                                                    @else
                                                                    <span class="new badge green">No</span>
                                                                    @endif
                                                                  </td>
                                                                  <td>
                                                                    @if($survey->health_condition == 1)
                                                                        Healthy
                                                                    @elseif($survey->health_condition == 2)
                                                                        Illness
                                                                    @elseif($survey->health_condition == 0)
                                                                        Death
                                                                    @endif
                                                                  </td>
                                                              </tr>
                                                          </table>
                                                      </div>
                                                    </div>

                                                    <div class="row m-t-20">
                                                      <div class="col s12">
                                                          <h6>Symptoms:</h6>
                                                          @foreach($survey->symptoms as $symptom)
                                                            <span class="new badge green">{{ $symptom->name }}</span>
                                                          @endforeach
                                                      </div>
                                                    </div>

                                                    <div class="row m-t-20">
                                                      <div class="col s12">
                                                          <h6>Medicines:</h6>
                                                          @foreach($survey->medicines as $medicine)
                                                            <span class="new badge orange">{{ $medicine->name }}</span>
                                                          @endforeach
                                                      </div>
                                                    </div>

                                                    <div class="row m-t-20">
                                                      <div class="col s12">
                                                          <h6>Medical Conditions:</h6>
                                                          @foreach($survey->conditions as $condition)
                                                            <span class="new badge blue">{{ $condition->name }}</span>
                                                          @endforeach
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="#!" class="modal-action modal-close waves-effect waves-light btn grey darken-4">Close</a>
                                            </div>
                                        </div>
                                        </td>

                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                          </div>
                          
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- ============================================================== -->
        <!-- Container fluid scss in scafholding.scss -->
        <!-- ============================================================== -->

@endsection

@section('page_js')
<!-- Custom js -->
<!-- ============================================================== -->
<script type="text/javascript">
    $(document).ready(function(){
        $("form").parsley();
    });
</script>
@endsection