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
                            <table class="table table-striped display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Symptom</th>
                                        <th>Disease</th>
                                        <th>Priority</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($symptoms as $symptom)
                                    @foreach($symptom->diseases as $disease)
                                    <tr>
                                        <td>{{ $symptom->name }}</td>
                                        <td>{{ $disease->name }}</td>
                                        <td>
                                            @if($disease->pivot->priority == 1)
                                            <span class="new badge blue">Lower</span>
                                            @elseif($disease->pivot->priority == 2)
                                            <span class="new badge orange">Medium</span>
                                            @elseif($disease->pivot->priority == 3)
                                            <span class="new badge red">Higher</span>
                                            @endif
                                        </td>
                                        <td>
                                        <a class="waves-effect waves-light btn btn-small green modal-trigger edit-btn" href="#edititem-{{ $disease->id }}-{{ $symptom->id }}" data-toggle="tooltip" data-placement="top" title="View">
                                            <i class="fas fa-edit "></i>
                                        </a>

                                        <!-- ================================ -->
                                        <!-- Edit Item Modal -->
                                        <!-- ================================ -->
                                        <!-- Modal Structure -->
                                        <div id="edititem-{{ $disease->id }}-{{ $symptom->id }}" class="modal">
                                            <div class="modal-content">
                                            <div class="card">
                                                <div class="card-content">
                                                    <h5 class="card-title activator">{{ $symptom->name }} - {{ $disease->name }}</h5>
                                                    <form  action="{{ route($route.'update', [$disease->id]) }}" method="post" novalidate>
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="row">
                                                            <input type="hidden" name="symptom_id" value="{{ $symptom->id }}">
                                                            <div class="col s12">
                                                                <div class="input-field">
                                                                    <select name="priority" id="priority" required>
                                                                        <option value="">Select</option>
                                                                        <option value="3" @if($disease->pivot->priority == 3) selected @endif>Higher</option>
                                                                        <option value="2" @if($disease->pivot->priority == 2) selected @endif>Medium</option>
                                                                        <option value="1" @if($disease->pivot->priority == 1) selected @endif>Lower</option>
                                                                    </select> 
                                                                    <label for="priority">Priority <span>*</span></label>
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
                                        </td>

                                        
                                    </tr>
                                    @endforeach
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