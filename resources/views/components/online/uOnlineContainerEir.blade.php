@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>EIR</h1>
                <h6><a href="{{ url('/') }}">Home</a>  <i class="fas fa-angle-right"></i> Online Service</h6>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
<section>
    <div style="width: 75%; margin:0px auto; z-index: 999; position: relative;">
        <form action="{{ $changeSearchEir }}" name="fChangeEirContainer" id="fChangeEirContainer" method="post" autocomplete="off">
            <div class="row" style="margin-right: 0px !important;">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Vessel</label>
                        {{ Form::select('vesselEir', $vessel, $containerAttribute['vessel'], ['id' => 'vesselEir', 'class' => 'form-control input-lg myselect', 'name'=>'vesselEir','data-placeholder' => 'Select Vessel', 'wajib' => 'true']) }}
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Voyage **</label>
                        <input type="text" name="voyageEir" class="form-control capitalizing form-control-wide" maxlength="4" value="{{ $containerAttribute['voyage'] }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Direction</label>s
                        {{ Form::select('directionEir', $direction, $containerAttribute['direction'], ['id' => 'directionEir', 'class' => 'form-control input-lg myselect', 'name'=>'directionEir','data-placeholder' => 'Select Direction', 'wajib' => 'true']) }}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Container Number</label>
                        <input type="text" name="containerEir" class="form-control cont-split capitalizing form-control-wide" maxlength="13" value="{{ $containerAttribute['container'] }}">
                    </div>
                </div>
            </div>
            <div class="row" style="border-bottom: 1px solid #dee2e6; padding-bottom: 20px;">
                <div class="col-md-12">
                    <span class="hintvoyage">** Input 4 (four) last characters of voyage</span>
                    <button class="btn btn-wide-right" onclick="onlineSearch($('#fChangeEirContainer')); return false">Search EIR</button>
                </div>
            </div>
        </form>
        @if($eir['isFound'])
        <div class="row" style="padding-top: 10px;">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="header-w-underscore-left">EIR Detail</h1>
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="row ptsc-5 pb-10">
            <div class="col-sm-8 col-md-8 col-lg-8">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Direction</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $eir['collection']['direction'] }}</h5>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Container</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $eir['collection']['cont_no'] }} / {{ $eir['collection']['cont_isocode'] }}</h5>
                </div>
            </div>
        </div>
        <div class="row ptsc-5 pb-10">
            <div class="col-sm-8 col-md-8 col-lg-8">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Vessel / Voyage</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $eir['collection']['vessel_name'] }} / {{ $eir['collection']['voyage'] }}</h5>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Location</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $eir['collection']['cont_position'] }}</h5>
                </div>
            </div>
        </div>
        <div class="row ptsc-5 pb-10">
            <div class="col-sm-8 col-md-8 col-lg-8">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Consignee</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $eir['collection']['consignee'] }}</h5>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Customs Number</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $eir['collection']['customs_type'] }} - {{ $eir['collection']['customs_no'] }}</h5>
                </div>
            </div>
        </div>
        <div class="row ptsc-5 pb-10">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis semi-bold w-border-b fetch-row">Movement</p>
                </div>
            </div>
        </div>
        <div class="row ptsc-5 pb-10">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Container Discharge</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ trim($eir['collection']['cont_gatein']) > 0 ? date("d/m/Y H:i:s", strtotime($eir['collection']['cont_gatein'])) : '-' }}</h5>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Container Out</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ trim($eir['collection']['cont_gateout']) > 0 ? date("d/m/Y H:i:s", strtotime($eir['collection']['cont_gateout'])) : '-' }}</h5>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Truck Gate In</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ trim($eir['collection']['truck_gatein']) > 0 ? date("d/m/Y H:i:s", strtotime($eir['collection']['truck_gatein'])) : '-' }}</h5>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Truck Gate Out</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ trim($eir['collection']['truck_gateout']) > 0 ? date("d/m/Y H:i:s", strtotime($eir['collection']['truck_gateout'])) : '-' }}</h5>
                </div>
            </div>
        </div>
        <div class="row ptsc-5 pb-10">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis semi-bold fetch-row text-center"><a href="{{ url($eir['link']) }}" class="btn more" target="_blank">DOWNLOAD EIR</a></p>
                </div>
            </div>
        </div>
        @else
        <div class="row ptsc-5 pb-10">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat no-margin overflow-ellipsis semi-bold fetch-row text-center"> Records not found</p>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
@endsection