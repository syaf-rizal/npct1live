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
                <a href="javascript:void(0)">Admin - Edit Announcement</a>
            </div>
        </div>
    </div>
    <div class="card-body ml-4 mr-4">
        <form action="{{ $action }}" method="post" name="fEditAnnouncement" id="fEditAnnouncement" autocomplete="off" enctype="multipart/form-data">
            <input type="hidden" name="id" wajib="yes" value="{{ $objAnnouncement['slug'] }}" >
            <div class="form-row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="position-relative form-group">
                        <label for="announcementTitle" class="">Announcement Title *</label>
                        <input name="announcementTitle" id="announcementTitle" placeholder="News Title" type="text" class="form-control" wajib="yes" value="{{ $objAnnouncement['title'] }}">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="position-relative form-group">
                        <label for="announcementSubTitle" class="">Sub Title</label>
                        <input name="announcementSubTitle" id="announcementSubTitle" placeholder="Sub Title" type="text" class="form-control" value="{{ $objAnnouncement['subtitle'] }}">
                        <small class="form-text text-muted">The sub title of news is optional.</small>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="position-relative form-group">
                        <label for="announcementShortDescription" class="">Short Description</label>
                        <textarea name="announcementShortDescription" id="announcementShortDescription" placeholder="Short Description" type="text" class="form-control">{{ $objAnnouncement['short_description'] }}</textarea>
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
                        @if(trim($objAnnouncement['thumb_file']) > 0)
                            <div class="content-img">
                                <img src="{{ Storage::url("images/" . $objAnnouncement['thumb_file']) }}" style="width: 100%;" />
                            </div>
                            <div class="drop" style="display: none;">
                                <div class="uploader">
                                    <label class="drop-label">Announcement Thumbnail</label>
                                    <input type="file" class="image-upload" id="announcementThumb" name="announcementThumb" accept="image/*">
                                </div>
                                <div id="image-preview"></div>
                            </div>
                            <div class="mt-2 text-center">
                                <a class="mb-2 mr-2 btn-pill btn-transition btn btn-outline-primary chgmg" id="{{ rand() }}">Change Image</a>
                            </div>
                        @else
                            <div class="drop">
                                <div class="uploader">
                                    <label class="drop-label">Announcement Thumbnail</label>
                                    <input type="file" class="image-upload" id="announcementThumb" name="announcementThumb" accept="image/*" wajib="yes">
                                </div>
                                <div id="image-preview"></div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-6 col-md-6 col-lg-6 col-expired">
                    <div class="position-relative form-group">
                        <label for="announcementExpired" class="">Closing Date</label>
                        <input type="text" name="announcementExpired" id="announcementExpired" class="form-control" value="{{ $objAnnouncement['post_expired'] }}">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="position-relative form-group">
                        <label for="published" class="">Publish it? *</label>
                        {{ Form::select('newsPublished', $published,  $objAnnouncement['is_published'], ['id' => 'published', 'class' => 'form-control', 'data-placeholder' => 'Select Publish', 'wajib' => 'yes']) }}
                    </div>
                </div>
            </div>
            <div class="form-row mt-4 mb-4">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <button class="btn-wide mb-2 mr-2 btn-pill btn btn-primary btn-lg" id="{{ rand() }}" onclick="postRequest('fEditAnnouncement', $(this));  return false;">Save Announcement</button>
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
            var content = {!! json_encode($objAnnouncement['post_body']) !!};
            $('.summernote').summernote('code', content);

            $('#announcementThumb').imageReader({
                renderType: 'canvas',
                onload: function(canvas) {
                    $(canvas).css({
                        width: '100%',
                        marginBottom: '-10px'
                    });
                }
            });

            $('.chgmg').on('click',
                function() {
                    $('.drop, .content-img').toggle(100);
                }
            );

            if($('#announcementExpired').length > 0) {
                $('#announcementExpired').bootstrapMaterialDatePicker({ format: 'DD-MM-YYYY HH:mm', lang: 'id', weekStart: 0 });
            }
        });
</script>
@endsection