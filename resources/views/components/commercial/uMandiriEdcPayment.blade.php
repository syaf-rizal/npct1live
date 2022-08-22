@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>NPCT1 Mandiri EDC Payment</h1>
                <h6><a href="{{ url('/') }}">Home</a> <i class="fas fa-angle-right"></i> Commercial <i class="fas fa-angle-right"></i> Finance </h6>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
<section class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 content">
                <h1>NPCT1 Biller Code: 46019</h1>
                <div class="billing-procedure">
                    <img src="{{ asset('images/mandiri-payment-849x1024.jpg') }}">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection