@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Common Gate Area</h1>
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
                <h1>Common Gate Area</h1>
                <p style="text-align: justify;">NPCT1 gate house is integrated with common gate at the Common Gate Area (CGA) - under One Stop Inspection Center/Integrated Facilities which include:</p>
                <ul>
                    <li>Behandle Centre's long house for Container Inspection Center (CIC)</li>
                    <li>Under one roof common inspection area for Customs and Quarantine within the same CGA locality</li>
                    <li>Provision of Gamma-Ray & X-Ray to support Customs Inspection Centre (CIC)</li>
                    <li>Customs & Quarantine Office</li>
                    <li>Weighing Bridges</li>
                </ul>
                <div class="con-handling-div-img">
                    <img src="{{ asset('images/Comm-Gate.jpg') }}">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection