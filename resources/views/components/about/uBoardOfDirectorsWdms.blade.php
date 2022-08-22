@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Board Of Directors</h1>
                <h6><a href="{{ url('/') }}">Home</a>  <i class="fas fa-angle-right"></i> Board Of Directors</h6>
            </div>
        </div>
    </div>
</section>
<section class="team" id="teaml">
    <div class="container">
        <div class="row">
                @if(count($arrBod) > 0)
                    @for($i = 0; $i < count($arrBod); $i++)
                        <div class="col-lg-2 col-md-2 col-sm-2" style="margin-right: 35px !important;">
                            <div class="item item-bod">
                                <div class="team-img">
                                    <img src="{{ Storage::url("images/" . $arrBod[$i]['photo']) }}" alt="{{ $arrBod[$i]['name'] }}" >
                                </div>
                                <div class="info">
                                    <h4><a href="{{ url($arrBod[$i]['slug']) }}">{{ $arrBod[$i]['name'] }}</a></h4>
                                    <p>{{ $arrBod[$i]['title'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endfor
                @endif
            </div>
        </div>
    </div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
    <div id="{{ rand() }}">&nbsp;</div>
</section>
@endsection