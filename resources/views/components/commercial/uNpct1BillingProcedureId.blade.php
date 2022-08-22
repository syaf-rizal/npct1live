@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>NPCT1 Billing Procedure</h1>
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
                <h1>NPCT1 Billing Procedure</h1>
                <p><b>E-DI (Electronic Data Interchange)</b> is Billing Transaction that supported by electronic data transfer method, in the form of Delivery Order (DO) Online/COREOR or Booking Confirmation/COPARN from Shipping Line, and Customs Document Online/TPS Online from Customs. <br>For detail manual guidance can be accessed at ECON on <a href="https://econ.npct1.co.id/buku-petunjuk" target="_blank">econ.npct1.co.id/buku-petunjuk</a> (ECON Login required).</p>
                <div class="billing-procedure">
                    <img src="{{ asset('images/BILLING_PROCEDURE_ID.png') }}">
                </div>
                <div class="billing-procedure">
                    <img src="{{ asset('images/Registration-Process-Flow.png') }}">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection