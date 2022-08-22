<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Banner\BannerController;
// use App\Http\Controllers\Bod\BodController;
// use App\Http\Controllers\Dashboard\DashboardController;
// use App\Http\Controllers\Home\HomeController;
// use App\Http\Controllers\JobSeeker\JobSeekerController;
// use App\Http\Controllers\Jobs\JobsController;
// use App\Http\Controllers\News\NewsController;
// use App\Http\Controllers\Online\OnlineController;
// use App\Http\Controllers\Restricted\RestrictedController;
// use App\Http\Controllers\Services\HomeController;
// use App\Http\Controllers\Slug\HomeController;
// use App\Http\Controllers\Tender\HomeController;
// use App\Http\Controllers\Uploads\HomeController;
// use App\Http\Controllers\Users\HomeController;
// use App\Http\Controllers\Vcard\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


use App\Models\Segment;
Route::get('/', 'Home\HomeController@getHomePage');
// Route::get('/', [HomeController::class, 'getHomePage']);

Route::get('/{slug}', function($slug){
    $handling = Segment::select('handle_controller', 'handle_action')->where('uri_slug', $slug)->firstOrFail();
    return App::make($handling->handle_controller)->callAction($handling->handle_action, array($slug));
});
Route::get('bidding/{id}', 'Tender\TenderController@getBiddingTenderFromSlug')->name('tender.bidding');
Route::post('uploads', 'Uploads\UploadsController@getUploadPlugAndPlay')->name('uploads.plug.and.play');
Route::post('bidding-propose', 'Tender\TenderController@setPropsedTenderBidding')->name('tender.bidding.proposed');
Route::get('apply-jobs/{id}', 'JobSeeker\JobSeekerController@getApplyJobsFromSlug')->name('jobs.seeker.apply');
Route::post('applying-jobs', 'JobSeeker\JobSeekerController@setApplyJobSeeker')->name('jobs.seeker.submited');
Route::post('announcement', 'Slug\SlugController@setAnnouncementWSluger')->name('announcement.reminder');
Route::get('vcard/{id}', 'Vcard\VcardController@getVCardAttribute')->name('vcard');
/**
 * Routing online service
 */
Route::group(['prefix' => 'req'], function(){
    Route::post('container', 'Online\OnlineController@getOnlineServiceContainerFromHome')->name('online.services.search.container');
    Route::post('eir', 'Online\OnlineController@getOnlineServiceEirFromHome')->name('online.services.search.eir');
    Route::post('vgm', 'Online\OnlineController@getOnlineServiceVgmFromHome')->name('online.services.search.vgm');
    Route::post('vessel', 'Online\OnlineController@getOnlineServiceVesselFromHome')->name('online.services.vessel.schedule');
    Route::post('tarrif-simulation-new', 'Online\OnlineController@getTariffSimulationFromServiceNew')->name('online.services.tarrif.simulation');
    Route::post('contact-us', 'Online\OnlineController@setMessageMe')->name('online.contact.us');
});
Route::group(['prefix' => 'download'], function(){
    Route::get('eir/{id}', 'Online\OnlineController@getDownloadEirByRequest')->name('download.eir');
});
/**
 * End routing online service
 */

/**
 * Redirect routing online service
 */
Route::get('container/{id}', 'Online\OnlineController@getRestOnlineServiceContainer')->name('online.service.rest.container');
Route::get('eir/{id}', 'Online\OnlineController@getRestOnlineServiceEir')->name('online.service.eir.container');
Route::get('vgm/{id}', 'Online\OnlineController@getRestOnlineServiceVgm')->name('online.service.vgm.container');
Route::get('vessel/{id}', 'Online\OnlineController@getRestOnlineServiceVesselSchedule')->name('online.service.vessel.schedule');
Route::get('meeting/{id}', 'Online\MeetingController@getMeetingAppointmentFromBooking')->name('online.meeting.appointment.booking');
Route::get('whistleblowing', 'Online\OnlineController@getWhistleblowing')->name('online.service.whistleblowing');
Route::post('emailWhistle', 'Online\OnlineController@setEmailWhistle')->name('online.service.email');
Route::get('getEmail', 'Online\OnlineController@getEmailWhistle')->name('online.service.email');
Route::post('/upload', 'Online\OnlineController@uploadSubmit')->name('online.service.upload');
/**
 * End redirect routing online service
 */

