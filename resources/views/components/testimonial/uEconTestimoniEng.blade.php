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
        <h2>What <b>our customers</b> are saying</h2>
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
                        <p>Very easy platform to use compare with other terminal. NICE!</p>
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
                        <p>ECON eases our ops team mobility in creating gate pass for import and export, and printing the invoice. In this pandemic situation, ECON truly helps a lot and safe. Current ECON web-based system is easy to use and user friendly even for the first time experience of transaction processing through ECON</p>
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
                        <p>In my opinion, ECON is the apps that the use is easy to understand for young and old people not like the apps in other terminals</p>
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
                        <p>ECON services from NPCT1 is SO COOLzzz!!! A system like this is deserved and needs to be followed. Export or import gate pass and invoice creation are become so easy, easy from the easiest. Thanks ECON Team</p>
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
                        <p>ECON is really helping us as PPJK either on faster gate pass creation or easier payment process. For example, in the past it took 1 hour to create export or import gate pass not including travel time for manual process, with ECON it takes 5 mins only to proceed export or import gate pass. And one more thing, if we have issue (Trouble Slip), NPCT1 billing team always calls and guides us what to do. KEEP IT UP, ECON! Thank you NPCT1!</p>
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