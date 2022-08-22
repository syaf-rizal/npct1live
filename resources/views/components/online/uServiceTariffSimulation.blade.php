@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Tariff Simulation</h1>
                <h6><a href="{{ url('/') }}">Home</a>  <i class="fas fa-angle-right"></i> Online Service</h6>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
<section class="schedule sha-je" style="margin-top: -10px !important;">
    <div style="width: 75%; margin:0px auto; z-index: 999; position: relative;">
        <div class="row">
            <div class="col-md-12">
                <nav>
                    <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link nav-one" href="{{ url('tracking') }}" role="tab" aria-controls="tracking" aria-selected="true"><img src="{{ asset('images/delivery-truck.png') }}" alt="Container Tracking" style="width: 48px; height:48px;"><br>Container Tracking</a>
                        <a class="nav-item nav-link nav-two" href="{{ url('vessel-schedule') }}" role="tab" aria-controls="schedule" aria-selected="false"><img src="{{ asset('images/calendar.png') }}" alt="Vessel Schedule" style="width: 48px; height:48px;"><br>Vessel Schedule</a>
                        <a class="nav-item nav-link nav-three" href="https://vgm.bki.co.id/vgm-certificate/lookup" target="_blank" role="tab" aria-controls="vgm" aria-selected="false"><img src="{{ asset('images/professions-and-jobs.png') }}" alt="Vessel vgm" style="width: 48px; height:48px;"><br>VGM</a>
                        <a class="nav-item nav-link nav-four" href="{{ url('eir') }}" role="tab" aria-controls="eir" aria-selected="false"><img src="{{ asset('images/sheet.png') }}" alt="Vessel eir" style="width: 48px; height:48px;"><br>EIR</a>
                        <a class="nav-item nav-link active nav-five" href="#tarif" role="tab" aria-controls="tarif" aria-selected="true"><img src="{{ asset('images/tax.png') }}" alt="Vessel eir" style="width: 48px; height:48px;"><br>Tariff Simulation</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent1">
                    <div class="tab-pane fade" id="tracking" role="tabpanel" aria-labelledby="tracking-tab">
                    </div>
                    <div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
                    </div>
                    <div class="tab-pane fade" id="vgm" role="tabpanel" aria-labelledby="vgm-tab">
                    </div>
                    <div class="tab-pane fade" id="eir" role="tabpanel" aria-labelledby="eir-tab">
                    </div>
                    <div class="tab-pane fade show active" id="tarif" role="tabpanel" aria-labelledby="tarif-tab">
                        <h1><span style="color: #FCB040 !important; font-weight: 450 !important;">Tariff Simulation</span> is Under Maintenance</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
@endsection