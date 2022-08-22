@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Operasi Kapal / Kapal</h1>
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
                <h1>Operasi Kapal / Kapal</h1>
                <ul>
                    <li>Pemuatan: Kegiatan memindahkan Peti Kemas dari Truk ke kapal dengan menggunakan
                        <font class="translated">QC (Quay Crane)</font>
                    </li>
                    <li>Pembongkaran: Aktivitas pemindahan Peti Kemas dari Kapal ke Truk dengan menggunakan
                        <font class="translated">QC (Quay Crane)</font>
                    </li>
                </ul>
                <div class="con-handling-div-img">
                    <img src="{{ asset('images/drone-day-3-card-2-0050.jpg') }}">
                </div>
                <div class="con-handling-div-img">
                    <img src="{{ asset('images/vessel-768x512.jpg') }}">
                </div>
                <h1>Operasional Lapangan Penumpukan</h1>
                <ul>
                    <li>
                        <font class="translated">Off-loading:</font> Kegiatan menempatkan Peti Kemas di Lapangan Penumpukan Peti Kemas dari Truk untuk dimuat ke kapal (Peti Kemas Ekspor) atau dikirim ke pemilik muatan (Peti Kemas Impor) dengan menggunakan
                        <font class="translated">RTG (Rubber Tyre Gantry)</font> dan Truk (Internal/Eksternal)</li>
                    <li><font class="translated">Mounting:</font> Kegiatan menempatkan Peti Kemas di atas Truk (Internal/Eksternal) dari Lapangan Penumpukan untuk memindahkan Peti Kemas ke Kapal (Ekspor) atau mengirimkan Peti Kemas ke Pemilik Muatan (Impor)</li>
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

                <h1>Operasional Pintu Gerbang (Gate)</h1>
                <ul>
                    <li>
                    <font class="translated">Gate In:</font> Proses truk (Eksternal) masuk ke terminal untuk menerima Peti Kemas (Impor) atau mengirim Peti Kemas (Ekspor) ke Terminal. Pintu gerbang tersebut akan memberikan
                    <font class="translated">CMS (Container Movement Slip)</font>
                        dengan menyediakan informasi lokasi dimana Peti Kemas harus ditempatkan atau dibawa</li>
                    <li>
                    <font class="translated">Gate Out:</font>
                    Proses keluarnya truk (Eksternal) dari terminal setelah Peti Kemas ditempatkan di Lapangan penumpukan (Ekspor) atau Peti Kemas yang diambil dari Lapangan penumpukan  (Impor). Pintu gerbang akan memberikan
                    <font class="translated">EIR (Equipment Interchange Receipt)</font> sebagai bukti slip aktivitas (penempatan atau pengambilan) Peti Kemas di/dari Lapangan penumpukan</li>
                </ul>
                <div class="con-handling-div-img">
                    <img src="{{ asset('images/gateIn.jpg') }}">
                </div>
                <div class="con-handling-div-img">
                    <img src="{{ asset('images/gateOut.jpg') }}">
                </div>
                <h1>Arus keseluruhan adalah sebagai berikut</h1>
                <div class="con-handling-div-img">
                    <img src="{{ asset('images/Ops-flowNew.png') }}">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection