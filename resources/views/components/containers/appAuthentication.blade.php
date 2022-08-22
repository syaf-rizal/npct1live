<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('images/32.ico') }}" />
    <title>@yield('pageTitle')</title>
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="NPCT1" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/theme/vendor.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/theme/custom.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/theme/bootstrap-material-datetimepicker.css') }}" type="text/css" />

    <script src="{{ URL::asset('js/theme/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/theme/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/theme/vendor.min.js') }}"></script>
    <script src="{{ URL::asset('js/theme/moment.js') }}"></script>
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar closed-sidebar">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic closed-sidebar" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="https://meals.npct1.co.id/public/img/user.png" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-info">
                                                    <div class="menu-header-image opacity-2" style="background-image: url('https://meals.npct1.co.id/public/img/abstract2.jpg');"></div>
                                                    <div class="menu-header-content text-left">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="https://meals.npct1.co.id/public/img/user.png" alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">{{ Auth::user()->name }}</div>
                                                                </div>
                                                                <div class="widget-content-right mr-2">
                                                                    <a class="btn-pill btn-shadow btn-shine btn btn-focus" href="{{ url('/logout') }}">Logout</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="scroll-area-xs">
                                                <div class="scrollbar-container ps">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-header nav-item">My Account</li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link" id="1516677077" onclick="nakupandaDialogGetCustomizable($(this),'BootstrapDialog.SIZE_NORMAL'); return false;" data-url="{{ url('from-modal/change-password') }}" data-size="BootstrapDialog.SIZE_WIDE" data-resize="true">Change Password</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">{{ Auth::user()->name }}</div>
                                    <div class="widget-subheading">Group User : {{ Auth::user()->group }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                    </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Menu</li>
                            <li class="active">
                                <a href="{{ url('/console/dashboard') }}">
                                    <i class="metismenu-icon pe-7s-home"></i> Dashboards
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ url('/console/announcement') }}">
                                    <i class="metismenu-icon pe-7s-speaker"></i> Announcement
                                </a>
                            </li>
                            @if(Auth::user()->group == "IT" || Auth::user()->group == "COM")
                            <li class="">
                                <a href="{{ url('/console/list-banner') }}">
                                    <i class="metismenu-icon pe-7s-photo-gallery"></i> Banner
                                </a>
                            </li>
                            @endif
                            <li class="">
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-global"></i> Pages
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    @if(Auth::user()->group == "IT" || Auth::user()->group == "COM" || Auth::user()->group == "PNC")
                                    <li><a href="{{ url('/console/board-of-directors') }}"><i class="metismenu-icon"></i> Board Of Directors</a></li>
                                    @endif
                                    <li><a href="{{ url('/console/news') }}"><i class="metismenu-icon"></i> {{ Auth::user()->group == "PR" ? 'Tender' : 'News' }} </a></li>
                                    @if(Auth::user()->group == "IT" || Auth::user()->group == "HR")
                                    <li><a href="{{ url('/console/npct1-career') }}"><i class="metismenu-icon"></i> NPCT1 Career</a></li>
                                    @endif
                                </ul>
                            </li>
                            @if(Auth::user()->group == "IT")
                            <li class="">
                                <a href="{{ url('/console/users') }}">
                                    <i class="metismenu-icon pe-7s-users"></i> Users
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <div class="loading-custom">
        <div class="loading-custom-content"></div>
    </div>
    <script src="{{ URL::asset('js/theme/bootbox.all.min.js') }}"></script>
    <script src="{{ URL::asset('js/theme/bootstrap-material-datetimepicker.js') }}"></script>
    <script src="{{ URL::asset('js/theme/bootstrap-dialog.min.js') }}"></script>
    <script src="{{ URL::asset('js/theme/typeahead.js') }}"></script>
    <script src="{{ URL::asset('js/theme/apps.min.js') }}"></script>
</body>
</html>