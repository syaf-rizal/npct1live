<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Banner;
use App\Models\ThumbsLink;
use Ixudra\Curl\Facades\Curl;
use rndediiv2\CustomHelper\Facades\CustomHelper;
use DB;
use Cookie;
use Session;

 
class HomeController extends Controller
{
    public function getHomePage()
    {
        // $vesselCombobox = Curl::to('https://econ.npct1.co.id/npct1rest/api/vessel')
        //     ->withTimeout(60)
        //     ->get();
        // $responseVesselCombobox = json_decode($vesselCombobox, true);

        $arrSlider = Banner::with(['hasBanner'])->where('banner_active', '=', 1)->orderBy('banner_pinned', 'desc')->get()->toArray();
        $arrNews = Post::select('title', 'slug', 'posted_at')->where([
            ['is_published', 1],
            ['post_type', 1]
        ])->orderBy('posted_at', 'desc')->limit(3)->get()->toArray();
        $arrTender = Post::select('title', 'slug', 'posted_at')->where([
            ['is_published', 1],
            ['post_type', 2],
            [DB::raw('TIMEDIFF(post_expired, NOW())'), '>=', 1]
        ])->orderBy('posted_at', 'desc')->limit(3)->get()->toArray();
        $arrAnnouncement = Post::where([
            ['post_type', 3],
            [DB::raw('TIMEDIFF(post_expired, NOW())'), '>=', 1],
            ['is_published', 1]
        ])->orderBy('id', 'desc')->limit(3)->get()->toArray();
        $arrThumbsLink = Thumbslink::orderBy('thumbs_pinned', 'desc')->get()->toArray();

        $arrData = [
            'actionTracking' => url('req/container'),
            'actionEir' => url('req/eir'),
            'actionVgm' => url('req/vgm'),
            'actionVessel' => url('req/vessel'),
            'title' => 'New Priok Container Terminal One - NPCT1',
            'slider' => $arrSlider,
            'news' => $arrNews,
            'tender' => $arrTender,
            'announcement' => $arrAnnouncement,
            'thumbsLink' => $arrThumbsLink
        ];
        // if($responseVesselCombobox['code'] == "00")
        // {
        //     $arrData['vessel'] = CustomHelper::setDropdownFromJson(json_decode(json_encode($responseVesselCombobox['data']['master']), true), 'code', 'name', TRUE);
        // }
        // else
        // {
        //     $arrData['vessel'] = [
        //         '' => ''
        //     ];
        // }
        
        $vesselScheduleRest = Curl::to(env('URISEGMENT') . 'vessel-schedule')
            ->withHeaders(array(
                'Accept' => 'application/json', 
                'Content-Type' => 'application/json', 
                'App-Id' => env('CUMIBAKARID'), 
                'App-Key' => env('CUMIBAKARKEY')
                )
            ) 
            ->get();
        $arrContextVesselSchedule = json_decode($vesselScheduleRest, true);
        if(array_key_exists('status', $arrContextVesselSchedule))
        {
            $arrContextVesselScheduleStatus = $arrContextVesselSchedule['status'];
            $arrContextVesselScheduleCollections = $arrContextVesselSchedule['collections']['schedule'];
            if($arrContextVesselScheduleStatus == 200)
            {
                if(!empty($arrContextVesselScheduleCollections))
                {
                    for($i = 0; $i < count($arrContextVesselScheduleCollections); $i++) 
                    {
                        $vessel[] = [
                            'code' => $arrContextVesselScheduleCollections[$i]['code'],
                            'name' => $arrContextVesselScheduleCollections[$i]['name'] . " (" . $arrContextVesselScheduleCollections[$i]['code']. ")"
                        ];
                    }
                    usort($vessel, function($a, $b) {
                        if($a['name']==$b['name']) return 0;
                        return $a['name'] < $b['name']?-1:1;
                    });
    
                    $arrData['vessel'] = CustomHelper::setDropdownFromJson(json_decode(json_encode($vessel), true), 'code', 'name', TRUE);
                }
                else
                {
                    $arrData['vessel'] = [
                        '' => ''
                    ];
                }
            }
            else
            {
                $arrData['vessel'] = [
                    '' => ''
                ];
            }
        }
        else
        {
            $arrData['vessel'] = [
                '' => ''
            ];
        }
		
		if (Session::get('Lang') !== null){
			if(Session::get('Lang') == 'id'){
				return view('components.home.uHomeInd', $arrData);
			}else{
				return view('components.home.uHome', $arrData);
			}
		}else{
			Session::put('Lang', 'eng');
			return view('components.home.uHome', $arrData);
		}
		
        
    }
	
	public function changeBahasa(Request $request){
		$bahasa =  $request->request->get('bahasa');
		if($bahasa == 'english'){
			//Cookie::queue(Cookie::make('Lang', 'eng', 42000));
            Session::put('Lang', 'eng');
		}else{
			//Cookie::queue(Cookie::make('Lang', 'id', 42000));
            Session::put('Lang', 'id');
		}
		echo $bahasa;
	}
}
