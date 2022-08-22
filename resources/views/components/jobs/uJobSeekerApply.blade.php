@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>NPCT1 Career</h1>
                <h6><a href="{{ url('/') }}">Home</a>  <i class="fas fa-angle-right"></i> People</h6>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
<section class="schedule schedule-not-margin-top">
    <div style="width: 50%; margin:0px auto; z-index: 999; position: relative;">
        <h1 class="header-w-underscore w-left__align">{{ $objJobs['job_title'] }} - {{ $objJobs['job_location'] }} - {{ $objJobs['job_type'] }}</h1>
        <div class="clearfix">&nbsp;</div>
        <form action="{{ $action }}" name="fApplyingJobs" id="fApplyingJobs" method="post" autocomplete="off" enctype="multipart/form-data">
            <input type="hidden" name="sluger" value="{{ $objJobs['job_uuid'] }}" readonly>
            <div class="tab-pane fade show active" id="tracking" role="tabpanel" aria-labelledby="tracking-tab">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Resume CV *</label>
                            <input type="file" name="seekerResume" id="seekerResume" class="form-control w-100" wajib="yes">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Full Name *</label>
                            <input type="text" name="seekerName" id="seekerName" class="form-control w-100 text-uppercase" wajib="yes">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="text" name="seekerEmail" id="seekerEmail" class="form-control w-100" wajib="yes">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Phone Number *</label>
                            <input type="text" name="seekerPhoneNumber" id="seekerPhoneNumber" class="form-control w-100" wajib="yes">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Current Company *</label>
                            <input type="text" name="seekerCurrentCompany" id="seekerCurrentCompany" class="form-control w-100 text-uppercase" wajib="yes">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Social Media</label>
                            {{ Form::select('seekerSocMed', $socmed, '', ['id' => 'seekerSocMed', 'class' => 'form-control w-100 input-lg myselect', 'name'=>'seekerSocMed','data-placeholder' => 'Select Social Media']) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Social Media Link</label>
                            <input type="text" name="seekerSocMedLink" id="seekerSocMedLink" class="form-control w-100">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Additional Information</label>
                            <textarea name="seekerInfo" id="seekerInfo" placeholder="Add a cover letter or anything else you want to share." class="form-control w-100 h-150"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pb-10 pt-10">&nbsp;</div>
            <div class="row">
                <div class="col-md-8 col-sm-8 col-lg-8">
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}
                </div>
                <div class="col-md-4">
                    <button class="btn btn-danger" id="{{ rand() }}" onclick="postRequest('fApplyingJobs', $(this)); return false">Submit Application</button>
                </div>
            </div>
        </form>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
@endsection