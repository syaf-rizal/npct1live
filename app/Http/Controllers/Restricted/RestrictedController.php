<?php

namespace App\Http\Controllers\Restricted;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Validator;

class RestrictedController extends Controller
{
    public function getRestrictedPage()
    {
        $arrData = [
            'action' => url('/authorization/callBackRestricted'),
            'title' => 'Restricted Area - Authentication Needed'
        ];
        return view('components.restricted.uRestricted', $arrData);
    }

    public function setCallBackRestricted(Request $request)
    {
        $validatorCaptcha = Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|captcha'
        ], [
            'g-recaptcha-response.required' => 'Recaptcha is required'
        ]);

        if($validatorCaptcha->fails())
        {
             return response()->json([
                 'status' => 404,
                 'error' => $validatorCaptcha->errors()
             ]);
        }

        $validator = $request->validate([
            'email' => 'required',
            'password' => 'required|min:8'
        ]);

        if(Auth::attempt($validator))
        {
            return response()->json([
                'status' => 200,
                'message' => '',
                'redirect' => url('/console/dashboard')
            ]);
        }
        else
        {
            return response()->json([
                'status' => 404,
                'error' => 'Authentication failed ...'
            ]);

        }
    }

    public function setFlushSession()
    {
        Session::flush();
        Auth::logout();
        return redirect('/kalibaru-disini');
    }
}
