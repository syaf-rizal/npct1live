@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Board Of Directors</h1>
                <h6><a href="{{ url('/') }}">Home</a>  <i class="fas fa-angle-right"></i> {{ $arrBod->name }}</h6>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
<section>
    <div class="container">
        <div class="row bod-rules">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <img src="{{ Storage::url("images/" . $arrBod->photo) }}" alt="{{ $arrBod->name }}" style="width: 100%; height: auto;" >
            </div>
            <div class="col-sm-9 col-md-9 col-lg-9">
                <h1 style="margin-top: 10px; color: #212529; font-weight: 700; font-family: 'Work Sans', sans-serif; font-size: 42px; line-height: 48px; letter-spacing: -0.25px;">{{ $arrBod->name }}</h1>
                <h4 style="font-size: 1rem !important;">{{ $arrBod->title }}</h4>
                <div class="clearfix">&nbsp;</div>
                {!! $arrBod->description !!}
                <div class="clearfix">&nbsp;</div>
                <p class="button abour-ha"><a href="{{ url('board-of-directors') }}" class="btn more">BACK</a></p>
            </div>
        </div>
    </div>
</section>
@endsection