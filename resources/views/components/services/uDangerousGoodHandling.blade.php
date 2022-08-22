@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Dangerous Goods (DG) Handling</h1>
                <h6><a href="{{ url('/') }}">Home</a> <i class="fas fa-angle-right"></i> Our Services </h6>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
<section class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 content">
                <h1>General Information</h1>
                <ol style="line-height: 2; margin-left: 20px;">
                    <li style="text-align: left;">Shipping lines / cargo owners are wholly responsible for any risks and claims that may occur if their containers, due to specific characteristics of the cargo damage or affect surrounding containers.</li>
                    <li style="text-align: left;">Additional cost at 200% of the handling and storage tariffs will be charged to shipping line/cargo owner in cases where containers do not match with the notification letters</li>
                </ol>
                <h1>Shipping Line</h1>
                <ol style="line-height: 2; margin-left: 20px;">
                    <li style="text-align: left;">Shipping lines with import activity are required to submit DG list, including UN and Class Number and MSDS (Material Safety Data Sheet), to the Operations, Yard Planning and HSSE Department, along with the submission of CVIA.</li>
                    <li style="text-align: left;">Shipping lines with import activity to ensure hardcopy of MSDS attached to the ISO Tank container tube.</li>
                    <li style="text-align: left;">Shipping lines with export activity are required to submit DG list, including UN, Class Number and MSDS (Material Safety Data Sheet) electronically to the Operations, Yard Planning and HSSE Department and COPARN for gate pass issuance process which should include valid UN and class number.</li>
                    <li style="text-align: left;">The handling of dangerous goods containers shall be set as follows :
                        <ol type="a" style="margin-left: 20px;">
                            <li>Import containers which have to be delivered directly, but could not be delivered directly until the Loading / Unloading activity has finished, shall be loaded back to the vessel and shifting cost for the activity mentioned above shall be the responsibility of shipping lines</li>
                            <li>Export containers stacked in the Terminal that have not been loaded on the vessel due to vessel delay or loading cancellation shall be subjected to additional costs as follows:
                                <ol style="margin-left: 15px; list-style-type:circle;">
                                    <li>IDR 444,000 per 20' container</li>
                                    <li>IDR 606,000 per 40' container</li>
                                </ol>
                            </li>
                        </ol>
                    </li>
                </ol>

                <h1>Cargo Owner</h1>
                <ol style="line-height: 2; margin-left: 20px;">
                    <li style="text-align: left;">Exporters shipping dangerous goods through the Terminal are required to attach Export Approval (NPE), which contains information on container number and cargo details, during application for Terminal Gate Pass.</li>
                    <li style="text-align: left;">In case gate pass issuance process are not supported by EDI then exporters shipping dangerous goods through the Terminal are required to submit Export Approval (NPE), which contains information on container number, cargo details and also to submit DG Declaration which mentioned valid container number, DG UN and Class number during application for Terminal Gate Pass.</li>
                    <li style="text-align: left;">Container carrying Dangerous Goods (DG) must be labeled clearly with IMDG stickers, UN Number and Proper Shipping Names at all corners of the container.</li>
                    <li style="text-align: left;">Maximum storage period in terminals for containers with dangerous goods (FCL, LCL or Transshipment) calculated based on Vessel Estimated Time of Berthing (ETB). The details are as follows:
                        <ol type="a" style="margin-left: 20px;">
                            <li>Import Containers contains of dangerous goods
                                <ol style="margin-left: 15px; list-style-type:circle;">
                                    <li>Class 1 and 7 Direct Driving/Truck Losing</li>
                                    <li>Class 2.1; 2.3; 5.1; 5.2; 6.1 Maximum 24 hours</li>
                                    <li>Class 2.2; 3; 4; 5; 6.2; 8; 9 Maximum 72 hours</li>
                                </ol>
                            </li>
                            <li>Export Containers contains of dangerous goods
                                <ol style="margin-left: 15px; list-style-type:circle;">
                                    <li>Class 1 and 7 Direct Driving/Truck Losing</li>
                                    <li>Class 2.1; 2.3; 5.1; 5.2; 6.1 Maximum 24 hours</li>
                                    <li>Class 2.2; 3; 4; 5; 6.2; 8; 9 Maximum 96 hours</li>
                                </ol>
                            </li>
                        </ol>
                    </li>
                    <li style="text-align: left;">The handling of dangerous goods containers shall be set as follows:
                        <ol type="a" style="margin-left: 20px;">
                            <li>Import containers stacked in the Terminal which have exceeded the maximum storage period will be relocated to an appointed Temporary Storage Depot (TPS) and all cost incurred shall be the responsibility of cargo owners.</li>
                            <li>If there is a delay due to Working / National Holiday, such Import container will be relocated after the holiday.</li>
                            <li>Containers without labels as set by the IMDG Code will be charged 200% additional cost of the handling and storages tariffs.</li>
                            <li>Containers which have more than 1 remark / label shall be categorized according to the highest remark / label level found on the containers.</li>
                        </ol>
                    </li>
                </ol>
                <div class="clearfix">&nbsp;</div>
                
            </div>
        </div>
    </div>
</section>
@endsection