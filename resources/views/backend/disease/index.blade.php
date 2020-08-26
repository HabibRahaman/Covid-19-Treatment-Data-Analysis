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
                                                        <label for="name">Country Name (English)<span>*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col s12">
                                                    <div class="input-field">
                                                        <input type="text" name="bn_name" id="bn_name" required>
                                                        <label for="bn_name">Country Name (Bangla)<span>*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col s12">
                                                    <div class="chips tag_chips"></div>
                                                </div>
                                                <div class="alltages"></div>

                                                <div class="col s12">
                                                    <div class="chips bn_tag_chips"></div>
                                                </div>
                                                <div class="bn_alltages"></div>
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
                            <table id="row_create_call" class="table table-striped table-bordered display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Tag</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($countries as $country)
                                    <tr>
                                        <td>{{ $country->getTranslation('name', 'en') }} | {{ $country->getTranslation('name', 'bn') }}</td>
                                        <td>
                                            <div class="chip">
                                                {{ $country->getTranslation('tag', 'en') }}
                                            </div>
                                            <div class="chip">
                                                {{ $country->getTranslation('tag', 'bn') }}
                                            </div>
                                        </td>
                                        <td>
                                            @if($country->status == 1)
                                            <span class="new badge blue">Active</span>
                                            @else
                                            <span class="new badge red">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                        <a class="waves-effect waves-light btn btn-small green modal-trigger edit-btn" href="#edititem-{{ $country->id }}" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="fas fa-edit "></i>
                                        </a>

                                        {{-- <a class="waves-effect waves-light btn btn-small blue"><i class="fas fa-eye"></i></a> --}}
                                        <a class="waves-effect waves-light btn btn-small red" data-toggle="tooltip" data-placement="top" title="Delete"
                                            onclick="alertFunction('delete',{{$country->id}});">
                                           <i class="fas fa-trash-alt"></i>
                                        </a>
                                        <form id="delete{{$country->id}}" action="{{ route($route.'destroy', [$country->id]) }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            @method('DELETE')
                                        </form>

                                        <!-- ================================ -->
                                        <!-- Edit Item Modal -->
                                        <!-- ================================ -->
                                        <!-- Modal Structure -->
                                        <div id="edititem-{{ $country->id }}" class="modal">
                                            <div class="modal-content">
                                            <div class="card">
                                                <div class="card-content">
                                                    <h5 class="card-title activator">Edit {{ $title }}</h5>
                                                    <form  action="{{ route($route.'update', [$country->id]) }}" method="post" novalidate>
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="country">
                                                            <div class="col s12">
                                                                <div class="input-field">
                                                                    <input type="text" name="name" id="edit_name{{$country->id}}" value="{{ $country->getTranslation('name', 'en') }}" required>
                                                                    <label for="edit_name{{$country->id}}">Country Name (English)<span>*</span></label>
                                                                </div>
                                                                <div class="input-field">
                                                                    <input type="text" name="bn_name" id="edit_bn_name{{$country->id}}" value="{{ $country->getTranslation('name', 'bn') }}" required>
                                                                    <label for="edit_bn_name{{$country->id}}">Country Name (Bangla)<span>*</span></label>
                                                                </div>
                                                            </div>

                                                            <div class="col s12">
                                                                <div class="chips tag_chips">
                                                                </div>
                                                            </div>

                                                            <div class="alltages"></div>
                                                            <span style="display: none" class="oldtagname" spantagname="{{ $country->getTranslation('tag', 'en') }}"></span>

                                                            <div class="col s12">
                                                                <div class="chips bn_tag_chips">
                                                                </div>
                                                            </div>

                                                            <div class="bn_alltages"></div>
                                                            <span style="display: none" class="bn_oldtagname" spantagname="{{ $country->getTranslation('tag', 'bn') }}"></span>

                                                            <div class="col s12">
                                                                <div class="input-field">
                                                                    <select name="status" id="status{{$country->id}}">
                                                                        <option value="1" @if( $country->status == 1 ) selected @endif>Active</option>
                                                                        <option value="0" @if( $country->status == 0 ) selected @endif>Inactive</option>
                                                                    </select>
                                                                    <label for="status{{$country->id}}">Select Status</label>
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
                                </tbody>
                            </table>

                            <div class="pagination">
                                {{ $countries->links() }}
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
<script src="{{ asset('backend/extra-libs/prism/prism.js') }}"></script>

@include('backend.common.includes.tag-chips')

<script type="text/javascript">
    $(document).ready(function(){
        ChipFunction();
    });

</script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#addnew").validate({
            rules: {
                name: "required",
                tag: "required",
            }
        });
    });
</script>
@endsection