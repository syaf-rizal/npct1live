
<!doctype html>
<html lang=""{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('images/32.ico') }}" />
    <title>@yield('pageTitle')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/custom.min.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
</head>
<body>
    <div class="home-search">
        <div id="myOverlay" class="overlay">
            <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
            <div class="overlay-content">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <section class="header-bottom" id="navbar">
        <h3 class="d-none">navbar</h3>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-sm-12 col-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light home-02">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="nav-itemdropdown dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="{{ url('introduction') }}">Who We Are</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('board-of-directors') }}">Board Of Directors</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('contact-us') }}">Contact Us</a>
                                    </div>
                                </li>
                                <li class="nav-itemdropdown dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Terminal Facility</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                        <a class="dropdown-item" href="{{ url('terminal-information') }}">Terminal Information</a>
                                    </div>
                                </li>
                                <li class="nav-itemdropdown dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Commercial</a>
                                    <div class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown4">
                                        <a class="dropdown-item" href="#" id="navbarDropdown41" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Finance <i class="fa fa-caret-right" style="float: right;"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown41">
                                            <a class="dropdown-item" href="{{ url('npct1-billing-procedure') }}">NPCT1 Billing Procedure</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ url('withholding-tax-refund') }}">Withholding Tax Refund</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ url('npct1-mandiri-edc-payment') }}">NPCT1 Mandiri EDC</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Circular Letter: Notification Letter of the Restitution Procedures</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Circular Letter: Notification Letter of the Restitution Procedures <br>for Article 23 Income Tax Deduction for Port Services</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-itemdropdown dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown5" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Services</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown5">
                                        <a class="dropdown-item" href="{{ url('container-handling') }}">Container Handling</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('reefer-handling') }}">Reefer Handling</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('dangerous-goods-dg-handling') }}">Dangerous Good (DG) Handling</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('out-of-gauge-oogun-containerized-cargo-uc-cargo-handling') }}">Out Of Gauge / Un-containerized Cargo (UC) Handling</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('verified-gross-mass-vgm-handling') }}">Weight Bridge for Verified Gross Mass (VGM)</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('integrated-facilities-for-custom-quarantine') }}">Common Gate Area</a>
                                    </div>
                                </li>
                                <li class="nav-itemdropdown dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown6" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown6">
                                        <a class="dropdown-item" href="{{ url('npct1-news') }}">NPCT1 News</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('npct1-tender') }}">NPCT1 Tender</a>
                                    </div>
                                </li>
                                <li class="nav-itemdropdown dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown7" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Online Service</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown7">
                                        <a class="dropdown-item" href="#">Tariff Simulation</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="https://eportal.npct1.co.id/PCSNP/" target="_blank">ePortal</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="https://econ.npct1.co.id" target="_blank">ECON</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('tracking')}}">Container Tracking</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('vessel-schedule') }}">Vessel Schedule</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="https://vgm.bki.co.id/vgm-certificate/lookup" target="_blank">VGM</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('eir') }}">EIR</a>
                                    </div>
                                </li>
                                <li class="nav-itemdropdown dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown7" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">People</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown7">
                                        <a class="dropdown-item" href="{{ url('philosophy') }}">People Philosophy</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('npct1-career') }}">Job Opportunity</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    @yield('content')
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xm-12">
                    <h4>NPCT1</h4>
                    <ul>
                        <li><a href="#">Jl. Terminal Kalibaru Raya Kav.B No.1, Cilincing Jakarta Utara, <br>Daerah Khusus Ibukota Jakarta 14110, Indonesia</a></li>
                        <li><a href="#">Phone +62 21 29144888</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 col-xm-12">
                    <h4>Commercial - Finance</h4>
                    <ul>
                        <li><a href="{{ url('npct1-billing-procedure') }}">NPCT1 Billing Procedure</a></li>
                        <li><a href="{{ url('withholding-tax-refund') }}">Withholding Tax Refund</a></li>
                        <li><a href="{{ url('npct1-mandiri-edc-payment') }}">NPCT1 Mandiri EDC</a></li>
                        <li><a href="#">Circular Letter: Notification Letter of the Restitution Procedures</a></li>
                        <li><a href="#">Circular Letter: Notification Letter of the Restitution Procedures for Article 23 Income Tax Deduction for Port Services</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xm-12">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="{{ url('container-handling') }}">Container Handling</a></li>
                        <li><a href="{{ url('reefer-handling') }}">Reefer Handling</a></li>
                        <li><a href="{{ url('dangerous-goods-dg-handling') }}">Dangerous Good (DG) Handling</a></li>
                        <li><a href="{{ url('out-of-gauge-oogun-containerized-cargo-uc-cargo-handling') }}">Out Of Gauge / Un-containerized Cargo (UC) Handling</a></li>
                        <li><a href="{{ url('verified-gross-mass-vgm-handling') }}">Weight Bridge for Verified Gross Mass (VGM)</a></li>
                        <li><a href="{{ url('integrated-facilities-for-custom-quarantine') }}">Common Gate Area</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-6 col-xm-12">
                    <h4>Link</h4>
                    <ul>
                        <li><a href="https://eportal.npct1.co.id/PCSNP/" target="_blank">Eportal</a></li>
                        <li><a href="https://econ.npct1.co.id" target="_blank">ECON</a></li>
                        <li><a href="#">Tariff Simulation</a></li>
                        <li><a href="{{ url('tracking') }}">Tracking Container</a></li>
                        <li><a href="{{ url('vessel-schedule') }}">Vessel Schedule</a></li>
                        <li><a href="https://vgm.bki.co.id/vgm-certificate/lookup" target="_blank">VGM</a></li>
                        <li><a href="{{ url('eir') }}">EIR</a></li>
                        <li><a href="{{ url('npct1-career') }}">Job Opportunity</a></li>
                        <li><a href="#">CSR Activities</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <button onclick="topFunction()" id="myBtn" class="btn" title="Go to top"><i class="fas fa-angle-up fa-2x"></i></button>
    <div class="loading-custom">
        <div class="loading-custom-content"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    <script src="{{ URL::asset('js/theme/bootbox.all.min.js') }}"></script>
    <script src="{{ URL::asset('js/custom.min.js') }} "></script>
</body>

</html>