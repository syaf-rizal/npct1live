@extends('components.containers.appNoAuth')
@section('pageTitle', $title)
@section('content')
<div class="h-100">
    <div class="h-100 no-gutters row">
        <div class="d-none d-lg-block col-lg-8">
            <div class="slider-light">
                <div class="slick-slider">
                    <div>
                        <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-white" tabindex="-1">
                            <div>
                                <img src="{{ asset('images/index_picture_1.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-100 d-flex justify-content-center align-items-center col-md-12 col-lg-4 bg-white">
            <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                <h4 class="mb-0">
                    <span>Please sign in to your account.</span></h4>
                <div class="divider row"></div>
                <div>
                    <form action="{{ $action }}" method="post" id="frmAuthorization" name="frmAuthorization" autocomplete="off">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="email" class="">Email</label>
                                    <input name="email" id="email" placeholder="Your Email" type="text" class="form-control" wajib="yes">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="password" class="">Password</label>
                                    <input name="password" id="password" placeholder="Password ..." type="password" class="form-control" wajib="yes">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="position-relative form-group">
                                  {!! NoCaptcha::renderJs() !!}
                                  {!! NoCaptcha::display() !!}
                            </div>
                        </div>
                        <div class="divider row"></div>
                        <div class="form-group">
                            <div class="ml-auto">
                                <button class="btn btn-primary btn-lg"  id="{{ rand() }}" onclick="authVerify('#frmAuthorization', $(this)); return false;" style="border: 1px solid;">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection