@extends('components.containers.appAuthentication')
@section('pageTitle', $title)
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-news-paper icon-gradient bg-mean-fruit"></i>
            </div>
            <div>{{ $type }}
                <div class="page-title-subheading">[ Description about {{$type}} website npct1]</div>
            </div>
        </div>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header mb-4">
        <div class="media flex-wrap w-100 align-items-center">
            <div class="media-body ml-3">
                <a href="javascript:void(0)">Admin - Add {{ $type }}</a>
            </div>
        </div>
    </div>
    <div class="card-body ml-4 mr-4">
        <form action="{{ $action }}" method="post" name="fNewsEvent" id="fNewsEvent" autocomplete="off" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="position-relative form-group">
                        <label for="newsTitle" class="">{{ $type }} Title *</label>
                        <input name="newsTitle" id="newsTitle" placeholder="{{ $type }} Title" type="text" class="form-control" wajib="yes">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="position-relative form-group">
                        <label for="newsSubTitle" class="">Sub Title</label>
                        <input name="newsSubTitle" id="newsSubTitle" placeholder="Sub Title" type="text" class="form-control">
                        <small class="form-text text-muted">The sub title of news is optional.</small>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="position-relative form-group">
                        <label for="newsShortDescription" class="">Short Description</label>
                        <textarea name="newsShortDescription" id="newsShortDescription" placeholder="Short Description" type="text" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-9 col-md-9 col-lg-9">
                    <div class="position-relative form-group">
                        <label for="newsBody" class="">News Body *</label>
                        <textarea name="newsBody" id="newsBody" class="summernote form-control" wajib="yes"></textarea>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="position-relative form-group">
                        <div class="drop">
                            <div class="uploader">
                                <label class="drop-label">News Thumbnail</label>
                                <input type="file" class="image-upload" id="newsThumb" name="newsThumb" accept="image/*">
                            </div>
                            <div id="image-preview"></div>
                        </div>
                    </div>
                </div>
            </div>
            @if(Auth::user()->group == "PR" || Auth::user()->group == "IT" || Auth::user()->group == "COM")
            <div class="form-row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="position-relative form-group">
                        <label for="newsType" class="">Type *</label>
                        {{ Form::select('newsType', $postType, '', ['id' => 'newsType', 'class' => 'form-control', 'data-placeholder' => 'Select Type', 'wajib' => 'yes']) }}
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-expired" style="display: none;">
                    <div class="position-relative form-group">
                        <label for="newsExpired" class="">Closing Date</label>
                        <input type="text" name="newsExpired" id="newsExpired" class="form-control">
                    </div>
                </div>
            </div>
            @else
            <div class="form-row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="position-relative form-group">
                        <label for="newsType" class="">Type *</label>
                        {{ Form::select('newsType', $postType, '', ['id' => 'newsType', 'class' => 'form-control', 'data-placeholder' => 'Select Type', 'wajib' => 'yes']) }}
                    </div>
                </div>
            </div>
            @endif
            <div class="form-row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="position-relative form-group">
                        <label for="published" class="">Publish it? *</label>
                        {{ Form::select('newsPublished', $published, '', ['id' => 'published', 'class' => 'form-control', 'data-placeholder' => 'Select Publish', 'wajib' => 'yes']) }}
                    </div>
                </div>
            </div>
            <div class="form-row mt-4 mb-4">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <button class="btn-wide mb-2 mr-2 btn-pill btn btn-primary btn-lg" id="{{ rand() }}" onclick="postRequest('fNewsEvent', $(this));  return false;">Save {{ $type }}</button>
                    <button class="btn-wide mb-2 mr-2 btn-pill btn-transition btn btn-lg btn-outline-secondary" onClick="window.history.back(); return false;">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="{{ URL::asset('js/theme/jquery.imagereader-1.1.0.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script> 
<script>
        $(document).ready(function() {
            $('.summernote').summernote({
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video', 'hr']],
                    ['view', ['codeview']],
                ],
                height: 200,
                dialogsInBody: true,
                callbacks:{
                    onInit:function(){
                        $('body > .note-popover').hide();
                    }
                }
            });
            $('#newsThumb').imageReader({
                renderType: 'canvas',
                onload: function(canvas) {
                    $(canvas).css({
                        width: '100%',
                        marginBottom: '-10px'
                    });
                }
            });
            $('#newsType').change(function(){
                let $this = $(this);
                if($this.val() == 2) {
                    $('.col-expired').css('display', 'block');
                } else if($this.val() == 1) {
                    $('.col-expired').css('display','none');
                    $('#newsExpired').val('');
                }
                return false;
            });
            if($('#newsExpired').length > 0) {
                $('#newsExpired').bootstrapMaterialDatePicker({ format: 'DD-MM-YYYY HH:mm', lang: 'id', weekStart: 0 });
            }
        });
</script>
@endsection