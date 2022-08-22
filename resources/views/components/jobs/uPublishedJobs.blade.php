@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>NPCT1 Career</h1>
                <h6><a href="{{ url('/') }}">Home</a>  <i class="fas fa-angle-right"></i> People</h6>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
<section class="service-details">
    <div class="container">
        @if(count($objJobs) > 0)
            @php $x = 1 @endphp
            @for($i = 0; $i < count($objJobs); $i++)
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 c-job-list__item">
                        <div class="c-card">
                            <div class="c-card__body">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1 u-text-align__center--desktop">
                                        <p class="u-font-weight__bold mb-1 mb-md-0 u-fg--npct1">{{ $x }}</p>
                                    </div>
                                    <div class="col-lg-11 col-md-11 col-sm-11">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="row">
                                                    <div class="col-6 col-md-6 u-text-align__center--desktop mb-1 mb-md-0">
                                                        <p class="u-font-weight__bold mb-1 mb-md-0"><a href="{{ url($objJobs[$i]['job_uuid']) }}">{{ $objJobs[$i]['job_title'] }}</a> </p>
                                                    </div>
                                                    <div class="col-6 col-md-6 u-text-align__center--desktop mb-1 mb-md-0">
                                                        <p class="u-font-10--mb u-font-weight__bold mb-1 mb-md-0 u-fg--npct1">Closing Date</p>
                                                        <p>{{ $objJobs[$i]['job_expired'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 align-self-center">
                                                <div class="row">
                                                    <div class="col-6 col-md-6 u-text-align__center--desktop mb-1 mb-md-0">
                                                        <p class="u-font-10--mb u-font-weight__bold mb-md-0 u-fg--npct1">Job Category</p>
                                                        <p>{{ $objJobs[$i]['has_category']['category_name'] }}</p>
                                                    </div>
                                                    <div class="col-6 col-md-6 u-text-align__center--desktop mb-1 mb-md-0">
                                                        <p class="u-font-10--mb u-font-weight__bold mb-1 mb-md-0 u-fg--npct1">Location</p>
                                                        <p>{{ $objJobs[$i]['job_location'] }}</p>
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
                @php $x++ @endphp
            @endfor
        @else
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <p>Hi, at the moment there are no job vacancies information, please feel free to drop your resume on <b>recruitment@npct1.co.id</b> for future opportunities.</p>
            </div>
        </div>
        @endif
    </div>
</section>
@endsection