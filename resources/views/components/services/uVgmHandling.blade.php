@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Weigh Bridge for Verified Gross Mass (VGM)</h1>
                <h6><a href="{{ url('/') }}">Home</a> <i class="fas fa-angle-right"></i> Our Services </h6>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
<section class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 content">
                <h1>Weigh Bridge for Verified Gross Mass (VGM)</h1>
                <p style="text-align: justify;">NPCT1 provides facilities for VGM in order to comply with SOLAS regulations. There are 8 Weighing Bridges that are located in the Gate-In of Common Gate</p>
                <div class="con-handling-div-img">
                    <img src="{{ asset('images/vgm-768x512.jpg') }}">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection