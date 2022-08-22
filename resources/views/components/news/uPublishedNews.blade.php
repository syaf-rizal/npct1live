@extends('components.containers.appAuthentication')
@section('pageTitle', $title)
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-news-paper icon-gradient bg-mean-fruit"></i>
            </div>
            <div>{{$type}}
                <div class="page-title-subheading">[ Description about news event website npct1]</div>
            </div>
        </div>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header mb-4 ml-4 mr-4">
        <div class="media flex-wrap w-100 align-items-center">
            <div class="media-body">
                <a href="{{ url('/console/post/' . $objPost[0]['slug'] ) }}"> {{ $objPost[0]['title'] }}</a>
            </div>
        </div>
    </div>
    <div class="card-body ml-4 mr-4">
        {!! $objPost[0]['post_body'] !!}
    </div>
    <div class="card-footer m-4">
        <button class="btn-wide mb-2 mr-2 btn-pill btn-transition btn btn-lg btn-outline-secondary" onClick="window.history.back(); return false;">Back</button>
    </div>
</div>
@endsection