Route::group(['prefix' => 'authorization'], function() {
    Route::get('kalibaru-disini', 'Restricted\RestrictedController@getRestrictedPage')->name('restricted');
    Route::post('callBackRestricted', 'Restricted\RestrictedController@setCallBackRestricted');
});

// Auth::routes();

Route::group(['prefix' => 'console'], function(){
    Route::get('dashboard', ['middleware' => 'auth', 'uses' => 'Dashboard\DashboardController@getDefaultPage'])->name('dashboard');
    /**
     * News
     */
    Route::get('news', ['middleware' => 'auth', 'uses' => 'News\NewsController@getListNews'])->name('console.news');
    Route::post('news', ['middleware' => 'auth', 'uses' => 'News\NewsController@getListNews'])->name('console.post.news');
    Route::get('news-new', ['middleware' => 'auth', 'uses' => 'News\NewsController@getDefaultNews'])->name('console.news');
    Route::post('news-add', ['middleware' => 'auth', 'uses' => 'News\NewsController@setCallBackCreateNews'])->name('console.news.post');
    Route::get('post/{id}', ['middleware' => 'auth', 'uses' => 'News\NewsController@getPublishedNews'])->name('console.news.published');
    Route::get('news-edit/{id}', ['middleware' => 'auth', 'uses' => 'News\NewsController@getEditNews'])->name('console.news.edit');
    Route::post('news-edit', ['middleware' => 'auth', 'uses' => 'News\NewsController@setEditNews'])->name('console.news.edit.post');
    /** End News */
    /** Banner */
    Route::get('banner', ['middleware' => 'auth', 'uses' => 'Banner\BannerController@getDefaultBanner'])->name('console.banner');
    Route::get('list-banner', ['middleware' => 'auth', 'uses' => 'Banner\BannerController@getListBanner'])->name('console.list.banner');
    Route::post('banner-add', ['middleware' => 'auth', 'uses' => 'Banner\BannerController@setCallBackCreateBanner'])->name('console.banner.post');
    Route::get('banner-edit/{id}', ['middleware' => 'auth', 'uses' => 'Banner\BannerController@getEditBanner'])->name('console.banner.edit');
    Route::post('banner-edit', ['middleware' => 'auth', 'uses' => 'Banner\BannerController@setEditBanner'])->name('console.banner.set.edit');
    Route::get('thumbs/{id}', ['middleware' => 'auth', 'uses' => 'Banner\BannerController@getThumbsForBanner'])->name('console.banner.thumbs');
    Route::post('thumbs-add', ['middleware' => 'auth', 'uses' => 'Banner\BannerController@setCallBackCreateThumbnailsFromBanner'])->name('console.banner.post');
    /** End Banner */
    /** BOD */
    Route::get('board-of-directors', ['middleware' => 'auth', 'uses' => 'Bod\BodController@getListBoardOfDirectors'])->name('console.list.board.of.directors');
    Route::post('board-of-directors', ['middleware' => 'auth', 'uses' => 'Bod\BodController@getListBoardOfDirectors'])->name('console.list.board.of.directors');
    Route::get('board-of-directors-new', ['middleware' => 'auth', 'uses' => 'Bod\BodController@getNewBoardOfDirectors'])->name('console.board.of.directors');
    Route::get('board-of-directors-details/{slug}', ['middleware' => 'auth', 'uses' => 'Bod\BodController@getDetailBoardOfDirectors'])->name('console.board.of.directors.details');
    Route::post('board-of-directors-add', ['middleware' => 'auth', 'uses' => 'Bod\BodController@setNewBoardOfDirectors'])->name('console.board.of.directors.post');
    Route::get('board-of-directors-edit/{id}', ['middleware' => 'auth', 'uses' => 'Bod\BodController@getEditBoardOfDirectors'])->name('console.edit.board.of.directors');
    Route::post('board-of-directors-edit', ['middleware' => 'auth', 'uses' => 'Bod\BodController@setEditBoardOfDirectors'])->name('console.edit.board.of.directors');
    /** End BOD */
    /** Users */
    Route::get('users', ['middleware' => 'auth', 'uses' => 'Users\UsersController@getDefaultUserProfile'])->name('console.list.user');
    Route::post('users', ['middleware' => 'auth', 'uses' => 'Users\UsersController@getDefaultUserProfile'])->name('console.list.user');
    Route::get('users-new', ['middleware' => 'auth', 'uses' => 'Users\UsersController@getNewUsers'])->name('console.new.user');
    Route::post('users-add', ['middleware' => 'auth', 'uses' => 'Users\UsersController@setNewUserWithNotifEmail'])->name('console.new.user.add');
    /** End Users */
    /** Jobs */
    Route::get('npct1-career', ['middleware' => 'auth', 'uses' => 'Jobs\JobsController@getListJobPublishing'])->name('console.jobs.publishing');
    Route::post('npct1-career', ['middleware' => 'auth', 'uses' => 'Jobs\JobsController@getListJobPublishing'])->name('console.jobs.publishing');
    Route::get('npct1-career-new', ['middleware' => 'auth', 'uses' => 'Jobs\JobsController@getNewJobPublishing'])->name('console.jobs.publishing');
    Route::post('npct1-career-add', ['middleware' => 'auth', 'uses' => 'Jobs\JobsController@setNewJobOpportunity'])->name('console.jobs.publishing.add');
    Route::get('npct1-career-detail/{id}', ['middleware' => 'auth', 'uses' => 'Jobs\JobsController@getDetailJobOpportunity'])->name('console.jobs.publishing');
    Route::get('npct1-career-edit/{id}', ['middleware' => 'auth', 'uses' => 'Jobs\JobsController@getEditJobPublishing'])->name('console.jobs.edit.publishing');
    Route::post('npct1-career-edit', ['middleware' => 'auth', 'uses' => 'Jobs\JobsController@setEditJobPublishing'])->name('console.jobs.edit.publishing');
    /** End Jobs */
    /** Announcement */
    Route::get('announcement', ['middleware' => 'auth', 'uses' => 'News\NewsController@getListAnnouncement'])->name('console.list.announcement');
    Route::post('announcement', ['middleware' => 'auth', 'uses' => 'News\NewsController@getListAnnouncement'])->name('console.list.announcement');
    Route::get('announcement-new', ['middleware' => 'auth', 'uses' => 'News\NewsController@getNewAnnouncement'])->name('console.new.announcement');
    Route::post('announcement-add', ['middleware' => 'auth', 'uses' => 'News\NewsController@setCallBackNewAnnouncement'])->name('console.announcement.post');
    Route::get('announcement-edit/{id}', ['middleware' => 'auth', 'uses' => 'News\NewsController@getEditAnnouncement'])->name('console.edit.announcement');
    Route::post('announcement-edit', ['middleware' => 'auth', 'uses' => 'News\NewsController@setEditAnnouncement'])->name('console.edit.post.announcement');
    /** End Announcement */
});

/**
 * Dialog Modal
 */
Route::group(['prefix' => 'from-modal'], function(){
    Route::post('change-password', ['middleware' => 'auth', 'uses' => 'Users\UsersController@getChangePasswordFromModal'])->name('modal.change.passwd');
    Route::post('callback-change-passwd', ['middleware' => 'auth', 'uses' => 'Users\UsersController@setCallBackChangePasswordFromModal'])->name('modal.change.passwd.callback');
});
/**
 * End Dialog Modal
 */
Route::post('/', 'Home\HomeController@changeBahasa');

Route::fallback(function(){
    abort(404);
});
