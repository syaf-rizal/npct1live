
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
    <meta name="call-my-name" content="{{ url('/') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/custom.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-material-datetimepicker.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/kalibaru.min.css') }}" type="text/css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet"> !-->
	<link rel="stylesheet" href="{{ asset('css/DateTimePicker.css') }}" type="text/css">
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/moment.js') }}"></script>
    <script src="{{ URL::asset('js/kalibaru.min.js') }}"></script>
	


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
        <div class="container kalibaru-nav">
            <div class="row">
                <div class="col-md-2 col-sm-3 col-4">
                    <a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="Image"></a>
                </div>
                <div class="col-md-10 col-sm-9 col-8">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light home-02">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/') }}">
                                        {{ Session::get('Lang') != 'eng' ? 'Beranda' : 'Home' }}
                                    </a>
                                </li>
                                <li class="nav-itemdropdown dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Session::get('Lang') != 'eng' ? 'Tentang Kami' : 'About Us' }}</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="{{ url('introduction') }}">
                                        {{ Session::get('Lang') != 'eng' ? 'Profil Kami' : 'Who We Are' }}
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('board-of-directors') }}">
                                        {{ Session::get('Lang') != 'eng' ? 'Dewan Direksi' : 'Board Of Directors' }}</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('whistleblowing') }}">
                                        {{ Session::get('Lang') != 'eng' ? 'Whistleblowing' : 'Whistleblowing' }}</a>
                                        </a>
                                    </div>
                                </li>
                                <li class="nav-itemdropdown dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Session::get('Lang') != 'eng' ? 'Fasilitas Terminal' : 'Terminal Facility' }}</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                        <a class="dropdown-item" href="{{ url('terminal-information') }}">
                                        {{ Session::get('Lang') != 'eng' ? 'Informasi Terminal' : 'Terminal Information' }}  </a>
                                    </div>
                                </li>
                                <li class="nav-itemdropdown dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Session::get('Lang') != 'eng' ? 'Pelayanan Kami' : 'Our Services' }}</a>
                                    <div class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown4">
                                        <a class="dropdown-item" href="#" id="navbarDropdown41" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Session::get('Lang') != 'eng' ? 'Keuangan' : 'Finance' }} <i class="fa fa-caret-right" style="float: right;"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown41">
                                            <a class="dropdown-item" href="{{ url('npct1-billing-procedure') }}">
                                            {{ Session::get('Lang') != 'eng' ? 'Prosedur Billing NPCT1' : 'NPCT1 Billing Procedure' }}</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ url('withholding-tax-refund') }}">
                                            {{ Session::get('Lang') != 'eng' ? 'Pengembalian PPH' : 'Withholding Tax Refund' }}</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ url('npct1-mandiri-edc-payment') }}">
                                            {{ Session::get('Lang') != 'eng' ? 'EDC Mandiri NPCT1' : 'NPCT1 Mandiri EDC' }}</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ url('circular-letter-notification-letter-of-the-restitution-procedures') }}">
                                            {{ Session::get('Lang') != 'eng' ? 'Surat Edaran: Surat Pemberitahuan Restitusi' : 'Circular Letter: Notification Letter of the Restitution Procedures' }}</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ url('circular-letter-notification-letter-of-the-restitution-procedures-for-article-23-income-tax-deduction-for-port-services') }}">
                                            {{ Session::get('Lang') != 'eng' ? 'Surat Edaran: Surat Pemberitahuan Prosedur Pengembalian Dana atas Pemotongan PPH Pasal 23 untuk Jasa Kepelabuhanan' : 'Circular Letter: Notification Letter of the Restitution Procedures for Article 23 Income Tax Deduction for Port Services' }}</a>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('container-handling') }}">
                                            {{ Session::get('Lang') != 'eng' ? 'Penanganan Petikemas' : 'Container Handling' }} </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('reefer-handling') }}">
                                        {{ Session::get('Lang') != 'eng' ? 'Penanganan Petikemas Reefer' : 'Reefer Handling' }}</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('dangerous-goods-dg-handling') }}">
                                        {{ Session::get('Lang') != 'eng' ? 'Penanganan Barang Berbahaya' : 'Dangerous Good (DG) Handling' }}</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('out-of-gauge-oogun-containerized-cargo-uc-cargo-handling') }}">
                                        {{ Session::get('Lang') != 'eng' ? 'Penanganan OOG (Out Of Gauge) dan Barang Uncontainerized' : 'Out Of Gauge / Un-containerized Cargo (UC) Handling' }}</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('verified-gross-mass-vgm-handling') }}">
                                        {{ Session::get('Lang') != 'eng' ? 'Jembatan Timbang untuk Berat Kotor Terverifikasi (VGM)' : 'Weight Bridge for Verified Gross Mass (VGM)' }}</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('integrated-facilities-for-custom-quarantine') }}">
                                        {{ Session::get('Lang') != 'eng' ? 'Area Common Gate' : 'Common Gate Area' }}</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('NPCT1-General-Conditions-for-Services-and-Facilities') }}">
                                            {{ Session::get('Lang') != 'eng' ? 'Ketentuan Umum Untuk Layanan dan Fasilitas di NPCT1' : 'NPCT1 General Conditions for Services and Facilities' }}</a>
                                    </div>
                                </li>
                                <li class="nav-itemdropdown dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown6" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Session::get('Lang') != 'eng' ? 'Berita' : 'News' }}</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown6">
                                        <a class="dropdown-item" href="{{ url('npct1-news') }}">
                                        {{ Session::get('Lang') != 'eng' ? 'NPCT1' : 'NPCT1 News' }}</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('npct1-tender') }}">
                                        {{ Session::get('Lang') != 'eng' ? 'Tender' : 'NPCT1 Tender' }}</a>
                                    </div>
                                </li>
                                <li class="nav-itemdropdown dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown7" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Session::get('Lang') != 'eng' ? 'Pelayanan Online' : 'Online Service' }}</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown7">
                                        <a class="dropdown-item" href="{{ url('tariff-simulation') }}">
                                        {{ Session::get('Lang') != 'eng' ? 'Pelayanan Online' : 'Tariff Simulation' }}</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="https://eportal.npct1.co.id/NPCTP/" target="_blank">
                                        {{ Session::get('Lang') != 'eng' ? 'EPORTAL' : 'ePORTAL' }}</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="https://econ.npct1.co.id" target="_blank">
                                        {{ Session::get('Lang') != 'eng' ? 'ECON' : 'ECON' }}</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('tracking')}}">
                                        {{ Session::get('Lang') != 'eng' ? 'Pelacakan Petikemas' : 'Container Tracking' }}</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('vessel-schedule') }}">
                                        {{ Session::get('Lang') != 'eng' ? 'Jadwal Kapal' : 'Vessel Schedule' }}</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="https://vgm.bki.co.id/vgm-certificate/lookup" target="_blank">
                                        {{ Session::get('Lang') != 'eng' ? 'VGM' : 'VGM' }}</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('eir') }}">
                                        {{ Session::get('Lang') != 'eng' ? 'EIR' : 'EIR' }}</a>
										<div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('appointment') }}">
                                        {{ Session::get('Lang') != 'eng' ? 'Janji Temu Rapat' : 'Meeting Appointment' }}</a>

                                    </div>
                                </li>
                                <li class="nav-itemdropdown dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown7" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Session::get('Lang') != 'eng' ? 'Karir' : 'People' }}</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown7">
                                        <a class="dropdown-item" href="{{ url('philosophy') }}">
                                        {{ Session::get('Lang') != 'eng' ? 'Filosofi' : 'People Philosophy' }}</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('npct1-career') }}">
                                        {{ Session::get('Lang') != 'eng' ? 'Lowongan Pekerjaan' : 'Job Opportunity' }}</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/econ-testimonial') }}">
                                        {{ Session::get('Lang') != 'eng' ? 'Testimonial' : 'Testimonial' }}
                                    </a>
                                </li>
								<li class="nav-item">
                                    <div class="select_wrap">
                                        <ul class="default_option">
                                            @if(Session::get('Lang') == 'eng')
                                            <li id="english-selected">
                                                <div class="option eng">
                                                    <div class="icon"><img src="{{ asset('images/v4-eng-lang.png') }}"></div>
                                                    <p class="p-lang">ENG</p>
                                                </div>
                                            </li>
                                            @else
                                            <li id="idn-selected">
                                                <div class="option idn">
                                                    <div class="icon"><img src="{{ asset('images/v4-id-lang.png') }}"></div>
                                                    <p class="p-lang">ID</p>
                                                </div>
                                            </li>
                                            @endif
                                        </ul>
                                        <ul class="select_ul">
                                            <li id="english" data-uri="{{ url('/') }}">
                                                <div class="option eng">
                                                    <div class="icon"><img src="{{ asset('images/v4-eng-lang.png') }}"></div>
                                                    <p class="p-lang">ENG</p>
                                                </div>
                                            </li>
                                            <li id="indonesia" data-uri="{{ url('/') }}">
                                                <div class="option idn">
                                                    <div class="icon"><img src="{{ asset('images/v4-id-lang.png') }}"></div>
                                                    <p class="p-lang">ID</p>
                                                </div>
                                            </li>
                                        </ul>
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
                    <h4>
                    {{ Session::get('Lang') != 'Keuangan' ? 'VGM' : 'Finance' }}</h4>
                    <ul>
                        <li><a href="{{ url('npct1-billing-procedure') }}">
                        {{ Session::get('Lang') != 'eng' ? 'Prosedur Billing NPCT1' : 'NPCT1 Billing Procedure' }}</a></li>
                        <li><a href="{{ url('withholding-tax-refund') }}">
                        {{ Session::get('Lang') != 'eng' ? 'Pengembalian PPH' : 'Withholding Tax Refund' }}</a></li>
                        <li><a href="{{ url('npct1-mandiri-edc-payment') }}">
                        {{ Session::get('Lang') != 'eng' ? 'EDC Mandiri NPCT1' : 'NPCT1 Mandiri EDC' }}</a></li>
                        <li><a href="{{ url('circular-letter-notification-letter-of-the-restitution-procedures') }}">
                        {{ Session::get('Lang') != 'eng' ? 'Surat Edaran: Surat Pemberitahuan Restitusi' : 'Circular Letter: Notification Letter of the Restitution Procedures' }}</a></li>
                        <li><a href="{{ url('circular-letter-notification-letter-of-the-restitution-procedures-for-article-23-income-tax-deduction-for-port-services') }}">
                        {{ Session::get('Lang') != 'eng' ? 'Surat Edaran: Surat Pemberitahuan Prosedur Pengembalian Dana atas Pemotongan PPH Pasal  23 untuk Jasa Kepelabuhanan' : 'Circular Letter: Notification Letter of the Restitution Procedures for Article 23 Income Tax Deduction for Port Services' }}</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xm-12">
                    <h4>
                    {{ Session::get('Lang') != 'eng' ? 'Pelayanan Kami' : 'Our Services' }}</h4>
                    <ul>
                        <li><a href="{{ url('container-handling') }}">
                        {{ Session::get('Lang') != 'eng' ? 'Penanganan Petikemas' : 'Container Handling' }}</a></li>
                        <li><a href="{{ url('reefer-handling') }}">
                        {{ Session::get('Lang') != 'eng' ? 'Penanganan Petikemas Reefer' : 'Reefer Handling' }}</a></li>
                        <li><a href="{{ url('dangerous-goods-dg-handling') }}">
                        {{ Session::get('Lang') != 'eng' ? 'Penanganan Barang Berbahaya' : 'Dangerous Good (DG) Handling' }}</a></li>
                        <li><a href="{{ url('out-of-gauge-oogun-containerized-cargo-uc-cargo-handling') }}">
                        {{ Session::get('Lang') != 'eng' ? 'Penanganan OOG (Out Of Gauge) dan Barang Uncontainerized' : 'Out Of Gauge / Un-containerized Cargo (UC) Handling' }}</a></li>
                        <li><a href="{{ url('verified-gross-mass-vgm-handling') }}">
                        {{ Session::get('Lang') != 'eng' ? 'Jembatan Timbang untuk Berat Kotor Terverifikasi (VGM)' : 'Weight Bridge for Verified Gross Mass (VGM)' }}</a></li>
                        <li><a href="{{ url('integrated-facilities-for-custom-quarantine') }}">
                        {{ Session::get('Lang') != 'eng' ? 'Area Common Gate' : 'Common Gate Area' }}</a></li>
                        <li><a href="{{ url('NPCT1-General-Conditions-for-Services-and-Facilities') }}">
                            {{ Session::get('Lang') != 'eng' ? 'Ketentuan Umum Untuk Layanan dan Fasilitas di NPCT1' : 'NPCT1 General Conditions for Services and Facilities' }}</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-6 col-xm-12">
                    <h4>
                    {{ Session::get('Lang') != 'eng' ? 'Link' : 'Link' }}</h4>
                    <ul>
                        <li><a href="https://eportal.npct1.co.id/NPCTP/" target="_blank">EPORTAL</a></li>
                        <li><a href="https://econ.npct1.co.id" target="_blank">ECON</a></li>
                        <li><a href="{{ url('tariff-simulation') }}">
                        {{ Session::get('Lang') != 'eng' ? 'Simulasi Tarif' : 'Tariff Simulation' }}</a></li>
                        <li><a href="{{ url('tracking') }}">
                        {{ Session::get('Lang') != 'eng' ? 'Pelacakan Petikemas' : 'Tracking Container' }}</a></li>
                        <li><a href="{{ url('vessel-schedule') }}">
                        {{ Session::get('Lang') != 'eng' ? 'Jadwal Kapal' : 'Vessel Schedule' }}</a></li>
                        <li><a href="https://vgm.bki.co.id/vgm-certificate/lookup" target="_blank">VGM</a></li>
                        <li><a href="{{ url('eir') }}">EIR</a></li>
                        <li><a href="{{ url('npct1-career') }}">
                        {{ Session::get('Lang') != 'eng' ? 'Lowongan Pekerjaan' : 'Job Opportunity' }}</a></li>
                        {{--  <a><a href="#">CSR Activities</a></a>  --}}
                    </ul>
                </div>
            </div>
        </div>
		
    </section>

    <button onclick="topFunction()" id="myBtn" class="btn" title="Go to top"><i class="fas fa-angle-up fa-2x"></i></button>
    <a href="{{ url('contact-us') }}" id="myContact" class="btn" title="Contact Us"><i class="fas fa-envelope"></i></a>
    <div class="loading-custom">
        <div class="loading-custom-content"></div>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script> !-->
    <script src="{{ URL::asset('js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('js/theme/bootbox.all.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap-material-datetimepicker.js') }}"></script>
	<script src="{{ URL::asset('js/DateTimePicker.js') }} "></script>
    <script src="{{ URL::asset('js/custom.min.js') }} "></script>
</body>

</html>