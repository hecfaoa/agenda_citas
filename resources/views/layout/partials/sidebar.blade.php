<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>
                <li class="submenu">
                    <a href="javascript:;"><span class="menu-side"><img
                                src="{{ URL::asset('/assets/img/icons/menu-icon-02.svg') }}" alt=""></span>
                        <span> Doctors </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('doctors') ? 'active' : '' }}" href="{{ url('doctors') }}">Doctor
                                List</a></li>
                        <li><a class="{{ Request::is('add-doctor') ? 'active' : '' }}"
                                href="{{ url('add-doctor') }}">Add Doctor</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:;"><span class="menu-side"><img
                                src="{{ URL::asset('/assets/img/icons/menu-icon-03.svg') }}" alt=""></span>
                        <span>Patients </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('patients') ? 'active' : '' }}"
                                href="{{ url('patients') }}">Patients List</a></li>
                        <li><a class="{{ Request::is('add-patient') ? 'active' : '' }}"
                                href="{{ url('add-patient') }}">Add Patients</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:;"><span class="menu-side"><img
                                src="{{ URL::asset('/assets/img/icons/menu-icon-04.svg') }}" alt=""></span>
                        <span> Appointments </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('appointments') ? 'active' : '' }}"
                                href="{{ url('appointments') }}">Appointment List</a></li>
                        <li><a class="{{ Request::is('add-appointment') ? 'active' : '' }}"
                                href="{{ url('add-appointment') }}">Add appointments</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:;"><span class="menu-side"><img
                                src="{{ URL::asset('/assets/img/icons/menu-icon-05.svg') }}" alt=""></span>
                        <span> Doctor Schedule </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ Request::is('schedule') ? 'active' : '' }}"
                                href="{{ url('schedule') }}">Schedule List</a></li>
                        <li><a class="{{ Request::is('add-schedule') ? 'active' : '' }}"
                                href="{{ url('add-schedule') }}">Add Schedule</a></li>
                    </ul>
                </li>
            </ul>
            <div class="logout-btn">
                <a href="{{ url('login') }}"><span class="menu-side"><img
                            src="{{ URL::asset('/assets/img/icons/logout.svg') }}" alt=""></span>
                    <span>Logout</span></a>
            </div>
        </div>
    </div>
</div>
