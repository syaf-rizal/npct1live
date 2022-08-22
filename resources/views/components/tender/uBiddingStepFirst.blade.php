@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Submit Bidding Tender</h1>
                <h6><a href="{{ url('/') }}">Home</a>  <i class="fas fa-angle-right"></i> {{ $objPost['title'] }}</h6>
            </div>
        </div>
    </div>
</section>

<section class="schedule schedule-not-margin-top">
    <div style="width: 50%; margin:0px auto; z-index: 999; position: relative;">
        <form action="{{ $actionBidding }}" name="fProposedBidding" id="fProposedBidding" method="post" autocomplete="off">
            <input type="hidden" name="sluger" value="{{ $objPost['slug'] }}" readonly>
            <div class="row">
                <div class="col-md-12">
                    <nav>
                        <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active nav-one" id="shipment-tab" data-toggle="tab" href="#tracking" role="tab" aria-controls="tracking" aria-selected="true"><img src="{{ asset('images/urban-property.png') }}" alt="Container Tracking" style="width: 48px; height:48px;"><br>Company Information</a>
                            <a class="nav-item nav-link nav-five" id="schedule-tab" data-toggle="tab" href="#schedule" role="tab" aria-controls="schedule" aria-selected="false"><img src="{{ asset('images/warranty.png') }}" alt="Vessel Schedule" style="width: 48px; height:48px;"><br>Required Documents</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent1">
                        <div class="tab-pane fade show active" id="tracking" role="tabpanel" aria-labelledby="tracking-tab">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label>Company Name *</label>
                                        <input type="text" name="companyName" class="form-control text-uppercase" wajib="yes">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label>PIC Name *</label>
                                        <input type="text" name="picName" class="form-control text-uppercase" wajib="yes">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label>Email Correspondence *</label>
                                        <input type="text" name="emailCorrespondence" class="form-control text-uppercase" wajib="yes">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label>Phone Number *</label>
                                        <input type="text" name="phoneNumber" class="form-control text-uppercase" wajib="yes">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label>NPWP *</label>
                                        <h5 class="no-margin overflow-ellipsis bold w-border-b fetch-row pt-10 pb-10"></h5>
                                        <input type="file" class="form-control chdn-upload" id="taxId" maxsize="1024" allowext="jpeg|jpg|pdf" routing="{{ url('uploads ')}}" doc="NPWP">
                                        <input type="hidden" id="taxIdDoc">
                                        <span class="small">Maxsize 1024 Kb</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label>SIUP *</label>
                                        <h5 class="no-margin overflow-ellipsis bold w-border-b fetch-row pt-10 pb-10"></h5>
                                        <input type="file" class="form-control chdn-upload" id="siup" maxsize="3072" allowext="pdf" routing="{{ url('uploads ')}}" doc="SIUP">
                                        <input type="hidden" id="siupDoc">
                                        <span class="small">Maxsize 3 Mb</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label>Company Profile</label>
                                        <h5 class="no-margin overflow-ellipsis bold w-border-b fetch-row pt-10 pb-10"></h5>
                                        <input type="file" class="form-control chdn-upload" id="cprofile" maxsize="3072" allowext="pdf" routing="{{ url('uploads ')}}" doc="Company Profile">
                                        <input type="hidden" id="profileDoc">
                                        <span class="small">Maxsize 3 Mb</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label>Deed Establishment *</label>
                                        <h5 class="no-margin overflow-ellipsis bold w-border-b fetch-row pt-10 pb-10"></h5>
                                        <input type="file" class="form-control chdn-upload" id="deedEst" maxsize="3072" allowext="pdf" routing="{{ url('uploads ')}}" doc="Deed Establishment">
                                        <input type="hidden" id="deedEstDoc">
                                        <span class="small">Maxsize 3 Mb</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label>Deed Change</label>
                                        <h5 class="no-margin overflow-ellipsis bold w-border-b fetch-row pt-10 pb-10"></h5>
                                        <input type="file" class="form-control chdn-upload" id="deedChange" maxsize="1024" allowext="pdf" routing="{{ url('uploads ')}}" doc="Deed Change">
                                        <input type="hidden" id="deedChangeDoc">
                                        <span class="small">Maxsize 1024 Kb</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label>Deed Change</label>
                                        <h5 class="no-margin overflow-ellipsis bold w-border-b fetch-row pt-10 pb-10"></h5>
                                        <input type="file" class="form-control chdn-upload" id="deedChanges" maxsize="1024" allowext="pdf" routing="{{ url('uploads ')}}" doc="Deed Change">
                                        <input type="hidden" id="deedChangesDoc">
                                        <span class="small">Maxsize 1024 Kb</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pb-10 pt-10">&nbsp;</div>
            <div class="row">
                <div class="col-md-8 col-sm-8 col-lg-8">
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}
                </div>
                <div class="col-md-4">
                    <button class="btn btn-danger" id="{{ rand() }}" onclick="postRequest('fProposedBidding', $(this)); return false">Submit Bidding</button>
                </div>
            </div>
        </form>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
@endsection