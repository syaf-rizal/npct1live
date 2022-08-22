@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Philosophy</h1>
                <h6><a href="{{ url('/') }}">Home</a> <i class="fas fa-angle-right"></i> People</h6>
            </div>
        </div>
    </div>
</section>
<section class="team" id="teaml">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 content">
                <h1>Our People Philosophy</h1>
                <p style="text-align: justify;">NPCT1 develops and motivates its employees to the excellence in achieving the business objectives and goals.</p>
                <p style="text-align: justify;">Our core beliefs i.e., Committed to Excellence, Dedicated to Customer, Focused on People, Embraced Innovation and Ensure Safety & Environment Suitability guides NPCT1 employees taking ownership of professional accomplishments.</p>
                <p style="text-align: justify;">NPCT1 recognizes its employees' active participation and contributions with strong passion to the success of the company.</p>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-lg-4">
                        <div class="item">
                            <div class="team-img">
                                <img src="{{ asset('images/people3.png') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-lg-4">
                        <div class="item">
                            <div class="team-img">
                                <img src="{{ asset('images/tango.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-lg-4">
                        <div class="item">
                            <div class="team-img">
                                <img src="{{ asset('images/tango2.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection