@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Philosophy</h1>
                <h6><a href="{{ url('/') }}">Home</a> <i class="fas fa-angle-right"></i> People</h6>
            </div>
        </div>
    </div>
</section>
<section class="team" id="teaml">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 content">
                <h1>Filosofi Perusahaan</h1>
                <p style="text-align: justify;">NPCT1 mengembangkan dan memotivasi karyawan untuk mencapai tujuan dan sasaran bisnis yang terbaik.</p>
                <p style="text-align: justify;">Keyakinan kami yang utama yaitu, Berkomitmen untuk Kualitas Terbaik, Dedikasi kepada Pelanggan, Berfokus pada Manusia, Mendukung Inovasi dan Memastikan Keselamatan & Kelestarian Lingkungan, memberikan arah kepada karyawan NPCT1 dalam berkomitmen memberikan pencapaian profesional.</p>
                <p style="text-align: justify;">NPCT1 menghargai partisipasi aktif dari karyawan dan semangat yang kuat dalam berkontribusi untuk kesuksesan perusahaan.</p>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-lg-4">
                        <div class="item">
                            <div class="team-img">
                                <img src="{{ asset('images/people3.png') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-lg-4">
                        <div class="item">
                            <div class="team-img">
                                <img src="{{ asset('images/tango.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-lg-4">
                        <div class="item">
                            <div class="team-img">
                                <img src="{{ asset('images/tango2.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection