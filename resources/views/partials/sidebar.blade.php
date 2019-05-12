@inject('request', 'Illuminate\Http\Request')


<div class="app-sidebar__user">
    <i class="fa fa-user-circle-o fa-2x"></i>
    <div>
         <p class="app-sidebar__user-name text-center">&nbsp;{{Auth::user()->name}}</p>
    </div>
</div>
<ul class="app-menu">
    <li >
        <a href="{{ url('/') }}"  class="app-menu__item {{ $request->segment(2) == 'home' ? 'active' : '' }}" >
            <i class="app-menu__icon fa fa-dashboard"></i><span
                    class="app-menu__label">&nbsp;To website</span>

        </a>
    </li>

    @can('client_access')
        <li class="" >
            <a href="{{ route('admin.clients.index') }}" class="app-menu__item {{ $request->segment(2) == 'clients' ? 'active' : '' }}" >
                <i class="app-menu__icon fa fa-ambulance"></i><span
                        class="app-menu__label">&nbsp;@lang('quickadmin.clients.title')</span>
            </a>
        </li>
    @endcan

    @can('employee_access')
        <li class="">
            <a href="{{ route('admin.employees.index') }} " class="app-menu__item {{ $request->segment(2) == 'employees' ? 'active' : '' }}" >
                <i class="app-menu__icon fa fa-suitcase"></i><span
                        class="app-menu__label">&nbsp;@lang('quickadmin.employees.title')</span>
            </a>
        </li>
    @endcan

    @can('working_hour_access')
        <li class="">
            <a href="{{ route('admin.working_hours.index') }}" class="app-menu__item {{ $request->segment(2) == 'working_hours' ? 'active' : '' }}" >
                <i class="app-menu__icon fa fa-hourglass"></i><span
                        class="app-menu__label">&nbsp;@lang('quickadmin.working-hours.title')</span>
            </a>
        </li>
    @endcan
    @can('service_access')
        <li class="">
            <a href="{{ route('admin.services.index') }}" class="app-menu__item {{ $request->segment(2) == 'services' ? 'active' : '' }}" >
                <i class="app-menu__icon fa fa-hourglass-o"></i><span
                        class="app-menu__label">&nbsp;@lang('quickadmin.services.title')</span>
            </a>
        </li>
    @endcan

    @can('appointment_access')
        <li class="">
            <a href="{{ route('admin.appointments.index') }}" class="app-menu__item {{ $request->segment(2) == 'appointments' ? 'active' : '' }}" >
                <i class="app-menu__icon fa fa-calendar"></i><span
                        class="app-menu__label">&nbsp;@lang('quickadmin.appointments.title')</span>
            </a>
        </li>
    @endcan
    @can('comments_access')
        <li class="">
            <a href="{{ route('admin.comments.index') }}" class="app-menu__item {{ $request->segment(2) == 'comments' ? 'active' : '' }}" >
                <i class="app-menu__icon fa fa-comments fa-lg"></i><span
                        class="app-menu__label">&nbsp;
                    @lang('quickadmin.comments.title')</span>
            </a>
        </li>
    @endcan
    @can('user_management_access')
    <li class="treeview {{ $request->segment(2) == 'roles' ? ' is-expanded' : '' }} {{ $request->segment(2) == 'users' ? 'is-expanded' : '' }}">
        <a class="app-menu__item" href="{{ route('admin.roles.index') }}" data-toggle="treeview">
            <i class="app-menu__icon fa fa-users"></i>
            <span class="app-menu__label">&nbsp;@lang('quickadmin.user-management.title')</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
        </a>
        <ul class="treeview-menu">

            @can('role_access')
            <li class="">
                <a class="treeview-item {{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}" href="{{ route('admin.roles.index') }}">
                    <i class="icon fa fa-briefcase"></i>
                    &nbsp;@lang('quickadmin.roles.title')
                </a>
            </li>
            @endcan

            @can('user_access')
            <li class="">
                <a class="treeview-item {{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}" href="{{ route('admin.users.index') }}">
                    <i class="icon fa fa-user"></i>
                    &nbsp;@lang('quickadmin.users.title')
                </a>
            </li>
            @endcan
        </ul>
    </li>
    @endcan



    <li class="">
        <a href="{{ route('auth.change_password') }}" class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }} app-menu__item">
            <i class="fa fa-key"></i>
            <span class="app-menu__label">&nbsp; Change password</span>
        </a>
    </li>

    <li>
        <a href="#logout" onclick="$('#logout').submit();" class="app-menu__item">
            <i class="fa fa-arrow-left"></i>
            <span class="app-menu__label">&nbsp; @lang('quickadmin.qa_logout')</span>
        </a>
    </li>

    {!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
    <button type="submit">@lang('quickadmin.logout')</button>
    {!! Form::close() !!}
</ul>



