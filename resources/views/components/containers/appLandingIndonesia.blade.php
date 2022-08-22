
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
    <!-- <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet"> !-->
	<link rel="stylesheet" href="{{ asset('css/DateTimePicker.css') }}" type="text/css">
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/moment.js') }}"></script>
	


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
                                    <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                                </li>
                                <li class="nav-itemdropdown dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tentang Kami</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="{{ url('introduction') }}">Profil Kami</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('board-of-directors') }}">Dewan Direksi</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('whistleblowing') }}">Whistleblowing</a>
                                    </div>
                                </li>
                                <li class="nav-itemdropdown dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fasilitas Terminal</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                        <a class="dropdown-item" href="{{ url('terminal-information') }}">Informasi Terminal</a>
                                    </div>
                                </li>
                                <li class="nav-itemdropdown dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pelayanan Kami</a>
                                    <div class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown4">
                                        <a class="dropdown-item" href="#" id="navbarDropdown41" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Keuangan <i class="fa fa-caret-right" style="float: right;"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown41">
                                            <a class="dropdown-item" href="{{ url('npct1-billing-procedure') }}">Prosedur Billing NPCT1</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ url('withholding-tax-refund') }}">Pengembalian PPH</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ url('npct1-mandiri-edc-payment') }}">EDC Mandiri NPCT1</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ url('circular-letter-notification-letter-of-the-restitution-procedures') }}">Surat Edaran: Surat Pemberitahuan Restitusi</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ url('circular-letter-notification-letter-of-the-restitution-procedures-for-article-23-income-tax-deduction-for-port-services') }}">o	Surat Edaran: Surat Pemberitahuan Prosedur Pengembalian Dana atas Pemotongan PPH
                                                <br>for Article 23 Income Tax Deduction for Port Services</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ url('notification-letter-of-npct1-is-exempt-from-withholding-tax-article-23') }}">
                                            Surat Edaran: Surat Pemberitahuan tentang NPCT1 dibebaskan dari Pemotongan <br> PPH Pasal 23</a>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('container-handling') }}">Penanganan Petikemas</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('reefer-handling') }}">Penanganan Petikemas Reefer</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('dangerous-goods-dg-handling') }}">Penanganan Barang Berbahaya</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('out-of-gauge-oogun-containerized-cargo-uc-cargo-handling') }}">
                                        Penanganan OOG (Out Of Gauge) dan Barang Uncontainerized</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('verified-gross-mass-vgm-handling') }}">
                                        Jembatan Timbang untuk Berat Kotor Terverifikasi (VGM)</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('integrated-facilities-for-custom-quarantine') }}">
                                        Area Common Gate</a>
                                    </div>
                                </li>
                                <li class="nav-itemdropdown dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown6" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Berita</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown6">
                                        <a class="dropdown-item" href="{{ url('npct1-news') }}">NPCT1 News</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('npct1-tender') }}">NPCT1 Tender</a>
                                    </div>
                                </li>
                                <li class="nav-itemdropdown dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown7" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Online Service</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown7">
                                        <a class="dropdown-item" href="{{ url('tariff-simulation') }}">Tariff Simulation</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="https://eportal.npct1.co.id/NPCTP/" target="_blank">ePORTAL</a>
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
										<div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('appointment') }}">Meeting Appointment</a>

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
								<li class="nav-item">
									<div class="wrapper">
										<dl id="country-select" class="dropdown">
										  <dt>
											<a href="javascript:void(0);">
												<span>
													@if(Cookie::get('Lang') == 'eng')
														<span style="background-position:0px -55px"></span>
													@else
														<span style="background-position:0px -1958px"></span>
													@endif
													<span>{{ Cookie::get('Lang') == 'eng' ? 'EN' : 'ID' }}</span>
													<span></span>
												</span>
											</a>
										  </dt>
										  <dd>
											<ul style="display: none;">
											  <li><a cunt_code="+63" onClick="changeBahasa('english')" href="javascript:void(0);"><span style="background-position:0px -55px"></span><span>EN</span><span></span></a></li>
											  <li><a cunt_code="+62" onClick="changeBahasa('indonesia')" href="javascript:void(0);"><span style="background-position:0px -1958px"></span><span>ID</span><span></span></a></li>
											</ul>
										  </dd>
										</dl>
									</div>

