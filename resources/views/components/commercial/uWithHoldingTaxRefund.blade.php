@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Withholding Tax Refund</h1>
                <h6><a href="{{ url('/') }}">Home</a> <i class="fas fa-angle-right"></i> Commercial <i class="fas fa-angle-right"></i> Finance </h6>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">&nbsp;</div>
<section class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 content">
                <h1>Withholding Tax Refund</h1>
                <p>In relation to the Minister of Finance Republic of Indonesia Regulation No. 141/PMK.03/2015, NPCT1 will refund the tax that is already paid with mechanism as follow:</p>
                <ul>
                    <li>For invoice issued within 1 (one) month calendar, the refund can only be requested from 21<sup>st</sup> until 31<sup>st</sup> on the next month, and the payment will be made on 25<sup>th</sup> of the following month in condition that the verified Withholding Tax Slip is correct and complete.</li>
                    <li>The validity period of withholding tax refund is 2 (two) months since the issuance of Withholding Tax Slip.</li>
                    <li>Refund Request Letter (attached) should be applied by the Company that the name is stated in the Invoice, by enclosing documents as follow:
                        <ul style="margin-left: 20px;">
                            <li>Copy of NPWP and Registered Certificate</li>
                            <li>Copy of Statement Letter from Official who signs the Withholding Tax Slip.</li>
                            <li>Copy of Invoice related to the Withholding Tax Slip that the refund will be made for verification</li>
                            <li>The Original WHT slip Article 23 - 1 (one) WHT slip is made for all invoices in the respective tax period. The type of Income written on WHT slip should be "Port Services" at refers to PMK 141 point 6.d Other Service.</li>
                            <li>Bank Account of the Withholding Tax Refund Beneficiary. In case that the Beneficiary is not the Requester, then the original of Refund Request Letter should be sticked with the appropriate stamp duty according to regulation.</li>
                        </ul>
                    </li>
                </ul>
                <!--<p>Attachment:</p>
                <h1><a href="{{ url('content/Softcopy-Surat-Permohonan-Pengembalian-PPh-23.docx') }}">Download SOP Dangerous Goods (DG) Handling</a></h1>
                -->
            </div>
        </div>
    </div>
</section>
@endsection