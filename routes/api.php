<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v3'], function(){
    Route::get('get-announcement-active', 'Services\ServiceController@getAnnouncementActive');
});
Route::group(['prefix' => 'v4'], function(){
    Route::post('wht23-number-qr', 'Services\ServiceController@setWhtFile');
});