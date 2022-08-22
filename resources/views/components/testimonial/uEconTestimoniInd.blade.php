@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<style>
  h2 {
	color: #000;
	font-size: 26px;
	font-weight: 300;
	text-align: center;
	text-transform: uppercase;
	position: relative;
	margin: 30px 0 70px;
}
h2::after {
	content: "";
	width: 100px;
	position: absolute;
	margin: 0 auto;
	height: 4px;
	border-radius: 1px;
	background: #1c47e3;
	left: 0;
	right: 0;
	bottom: -20px;
}
.carousel .carousel-item {
	overflow: hidden;
	min-height: 120px;
	font-size: 13px;
}
.carousel .media img {
	width: 80px;
	height: 80px;
	display: block;
	border-radius: 50%;
}
.carousel .testimonials {
	padding: 0 15px 0 60px ;
	position: relative;
}
.carousel .testimonials::before {
	content: "\201C";
	font-family: Arial,sans-serif;
	color: #e2e2e2;
	font-weight: bold;
	font-size: 68px;
	line-height: 54px;
	position: absolute;
	left: 15px;
	top: 0;
}
.carousel .overview b {
	text-transform: uppercase;
	color: #1c47e3;
}
.carousel .carousel-indicators {
	bottom: -40px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 20px;
	height: 20px;
	border-radius: 50%;
	margin: 1px 3px;
	box-sizing: border-box;
}
.carousel-indicators li {	
	background: #e2e2e2;
	border: 4px solid #fff;
}
.carousel-indicators li.active {
	color: #fff;
	background: #1c47e3;    
	border: 5px double;    
}
</style>
<section class="page-header">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1>Testimonial</h1>
            <h6><a href="{{ url('/') }}">Home</a>  <i class="fas fa-angle-right"></i> ECON Testimonial</h6>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2>Apa <b>kata pelanggan</b> kami</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom: 100px;">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
          </ol>   
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-sm-12">
                  <div class="media">
                    <div class="media-body">
                      <div class="testimonials">
                        <p>SANGAT MUDAH DI GUNAKAN KETIMBANG PELABUHAN LAIN, TOP DAH</p>
                        <p class="overview"><b>Adit</b>, Operational Staff at Iron Bird</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>			
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-sm-12">
                  <div class="media">
                    <div class="media-body">
                      <div class="testimonials">
                        <p>Econ sangat memudahkan mobilitas team lapangan kami dalam melakukan proses pencetakan gate pass baik import ataupun export, dan pencetakan invoice, di masa pandemik ini peran ECON benar-benar sangat membantu dan aman. web aplikasi yang sekarang ada sangat mudah pengaplikasiannya sekalipun baru pertama kali melakukan proses pencetakan melalui ECON</p>
                        <p class="overview"><b>Amarullah Bahar</b>, Staff Order Monitoring Export/Import at Puninar Jaya</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>			
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-sm-12">
                  <div class="media">
                    <div class="media-body">
                      <div class="testimonials">
                        <p>ECON menurut saya aplikasi yang sangat mudah di fahami,oleh yang tua/muda tidak seperti aplikasi pelabuhan lain nya</p>
                        <p class="overview"><b>Fatoni</b>, Operational Staff at Fajar Insan Nusantara</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>			
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-sm-12">
                  <div class="media">
                    <div class="media-body">
                      <div class="testimonials">
                        <p>Kerenss bingits buat service dari Express Container Online NPCT. System seperti ini nih yang patut dan perlu di contoh. Untuk proses penerbitan gate pass Import / Export dan invoice, semua jadi mudah semudah dari yang paling mudah. Thx ECON team</p>
                        <p class="overview"><b>Heru Pratomo</b>, Operational at Bahtera Satria Adhidaya Trans</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>			
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-sm-12">
                  <div class="media">
                    <div class="media-body">
                      <div class="testimonials">
                        <p>Dengan adanya ECON kami sebagai pengguna jasa kepabeanan sangat terbantu sekali baik itu mempercepat GATEPASS expor impor maupun mempermudah Dalam hal pembayaran ,,salah satu contoh sebelumnya proses Expor/IMPORT GATEPASS harus makan waktu min1 jam blm termasuk perjalanan ,dengan ada nya ECON kita Hanya cukup 5 menit untuk proses GATEPASS EXPOR/IMPORT,,,Dan Satu lagi Ketika kami ada masalah pada saat itu/troubleslip,pihak Billing NPCT selalu menelopin kami untuk mengarahkan apa yang seharusnya ,,,TINGKATKAN TERUS SYSTEM ECON,Trimakasih NPCT</p>
                        <p class="overview"><b>Moh. Rosadi</b>, Export Import OPS at Tungya Perkasa FF</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>			
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
</section>
@endsection