@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<header>
    @if(count($slider) > 0) 
        <div class="owl-carousel owl-theme myslider">
        @for($i = 0; $i < count($slider); $i++)
            <div class="item">
                <img src="{{ Storage::url("images/" . $slider[$i]['banner_filename']) }}">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line"></div>
                            <h2>{!! $slider[$i]['banner_title'] !!}</h2>
                            <h1>{!! $slider[$i]['banner_sub_title'] !!}</h1>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
        </div>
    @endif
    @if(count($thumbsLink) > 0)
        <div class="container">
            <div class="row news-thumbnails">
                <div class="col-lg-6 col-md-6 col-sm-6 ui-thumbnails">
                    @for($a = 0; $a < count($thumbsLink); $a++)
                        <div class="ui-thumbnail" tabindex="-1" data-key="{{ $a }}">
                            <img src="{{ Storage::url("images/120x120/" . $thumbsLink[$a]['thumbs_src']) }}" class="img-thumbs" data-source = "{{ url($thumbsLink[$a]['thumbs_linked']) }}" id="{{ rand() }}" alt="{{ $thumbsLink[$a]['thumbs_title'] }}" />
                        </div>
                    @endfor
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 ui-content">
                    <nav class="ui-nav">
                        <button id="prev" tabindex="-1" title="Previous">&lt;</button>
                        <button id="next" tabindex="-1" title="Next">&gt;</button>
                    </nav>
                    <div class="ui-articles">
                    @for($b = 0; $b < count($thumbsLink); $b++)
                        <article class="ui-article" data-key="{{ $b }}">
                            <h2 class="ui-heading">{{ $thumbsLink[$b]['thumbs_title'] }}</h2>
                            <p class="ui-paragraph">{{ $thumbsLink[$b]['thumbs_short'] }} <a href="{{ url($thumbsLink[$b]['thumbs_linked']) }}" class="thumbs-link-more"> More</a></p>
                        </article>
                    @endfor
                    </div>
                </div>
            </div>
        </div>
    @endif
</header>
<div class="clearfix">&nbsp;</div>
<section class="logistics w-border-b pb-10">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab1" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Berita Terkini</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Tender</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        @if(count($news) > 0)
                            @for($i = 0; $i < count($news); $i++)
                                <div class="d-news">
                                    <p class="p-news"><span class="s-posted">{{ $news[$i]['posted_at'] }}</span> <a href="{{ url($news[$i]['slug']) }}">{{ $news[$i]['title'] }}</a></p>
                                </div>
                            @endfor
                        @endif
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        @if(count($tender) > 0)
                            @for($i = 0; $i < count($tender); $i++)
                                <div class="d-news">
                                    <p class="p-news"><span class="s-posted">{{ $tender[$i]['posted_at'] }}</span> <a href="{{ url($tender[$i]['slug']) }}">{{ $tender[$i]['title'] }}</a></p>
                                </div>
                            @endfor
                        @else
                            <div class="d-news">
                                <p class="p-news">There is no tender active.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
<section class="feature">
    <div style="width: 75%; margin:0px auto;" class="feature-wrapper">
        <div class="row feature-area">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <div class="owl-carousel owl-theme" id="feature-carousel">
                    <div class="item">
                        <img src="{{ asset('images/about.png') }}" class=" mx-auto d-block" alt="About Us" style="width: auto !important;">
                        <h4>Tentang Kami</h4>
                        <p style="text-align: justify;">
                        Pelabuhan Tanjung Priok di Jakarta Utara, yang menangani lebih dari setengah volume total di Indonesia, telah mengalami kelebihan muatan selama bertahun-tahun.
                        Pengembangan <font class="translated">New Priok</font> akan membawa fasilitas pelabuhan Jakarta setara dengan pelabuhan kelas dunia lainnya dan memberikan peluang konektivitas jaringan baru untuk perusahaan pelayaran. Hal ini akan secara signifikan memperkuat daya saing rantai logistik Indonesia dan mengarah pada lingkungan perdagangan yang lebih baik.
						</p>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/port.png') }}" class=" mx-auto d-block" alt="Our Services" style="width: auto !important;">
                        <h4>Pelayanan Kami</h4>
                        <p style="text-align: justify;">
                        <font class="translated">New Priok Container Terminal One (NPCT1)</font> adalah terminal pertama pengembangan <font class="translated">New Priok</font> di Indonesia dan akan memposisikan dirinya untuk memberikan pelayanan pelabuhan terbaik di kelasnya kepada pelanggan, mitra, dan pemangku kepentingan lainnya.
						</p>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/tarif-simulation.png') }}" class=" mx-auto d-block" alt="Tarif Simulation" style="width: auto !important;">
                        <h4>Simulasi Tarif</h4>
                        <p style="text-align: justify;">
                        Perangkat online ini membantu eksportir atau importir untuk memperkirakan jumlah biaya yang harus dibayarkan untuk transaksi Impor atau Ekspor yang dilakukan di NPCT1.
						</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="track" id="online-tracking">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-12">
                <h1>Online Services</h1>
            </div>
        </div>
    </div>
