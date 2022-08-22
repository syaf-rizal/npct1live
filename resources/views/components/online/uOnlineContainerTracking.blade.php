@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Container Tracking</h1>
                <h6><a href="{{ url('/') }}">Home</a>  <i class="fas fa-angle-right"></i> Online Service</h6>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
<section>
    <div style="width: 75%; margin:0px auto; z-index: 999; position: relative;">
        <form action="{{ $changeSearchContainer }}" name="fChangeSearchContainer" id="fChangeSearchContainer" method="post" autocomplete="off">
            <div class="row" style="margin-right: 0px !important;">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Vessel</label>
                        {{ Form::select('vesselTracking', $vessel, $containerAttribute['vessel'], ['id' => 'vesselTrakcing', 'class' => 'form-control input-lg myselect', 'name'=>'vesselTracking','data-placeholder' => 'Select Vessel', 'wajib' => 'true']) }}
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Voyage **</label>
                        <input type="text" name="vesselVoyage" class="form-control form-control-wide text-uppercase" maxlength="4" value="{{ $containerAttribute['voyage'] }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Direction</label>
                        {{ Form::select('vesselDirection', $direction, $containerAttribute['direction'], ['id' => 'vesselDirection', 'class' => 'form-control input-lg myselect', 'name'=>'vesselDirection','data-placeholder' => 'Select Direction', 'wajib' => 'true']) }}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Container Number</label>
                        <input type="text" name="vesselContainer" class="form-control form-control-wide cont-split text-uppercase" maxlength="13" value="{{ $containerAttribute['container'] }}">
                    </div>
                </div>
            </div>
            <div class="row" style="border-bottom: 1px solid #dee2e6; padding-bottom: 20px;">
                <div class="col-md-12">
                    <span class="hintvoyage small">** Input 4 (four) last characters of voyage</span>
                    <button class="btn btn-wide-right" onclick="onlineSearch($('#fChangeSearchContainer')); return false">Tracking Container</button>
                </div>
            </div>
        </form>
        @if($tracking['isFound'])
        <div class="clearfix">&nbsp;</div>
        <div class="row">
            <div class="col-sm-7 col-md-7 col-lg-7">
                <h1 class="header-w-underscore-left">Container Detail</h1>
            </div>
            <div class="col-sm-5 col-md-5 col-lg-5">
                <span class="text-right bg-primary text-white status-desc">
                    Status - <span class="semi-bold">{{ $tracking['collections']['status'] }}</span>
                </span>
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="row ptsc-5 pb-10">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Vessel</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $tracking['collections']['in']['vessel_name'] }}</h5>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Line</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $tracking['collections']['in']['line'] }}</h5>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Category</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">
                        {{ $tracking['collections']['direction'] }} {{ ($tracking['collections']['in']['transport_type'] == "VS" ? ($tracking['collections']['in']['cont_status'] == "F" ? "FULL" : "EMPTY") . ' - ' .  (substr($tracking['collections']['in']['cont_isocode'], 0, 1) == "2" ? "20 FEET" : "40 FEET") : ($tracking['collections']['in']['cont_status'] == "F" ? "FULL" : "EMPTY") . ' - ' .  (substr($tracking['collections']['in']['cont_isocode'], 0, 1) == "2" ? "20 FEET" : "40 FEET")) }}</h5>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Weight</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $tracking['collections']['in']['cont_weight'] }}</h5>
                </div>
            </div>
        </div>
        <div class="row ptsc-5 pb-10">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Voyage</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $tracking['collections']['in']['vessel_voyage'] }}</h5>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">POD/POL</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ ($tracking['collections']['direction'] == "IMPORT" ? $tracking['collections']['in']['pol'] . ' / ' . $tracking['collections']['in']['pod'] : $tracking['collections']['in']['pod'] . ' / ' . $tracking['collections']['in']['pol']) }}</h5>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Customs Doc</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $tracking['collections']['in']['customs_type'] }}</h5>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Date</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">
                        {{ trim($tracking['collections']['in']['customs_date']) > 0 ? date("d/m/Y", strtotime($tracking['collections']['in']['customs_date'])): '-'}}</h5>
                </div>
            </div>
        </div>
        <div class="row ptsc-5 pb-10">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Location</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $tracking['collections']['in']['cont_position'] }}</h5>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Shipper / Consignee</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">
                        {{ ($tracking['collections']['in']['transport_type'] == "VS" ? $tracking['collections']['out']['customer'] : $tracking['collections']['in']['customer']) }}</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Remark</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ ($tracking['collections']['in']['transport_type'] == "VS" ? (trim($tracking['collections']['out']['remark']) == "" ? "-" : $tracking['collections']['out']['remark']) : (trim($tracking['collections']['in']['remark']) == "" ? "-" : $tracking['collections']['in']['remark'])) }}</h5>
                </div>
            </div>
        </div>
        <div class="row ptsc-5 pb-10">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Container In</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ trim($tracking['collections']['in']['cont_gatein']) > 0 ? date("d/m/Y H:i:s", strtotime($tracking['collections']['in']['cont_gatein'])) : '-' }}</h5>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Container Out</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ trim($tracking['collections']['out']['cont_gateout']) > 0 ? date("d/m/Y H:i:s", strtotime($tracking['collections']['out']['cont_gateout'])) : '-' }}</h5>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Truck ID</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">
                        @php $truckId = '-' @endphp
                        @if($tracking['collections']['in']['transport_type'] == "TR")
                            @php $truckId = $tracking['collections']['in']['transport_id'] @endphp
                        @elseif($tracking['collections']['out']['transport_type'] == "TR")
                            @php $truckId = $tracking['collections']['out']['transport_id'] @endphp
                        @else
                            @php $truckId @endphp
                        @endif
                        {{ $truckId }}
                    </h5>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Truck In</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">
                        @php $truckIn = '-' @endphp
                        @if($tracking['collections']['in']['transport_type'] == "TR")
                            @php $truckIn = (trim($tracking['collections']['in']['transport_gatein']) > 0 ? date("d/m/Y H:i:s", strtotime($tracking['collections']['in']['transport_gatein'])) : '-') @endphp
                        @elseif($tracking['collections']['out']['transport_type'] == "TR")
                            @php $truckIn = (trim($tracking['collections']['out']['transport_gatein']) > 0 ? date("d/m/Y H:i:s", strtotime($tracking['collections']['out']['transport_gatein'])) : '-') @endphp
                        @endif
                        {{ $truckIn }}
                    </h5>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2">
                <div class="form-group">
                    <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Truck Out</p>
                    <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">
                        @php $truckOut = '-' @endphp
                        @if($tracking['collections']['in']['transport_type'] == "TR")
                            @php $truckOut = (trim($tracking['collections']['in']['transport_gateout']) > 0 ? date("d/m/Y H:i:s", strtotime($tracking['collections']['in']['transport_gateout'])) : '-') @endphp
                        @elseif($tracking['collections']['out']['transport_type'] == "TR")
                            @php $truckOut = (trim($tracking['collections']['out']['transport_gateout']) > 0 ? date("d/m/Y H:i:s", strtotime($tracking['collections']['out']['transport_gateout'])) : '-') @endphp
                        @endif
                        {{ $truckOut }}
                </div>
            </div>
        </div>
        @if(strtoupper($tracking['collections']['status']) == "BOOKING ORDER")
        @if(strlen($tracking['collections']['in']['cont_imdg_value']) > 0)
            <div class="row ptsc-5 pb-10">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="form-group">
                        <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">DG Class Un</p>
                        <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ (strlen($tracking['collections']['in']['cont_imdg_value']) > 0 ? $tracking['collections']['in']['cont_imdg_value'] : "") }}</h5>
                    </div>
                </div>
                <div class="col-sm-9 col-md-9 col-lg-9">
                    <div class="form-group">
                        <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Informasi</p>
                        <h5 class="no-margin semi-bold w-border-b fetch-row" style="background-color: #FCB040; padding: 10px; border-radius: 5px; border: 1px solid #ffcc; color: #154589;">{{ $tracking['collections']['in']['cont_imdg_remark'] }}</h5>
                    </div>
                </div>
            </div>
        @endif
        @endif

        @else
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="header-w-underscore-left">Container Detail</h1>
            </div>
        </div>
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