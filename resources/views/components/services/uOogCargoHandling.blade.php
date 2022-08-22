@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Out of Gauge (OOG)/Un-containerized Cargo (UC) Cargo Handling</h1>
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
                <h1>NPCT1 OOG / UC Cargo Handling</h1>
                <p style="text-align: justify;">NPCT1 has experiences in handling OOG/UC Cargo. The terminal is equipped with the OOG/UC-capable Quay Cranes & Tools. In Jan-2017, NPCT1 broke the record in smoothly handling 54 OOG Import Cargo from 1 Vessel.</p>
                <div class="con-handling-div-img">
                    <img src="{{ asset('images/OOG1.jpg') }}">
                </div>
                <div class="con-handling-div-img">
                    <img src="{{ asset('images/OOG2-768x432.jpg') }}">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection