@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Area Common Gate</h1>
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
                <h1>Area Common Gate</h1>
                <p style="text-align: justify;">
                Rumah gerbang NPCT1 terintegrasi dengan gerbang bersama di
                <font class="translated">Common Gate Area (CGA)</font> -
                di bawah
                <font class="translated">One Stop Inspection Center</font> / Fasilitas Terpadu yang meliputi:</p>

                </p>
                <ul>
                    <li><font class="translated">Behandle Centre</font> untuk Pusat Pemeriksaan Peti Kemas</li>
                    <li>Area Pemeriksaan umum satu atap untuk Bea Cukai dan Karantina dalam wilayah <i>CGA</i> yang sama</li>
                    <li>Penyediaan <font class="translated">Gamma-Ray & X-Ray</font> untuk mendukung Pusat Pemeriksaan Bea & Cukai</li>
                    <li>Kantor Bea Cukai & Karantina</li>
                    <li>Jembatan Timbang</li>
                </ul>
                <div class="con-handling-div-img">
                    <img src="{{ asset('images/Comm-Gate.jpg') }}">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection