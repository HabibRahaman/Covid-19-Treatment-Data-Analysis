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
                                    @foreach($reports as $report)
                                    <tr>
                                        <td>{{ $report->name }}</td>
                                        <td>
                                            @if($report->gender == 1)
                                            Male
                                            @elseif($report->gender == 2)
                                            Female
                                            @endif
                                        </td>
                                        <td>
                                            @if($report->age == 1)
                                            1 - 10
                                            @elseif($report->age == 2)
                                            11 - 20
                                            @elseif($report->age == 3)
                                            21 - 30
                                            @elseif($report->age == 4)
                                            31 - 40
                                            @elseif($report->age == 5)
                                            41 - 50
                                            @elseif($report->age == 6)
                                            51 - 60
                                            @elseif($report->age == 7)
                                            61 - 70
                                            @elseif($report->age == 8)
                                            71 - 80
                                            @elseif($report->age == 9)
                                            80+
                                            @endif
                                        </td>
                                        <td>{{ $report->city }}</td>
                                        <td>
                                        <a class="waves-effect waves-light btn btn-small blue modal-trigger" href="#viewitem-{{ $report->id }}" data-toggle="tooltip" data-placement="top" title="View">
                                            <i class="fas fa-eye "></i>
                                        </a>

                                        <a class="waves-effect waves-light btn btn-small red" data-toggle="tooltip" data-placement="top" title="Delete"
                                            onclick="alertFunction('delete',{{$report->id}});">
                                           <i class="fas fa-trash-alt"></i>
                                        </a>
                                        <form id="delete{{$report->id}}" action="{{ route($route.'destroy', [$report->id]) }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            @method('DELETE')
                                        </form>


                                        <!-- ================================ -->
                                        <!-- View Item Modal -->
                                        <!-- ================================ -->
                                        <!-- Modal Structure -->
                                        <div id="viewitem-{{ $report->id }}" class="modal modal-fixed-footer">
                                            <div class="modal-content">
                                            <div class="card">
                                                <div class="card-content">
                                                    <h5 class="card-title activator">View {{ $title }}</h5>
                                                        
                                                    <div class="row">
                                                      <div class="col s12">
                                                          <span class="card-title">{{ $report->name }}</span>

                                                          @if(isset($report->email))
                                                          <br/>
                                                          Email : {{ $report->email }}
                                                          @endif

                                                          @if(isset($report->phone))
                                                          <br/>
                                                          Phone : {{ $report->phone }}
                                                          @endif
                                                      </div>
                                                    </div>

                                                    <div class="row m-t-20">
                                                      <div class="col s12">
                                                          <h6>Symptoms:</h6>
                                                          @foreach($report->symptoms as $symptom)
                                                            <span class="new badge green">{{ $symptom->name }}</span>
                                                          @endforeach
                                                      </div>
                                                    </div>

                                                    <div class="row m-t-20">
                                                      <div class="col s12">
                                                          <h6>Probability:</h6>
                                                          @foreach($report->diseases as $disease)
                                                            <span class="new badge orange">{{ $disease->name }} - {{ $disease->pivot->probability }} %</span>
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