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
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Age</th>
                                        <th>City</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($patients as $patient)
                                    <tr>
                                        <td>{{ $patient->name }}</td>
                                        <td>
                                            @if($patient->gender == 1)
                                            Male
                                            @elseif($patient->gender == 2)
                                            Female
                                            @endif
                                        </td>
                                        <td>
                                            @if($patient->age == 1)
                                            1 - 10
                                            @elseif($patient->age == 2)
                                            11 - 20
                                            @elseif($patient->age == 3)
                                            21 - 30
                                            @elseif($patient->age == 4)
                                            31 - 40
                                            @elseif($patient->age == 5)
                                            41 - 50
                                            @elseif($patient->age == 6)
                                            51 - 60
                                            @elseif($patient->age == 7)
                                            61 - 70
                                            @elseif($patient->age == 8)
                                            71 - 80
                                            @elseif($patient->age == 9)
                                            80+
                                            @endif
                                        </td>
                                        <td>{{ $patient->city }}</td>
                                        <td>
                                        <a class="waves-effect waves-light btn btn-small blue modal-trigger" href="#viewitem-{{ $patient->id }}" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="fas fa-eye "></i>
                                        </a>

                                        <a class="waves-effect waves-light btn btn-small red" data-toggle="tooltip" data-placement="top" title="Delete"
                                            onclick="alertFunction('delete',{{$patient->id}});">
                                           <i class="fas fa-trash-alt"></i>
                                        </a>
                                        <form id="delete{{$patient->id}}" action="{{ route($route.'destroy', [$patient->id]) }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            @method('DELETE')
                                        </form>


                                        <!-- ================================ -->
                                        <!-- View Item Modal -->
                                        <!-- ================================ -->
                                        <!-- Modal Structure -->
                                        <div id="viewitem-{{ $patient->id }}" class="modal modal-fixed-footer">
                                            <div class="modal-content">
                                            <div class="card">
                                                <div class="card-content">
                                                    <h5 class="card-title activator">View {{ $title }}</h5>
                                                        
                                                    <div class="row">
                                                      <div class="col s12">
                                                          <span class="card-title">{{ $patient->name }}</span>

                                                          @if(isset($patient->email))
                                                          <br/>
                                                          Email : {{ $patient->email }}
                                                          @endif

                                                          @if(isset($patient->phone))
                                                          <br/>
                                                          Phone : {{ $patient->phone }}
                                                          @endif
                                                      </div>
                                                    </div>

                                                    <div class="row m-t-20">
                                                      <div class="col s12">
                                                          <h6>Symptoms:</h6>
                                                          @foreach($patient->symptoms as $symptom)
                                                            <span class="new badge green">{{ $symptom->name }}</span>
                                                          @endforeach
                                                      </div>
                                                    </div>

                                                    <div class="row m-t-20">
                                                      <div class="col s12">
                                                          <h6>Medical Conditions:</h6>
                                                          @foreach($patient->conditions as $condition)
                                                            <span class="new badge blue">{{ $condition->name }}</span>
                                                          @endforeach
                                                      </div>
                                                    </div>

                                                    <div class="row m-t-20">
                                                      <div class="col s12">
                                                          <h6>Medicines:</h6>
                                                          @foreach($patient->medicines as $medicine)
                                                            <span class="new badge orange">{{ $medicine->name }}</span>
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