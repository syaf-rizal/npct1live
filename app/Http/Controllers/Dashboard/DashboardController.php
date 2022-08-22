<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getDefaultPage()
    {
        $arrData = [
            'title' => 'Console Web - New Priok Container Terminal One'
        ];
        return view('components.dashboard.uDefaultDashboard', $arrData);
    }
}
