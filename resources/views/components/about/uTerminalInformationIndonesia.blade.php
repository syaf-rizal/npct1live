@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Fasilitas Terminal</h1>
                <h6><a href="{{ url('/') }}">Beranda</a> <i class="fas fa-angle-right"></i> Fasilitas Terminal </h6>
            </div>
        </div>
    </div>
</section>
<section class="service-details team">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12 content">
                <div class="pricing-table pricing-table-white">
                    <h5>Spesifikasi Terminal</h5>
                    <ul>
                        <li>Panjang Dermaga (m) <span class="specifications-label">850</span></li>
                        <li><font class="translated">Max Draft</font> (m) <span class="specifications-label">-16</span></li>
                        <li>Kapasitas (mio TEU) <span class="specifications-label">1.5</span></li>
                        <li>Fasilitas Ruang (ha) <span class="specifications-label">32</span></li>
                        <li>Hektar per <i>Quay Crane</i> <span class="specifications-label">4</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12 content">
                <div class="pricing-table pricing-table-white">
                    <h5>Peralatan</h5>
                    <ul>
                        <li><font class="translated">Quay Cranes</font><span class="specifications-label">8</span></li>
                        <li><font class="translated">Twin-lift Capable Crane</font> <span class="specifications-label">8</span></li>
                        <li><font class="translated">eRTG</font> <span class="specifications-label">24</span></li>
                        <li><font class="translated">Prime Movers</font> <span class="specifications-label">44</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12 content">
                <div class="pricing-table pricing-table-white">
                    <h5>Fasilitas</h5>
                    <ul>
                        <li><font class="translated">CY Groundslot</font><span class="specifications-label">5400</span></li>
                        <li><font class="translated">Reefer Groundslot</font> (5 tingkat) <span class="specifications-label">198</span></li>
                        <li><font class="translated">Reefer Plugs</font> <span class="specifications-label">990</span></li>
                        <li><font class="translated">DG Groundslot</font> <span class="specifications-label">80</span></li>
                        <li><font class="translated">Empty Groundslot</font> <span class="specifications-label">184</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection