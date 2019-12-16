@extends('_layouts.master')

@section('body')
    <div class="header">
        <div class="header__topbar">
            <div class="navbar header__topbar-navbar">

                <div class="container header__topbar-container">
                    <!-- Desktop topbar -->
                    <a class="navbar-brand header__topbar-logo d-none d-lg-block" href="/">
                        <img src="/assets/images/logo-full.png" width="167px" height="37px">
                    </a>
                    <div class="dropdown header__topbar-dropdown d-none d-lg-block ml-auto">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="las la-user navbar-brand header__topbar-user-icon" aria-hidden="true"></i>
                            <span id="username-display"></span>
                        </a>

                        <div class="dropdown-menu header__topbar-dropdown-menu">
                            <a class="dropdown-item header__topbar-dropdown-menu__item" href="/profile/">Profile</a>
                            <a class="dropdown-item header__topbar-dropdown-menu__item" href="/settings/">Settings</a>
                            <div class="dropdown-divider header__topbar-dropdown-menu__divider"></div>
                            <a class="dropdown-item header__topbar-dropdown-menu__item" href="#" id="logout">Logout</a>
                        </div>
                    </div>
                    <!-- Mobile topbar -->
                    <nav class="nav d-lg-none header__topbar-navbar-toggle" data-toggle="offcanvas">
                        <a class="nav-link header__topbar-navbar-toggle__menu" href="#"><i class="las la-bars"></i></a>
                        <a class="nav-link header__topbar-navbar-toggle__exit" href="#"><i class="las la-times"></i></a>
                    </nav>
                        <h2 class="header__topbar-title d-lg-none">{{ $page->title }}</h2>
                        <nav class="nav ml-auto d-lg-none">
                            <a class="nav-link header__topbar-icon" href="#"><i class="las la-filter"></i></a>
                            <a class="nav-link header__topbar-icon" href="#"><i class="las la-sort"></i></a>
                            <a class="nav-link header__topbar-icon" href="#"><i class="las la-plus"></i></a>
                        </nav>
                </div>

            </div>
        </div>
        <div class="header__bottombar">
            <nav class="navbar navbar-expand-lg header__bottombar-navbar">
                    <div class="container header__bottombar-container">
                        <div class="navbar-collapse header__bottombar-navbar-collapse">
                            <ul class="navbar-nav header__bottombar-navbar-nav">
                                <li class="nav-item header__bottombar-navbar-collapse-bar d-lg-none">
                                    <a class="nav-link header__bottombar-navbar-collapse-bar__exit" href="#"><i class="las la-times"></i></a>
                                    <img class="header__bottombar-navbar-collapse-bar__logo" src="/assets/images/logo-full.png" width="160px" height="35px">
                                </li>
                                <li class="nav-item header__bottombar-navbar-nav__item">
                                    <a class="nav-link header__bottombar-navbar-nav__link" href="/dashboard/"><i class="las la-tachometer-alt header__bottombar-navbar-nav__icon"></i> Dashboard </a>
                                </li>
                                <li class="nav-item header__bottombar-navbar-nav__item">
                                    <a class="nav-link header__bottombar-navbar-nav__link" href="/account/"><i class="las la-list header__bottombar-navbar-nav__icon" aria-hidden="true"></i> Accounts</a>
                                </li>
                                <li class="nav-item header__bottombar-navbar-nav__item">
                                    <a class="nav-link header__bottombar-navbar-nav__link" href="/copier/"><i class="las la-copy header__bottombar-navbar-nav__icon" aria-hidden="true"></i> Copiers</a>
                                </li>
                                <li class="nav-item header__bottombar-navbar-nav__item">
                                    <a class="nav-link header__bottombar-navbar-nav__link" href="/command/"><i class="las la-poll-h header__bottombar-navbar-nav__icon" aria-hidden="true"></i> Commands</a>
                                </li>
                                <li class="nav-item header__bottombar-navbar-nav__item d-lg-none">
                                    <a class="nav-link header__bottombar-navbar-nav__link" href="/guide/"><i class="las la-info-circle header__bottombar-navbar-nav__icon" aria-hidden="true"></i> Guide</a>
                                </li>
                                <li class="nav-item header__bottombar-navbar-nav__item d-lg-none">
                                    <a class="nav-link header__bottombar-navbar-nav__link" href="/support/"><i class="las la-life-ring header__bottombar-navbar-nav__icon" aria-hidden="true"></i> Support</a>
                                </li>
                                <li class="nav-item header__bottombar-navbar-nav__item d-lg-none">
                                    <a class="nav-link header__bottombar-navbar-nav__link" href="/help/api/introduction/"><i class="las la-book header__bottombar-navbar-nav__icon" aria-hidden="true"></i> API Docs</a>
                                </li>
                                <div class="dropdown-divider"></div>
                                <li class="nav-item header__bottombar-navbar-nav__item d-lg-none">
                                    <a class="nav-link header__bottombar-navbar-nav__link" href="/profile/"><i class="las la-user header__bottombar-navbar-nav__icon" aria-hidden="true"></i> Profile</a>
                                </li>
                                <li class="nav-item header__bottombar-navbar-nav__item d-lg-none">
                                    <a class="nav-link header__bottombar-navbar-nav__link" href="/settings"><i class="las la-cog header__bottombar-navbar-nav__icon" aria-hidden="true"></i> Settings</a>
                                </li>
                                <li class="nav-item header__bottombar-navbar-nav__item d-lg-none">
                                    <a class="nav-link header__bottombar-navbar-nav__link" href="#"><i class="las la-cog header__bottombar-navbar-nav__icon" aria-hidden="true"></i> Logout</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav header__bottombar-navbar-nav_right ml-auto d-none d-lg-block">
                                <li class="nav-item header__bottombar-navbar-nav__item dropdown">
                                    <a class="nav-link header__bottombar-navbar-nav__link dropdown-toggle" href="#" data-toggle="dropdown"><i class="las la-book header__bottombar-navbar-nav__icon" aria-hidden="true"></i> Help Centre</a>

                                    <div class="dropdown-menu header__bottombar-navbar-nav__dropdown-menu">
                                        <a class="dropdown-item header__bottombar-navbar-nav__dropdown-item help-dropdown__item" href="/guide/">User Guide</a>
                                        <a class="dropdown-item header__bottombar-navbar-nav__dropdown-item help-dropdown__item" href="/support/">Support</a>
                                        <a class="dropdown-item header__bottombar-navbar-nav__dropdown-item help-dropdown__item" href="/help/api/introduction/">API Docs</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
            </nav>
        </div>
    </div>
@endsection
