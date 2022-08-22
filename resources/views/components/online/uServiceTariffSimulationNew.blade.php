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
                        <form action="{{ $action }}" method="post" name="frmTarif" id="frmTarif" autocomplete="off">
                            <h1>Header</h1>
                            <div class="row margin-reduce">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label>Transaction Type *</label>
                                        {{ Form::select('direction', $direction, 'OUT', ['id' => 'direction', 'class' => 'form-control input-lg myselect', 'name'=>'direction','data-placeholder' => 'Select Trans Type', 'wajib' => 'true']) }}
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label>Customs Document Type *</label>
                                        {{ Form::select('customType', $customType, '', ['id' => 'customType', 'class' => 'form-control input-lg myselect', 'name'=>'customType','data-placeholder' => 'Select Custom Type', 'wajib' => 'true']) }}
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label>Customs Document Date *</label>
                                        <input type="text" name="customsDate" class="form-control my-select-date form-control-wide" maxlength="10" value="{{ date("d-m-Y") }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row margin-reduce">
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <div class="form-group">
                                        <label class="eta-disch">Discharge *</label>
                                        <input type="text" name="eta" class="form-control my-select-date form-control-wide" maxlength="10" value="{{ date("d-m-Y") }}">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <div class="form-group pm-time">
                                        <label>Time *</label>
                                        {{ Form::select('pm', $pm, '', ['id' => 'pm', 'class' => 'form-control input-lg myselect', 'name'=>'pm','data-placeholder' => 'Select Custom Type', 'wajib' => 'true']) }}
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label class="etd-paidthrough">Paid Through *</label>
                                        <input type="text" name="paid" class="form-control my-select-date form-control-wide" maxlength="10" value="{{ date("d-m-Y") }}">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label>Gate Pass Created *</label>
                                        <input type="text" name="created" class="form-control my-select-date form-control-wide" maxlength="10" value="{{ date("d-m-Y") }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-right: 0px !important;">
                                
                            </div>
                            <div class="clearfix">&nbsp;</div>
                            <h1>Detail</h1>
                            <div class="row controls-detail" id = "{{ rand() }}">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Container Size *</label>
                                        {{ Form::select('detail[size][]', $contType, '', ['id' => 'cont-size', 'class' => 'form-control input-lg myselect', 'name'=>'detail[size][]','data-placeholder' => 'Choose Type', 'wajib' => 'true']) }}
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Full / Empty *</label>
                                        {{ Form::select('detail[status][]', $contStatus, '', ['id' => 'cont-status', 'class' => 'form-control input-lg myselect', 'name'=>'detail[status][]','data-placeholder' => 'Choose Status', 'wajib' => 'true']) }}
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label>Qty *</label>
                                        <input type="text" name="detail[qty][]" class="form-control form-control-wide" wajib="true">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label>Reefer</label>
                                        <label class="container-checkbox">
                                            <input type="checkbox" name="detail[rfr][]" class="mycheckbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <input type="hidden" name="detail[rfr][]">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label>OOG</label>
                                        <label class="container-checkbox">
                                            <input type="checkbox" name="detail[oog][]" class="mycheckbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <input type="hidden" name="detail[oog][]">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label>DG</label>
                                        <label class="container-checkbox">
                                            <input type="checkbox" name="detail[dg][]" class="mycheckbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <input type="hidden" name="detail[dg][]">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-wide-right btn-middle-mt-30 semi-bold btn-detail-cont" style="margin-top: 30px !important;" id="{{ rand() }}">+</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button class="btn btn-wide-right btn-middle-mt-30 semi-bold" style="margin-top: 30px !important; float: left !important;" id="{{ rand() }}" onclick="calculate('frmTarif', $(this)); return false"> Process</button>
                                </div>
                            </div>
                        </form>
                        <div style="height: 30px;">&nbsp;</div>
                        <div class="row" id="result-tarrif">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
@endsection