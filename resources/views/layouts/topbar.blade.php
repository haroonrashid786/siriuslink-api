<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <img src="{{ URL("assets/images/Logo.png") }}" />
                {{-- <a href="index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('/assets/images/logo.svg') }}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{ URL::asset('/assets/images/logo-dark.png') }}" alt="" height="17">
                </span>
                </a>

                <a href="index" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('/assets/images/logo-light.svg') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('/assets/images/logo-light.png') }}" alt="" height="19">
                    </span>
                </a> --}}
            </div>

            {{-- <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button> --}}

            <!-- App Search-->
            {{-- <form class="app-search d-none d-lg-block">
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="@lang('translation.Search')">
                <span class="bx bx-search-alt"></span>
            </div>
        </form> --}}

            {{-- <div class="dropdown dropdown-mega d-none d-lg-block ms-2">
            <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                <span key="t-megamenu">@lang('translation.Mega_Menu')</span>
                <i class="mdi mdi-chevron-down"></i>
            </button>
            <div class="dropdown-menu dropdown-megamenu">
                <div class="row">
                    <div class="col-sm-8">

                        <div class="row">
                            <div class="col-md-4">
                                <h5 class="font-size-14 mt-0" key="t-ui-components">@lang('translation.UI_Components')</h5>
                                <ul class="list-unstyled megamenu-list">
                                    <li>
                                        <a href="javascript:void(0);" key="t-lightbox">@lang('translation.Lightbox')</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-range-slider">@lang('translation.Range_Slider')</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-sweet-alert">@lang('translation.Sweet_Alert')</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-rating">@lang('translation.Rating')</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-forms">@lang('translation.Forms')</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-tables">@lang('translation.Tables')</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-charts">@lang('translation.Charts')</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-4">
                                <h5 class="font-size-14 mt-0" key="t-applications">@lang('translation.Applications')</h5>
                                <ul class="list-unstyled megamenu-list">
                                    <li>
                                        <a href="javascript:void(0);" key="t-ecommerce">@lang('translation.Ecommerce')</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-calendar">@lang('translation.Calendars')</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-email">@lang('translation.Email')</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-projects">@lang('translation.Projects')</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-tasks">@lang('translation.Tasks')</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-contacts">@lang('translation.Contacts')</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-4">
                                <h5 class="font-size-14 mt-0" key="t-extra-pages">@lang('translation.Extra_Pages')</h5>
                                <ul class="list-unstyled megamenu-list">
                                    <li>
                                        <a href="javascript:void(0);" key="t-light-sidebar">@lang('translation.Light_Sidebar')</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-compact-sidebar">@lang('translation.Compact_Sidebar')</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-horizontal">@lang('translation.Horizontal_layout')</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-maintenance">@lang('translation.Maintenance')</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-coming-soon">@lang('translation.Coming_Soon')</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-timeline">@lang('translation.Timeline')</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-faqs">@lang('translation.FAQs')</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-6">
                                <h5 class="font-size-14 mt-0" key="t-ui-components">@lang('translation.UI_Components')</h5>
                                <ul class="list-unstyled megamenu-list">
                                    <li>
                                        <a href="javascript:void(0);" key="t-lightbox">@lang('translation.Lightbox')</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-range-slider">@lang('translation.Range_Slider')</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-sweet-alert">@lang('translation.Sweet_Alert')</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-rating">@lang('translation.Rating')</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-forms">@lang('translation.Forms')</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-tables">@lang('translation.Tables')</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" key="t-charts">@lang('translation.Charts')</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-sm-5">
                                <div>
                                    <img src="{{ URL::asset ('/assets/images/megamenu-img.png') }}" alt="" class="img-fluid mx-auto d-block">
        </div>
    </div>
    </div>
    </div>
    </div>

    </div>
    </div> --}}
    </div>

    <div class="d-flex">

        {{-- <div class="dropdown d-inline-block d-lg-none ms-2">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="mdi mdi-magnify"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                aria-labelledby="page-header-search-dropdown">

                <form class="p-3">
                    <div class="form-group m-0">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="@lang('translation.Search')" aria-label="Search input">

                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>s
                        </div>
                    </div>
                </form>
            </div>
        </div> --}}

        {{-- <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item waves-effect"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @switch(Session::get('lang'))
                    @case('ru')
                        <img src="{{ URL::asset('/assets/images/flags/russia.jpg')}}" alt="Header Language" height="16">
        @break
        @case('it')
        <img src="{{ URL::asset('/assets/images/flags/italy.jpg')}}" alt="Header Language" height="16">
        @break
        @case('de')
        <img src="{{ URL::asset('/assets/images/flags/germany.jpg')}}" alt="Header Language" height="16">
        @break
        @case('es')
        <img src="{{ URL::asset('/assets/images/flags/spain.jpg')}}" alt="Header Language" height="16">
        @break
        @default
        <img src="{{ URL::asset('/assets/images/flags/us.jpg')}}" alt="Header Language" height="16">
        @endswitch
        </button>
        <div class="dropdown-menu dropdown-menu-end">

            <!-- item-->
            <a href="{{ url('index/en') }}" class="dropdown-item notify-item language" data-lang="eng">
                <img src="{{ URL::asset ('/assets/images/flags/us.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
            </a>
            <!-- item-->
            <a href="{{ url('index/es') }}" class="dropdown-item notify-item language" data-lang="sp">
                <img src="{{ URL::asset ('/assets/images/flags/spain.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
            </a>

            <!-- item-->
            <a href="{{ url('index/de') }}" class="dropdown-item notify-item language" data-lang="gr">
                <img src="{{ URL::asset ('/assets/images/flags/germany.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
            </a>

            <!-- item-->
            <a href="{{ url('index/it') }}" class="dropdown-item notify-item language" data-lang="it">
                <img src="{{ URL::asset ('/assets/images/flags/italy.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
            </a>

            <!-- item-->
            <a href="{{ url('index/ru') }}" class="dropdown-item notify-item language" data-lang="ru">
                <img src="{{ URL::asset ('/assets/images/flags/russia.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
            </a>
        </div>
    </div> --}}

    {{-- <div class="dropdown d-none d-lg-inline-block ms-1">
            <button type="button" class="btn header-item noti-icon waves-effect"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-customize"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <div class="px-lg-2">
                    <div class="row g-0">
                        <div class="col">
                            <a class="dropdown-icon-item" href="#">
                                <img src="{{ URL::asset ('/assets/images/brands/github.png') }}" alt="Github">
    <span>GitHub</span>
    </a>
    </div>
    <div class="col">
        <a class="dropdown-icon-item" href="#">
            <img src="{{ URL::asset ('/assets/images/brands/bitbucket.png') }}" alt="bitbucket">
            <span>Bitbucket</span>
        </a>
    </div>
    <div class="col">
        <a class="dropdown-icon-item" href="#">
            <img src="{{ URL::asset ('/assets/images/brands/dribbble.png') }}" alt="dribbble">
            <span>Dribbble</span>
        </a>
    </div>
    </div>

    <div class="row g-0">
        <div class="col">
            <a class="dropdown-icon-item" href="#">
                <img src="{{ URL::asset ('/assets/images/brands/dropbox.png') }}" alt="dropbox">
                <span>Dropbox</span>
            </a>
        </div>
        <div class="col">
            <a class="dropdown-icon-item" href="#">
                <img src="{{ URL::asset ('/assets/images/brands/mail_chimp.png') }}" alt="mail_chimp">
                <span>Mail Chimp</span>
            </a>
        </div>
        <div class="col">
            <a class="dropdown-icon-item" href="#">
                <img src="{{ URL::asset ('/assets/images/brands/slack.png') }}" alt="slack">
                <span>Slack</span>
            </a>
        </div>
    </div>
    </div>
    </div>
    </div> --}}

    {{-- <div class="dropdown d-none d-lg-inline-block ms-1">
            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                <i class="bx bx-fullscreen"></i>
            </button>
        </div> --}}

    <div class="dropdown d-inline-block">
        {{-- <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-bell bx-tada"></i>
                <span class="badge bg-danger rounded-pill">3</span>
            </button> --}}
        {{-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                aria-labelledby="page-header-notifications-dropdown">
                <div class="p-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-0" key="t-notifications"> @lang('translation.Notifications') </h6>
                        </div>
                        <div class="col-auto">
                            <a href="#!" class="small" key="t-view-all"> @lang('translation.View_All')</a>
                        </div>
                    </div>
                </div>
                <div data-simplebar style="max-height: 230px;">
                    <a href="" class="text-reset notification-item">
                        <div class="d-flex">
                            <div class="avatar-xs me-3">
                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                    <i class="bx bx-cart"></i>
                                </span>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mt-0 mb-1" key="t-your-order">@lang('translation.Your_order_is_placed')</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1" key="t-grammer">@lang('translation.If_several_languages_coalesce_the_grammar')</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">@lang('translation.3_min_ago')</span></p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="text-reset notification-item">
                        <div class="d-flex">
                            <img src="{{ URL::asset ('/assets/images/users/avatar-3.jpg') }}"
        class="me-3 rounded-circle avatar-xs" alt="user-pic">
        <div class="flex-grow-1">
            <h6 class="mt-0 mb-1">@lang('translation.James_Lemire')</h6>
            <div class="font-size-12 text-muted">
                <p class="mb-1" key="t-simplified">@lang('translation.It_will_seem_like_simplified_English')</p>
                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">@lang('translation.1_hours_ago')</span></p>
            </div>
        </div>
    </div>
    </a>
    <a href="" class="text-reset notification-item">
        <div class="d-flex">
            <div class="avatar-xs me-3">
                <span class="avatar-title bg-success rounded-circle font-size-16">
                    <i class="bx bx-badge-check"></i>
                </span>
            </div>
            <div class="flex-grow-1">
                <h6 class="mt-0 mb-1" key="t-shipped">@lang('translation.Your_item_is_shipped')</h6>
                <div class="font-size-12 text-muted">
                    <p class="mb-1" key="t-grammer">@lang('translation.If_several_languages_coalesce_the_grammar')</p>
                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">@lang('translation.3_min_ago')</span></p>
                </div>
            </div>
        </div>
    </a>

    <a href="" class="text-reset notification-item">
        <div class="d-flex">
            <img src="{{ URL::asset ('/assets/images/users/avatar-4.jpg') }}" class="me-3 rounded-circle avatar-xs" alt="user-pic">
            <div class="flex-grow-1">
                <h6 class="mt-0 mb-1">@lang('translation.Salena_Layfield')</h6>
                <div class="font-size-12 text-muted">
                    <p class="mb-1" key="t-occidental">@lang('translation.As_a_skeptical_Cambridge_friend_of_mine_occidental')</p>
                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">@lang('translation.1_hours_ago')</span></p>
                </div>
            </div>
        </div>
    </a>
    </div>
    <div class="p-2 border-top d-grid">
        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
            <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">@lang('translation.View_More')</span>
        </a>
    </div>
    </div> --}}
    </div>

    <div class="dropdown d-inline-block">
        @auth
        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="d-none d-xl-inline-block ms-1 mr-3" key="t-henry">{{ucfirst(Auth::user()->full_name)}}</span>

            <img class="rounded-circle header-profile-user" src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-9.png') }}" alt="Header Avatar">
            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <a class="dropdown-item" href="{{ route('settings') }}"><i class="bx bx-cog font-size-16 align-middle me-1"></i> <span key="t-my-wallet">Settings</span></a>
            <!-- item-->
            {{-- <a class="dropdown-item" href="contacts-profile"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">@lang('translation.Profile')</span></a>

                <a class="dropdown-item d-block" href="#" data-bs-toggle="modal" data-bs-target=".change-password"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">@lang('translation.Settings')</span></a>
                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">@lang('translation.Lock_screen')</span></a> --}}
            {{-- <div class="dropdown-divider"></div> --}}
            <a class="dropdown-item text-danger" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        @endauth
    </div>

    {{-- <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                <i class="bx bx-cog bx-spin"></i>
            </button>
        </div> --}}

    </div>
    </div>
</header>

@auth
<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse active" id="topnav-menu-content">
                <ul class="navbar-nav active">

                    <li class="nav-item dropdown  d-flex align-items-center">
                        <a class="nav-link dropdown-toggle arrow-none d-flex align-items-center" href="{{ route('home') }}" id="topnav-dashboard" role="button">
                            <i class="bx bx-home-circle me-2"></i><span key="t-dashboards">Dashboard</span>
                            {{-- <div class="arrow-down"></div> --}}
                        </a>
                        {{-- <div class="dropdown-menu" aria-labelledby="topnav-dashboard"> --}}

                        {{-- <a href="index.html" class="dropdown-item" key="t-default">Default</a> --}}
                        {{-- <a href="dashboard-saas.html" class="dropdown-item" key="t-saas">Saas</a> --}}
                        {{-- <a href="dashboard-crypto.html" class="dropdown-item" key="t-crypto">Crypto</a> --}}
                        {{-- <a href="dashboard-blog.html" class="dropdown-item" key="t-blog">Blog</a> --}}
                        {{-- </div> --}}
                    </li>
                    {{-- <li class="nav-item dropdown  d-flex align-items-center">
                        <a class="nav-link dropdown-toggle arrow-none d-flex align-items-center" href="{{  route('services')}}" id="topnav-uielement" role="button">
                    <i class="bx bx-users me-2"></i>
                    <span key="t-ui-elements">Services </span>
                    <div class="arrow-down"></div>
                    </a>
                    </li> --}}
                    {{-- <li class="nav-item dropdown  d-flex align-items-center">
                        <a class="nav-link dropdown-toggle arrow-none d-flex align-items-center" href="{{ route('carriers') }}" id="topnav-dashboard" role="button">
                    <i class="fa fa-users me-2"></i><span key="t-dashboards">Users</span>
                    {{-- <div class="arrow-down"></div> --}}
                    {{-- </a> --}}
                    {{-- <div class="dropdown-menu" aria-labelledby="topnav-dashboard"> --}}

                    {{-- <a href="index.html" class="dropdown-item" key="t-default">Default</a> --}}
                    {{-- <a href="dashboard-saas.html" class="dropdown-item" key="t-saas">Saas</a> --}}
                    {{-- <a href="dashboard-crypto.html" class="dropdown-item" key="t-crypto">Crypto</a> --}}
                    {{-- <a href="dashboard-blog.html" class="dropdown-item" key="t-blog">Blog</a> --}}
                    {{-- </div> --}}
                    {{-- </li> --}}

                    {{-- <li class="nav-item dropdown  d-flex align-items-center">
                        <a class="nav-link dropdown-toggle arrow-none d-flex align-items-center" href="{{ route('vehicle_types') }}" id="topnav-uielement" role="button">
                    <i class="bx bx-cycling me-2"></i>
                    <span key="t-ui-elements"> Vehicle Type</span> --}}
                    {{-- <div class="arrow-down"></div> --}}
                    {{-- </a> --}}

                    {{-- <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl" aria-labelledby="topnav-uielement"> --}}
                    {{-- <div class="row"> --}}
                    {{-- <div class="col-lg-4"> --}}
                    {{-- <div> --}}
                    {{-- <a href="ui-alerts.html" class="dropdown-item" key="t-alerts">Alerts</a> --}}
                    {{-- <a href="ui-buttons.html" class="dropdown-item" key="t-buttons">Buttons</a> --}}
                    {{-- <a href="ui-cards.html" class="dropdown-item" key="t-cards">Cards</a> --}}
                    {{-- <a href="ui-carousel.html" class="dropdown-item" key="t-carousel">Carousel</a> --}}
                    {{-- <a href="ui-dropdowns.html" class="dropdown-item" key="t-dropdowns">Dropdowns</a> --}}
                    {{-- <a href="ui-grid.html" class="dropdown-item" key="t-grid">Grid</a> --}}
                    {{-- <a href="ui-images.html" class="dropdown-item" key="t-images">Images</a> --}}
                    {{-- <a href="ui-lightbox.html" class="dropdown-item" key="t-lightbox">Lightbox</a> --}}
                    {{-- </div> --}}
                    {{-- </div> --}}
                    {{-- <div class="col-lg-4"> --}}
                    {{-- <div> --}}
                    {{-- <a href="ui-modals.html" class="dropdown-item" key="t-modals">Modals</a> --}}
                    {{-- <a href="ui-offcanvas.html" class="dropdown-item" key="t-offcanvas">Offcanvas</a> --}}
                    {{-- <a href="ui-rangeslider.html" class="dropdown-item" key="t-range-slider">Range Slider</a> --}}
                    {{-- <a href="ui-session-timeout.html" class="dropdown-item" key="t-session-timeout">Session Timeout</a> --}}
                    {{-- <a href="ui-progressbars.html" class="dropdown-item" key="t-progress-bars">Progress Bars</a> --}}
                    {{-- <a href="ui-placeholders.html" class="dropdown-item" key="t-placeholders">Placeholders</a> --}}
                    {{-- <a href="ui-sweet-alert.html" class="dropdown-item" key="t-sweet-alert">Sweet-Alert</a> --}}
                    {{-- <a href="ui-tabs-accordions.html" class="dropdown-item" key="t-tabs-accordions">Tabs &amp; Accordions</a> --}}
                    {{-- </div> --}}
                    {{-- </div> --}}
                    {{-- <div class="col-lg-4"> --}}
                    {{-- <div> --}}
                    {{-- <a href="ui-typography.html" class="dropdown-item" key="t-typography">Typography</a> --}}
                    {{-- <a href="ui-toasts.html" class="dropdown-item" key="t-toasts">Toasts</a> --}}
                    {{-- <a href="ui-video.html" class="dropdown-item" key="t-video">Video</a> --}}
                    {{-- <a href="ui-general.html" class="dropdown-item" key="t-general">General</a> --}}
                    {{-- <a href="ui-colors.html" class="dropdown-item" key="t-colors">Colors</a> --}}
                    {{-- <a href="ui-rating.html" class="dropdown-item" key="t-rating">Rating</a> --}}
                    {{-- <a href="ui-notifications.html" class="dropdown-item" key="t-notifications">Notifications</a> --}}
                    {{-- </div> --}}
                    {{-- </div> --}}
                    {{-- </div> --}}

                    {{-- </div> --}}
                    {{-- </li>
                    <li class="nav-item dropdown  d-flex align-items-center">
                        <a class="nav-link dropdown-toggle arrow-none d-flex align-items-center" href="{{ route('orders') }}" id="topnav-pages" role="button">
                    <i class="bx bx-store me-2"></i><span key="t-apps">Orders</span> --}}
                    {{-- <div class="arrow-down"></div> --}}
                    {{-- </a> --}}
                    {{-- </li>
                    <li class="nav-item dropdown  d-flex align-items-center">
                        <a class="nav-link dropdown-toggle arrow-none d-flex align-items-center" href="{{ route('services') }}" id="topnav-pages" role="button">
                    <i class="bx bx-store me-2"></i><span key="t-apps">Services</span>
                    {{-- <div class="arrow-down"></div> --}}
                    {{-- </a> --}}
                    {{-- <div class="dropdown-menu" aria-labelledby="topnav-pages"> --}}

                    {{-- <div class="dropdown"> --}}
                    {{-- <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email" role="button"> --}}
                    {{-- <span key="t-calendar">Calendar</span> <div class="arrow-down"></div> --}}
                    {{-- </a> --}}
                    {{-- <div class="dropdown-menu" aria-labelledby="topnav-email"> --}}
                    {{-- <a href="calendar.html" class="dropdown-item" key="t-tui-calendar">TUI Calendar</a> --}}
                    {{-- <a href="calendar-full.html" class="dropdown-item" key="t-full-calender">Full Calendar</a> --}}
                    {{-- </div> --}}
                    {{-- </div> --}}

                    {{-- <a href="chat.html" class="dropdown-item" key="t-chat">Chat</a> --}}
                    {{-- <a href="apps-filemanager.html" class="dropdown-item" key="t-file-manager">File Manager</a> --}}
                    {{-- <div class="dropdown"> --}}
                    {{-- <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email" role="button"> --}}
                    {{-- <span key="t-email">Email</span> <div class="arrow-down"></div> --}}
                    {{-- </a> --}}
                    {{-- <div class="dropdown-menu" aria-labelledby="topnav-email"> --}}
                    {{-- <a href="email-inbox.html" class="dropdown-item" key="t-inbox">Inbox</a> --}}
                    {{-- <a href="email-read.html" class="dropdown-item" key="t-read-email">Read Email</a> --}}

                    {{-- <div class="dropdown"> --}}
                    {{-- <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-blog" role="button"> --}}
                    {{-- <span key="t-email-templates">Templates</span> <div class="arrow-down"></div> --}}
                    {{-- </a> --}}
                    {{-- <div class="dropdown-menu" aria-labelledby="topnav-blog"> --}}
                    {{-- <a href="email-template-basic.html" class="dropdown-item" key="t-basic-action">Basic Action</a> --}}
                    {{-- <a href="email-template-alert.html" class="dropdown-item" key="t-alert-email">Alert Email</a> --}}
                    {{-- <a href="email-template-billing.html" class="dropdown-item" key="t-bill-email">Billing Email</a> --}}
                    {{-- </div> --}}
                    {{-- </div> --}}
                    {{-- </div> --}}
                    {{-- </div> --}}

                    {{-- <div class="dropdown"> --}}
                    {{-- <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce" role="button"> --}}
                    {{-- <span key="t-ecommerce">Ecommerce</span> <div class="arrow-down"></div> --}}
                    {{-- </a> --}}
                    {{-- <div class="dropdown-menu" aria-labelledby="topnav-ecommerce"> --}}
                    {{-- <a href="ecommerce-products.html" class="dropdown-item" key="t-products">Products</a> --}}
                    {{-- <a href="ecommerce-product-detail.html" class="dropdown-item" key="t-product-detail">Product Detail</a> --}}
                    {{-- <a href="ecommerce-orders.html" class="dropdown-item" key="t-orders">Orders</a> --}}
                    {{-- <a href="ecommerce-customers.html" class="dropdown-item" key="t-customers">Customers</a> --}}
                    {{-- <a href="ecommerce-cart.html" class="dropdown-item" key="t-cart">Cart</a> --}}
                    {{-- <a href="ecommerce-checkout.html" class="dropdown-item" key="t-checkout">Checkout</a> --}}
                    {{-- <a href="ecommerce-shops.html" class="dropdown-item" key="t-shops">Shops</a> --}}
                    {{-- <a href="ecommerce-add-product.html" class="dropdown-item" key="t-add-product">Add Product</a> --}}
                    {{-- </div> --}}
                    {{-- </div> --}}

                    {{-- <div class="dropdown"> --}}
                    {{-- <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-crypto" role="button"> --}}
                    {{-- <span key="t-crypto">Crypto</span> <div class="arrow-down"></div> --}}
                    {{-- </a> --}}
                    {{-- <div class="dropdown-menu" aria-labelledby="topnav-crypto"> --}}
                    {{-- <a href="crypto-wallet.html" class="dropdown-item" key="t-wallet">Wallet</a> --}}
                    {{-- <a href="crypto-buy-sell.html" class="dropdown-item" key="t-buy">Buy/Sell</a> --}}
                    {{-- <a href="crypto-exchange.html" class="dropdown-item" key="t-exchange">Exchange</a> --}}
                    {{-- <a href="crypto-lending.html" class="dropdown-item" key="t-lending">Lending</a> --}}
                    {{-- <a href="crypto-orders.html" class="dropdown-item" key="t-orders">Orders</a> --}}
                    {{-- <a href="crypto-kyc-application.html" class="dropdown-item" key="t-kyc">KYC Application</a> --}}
                    {{-- <a href="crypto-ico-landing.html" class="dropdown-item" key="t-ico">ICO Landing</a> --}}
                    {{-- </div> --}}
                    {{-- </div> --}}

                    {{-- <div class="dropdown"> --}}
                    {{-- <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-project" role="button"> --}}
                    {{-- <span key="t-projects">Projects</span> <div class="arrow-down"></div> --}}
                    {{-- </a> --}}
                    {{-- <div class="dropdown-menu" aria-labelledby="topnav-project"> --}}
                    {{-- <a href="projects-grid.html" class="dropdown-item" key="t-p-grid">Projects Grid</a> --}}
                    {{-- <a href="projects-list.html" class="dropdown-item" key="t-p-list">Projects List</a> --}}
                    {{-- <a href="projects-overview.html" class="dropdown-item" key="t-p-overview">Project Overview</a> --}}
                    {{-- <a href="projects-create.html" class="dropdown-item" key="t-create-new">Create New</a> --}}
                    {{-- </div> --}}
                    {{-- </div> --}}
                    {{-- <div class="dropdown"> --}}
                    {{-- <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-task" role="button"> --}}
                    {{-- <span key="t-tasks">Tasks</span> <div class="arrow-down"></div> --}}
                    {{-- </a> --}}
                    {{-- <div class="dropdown-menu" aria-labelledby="topnav-task"> --}}
                    {{-- <a href="tasks-list.html" class="dropdown-item" key="t-task-list">Task List</a> --}}
                    {{-- <a href="tasks-kanban.html" class="dropdown-item" key="t-kanban-board">Kanban Board</a> --}}
                    {{-- <a href="tasks-create.html" class="dropdown-item" key="t-create-task">Create Task</a> --}}
                    {{-- </div> --}}
                    {{-- </div> --}}
                    {{-- <div class="dropdown"> --}}
                    {{-- <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-contact" role="button"> --}}
                    {{-- <span key="t-contacts">Contacts</span> <div class="arrow-down"></div> --}}
                    {{-- </a> --}}
                    {{-- <div class="dropdown-menu" aria-labelledby="topnav-contact"> --}}
                    {{-- <a href="contacts-grid.html" class="dropdown-item" key="t-user-grid">User Grid</a> --}}
                    {{-- <a href="contacts-list.html" class="dropdown-item" key="t-user-list">User List</a> --}}
                    {{-- <a href="contacts-profile.html" class="dropdown-item" key="t-profile">Profile</a> --}}
                    {{-- </div> --}}
                    {{-- </div> --}}

                    {{-- <div class="dropdown"> --}}
                    {{-- <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-blog" role="button"> --}}
                    {{-- <span key="t-blog">Blog</span> <div class="arrow-down"></div> --}}
                    {{-- </a> --}}
                    {{-- <div class="dropdown-menu" aria-labelledby="topnav-blog"> --}}
                    {{-- <a href="blog-list.html" class="dropdown-item" key="t-blog-list">Blog List</a> --}}
                    {{-- <a href="blog-grid.html" class="dropdown-item" key="t-blog-grid">Blog Grid</a> --}}
                    {{-- <a href="blog-details.html" class="dropdown-item" key="t-blog-details">Blog Details</a> --}}
                    {{-- </div> --}}
                    {{-- </div> --}}
                    {{-- </div> --}}
                    {{-- </li>

                    <li class="nav-item dropdown d-flex align-items-center">
                        <a class="nav-link dropdown-toggle arrow-none d-flex align-items-center" href="{{ route('features') }}" id="topnav-components" role="button">
                    <i class="bx bx-cart me-2"></i><span key="t-components">Features</span> --}}
                    {{-- <div class="arrow-down"></div> --}}
                    {{-- </a>

                    </li>
                    <li class="nav-item dropdown d-flex align-items-center">
                        <a class="nav-link dropdown-toggle arrow-none d-flex align-items-center" href="{{ route('convensions') }}" id="topnav-components" role="button">
                    <i class="bx bx-cart me-2"></i><span key="t-components">Convensions</span> --}}
                    {{-- <div class="arrow-down"></div> --}}
                    {{-- </a>

                    </li>
                    <li class="nav-item dropdown d-flex align-items-center">
                        <a class="nav-link dropdown-toggle arrow-none d-flex align-items-center" href="{{ route('shippers') }}" id="topnav-components" role="button">
                    <i class="bx bx-cart me-2"></i><span key="t-components">Shippers</span> --}}
                    {{-- <div class="arrow-down"></div> --}}
                    {{-- </a>

                    </li>
                    <li class="nav-item dropdown d-flex align-items-center">
                        <a class="nav-link dropdown-toggle arrow-none d-flex align-items-center" href="{{ route('tickets') }}" id="topnav-components" role="button">
                    <i class='bx bx-list-ul me-2'></i><span key="t-components">Tickets</span> --}}
                    {{-- <div class="arrow-down"></div> --}}
                    {{-- </a>

                    </li> --}}



                </ul>
            </div>
        </nav>
    </div>
</div>
@endauth
