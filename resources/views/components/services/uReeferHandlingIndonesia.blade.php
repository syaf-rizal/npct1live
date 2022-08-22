@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Penanganan Reefer</h1>
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
                <h1>Penanganan Reefer</h1>
                <p style="text-align: justify;">
                <font class="translated">Platform Reefer NPCT1</font> memiliki 198 ground slot yang mampu menangani sekitar 990 Peti Kemas
                <font class="translated">Reefer</font>.
                Karakteristik penanganan <font class="translated">Reefer</font> NPCT1 adalah sebagai berikut:
                </p>
                <ul>
                    <li>Layanan 24 Jam dikelola oleh teknisi yang kompeten dan terlatih.</li>
                    <li>Ketersediaan suku cadang yang tinggi untuk respons yang cepat terhadap kegagalan fungsi.</li>
                    <li><font class="translated">Platform Reefer</font> NPCT1 memberikan infrastruktur yang baik dalam penataan kabel listrik dan juga memungkinkan pengoperasian
                    <font class="translated">plug-in</font> dan
                    <font class="translated">plug-out</font> dengan akses yang mudah ke Peti Kemas Reefer yang memerlukan penanganan segera.</li>
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