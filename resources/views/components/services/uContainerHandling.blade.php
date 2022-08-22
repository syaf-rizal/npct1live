@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Container Handling</h1>
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
                <h1>Ship / Vessel Operations</h1>
                <ul>
                    <li>Loading : Activity moving containers from Truck to Vessel by using QC (Quay Crane)</li>
                    <li>Discharging: Activity moving containers from Vessel to Truck by using QC (Quay Crane)</li>
                </ul>
                <div class="con-handling-div-img">
                    <img src="{{ asset('images/drone-day-3-card-2-0050.jpg') }}">
                </div>
                <div class="con-handling-div-img">
                    <img src="{{ asset('images/vessel-768x512.jpg') }}">
                </div>
                <h1>Yard Operations</h1>
                <ul>
                    <li>Off-loading: Activity placing containers on Container Yard from Truck temporarily with the purpose waiting to be loaded to vessel (Export Containers) or delivered to cargo owners (Import Containers) by using RTG (Rubber Tyre Gantry) and Truck (Internal/External)</li>
                    <li>Mounting: Activity placing containers on Truck (Internal/External) from Container Yard for moving the containers to Vessel (Export) or delivering the containers to Cargo Owner (Import)</li>
                </ul>
                <div class="con-handling-div-img">
                    <img src="{{ asset('images/image4221-400x533.jpg') }}">
                </div>
                <div class="con-handling-div-img">
                    <img src="{{ asset('images/yard-400x533.jpg') }}">
                </div>
                <div class="con-handling-div-img">
                    <img src="{{ asset('images/image4199-600x450.jpg') }}">
                </div>

                <h1>Gate Operations</h1>
                <ul>
                    <li>Gate In: Process of truck (External) coming in to the terminal in order to receive container (Import) or send the container (Export) to Terminal. The gate will give CMS (Container Movement Slip) with information of location where the container should be placed or taken</li>
                    <li>Gate Out: Process of truck (External) coming out from the terminal after placing container in Yard (Export) or getting the container from Yard (Import). The gate will give EIR(Equipment Interchange Receipt) as a proven slip of the activity (placing or taking) container on/from Yard</li>
                </ul>
                <div class="con-handling-div-img">
                    <img src="{{ asset('images/gateIn.jpg') }}">
                </div>
                <div class="con-handling-div-img">
                    <img src="{{ asset('images/gateOut.jpg') }}">
                </div>
                <h1>The overall flows are as follows</h1>
                <div class="con-handling-div-img">
                    <img src="{{ asset('images/Ops-flowNew.png') }}">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection