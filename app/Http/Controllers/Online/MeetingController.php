<?php

namespace App\Http\Controllers\Online;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Ixudra\Curl\Facades\Curl;

class MeetingController extends Controller
{
    public function getMeetingAppointmentFromBooking($id)
    {
        $arrData['title'] = 'NPCT1 - Meeting Appointment Booking';
        $arrData['source'] = $id;
		$response = Curl::to('https://api.npct1.co.id:82/web/v1/kyc-form-client/'. $id)
			->asJson(true)
            ->get();
        $arrData['booking'] = $response['data'];
        return view('components.online.uMeetingAppointmentBooking', $arrData);
    }
}
