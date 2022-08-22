@extends('components.containers.appAuthentication')
@section('pageTitle', $title)
@section('content')
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
                <a href="javascript:void(0)">Admin - Board Of Directors</a>
            </div>
        </div>
    </div>
    <div class="card-body ml-4 mr-4">
        <form action="{{ $action }}" method="post" name="fNewBod" id="fNewBod" autocomplete="off" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="m-3">
                        <img src="{{ Storage::url("images/" . $objBod[0]['photo']) }}" class="img-responsive" >
                    </div>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="position-relative form-group">
                        <label for="nameBod" class=""><h2>{{ $objBod[0]['name'] }}</h2></label>
                        <br>
                        <label for="titleBod" class=""><h5>{{ $objBod[0]['title'] }}</h5></label>
                    </div>
                    <div class="position-relative form-group">
                        {!! $objBod[0]['description'] !!}
                    </div>
                    <div class="clearfix">&nbsp;</div>
                    <div class="position-relative form-group">
                        <button class="btn-wide mb-2 mr-2 btn-pill btn-transition btn btn-lg btn-outline-secondary" onClick="window.history.back(); return false;">Back</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection