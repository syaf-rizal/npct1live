@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>VGM</h1>
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
                        <a class="nav-item nav-link active nav-three" href="#" role="tab" aria-controls="vgm" aria-selected="false"><img src="{{ asset('images/professions-and-jobs.png') }}" alt="Vessel vgm" style="width: 48px; height:48px;"><br>VGM</a>
                        <a class="nav-item nav-link nav-four" href="{{ url('eir') }}" role="tab" aria-controls="eir" aria-selected="false"><img src="{{ asset('images/sheet.png') }}" alt="Vessel eir" style="width: 48px; height:48px;"><br>EIR</a>
                        <a class="nav-item nav-link nav-five" href="{{ url('tariff-simulation') }}" role="tab" aria-controls="tarif" aria-selected="false"><img src="{{ asset('images/tax.png') }}" alt="Vessel eir" style="width: 48px; height:48px;"><br>Tariff Simulation</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent1">
                    <div class="tab-pane fade" id="tracking" role="tabpanel" aria-labelledby="tracking-tab">
                    </div>
                    <div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
                    </div>
                    <div class="tab-pane fade show active" id="vgm" role="tabpanel" aria-labelledby="vgm-tab">
                        <form action="{{ $actionVGM }}" name="fVgmContainer" id="fVgmContainer" method="post" autocomplete="off">
                            <div class="row" style="margin-right: 0px !important;">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Vessel</label>
                                        {{ Form::select('vesselVgm', $vessel, '', ['id' => 'vesselVgm', 'class' => 'form-control input-lg myselect', 'name'=>'vesselVgm','data-placeholder' => 'Select Vessel', 'wajib' => 'true']) }}
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Voyage **</label>
                                        <input type="text" name="voyageVgm" class="form-control capitalizing" maxlength="4">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Direction</label>
                                        <select name="directionVgm" class="form-control input-lg myselect" wajib="yes">
                                            <option value="IN">Export</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Container Number</label>
                                        <input type="text" name="containerVgm" class="form-control cont-split capitalizing" maxlength="13">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="border-top: 1px solid #dee2e6;">
                                <div class="col-md-12">
                                    <span class="hintvoyage">** Input 4 (four) last characters of voyage</span>
                                    <button class="btn btn-danger" onclick="onlineSearch($('#fVgmContainer')); return false">Search VGM</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="eir" role="tabpanel" aria-labelledby="eir-tab">
                    </div>
                    <div class="tab-pane fade" id="tarif" role="tabpanel" aria-labelledby="tarif-tab">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <p>Tariff simulation tab</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
@endsection