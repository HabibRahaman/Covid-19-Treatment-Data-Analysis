        <aside class="left-sidebar">
            <ul id="slide-out" class="sidenav">
                
                <li>
                    <ul class="collapsible">
                        <li class="small-cap"><span class="hide-menu">ADMIN</span></li>

                        <li>
                            <a href="{{ url('dashboard/index') }}" class="collapsible-header"><i class="material-icons">dashboard</i><span class="hide-menu"> Dashboard </span></a>
                        </li>


                        @can('Diseases')
                        <li>
                            <a href="{{ route('admin.disease.index') }}" class="collapsible-header"><i class="material-icons">verified_user</i><span class="hide-menu"> Diseases </span></a>
                        </li>
                        @endcan

                        @can('Symptoms')
                        <li>
                            <a href="{{ route('admin.symptom.index') }}" class="collapsible-header"><i class="material-icons">verified_user</i><span class="hide-menu"> Symptoms </span></a>
                        </li>
                        @endcan

                        @can('Roles')
                        <li>
                            <a href="{{ route('admin.role.index') }}" class="collapsible-header"><i class="material-icons">verified_user</i><span class="hide-menu"> Roles </span></a>
                        </li>
                        @endcan

                        @can('Users')
                        <li>
                            <a href="{{ route('admin.user.index') }}" class="collapsible-header"><i class="material-icons">people</i><span class="hide-menu"> Users </span></a>
                        </li>
                        @endcan

                        <li>
                            <a href="{{ route('admin.profile.index') }}" class="collapsible-header"><i class="material-icons">perm_identity</i><span class="hide-menu"> Profile </span></a>
                        </li>

                        {{-- <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">radio_button_unchecked</i><span class="hide-menu"> Elements</span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="{{ url('dashboard/form') }}"><i class="material-icons">adjust</i><span class="hide-menu">Form</span></a></li>
                                    <li><a href="{{ url('dashboard/table') }}"><i class="material-icons">adjust</i><span class="hide-menu">Table</span></a></li>
                                </ul>
                            </div>
                        </li> --}}
                        
                    </ul>
                </li>
            </ul>
        </aside>
        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->