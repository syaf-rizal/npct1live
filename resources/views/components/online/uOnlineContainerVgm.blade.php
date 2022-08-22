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
<section>
    <div style="width: 75%; margin:0px auto; z-index: 999; position: relative;">
        <form action="{{ $changeSearchVgm }}" name="fChangeVgmContainer" id="fChangeVgmContainer" method="post" autocomplete="off">
            <div class="row" style="margin-right: 0px !important;">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Vessel</label>
                        {{ Form::select('vesselVgm', $vessel, $containerAttribute['vessel'], ['id' => 'vesselVgm', 'class' => 'form-control input-lg myselect', 'name'=>'vesselVgm','data-placeholder' => 'Select Vessel', 'wajib' => 'true']) }}
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Voyage **</label>
                        <input type="text" name="voyageVgm" class="form-control capitalizing form-control-wide" maxlength="4" value="{{ $containerAttribute['voyage'] }}">
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
                        <input type="text" name="containerVgm" class="form-control cont-split capitalizing form-control-wide" maxlength="13" value="{{ $containerAttribute['container'] }}">
                    </div>
                </div>
            </div>
            <div class="row" style="border-bottom: 1px solid #dee2e6; padding-bottom: 20px;">
                <div class="col-md-12">
                    <span class="hintvoyage">** Input 4 (four) last characters of voyage</span>
                    <button class="btn btn-wide-right" onclick="onlineSearch($('#fChangeVgmContainer')); return false">Search VGM</button>
                </div>
            </div>
        </form>
        @if($vgm['isFound'])
            <div class="row" style="padding-top: 10px;">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 class="header-w-underscore-left">VGM Detail</h1>
                </div>
            </div>
            <div class="clearfix">&nbsp;</div>
            <div class="row ptsc-5 pb-10">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="form-group">
                        <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Direction</p>
                        <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $vgm['collection']['direction'] }}</h5>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Container</p>
                        <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $vgm['collection']['cont_no'] }} / {{ $vgm['collection']['cont_isocode'] }}</h5>
                    </div>
                </div>
            </div>
            <div class="row ptsc-5 pb-10">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Vessel / Voyage</p>
                        <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $vgm['collection']['vessel_name'] }} / {{ $vgm['collection']['voyage'] }}</h5>
                    </div>
                </div>
            </div>
            <div class="row ptsc-5 pb-10">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Shipper</p>
                        <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $vgm['collection']['consignee'] }}</h5>
                    </div>
                </div>
            </div>
            <div class="row ptsc-5 pb-10">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Address</p>
                        <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $vgm['collection']['address'] }}</h5>
                    </div>
                </div>
            </div>
            <div class="row ptsc-5 pb-10">
                <div class="col-sm-4 col-md-4 col-lg-">
                    <div class="form-group">
                        <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">VGM Value</p>
                        <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $vgm['collection']['vgm_value'] }}</h5>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">VGM Date</p>
                        <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $vgm['collection']['vgm_date'] }}</h5>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis">Seal</p>
                        <h5 class="no-margin overflow-ellipsis semi-bold w-border-b fetch-row">{{ $vgm['collection']['seal'] }}</h5>
                    </div>
                </div>
            </div>    
            <div class="row ptsc-5 pb-10">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <p class="hint-text all-caps font-montserrat small no-margin overflow-ellipsis semi-bold fetch-row text-center"><a href="{{ url($vgm['link']) }}" class="btn more" target="_blank">DOWNLOAD VGM</a></p>
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