<style>

.wrapper {
	width:100px;
	margin:3% auto;
}
.dropdown dd, .dropdown dt, .dropdown ul {
	margin: 0px;
	padding: 0px;
}
.dropdown dd ul li a span:first-child, .dropdown dt a span span:first-child {
	background-image: url('https://i.imgur.com/OQiDoZe.png');
	background-repeat: no-repeat;
	width: 16px;
	height: 11px;
	display: inline-block;
	margin:5px;
	vertical-align: top;
}
.dropdown dt a span {
	cursor: pointer;
	display: block;
	padding: 5px;
	white-space: nowrap;
}
.dropdown dt a img {
	position: relative;
	z-index: 1;
}
.dropdown dt a span span:first-child:before {
	position: absolute;
	content: '';
	width: 15px;
	height: 10px;
	box-shadow: 0 1px 1px rgba(0,0,0,0.2) inset;
}
.dropdown dt a span span {
	display: inline-block;
	padding: 0;
}
.dropdown dt a span span:first-child {
	padding: 0;
}
.dropdown dd {
	position: relative;
}
.dropdown a, .dropdown a:visited {
	color: #4a535f;
	text-decoration: none;
	outline: none;
}
.dropdown a:hover {
	color: #5d4617;
}
.dropdown dt a:hover, .dropdown dt a:focus {
	color: #5d4617;
}
.dropdown dt a {
	position: relative;
	background: #e3e6ef;
	display: block;
	padding-right: 20px;
	overflow: hidden;
	border:1px solid #fcb040;
	
}
.dropdown dt a:after {
	content: '';
	background: #fcb040;
	position: absolute;
	
	height: 32px;
    position: absolute;
    right: 0;
    top: 0;
    width: 35px;
}

.dropdown dt a:before {
    background: none repeat scroll 0 0 #FFFFFF;
    content: "";
    height: 3px;
    position: absolute;
    right: 7px;
    top: 6px;
    width: 20px;
    z-index: 2;
	box-shadow:0 8px 0 #FFFFFF, 0 16px 0 #FFFFFF;
}
.dropdown dd ul {
	background: #f0f2f7;
	
	color: #C5C0B0;
	display: none;
	left: 0px;
	padding: 5px 0px;
	position: absolute;
	
	width: 100px;
	border:1px solid #fcb040;
	list-style: none;
	max-height: 170px;
	overflow-y: scroll;
	top:10px;
	z-index: 2;
}

li a {
	font-size:13px;
}

li a span:nth-child(2) {
    line-height: 2em;
}
.dropdown dd ul::-webkit-scrollbar-track {
 -webkit-box-shadow: inset 0 0 1px rgba(0,0,0,0.3);
 border-left:1px solid rgba(0,0,0,0.1);
}
.dropdown dd ul::-webkit-scrollbar-thumb {
 background: rgba(0,0,0,0.4);

}
.dropdown dd ul::-webkit-scrollbar-thumb:window-inactive {
 background: blue;
}
.dropdown span.value {
	display: none;
}
.dropdown dd ul li a {
	padding: 5px;
	display: block;
	font-size: 12px !important;
}
.dropdown dd ul li a:hover {
	background-color: rgba(0,0,0,0.05);
}
dl.dropdown {
	display: inline-block;
	width: 100px;
	margin: -3px 0 0 1px;
}
dl.dropdown span:nth-child(3) {
	color: rgba(0,0,0,0.4)
}
dl.dropdown > span:nth-child(2) {
	overflow: hidden;
	white-space: nowrap;
	display: inline-block;
}
dl.dropdown span:nth-child(3) {
	float: right;
}
dl.dropdown dt span:nth-child(2) {
	color: rgba(0, 0, 0, 0.6);
    font-size: 14px;
    font-weight: bold;
    line-height: 1.6em;
}
dl.dropdown dt span:nth-child(3) {
	display: none;
}
.countryFlag {
	padding: 0;
	background-image: url("https://i.imgur.com/OQiDoZe.png");
	background-repeat: no-repeat;
	display: inline-block;
	height: 11px;
	margin-right: 4px;
	width: 16px;
	cursor: pointer;
	white-space: nowrap;
	-moz-border-bottom-colors: none;
	-moz-border-left-colors: none;
	-moz-border-right-colors: none;
	-moz-border-top-colors: none;
	border-color: #BFBFC1 #B6B6B6 #969696;
	border-image: none;
	border-radius: 2px 2px 2px 2px;
	border-style: solid;
	border-width: 1px;
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.09);
}

