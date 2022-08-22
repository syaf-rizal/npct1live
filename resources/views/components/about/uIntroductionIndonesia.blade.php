@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Profil Kami</h1>
                <h6><a href="{{ url('/') }}">Beranda</a> <i class="fas fa-angle-right"></i> Tentang Kami <i class="fas fa-angle-right"></i> Profil Kami</h6>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <p style="text-align: justify;">
                Pelabuhan Tanjung Priok di Jakarta Utara, yang menangani lebih dari setengah volume total Indonesia, telah mengalami kelebihan muatan selama bertahun-tahun. Pengembangan New Priok akan membawa fasilitas pelabuhan Jakarta setara dengan pelabuhan kelas dunia lainnya dan memberikan peluang konektivitas jaringan baru ke perusahaan pelayaran. Ini akan secara signifikan memperkuat daya saing rantai logistik Indonesia dan mengarah pada lingkungan perdagangan yang lebih baik.
                <font class="translated">PT New Priok Container Terminal One (NPCT1)</font> merupakan pengembangan New Priok tahap pertama dan mulai beroperasi pada 18 Agustus 2016. Perusahaan ini dimiliki oleh 4 (empat) pemegang saham Pelindo II (IPC); Mitsui & Co., Ltd.; PSA International Pte Ltd; dan Nippon Yusen Kabushiki Kaisha (NYK Line).
                </p>
                <p style="text-align: justify; margin-bottom: 20px;">Selain menjadi terminal paling modern di Jakarta yang mampu menangani kapal mega Peti Kemas yang melintasi samudera, NPCT1 juga secara aktif menanggapi imbauan pemerintah Indonesia untuk menerapkan
                <font class="translated">"Go Green"</font> dengan menggunakan
                <font class="translated">ERTG</font> dan menjajaki fasilitas
                <font class="translated">"cold ironing"</font> sehingga menjadikannya sebagai salah satu entitas paling ramah lingkungan dalam bisnis Peti Kemas. Dengan kedalaman
                <font class="translated">draft</font>, peralatan terbaru, sistem bea cukai dan karantina yang mutakhir ditambah dengan komitmen kami dalam kualitas, perencanaan cerdas dan upaya yang terfokus, kami bertujuan untuk memberikan Anda pelayanan pelabuhan terbaik di Tanjung Priok, Jakarta.</p>
                <h1>Misi</h1>
                <p style="text-align: justify; margin-bottom: 20px;">Menyediakan layanan terminal Peti Kemas terbaik di kelasnya untuk menggerakkan perdagangan internasional Indonesia dan mencapai potensi pertumbuhan maksimal dengan membangun kemitraan yang sukses dengan pelanggan dan pemangku kepentingan kami.</p>
                <h1>Visi</h1>
                <p style="margin-bottom: 20px;">Menjadi operator <font class="translated">terminal gateway</font> terdepan di Indonesia.</p>
                <h1>Nilai</h1>
                <ul>
                    <li class="ml-13">Berkomitmen untuk kualitas yang terbaik</li>
                    <li class="ml-13">Dedikasi kepada Pelanggan</li>
                    <li class="ml-13">Berfokus pada Manusia</li>
                    <li class="ml-13">Mendukung Inovasi</li>
                    <li class="ml-13">Memastikan Keselamatan &amp; Kelestarian Lingkungan</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection