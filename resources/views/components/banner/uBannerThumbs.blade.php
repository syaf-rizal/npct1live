@extends('components.containers.appAuthentication')
@section('pageTitle', $title)
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-photo-gallery icon-gradient bg-mean-fruit"></i>
            </div>
            <div>Thumbnail Banner Carousel
                <div class="page-title-subheading">[ Description about thumbnail banner carousel website npct1]</div>
            </div>
        </div>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header mb-4">
        <div class="media flex-wrap w-100 align-items-center">
            <div class="media-body ml-3">
                <a href="javascript:void(0)">Admin - Add Thumbnails For Current Banner</a>
            </div>
        </div>
    </div>
    <div class="card-body ml-4 mr-4">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h1>{!! $banner[0]['banner_title'] !!}</h1>
                        <h2>{!! $banner[0]['banner_sub_title'] !!}</h2>
                        <div class="m-3">
                            <img src="{{ Storage::url("images/" . $banner[0]['banner_filename']) }}" class="img-responsive" >
                        </div>
                        @if(count($banner[0]['has_banner']) > 0)
                            <div class="row" style="width: 80%; margin: 0px auto;">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="slick-slider-responsive">
                                        @for($j = 0; $j < count($banner[0]['has_banner']); $j++)
                                            <div>
                                                <div class="slider-item"><img src="{{ Storage::url("images/190x120/" . $banner[0]['has_banner'][$j]['child_src']) }}"  alt="{{ $banner[0]['has_banner'][$j]['child_desc'] }}" /></div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <form action="{{ $action }}" method="post" name="fBannerCarouselThumbs" id="fBannerCarouselThumbs" autocomplete="off" enctype="multipart/form-data">
            <div class="mb-3">
                <button type="button" class="btn btn-shadow btn-wide btn-primary">
                    <span class="btn-icon-wrapper pr-2 opacity-7"><i class="fa fa-plus fa-w-20"></i></span>New Thumbnail
                </button>
            </div>
            <div class="form-row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="position-relative form-group">
                        <div class="drop">
                            <div class="uploader">
                                <label class="drop-label">Drag and drop images here</label>
                                <input type="file" class="image-upload" id="myThumbnail" name="myThumbnail" accept="image/*" wajib="yes">
                            </div>
                            <div id="image-preview"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="position-relative form-group">
                        <label for="thumbsTitle" class="">Title</label>
                        <input name="thumbsTitle" id="thumbsTitle" placeholder="Title of thumbnail" type="text" class="form-control lg" wajib="yes">
                    </div>
                    <div class="position-relative form-group">
                        <label for="thumbsLink" class="">Link</label>
                        <input name="thumbsLink" id="thumbsLink" placeholder="Link thumbnail" type="text" class="form-control lg" wajib="yes">
                    </div>
                    <div class="clearfix">&nbsp;</div>
                    <div class="position-relative form-group">
                        <input type="hidden" name="thumbsParent" value="{{ $banner[0]['banner_uuid'] }}" wajib="yes">
                        <button class="btn-wide mb-2 mr-2 btn-pill btn btn-primary btn-lg" id="{{ rand() }}" onclick="postRequest('fBannerCarouselThumbs', $(this));  return false;">Add Thumbnail</button>
                        <button class="btn-wide mb-2 mr-2 btn-pill btn-transition btn btn-lg btn-outline-secondary" onClick="window.history.back(); return false;">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="{{ URL::asset('js/theme/jquery.imagereader-1.1.0.js') }}"></script>
<script>
    $(document).ready(function(){
        $('#myThumbnail').imageReader({
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