</section>
<section class="schedule sha-je animateFadeInUp">
    <div style="width: 75%; margin:0px auto; z-index: 999; position: relative;" class="online-wrapper">
        <div class="row">
            <div class="col-md-12">
                <nav>
                    <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active nav-one" id="shipment-tab" data-toggle="tab" href="#tracking" role="tab" aria-controls="tracking" aria-selected="true"><img src="{{ asset('images/delivery-truck.png') }}" alt="Container Tracking" style="width: 48px; height:48px;"><br>Container Tracking</a>
                        <a class="nav-item nav-link nav-two" id="schedule-tab" data-toggle="tab" href="#schedule" role="tab" aria-controls="schedule" aria-selected="false"><img src="{{ asset('images/calendar.png') }}" alt="Vessel Schedule" style="width: 48px; height:48px;"><br>Vessel Schedule</a>
                        <a class="nav-item nav-link nav-three" href="https://vgm.bki.co.id/vgm-certificate/lookup" target="_blank" role="tab" aria-controls="vgm" aria-selected="false"><img src="{{ asset('images/professions-and-jobs.png') }}" alt="Vessel vgm" style="width: 48px; height:48px;"><br>VGM</a>
                        <a class="nav-item nav-link nav-four" id="eir-tab" data-toggle="tab" href="#eir" role="tab" aria-controls="eir" aria-selected="false"><img src="{{ asset('images/sheet.png') }}" alt="Vessel eir" style="width: 48px; height:48px;"><br>EIR</a>
                        <a class="nav-item nav-link nav-three" href="{{ url('tariff-simulation') }}" role="tab" aria-controls="tariff" aria-selected="false"><img src="{{ asset('images/tax.png') }}" alt="Tariff Simulation" style="width: 48px; height:48px;"><br>Tariff Simulation</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent1">
                    <div class="tab-pane fade show active" id="tracking" role="tabpanel" aria-labelledby="tracking-tab">
                        <form action="{{ $actionTracking }}" name="fTrackingContainer" id="fTrackingContainer" method="post" autocomplete="off">
                            <div class="row" style="margin-right: 0px !important;">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Vessel</label>
                                        {{ Form::select('vesselTracking', $vessel, '', ['id' => 'vesselTrakcing', 'class' => 'form-control input-lg myselect', 'name'=>'vesselTracking','data-placeholder' => 'Select Vessel', 'wajib' => 'true']) }}
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Voyage **</label>
                                        <input type="text" name="vesselVoyage" class="form-control text-uppercase" maxlength="4">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Direction</label>
                                        <select name="vesselDirection" class="form-control input-lg myselect" wajib="yes">
                                            <option value="OUT">Import</option>
                                            <option value="IN">Export</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Container Number</label>
                                        <input type="text" name="vesselContainer" class="form-control cont-split text-uppercase" maxlength="13">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="border-top: 1px solid #dee2e6;">
                                <div class="col-md-12">
                                    <span class="hintvoyage">** Input 4 (four) last characters of voyage</span>
                                    <button class="btn btn-danger" onclick="onlineSearch($('#fTrackingContainer')); return false">Tracking Container</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
                        <form action="{{ $actionVessel }}" name="fVesselSchedule" id="fVesselSchedule" method="post" autocomplete="off">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Vessel</label>
                                        <input type="text" name="scheduleVessel" class="form-control capitalizing">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Line</label>
                                        <input type="text" name="scheduleLine" class="form-control capitalizing">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="border-top: 1px solid #dee2e6;">
                                <div class="col-md-12">
                                    <button class="btn btn-danger" onclick="onlineSearch($('#fVesselSchedule')); return false">Search Schedule</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="vgm" role="tabpanel" aria-labelledby="vgm-tab"></div>
                    <div class="tab-pane fade" id="eir" role="tabpanel" aria-labelledby="eir-tab">
                        <form action="{{ $actionEir }}" name="fEirContainer" id="fEirContainer" method="post" autocomplete="off">
                            <div class="row" style="margin-right: 0px !important;">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Vessel</label>
                                        {{ Form::select('vesselEir', $vessel, '', ['id' => 'vesselEir', 'class' => 'form-control input-lg myselect', 'name'=>'vesselEir','data-placeholder' => 'Select Vessel', 'wajib' => 'true']) }}
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Voyage **</label>
                                        <input type="text" name="voyageEir" class="form-control capitalizing" maxlength="4">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Direction</label>
                                        <select name="directionEir" class="form-control input-lg myselect" wajib="yes">
                                            <option value="IN">Export</option>
                                            <option value="OUT">Import</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Container Number</label>
                                        <input type="text" name="containerEir" class="form-control cont-split capitalizing" maxlength="13">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="border-top: 1px solid #dee2e6;">
                                <div class="col-md-12">
                                    <span class="hintvoyage">** Input 4 (four) last characters of voyage</span>
                                    <button class="btn btn-danger" onclick="onlineSearch($('#fEirContainer')); return false">Search EIR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="tarif" role="tabpanel" aria-labelledby="tarif-tab"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<section class="testimonialh">
    <div class="container">
        <div class="row testimonial-area">
            <div class="col-md-12">
                <h1>Our Facility</h1>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel owl-theme" id="testimonial-carousel">
                    <div class="item">
                        <div class="testimonial-box">
                            <img src="{{ asset('images/AB6A3939-460x295.jpg') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-box">
                            <img src="{{ asset('images/AB6A3703-460x295.jpg') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-box">
                            <img src="{{ asset('images/AB6A3766-460x295.jpg') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-box">
                            <img src="{{ asset('images/AB6A3668-460x295.jpg') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-box">
                            <img src="{{ asset('images/AB6A3766-460x295.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div id="{{ rand() }}">&nbsp;</div>
