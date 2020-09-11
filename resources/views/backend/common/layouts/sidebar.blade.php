        <aside class="left-sidebar">
            <ul id="slide-out" class="sidenav">
                
                <li>
                    <ul class="collapsible">
                        <li class="small-cap"><span class="hide-menu">ADMIN</span></li>

                        <li>
                            <a href="{{ url('dashboard/index') }}" class="collapsible-header"><i class="fas fa-clinic-medical"></i><span class="hide-menu"> Dashboard </span></a>
                        </li>


                        @can('Diseases')
                        <li>
                            <a href="{{ route('admin.disease.index') }}" class="collapsible-header"><i class="fas fa-viruses"></i><span class="hide-menu"> Diseases </span></a>
                        </li>
                        @endcan

                        @can('Symptoms')
                        <li>
                            <a href="{{ route('admin.symptom.index') }}" class="collapsible-header"><i class="fas fa-head-side-cough"></i><span class="hide-menu"> Symptoms </span></a>
                        </li>
                        @endcan

                        @can('Medicines')
                        <li>
                            <a href="{{ route('admin.medicine.index') }}" class="collapsible-header"><i class="fas fa-pills"></i><span class="hide-menu"> Medicines </span></a>
                        </li>
                        @endcan

                        @can('Conditions')
                        <li>
                            <a href="{{ route('admin.condition.index') }}" class="collapsible-header"><i class="fas fa-procedures"></i><span class="hide-menu"> Medical Conditions </span></a>
                        </li>
                        @endcan

                        @can('HealthCares')
                        <li>
                            <a href="{{ route('admin.healthcare.index') }}" class="collapsible-header"><i class="fas fa-hand-holding-medical"></i><span class="hide-menu"> Health Care </span></a>
                        </li>
                        @endcan

                        @can('Blogs')
                        <li>
                            <a href="{{ route('admin.blog.index') }}" class="collapsible-header"><i class="fas fa-comment-medical"></i><span class="hide-menu"> Info Blogs </span></a>
                        </li>
                        @endcan

                        @can('Roles')
                        <li>
                            <a href="{{ route('admin.role.index') }}" class="collapsible-header"><i class="fas fa-user-tag"></i><span class="hide-menu"> Roles </span></a>
                        </li>
                        @endcan

                        @can('Users')
                        <li>
                            <a href="{{ route('admin.user.index') }}" class="collapsible-header"><i class="fas fa-users"></i><span class="hide-menu"> Users </span></a>
                        </li>
                        @endcan

                        <li>
                            <a href="{{ route('admin.profile.index') }}" class="collapsible-header"><i class="fas fa-user-md"></i><span class="hide-menu"> Profile </span></a>
                        </li>
                        
                    </ul>
                </li>
            </ul>
        </aside>
        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->