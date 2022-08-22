@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Contact</h1>
                <h6><a href="{{ url('/') }}">Home</a> <i class="fas fa-angle-right"></i> About Us <i class="fas fa-angle-right"></i> Contact</h6>
            </div>
        </div>
    </div>
</section>
<section class="contact-map">
    <h3 class="d-none">Home</h3>
 <div class="container-fluid">
     <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7934.530939976645!2d106.92304839553522!3d-6.094899881767714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a202bf6f8a5ef%3A0x7ff28c5789a24fb7!2sNew%20Priok%20Container%20Terminal%20One%20(NPCT1)!5e0!3m2!1sen!2sid!4v1579139441372!5m2!1sen!2sid" style="border:0;" allowfullscreen=""></iframe>
     </div>
 </div>
</section>
<section class="contact-form">
    <form action="{{ $action }}" name="fComment" id="fComment" method="post" autocomplete="off">
        <div class="container">
            <div class="row">
                <div class="col-md-12 contact-form-area">
                    <h1>Get in touch</h1>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-area">
                                <h4><img src="{{ asset('images/home.png') }}" alt="Image"> <span class="text">Jl. Terminal Kalibaru Raya</span><br>Kav.B No.1, Cilincing<br> <span style="margin-left: 50px;">Jakarta Utara</span><br><span style="margin-left: 50px;">Daerah Khusus Ibukota Jakarta</span><br><span style="margin-left: 50px;">14110, Indonesia</span></span></h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-area">
                                <h4><img src="{{ asset('images/call.png') }}" alt="Image"> <span class="text"> +62 21 29144888</span></h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-area">
                                <h4><img src="{{ asset('images/mail.png') }}" alt="Image"> <span class="text">commercial@npct1.co.id</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row form-area">
                        <div class="col-md-12">
                            <h1>Leave us a message</h1>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xm-12">
                            <div class="form-group">
                                <label>Full Name <span>*</span></label>
                                <input type="text" name="fullName" class="form-control" wajib="yes">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xm-12">
                            <div class="form-group">
                                <label>Email <span>*</span></label>
                                <input type="text" name="email" class="form-control" wajib="yes">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xm-12">
                            <div class="form-group">
                                <label>Contact Number <span>*</span></label>
                                <input type="text" name="phone" class="form-control" wajib="yes">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xm-12">
                            <div class="form-group">
                                <label>Company / Institution<span>*</span></label>
                                <input type="text" name="company" class="form-control" wajib="yes">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xm-12">
                            <div class="form-group">
                                <label>Vessel Name</label>
                                <input type="text" name="vessel" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xm-12">
                            <div class="form-group">
                                <label>Container Number</label>
                                <input type="text" name="container" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Write Comment <span>*</span></label>
                                <textarea name="comments" class="form-control" wajib="yes"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xm-12 text-center">
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                        </div>
                        <div class="col-md-6 col-sm-12 col-xm-12 text-center">
                            <button class="btn" id="{{ rand() }}" onclick="postRequest('fComment', $(this)); return false">send message</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection