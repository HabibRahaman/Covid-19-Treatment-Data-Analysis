        <aside class="left-sidebar">
            <ul id="slide-out" class="sidenav">
                
                <li>
                    <ul class="collapsible">
                        <li class="small-cap"><span class="hide-menu">ADMIN</span></li>

                        <li>
                            <a href="{{ url('dashboard/index') }}" class="collapsible-header"><i><span class="fas fa-clinic-medical"></span></i><span class="hide-menu"> Dashboard </span></a>
                        </li>


                        @can('Diseases')
                        <li>
                            <a href="{{ route('admin.disease.index') }}" class="collapsible-header"><i><span class="fas fa-viruses"></span></i><span class="hide-menu"> Diseases </span></a>
                        </li>
                        @endcan

                        @can('Symptoms')
                        <li>
                            <a href="{{ route('admin.symptom.index') }}" class="collapsible-header"><i><span class="fas fa-head-side-cough"></span></i><span class="hide-menu"> Symptoms </span></a>
                        </li>
                        @endcan

                        @can('Medicines')
                        <li>
                            <a href="{{ route('admin.medicine.index') }}" class="collapsible-header"><i><span class="fas fa-pills"></span></i><span class="hide-menu"> Medicines </span></a>
                        </li>
                        @endcan

                        @can('MedicalConditions')
                        <li>
                            <a href="{{ route('admin.condition.index') }}" class="collapsible-header"><i><span class="fas fa-procedures"></span></i><span class="hide-menu"> Medical Conditions </span></a>
                        </li>
                        @endcan

                        @can('HealthCares')
                        <li>
                            <a href="{{ route('admin.healthcare.index') }}" class="collapsible-header"><i><span class="fas fa-hand-holding-medical"></span></i><span class="hide-menu"> Health Care </span></a>
                        </li>
                        @endcan

                        @can('InfoBlogs')
                        <li>
                            <a href="{{ route('admin.blog.index') }}" class="collapsible-header"><i><span class="fas fa-comment-medical"></span></i><span class="hide-menu"> Info Blogs </span></a>
                        </li>
                        @endcan

                        <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i><span class="fas fa-vial"></span></i><span class="hide-menu"> Testing Tool</span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li>
                                        <a href="{{ route('admin.testing-disease.index') }}" class="hide-menu"><i><span class="fas fa-viruses"></span></i><span class="hide-menu"> Diseases </span></a>
                                    </li>

                                    <li>
                                        <a href="{{ route('admin.testing-symptom.index') }}" class="hide-menu"><i><span class="fas fa-head-side-cough"></span></i><span class="hide-menu"> Symptoms </span></a>
                                    </li>

                                    <li>
                                        <a href="{{ route('admin.testing-priority.index') }}" class="hide-menu"><i><span class="fas fa-tasks"></span></i><span class="hide-menu"> Priorities </span></a>
                                    </li>

                                    <li>
                                        <a href="#" class="hide-menu"><i><span class="fas fa-clipboard"></span></i><span class="hide-menu"> Test Report </span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        @can('Roles')
                        <li>
                            <a href="{{ route('admin.role.index') }}" class="collapsible-header"><i><span class="fas fa-user-tag"></span></i><span class="hide-menu"> Roles </span></a>
                        </li>
                        @endcan

                        @can('Users')
                        <li>
                            <a href="{{ route('admin.user.index') }}" class="collapsible-header"><i><span class="fas fa-users"></span></i><span class="hide-menu"> Users </span></a>
                        </li>
                        @endcan

                        <li>
                            <a href="{{ route('admin.profile.index') }}" class="collapsible-header"><i><span class="fas fa-user-md"></span></i><span class="hide-menu"> Profile </span></a>
                        </li>
                        
                    </ul>
                </li>
            </ul>
        </aside>
        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->