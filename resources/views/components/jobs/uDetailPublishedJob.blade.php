@extends('components.containers.appAuthentication')
@section('pageTitle', $title)
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-id icon-gradient bg-mean-fruit"></i>
            </div>
            <div>Detail NPCT1 Career
                <div class="page-title-subheading">[ Description about npct1 career website npct1]</div>
            </div>
        </div>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header mb-4">
        <div class="media flex-wrap w-100 align-items-center">
            <div class="media-body ml-3">
                <a href="javascript:void(0)">Admin - Detail {{ $objJobs['job_title'] }}</a>
            </div>
        </div>
    </div>
    <div class="card-body ml-4 mr-4">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <h6 style="font-weight: 700 !important;"><i class="pe-7s-map-marker icon-gradient bg-mean-fruit"></i> Location</h6>
                <p>{{ $objJobs['job_location'] }}</p>
                <h6 style="font-weight: 700 !important;"><i class="pe-7s-id icon-gradient bg-mean-fruit"></i> Job Type</h6>
                <p>{{ $objJobs['job_type'] }}</p>
                <h6 style="font-weight: 700 !important;"><i class="pe-7s-date icon-gradient bg-mean-fruit"></i> Closing Date</h6>
                <p>{{ $objJobs['job_expired'] }}</p>
            </div>
            <div class="col-sm-9 col-md-9 col-lg-9">
                {!! $objJobs['job_description'] !!}
                <div class="clearfix">&nbsp;</div>
                <div class="position-relative form-group">
                    <button class="btn-wide mb-2 mr-2 btn-pill btn-transition btn btn-lg btn-outline-secondary" onClick="window.history.back(); return false;">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection