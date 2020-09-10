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

                            <!-- ================================ -->
                            <!-- Add Item Modal -->
                            <!-- ================================ -->
                            <!-- Modal Trigger -->
                            <a class="waves-effect waves-light btn modal-trigger" href="#additem"><i class="material-icons right">add</i>Add New</a>

                            <!-- Modal Structure -->
                            <div id="additem" class="modal">
                                <div class="modal-content">
                                <div class="card">
                                    <div class="card-content">
                                        <h5 class="card-title activator">Add {{ $title }}</h5>
                                        <form id="addnew" action="{{ route($route.'store') }}" method="post" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col s12">
                                                    <div class="input-field">
                                                        <input type="text" name="name" id="name" required>
                                                        <label for="name">Name <span>*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col s12">
                                                    <div class="input-field">
                                                        <span for="details">Details</span><br/>
                                                        <textarea class="textEditor" name="details" id="details"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col s12">
                                                    <div class="input-field">
                                                        <select name="type" id="type" required>
                                                            <option value="">Select</option>
                                                            <option value="1">Infectious</option>
                                                            <option value="2">Deficiency</option>
                                                            <option value="3">Hereditary</option>
                                                            <option value="4">Physiological</option>
                                                        </select> 
                                                        <label for="type">Disease Type <span>*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col s12">
                                                    <div class="input-field">
                                                        <select name="risk_level" id="risk_level" required>
                                                            <option value="">Select</option>
                                                            <option value="3">Higher</option>
                                                            <option value="2">Medium</option>
                                                            <option value="1">Lower</option>
                                                        </select> 
                                                        <label for="risk_level">Risk Level <span>*</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12">
                                                    <a href="#!" class="modal-action modal-close waves-effect waves-light btn grey darken-4">Cancel</a>
                                                    <button type="submit" class="waves-effect waves-light btn cyan">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>
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
                                        <th>Disease Type</th>
                                        <th>Risk Level</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($diseases as $disease)
                                    <tr>
                                        <td>{{ $disease->name }}</td>
                                        <td>
                                            @if($disease->type == 1)
                                            Infectious
                                            @elseif($disease->type == 2)
                                            Deficiency
                                            @elseif($disease->type == 3)
                                            Hereditary
                                            @elseif($disease->type == 4)
                                            Physiological
                                            @endif
                                        </td>
                                        <td>
                                            @if($disease->risk_level == 1)
                                            <span class="new badge blue">Lower</span>
                                            @elseif($disease->risk_level == 2)
                                            <span class="new badge orange">Medium</span>
                                            @elseif($disease->risk_level == 3)
                                            <span class="new badge red">Higher</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($disease->status == 1)
                                            <span class="new badge blue">Active</span>
                                            @else
                                            <span class="new badge red">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                        <a class="waves-effect waves-light btn btn-small green modal-trigger" href="#edititem-{{ $disease->id }}" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="fas fa-edit "></i>
                                        </a>

                                        <a class="waves-effect waves-light btn btn-small blue modal-trigger" href="#viewitem-{{ $disease->id }}" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="fas fa-eye "></i>
                                        </a>

                                        <a class="waves-effect waves-light btn btn-small red" data-toggle="tooltip" data-placement="top" title="Delete"
                                            onclick="alertFunction('delete',{{$disease->id}});">
                                           <i class="fas fa-trash-alt"></i>
                                        </a>
                                        <form id="delete{{$disease->id}}" action="{{ route($route.'destroy', [$disease->id]) }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            @method('DELETE')
                                        </form>

                                        <!-- ================================ -->
                                        <!-- Edit Item Modal -->
                                        <!-- ================================ -->
                                        <!-- Modal Structure -->
                                        <div id="edititem-{{ $disease->id }}" class="modal">
                                            <div class="modal-content">
                                            <div class="card">
                                                <div class="card-content">
                                                    <h5 class="card-title activator">Edit {{ $title }}</h5>
                                                    <form  action="{{ route($route.'update', [$disease->id]) }}" method="post" novalidate>
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="row">
                                                            <div class="col s12">
                                                                <div class="input-field">
                                                                    <input type="text" name="name" id="name" value="{{ $disease->name }}" required>
                                                                    <label for="name">Name<span>*</span></label>
                                                                </div>
                                                            </div>
                                                            <div class="col s12">
                                                                <div class="input-field">
                                                                    <span for="details">Details</span><br/>
                                                                    <textarea class="textEditor" name="details" id="details">{{ $disease->details }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col s12">
                                                                <div class="input-field">
                                                                    <select name="type" id="type" required>
                                                                        <option value="">Select</option>
                                                                        <option value="1" @if($disease->type == 1) selected @endif>Infectious</option>
                                                                        <option value="2" @if($disease->type == 2) selected @endif>Deficiency</option>
                                                                        <option value="3" @if($disease->type == 3) selected @endif>Hereditary</option>
                                                                        <option value="4" @if($disease->type == 4) selected @endif>Physiological</option>
                                                                    </select> 
                                                                    <label for="type">Disease Type <span>*</span></label>
                                                                </div>
                                                            </div>
                                                            <div class="col s12">
                                                                <div class="input-field">
                                                                    <select name="risk_level" id="risk_level" required>
                                                                        <option value="">Select</option>
                                                                        <option value="3" @if($disease->risk_level == 3) selected @endif>Higher</option>
                                                                        <option value="2" @if($disease->risk_level == 2) selected @endif>Medium</option>
                                                                        <option value="1" @if($disease->risk_level == 1) selected @endif>Lower</option>
                                                                    </select> 
                                                                    <label for="risk_level">Risk Level <span>*</span></label>
                                                                </div>
                                                            </div>
                                                            <div class="col s12">
                                                                <div class="input-field">
                                                                    <select name="status" id="status{{$disease->id}}">
                                                                        <option value="1" @if( $disease->status == 1 ) selected @endif>Active</option>
                                                                        <option value="0" @if( $disease->status == 0 ) selected @endif>Inactive</option>
                                                                    </select>
                                                                    <label for="status{{$disease->id}}">Select Status</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row">
                                                            <div class="col s12">
                                                                <a href="#!" class="modal-action modal-close waves-effect waves-light btn grey darken-4">Cancel</a>
                                                                <button type="submit" class="waves-effect waves-light btn cyan submit-btn">Update</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                            </div>
                                        </div>


                                        <!-- ================================ -->
                                        <!-- View Item Modal -->
                                        <!-- ================================ -->
                                        <!-- Modal Structure -->
                                        <div id="viewitem-{{ $disease->id }}" class="modal modal-fixed-footer">
                                            <div class="modal-content">
                                            <div class="card">
                                                <div class="card-content">
                                                    <h5 class="card-title activator">View {{ $title }}</h5>
                                                        
                                                    <div class="row">
                                                      <div class="col s12">
                                                          <span class="card-title">{{ $disease->name }}</span>

                                                          <h6>Symptoms:</h6>
                                                          @foreach($disease->symptoms as $symptom)
                                                            <span class="new badge green">{{ $symptom->name }}</span>
                                                          @endforeach
                                                      </div>
                                                    </div>
                                                    <div class="row m-t-20">
                                                      <div class="col s12">
                                                          <h6>Details:</h6>
                                                          {!! $disease->details !!}
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
                          
                          <div class="pagination">
                            {{ $diseases->links() }}
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
        $("#addnew").parsley();
    });
</script>
@endsection