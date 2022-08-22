@extends('components.containers.appAuthentication')
@section('pageTitle', $title)
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-photo-gallery icon-gradient bg-mean-fruit"></i>
            </div>
            <div>Board Of Directors
                <div class="page-title-subheading">[ Description about board of directors website npct1]</div>
            </div>
        </div>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header mb-4">
        <div class="media flex-wrap w-100 align-items-center">
            <div class="media-body ml-3">
                <a href="javascript:void(0)">Admin - Edit Board Of Directors</a>
            </div>
        </div>
    </div>
    <div class="card-body ml-4 mr-4">
        <form action="{{ $action }}" method="post" name="fEditBod" id="fEditBod" autocomplete="off" enctype="multipart/form-data">
            <input type="hidden" name="id" wajib="yes" value="{{ $objBod['slug'] }}" >
            <div class="form-row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="position-relative form-group">
                        @if(trim($objBod['photo']) > 0)
                            <div class="content-img">
                                <img src="{{ Storage::url("images/" . $objBod['photo']) }}" style="width: 100%;" />
                            </div>
                            <div class="drop" style="display: none;">
                                <div class="uploader">
                                    <label class="drop-label">Drag and drop images here</label>
                                    <input type="file" class="image-upload" id="myThumbnail" name="myThumbnail" accept="image/*">
                                </div>
                                <div id="image-preview"></div>
                            </div>
                            <div class="mt-2 text-center">
                                <a class="mb-2 mr-2 btn-pill btn-transition btn btn-outline-primary chgmg" id="{{ rand() }}">Change Image</a>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="position-relative form-group">
                        <label for="nameBod" class="">Name</label>
                        <input name="nameBod" id="nameBod" placeholder="Name" type="text" class="form-control lg" wajib="yes" value="{{ $objBod['name'] }}">
                    </div>
                    <div class="position-relative form-group">
                        <label for="titleBod" class="">Title</label>
                        {{ Form::select('titleBod', $titleBod, $objBod['bod_position'], ['id' => 'titleBOd', 'class' => 'form-control', 'data-placeholder' => 'Select Title', 'wajib' => 'yes']) }}
                    </div>
                    <div class="position-relative form-group">
                        <label for="descriptionBod" class="">Description *</label>
                        <textarea name="descriptionBod" id="descriptionBod" class="summernote form-control" wajib="yes"></textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label for="titleBod" class="">is Active</label>
                        {{ Form::select('isActive', $isActive, $objBod['is_active'], ['id' => 'isActive', 'class' => 'form-control', 'data-placeholder' => 'Select Active Or Non-Active', 'wajib' => 'yes']) }}
                    </div>
                    <div class="clearfix">&nbsp;</div>
                    <div class="position-relative form-group">
                        <button class="btn-wide mb-2 mr-2 btn-pill btn btn-primary btn-lg" id="{{ rand() }}" onclick="postRequest('fEditBod', $(this));  return false;">Save</button>
                        <button class="btn-wide mb-2 mr-2 btn-pill btn-transition btn btn-lg btn-outline-secondary" onClick="window.history.back(); return false;">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="{{ URL::asset('js/theme/jquery.imagereader-1.1.0.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script> 
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
        var content = {!! json_encode($objBod['description']) !!};
        $('.summernote').summernote('code', content);
        $('.chgmg').on('click', function() {
            $('.drop, .content-img').toggle(100);
        });
    });
</script>
@endsection