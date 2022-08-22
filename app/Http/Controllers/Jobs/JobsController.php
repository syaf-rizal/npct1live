<?php

namespace App\Http\Controllers\Jobs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use rndediiv2\CustomHelper\Facades\CustomHelper;
use App\Models\JobCategory;
use App\Models\Jobs;
use App\Models\JobSeeker;
use App\Models\Segment;
use App\Models\ThumbsLink;
use Carbon\Carbon;
use Validator;
use rndediiv2\SmartDevTable\Facades\SmartDevTable;

class JobsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getListJobPublishing(Request $request)
    {
        $arrAllowed = ['IT','HR'];
        if(!in_array(Auth::user()->group, $arrAllowed))
        {
            return redirect('/console/dashboard');
            exit();
        }
        $sqlListJob = "SELECT a.id, a.job_uuid, b.category_name AS 'Category', CASE WHEN a.job_type = 'fullTime' THEN 'Full Time' ELSE 'Contract' END AS 'Job Type',
        a.job_title AS 'Title', DATE_FORMAT(a.job_expired, '%d-%m-%Y') AS 'Closing Date'
        FROM tr_job a LEFT JOIN tr_job_category b ON a.job_category = b.category_value";
        SmartDevTable::keys(['job_uuid']);
        SmartDevTable::hiddens(['id','job_uuid']);
        SmartDevTable::columns([
            'b.category_name', 'CASE WHEN a.job_type = \'fullTime\' THEN \'Full Time\' ELSE \'Contract\' END', 'a.job_title', 'DATE_FORMAT(a.job_expired, \'%d-%m-%Y\')'
        ]);
        SmartDevTable::orderBy(3);
        SmartDevTable::sortBy("ASC");
        SmartDevTable::width([
            'Category' => '200',
            'Job Type' => '100',
            'Title' => '300',
            'Closing Date' => '125'
        ]);
        SmartDevTable::showSearch(TRUE);
        SmartDevTable::showChk(TRUE);
        SmartDevTable::single(FALSE);
        SmartDevTable::search([
            ['a.job_title','Job Title']
        ]);
        SmartDevTable::menu([
            'New Job Opportunity' => [
                'GET', url('console/npct1-career-new'), '0', 'home', 'metismenu-icon pe-7s-id'
            ],
            'Edit Job Opportunity' => [
                'GET', url('console/npct1-career-edit'), '1', 'fa fa-file-o'
            ],
        ]);
        SmartDevTable::iconCustoms(array(
            'panel-top-close' => 'pe-7s-close-circle'
        ));
        SmartDevTable::action(url('console/npct1-career'));
        SmartDevTable::postMethod(TRUE);
        SmartDevTable::tbTarget('listOfJobOpportunity');
        SmartDevTable::expandRow(FALSE);
        SmartDevTable::title("Job Opportunity");

        $smartTable = SmartDevTable::generate($sqlListJob,$request);

        if($request->input('data-post'))
        {
            return $smartTable;
        }
        else
        {
            $data = [
                'smartTable' => $smartTable,
                'title' => 'NPCT1 Console - List Announcement'
            ];
            return view('components.paging.uPagination', $data);
        }
    }

    public function getNewJobPublishing()
    {
        $arrAllowed = ['IT','HR'];
        if(!in_array(Auth::user()->group, $arrAllowed))
        {
            return redirect('/console/dashboard');
            exit();
        }
        $arrData['title'] = 'NPCT 1 - Admin Career';
        $arrData['action'] = url('console/npct1-career-add');
        $arrData['jobCategory'] = CustomHelper::setSelectCombo("select category_value, category_name from tr_job_category ORDER BY category_value ASC","category_value","category_name", TRUE);
        $arrData['jobType'] = [
            '' => 'Job Type',
            'contract' => 'Contract',
            'fullTime' => 'Full Time'
        ];
        $arrData['jobLocation'] = [
            '' => '',
            'IDJKT' => 'Tanjung Priok - Jakarta'
        ];
        return view ('components.jobs.uNewPublishJob', $arrData);
    }

    public function setNewJobOpportunity(Request $request)
    {
        $validatorJobs = Validator::make($request->all(), [
            'jobTitle' => 'required',
            'jobCategory' => 'required',
            'jobType' => 'required',
            'jobDescription' => 'required',
            'jobLocation' => 'required',
            'jobExpired' => 'required'
        ], [
            'jobTitle.required' => 'Job title is required',
            'jobCategory.required' => 'Job category is required',
            'jobType.required' => 'Job type is required',
            'jobDescription.required' => 'Job description is required',
            'jobLocation.required' => 'Job location is required',
            'jobExpired.required' => 'Job expired is required'
        ]);
        if($validatorJobs->fails())
        {
             return response()->json([
                 'status' => 400,
                 'error' => $validatorJobs->errors()
             ]);
        }
        else
        {
            try {
                $resultSet = FALSE;
                $jobDescription=$request->jobDescription;
                $dom = new \domdocument();
                $dom->loadHtml($jobDescription, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
                $images = $dom->getelementsbytagname('img');
                foreach($images as $k => $img){
                    $data = $img->getattribute('src');
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name= "content/". time().$k.'.png';
                    $path = public_path() .'/'. $image_name;
                    file_put_contents($path, $data);
                    $img->removeattribute('src');
                    $img->setattribute('src', asset($image_name));
                }
                $jobDescription = $dom->savehtml();
                $TrJob['job_category'] = $request->jobCategory;
                $TrJob['job_type'] = $request->jobType;
                $TrJob['job_title'] = $request->jobTitle;
                $TrJob['job_location'] = $request->jobLocation;
                $TrJob['job_expired'] = date('Y-m-d', strtotime($request->jobExpired));
                // $TrJob['job_description'] = clean($jobDescription);
                $TrJob['job_description'] = $jobDescription;
                $TrJob['create_by'] = Auth::user()->id;
                $objTrJob = Jobs::create($TrJob);
                if($objTrJob)
                {
                    $TrUriSegment['uri_slug'] = $objTrJob->job_uuid;
                    $TrUriSegment['handle_controller'] = '\App\Http\Controllers\Slug\SlugController';
                    $TrUriSegment['handle_action'] = 'getJobOpportunity';
                    $TrUriSegment['handle_dynamic'] = 1;
                    $TrUriSegment['handle_status'] = 1;
                    $objTrUriSegment = Segment::create($TrUriSegment);

                    $typeIsDeleted = ThumbsLink::where('thumbs_type', 4)->delete();
                    $TrThumbsLinked['thumbs_title'] = $objTrJob->job_title;
                    $TrThumbsLinked['thumbs_short'] = 'We are hirring for position ' . $objTrJob->job_title;
                    $TrThumbsLinked['thumbs_src'] = 'iStock-935290454.jpg';
                    $TrThumbsLinked['thumbs_dimension'] = '120x120|190x120|380x240|760x480';
                    $TrThumbsLinked['thumbs_linked'] = $objTrJob->job_uuid;
                    $TrThumbsLinked['thumbs_type'] = 4;
                    $TrThumbsLinked['thumbs_pinned'] = 0;
                    $TrThumbsLinked['create_by'] = $objTrJob->create_by;
                    $objTrThumbsLinked = ThumbsLink::create($TrThumbsLinked);
                    $resultSet = TRUE;
                }

                if($resultSet)
                {
                    return response()->json([
                        'message' => 'Job opportunity succesfully posted',
                        'redirect' => [
                            'statement' => true,
                            'url' =>  url('/console/npct1-career-detail/' . $objTrJob->job_uuid)
                        ],
                        'status'=> 200,
                        'collection' => []
                    ]);
                }
                else
                {
                    return response()->json(['error'=> [ 'message' => ['Add new job opportunity failed. Please try again' ]] , 'status'=> 400]);
                }
            }
            catch (Exception $e){
                return response()->json(['error'=> $e, 'status'=> 400]);
            }
        }
    }

    public function getEditJobPublishing($id)
    {
        $arrAllowed = ['IT','HR'];
        if(!in_array(Auth::user()->group, $arrAllowed))
        {
            return redirect('/console/dashboard');
            exit();
        }
        $arrData['objJob'] = Jobs::select('id', 'job_uuid','job_category','job_type','job_title','job_location','job_expired','job_description','job_placed')->where([
            ['job_uuid', '=', $id]
        ])->firstOrFail()->toArray();
        
        $arrData['title'] = 'NPCT 1 - Admin Career';
        $arrData['action'] = url('console/npct1-career-edit');
        $arrData['jobCategory'] = CustomHelper::setSelectCombo("select category_value, category_name from tr_job_category ORDER BY category_value ASC","category_value","category_name", TRUE);
        $arrData['jobType'] = [
            '' => 'Job Type',
            'contract' => 'Contract',
            'fullTime' => 'Full Time'
        ];
        $arrData['jobLocation'] = [
            '' => '',
            'IDJKT' => 'Tanjung Priok - Jakarta'
        ];
        return view ('components.jobs.uEditPublishJob', $arrData);
    }

    public function setEditJobPublishing(Request $request)
    {
        $validatorJobs = Validator::make($request->all(), [
            'jobTitle' => 'required',
            'jobCategory' => 'required',
            'jobType' => 'required',
            'jobDescription' => 'required',
            'jobLocation' => 'required',
            'jobExpired' => 'required'
        ], [
            'jobTitle.required' => 'Job title is required',
            'jobCategory.required' => 'Job category is required',
            'jobType.required' => 'Job type is required',
            'jobDescription.required' => 'Job description is required',
            'jobLocation.required' => 'Job location is required',
            'jobExpired.required' => 'Job expired is required'
        ]);
        if($validatorJobs->fails())
        {
             return response()->json([
                 'status' => 400,
                 'error' => $validatorJobs->errors()
             ]);
        }
        else
        {
            try {
                $resultSet = FALSE;
                $jobDescription=$request->jobDescription;
                $dom = new \domdocument();
                $dom->loadHtml($jobDescription, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
                $images = $dom->getelementsbytagname('img');
                foreach($images as $k => $img){
                    $data = $img->getattribute('src');
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name= "content/". time().$k.'.png';
                    $path = public_path() .'/'. $image_name;
                    file_put_contents($path, $data);
                    $img->removeattribute('src');
                    $img->setattribute('src', asset($image_name));
                }
                $jobDescription = $dom->savehtml();
                $TrJob['job_category'] = $request->jobCategory;
                $TrJob['job_type'] = $request->jobType;
                $TrJob['job_title'] = $request->jobTitle;
                $TrJob['job_location'] = $request->jobLocation;
                $TrJob['job_expired'] = date('Y-m-d', strtotime($request->jobExpired));
                // $TrJob['job_description'] = clean($jobDescription);
                $TrJob['job_description'] = $jobDescription;
                $objTrJob= Jobs::where([
                    ['job_uuid', '=', $request->id]
                ])->update($TrJob);
                if($objTrJob)
                {
                    $resultSet = TRUE;
                }

                if($resultSet)
                {
                    return response()->json([
                        'message' => 'Job opportunity succesfully edited',
                        'redirect' => [
                            'statement' => true,
                            'url' =>  url('/console/npct1-career')
                        ],
                        'status'=> 200,
                        'collection' => []
                    ]);
                }
                else
                {
                    return response()->json(['error'=> [ 'message' => ['Job opportunity failed edited. Please try again' ]] , 'status'=> 400]);
                }
            }
            catch (Exception $e){
                return response()->json(['error'=> $e, 'status'=> 400]);
            }
        }
    }
    public function getDetailJobOpportunity($id)
    {
        $arrData['objJobs'] = Jobs::where('job_uuid', $id)->firstOrFail()->toArray();
        $arrData['title'] = 'Job Opportunity Detail - ' . $arrData['objJobs']['job_title'];
        return view('components.jobs.uDetailPublishedJob', $arrData);
    }
}
