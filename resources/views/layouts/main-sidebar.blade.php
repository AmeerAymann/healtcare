<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="{{ url('/' . ($page = 'index')) }}">
            <h3>
                Doctor.
            </h3>
        </a>

    </div>
    <div class="main-sidemenu">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                {{-- <div class="">
                    <img alt="user-img" class="avatar avatar-xl brround"
                        src="{{ URL::asset('assets/img/faces/6.jpg') }}"><span
                        class="avatar-status profile-status bg-green"></span>
                </div> --}}
                <div class="user-info">
                    <h4 class="font-weight-semibold mt-3 mb-0">
                        {{ Auth::user()->name }}</h4>
                    <span class="mb-0 text-muted">{{ __('dash.username') }}: {{ Auth::user()->username }}</span>
                    <br />
                    <span class="mb-0 text-muted">{{ __('dash.email') }}: {{ Auth::user()->email }}</span>
                </div>
            </div>
        </div>
        <ul class="side-menu">
            <li class="side-item side-item-category">
                {{ __('dash.dash') }}
            </li>
            <li class="slide">
                <a class="side-menu__item" href="{{ url('/' . ($page = 'dashboard/home')) }}"><svg
                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                        <path
                            d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                    </svg><span class="side-menu__label">{{ __('dash.home') }}</span></a>
            </li>






            @can('students')
                {{-- <li class="side-item side-item-category">{{ __('dash.students') }}</li> --}}
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}">
                        <i class="fa fa-solid fa-users"></i>
                        <span class="side-menu__label">{{ __('dash.students') }}</span><i
                            class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        @can('students')
                            <li><a class="slide-item" href="{{ url('/' . ($page = 'dashboard/students')) }}">
                                    {{ __('dash.students') }} </a>
                            </li>
                        @endcan



                        @can('add students')
                            <li><a class="slide-item" href="{{ url('/' . ($page = 'dashboard/students/create')) }}">
                                    {{ __('dash.add') }} </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan


            @can('teachers')
                {{-- <li class="side-item side-item-category">{{ __('dash.teachers') }}</li> --}}
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}">
                        <i class="far fa-address-card"></i> <span
                            class="side-menu__label">{{ __('dash.teachers') }}</span><i
                            class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        @can('teachers')
                            <li><a class="slide-item" href="{{ url('/' . ($page = 'dashboard/teachers')) }}">
                                    {{ __('dash.teachers') }} </a>
                            </li>
                        @endcan

                        @can('add teachers')
                            <li><a class="slide-item" href="{{ url('/' . ($page = 'dashboard/teachers/create')) }}">
                                    {{ __('dash.add') }} </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan





            @can('subscriptions')
                <li class="side-item side-item-category">{{ __('dash.subscriptions') }}</li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}">
                        <i class="fas fa-users"></i><span
                            class="side-menu__label">{{ __('dash.subscriptions') }}</span><i
                            class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        @can('subscriptions')
                            <li><a class="slide-item" href="{{ url('/' . ($page = 'dashboard/subscriptions')) }}">
                                    {{ __('dash.subscriptions') }} </a>
                            </li>
                        @endcan

                        @can('add subscriptions')
                            <li><a class="slide-item"
                                    href="{{ url('/' . ($page = 'dashboard/subscriptions/create')) }}">{{ __('dash.add') }}
                                </a></li>
                        @endcan
                    </ul>
                </li>
            @endcan

            @can('users')
                <li class="side-item side-item-category">{{ __('dash.users') }}</li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}">
                        <i class="fas fa-users"></i><span class="side-menu__label">{{ __('dash.users') }}</span><i
                            class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        @can('userList')
                            <li><a class="slide-item" href="{{ url('/' . ($page = 'dashboard/users')) }}">
                                    {{ __('dash.users') }} </a>
                            </li>
                        @endcan

                        {{-- @can('usersRoles')
                            <li><a class="slide-item"
                                    href="{{ url('/' . ($page = 'dashboard/roles')) }}">{{ __('dash.roles') }} </a></li>
                        @endcan --}}
                    </ul>
                </li>
            @endcan

            @can('setting')
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}">
                        <i class="fas fa-cog"></i>
                        <span class="side-menu__label">{{ __('dash.setting') }}</span><i
                            class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">


                        @can('section')
                            <li><a class="slide-item" href="{{ url('/' . ($page = 'dashboard/sections')) }}">
                                    {{ __('dash.section') }}

                                </a>
                            </li>
                        @endcan

                    </ul>
                </li>

            @endcan





            <li class="slide">
                <a class="side-menu__item" href="{{ route('profile.show') }}">
                    <i class="fas fa-user"></i>
                    <span class="side-menu__label">{{ __('dash.Profile') }}</span></a>
            </li>


        </ul>
    </div>
</aside>
<!-- main-sidebar -->
