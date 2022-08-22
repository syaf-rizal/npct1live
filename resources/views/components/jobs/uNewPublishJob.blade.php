@extends('components.containers.appAuthentication')
@section('pageTitle', $title)
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-id icon-gradient bg-mean-fruit"></i>
            </div>
            <div>NPCT1 Career
                <div class="page-title-subheading">[ Description about npct1 career website npct1]</div>
            </div>
        </div>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header mb-4">
        <div class="media flex-wrap w-100 align-items-center">
            <div class="media-body ml-3">
                <a href="javascript:void(0)">Admin - Add New Jobs Opportunity</a>
            </div>
        </div>
    </div>
    <div class="card-body ml-4 mr-4">
        <form action="{{ $action }}" method="post" name="fNewJobOpportunity" id="fNewJobOpportunity" autocomplete="off" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="position-relative form-group">
                        <label for="jobTitle" class="">Job Title *</label>
                        <input name="jobTitle" id="jobTitle" placeholder="Job Title" type="text" class="form-control lg" wajib="yes">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="position-relative form-group">
                        <label for="jobCategory" class="">Job Category *</label>
                        {{ Form::select('jobCategory', $jobCategory, '', ['id' => 'jobCategory', 'class' => 'form-control', 'data-placeholder' => 'Select Title', 'wajib' => 'yes']) }}
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="position-relative form-group">
                        <label for="jobType" class="">Job Type *</label>
                        {{ Form::select('jobType', $jobType, '', ['id' => 'jobType', 'class' => 'form-control', 'data-placeholder' => 'Select Title', 'wajib' => 'yes']) }}
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="position-relative form-group">
                        <label for="jobDescription" class="">Description *</label>
                        <textarea name="jobDescription" id="jobDescription" class="summernote form-control" wajib="yes"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="position-relative form-group">
                        <label for="jobLocation" class="">Job Placed *</label>
                        {{ Form::select('jobLocation', $jobLocation, '', ['id' => 'jobLocation', 'class' => 'form-control', 'data-placeholder' => 'Select Title', 'wajib' => 'yes']) }}
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="position-relative form-group">
                        <label for="jobExpired" class="">Closing Date *</label>
                        <input type="text" name="jobExpired" id="jobExpired" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="clearfix">&nbsp;</div>
                    <div class="position-relative form-group">
                        <button class="btn-wide mb-2 mr-2 btn-pill btn btn-primary btn-lg" id="{{ rand() }}" onclick="postRequest('fNewJobOpportunity', $(this));  return false;">Save</button>
                        <button class="btn-wide mb-2 mr-2 btn-pill btn-transition btn btn-lg btn-outline-secondary" onClick="window.history.back(); return false;">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script> 
<script>
    $(document).ready(function(){
        $('.summernote').summernote({
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ],
            height: 200,
            dialogsInBody: true,
            callbacks:{
                onInit:function(){
                    $('body > .note-popover').hide();
                }
            }
        });
        if($('#jobExpired').length > 0) {
            $('#jobExpired').bootstrapMaterialDatePicker({ format: 'DD-MM-YYYY', time: false, lang: 'id', weekStart: 0 });
        }
    });
</script>
@endsection