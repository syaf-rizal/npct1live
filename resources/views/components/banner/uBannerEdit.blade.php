@extends('components.containers.appAuthentication')
@section('pageTitle', $title)
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-photo-gallery icon-gradient bg-mean-fruit"></i>
            </div>
            <div>Banner Carousel
                <div class="page-title-subheading">[ Description about banner carousel website npct1]</div>
            </div>
        </div>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header mb-4">
        <div class="media flex-wrap w-100 align-items-center">
            <div class="media-body ml-3">
                <a href="javascript:void(0)">Admin - Edit Banner</a>
            </div>
        </div>
    </div>
    <div class="card-body ml-4 mr-4">
        <form action="{{ $action }}" method="post" name="fBannerCarousel" id="fBannerCarousel" autocomplete="off" enctype="multipart/form-data">
            <input type="hidden" name="id" wajib="yes" value="{{ $banner['banner_uuid'] }}" >
            <div class="form-row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <img src="{{ Storage::url("images/" . $banner['banner_filename']) }}" class="img-responsive" >
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="position-relative form-group">
                        <label for="bannerTitle" class="">Banner Title *</label>
                        <input name="bannerTitle" id="bannerTitle" placeholder="Banner Title" type="text" class="form-control" wajib="yes" value="{{ $banner['banner_title'] }}">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="position-relative form-group">
                        <label for="bannerSubTitle" class="">Banner Sub Title *</label>
                        <input name="bannerSubTitle" id="bannerSubTitle" placeholder="Banner Sub Title" type="text" class="form-control" wajib="yes" value="{{ $banner['banner_sub_title'] }}">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="position-relative form-group">
                        <label for="published" class="">Status  *</label>
                        {{ Form::select('bannerStatus', $bannerStatus,  $banner['banner_active'], ['id' => 'banner-status', 'class' => 'form-control', 'data-placeholder' => 'Select Status', 'wajib' => 'yes']) }}
                    </div>
                </div>
            </div>
            <div class="form-row mt-4 mb-4">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <button class="btn-wide mb-2 mr-2 btn-pill btn btn-primary btn-lg" id="{{ rand() }}" onclick="postRequest('fBannerCarousel', $(this));  return false;">Save Banner</button>
                    <button class="btn-wide mb-2 mr-2 btn-pill btn-transition btn btn-lg btn-outline-secondary" onClick="window.history.back(); return false;">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="{{ URL::asset('js/theme/jquery.imagereader-1.1.0.js') }}"></script>
<script>
    $(document).ready(function(){
        $('#mycarousel').imageReader({
            renderType: 'canvas',
            onload: function(canvas) {
                $(canvas).css({
                    width: '100%',
                    marginBottom: '-10px'
                });
            }
        });
    });
</script>
@endsection