<div class="announcement" id="{{ rand() }}" data-announcement="{{ count($announcement) }}" data-url="{{ url('announcement') }}"></div>
<script>
    console.clear();

    const elPrevButton = document.querySelector('#prev');
    const elNextButton = document.querySelector('#next');

    const elImages = Array.from(document.querySelectorAll('.ui-thumbnail'));
    const elThumbnails = Array.from(document.querySelectorAll('.ui-thumbnail'));

    let state = {
        photo: 0
    };

    function send(event) {

        const elActives = document.querySelectorAll('[data-active]');

        Array.from(elActives)
            .forEach(el => el.removeAttribute('data-active'));

        switch (event) {
            case 'PREV':
                state.photo--;
                break;
            case 'NEXT':
                state.photo++;
                break;
            default:
                state.photo = +event;
                break;
        }

        var len = elImages.length;
        state.photo = Math.max(0, Math.min(state.photo, len - 1));

        Array.from(document.querySelectorAll(`[data-key="${state.photo}"]`))
            .forEach(el => {
                el.setAttribute('data-active', true);
            });
    }

    elThumbnails.forEach(thumb => {
        thumb.addEventListener('click', () => {
            send(thumb.dataset.key);
        });
    });

    elPrevButton.addEventListener('click', () => {
        send('PREV');
    });

    elNextButton.addEventListener('click', () => {
        send('NEXT');
    });

    send(0);
</script>
@endsection