</style>
<script>
 function setCountry(code){
        if(code || code==''){
            var text = jQuery('a[cunt_code="'+code+'"]').html();
            $(".dropdown dt a span").html(text);
        }
    }
    $(document).ready(function() {
        $(".dropdown img.flag").addClass("flagvisibility");

        $(".dropdown dt a").click(function() {
            $(".dropdown dd ul").toggle();
        });

        $(".dropdown dd ul li a").click(function() {
            
            var text = $(this).html();
            $(".dropdown dt a span").html(text);
            $(".dropdown dd ul").hide();
            $("#result").html("Selected value is: " + getSelectedValue("country-select"));
        });

        function getSelectedValue(id) {
            
            return $("#" + id).find("dt a span.value").html();
        }

        $(document).bind('click', function(e) {
            var $clicked = $(e.target);
            if (! $clicked.parents().hasClass("dropdown"))
                $(".dropdown dd ul").hide();
        });


        $("#flagSwitcher").click(function() {
            $(".dropdown img.flag").toggleClass("flagvisibility");
        });
    });
</script>

									
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
                    <h4>Finance</h4>
                    <ul>
                        <li><a href="{{ url('npct1-billing-procedure') }}">NPCT1 Billing Procedure</a></li>
                        <li><a href="{{ url('withholding-tax-refund') }}">Withholding Tax Refund</a></li>
                        <li><a href="{{ url('npct1-mandiri-edc-payment') }}">NPCT1 Mandiri EDC</a></li>
                        <li><a href="{{ url('circular-letter-notification-letter-of-the-restitution-procedures') }}">Circular Letter: Notification Letter of the Restitution Procedures</a></li>
                        <li><a href="{{ url('circular-letter-notification-letter-of-the-restitution-procedures-for-article-23-income-tax-deduction-for-port-services') }}">Circular Letter: Notification Letter of the Restitution Procedures for Article 23 Income Tax Deduction for Port Services</a></li>
                        <li><a href="{{ url('notification-letter-of-npct1-is-exempt-from-withholding-tax-article-23') }}">Circular Letter: Circular Letter: NPCT1 Is Exempt From Withholding Tax Article 23</a></li>
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
                        <li><a href="https://eportal.npct1.co.id/NPCTP/" target="_blank">EPORTAL</a></li>
                        <li><a href="https://econ.npct1.co.id" target="_blank">ECON</a></li>
                        <li><a href="{{ url('tariff-simulation') }}">Tariff Simulation</a></li>
                        <li><a href="{{ url('tracking') }}">Tracking Container</a></li>
                        <li><a href="{{ url('vessel-schedule') }}">Vessel Schedule</a></li>
                        <li><a href="https://vgm.bki.co.id/vgm-certificate/lookup" target="_blank">VGM</a></li>
                        <li><a href="{{ url('eir') }}">EIR</a></li>
                        <li><a href="{{ url('npct1-career') }}">Job Opportunity</a></li>
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    <script src="{{ URL::asset('js/theme/bootbox.all.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap-material-datetimepicker.js') }}"></script>
	<script src="{{ URL::asset('js/DateTimePicker.js') }} "></script>
    <script src="{{ URL::asset('js/custom.min.js') }} "></script>
</body>

</html>