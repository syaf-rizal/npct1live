@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Penanganan Kargo NPCT1 OOG / UC</h1>
                <h6><a href="{{ url('/') }}">Beranda</a> <i class="fas fa-angle-right"></i> Pealayanan Kami </h6>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
<section class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 content">
                <h1>Penanganan Kargo NPCT1 <i>OOG / UC</i></h1>
                <p style="text-align: justify;">
                NPCT1 memiliki pengalaman dalam menangani kargo
                <font class="translated">OOG / UC</font>.
                Terminal dilengkapi dengan
                <font class="translated">Quay Cranes & Tools</font> untuk
                <font class="translated">OOG / UC</font>.
                Pada Jan-2017, NPCT1 memecahkan rekor menangani 54
                <font class="translated">OOG Import Cargo</font> dengan lancar di 1 Kapal.
                </p>
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