@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $type }}</h1>
                <h6><a href="{{ url('/') }}">Home</a>  <i class="fas fa-angle-right"></i> {{ $type }}</h6>
            </div>
        </div>
    </div>
</section>
<section class="blog-grid" id="single-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="single-blog">
                    <h2><a href="{{ $objPost[0]['slug'] }}">{{ $objPost[0]['title'] }}</a></h2>
                    <p class="meta"><span class="date"><i class="far fa-calendar-alt"></i> {{ $objPost[0]['posted_at'] }}</span> </p>
                    <div class="blog-content">
                        {!! $objPost[0]['post_body'] !!}
                        @if($objPost[0]['slug'] == 'customer-announcement-port-authority-circular-letter-for-anticipation-of-formula-e-event-1654274768')
                        <div class="form-group">
                            <p><b>Lampiran</b></p>
                            <a href="/storage/circular/SE-Antisipasi-Kemacetan-Dampak-FE-TTE-03062022.pdf" target="_blank">Surat Edaran Otoritas Pelabuhan (OP) Mengenai Antisipasi Kemacetan Dampak Formula E</a>
                        </div>
                        @endif
                        @if($objPost[0]['post_type'] == 2)
                        <div class="position-relative form-group">
                            <a href="{{ url('bidding/' . $objPost[0]['slug'] ) }}" class="btn-wide mb-2 mr-2 btn-pill btn-transition btn btn-lg btn-outline-secondary">Submit Tender Bid Here</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection