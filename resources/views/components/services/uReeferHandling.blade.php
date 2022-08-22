@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Reefer Handling</h1>
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
                <h1>Reefer Handling</h1>
                <p style="text-align: justify;">NPCT1 Reefer platforms have 198 ground slots that capable in handling about 990 Reefer containers. The characteristic of NPCT1 Reefer handling are as follows:</p>
                <ul>
                    <li>24-Hour Service managed by competent and well-trained technicians.</li>
                    <li>High availability of spare parts for prompt response to malfunctions.</li>
                    <li>NPCT1 Reefer platforms provide good infrastructure for electricity cabling and also allow plug-in and plug-out operations for easy access to reefers which require immediate attention.</li>
                </ul>
                <div class="con-handling-div-img">
                    <img src="{{ asset('images/AB6A3651.jpg') }}">
                </div>
                <div class="con-handling-div-img">
                    <img src="{{ asset('images/reefer2.png') }}">
                </div>
                <div class="con-handling-div-img">
                    <img src="{{ asset('images/reefernoText.png') }}">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection