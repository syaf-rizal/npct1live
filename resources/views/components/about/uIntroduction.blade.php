@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Who We Are</h1>
                <h6><a href="{{ url('/') }}">Home</a> <i class="fas fa-angle-right"></i> About <i class="fas fa-angle-right"></i> Who We Are</h6>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <p style="text-align: justify;">The Tanjung Priok Port in North Jakarta, which handles more than half of the total Indonesia volume, has become overloaded over the years. The development of New Priok will bring Jakarta's port facilities up to par with other world-class ports and provide new network connectivity opportunity to shipping lines. It will significantly strengthen Indonesia's logistics chain competitiveness and lead to a better trade environment.  PT New Priok Container Terminal One (NPCT1) is the first phase of New Priok Development and commenced its operation on 18 August 2016. The company is owned by the 4 (four) shareholders Pelindo II (IPC); Mitsui & Co., Ltd.; PSA International Pte Ltd; and Nippon Yusen Kabushiki Kaisha (NYK Line).</p>
                <p style="text-align: justify; margin-bottom: 20px;">Besides being the most modern terminal in Jakarta able to accommodate mega container ships plying across the oceans, NPCT1 is also responding actively to the Indonesian government's appeal to "Go Green" by introducing ERTGs and exploring a "cold ironing" facility to make it one of the most environmentally friendly entities in the container business. With its deep drafts, latest equipment, enhanced customs and quarantine system coupled with our commitment in excellence, intelligent planning and focused efforts, we aim to provide you with best-in-class port services at Tanjung Priok, Jakarta.</p>
                <h1>Mission</h1>
                <p style="text-align: justify; margin-bottom: 20px;">Provide best-in-class container terminal services to energize Indonesia's international trade and achieve its full growth potential by building successful partnerships with our customers and stakeholders.</p>
                <h1>Vision</h1>
                <p style="margin-bottom: 20px;">To be the leading gateway terminal operator in Indonesia.</p>
                <h1>Value</h1>
                <ul>
                    <li class="ml-13">Committed to Excellence</li>
                    <li class="ml-13">Dedicated to Customers</li>
                    <li class="ml-13">Focused on People</li>
                    <li class="ml-13">Embraced Innovation</li>
                    <li class="ml-13">Ensure Safety &amp; Environmental Sustainability</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection