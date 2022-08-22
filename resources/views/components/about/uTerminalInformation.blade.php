@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Terminal Facility</h1>
                <h6><a href="{{ url('/') }}">Home</a> <i class="fas fa-angle-right"></i> Terminal Facility </h6>
            </div>
        </div>
    </div>
</section>
<section class="service-details team">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12 content">
                <div class="pricing-table pricing-table-white">
                    <h5>Terminal Spesifications</h5>
                    <ul>
                        <li>Berth Length (m) <span class="specifications-label">850</span></li>
                        <li>Max Draft (m) <span class="specifications-label">-16</span></li>
                        <li>Capacity (mio TEU) <span class="specifications-label">1.5</span></li>
                        <li>Facility Space (ha) <span class="specifications-label">32</span></li>
                        <li>Hectare per Quay Crane <span class="specifications-label">4</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12 content">
                <div class="pricing-table pricing-table-white">
                    <h5>Equipments</h5>
                    <ul>
                        <li>Quay Cranes<span class="specifications-label">8</span></li>
                        <li>Twin-lift Capable Crane <span class="specifications-label">8</span></li>
                        <li>eRTG <span class="specifications-label">24</span></li>
                        <li>Prime Movers <span class="specifications-label">44</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xm-12 content">
                <div class="pricing-table pricing-table-white">
                    <h5>Facilities</h5>
                    <ul>
                        <li>CY Groundslot<span class="specifications-label">5400</span></li>
                        <li>Reefer Groundslot (5 tier capable) <span class="specifications-label">198</span></li>
                        <li>Reefer Plugs <span class="specifications-label">990</span></li>
                        <li>DG Groundslot <span class="specifications-label">80</span></li>
                        <li>Empty Groundslot <span class="specifications-label">184</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection