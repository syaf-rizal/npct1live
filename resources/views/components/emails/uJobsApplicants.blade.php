@extends('beautymail::templates.ark')
@section('content')
    @include('beautymail::templates.ark.contentStart')
    <div style="padding: 3px; font-family: font-size: 14px; line-height: 1.43; font-family: \'Helvetica Neue\', \'Segoe UI\', Helvetica, Arial, sans-serif;">
        <div style="max-width: 700px; margin: 0px auto; background-color: #fff; box-shadow: 0px 20px 20px rgba(0,0,0,0.05); border:1px solid rgba(0,0,0,0.1);">
            <div style="padding: 60px 70px; border-top: 1px solid rgba(0,0,0,0.05);">
                <h4 style="margin-top: 0px; font-weight: 800;">Dear Recruiter Team,</h4>
                <div style="font-size: 14px; text-align: justify;">Please kindly find applicants for your perusal</div>
                <div style="height: 3px;">&nbsp;</div>
                <table style="font-size: 14px;">
                    <tr>
                        <td>Full Name</td><td>:</td><td>{{ $attribute['applicants']['name'] }}</td>
                    </tr>
                    <tr>
                        <td>Email</td><td>:</td><td>{{ $attribute['applicants']['email'] }}</td>
                    </tr>
                    <tr>
                        <td>Phone Number</td><td>:</td><td>{{ $attribute['applicants']['phone'] }}</td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Current Company</td><td>:</td><td>{{ $attribute['applicants']['company'] }}</td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;">Additional Information</td><td>:</td><td>{{ $attribute['applicants']['additional'] }}</td>
                    </tr>
                </table>
                <div style="height: 20px;">&nbsp;</div>
                <div style="font-size: 14px; text-align: justify; margin-bottom: 10px; margin-top: 10px;">This is an automated message - please do not reply directly to this email</div>
                <div style="font-size: 14px;">Regards,</div>
                <div style="font-size: 14px;">Website NPCT1</div>
            </div>
        </div>
    </div>
    @include('beautymail::templates.ark.contentEnd')
@stop
