@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>NPCT1 Career - {{ $objJobs['job_title'] }}</h1>
                <h6><a href="{{ url('/') }}">Home</a>  <i class="fas fa-angle-right"></i> People</h6>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
<section class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="mb-2">
                    <p class="u-font-weight__bold mb-md-0">Location</p>
                    <p class="mb-md-0">{{ $objJobs['job_location'] }}</p>
                </div>
                <div class="mb-2">
                    <p class="u-font-weight__bold mb-md-0">Job Category</p>
                    <p class="mb-md-0">{{ $objJobs['has_category']['category_name'] }}</p>
                </div>
                <div class="mb-2">
                    <p class="u-font-weight__bold mb-md-0">Job Type</p>
                    <p class="mb-md-0">{{ $objJobs['job_type'] }}</p>
                </div>
                <div class="mb-2">
                    <p class="u-font-weight__bold mb-md-0">Closing Date</p>
                    <p class="mb-md-0">{{ Carbon\Carbon::parse($objJobs['job_expired'])->isoFormat('MMMM, Do YYYY') }}</p>
                </div>
            </div>
            <div class="col-9 col-md-9 col-lg-9">
                {!! $objJobs['job_description'] !!}
                <div class="position-relative form-group">
                    <a href="{{ url('apply-jobs/' . $objJobs['job_uuid'] ) }}" class="btn-wide mb-2 mr-2 btn-pill btn-transition btn btn-lg btn-outline-secondary">APPLY</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection