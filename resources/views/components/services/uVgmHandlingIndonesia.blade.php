@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Jembatan Timbang untuk Berat Kotor Terverifikasi (VGM)</h1>
                <h6><a href="{{ url('/') }}">Beranda</a> <i class="fas fa-angle-right"></i> Pelayanan Kami </h6>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
<section class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 content">
                <h1>Jembatan Timbang untuk Berat Kotor Terverifikasi
                <font class="translated">(VGM)</font></h1>
                <p style="text-align: justify;">NPCT1 memberikan fasilitas
                <font class="translated">VGM</font> untuk memenuhi peraturan
                <font class="translated">SOLAS</font>.
Ada 8 Jembatan Timbang yang terletak di Gerbang Masuk
                <font class="translated">Common Gate</font>
</p>
                <div class="con-handling-div-img">
                    <img src="{{ asset('images/vgm-768x512.jpg') }}">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection