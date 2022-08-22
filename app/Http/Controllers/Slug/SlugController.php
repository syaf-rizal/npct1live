<?php

namespace App\Http\Controllers\Slug;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Bod;
use App\Models\Jobs;
use App\Models\Banner;
use App\Models\ThumbsLink;
use Ixudra\Curl\Facades\Curl;
use rndediiv2\CustomHelper\Facades\CustomHelper;
use DB;
use Session;

class SlugController extends Controller
{

    public function getNewsFromSlug($slug)
    {
        $arrData['objPost'] = Post::with(['hasOwner'])->where('slug', $slug)->get()->toArray();
        $arrData['title'] =  $arrData['objPost'][0]['title'];
        $type = 'News';
        if($arrData['objPost'][0]['post_type'] == 1)
        {
            $type = 'News';
        }
        else if($arrData['objPost'][0]['post_type'] == 2)
        {
            $type = 'Tender';
        }
        else if($arrData['objPost'][0]['post_type'] == 3)
        {
            $type = 'Announcement';
        }
        $arrData['type'] = $type;
        return view('components.news.uPublishedNewsFromSlug', $arrData);
    }

    public function getBoardOfDirectors()
    {
        $arrData['arrBod'] = Bod::where('is_active', '=', 1)->orderBy('bod_position', 'ASC')->get()->toArray();
        $arrData['title'] = 'Board Of Directors';
        return view('components.about.uBoardOfDirectors', $arrData);
    }

    public function getBoardOfDirectorsByName($slug)
    {
        $arrBod = Bod::where([
            ['slug', '=', $slug],
            ['is_active', '=', 1]
        ])->firstOrFail();
        $arrData['title'] = $arrBod->name;
        $arrData['arrBod'] = $arrBod;
        return view('components.about.uBoardOfDirectorsByName', $arrData);
    }

    public function getOnBoard()
    {
        $arrData['title'] = 'NPCT1 - Introduction';
		if (Session::get('Lang') !== null){
			if(Session::get('Lang') == 'id'){
				return view('components.about.uIntroductionIndonesia', $arrData);
			}else{
				return view('components.about.uIntroduction', $arrData);
			}
		}else{
			Session::put('Lang', 'eng');
			return view('components.about.uIntroduction', $arrData);
		}
        
    }

    public function getContactUs()
    {
        $arrData['title'] = 'NPCT1 - Contact Us';
        $arrData['action'] = url('req/contact-us');
        return view('components.about.uContactus', $arrData);
    }

    public function getTerminalInformation()
    {
        $arrData['title'] = 'NPCT1 - Terminal Information';
		if (Session::get('Lang') !== null){
			if(Session::get('Lang') == 'id'){
				return view('components.about.uTerminalInformationIndonesia', $arrData);
			}else{
				return view('components.about.uTerminalInformation', $arrData);
			}
		}else{
			Session::put('Lang', 'eng');
			return view('components.about.uTerminalInformation', $arrData);
		}
        
    }

    public function getBillingProcedure()
    {
        $arrData['title'] = 'NPCT1 - Billing Procedure';
        // return view('components.commercial.uNpct1BillingProcedure', $arrData);
        if (Session::get('Lang') !== null){
			if(Session::get('Lang') == 'id'){
				return view('components.commercial.uNpct1BillingProcedureId', $arrData);
			}else{
				return view('components.commercial.uNpct1BillingProcedure', $arrData);
			}
		}else{
			Session::put('Lang', 'eng');
			return view('components.commercial.uNpct1BillingProcedure', $arrData);
		}
    }

    public function getWithHoldingTaxRefund()
    {
        $arrData['title'] = 'NPCT1 - Withholding Tax Refund';
        return view('components.commercial.uWithHoldingTaxRefund', $arrData);
    }

    public function getMandiriEdcPayment()
    {
        $arrData['title'] = 'NPCT1 - Mandiri EDC Payment';
        return view('components.commercial.uMandiriEdcPayment', $arrData);
    }

    public function getContainerHandling()
    {
        $arrData['title'] = 'NPCT1 - Our Services Container Handling';
		if (Session::get('Lang') !== null){
			if(Session::get('Lang') == 'id'){
				return view('components.services.uContainerHandlingIndonesia', $arrData);
			}else{
				return view('components.services.uContainerHandling', $arrData);
			}
		}else{
			Session::put('Lang', 'eng');
			return view('components.services.uContainerHandling', $arrData);
		}
        
        
    }

    public function getReeferHandling()
    {
        $arrData['title'] = 'NPCT1 - Our Reefer Handling';
		if (Session::get('Lang') !== null){
			if(Session::get('Lang') == 'id'){
				return view('components.services.uReeferHandlingIndonesia', $arrData);
			}else{
				return view('components.services.uReeferHandling', $arrData);
			}
		}else{
			Session::put('Lang', 'eng');
			return view('components.services.uReeferHandling', $arrData);
		}
        
        
    }

    public function getDgHandling()
    {
        $arrData['title'] = 'NPCT1 - Dangerous Goods (DG) Handling';
		if (Session::get('Lang') !== null){
			if(Session::get('Lang') == 'id'){
				return view('components.services.uDangerousGoodHandlingIndonesia', $arrData);
			}else{
				return view('components.services.uDangerousGoodHandling', $arrData);
			}
		}else{
			Session::put('Lang', 'eng');
			return view('components.services.uDangerousGoodHandling', $arrData);
		}
        
        
    }

    public function getOogHandling()
    {
        $arrData['title'] = 'NPCT1 - Out of Gauge (OOG)/Un-containerized Cargo (UC) Cargo Handling';
		if (Session::get('Lang') !== null){
			if(Session::get('Lang') == 'id'){
				return view('components.services.uOogCargoHandlingIndonesia', $arrData);
			}else{
				return view('components.services.uOogCargoHandling', $arrData);
			}
		}else{
			Session::put('Lang', 'eng');
			return view('components.services.uOogCargoHandling', $arrData);
		}
        
    }

    public function getVgmHandling()
    {
        $arrData['title'] = 'NPCT1 - Weigh Bridge for Verified Gross Mass (VGM)';
		if (Session::get('Lang') !== null){
			if(Session::get('Lang') == 'id'){
				return view('components.services.uVgmHandlingIndonesia', $arrData);
			}else{
				return view('components.services.uVgmHandling', $arrData);
			}
		}else{
			Session::put('Lang', 'eng');
			return view('components.services.uVgmHandling', $arrData);
		}
        
    }

    public function getCommonArea()
    {
        $arrData['title'] = 'NPCT1 - Common Gate Area';
		if (Session::get('Lang') !== null){
			if(Session::get('Lang') == 'id'){
				return view('components.services.uCommonAreaIndonesia', $arrData);
			}else{
				return view('components.services.uCommonArea', $arrData);
			}
		}else{
			Session::put('Lang', 'eng');
			return view('components.services.uCommonArea', $arrData);
		}
        
    }

    public function getPhiloshopy()
    {
        $arrData['title'] = 'NPCT1 - Philosophy';
		if (Session::get('Lang') !== null){
			if(Session::get('Lang') == 'id'){
				return view('components.about.uPhilosophyIndonesia', $arrData);
			}else{
				return view('components.about.uPhilosophy', $arrData);
			}
		}else{
			Session::put('Lang', 'eng');
			return view('components.about.uPhilosophy', $arrData);
		}
        
    }

    public function getAllPublishedJobs()
    {   $arrData['objJobs'] = Jobs::with(['hasCategory'])->select('job_uuid', 'job_category', 'job_expired', 'job_title', 'job_location')->where([
            [DB::raw('DATEDIFF(job_expired, NOW())'), '>=', 1]
        ])->get()->toArray();
        $arrData['title'] = 'NPCT1 - Career';
        return view('components.jobs.uPublishedJobs', $arrData);
    }

    public function getJobOpportunity($id)
    {
        $arrData['objJobs'] = Jobs::with(['hasCategory'])->where([
            ['job_uuid', '=', $id],
            [DB::raw('DATEDIFF(job_expired, NOW())'), '>=', 1]
        ])->firstOrFail()->toArray();
        $arrData['title'] =  'NPCT1 Career - ' . $arrData['objJobs']['job_title'];
        return view('components.jobs.uDetailJobsByTitle', $arrData);
    }

    public function setAnnouncementWSluger(Request $request)
    {
        $arrData['objAnnouncement'] = Post::where([
            [DB::raw('TIMEDIFF(post_expired, NOW())'), '>=', 1],
            ['is_published', 1],
            ['post_type', 3]
        ])->orderBy('id', 'desc')->limit(10)->get()->toArray();
        return view('components.news.uAnnouncementPopUp', $arrData);
    }

    public function getGeneralConditions()
    {   
        $arrData['title'] = 'NPCT1 General Conditions for Services and Facilities';
        return view('components.internal.uGeneralConditions', $arrData);
    }

    public function getEconTestimonial()
    {
        $arrData['title'] = 'NPCT1 - ECON Testimonial';
        if (Session::get('Lang') !== null){
			if(Session::get('Lang') == 'id'){
				return view('components.testimonial.uEconTestimoniInd', $arrData);
			}else{
				return view('components.testimonial.uEconTestimoniEng', $arrData);
			}
		}else{
			Session::put('Lang', 'eng');
			return view('components.testimonial.uEconTestimoniEng', $arrData);
		}
    }

    public function getBoardOfDirectorsWdms()
    {
        $arrData['arrBod'] = Bod::where('is_active', '=', 1)->orderBy('bod_position', 'ASC')->get()->toArray();
        $arrData['title'] = 'Board Of Directors';
        return view('components.about.uBoardOfDirectorsWdms', $arrData);
    }

    public function getHomeWdmsSlug()
    {
        $vesselCombobox = Curl::to('https://econ.npct1.co.id/npct1rest/api/vessel')
            ->withTimeout(60)
            ->get();
        $responseVesselCombobox = json_decode($vesselCombobox, true);

        $arrSlider = Banner::with(['hasBanner'])->where('banner_active', '=', 1)->get()->toArray();
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
        if($responseVesselCombobox['code'] == "00")
        {
            $arrData['vessel'] = CustomHelper::setDropdownFromJson(json_decode(json_encode($responseVesselCombobox['data']['master']), true), 'code', 'name', TRUE);
        }
        else
        {
            $arrData['vessel'] = [
                '' => ''
            ];
        }
		
		
		if (Session::get('Lang') !== null){
			if(Session::get('Lang') == 'id'){
				return view('components.home.uHomeWdmsInd', $arrData);
			}else{
				return view('components.home.uHomeWdms', $arrData);
			}
		}else{
			Session::put('Lang', 'eng');
			return view('components.home.uHomeWdms', $arrData);
		}
    }
}
