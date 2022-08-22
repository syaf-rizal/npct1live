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
            <div>Announcement
                <div class="page-title-subheading">[ Description about announcement at website npct1]</div>
            </div>
        </div>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header mb-4">
        <div class="media flex-wrap w-100 align-items-center">
            <div class="media-body ml-3">
                <a href="javascript:void(0)">Admin - Add Announcement</a>
            </div>
        </div>
    </div>
    <div class="card-body ml-4 mr-4">
        <form action="{{ $action }}" method="post" name="fNAnnouncement" id="fNAnnouncement" autocomplete="off" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="position-relative form-group">
                        <label for="announcementTitle" class="">Announcement Title *</label>
                        <input name="announcementTitle" id="announcementTitle" placeholder="News Title" type="text" class="form-control" wajib="yes">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="position-relative form-group">
                        <label for="announcementSubTitle" class="">Sub Title</label>
                        <input name="announcementSubTitle" id="announcementSubTitle" placeholder="Sub Title" type="text" class="form-control">
                        <small class="form-text text-muted">The sub title of news is optional.</small>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="position-relative form-group">
                        <label for="announcementShortDescription" class="">Short Description</label>
                        <textarea name="announcementShortDescription" id="announcementShortDescription" placeholder="Short Description" type="text" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-9 col-md-9 col-lg-9">
                    <div class="position-relative form-group">
                        <label for="announcementBody" class="">Announcement Body *</label>
                        <textarea name="announcementBody" id="announcementBody" class="summernote form-control" wajib="yes"></textarea>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="position-relative form-group">
                        <div class="drop">
                            <div class="uploader">
                                <label class="drop-label">Announcement Thumbnail</label>
                                <input type="file" class="image-upload" id="announcementThumb" name="announcementThumb" accept="image/*" wajib="yes">
                            </div>
                            <div id="image-preview"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-6 col-md-6 col-lg-6 col-expired">
                    <div class="position-relative form-group">
                        <label for="announcementExpired" class="">Closing Date</label>
                        <input type="text" name="announcementExpired" id="announcementExpired" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-row mt-4 mb-4">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <button class="btn-wide mb-2 mr-2 btn-pill btn btn-primary btn-lg" id="{{ rand() }}" onclick="postRequest('fNAnnouncement', $(this));  return false;">Save Announcement</button>
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
            $('#announcementThumb').imageReader({
                renderType: 'canvas',
                onload: function(canvas) {
                    $(canvas).css({
                        width: '100%',
                        marginBottom: '-10px'
                    });
                }
            });
            if($('#announcementExpired').length > 0) {
                $('#announcementExpired').bootstrapMaterialDatePicker({ format: 'DD-MM-YYYY HH:mm', lang: 'id', weekStart: 0 });
            }
        });
</script>
@endsection