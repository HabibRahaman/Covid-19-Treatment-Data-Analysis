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
                                                            <option value="1">Medical Care</option>
                                                            <option value="2">Home Care</option>
                                                        </select> 
                                                        <label for="type">Care Type <span>*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col s12">
                                                    <div class="input-field">
                                                        <select name="priority" id="priority" required>
                                                            <option value="">Select</option>
                                                            <option value="3">Higher</option>
                                                            <option value="2">Medium</option>
                                                            <option value="1">Lower</option>
                                                        </select> 
                                                        <label for="priority">Priority <span>*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col s12">
                                                    <div class="input-field">
                                                        <select name="diseases[]" id="diseases" required multiple>
                                                            @foreach($diseases as $disease)
                                                            <option value="{{ $disease->id }}">{{ $disease->name }}</option>
                                                            @endforeach
                                                        </select> 
                                                        <label for="diseases">Diseases <span>*</span></label>
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
                                        <th>Care Type</th>
                                        <th>Priority</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($healthcares as $healthcare)
                                    <tr>
                                        <td>{{ $healthcare->name }}</td>
                                        <td>
                                            @if($healthcare->type == 1)
                                            Medical Care
                                            @elseif($healthcare->type == 2)
                                            Home Care
                                            @endif
                                        </td>
                                        <td>
                                            @if($healthcare->priority == 1)
                                            <span class="new badge blue">Lower</span>
                                            @elseif($healthcare->priority == 2)
                                            <span class="new badge orange">Medium</span>
                                            @elseif($healthcare->priority == 3)
                                            <span class="new badge red">Higher</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($healthcare->status == 1)
                                            <span class="new badge blue">Active</span>
                                            @else
                                            <span class="new badge red">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                        <a class="waves-effect waves-light btn btn-small green modal-trigger edit-btn" href="#edititem-{{ $healthcare->id }}" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="fas fa-edit "></i>
                                        </a>

                                        <a class="waves-effect waves-light btn btn-small blue modal-trigger" href="#viewitem-{{ $healthcare->id }}" data-toggle="tooltip" data-placement="top" title="View">
                                            <i class="fas fa-eye "></i>
                                        </a>

                                        <a class="waves-effect waves-light btn btn-small red" data-toggle="tooltip" data-placement="top" title="Delete"
                                            onclick="alertFunction('delete',{{$healthcare->id}});">
                                           <i class="fas fa-trash-alt"></i>
                                        </a>
                                        <form id="delete{{$healthcare->id}}" action="{{ route($route.'destroy', [$healthcare->id]) }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            @method('DELETE')
                                        </form>

                                        <!-- ================================ -->
                                        <!-- Edit Item Modal -->
                                        <!-- ================================ -->
                                        <!-- Modal Structure -->
                                        <div id="edititem-{{ $healthcare->id }}" class="modal">
                                            <div class="modal-content">
                                            <div class="card">
                                                <div class="card-content">
                                                    <h5 class="card-title activator">Edit {{ $title }}</h5>
                                                    <form  action="{{ route($route.'update', [$healthcare->id]) }}" method="post" novalidate>
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="row">
                                                            <div class="col s12">
                                                                <div class="input-field">
                                                                    <input type="text" name="name" id="name" value="{{ $healthcare->name }}" required>
                                                                    <label for="name">Name<span>*</span></label>
                                                                </div>
                                                            </div>
                                                            <div class="col s12">
                                                                <div class="input-field">
                                                                    <span for="details">Details</span><br/>
                                                                    <textarea class="textEditor" name="details" id="details">{{ $healthcare->details }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col s12">
                                                                <div class="input-field">
                                                                    <select name="type" id="type" required>
                                                                        <option value="">Select</option>
                                                                        <option value="1" @if($healthcare->type == 1) selected @endif>Medical Care</option>
                                                                        <option value="2" @if($healthcare->type == 2) selected @endif>Home Care</option>
                                                                    </select> 
                                                                    <label for="type">Care Type <span>*</span></label>
                                                                </div>
                                                            </div>
                                                            <div class="col s12">
                                                                <div class="input-field">
                                                                    <select name="priority" id="priority" required>
                                                                        <option value="">Select</option>
                                                                        <option value="3" @if($healthcare->priority == 3) selected @endif>Higher</option>
                                                                        <option value="2" @if($healthcare->priority == 2) selected @endif>Medium</option>
                                                                        <option value="1" @if($healthcare->priority == 1) selected @endif>Lower</option>
                                                                    </select> 
                                                                    <label for="priority">Priority <span>*</span></label>
                                                                </div>
                                                            </div>
                                                            <div class="col s12">
                                                                <div class="input-field">
                                                                    <select name="diseases[]" id="diseases" required multiple>
                                                                        @foreach($diseases as $disease)
                                                                        <option value="{{ $disease->id }}"

                                                                            @foreach($healthcare->diseases as $selected_disease)
                                                                            @if($selected_disease->id == $disease->id) selected @endif 
                                                                            @endforeach

                                                                        >{{ $disease->name }}
                                                                        </option>
                                                                        @endforeach
                                                                    </select> 
                                                                    <label for="diseases">Diseases <span>*</span></label>
                                                                </div>
                                                            </div>
                                                            <div class="col s12">
                                                                <div class="input-field">
                                                                    <select name="status" id="status{{$healthcare->id}}">
                                                                        <option value="1" @if( $healthcare->status == 1 ) selected @endif>Active</option>
                                                                        <option value="0" @if( $healthcare->status == 0 ) selected @endif>Inactive</option>
                                                                    </select>
                                                                    <label for="status{{$healthcare->id}}">Select Status</label>
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
                                        <div id="viewitem-{{ $healthcare->id }}" class="modal modal-fixed-footer">
                                            <div class="modal-content">
                                            <div class="card">
                                                <div class="card-content">
                                                    <h5 class="card-title activator">View {{ $title }}</h5>
                                                        
                                                    <div class="row">
                                                      <div class="col s12">
                                                          <span class="card-title">{{ $healthcare->name }}</span>

                                                          <h6>Diseases:</h6>
                                                          @foreach($healthcare->diseases as $disease)
                                                            <span class="new badge blue">{{ $disease->name }}</span>
                                                          @endforeach

                                                      </div>
                                                    </div>
                                                    <div class="row m-t-20">
                                                      <div class="col s12">
                                                          <h6>Details:</h6>
                                                          {!! $healthcare->details !!}
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