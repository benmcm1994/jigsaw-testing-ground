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


    <div id="panel-body" class="panel-body">
        <div id="progress_bar_placeholder"></div>
        <div id="alert_placeholder"></div>
        <div id="complete_placeholder"></div>
        <form id="form" class="form-horizontal form-bordered" method="post" novalidate="novalidate">
            <div class="form-group">
                <label class="col-md-3 control-label">Account Type</label>
                <div class="col-md-6">
                    <div class="radio">
                        <label>
                            <input name="mt_version" value="4" type="radio" checked="">
                            Metatrader 4 (MT4)
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input name="mt_version" value="5" type="radio">
                            Metatrader 5 (MT5)
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Descriptive Name</label>
                <div class="col-md-6">
                    <input id="account-name" type="text" name="account_name" class="form-control" value="" required="" aria-required="true">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Account Number</label>
                <div class="col-md-6">
                    <input id="account" type="number" name="account" class="form-control" min="1" step="1" value="" title="This field is required and must be an integer" required="" aria-required="true">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Account Password</label>
                <div class="col-md-6">
                    <input type="text" name="password" value="" class="form-control" placeholder="" required="" aria-required="true">
                </div>
            </div>
            <div id="placeholder">
                <div id="method_select_div" class="form-group">
                    <label class="col-md-3 control-label">Broker</label>
                    <div class="col-md-6">
                        <div class="radio">
                            <label>
                                <input name="broker_method" value="select" type="radio" checked="">
                                Select broker from dropdown list
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input name="broker_method" value="manual" type="radio">
                                Manually enter broker server IP address
                            </label>
                        </div>
                    </div>
                </div>

                <div id="broker_select_div" class="form-group">
                    <label class="col-md-3 control-label">Broker Name</label>
                    <div class="col-md-6">
                        <select id="broker_select_name" name="broker_select_name" class="form-control valid" required="" aria-required="true" aria-invalid="false">
                            <option value="" style="display: none;">Select broker</option>
                            <option value="175" data-mt-version="4" style="display: block;">24 Option</option>
                            <option value="238" data-mt-version="4" style="display: block;">AAAFX</option>
                            <option value="360" data-mt-version="4" style="display: block;">AAFX</option>
                            <option value="133" data-mt-version="5" style="display: none;">Activtrades</option>
                            <option value="41" data-mt-version="4" style="display: block;">Activtrades</option>
                            <option value="78" data-mt-version="4" style="display: block;">Admiral</option>
                            <option value="96" data-mt-version="4" style="display: block;">ADS Securities</option>
                            <option value="12" data-mt-version="4" style="display: block;">ADS Securities London</option>
                            <option value="188" data-mt-version="4" style="display: block;">Advanced Markets</option>
                            <option value="76" data-mt-version="4" style="display: block;">Aetos</option>
                            <option value="28" data-mt-version="4" style="display: block;">AFX</option>
                            <option value="131" data-mt-version="4" style="display: block;">AGM Group</option>
                            <option value="160" data-mt-version="4" style="display: block;">AIMS</option>
                            <option value="201" data-mt-version="4" style="display: block;">Aisa International Group</option>
                            <option value="309" data-mt-version="4" style="display: block;">Alchemy Markets</option>
                            <option value="113" data-mt-version="4" style="display: block;">ALG International</option>
                            <option value="237" data-mt-version="4" style="display: block;">Ally Invest Forex</option>
                            <option value="48" data-mt-version="4" style="display: block;">Alpari</option>
                            <option value="38" data-mt-version="4" style="display: block;">Alpha Capital Markets</option>
                            <option value="157" data-mt-version="4" style="display: block;">Alvexo</option>
                            <option value="378" data-mt-version="5" style="display: none;">Amana Capital</option>
                            <option value="369" data-mt-version="4" style="display: block;">Amana Capital</option>
                            <option value="255" data-mt-version="4" style="display: block;">Amax Global</option>
                            <option value="165" data-mt-version="5" style="display: none;">AMP Global Clearing</option>
                            <option value="99" data-mt-version="4" style="display: block;">Anfore</option>
                            <option value="232" data-mt-version="4" style="display: block;">Anzo Capital</option>
                            <option value="141" data-mt-version="5" style="display: none;">Apollo Markets</option>
                            <option value="224" data-mt-version="4" style="display: block;">Argus FX</option>
                            <option value="153" data-mt-version="4" style="display: block;">Askap Asset Management</option>
                            <option value="371" data-mt-version="5" style="display: none;">ATA Markets</option>
                            <option value="125" data-mt-version="4" style="display: block;">ATC Brokers</option>
                            <option value="321" data-mt-version="4" style="display: block;">ATFX</option>
                            <option value="150" data-mt-version="4" style="display: block;">Atlantic Pearl</option>
                            <option value="4" data-mt-version="4" style="display: block;">Atom8</option>
                            <option value="1" data-mt-version="4" style="display: block;">Aura</option>
                            <option value="56" data-mt-version="4" style="display: block;">AUSForex</option>
                            <option value="110" data-mt-version="4" style="display: block;">AVA Trade</option>
                            <option value="11" data-mt-version="4" style="display: block;">Axitrader</option>
                            <option value="372" data-mt-version="4" style="display: block;">B2Broker</option>
                            <option value="161" data-mt-version="4" style="display: block;">BD Swiss</option>
                            <option value="166" data-mt-version="4" style="display: block;">Big Dragon Enterprises</option>
                            <option value="352" data-mt-version="5" style="display: none;">Binary.com</option>
                            <option value="186" data-mt-version="4" style="display: block;">Black Bull Markets</option>
                            <option value="163" data-mt-version="4" style="display: block;">Black Pearl</option>
                            <option value="30" data-mt-version="4" style="display: block;">Blackwell Global</option>
                            <option value="191" data-mt-version="4" style="display: block;">Blueberry Markets</option>
                            <option value="31" data-mt-version="4" style="display: block;">BNFM</option>
                            <option value="203" data-mt-version="4" style="display: block;">BrightWin</option>
                            <option value="180" data-mt-version="4" style="display: block;">Bucking Group</option>
                            <option value="206" data-mt-version="4" style="display: block;">Butenix Capital</option>
                            <option value="66" data-mt-version="4" style="display: block;">Capital City Markets</option>
                            <option value="32" data-mt-version="4" style="display: block;">Capital Index</option>
                            <option value="265" data-mt-version="4" style="display: block;">CFH</option>
                            <option value="337" data-mt-version="4" style="display: block;">Chandon Group</option>
                            <option value="158" data-mt-version="4" style="display: block;">Charterprime</option>
                            <option value="115" data-mt-version="4" style="display: block;">City Credit Capital</option>
                            <option value="218" data-mt-version="4" style="display: block;">City Wealth</option>
                            <option value="259" data-mt-version="4" style="display: block;">CM Trading</option>
                            <option value="253" data-mt-version="4" style="display: block;">CMC Markets</option>
                            <option value="228" data-mt-version="4" style="display: block;">Coinexx</option>
                            <option value="240" data-mt-version="5" style="display: none;">Coinexx</option>
                            <option value="91" data-mt-version="4" style="display: block;">Core Liquidity Markets</option>
                            <option value="71" data-mt-version="4" style="display: block;">Core Spreads</option>
                            <option value="183" data-mt-version="4" style="display: block;">CPT Markets</option>
                            <option value="299" data-mt-version="4" style="display: block;">Cresco Capital</option>
                            <option value="349" data-mt-version="4" style="display: block;">Crypto Rocket</option>
                            <option value="98" data-mt-version="4" style="display: block;">CSI Group</option>
                            <option value="377" data-mt-version="4" style="display: block;">CXM Trading</option>
                            <option value="149" data-mt-version="4" style="display: block;">Darwinex</option>
                            <option value="307" data-mt-version="5" style="display: none;">Darwinex</option>
                            <option value="43" data-mt-version="4" style="display: block;">DIDIFX</option>
                            <option value="33" data-mt-version="4" style="display: block;">DKB Markets</option>
                            <option value="212" data-mt-version="4" style="display: block;">Dukascopy</option>
                            <option value="303" data-mt-version="4" style="display: block;">E-Global</option>
                            <option value="326" data-mt-version="4" style="display: block;">Eagle FX</option>
                            <option value="333" data-mt-version="4" style="display: block;">Eastridge Capital</option>
                            <option value="75" data-mt-version="4" style="display: block;">Easy Forex</option>
                            <option value="151" data-mt-version="4" style="display: block;">EBFS Group</option>
                            <option value="50" data-mt-version="4" style="display: block;">ECI</option>
                            <option value="340" data-mt-version="4" style="display: block;">EGM Securities</option>
                            <option value="192" data-mt-version="4" style="display: block;">Eightcap</option>
                            <option value="222" data-mt-version="5" style="display: none;">Elite Markets</option>
                            <option value="24" data-mt-version="4" style="display: block;">Elxi</option>
                            <option value="322" data-mt-version="5" style="display: none;">Eone</option>
                            <option value="298" data-mt-version="4" style="display: block;">Equiti</option>
                            <option value="181" data-mt-version="4" style="display: block;">ETO</option>
                            <option value="86" data-mt-version="4" style="display: block;">ETX</option>
                            <option value="273" data-mt-version="4" style="display: block;">Europe FX</option>
                            <option value="332" data-mt-version="4" style="display: block;">Eurotrade</option>
                            <option value="283" data-mt-version="5" style="display: none;">Everforex Financial</option>
                            <option value="275" data-mt-version="5" style="display: none;">Evolve Markets</option>
                            <option value="136" data-mt-version="5" style="display: none;">Exclusive Capital</option>
                            <option value="89" data-mt-version="4" style="display: block;">Exness</option>
                            <option value="287" data-mt-version="4" style="display: block;">F1 Markets</option>
                            <option value="100" data-mt-version="4" style="display: block;">FBS</option>
                            <option value="364" data-mt-version="4" style="display: block;">FF Trader</option>
                            <option value="267" data-mt-version="4" style="display: block;">FFS Markets</option>
                            <option value="204" data-mt-version="4" style="display: block;">Fidelis Capital Markets</option>
                            <option value="266" data-mt-version="4" style="display: block;">Finotec</option>
                            <option value="379" data-mt-version="4" style="display: block;">FinsaPty</option>
                            <option value="314" data-mt-version="5" style="display: none;">Fintec Global Markets</option>
                            <option value="68" data-mt-version="4" style="display: block;">FirstFX Global</option>
                            <option value="184" data-mt-version="5" style="display: none;">Fixi</option>
                            <option value="62" data-mt-version="4" style="display: block;">FIXI</option>
                            <option value="117" data-mt-version="4" style="display: block;">Foison Group</option>
                            <option value="304" data-mt-version="5" style="display: none;">Forex Chief</option>
                            <option value="276" data-mt-version="4" style="display: block;">Forex Chief</option>
                            <option value="111" data-mt-version="4" style="display: block;">Forex Expand</option>
                            <option value="134" data-mt-version="5" style="display: none;">Forex Time</option>
                            <option value="74" data-mt-version="4" style="display: block;">Forex Time</option>
                            <option value="59" data-mt-version="4" style="display: block;">Forex.com</option>
                            <option value="229" data-mt-version="4" style="display: block;">Forex.com Canada</option>
                            <option value="90" data-mt-version="4" style="display: block;">Forex4you</option>
                            <option value="104" data-mt-version="4" style="display: block;">Forexware</option>
                            <option value="77" data-mt-version="4" style="display: block;">Formax</option>
                            <option value="93" data-mt-version="4" style="display: block;">Fort FS</option>
                            <option value="262" data-mt-version="4" style="display: block;">Fortrade</option>
                            <option value="200" data-mt-version="4" style="display: block;">Fortune Way</option>
                            <option value="155" data-mt-version="4" style="display: block;">ForYou Global</option>
                            <option value="70" data-mt-version="4" style="display: block;">FP Markets</option>
                            <option value="178" data-mt-version="4" style="display: block;">FTT Markets</option>
                            <option value="217" data-mt-version="4" style="display: block;">Fullerton Markets</option>
                            <option value="292" data-mt-version="4" style="display: block;">Fusion Markets</option>
                            <option value="112" data-mt-version="4" style="display: block;">FX Adamant Stone</option>
                            <option value="242" data-mt-version="5" style="display: none;">FX Choice</option>
                            <option value="45" data-mt-version="4" style="display: block;">FX Choice</option>
                            <option value="119" data-mt-version="4" style="display: block;">FX Clearing</option>
                            <option value="291" data-mt-version="4" style="display: block;">FX Gate</option>
                            <option value="52" data-mt-version="4" style="display: block;">FX Giants</option>
                            <option value="54" data-mt-version="4" style="display: block;">FX Glory</option>
                            <option value="296" data-mt-version="4" style="display: block;">FX Open</option>
                            <option value="208" data-mt-version="4" style="display: block;">FX Optimax</option>
                            <option value="147" data-mt-version="4" style="display: block;">FX Pig</option>
                            <option value="109" data-mt-version="4" style="display: block;">FX Primus</option>
                            <option value="129" data-mt-version="5" style="display: none;">Fx Pro</option>
                            <option value="14" data-mt-version="4" style="display: block;">FX Pro</option>
                            <option value="42" data-mt-version="4" style="display: block;">FXCM</option>
                            <option value="36" data-mt-version="4" style="display: block;">FXDD</option>
                            <option value="144" data-mt-version="5" style="display: none;">FXDD</option>
                            <option value="37" data-mt-version="4" style="display: block;">FXDD Malta</option>
                            <option value="18" data-mt-version="4" style="display: block;">FXGlobe</option>
                            <option value="370" data-mt-version="4" style="display: block;">GBE Brokers</option>
                            <option value="39" data-mt-version="4" style="display: block;">GCF Ltd</option>
                            <option value="339" data-mt-version="4" style="display: block;">GCM Asia</option>
                            <option value="51" data-mt-version="4" style="display: block;">Gemho Priority Markets</option>
                            <option value="26" data-mt-version="4" style="display: block;">GKFX</option>
                            <option value="199" data-mt-version="4" style="display: block;">Global Clearing Group</option>
                            <option value="198" data-mt-version="5" style="display: none;">Global Forex Service</option>
                            <option value="114" data-mt-version="4" style="display: block;">Global Market Index</option>
                            <option value="205" data-mt-version="4" style="display: block;">Global Prime</option>
                            <option value="327" data-mt-version="4" style="display: block;">Globex360</option>
                            <option value="211" data-mt-version="4" style="display: block;">Globia Wealth</option>
                            <option value="334" data-mt-version="4" style="display: block;">GMI</option>
                            <option value="239" data-mt-version="4" style="display: block;">GMO-Z.com</option>
                            <option value="362" data-mt-version="5" style="display: none;">GNT Capital</option>
                            <option value="358" data-mt-version="4" style="display: block;">GNT Capital</option>
                            <option value="289" data-mt-version="5" style="display: none;">Go Markets</option>
                            <option value="64" data-mt-version="4" style="display: block;">Go Markets</option>
                            <option value="170" data-mt-version="4" style="display: block;">Golden Grand</option>
                            <option value="22" data-mt-version="4" style="display: block;">Golden Tangent FX</option>
                            <option value="103" data-mt-version="4" style="display: block;">Goldstone</option>
                            <option value="361" data-mt-version="4" style="display: block;">Goldwell Capital</option>
                            <option value="359" data-mt-version="4" style="display: block;">Grand Capital</option>
                            <option value="346" data-mt-version="4" style="display: block;">Grand Investing</option>
                            <option value="354" data-mt-version="4" style="display: block;">Grinta Invest</option>
                            <option value="152" data-mt-version="4" style="display: block;">GSG</option>
                            <option value="285" data-mt-version="4" style="display: block;">GTS Prime</option>
                            <option value="5" data-mt-version="4" style="display: block;">Halifax AU</option>
                            <option value="6" data-mt-version="4" style="display: block;">Halifax US</option>
                            <option value="380" data-mt-version="4" style="display: block;">Hankotrade</option>
                            <option value="159" data-mt-version="4" style="display: block;">Hantec Markets</option>
                            <option value="120" data-mt-version="4" style="display: block;">Henyep</option>
                            <option value="302" data-mt-version="4" style="display: block;">Hermes Market</option>
                            <option value="121" data-mt-version="4" style="display: block;">HF Markets</option>
                            <option value="202" data-mt-version="4" style="display: block;">Hugos Way</option>
                            <option value="213" data-mt-version="4" style="display: block;">HV Markets</option>
                            <option value="177" data-mt-version="4" style="display: block;">HY Markets</option>
                            <option value="17" data-mt-version="4" style="display: block;">IC Markets</option>
                            <option value="135" data-mt-version="5" style="display: none;">IC Markets</option>
                            <option value="300" data-mt-version="4" style="display: block;">Ice FX</option>
                            <option value="278" data-mt-version="4" style="display: block;">ICFX</option>
                            <option value="220" data-mt-version="4" style="display: block;">ICM Brokers</option>
                            <option value="243" data-mt-version="4" style="display: block;">ICM Capital</option>
                            <option value="187" data-mt-version="4" style="display: block;">ICM Trader</option>
                            <option value="123" data-mt-version="4" style="display: block;">Idea Group</option>
                            <option value="310" data-mt-version="4" style="display: block;">IFC Markets</option>
                            <option value="256" data-mt-version="4" style="display: block;">IFS Markets</option>
                            <option value="29" data-mt-version="4" style="display: block;">IG</option>
                            <option value="270" data-mt-version="4" style="display: block;">IMM FX</option>
                            <option value="82" data-mt-version="4" style="display: block;">Imperium Forex</option>
                            <option value="19" data-mt-version="4" style="display: block;">Infinox</option>
                            <option value="343" data-mt-version="4" style="display: block;">Ingot Brokers</option>
                            <option value="350" data-mt-version="4" style="display: block;">Insta Forex</option>
                            <option value="277" data-mt-version="4" style="display: block;">Intermax Pro</option>
                            <option value="330" data-mt-version="4" style="display: block;">International Business Futures</option>
                            <option value="88" data-mt-version="4" style="display: block;">InterTrader</option>
                            <option value="189" data-mt-version="4" style="display: block;">Invast</option>
                            <option value="353" data-mt-version="5" style="display: none;">Investo UniTrade</option>
                            <option value="81" data-mt-version="4" style="display: block;">Ipsom Prime</option>
                            <option value="367" data-mt-version="5" style="display: none;">iQuoto</option>
                            <option value="366" data-mt-version="4" style="display: block;">iQuoto</option>
                            <option value="139" data-mt-version="4" style="display: block;">Iron FX</option>
                            <option value="315" data-mt-version="4" style="display: block;">ITI Capital</option>
                            <option value="72" data-mt-version="4" style="display: block;">iTrader</option>
                            <option value="61" data-mt-version="4" style="display: block;">JAFX</option>
                            <option value="57" data-mt-version="4" style="display: block;">JDome</option>
                            <option value="301" data-mt-version="5" style="display: none;">JFD Brokers</option>
                            <option value="146" data-mt-version="4" style="display: block;">JFD Brokers</option>
                            <option value="306" data-mt-version="4" style="display: block;">JP Markets</option>
                            <option value="294" data-mt-version="4" style="display: block;">Just Forex</option>
                            <option value="145" data-mt-version="5" style="display: none;">Just2Trade</option>
                            <option value="168" data-mt-version="4" style="display: block;">KapSecure</option>
                            <option value="46" data-mt-version="4" style="display: block;">KDFX</option>
                            <option value="40" data-mt-version="4" style="display: block;">Key To Markets</option>
                            <option value="95" data-mt-version="4" style="display: block;">Kings Road Group</option>
                            <option value="264" data-mt-version="4" style="display: block;">KOT4X</option>
                            <option value="21" data-mt-version="4" style="display: block;">KVB Kunlun</option>
                            <option value="83" data-mt-version="4" style="display: block;">Land FX</option>
                            <option value="348" data-mt-version="5" style="display: none;">Legacy FX</option>
                            <option value="344" data-mt-version="4" style="display: block;">Leo Inc</option>
                            <option value="247" data-mt-version="4" style="display: block;">Leverate</option>
                            <option value="94" data-mt-version="4" style="display: block;">Lion Brokers</option>
                            <option value="179" data-mt-version="4" style="display: block;">LMAX</option>
                            <option value="47" data-mt-version="4" style="display: block;">LMFX</option>
                            <option value="215" data-mt-version="4" style="display: block;">London Capital Group</option>
                            <option value="365" data-mt-version="5" style="display: none;">Lord FX</option>
                            <option value="73" data-mt-version="4" style="display: block;">LQD FX</option>
                            <option value="250" data-mt-version="4" style="display: block;">Lucror Capital Markets</option>
                            <option value="137" data-mt-version="4" style="display: block;">Markets Direct Financial</option>
                            <option value="197" data-mt-version="4" style="display: block;">Match Trade</option>
                            <option value="329" data-mt-version="4" style="display: block;">Max Global</option>
                            <option value="143" data-mt-version="4" style="display: block;">Medern Capital</option>
                            <option value="274" data-mt-version="4" style="display: block;">Melius Marketing</option>
                            <option value="279" data-mt-version="5" style="display: none;">Merchant FX</option>
                            <option value="248" data-mt-version="4" style="display: block;">MetaQuotes</option>
                            <option value="69" data-mt-version="4" style="display: block;">MEX Australia</option>
                            <option value="167" data-mt-version="4" style="display: block;">MEX International</option>
                            <option value="282" data-mt-version="4" style="display: block;">Midtou Global</option>
                            <option value="375" data-mt-version="4" style="display: block;">Mixmarket</option>
                            <option value="169" data-mt-version="4" style="display: block;">Modern Capital</option>
                            <option value="342" data-mt-version="4" style="display: block;">Monex</option>
                            <option value="97" data-mt-version="4" style="display: block;">MSL Capital Markets</option>
                            <option value="341" data-mt-version="4" style="display: block;">MTrading</option>
                            <option value="195" data-mt-version="4" style="display: block;">MyFX Markets</option>
                            <option value="233" data-mt-version="4" style="display: block;">MyGroup FinTech</option>
                            <option value="324" data-mt-version="4" style="display: block;">Naga Capital</option>
                            <option value="260" data-mt-version="4" style="display: block;">Naga Markets</option>
                            <option value="124" data-mt-version="4" style="display: block;">NCL FX</option>
                            <option value="138" data-mt-version="4" style="display: block;">NCM Information Consulting</option>
                            <option value="35" data-mt-version="4" style="display: block;">Noor Capital Markets</option>
                            <option value="34" data-mt-version="4" style="display: block;">Noor Capital PSC</option>
                            <option value="316" data-mt-version="4" style="display: block;">Novox Group</option>
                            <option value="60" data-mt-version="4" style="display: block;">Oanda</option>
                            <option value="190" data-mt-version="4" style="display: block;">Octa FX</option>
                            <option value="142" data-mt-version="5" style="display: none;">Octa FX</option>
                            <option value="164" data-mt-version="4" style="display: block;">Odin Group</option>
                            <option value="323" data-mt-version="4" style="display: block;">Olive FX</option>
                            <option value="249" data-mt-version="5" style="display: none;">Olympus</option>
                            <option value="295" data-mt-version="4" style="display: block;">Omega Pro </option>
                            <option value="116" data-mt-version="4" style="display: block;">One Financial Markets</option>
                            <option value="130" data-mt-version="4" style="display: block;">Oracle Finance Int</option>
                            <option value="269" data-mt-version="4" style="display: block;">Orbex</option>
                            <option value="236" data-mt-version="5" style="display: none;">Orient Markets</option>
                            <option value="132" data-mt-version="4" style="display: block;">Origin ECN</option>
                            <option value="67" data-mt-version="4" style="display: block;">Orion Capital Management</option>
                            <option value="319" data-mt-version="4" style="display: block;">Osprey FX</option>
                            <option value="176" data-mt-version="4" style="display: block;">Pax Forex</option>
                            <option value="328" data-mt-version="5" style="display: none;">Pepperstone</option>
                            <option value="13" data-mt-version="4" style="display: block;">Pepperstone</option>
                            <option value="231" data-mt-version="4" style="display: block;">PFD</option>
                            <option value="8" data-mt-version="4" style="display: block;">Phillip Capital AU</option>
                            <option value="9" data-mt-version="4" style="display: block;">Phillip Capital TR</option>
                            <option value="10" data-mt-version="4" style="display: block;">Phillip Capital UK</option>
                            <option value="7" data-mt-version="4" style="display: block;">Phillip Capital US</option>
                            <option value="374" data-mt-version="4" style="display: block;">PRC</option>
                            <option value="210" data-mt-version="4" style="display: block;">Price Markets</option>
                            <option value="351" data-mt-version="4" style="display: block;">Prime A1</option>
                            <option value="241" data-mt-version="4" style="display: block;">Primus Africa</option>
                            <option value="318" data-mt-version="4" style="display: block;">Primus Global</option>
                            <option value="173" data-mt-version="4" style="display: block;">Primus Markets</option>
                            <option value="2" data-mt-version="4" style="display: block;">Prior</option>
                            <option value="108" data-mt-version="4" style="display: block;">PROF Trading</option>
                            <option value="251" data-mt-version="4" style="display: block;">Prosperous Financial Capital</option>
                            <option value="317" data-mt-version="4" style="display: block;">Proton Capital</option>
                            <option value="128" data-mt-version="4" style="display: block;">Pruton MF</option>
                            <option value="127" data-mt-version="4" style="display: block;">PuHuei</option>
                            <option value="257" data-mt-version="4" style="display: block;">Puhui Group</option>
                            <option value="182" data-mt-version="4" style="display: block;">Purcow</option>
                            <option value="263" data-mt-version="4" style="display: block;">Pure Market</option>
                            <option value="246" data-mt-version="4" style="display: block;">Purple Trading</option>
                            <option value="311" data-mt-version="4" style="display: block;">Quantix FS</option>
                            <option value="252" data-mt-version="4" style="display: block;">Rakuten Securities</option>
                            <option value="345" data-mt-version="4" style="display: block;">Rally Trade</option>
                            <option value="336" data-mt-version="4" style="display: block;">Range Markets</option>
                            <option value="194" data-mt-version="4" style="display: block;">Rarlon Trading</option>
                            <option value="313" data-mt-version="4" style="display: block;">RichField Capital</option>
                            <option value="107" data-mt-version="4" style="display: block;">Rising International</option>
                            <option value="209" data-mt-version="4" style="display: block;">Riston Capital</option>
                            <option value="106" data-mt-version="4" style="display: block;">Rivon International</option>
                            <option value="55" data-mt-version="4" style="display: block;">RoboForex</option>
                            <option value="223" data-mt-version="5" style="display: none;">RoboForex</option>
                            <option value="219" data-mt-version="4" style="display: block;">Royal Financial Trading</option>
                            <option value="227" data-mt-version="4" style="display: block;">Rubix FX</option>
                            <option value="162" data-mt-version="4" style="display: block;">Safe Gold</option>
                            <option value="193" data-mt-version="4" style="display: block;">Schatz Markets</option>
                            <option value="221" data-mt-version="4" style="display: block;">Scope Markets</option>
                            <option value="148" data-mt-version="4" style="display: block;">SFX Markets</option>
                            <option value="376" data-mt-version="5" style="display: none;">Shine Join FX</option>
                            <option value="268" data-mt-version="4" style="display: block;">SimpleFX</option>
                            <option value="331" data-mt-version="4" style="display: block;">Soegee</option>
                            <option value="16" data-mt-version="4" style="display: block;">Spartan FX</option>
                            <option value="363" data-mt-version="5" style="display: none;">SPM Hypersonic</option>
                            <option value="226" data-mt-version="4" style="display: block;">Squared Direct</option>
                            <option value="63" data-mt-version="4" style="display: block;">Squared Financial</option>
                            <option value="105" data-mt-version="4" style="display: block;">STO</option>
                            <option value="207" data-mt-version="4" style="display: block;">Super Forex</option>
                            <option value="171" data-mt-version="4" style="display: block;">Swissquote</option>
                            <option value="23" data-mt-version="4" style="display: block;">Synergy</option>
                            <option value="58" data-mt-version="4" style="display: block;">Tahoe Group</option>
                            <option value="172" data-mt-version="4" style="display: block;">TEC International</option>
                            <option value="355" data-mt-version="4" style="display: block;">Tegas FX</option>
                            <option value="254" data-mt-version="4" style="display: block;">Templer FX</option>
                            <option value="15" data-mt-version="4" style="display: block;">Templeton FX</option>
                            <option value="25" data-mt-version="4" style="display: block;">Tera Europe</option>
                            <option value="79" data-mt-version="4" style="display: block;">Think Forex AU</option>
                            <option value="87" data-mt-version="4" style="display: block;">Think Forex UK</option>
                            <option value="281" data-mt-version="4" style="display: block;">Think Markets</option>
                            <option value="27" data-mt-version="4" style="display: block;">Tickmill</option>
                            <option value="214" data-mt-version="4" style="display: block;">Tier1 FX</option>
                            <option value="325" data-mt-version="4" style="display: block;">TIO Markets</option>
                            <option value="140" data-mt-version="4" style="display: block;">Titanium</option>
                            <option value="126" data-mt-version="4" style="display: block;">Top Capital</option>
                            <option value="185" data-mt-version="4" style="display: block;">Top Half Technology</option>
                            <option value="305" data-mt-version="4" style="display: block;">TP Trades</option>
                            <option value="122" data-mt-version="4" style="display: block;">Trade FXM</option>
                            <option value="357" data-mt-version="4" style="display: block;">Trade Max</option>
                            <option value="234" data-mt-version="4" style="display: block;">TradeFW</option>
                            <option value="312" data-mt-version="5" style="display: none;">TradePro Markets</option>
                            <option value="308" data-mt-version="4" style="display: block;">Traders Domain</option>
                            <option value="44" data-mt-version="4" style="display: block;">Traders Way</option>
                            <option value="230" data-mt-version="5" style="display: none;">TradersWay</option>
                            <option value="356" data-mt-version="4" style="display: block;">TradeTech Alpha</option>
                            <option value="235" data-mt-version="4" style="display: block;">TradeTech Markets</option>
                            <option value="245" data-mt-version="4" style="display: block;">Tradeview</option>
                            <option value="373" data-mt-version="4" style="display: block;">Tradize</option>
                            <option value="347" data-mt-version="4" style="display: block;">Trio Markets</option>
                            <option value="338" data-mt-version="4" style="display: block;">Triplea FX</option>
                            <option value="174" data-mt-version="4" style="display: block;">Turnkey FX</option>
                            <option value="101" data-mt-version="4" style="display: block;">USG FX</option>
                            <option value="216" data-mt-version="4" style="display: block;">Utrade FX</option>
                            <option value="261" data-mt-version="4" style="display: block;">Vanguard Global Holdings</option>
                            <option value="65" data-mt-version="4" style="display: block;">Vanlong Global Trading</option>
                            <option value="84" data-mt-version="4" style="display: block;">Vantage AU</option>
                            <option value="272" data-mt-version="5" style="display: none;">Vantage FX</option>
                            <option value="85" data-mt-version="4" style="display: block;">Vantage FX</option>
                            <option value="286" data-mt-version="4" style="display: block;">Vantage International</option>
                            <option value="196" data-mt-version="4" style="display: block;">Varianse</option>
                            <option value="335" data-mt-version="4" style="display: block;">Venn Trading</option>
                            <option value="288" data-mt-version="4" style="display: block;">Weltrade</option>
                            <option value="118" data-mt-version="4" style="display: block;">Wetrade</option>
                            <option value="154" data-mt-version="4" style="display: block;">Wetrade International</option>
                            <option value="92" data-mt-version="4" style="display: block;">Windsor Brokers</option>
                            <option value="225" data-mt-version="4" style="display: block;">X Spot</option>
                            <option value="297" data-mt-version="4" style="display: block;">Xinfuwh</option>
                            <option value="156" data-mt-version="4" style="display: block;">XM Global</option>
                            <option value="284" data-mt-version="5" style="display: none;">XM Global</option>
                            <option value="53" data-mt-version="4" style="display: block;">XM.COM</option>
                            <option value="280" data-mt-version="5" style="display: none;">XMUK</option>
                            <option value="244" data-mt-version="5" style="display: none;">XP Investimentos</option>
                            <option value="49" data-mt-version="4" style="display: block;">XSecurities</option>
                            <option value="20" data-mt-version="4" style="display: block;">XTB</option>
                        </select>
                    </div>
                </div>
                <div id="server_select_div" class="form-group">
                    <label class="col-md-3 control-label">Broker Server Name</label>
                    <div class="col-md-6">
                        <select id="broker_select_server" name="broker_server_id" class="form-control valid" required="" aria-required="true" aria-invalid="false"><option value="">Select server</option>
                            <option class="175" value="487" style="display: none;">24Option-Demo</option>
                            <option class="175" value="488" style="display: none;">24Option-Live</option>
                            <option class="238" value="645" style="display: none;">AAAFx-FX-Demo</option>
                            <option class="238" value="646" style="display: none;">AAAFx-FX-Real</option>
                            <option class="360" value="1022" style="display: none;">AAFX-Demo</option>
                            <option class="360" value="1023" style="display: none;">AAFX-Real</option>
                            <option class="38" value="114" style="display: none;">ACCFXBrokers-Demo</option>
                            <option class="38" value="113" style="display: none;">ACCFXBrokers-Real</option>
                            <option class="38" value="110" style="display: none;">ACM-Demo</option>
                            <option class="38" value="111" style="display: none;">ACM-Live</option>
                            <option class="38" value="112" style="display: none;">ACM-Live 2</option>
                            <option class="41" value="248" style="display: none;">Activtrades-1</option>
                            <option class="41" value="249" style="display: none;">Activtrades-2</option>
                            <option class="41" value="207" style="display: none;">Activtrades-3</option>
                            <option class="41" value="250" style="display: none;">Activtrades-4</option>
                            <option class="41" value="251" style="display: none;">Activtrades-5</option>
                            <option class="41" value="119" style="display: none;">Activtrades-Demo</option>
                            <option class="133" value="394" style="display: none;">ActivTrades-Server</option>
                            <option class="41" value="546" style="display: none;">ActivTradesCorp-5</option>
                            <option class="133" value="393" style="display: none;">ActivTradesCorp-Server</option>
                            <option class="78" value="202" style="display: none;">AdmiralMarkets-Demo</option>
                            <option class="78" value="203" style="display: none;">AdmiralMarkets-Demo2</option>
                            <option class="78" value="204" style="display: none;">AdmiralMarkets-Live</option>
                            <option class="78" value="205" style="display: none;">AdmiralMarkets-Live2</option>
                            <option class="78" value="206" style="display: none;">AdmiralMarkets-Live3</option>
                            <option class="96" value="274" style="display: none;">ADSS-Demo</option>
                            <option class="96" value="275" style="display: none;">ADSS-Live</option>
                            <option class="96" value="276" style="display: none;">ADSS-Live1</option>
                            <option class="96" value="277" style="display: none;">ADSS-Live3</option>
                            <option class="12" value="31" style="display: none;">ADSSecurities-Demo</option>
                            <option class="12" value="32" style="display: none;">ADSSecurities-Demo2</option>
                            <option class="12" value="30" style="display: none;">ADSSecurities-Live2</option>
                            <option class="188" value="511" style="display: none;">AdvancedMarkets-Demo</option>
                            <option class="188" value="515" style="display: none;">AdvancedMarkets-Live</option>
                            <option class="76" value="200" style="display: none;">AETOS-LIVE F</option>
                            <option class="76" value="598" style="display: none;">AETOS-LIVE F2</option>
                            <option class="76" value="597" style="display: none;">AETOS-LIVE F3</option>
                            <option class="28" value="86" style="display: none;">AFX-Demo</option>
                            <option class="28" value="85" style="display: none;">AFX-Real</option>
                            <option class="131" value="387" style="display: none;">AGMGroupLtd-Demo </option>
                            <option class="131" value="388" style="display: none;">AGMGroupLtd-Real</option>
                            <option class="160" value="449" style="display: none;">AIMS-Demo</option>
                            <option class="160" value="450" style="display: none;">AIMS-Live Server</option>
                            <option class="201" value="544" style="display: none;">AisaInternationalGroup-DEMO</option>
                            <option class="201" value="545" style="display: none;">AisaInternationalGroup-Live</option>
                            <option class="309" value="847" style="display: none;">AlchemyMarkets-Demo</option>
                            <option class="309" value="848" style="display: none;">AlchemyMarkets-Live</option>
                            <option class="113" value="335" style="display: none;">ALGInternational-Demo</option>
                            <option class="113" value="336" style="display: none;">ALGInternational-Live</option>
                            <option class="237" value="641" style="display: none;">AllyInvestForex-Demo 106</option>
                            <option class="237" value="642" style="display: none;">AllyInvestForex-Live 120</option>
                            <option class="237" value="643" style="display: none;">AllyInvestForex-Live 121</option>
                            <option class="237" value="644" style="display: none;">AllyInvestForex-Live 122</option>
                            <option class="48" value="589" style="display: none;">Alpari-ECN1</option>
                            <option class="48" value="559" style="display: none;">Alpari-Nano</option>
                            <option class="48" value="137" style="display: none;">Alpari-Pro.ECN</option>
                            <option class="48" value="808" style="display: none;">Alpari-Pro.ECN-Demo</option>
                            <option class="48" value="928" style="display: none;">Alpari-Standard1</option>
                            <option class="48" value="873" style="display: none;">Alpari-Trade</option>
                            <option class="48" value="1020" style="display: none;">Alpari-Trade02</option>
                            <option class="157" value="441" style="display: none;">Alvexo-Demo</option>
                            <option class="157" value="442" style="display: none;">Alvexo-Real</option>
                            <option class="157" value="443" style="display: none;">Alvexo1-Demo</option>
                            <option class="157" value="444" style="display: none;">Alvexo1-Primary Server</option>
                            <option class="378" value="1075" style="display: none;">AmanaCapital-Demo</option>
                            <option class="378" value="1076" style="display: none;">AmanaCapital-Live</option>
                            <option class="369" value="1047" style="display: none;">AmanaCapital-Real</option>
                            <option class="255" value="698" style="display: none;">AmaxGlobal-Demo</option>
                            <option class="255" value="699" style="display: none;">AmaxGlobal-Live</option>
                            <option class="165" value="458" style="display: none;">AMPGlobalClearing-Demo-CQG</option>
                            <option class="165" value="459" style="display: none;">AMPGlobalClearing-Live-CQG</option>
                            <option class="165" value="460" style="display: none;">AMPGlobalClearingEU-Demo-CQG</option>
                            <option class="165" value="461" style="display: none;">AMPGlobalClearingEU-Live-CQG</option>
                            <option class="99" value="283" style="display: none;">AnforeLimited-Live</option>
                            <option class="232" value="626" style="display: none;">AnzoCapital-Demo</option>
                            <option class="232" value="627" style="display: none;">AnzoCapital-Live</option>
                            <option class="141" value="415" style="display: none;">ApolloMarkets-MetaTrader5</option>
                            <option class="224" value="609" style="display: none;">ArgusFX-Demo</option>
                            <option class="224" value="610" style="display: none;">ArgusFX-Live</option>
                            <option class="153" value="434" style="display: none;">AskapAssetMgmt-Demo</option>
                            <option class="153" value="435" style="display: none;">AskapAssetMgmt-Main</option>
                            <option class="371" value="1052" style="display: none;">ATAMarkets-Demo</option>
                            <option class="371" value="1053" style="display: none;">ATAMarkets-Live</option>
                            <option class="125" value="366" style="display: none;">ATCBrokers-Demo</option>
                            <option class="125" value="367" style="display: none;">ATCBrokers-Live 1</option>
                            <option class="125" value="368" style="display: none;">ATCBrokers-Live 2</option>
                            <option class="321" value="886" style="display: none;">ATFXGM1-Live</option>
                            <option class="321" value="882" style="display: none;">ATFXGM2-Demo</option>
                            <option class="321" value="883" style="display: none;">ATFXGM2-Live</option>
                            <option class="321" value="1021" style="display: none;">ATFXGM7-Live</option>
                            <option class="150" value="869" style="display: none;">AtlanticPearl-Demo</option>
                            <option class="150" value="430" style="display: none;">AtlanticPearl-Live 1</option>
                            <option class="150" value="431" style="display: none;">AtlanticPearl-Live 2</option>
                            <option class="4" value="9" style="display: none;">Atom8 Demo</option>
                            <option class="4" value="8" style="display: none;">Atom8 Live</option>
                            <option class="1" value="2" style="display: none;">AuraFX-Demo</option>
                            <option class="1" value="150" style="display: none;">AuraFX-LD Live</option>
                            <option class="1" value="7" style="display: none;">AuraFX-Live</option>
                            <option class="1" value="948" style="display: none;">AuraFX-Live-2</option>
                            <option class="1" value="1" style="display: none;">AuraFX-NY Live</option>
                            <option class="56" value="426" style="display: none;">AUSForex-Demo</option>
                            <option class="56" value="155" style="display: none;">AUSForex-Live</option>
                            <option class="56" value="436" style="display: none;">AUSForex-Live 2</option>
                            <option class="110" value="323" style="display: none;">Ava-Demo</option>
                            <option class="110" value="324" style="display: none;">Ava-Demo 2</option>
                            <option class="110" value="325" style="display: none;">Ava-Real 1</option>
                            <option class="110" value="326" style="display: none;">Ava-Real 2</option>
                            <option class="110" value="327" style="display: none;">Ava-Real 3</option>
                            <option class="110" value="328" style="display: none;">Ava-Real 4</option>
                            <option class="110" value="1043" style="display: none;">Ava-Real 5</option>
                            <option class="11" value="23" style="display: none;">AxiTrader-US01-Demo</option>
                            <option class="11" value="24" style="display: none;">AxiTrader-US02-Live</option>
                            <option class="11" value="27" style="display: none;">AxiTrader-US03-Demo</option>
                            <option class="11" value="25" style="display: none;">AxiTrader-US03-Live</option>
                            <option class="11" value="26" style="display: none;">AxiTrader-US05-Live</option>
                            <option class="11" value="33" style="display: none;">AxiTrader-US06-Live</option>
                            <option class="11" value="577" style="display: none;">AxiTrader-US07-Live</option>
                            <option class="11" value="87" style="display: none;">AxiTrader-US09-Live</option>
                            <option class="11" value="549" style="display: none;">AxiTrader-US888-Demo</option>
                            <option class="11" value="550" style="display: none;">AxiTrader-US888-Live</option>
                            <option class="372" value="1056" style="display: none;">B2Broker-Demo</option>
                            <option class="372" value="1055" style="display: none;">B2Broker-Real</option>
                            <option class="161" value="452" style="display: none;">BDSwiss-Demo01</option>
                            <option class="161" value="453" style="display: none;">BDSwiss-Real01</option>
                            <option class="161" value="837" style="display: none;">BDSwiss-Real02</option>
                            <option class="161" value="838" style="display: none;">BDSwissGlobal-Demo01</option>
                            <option class="161" value="839" style="display: none;">BDSwissGlobal-Real01</option>
                            <option class="161" value="840" style="display: none;">BDSwissGlobal-Real02</option>
                            <option class="166" value="468" style="display: none;">BigDragonEnterprises-Live</option>
                            <option class="352" value="1037" style="display: none;">Binary.com-Demo</option>
                            <option class="352" value="996" style="display: none;">Binary.com-Server</option>
                            <option class="186" value="508" style="display: none;">BlackBullMarkets-Live</option>
                            <option class="163" value="455" style="display: none;">BlackPearlFX-Live</option>
                            <option class="30" value="492" style="display: none;">BlackwellGlobal-Demo</option>
                            <option class="30" value="90" style="display: none;">BlackwellGlobal-Live</option>
                            <option class="30" value="573" style="display: none;">BlackwellGlobal-Live2</option>
                            <option class="30" value="91" style="display: none;">BlackwellGlobal1-Live5</option>
                            <option class="30" value="868" style="display: none;">BlackwellGlobal2-Live3</option>
                            <option class="191" value="517" style="display: none;">BlueberryMarkets-Demo</option>
                            <option class="191" value="518" style="display: none;">BlueberryMarkets-Real</option>
                            <option class="191" value="1080" style="display: none;">BlueberryMarkets2-Real2</option>
                            <option class="31" value="92" style="display: none;">BMFN-DemoFX</option>
                            <option class="31" value="96" style="display: none;">BMFN-DMA</option>
                            <option class="31" value="95" style="display: none;">BMFN-Institutional</option>
                            <option class="31" value="94" style="display: none;">BMFN-RealCFD</option>
                            <option class="31" value="93" style="display: none;">BMFN-RealFX</option>
                            <option class="203" value="553" style="display: none;">BrightWin-Primary</option>
                            <option class="180" value="496" style="display: none;">BuckingGroupLimited-Live</option>
                            <option class="206" value="560" style="display: none;">Butenix-Server</option>
                            <option class="66" value="174" style="display: none;">CapitalCityMarkets-Demo</option>
                            <option class="66" value="175" style="display: none;">CapitalCityMarkets-Live</option>
                            <option class="32" value="386" style="display: none;">CapitalIndex-Demo</option>
                            <option class="32" value="98" style="display: none;">CapitalIndex-Live</option>
                            <option class="32" value="799" style="display: none;">CapitalIndexGlobal-Demo</option>
                            <option class="32" value="800" style="display: none;">CapitalIndexGlobal-Live</option>
                            <option class="32" value="863" style="display: none;">CapitalIndexUK-Live</option>
                            <option class="115" value="343" style="display: none;">CCCUK-Live</option>
                            <option class="265" value="723" style="display: none;">CFHClearing-Demo</option>
                            <option class="265" value="724" style="display: none;">CFHClearing-Live1</option>
                            <option class="337" value="958" style="display: none;">ChandonGroup-Server</option>
                            <option class="158" value="445" style="display: none;">Charterprime-Demo</option>
                            <option class="158" value="446" style="display: none;">Charterprime-Live</option>
                            <option class="218" value="592" style="display: none;">CityWealth-Demo</option>
                            <option class="218" value="593" style="display: none;">CityWealth-Live</option>
                            <option class="253" value="694" style="display: none;">CMCMarkets1-Demo</option>
                            <option class="253" value="985" style="display: none;">CMCMarkets1-Europe</option>
                            <option class="253" value="695" style="display: none;">CMCMarkets1-Live</option>
                            <option class="259" value="708" style="display: none;">CMTrading-Demo</option>
                            <option class="259" value="709" style="display: none;">CMTrading-Live</option>
                            <option class="240" value="651" style="display: none;">Coinexx-Demo</option>
                            <option class="228" value="617" style="display: none;">Coinexx-Demo</option>
                            <option class="228" value="618" style="display: none;">Coinexx-Live</option>
                            <option class="240" value="652" style="display: none;">Coinexx-Live</option>
                            <option class="91" value="265" style="display: none;">CoreLiquidityMarkets-Live 2</option>
                            <option class="71" value="462" style="display: none;">CoreSpreads-DemoBravo</option>
                            <option class="71" value="184" style="display: none;">CoreSpreads-LiveBravo</option>
                            <option class="183" value="502" style="display: none;">CPTMarkets-Demo</option>
                            <option class="183" value="503" style="display: none;">CPTMarkets-Live</option>
                            <option class="299" value="818" style="display: none;">CrescoCapitalMarkets-DemoUK</option>
                            <option class="299" value="819" style="display: none;">CrescoCapitalMarkets-LiveUK</option>
                            <option class="349" value="987" style="display: none;">CryptoRocket-Demo3</option>
                            <option class="349" value="988" style="display: none;">CryptoRocket-Real3</option>
                            <option class="98" value="280" style="display: none;">CSIGroupLtd-Live</option>
                            <option class="377" value="1065" style="display: none;">CXMTradingLtd-Demo</option>
                            <option class="377" value="1066" style="display: none;">CXMTradingLtd-Real</option>
                            <option class="307" value="843" style="display: none;">Darwinex-Demo</option>
                            <option class="307" value="844" style="display: none;">Darwinex-Live</option>
                            <option class="149" value="429" style="display: none;">Darwinex-Live</option>
                            <option class="43" value="122" style="display: none;">DIDIFX-Asia 1</option>
                            <option class="43" value="123" style="display: none;">DIDIFX-Demo Server</option>
                            <option class="33" value="143" style="display: none;">DKB-US01-Demo</option>
                            <option class="33" value="99" style="display: none;">DKB-US06-Live</option>
                            <option class="212" value="574" style="display: none;">Dukascopy-DEMO-1</option>
                            <option class="212" value="575" style="display: none;">Dukascopy-LIVE-1</option>
                            <option class="326" value="900" style="display: none;">EagleFX-Demo</option>
                            <option class="326" value="901" style="display: none;">EagleFX-Live</option>
                            <option class="333" value="929" style="display: none;">EastridgeCapital-Demo</option>
                            <option class="333" value="930" style="display: none;">EastridgeCapital-Live</option>
                            <option class="75" value="198" style="display: none;">EasyForex-Demo</option>
                            <option class="75" value="199" style="display: none;">EasyForex-Live</option>
                            <option class="151" value="432" style="display: none;">EBFSGroup-MainServer</option>
                            <option class="50" value="142" style="display: none;">ECI Demo</option>
                            <option class="50" value="141" style="display: none;">ECI Live</option>
                            <option class="303" value="911" style="display: none;">EGlobal-Cent1</option>
                            <option class="90" value="793" style="display: none;">EGlobal-Cent2</option>
                            <option class="90" value="264" style="display: none;">EGlobal-Cent4</option>
                            <option class="303" value="829" style="display: none;">EGlobal-Cent5</option>
                            <option class="340" value="963" style="display: none;">EGMSecurities-Demo</option>
                            <option class="340" value="964" style="display: none;">EGMSecurities-Live</option>
                            <option class="192" value="519" style="display: none;">Eightcap-Demo</option>
                            <option class="192" value="520" style="display: none;">Eightcap-Real</option>
                            <option class="222" value="606" style="display: none;">EliteMarket-Demo</option>
                            <option class="222" value="607" style="display: none;">EliteMarket-Live</option>
                            <option class="24" value="79" style="display: none;">ElxiMarkets-Demo</option>
                            <option class="24" value="78" style="display: none;">ElxiMarkets-Live</option>
                            <option class="322" value="887" style="display: none;">Eone-Demo</option>
                            <option class="322" value="888" style="display: none;">Eone-Live</option>
                            <option class="298" value="833" style="display: none;">EquitiGroup-Demo</option>
                            <option class="298" value="834" style="display: none;">EquitiGroup-Live</option>
                            <option class="298" value="815" style="display: none;">EquitiUS-Demo</option>
                            <option class="298" value="816" style="display: none;">EquitiUS-Live</option>
                            <option class="298" value="817" style="display: none;">EquitiUS-Live 2</option>
                            <option class="181" value="497" style="display: none;">ETO-Live</option>
                            <option class="86" value="247" style="display: none;">ETXCapital-Live Server</option>
                            <option class="86" value="619" style="display: none;">ETXCapital-Live2 Server</option>
                            <option class="273" value="748" style="display: none;">EuropeFX1-Demo</option>
                            <option class="273" value="749" style="display: none;">EuropeFX1-Live</option>
                            <option class="273" value="750" style="display: none;">EuropeFXAU-Demo</option>
                            <option class="273" value="751" style="display: none;">EuropeFXAU-Live3</option>
                            <option class="332" value="924" style="display: none;">EuroTradeGlobal-Demo01</option>
                            <option class="332" value="925" style="display: none;">EuroTradeGlobal-Live01</option>
                            <option class="332" value="926" style="display: none;">EuroTradeInvestments-Demo01</option>
                            <option class="332" value="927" style="display: none;">EuroTradeInvestments-Live01</option>
                            <option class="283" value="777" style="display: none;">EverforexFinancial-Demo</option>
                            <option class="283" value="778" style="display: none;">EverforexFinancial-Live</option>
                            <option class="275" value="756" style="display: none;">EvolveMarkets-MT5 Demo Server</option>
                            <option class="275" value="757" style="display: none;">EvolveMarkets-MT5 Live Server</option>
                            <option class="136" value="400" style="display: none;">ExclusiveCapital-Demo</option>
                            <option class="136" value="399" style="display: none;">ExclusiveCapital-Live</option>
                            <option class="89" value="262" style="display: none;">Exness-Real</option>
                            <option class="89" value="1069" style="display: none;">Exness-Real12</option>
                            <option class="89" value="263" style="display: none;">Exness-Real2</option>
                            <option class="89" value="281" style="display: none;">Exness-Real3</option>
                            <option class="89" value="282" style="display: none;">Exness-Real4</option>
                            <option class="89" value="945" style="display: none;">Exness-Real5</option>
                            <option class="89" value="946" style="display: none;">Exness-Real6</option>
                            <option class="89" value="1041" style="display: none;">Exness-Trial</option>
                            <option class="287" value="789" style="display: none;">F1Markets-Demo</option>
                            <option class="287" value="790" style="display: none;">F1Markets-Live</option>
                            <option class="100" value="285" style="display: none;">FBS-Demo</option>
                            <option class="100" value="286" style="display: none;">FBS-Real-1</option>
                            <option class="100" value="599" style="display: none;">FBS-Real-10</option>
                            <option class="100" value="287" style="display: none;">FBS-Real-2</option>
                            <option class="100" value="288" style="display: none;">FBS-Real-3</option>
                            <option class="100" value="289" style="display: none;">FBS-Real-4</option>
                            <option class="100" value="290" style="display: none;">FBS-Real-5</option>
                            <option class="100" value="291" style="display: none;">FBS-Real-6</option>
                            <option class="100" value="292" style="display: none;">FBS-Real-7</option>
                            <option class="100" value="293" style="display: none;">FBS-Real-8</option>
                            <option class="100" value="294" style="display: none;">FBS-Real-9</option>
                            <option class="267" value="728" style="display: none;">FFSMarkets-Demo</option>
                            <option class="267" value="727" style="display: none;">FFSMarkets-Live</option>
                            <option class="364" value="1034" style="display: none;">FFTraderSRO-Demo</option>
                            <option class="364" value="1035" style="display: none;">FFTraderSRO-Live</option>
                            <option class="204" value="555" style="display: none;">FidelisCapitalMarkets-Live</option>
                            <option class="379" value="1078" style="display: none;">FinsaPty-DemoBravo</option>
                            <option class="379" value="1079" style="display: none;">FinsaPty-LiveBravo</option>
                            <option class="314" value="860" style="display: none;">FintecGlobalMarkets-Server</option>
                            <option class="68" value="178" style="display: none;">FirstFX-Demo</option>
                            <option class="68" value="179" style="display: none;">FirstFX-Main</option>
                            <option class="62" value="164" style="display: none;">FIXI-US01-Demo</option>
                            <option class="62" value="165" style="display: none;">FIXI-US01-Live</option>
                            <option class="62" value="299" style="display: none;">FixiMarkets-Live</option>
                            <option class="184" value="504" style="display: none;">FixiMarkets-Live</option>
                            <option class="117" value="347" style="display: none;">FoisonGroup-Live</option>
                            <option class="59" value="457" style="display: none;">Forex.com-Demo 106</option>
                            <option class="59" value="173" style="display: none;">Forex.com-Demo 5</option>
                            <option class="6" value="12" style="display: none;">Forex.com-Demo(R)</option>
                            <option class="59" value="379" style="display: none;">Forex.com-Demo(R)</option>
                            <option class="59" value="997" style="display: none;">Forex.com-Live 120</option>
                            <option class="59" value="463" style="display: none;">Forex.com-Live 121</option>
                            <option class="59" value="465" style="display: none;">Forex.com-Live 122</option>
                            <option class="59" value="466" style="display: none;">Forex.com-Live 123</option>
                            <option class="59" value="467" style="display: none;">Forex.com-Live 124</option>
                            <option class="59" value="464" style="display: none;">Forex.com-Live 125</option>
                            <option class="6" value="29" style="display: none;">Forex.com-Live 17</option>
                            <option class="59" value="346" style="display: none;">Forex.com-Live 17</option>
                            <option class="59" value="380" style="display: none;">Forex.com-Live 23</option>
                            <option class="59" value="159" style="display: none;">Forex.com-Live 24</option>
                            <option class="59" value="418" style="display: none;">Forex.com-Live 7</option>
                            <option class="6" value="28" style="display: none;">Forex.com-Live 7</option>
                            <option class="229" value="621" style="display: none;">FOREX.comCA-Live 130</option>
                            <option class="59" value="849" style="display: none;">Forex.comUK-Live 112</option>
                            <option class="276" value="759" style="display: none;">ForexChief-Classic</option>
                            <option class="276" value="760" style="display: none;">ForexChief-Demo</option>
                            <option class="276" value="761" style="display: none;">ForexChief-DirectFX</option>
                            <option class="304" value="830" style="display: none;">ForexChief-MT5</option>
                            <option class="111" value="331" style="display: none;">ForexExpand-Demo</option>
                            <option class="111" value="332" style="display: none;">ForexExpand-Live </option>
                            <option class="134" value="396" style="display: none;">ForexTime-MT5</option>
                            <option class="74" value="189" style="display: none;">ForexTimeFXTM-Cent</option>
                            <option class="74" value="190" style="display: none;">ForexTimeFXTM-Cent-demo</option>
                            <option class="74" value="191" style="display: none;">ForexTimeFXTM-ECN</option>
                            <option class="74" value="192" style="display: none;">ForexTimeFXTM-ECN-demo</option>
                            <option class="74" value="193" style="display: none;">ForexTimeFXTM-ECN-Zero</option>
                            <option class="74" value="194" style="display: none;">ForexTimeFXTM-ECN-Zero-demo</option>
                            <option class="134" value="395" style="display: none;">ForexTimeFXTM-MT5</option>
                            <option class="74" value="195" style="display: none;">ForexTimeFXTM-Pro</option>
                            <option class="74" value="196" style="display: none;">ForexTimeFXTM-Standard</option>
                            <option class="74" value="197" style="display: none;">ForexTimeFXTM-Standard-demo</option>
                            <option class="104" value="302" style="display: none;">Forexware-Asia 1</option>
                            <option class="104" value="303" style="display: none;">Forexware-Asia 2</option>
                            <option class="104" value="304" style="display: none;">Forexware-Asia 3</option>
                            <option class="104" value="305" style="display: none;">Forexware-Asia Demo</option>
                            <option class="104" value="306" style="display: none;">Forexware-Demo Server</option>
                            <option class="104" value="307" style="display: none;">Forexware-Live 7</option>
                            <option class="104" value="308" style="display: none;">Forexware-Live 8</option>
                            <option class="104" value="309" style="display: none;">Forexware-London</option>
                            <option class="77" value="201" style="display: none;">FormaxTrader-Live</option>
                            <option class="93" value="552" style="display: none;">FortFS-Demo</option>
                            <option class="93" value="268" style="display: none;">FortFS-Real</option>
                            <option class="262" value="715" style="display: none;">ForTrade-Demo01</option>
                            <option class="262" value="716" style="display: none;">ForTrade-Real01</option>
                            <option class="262" value="717" style="display: none;">FortradeAU-Demo01</option>
                            <option class="262" value="718" style="display: none;">FortradeAU-Real01</option>
                            <option class="200" value="541" style="display: none;">FortuneWay-Demo</option>
                            <option class="200" value="542" style="display: none;">FortuneWay-Live</option>
                            <option class="155" value="828" style="display: none;">ForYouGlobal-Demo</option>
                            <option class="155" value="438" style="display: none;">ForYouGlobal-Primary</option>
                            <option class="70" value="182" style="display: none;">FPMarkets-Demo</option>
                            <option class="70" value="183" style="display: none;">FPMarkets-Live</option>
                            <option class="178" value="493" style="display: none;">FTT-Demo</option>
                            <option class="217" value="590" style="display: none;">FullertonMarkets-Demo</option>
                            <option class="217" value="591" style="display: none;">FullertonMarkets-Live</option>
                            <option class="292" value="801" style="display: none;">FusionMarkets-Demo</option>
                            <option class="292" value="802" style="display: none;">FusionMarkets-Live</option>
                            <option class="112" value="333" style="display: none;">FXAdamantStone-Demo</option>
                            <option class="112" value="334" style="display: none;">FXAdamantStone-Live</option>
                            <option class="119" value="349" style="display: none;">FXCC-Demo</option>
                            <option class="119" value="350" style="display: none;">FXCC-Live</option>
                            <option class="119" value="752" style="display: none;">FXCC1-Demo</option>
                            <option class="119" value="753" style="display: none;">FXCC1-Live</option>
                            <option class="45" value="131" style="display: none;">FXChoice-Classic Demo</option>
                            <option class="45" value="132" style="display: none;">FXChoice-Classic Live</option>
                            <option class="242" value="658" style="display: none;">FXChoice-MetaTrader 5 Pro</option>
                            <option class="45" value="129" style="display: none;">FXChoice-Pro Demo</option>
                            <option class="45" value="130" style="display: none;">FXChoice-Pro Live</option>
                            <option class="42" value="940" style="display: none;">FXCM-AUDReal01</option>
                            <option class="42" value="596" style="display: none;">FXCM-EURDemo01</option>
                            <option class="42" value="136" style="display: none;">FXCM-EURReal01</option>
                            <option class="42" value="1077" style="display: none;">FXCM-GBPReal01</option>
                            <option class="42" value="128" style="display: none;">FXCM-MT4-2.0-USDReal04</option>
                            <option class="42" value="120" style="display: none;">FXCM-USDDemo01</option>
                            <option class="42" value="121" style="display: none;">FXCM-USDDemo02</option>
                            <option class="42" value="991" style="display: none;">FXCM-USDReal07</option>
                            <option class="144" value="421" style="display: none;">FXDD-Demo</option>
                            <option class="37" value="109" style="display: none;">FXDDMalta-MT4 Demo Server</option>
                            <option class="291" value="798" style="display: none;">FXGate-Live</option>
                            <option class="52" value="931" style="display: none;">FXGiantsBM-Real4</option>
                            <option class="52" value="149" style="display: none;">FXGiantsUK-Demo1</option>
                            <option class="52" value="146" style="display: none;">FXGiantsUK-Real3</option>
                            <option class="52" value="147" style="display: none;">FXGiantsUK-Real4</option>
                            <option class="52" value="148" style="display: none;">FXGiantsUK-Real8</option>
                            <option class="18" value="68" style="display: none;">FXGlobe-Demo</option>
                            <option class="18" value="65" style="display: none;">FXGlobe-Real</option>
                            <option class="54" value="153" style="display: none;">FXGlory-Demo Server</option>
                            <option class="54" value="152" style="display: none;">FXGlory-Real Server</option>
                            <option class="296" value="870" style="display: none;">FXOpen-ECN Demo Server</option>
                            <option class="296" value="832" style="display: none;">FXOpen-Real2</option>
                            <option class="296" value="812" style="display: none;">FXOpenUK-ECN Live Server</option>
                            <option class="296" value="811" style="display: none;">FXOpenUK-Real1</option>
                            <option class="208" value="562" style="display: none;">FXOPTIMAX-DemoUS</option>
                            <option class="208" value="563" style="display: none;">FXOPTIMAX-LiveUS</option>
                            <option class="147" value="427" style="display: none;">FXPIG.com-LD4 LIVE</option>
                            <option class="109" value="318" style="display: none;">FXPRIMUS-Live</option>
                            <option class="109" value="319" style="display: none;">FXPRIMUS-Live-2</option>
                            <option class="109" value="320" style="display: none;">FXPRIMUS-Live-3</option>
                            <option class="109" value="321" style="display: none;">FXPRIMUS-Live-4</option>
                            <option class="109" value="322" style="display: none;">FXPRIMUS-Practice</option>
                            <option class="129" value="390" style="display: none;">FxPro-MT5</option>
                            <option class="14" value="46" style="display: none;">FxPro.com-Demo01</option>
                            <option class="14" value="47" style="display: none;">FxPro.com-Demo02</option>
                            <option class="14" value="48" style="display: none;">FxPro.com-Demo03</option>
                            <option class="14" value="49" style="display: none;">FxPro.com-Demo04</option>
                            <option class="14" value="50" style="display: none;">FxPro.com-Demo05</option>
                            <option class="14" value="41" style="display: none;">FxPro.com-Real01</option>
                            <option class="14" value="42" style="display: none;">FxPro.com-Real02</option>
                            <option class="14" value="43" style="display: none;">FxPro.com-Real03</option>
                            <option class="14" value="44" style="display: none;">FxPro.com-Real04</option>
                            <option class="14" value="45" style="display: none;">FxPro.com-Real05</option>
                            <option class="14" value="476" style="display: none;">FxPro.com-Real06</option>
                            <option class="14" value="904" style="display: none;">FxPro.com-Real07</option>
                            <option class="370" value="1049" style="display: none;">GBEbrokers-Demo</option>
                            <option class="370" value="1050" style="display: none;">GBEbrokers-Live</option>
                            <option class="39" value="115" style="display: none;">GCFFX-Demo</option>
                            <option class="39" value="116" style="display: none;">GCFFX-Live</option>
                            <option class="339" value="961" style="display: none;">GCMAsia-Demo01</option>
                            <option class="339" value="962" style="display: none;">GCMAsia-Real01</option>
                            <option class="51" value="144" style="display: none;">GemhoPriorityMarkets-Demo</option>
                            <option class="51" value="145" style="display: none;">GemhoPriorityMarkets-Live</option>
                            <option class="26" value="124" style="display: none;">GKFX-Demo-1</option>
                            <option class="26" value="125" style="display: none;">GKFX-Demo-2</option>
                            <option class="26" value="83" style="display: none;">GKFX-Live-2</option>
                            <option class="26" value="990" style="display: none;">GKFXPrime-Demo-1</option>
                            <option class="26" value="469" style="display: none;">GKFXPrime-Live-1</option>
                            <option class="26" value="823" style="display: none;">GKFXPrime-Live-1.3</option>
                            <option class="26" value="588" style="display: none;">GKFXPrime-Live-1.4</option>
                            <option class="199" value="539" style="display: none;">GlobalClearingGroup-Demo</option>
                            <option class="199" value="540" style="display: none;">GlobalClearingGroup-Live</option>
                            <option class="198" value="537" style="display: none;">GlobalFxService-Demo</option>
                            <option class="198" value="538" style="display: none;">GlobalFxService-Live</option>
                            <option class="205" value="556" style="display: none;">GlobalPrime-Demo</option>
                            <option class="205" value="557" style="display: none;">GlobalPrime-Live</option>
                            <option class="327" value="902" style="display: none;">Globex360-DEMO</option>
                            <option class="327" value="903" style="display: none;">Globex360-LIVE</option>
                            <option class="211" value="569" style="display: none;">GlobiaWealth-Demo</option>
                            <option class="211" value="570" style="display: none;">GlobiaWealth-Live</option>
                            <option class="114" value="341" style="display: none;">GMI-Demo01</option>
                            <option class="114" value="342" style="display: none;">GMI-Demo03</option>
                            <option class="114" value="337" style="display: none;">GMI-Live01</option>
                            <option class="114" value="338" style="display: none;">GMI-Live02</option>
                            <option class="114" value="339" style="display: none;">GMI-Live03</option>
                            <option class="114" value="340" style="display: none;">GMI-Live04</option>
                            <option class="334" value="936" style="display: none;">GMIEdge-Demo01</option>
                            <option class="334" value="937" style="display: none;">GMIEdge-Live01</option>
                            <option class="334" value="938" style="display: none;">GMIEdge-Live05</option>
                            <option class="239" value="648" style="display: none;">GMOZ.comTrade-Demo Server</option>
                            <option class="239" value="649" style="display: none;">GMOZ.comTrade-Live Server</option>
                            <option class="358" value="1015" style="display: none;">GNTCapital-Demo</option>
                            <option class="362" value="1031" style="display: none;">GNTCapital-Demo</option>
                            <option class="362" value="1032" style="display: none;">GNTCapital-Live</option>
                            <option class="358" value="1016" style="display: none;">GNTCapital-Live 2</option>
                            <option class="170" value="477" style="display: none;">GoldenGrandGlobal-Live </option>
                            <option class="103" value="300" style="display: none;">Goldstone-Demo</option>
                            <option class="103" value="301" style="display: none;">Goldstone-Live</option>
                            <option class="361" value="1026" style="display: none;">GoldwellCapital-Demo</option>
                            <option class="361" value="1027" style="display: none;">GoldwellCapital-Live2</option>
                            <option class="361" value="1028" style="display: none;">GoldwellCapital-Live3</option>
                            <option class="289" value="794" style="display: none;">GoMarkets-Demo</option>
                            <option class="64" value="167" style="display: none;">GoMarkets-Demo</option>
                            <option class="289" value="795" style="display: none;">GoMarkets-Live</option>
                            <option class="64" value="168" style="display: none;">GoMarkets-Real 1</option>
                            <option class="64" value="169" style="display: none;">GoMarkets-Real 2</option>
                            <option class="64" value="170" style="display: none;">GoMarkets-Real 8</option>
                            <option class="64" value="771" style="display: none;">GoMarkets-Real 9</option>
                            <option class="359" value="1018" style="display: none;">GrandCapital-demo</option>
                            <option class="359" value="1019" style="display: none;">GrandCapital-Server</option>
                            <option class="346" value="981" style="display: none;">GrandInvestingLtd-Demo</option>
                            <option class="346" value="982" style="display: none;">GrandInvestingLtd-Real2</option>
                            <option class="354" value="1004" style="display: none;">GrintaInvest-Demo</option>
                            <option class="354" value="1005" style="display: none;">GrintaInvest-Real</option>
                            <option class="152" value="433" style="display: none;">GSG-Live</option>
                            <option class="22" value="74" style="display: none;">GTHFX-LIVE</option>
                            <option class="285" value="782" style="display: none;">GTSPrime-Demo</option>
                            <option class="285" value="781" style="display: none;">GTSPrime-Live</option>
                            <option class="5" value="10" style="display: none;">HalifaxPro-Demo</option>
                            <option class="5" value="11" style="display: none;">HalifaxPro-Live</option>
                            <option class="380" value="1081" style="display: none;">Hankotrade-Demo</option>
                            <option class="380" value="1082" style="display: none;">Hankotrade-Live</option>
                            <option class="159" value="447" style="display: none;">HantecGlobal-Demo</option>
                            <option class="159" value="448" style="display: none;">HantecGlobal-Live</option>
                            <option class="159" value="856" style="display: none;">HantecMarketsAu-S2-Main</option>
                            <option class="159" value="1051" style="display: none;">HantecMarketsLtd-Server4</option>
                            <option class="120" value="353" style="display: none;">Henyep-Demo</option>
                            <option class="120" value="354" style="display: none;">Henyep-DemoEU</option>
                            <option class="120" value="355" style="display: none;">Henyep-Live</option>
                            <option class="302" value="824" style="display: none;">HermesMarket-DEMO</option>
                            <option class="302" value="825" style="display: none;">HermesMarket-LIVE</option>
                            <option class="121" value="831" style="display: none;">HFMarketsEurope-Demo Server 2</option>
                            <option class="121" value="989" style="display: none;">HFMarketsSA-Live Server 3</option>
                            <option class="121" value="356" style="display: none;">HFMarketsSV-Demo Server</option>
                            <option class="121" value="357" style="display: none;">HFMarketsSV-Live Server</option>
                            <option class="121" value="358" style="display: none;">HFMarketsSV-Live Server 3</option>
                            <option class="121" value="359" style="display: none;">HFMarketsSV-Live Server 4</option>
                            <option class="121" value="543" style="display: none;">HFMarketsSV-Live Server 5</option>
                            <option class="121" value="949" style="display: none;">HFMarketsSV-Live Server 6</option>
                            <option class="202" value="547" style="display: none;">HugosWay-Demo3</option>
                            <option class="202" value="548" style="display: none;">HugosWay-Real3</option>
                            <option class="213" value="579" style="display: none;">HVMarkets-Demo</option>
                            <option class="213" value="578" style="display: none;">HVMarkets-Live03</option>
                            <option class="177" value="491" style="display: none;">HYCM-Demo</option>
                            <option class="177" value="529" style="display: none;">HYCM-DemoEU</option>
                            <option class="177" value="765" style="display: none;">HYCM-Live</option>
                            <option class="300" value="820" style="display: none;">IceFX-Server</option>
                            <option class="278" value="764" style="display: none;">ICFXCompany-Server</option>
                            <option class="135" value="398" style="display: none;">ICMarkets-Demo</option>
                            <option class="17" value="56" style="display: none;">ICMarkets-Demo01</option>
                            <option class="17" value="60" style="display: none;">ICMarkets-Demo02</option>
                            <option class="17" value="551" style="display: none;">ICMarkets-Demo03</option>
                            <option class="17" value="57" style="display: none;">ICMarkets-Live01</option>
                            <option class="17" value="58" style="display: none;">ICMarkets-Live02</option>
                            <option class="17" value="61" style="display: none;">ICMarkets-Live03</option>
                            <option class="17" value="62" style="display: none;">ICMarkets-Live04</option>
                            <option class="17" value="59" style="display: none;">ICMarkets-Live05</option>
                            <option class="17" value="63" style="display: none;">ICMarkets-Live06</option>
                            <option class="17" value="64" style="display: none;">ICMarkets-Live07</option>
                            <option class="17" value="261" style="display: none;">ICMarkets-Live08</option>
                            <option class="17" value="260" style="display: none;">ICMarkets-Live09</option>
                            <option class="17" value="259" style="display: none;">ICMarkets-Live10</option>
                            <option class="17" value="284" style="display: none;">ICMarkets-Live11</option>
                            <option class="17" value="451" style="display: none;">ICMarkets-Live12</option>
                            <option class="17" value="558" style="display: none;">ICMarkets-Live14</option>
                            <option class="17" value="602" style="display: none;">ICMarkets-Live15</option>
                            <option class="17" value="603" style="display: none;">ICMarkets-Live16</option>
                            <option class="17" value="773" style="display: none;">ICMarkets-Live17</option>
                            <option class="17" value="804" style="display: none;">ICMarkets-Live18</option>
                            <option class="17" value="859" style="display: none;">ICMarkets-Live19</option>
                            <option class="17" value="939" style="display: none;">ICMarkets-Live20</option>
                            <option class="17" value="1067" style="display: none;">ICMarkets-Live22</option>
                            <option class="135" value="397" style="display: none;">ICMarkets-MT5</option>
                            <option class="135" value="934" style="display: none;">ICMarketsSC-Demo</option>
                            <option class="17" value="932" style="display: none;">ICMarketsSC-Demo01</option>
                            <option class="17" value="898" style="display: none;">ICMarketsSC-Demo02</option>
                            <option class="17" value="933" style="display: none;">ICMarketsSC-Demo03</option>
                            <option class="17" value="1017" style="display: none;">ICMarketsSC-Live03</option>
                            <option class="17" value="1002" style="display: none;">ICMarketsSC-Live04</option>
                            <option class="17" value="899" style="display: none;">ICMarketsSC-Live05</option>
                            <option class="17" value="914" style="display: none;">ICMarketsSC-Live10</option>
                            <option class="17" value="889" style="display: none;">ICMarketsSC-Live12</option>
                            <option class="17" value="1054" style="display: none;">ICmarketsSC-Live14</option>
                            <option class="17" value="916" style="display: none;">ICMarketsSC-Live15</option>
                            <option class="17" value="1030" style="display: none;">ICMarketsSC-Live16</option>
                            <option class="17" value="915" style="display: none;">ICMarketsSC-Live17</option>
                            <option class="17" value="976" style="display: none;">ICMarketsSC-Live18</option>
                            <option class="17" value="923" style="display: none;">ICMarketsSC-Live19</option>
                            <option class="17" value="941" style="display: none;">ICMarketsSC-Live20</option>
                            <option class="17" value="1068" style="display: none;">ICMarketsSC-Live22</option>
                            <option class="135" value="935" style="display: none;">ICMarketsSC-MT5</option>
                            <option class="220" value="600" style="display: none;">ICMBrokers-Demo</option>
                            <option class="220" value="601" style="display: none;">ICMBrokers-Live</option>
                            <option class="243" value="659" style="display: none;">ICMCapital-Demo</option>
                            <option class="243" value="660" style="display: none;">ICMCapital-Real</option>
                            <option class="243" value="661" style="display: none;">ICMCapitalVC-Demo</option>
                            <option class="243" value="662" style="display: none;">ICMCapitalVC-LIVE</option>
                            <option class="187" value="509" style="display: none;">ICMTrader-Demo</option>
                            <option class="187" value="510" style="display: none;">ICMTrader-LIVE</option>
                            <option class="123" value="362" style="display: none;">IdeaGroup-Demo</option>
                            <option class="123" value="363" style="display: none;">IdeaGroup-Live</option>
                            <option class="310" value="850" style="display: none;">IFCMarkets-Demo</option>
                            <option class="310" value="851" style="display: none;">IFCMarkets-Real</option>
                            <option class="256" value="700" style="display: none;">IFSMarkets-Demo</option>
                            <option class="256" value="701" style="display: none;">IFSMarkets-Main Server</option>
                            <option class="29" value="88" style="display: none;">IG-DEMO</option>
                            <option class="29" value="89" style="display: none;">IG-LIVE</option>
                            <option class="270" value="738" style="display: none;">IMMFX-Demo</option>
                            <option class="270" value="739" style="display: none;">IMMFX-Real</option>
                            <option class="82" value="229" style="display: none;">ImperiumForexGroup-DEMO</option>
                            <option class="82" value="230" style="display: none;">ImperiumForexGroup-LIVE</option>
                            <option class="19" value="754" style="display: none;">InfinoxCapital-DemoBHS</option>
                            <option class="19" value="524" style="display: none;">InfinoxCapital-InfinoxBHS1</option>
                            <option class="19" value="758" style="display: none;">InfinoxCapital-Live03</option>
                            <option class="19" value="66" style="display: none;">InfinoxCapitalLimited-Demo</option>
                            <option class="19" value="67" style="display: none;">InfinoxCapitalLimited-InfinoxUK</option>
                            <option class="19" value="374" style="display: none;">InfinoxCapitalLimited-InfinoxUK2</option>
                            <option class="19" value="375" style="display: none;">InfinoxCapitalLimited-InfinoxUK3</option>
                            <option class="343" value="974" style="display: none;">IngotBrokers-Demo</option>
                            <option class="343" value="975" style="display: none;">IngotBrokers-Server</option>
                            <option class="350" value="992" style="display: none;">InstaForex-1Demo.com</option>
                            <option class="350" value="1029" style="display: none;">InstaForex-Singapore.com</option>
                            <option class="277" value="762" style="display: none;">IntermaxPro-Demo</option>
                            <option class="277" value="763" style="display: none;">IntermaxPro-Live</option>
                            <option class="88" value="256" style="display: none;">InterTrader-Demo</option>
                            <option class="88" value="258" style="display: none;">InterTrader-Live</option>
                            <option class="88" value="257" style="display: none;">InterTrader-Live Pro</option>
                            <option class="330" value="919" style="display: none;">IntlBusinessFutures-Demo</option>
                            <option class="330" value="920" style="display: none;">IntlBusinessFutures-Live</option>
                            <option class="189" value="512" style="display: none;">InvastGlobal-Live</option>
                            <option class="353" value="998" style="display: none;">InvestoUniTrade-Demo</option>
                            <option class="353" value="999" style="display: none;">InvestoUniTrade-Live</option>
                            <option class="81" value="227" style="display: none;">IPSOMPRIME-Demo</option>
                            <option class="81" value="228" style="display: none;">IPSOMPRIME-Live 2</option>
                            <option class="366" value="1039" style="display: none;">iQuoto-Demo</option>
                            <option class="367" value="1042" style="display: none;">iQuoto-Live</option>
                            <option class="366" value="1040" style="display: none;">iQuoto-Live</option>
                            <option class="139" value="405" style="display: none;">IronFX-Demo1</option>
                            <option class="139" value="406" style="display: none;">IronFX-Real1</option>
                            <option class="139" value="407" style="display: none;">IronFX-Real2</option>
                            <option class="139" value="408" style="display: none;">IronFX-Real3</option>
                            <option class="139" value="409" style="display: none;">IronFX-Real4</option>
                            <option class="139" value="410" style="display: none;">IronFX-Real5</option>
                            <option class="139" value="411" style="display: none;">IronFX-Real6</option>
                            <option class="139" value="412" style="display: none;">IronFX-Real8</option>
                            <option class="139" value="1072" style="display: none;">IronFX-Real9</option>
                            <option class="315" value="864" style="display: none;">ITICapital-Demo</option>
                            <option class="315" value="865" style="display: none;">ITICapital-Live</option>
                            <option class="72" value="186" style="display: none;">ITRADER-Demo</option>
                            <option class="72" value="185" style="display: none;">ITRADER-Live </option>
                            <option class="61" value="162" style="display: none;">JAFX-Demo</option>
                            <option class="61" value="236" style="display: none;">JAFX-Demo3</option>
                            <option class="61" value="163" style="display: none;">JAFX-Real</option>
                            <option class="61" value="237" style="display: none;">JAFX-Real3</option>
                            <option class="57" value="156" style="display: none;">JDome-Live</option>
                            <option class="146" value="423" style="display: none;">JFD-Demo</option>
                            <option class="301" value="821" style="display: none;">JFD-Demo</option>
                            <option class="301" value="822" style="display: none;">JFD-Live</option>
                            <option class="146" value="424" style="display: none;">JFD-Live01</option>
                            <option class="146" value="425" style="display: none;">JFD-Live02</option>
                            <option class="306" value="841" style="display: none;">JPMarkets-Demo </option>
                            <option class="306" value="842" style="display: none;">JPMarkets-Real</option>
                            <option class="145" value="422" style="display: none;">Just2Trade-MT5</option>
                            <option class="294" value="806" style="display: none;">JustForex-Demo</option>
                            <option class="294" value="807" style="display: none;">JustForex-Live</option>
                            <option class="168" value="473" style="display: none;">KapSecure-Demo</option>
                            <option class="168" value="474" style="display: none;">KapSecure-Live</option>
                            <option class="46" value="133" style="display: none;">KDFXUS-Demo</option>
                            <option class="46" value="134" style="display: none;">KDFXUS-Live</option>
                            <option class="95" value="272" style="display: none;">KingsRoadGroup-Demo</option>
                            <option class="95" value="273" style="display: none;">KingsRoadGroup-Live</option>
                            <option class="264" value="721" style="display: none;">KOT-Demo</option>
                            <option class="264" value="722" style="display: none;">KOT-Live</option>
                            <option class="40" value="117" style="display: none;">KTM-Demo</option>
                            <option class="40" value="118" style="display: none;">KTM-Live</option>
                            <option class="21" value="81" style="display: none;">KVBKunlun-Demo Server</option>
                            <option class="21" value="73" style="display: none;">KVBKunlun-Production Server 1</option>
                            <option class="21" value="80" style="display: none;">KVBKunlun-Production Server 2</option>
                            <option class="83" value="238" style="display: none;">LandFX-Demo</option>
                            <option class="83" value="239" style="display: none;">LandFX-Live</option>
                            <option class="83" value="240" style="display: none;">LandFX-Live2</option>
                            <option class="215" value="582" style="display: none;">LCG-Demo1</option>
                            <option class="215" value="583" style="display: none;">LCG-Demo2</option>
                            <option class="215" value="584" style="display: none;">LCG-Live1</option>
                            <option class="215" value="585" style="display: none;">LCG-Live2</option>
                            <option class="348" value="986" style="display: none;">LegacyFX-Server</option>
                            <option class="344" value="977" style="display: none;">LEO-Demo</option>
                            <option class="344" value="978" style="display: none;">LEO-Live</option>
                            <option class="247" value="676" style="display: none;">Leverate-Demo</option>
                            <option class="247" value="677" style="display: none;">Leverate-Europe</option>
                            <option class="247" value="678" style="display: none;">Leverate-Real</option>
                            <option class="94" value="270" style="display: none;">LionBrokersLimited-Demo</option>
                            <option class="94" value="271" style="display: none;">LionBrokersLimited-Live</option>
                            <option class="179" value="494" style="display: none;">LMAX-DemoUK</option>
                            <option class="179" value="495" style="display: none;">LMAX-LiveUK</option>
                            <option class="47" value="226" style="display: none;">LMFX-Demo Server</option>
                            <option class="47" value="135" style="display: none;">LMFX-Live Server 1</option>
                            <option class="365" value="1038" style="display: none;">LordLimited-Server</option>
                            <option class="73" value="187" style="display: none;">LQD-MT4 Demo</option>
                            <option class="73" value="188" style="display: none;">LQD-Real3</option>
                            <option class="73" value="667" style="display: none;">LQD1-Demo01</option>
                            <option class="73" value="525" style="display: none;">LQD1-Live01</option>
                            <option class="250" value="685" style="display: none;">Lucrorfx-Demo1</option>
                            <option class="250" value="686" style="display: none;">Lucrorfx-Live</option>
                            <option class="137" value="401" style="display: none;">MarketsDirectFinancial-Demo</option>
                            <option class="137" value="402" style="display: none;">MarketsDirectFinancial-Live</option>
                            <option class="197" value="535" style="display: none;">MatchTrade-DEMO</option>
                            <option class="197" value="536" style="display: none;">MatchTrade-LIVE</option>
                            <option class="329" value="917" style="display: none;">MaxGlobLimited-Demo</option>
                            <option class="329" value="918" style="display: none;">MaxGlobLimited-Live</option>
                            <option class="143" value="419" style="display: none;">MedernCapitalGroup-Demo</option>
                            <option class="143" value="420" style="display: none;">MedernCapitalGroup-Live</option>
                            <option class="274" value="755" style="display: none;">MeliusMarketing-InfinoxBHS1</option>
                            <option class="279" value="766" style="display: none;">MerchantFX-Demo</option>
                            <option class="279" value="767" style="display: none;">MerchantFX-Live</option>
                            <option class="248" value="682" style="display: none;">MetaQuotes-Demo</option>
                            <option class="69" value="180" style="display: none;">MEXExchange-Demo</option>
                            <option class="69" value="181" style="display: none;">MEXExchange-Live</option>
                            <option class="167" value="470" style="display: none;">MEXIntGroup-Demo</option>
                            <option class="167" value="770" style="display: none;">MEXIntGroup-Real</option>
                            <option class="282" value="775" style="display: none;">MidtouGlobal-Demo</option>
                            <option class="282" value="776" style="display: none;">MidtouGlobal-Live</option>
                            <option class="375" value="1060" style="display: none;">Mixmarket-DEMO</option>
                            <option class="375" value="1061" style="display: none;">Mixmarket-Live</option>
                            <option class="169" value="475" style="display: none;">ModernCapitalGroup-Live</option>
                            <option class="342" value="968" style="display: none;">Monex-Demo</option>
                            <option class="342" value="969" style="display: none;">Monex-Demo4</option>
                            <option class="342" value="970" style="display: none;">Monex-Server</option>
                            <option class="342" value="971" style="display: none;">Monex-Server2</option>
                            <option class="342" value="972" style="display: none;">Monex-Server3</option>
                            <option class="97" value="279" style="display: none;">MSLCapitalMarkets-Demo</option>
                            <option class="97" value="278" style="display: none;">MSLCapitalMarkets-Live</option>
                            <option class="341" value="965" style="display: none;">MTrading-Demo</option>
                            <option class="341" value="966" style="display: none;">MTrading-Live</option>
                            <option class="195" value="571" style="display: none;">MYFX-US01-Demo</option>
                            <option class="195" value="532" style="display: none;">MYFX-US01-Live</option>
                            <option class="195" value="704" style="display: none;">MYFX-US07-Live</option>
                            <option class="233" value="628" style="display: none;">MyGroupFintech-Demo</option>
                            <option class="233" value="629" style="display: none;">MyGroupFintech-Live</option>
                            <option class="324" value="892" style="display: none;">NagaCapitalLtd-Demo</option>
                            <option class="324" value="893" style="display: none;">NagaCapitalLtd-Live</option>
                            <option class="260" value="710" style="display: none;">NagaMarkets-Demo</option>
                            <option class="260" value="711" style="display: none;">NagaMarkets-Live</option>
                            <option class="124" value="365" style="display: none;">NCLFX-Demo</option>
                            <option class="124" value="364" style="display: none;">NCLFX-Live</option>
                            <option class="138" value="403" style="display: none;">NCMInfoConsulting-Demo</option>
                            <option class="138" value="404" style="display: none;">NCMInfoConsulting-Live</option>
                            <option class="266" value="725" style="display: none;">NoaPrime-Demo</option>
                            <option class="266" value="726" style="display: none;">NoaPrime-Live</option>
                            <option class="34" value="100" style="display: none;">NoorCapital-Demo</option>
                            <option class="34" value="101" style="display: none;">NoorCapital-DemoCFD</option>
                            <option class="34" value="104" style="display: none;">NoorCapital-Institutional</option>
                            <option class="34" value="105" style="display: none;">NoorCapital-Live</option>
                            <option class="34" value="106" style="display: none;">NoorCapital-RealCFD</option>
                            <option class="34" value="102" style="display: none;">NoorCapitalFX-Demo</option>
                            <option class="34" value="103" style="display: none;">NoorCapitalFX-Live</option>
                            <option class="35" value="107" style="display: none;">NoorCM-Demo</option>
                            <option class="35" value="108" style="display: none;">NoorCM-Live</option>
                            <option class="316" value="866" style="display: none;">NovoxGroupPty-DEMO</option>
                            <option class="316" value="867" style="display: none;">NovoxGroupPty-Live</option>
                            <option class="60" value="523" style="display: none;">OANDA-GMT+2 Live</option>
                            <option class="60" value="161" style="display: none;">OANDA-GMT-5 Live</option>
                            <option class="60" value="373" style="display: none;">OANDA-GMT-5 Practice</option>
                            <option class="60" value="160" style="display: none;">OANDA-v20 Live</option>
                            <option class="60" value="351" style="display: none;">OANDA-v20 Live-1</option>
                            <option class="60" value="352" style="display: none;">OANDA-v20 Live-2</option>
                            <option class="60" value="768" style="display: none;">OANDA-v20 Practice-1</option>
                            <option class="60" value="516" style="display: none;">OANDA-v20 Practice-2</option>
                            <option class="60" value="769" style="display: none;">OANDA-v20 Practice-3</option>
                            <option class="60" value="1025" style="display: none;">OANDA-v20 Practice-4</option>
                            <option class="190" value="514" style="display: none;">OctaFX-Demo</option>
                            <option class="142" value="416" style="display: none;">OctaFX-Demo</option>
                            <option class="190" value="513" style="display: none;">OctaFX-Real</option>
                            <option class="142" value="417" style="display: none;">OctaFX-Real</option>
                            <option class="190" value="862" style="display: none;">OctaFX-Real2</option>
                            <option class="190" value="967" style="display: none;">OctaFX-Real3</option>
                            <option class="164" value="456" style="display: none;">OdinGroup-Live </option>
                            <option class="67" value="177" style="display: none;">OIG-Demo</option>
                            <option class="67" value="176" style="display: none;">OIG-Live</option>
                            <option class="323" value="890" style="display: none;">OliveFinancialMarkets-Demo</option>
                            <option class="323" value="891" style="display: none;">OliveFinancialMarkets-Live2</option>
                            <option class="249" value="683" style="display: none;">OlympusFinancialGroup-Demo</option>
                            <option class="249" value="684" style="display: none;">OlympusFinancialGroup-Live</option>
                            <option class="295" value="809" style="display: none;">OmegaProServices-DemoBHS</option>
                            <option class="295" value="810" style="display: none;">OmegaProServices-Live03</option>
                            <option class="116" value="344" style="display: none;">OneF-Demo</option>
                            <option class="116" value="345" style="display: none;">OneF-Real</option>
                            <option class="116" value="526" style="display: none;">OneFinancialMarkets-US11-Live</option>
                            <option class="130" value="384" style="display: none;">OracleFinanceInternational-Demo</option>
                            <option class="130" value="385" style="display: none;">OracleFinanceInternational-Live</option>
                            <option class="269" value="733" style="display: none;">Orbex-Demo</option>
                            <option class="269" value="736" style="display: none;">Orbex-Live</option>
                            <option class="269" value="734" style="display: none;">OrbexGlobal-Demo</option>
                            <option class="269" value="735" style="display: none;">OrbexGlobal-Live</option>
                            <option class="269" value="879" style="display: none;">OrbexGlobal-Server</option>
                            <option class="269" value="737" style="display: none;">OrbexLtd-Server</option>
                            <option class="236" value="639" style="display: none;">OrientMarketsLimited-Demo</option>
                            <option class="236" value="640" style="display: none;">OrientMarketsLimited-Live</option>
                            <option class="132" value="391" style="display: none;">OriginECN-Demo</option>
                            <option class="132" value="392" style="display: none;">OriginECN-Live</option>
                            <option class="319" value="880" style="display: none;">OspreyFX-Demo</option>
                            <option class="319" value="881" style="display: none;">OspreyFX-Live</option>
                            <option class="176" value="489" style="display: none;">PaxForex-Demo Server</option>
                            <option class="176" value="490" style="display: none;">PaxForex-Live Server</option>
                            <option class="10" value="22" style="display: none;">PCUK-Demo</option>
                            <option class="10" value="21" style="display: none;">PCUK-Live</option>
                            <option class="13" value="235" style="display: none;">Pepperstone-01</option>
                            <option class="328" value="905" style="display: none;">Pepperstone-Demo</option>
                            <option class="13" value="34" style="display: none;">Pepperstone-Demo01</option>
                            <option class="13" value="35" style="display: none;">Pepperstone-Demo02</option>
                            <option class="13" value="885" style="display: none;">Pepperstone-Edge01</option>
                            <option class="13" value="36" style="display: none;">Pepperstone-Edge02</option>
                            <option class="13" value="37" style="display: none;">Pepperstone-Edge03</option>
                            <option class="13" value="38" style="display: none;">Pepperstone-Edge04</option>
                            <option class="13" value="39" style="display: none;">Pepperstone-Edge05</option>
                            <option class="13" value="40" style="display: none;">Pepperstone-Edge06</option>
                            <option class="13" value="231" style="display: none;">Pepperstone-Edge07</option>
                            <option class="13" value="232" style="display: none;">Pepperstone-Edge08</option>
                            <option class="13" value="233" style="display: none;">Pepperstone-Edge09</option>
                            <option class="13" value="942" style="display: none;">Pepperstone-Edge11</option>
                            <option class="328" value="908" style="display: none;">Pepperstone-MT5-Live01</option>
                            <option class="328" value="906" style="display: none;">PepperstoneEU-Demo</option>
                            <option class="328" value="907" style="display: none;">PepperstoneEU-Live</option>
                            <option class="328" value="909" style="display: none;">PepperstoneUK-Demo</option>
                            <option class="13" value="234" style="display: none;">PepperstoneUK-Edge10</option>
                            <option class="328" value="910" style="display: none;">PepperstoneUK-Live</option>
                            <option class="231" value="624" style="display: none;">PFD-Demo</option>
                            <option class="231" value="625" style="display: none;">PFD-Real</option>
                            <option class="8" value="15" style="display: none;">PhillipCapital-AU-Demo</option>
                            <option class="8" value="16" style="display: none;">PhillipCapital-AU-Live</option>
                            <option class="9" value="17" style="display: none;">PhillipCapital-Demo</option>
                            <option class="9" value="18" style="display: none;">PhillipCapital-Live</option>
                            <option class="7" value="19" style="display: none;">PhillipCapitalFX-Demo</option>
                            <option class="7" value="20" style="display: none;">PhillipCapitalFX-Live</option>
                            <option class="374" value="1059" style="display: none;">PRC-Demo</option>
                            <option class="374" value="1058" style="display: none;">PRC-Live</option>
                            <option class="210" value="566" style="display: none;">PriceMarkets-Demo</option>
                            <option class="210" value="567" style="display: none;">PriceMarkets-Live2</option>
                            <option class="210" value="568" style="display: none;">PriceMarkets-LiveLD</option>
                            <option class="351" value="993" style="display: none;">PrimeA1-DemoBHS</option>
                            <option class="351" value="994" style="display: none;">PrimeA1-Live03</option>
                            <option class="351" value="995" style="display: none;">PrimeA1-Live05</option>
                            <option class="241" value="653" style="display: none;">PrimusAfrica-Live</option>
                            <option class="241" value="654" style="display: none;">PrimusAfrica-Live-2</option>
                            <option class="241" value="655" style="display: none;">PrimusAfrica-Live-3</option>
                            <option class="241" value="656" style="display: none;">PrimusAfrica-Live-4</option>
                            <option class="241" value="657" style="display: none;">PrimusAfrica-Practice</option>
                            <option class="318" value="874" style="display: none;">PrimusGlobal-Live</option>
                            <option class="318" value="875" style="display: none;">PrimusGlobal-Live-2</option>
                            <option class="318" value="876" style="display: none;">PrimusGlobal-Live-3</option>
                            <option class="318" value="877" style="display: none;">PrimusGlobal-Live-4</option>
                            <option class="318" value="878" style="display: none;">PrimusGlobal-Practice</option>
                            <option class="173" value="826" style="display: none;">PrimusMarkets-Live</option>
                            <option class="173" value="827" style="display: none;">PrimusMarkets-Live-2</option>
                            <option class="173" value="484" style="display: none;">PrimusMarkets-Live-3</option>
                            <option class="173" value="554" style="display: none;">PrimusMarkets-Live-4</option>
                            <option class="173" value="705" style="display: none;">PrimusMarkets-Practice</option>
                            <option class="2" value="3" style="display: none;">prior-live</option>
                            <option class="2" value="97" style="display: none;">prior-live2</option>
                            <option class="2" value="138" style="display: none;">PriorFX-Demo</option>
                            <option class="108" value="317" style="display: none;">PROFTrading-Demo</option>
                            <option class="108" value="316" style="display: none;">PROFTrading-Live</option>
                            <option class="251" value="688" style="display: none;">ProsperousFinCapital-Demo</option>
                            <option class="251" value="689" style="display: none;">ProsperousFinCapital-Live</option>
                            <option class="317" value="871" style="display: none;">ProtonCapital-Demo</option>
                            <option class="317" value="872" style="display: none;">ProtonCapital-Live</option>
                            <option class="128" value="381" style="display: none;">PrutonMF-Demo</option>
                            <option class="128" value="382" style="display: none;">PrutonMF-Live</option>
                            <option class="127" value="371" style="display: none;">PuHuei-Demo</option>
                            <option class="127" value="372" style="display: none;">PuHuei-Live</option>
                            <option class="257" value="702" style="display: none;">PuhuiGroup-Demo</option>
                            <option class="257" value="703" style="display: none;">PuhuiGroup-Live</option>
                            <option class="182" value="498" style="display: none;">PurcowGroup-Live</option>
                            <option class="263" value="719" style="display: none;">PureMarket-Demo</option>
                            <option class="263" value="720" style="display: none;">PureMarket-Live</option>
                            <option class="246" value="670" style="display: none;">PurpleTrading-01Demo</option>
                            <option class="246" value="671" style="display: none;">PurpleTrading-01Live</option>
                            <option class="246" value="672" style="display: none;">PurpleTrading-02Demo</option>
                            <option class="246" value="673" style="display: none;">PurpleTrading-02Live</option>
                            <option class="246" value="674" style="display: none;">PurpleTrading-03Live</option>
                            <option class="246" value="675" style="display: none;">PurpleTrading-04Live</option>
                            <option class="311" value="852" style="display: none;">QuantixFS-Demo</option>
                            <option class="311" value="853" style="display: none;">QuantixFS-Live2</option>
                            <option class="252" value="692" style="display: none;">RakutenSecurities-Demo</option>
                            <option class="252" value="693" style="display: none;">RakutenSecurities-Live</option>
                            <option class="252" value="690" style="display: none;">RakutenSecuritiesAustralia-Demo</option>
                            <option class="252" value="691" style="display: none;">RakutenSecuritiesAustralia-Live</option>
                            <option class="345" value="979" style="display: none;">RallyTrade-MT4 Demo</option>
                            <option class="345" value="980" style="display: none;">RallyTrade-Real3</option>
                            <option class="336" value="954" style="display: none;">RangeMarkets-Demo</option>
                            <option class="336" value="957" style="display: none;">RangeMarkets-Real2</option>
                            <option class="336" value="955" style="display: none;">RangeMarketsLtd-DemoUK</option>
                            <option class="336" value="956" style="display: none;">RangeMarketsLtd-LiveUK</option>
                            <option class="194" value="530" style="display: none;">RarlonTrading-Demo</option>
                            <option class="194" value="531" style="display: none;">RarlonTrading-Live</option>
                            <option class="313" value="857" style="display: none;">RichFieldCapital-Demo</option>
                            <option class="313" value="858" style="display: none;">RichFieldCapital-Live</option>
                            <option class="107" value="315" style="display: none;">RisingInternational-Demo</option>
                            <option class="107" value="314" style="display: none;">RisingInternational-Live</option>
                            <option class="209" value="564" style="display: none;">RistonCapital-Demo</option>
                            <option class="209" value="565" style="display: none;">RistonCapital-Real</option>
                            <option class="106" value="313" style="display: none;">RivonInternational-Demo</option>
                            <option class="106" value="312" style="display: none;">RivonInternational-Live</option>
                            <option class="55" value="634" style="display: none;">RoboForex-Demo</option>
                            <option class="55" value="1024" style="display: none;">RoboForex-DemoPro</option>
                            <option class="55" value="635" style="display: none;">RoboForex-ECN</option>
                            <option class="55" value="636" style="display: none;">RoboForex-Fix</option>
                            <option class="55" value="637" style="display: none;">RoboForex-FixCent</option>
                            <option class="223" value="608" style="display: none;">RoboForex-MetaTrader 5</option>
                            <option class="55" value="638" style="display: none;">RoboForex-Prime</option>
                            <option class="55" value="528" style="display: none;">RoboForex-Pro</option>
                            <option class="55" value="732" style="display: none;">RoboForex-Pro-2</option>
                            <option class="55" value="154" style="display: none;">RoboForex-ProCent</option>
                            <option class="55" value="788" style="display: none;">RoboForex-ProCent-2</option>
                            <option class="55" value="884" style="display: none;">RoboForex-ProCent-3</option>
                            <option class="55" value="1048" style="display: none;">RoboForex-ProCent-4</option>
                            <option class="219" value="594" style="display: none;">ROYAL-Demo</option>
                            <option class="219" value="595" style="display: none;">ROYAL-Real-01</option>
                            <option class="227" value="615" style="display: none;">RubixFX-Demo</option>
                            <option class="227" value="616" style="display: none;">RubixFX-Live</option>
                            <option class="162" value="454" style="display: none;">SafeGold-Live</option>
                            <option class="193" value="521" style="display: none;">SchatzMarkets-Demo</option>
                            <option class="193" value="522" style="display: none;">SchatzMarkets-Live</option>
                            <option class="221" value="604" style="display: none;">ScopeMarkets-Demo</option>
                            <option class="221" value="605" style="display: none;">ScopeMarkets-Live</option>
                            <option class="23" value="77" style="display: none;">SFM-Demo</option>
                            <option class="23" value="75" style="display: none;">SFM-Live</option>
                            <option class="23" value="76" style="display: none;">SFM-Live02</option>
                            <option class="148" value="428" style="display: none;">SFXMarkets-Server</option>
                            <option class="376" value="1063" style="display: none;">ShineJoinFX-Demo</option>
                            <option class="376" value="1064" style="display: none;">ShineJoinFX-Live</option>
                            <option class="268" value="730" style="display: none;">SimpleFX-DemoUK</option>
                            <option class="268" value="731" style="display: none;">SimpleFX-LiveUK</option>
                            <option class="331" value="921" style="display: none;">SoegeeTrader-Demo</option>
                            <option class="331" value="922" style="display: none;">SoegeeTrader-Real</option>
                            <option class="16" value="55" style="display: none;">SpartanFX-Demo</option>
                            <option class="16" value="54" style="display: none;">SpartanFX-Live</option>
                            <option class="363" value="1033" style="display: none;">SPMHypersonic-LIVE01</option>
                            <option class="226" value="613" style="display: none;">SquaredDirect-Demo</option>
                            <option class="226" value="1074" style="display: none;">SquaredDirect-Demo2</option>
                            <option class="226" value="614" style="display: none;">SquaredDirect-Live</option>
                            <option class="226" value="1073" style="display: none;">SquaredDirect-Live2</option>
                            <option class="63" value="1083" style="display: none;">SquaredFinancial-Demo</option>
                            <option class="63" value="1084" style="display: none;">SquaredFinancial-Demo2</option>
                            <option class="63" value="1085" style="display: none;">SquaredFinancial-Live</option>
                            <option class="63" value="1086" style="display: none;">SquaredFinancial-Live2</option>
                            <option class="63" value="166" style="display: none;">SquaredMT4-Live</option>
                            <option class="105" value="311" style="display: none;">STO-Demo</option>
                            <option class="105" value="310" style="display: none;">STO-Real</option>
                            <option class="105" value="472" style="display: none;">STOUK-Demo</option>
                            <option class="105" value="471" style="display: none;">STOUK-Real</option>
                            <option class="207" value="561" style="display: none;">SuperForex-Real</option>
                            <option class="171" value="480" style="display: none;">Swissquote-Demo</option>
                            <option class="171" value="481" style="display: none;">Swissquote-Demo1</option>
                            <option class="171" value="650" style="display: none;">Swissquote-Live1</option>
                            <option class="171" value="1045" style="display: none;">Swissquote-Live6</option>
                            <option class="171" value="479" style="display: none;">SwissquoteLtd-Demo</option>
                            <option class="171" value="478" style="display: none;">SwissquoteLtd-Live</option>
                            <option class="171" value="1062" style="display: none;">SwissquoteLtd-Live5</option>
                            <option class="58" value="376" style="display: none;">TahoeGroup-Demo</option>
                            <option class="58" value="157" style="display: none;">TahoeGroup-Live</option>
                            <option class="172" value="482" style="display: none;">TECInternational-Demo</option>
                            <option class="172" value="483" style="display: none;">TECInternational-LD Live</option>
                            <option class="172" value="1000" style="display: none;">TECInternational-Live</option>
                            <option class="172" value="714" style="display: none;">TECInternational-Live-2</option>
                            <option class="172" value="1001" style="display: none;">TECInternational2-Demo</option>
                            <option class="172" value="1003" style="display: none;">TECInternational2-Live</option>
                            <option class="355" value="1006" style="display: none;">TegasFX-Demo-UK</option>
                            <option class="355" value="1007" style="display: none;">TegasFX-Live-UK</option>
                            <option class="254" value="696" style="display: none;">Templer-server.templerfx.com</option>
                            <option class="254" value="697" style="display: none;">Templer-TemplerFX-Cent</option>
                            <option class="15" value="51" style="display: none;">TempletonFX-Demo</option>
                            <option class="15" value="52" style="display: none;">TempletonFX-Live</option>
                            <option class="15" value="53" style="display: none;">TempletonFX-Live 2</option>
                            <option class="25" value="82" style="display: none;">TeraEurope-Main</option>
                            <option class="79" value="222" style="display: none;">ThinkForexAU-Demo</option>
                            <option class="79" value="223" style="display: none;">ThinkForexAU-Demo Asia</option>
                            <option class="79" value="224" style="display: none;">ThinkForexAU-Live</option>
                            <option class="79" value="225" style="display: none;">ThinkForexAU-Live 2</option>
                            <option class="87" value="254" style="display: none;">ThinkForexUK-Demo</option>
                            <option class="87" value="255" style="display: none;">ThinkForexUK-Demo Asia</option>
                            <option class="87" value="252" style="display: none;">ThinkForexUK-Live</option>
                            <option class="87" value="253" style="display: none;">ThinkForexUK-Live 2</option>
                            <option class="281" value="774" style="display: none;">ThinkMarkets-Demo</option>
                            <option class="281" value="861" style="display: none;">ThinkMarkets-Live</option>
                            <option class="27" value="84" style="display: none;">Tickmill-DemoUK</option>
                            <option class="27" value="377" style="display: none;">Tickmill-Live</option>
                            <option class="27" value="378" style="display: none;">Tickmill-Live02</option>
                            <option class="27" value="803" style="display: none;">Tickmill-Live04</option>
                            <option class="27" value="1087" style="display: none;">Tickmill-Live05</option>
                            <option class="27" value="158" style="display: none;">Tickmill02-Demo</option>
                            <option class="27" value="1070" style="display: none;">TickmillEU-Demo</option>
                            <option class="27" value="1071" style="display: none;">TickmillEU-Live</option>
                            <option class="27" value="647" style="display: none;">TickmillUK-Live03</option>
                            <option class="214" value="580" style="display: none;">Tier1FX-Demo</option>
                            <option class="214" value="581" style="display: none;">Tier1FX-Real</option>
                            <option class="325" value="894" style="display: none;">TIOMarkets-Live-4</option>
                            <option class="325" value="895" style="display: none;">TIOMarkets-Practice</option>
                            <option class="325" value="896" style="display: none;">TIOMarketsUK-Live-4</option>
                            <option class="325" value="897" style="display: none;">TIOMarketsUK-Practice</option>
                            <option class="140" value="413" style="display: none;">Titanium-Demo</option>
                            <option class="140" value="414" style="display: none;">Titanium-Live</option>
                            <option class="126" value="369" style="display: none;">TopCapitalCorporationTCC-Demo</option>
                            <option class="126" value="370" style="display: none;">TopCapitalCorporationTCC-Live</option>
                            <option class="185" value="506" style="display: none;">TopHalfIntlTechnology-Live</option>
                            <option class="305" value="835" style="display: none;">TPTradesHolding-Demo</option>
                            <option class="305" value="836" style="display: none;">TPTradesHolding-Live</option>
                            <option class="305" value="912" style="display: none;">TPTradesHoldingLtd-Demo</option>
                            <option class="305" value="913" style="display: none;">TPTradesHoldingLtd-Real</option>
                            <option class="234" value="630" style="display: none;">TradeFW-Demo </option>
                            <option class="234" value="631" style="display: none;">TradeFW-Live</option>
                            <option class="122" value="360" style="display: none;">TRADEFXM-Demo</option>
                            <option class="122" value="361" style="display: none;">TRADEFXM-Live</option>
                            <option class="357" value="1010" style="display: none;">TradeMax-Demo</option>
                            <option class="357" value="1013" style="display: none;">TradeMax-Live1</option>
                            <option class="357" value="1014" style="display: none;">TradeMax-Live2</option>
                            <option class="357" value="796" style="display: none;">TradeMaxCapital-Demo</option>
                            <option class="357" value="797" style="display: none;">TradeMaxCapital-Live1</option>
                            <option class="357" value="1011" style="display: none;">TradeMaxGlobal-Demo</option>
                            <option class="357" value="1012" style="display: none;">TradeMaxGlobal-Live</option>
                            <option class="312" value="854" style="display: none;">TradeProMarkets-Demo</option>
                            <option class="312" value="855" style="display: none;">TradeProMarkets-Live</option>
                            <option class="308" value="845" style="display: none;">TradersDomainFX-Demo</option>
                            <option class="308" value="846" style="display: none;">TradersDomainFX-Real</option>
                            <option class="44" value="126" style="display: none;">TradersWay-Demo</option>
                            <option class="230" value="622" style="display: none;">TradersWay-Demo</option>
                            <option class="44" value="127" style="display: none;">TradersWay-Live</option>
                            <option class="230" value="623" style="display: none;">TradersWay-Live</option>
                            <option class="356" value="1009" style="display: none;">TradeTechAlpha-Demo</option>
                            <option class="356" value="1008" style="display: none;">TradeTechAlpha-Live 2</option>
                            <option class="235" value="632" style="display: none;">TradeTechMarkets-Live </option>
                            <option class="235" value="633" style="display: none;">TradeTechMarkets-Practice</option>
                            <option class="245" value="665" style="display: none;">Tradeview-Demo</option>
                            <option class="245" value="666" style="display: none;">Tradeview-Live</option>
                            <option class="373" value="1057" style="display: none;">Tradize-Demo</option>
                            <option class="347" value="983" style="display: none;">TrioMarkets-Demo Server</option>
                            <option class="347" value="984" style="display: none;">TrioMarkets-Live Server</option>
                            <option class="338" value="959" style="display: none;">Tripleafx-FX-Demo</option>
                            <option class="338" value="960" style="display: none;">Tripleafx-FX-Real</option>
                            <option class="174" value="485" style="display: none;">TurnkeyFX-Demo</option>
                            <option class="174" value="486" style="display: none;">TurnkeyFX-Live</option>
                            <option class="101" value="295" style="display: none;">USGFX-Demo</option>
                            <option class="101" value="296" style="display: none;">USGFX-Live</option>
                            <option class="101" value="297" style="display: none;">USGFX-Live2</option>
                            <option class="101" value="298" style="display: none;">USGFX-Live3</option>
                            <option class="216" value="586" style="display: none;">UtradeFX-Demo</option>
                            <option class="216" value="587" style="display: none;">UtradeFX-Live</option>
                            <option class="261" value="712" style="display: none;">VanguardGlobalHoldings-Demo</option>
                            <option class="261" value="713" style="display: none;">VanguardGlobalHoldings-Live</option>
                            <option class="65" value="172" style="display: none;">VanlongGlobal-Demo</option>
                            <option class="65" value="171" style="display: none;">VanlongGlobal-Live</option>
                            <option class="84" value="241" style="display: none;">VantageAU-Demo</option>
                            <option class="272" value="744" style="display: none;">VantageAU-Demo</option>
                            <option class="272" value="745" style="display: none;">VantageAU-Live</option>
                            <option class="84" value="242" style="display: none;">VantageAU-Live 1</option>
                            <option class="84" value="243" style="display: none;">VantageAU-Live 2</option>
                            <option class="85" value="244" style="display: none;">VantageFX-Demo</option>
                            <option class="272" value="746" style="display: none;">VantageFX-Demo</option>
                            <option class="272" value="747" style="display: none;">VantageFX-Live</option>
                            <option class="85" value="245" style="display: none;">VantageFX-Live 1</option>
                            <option class="85" value="246" style="display: none;">VantageFX-Live 2</option>
                            <option class="85" value="668" style="display: none;">VantageFX-Live 3</option>
                            <option class="85" value="669" style="display: none;">VantageFX-Live 4</option>
                            <option class="286" value="783" style="display: block;">VantageFXInternational-Demo</option>
                            <option class="286" value="784" style="display: block;">VantageFXInternational-Live 1</option>
                            <option class="286" value="785" style="display: block;">VantageFXInternational-Live 2</option>
                            <option class="286" value="786" style="display: block;">VantageFXInternational-Live 3</option>
                            <option class="286" value="787" style="display: block;">VantageFXInternational-Live 4</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select id="broker_select_server" name="broker_server_id" class="form-control valid" required="" aria-required="true" aria-invalid="false"><option value="">Select server</option>
                            <option class="286" value="783" style="display: block;">VantageFXInternational-Demo</option>
                            <option class="286" value="784" style="display: block;">VantageFXInternational-Live 1</option>
                            <option class="286" value="785" style="display: block;">VantageFXInternational-Live 2</option>
                            <option class="286" value="786" style="display: block;">VantageFXInternational-Live 3</option>
                            <option class="286" value="787" style="display: block;">VantageFXInternational-Live 4</option>
                        </select>
                    </div>
                </div>

            </div>
        </form></div>
@endsection
