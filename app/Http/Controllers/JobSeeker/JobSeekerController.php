<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use rndediiv2\CustomHelper\Facades\CustomHelper;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use App\Models\Jobs;
use App\Models\JobSeeker;
use Validator;
use File;
use DB;

class JobSeekerController extends Controller
{
    protected $path;

    public function __construct()
    {
        $this->path = storage_path('app/public/seeker');
    }

    public function getApplyJobsFromSlug($id)
    {
        $arrData['objJobs'] = Jobs::with(['hasCategory'])->where([
            ['job_uuid', '=', $id],
            [DB::raw('DATEDIFF(job_expired, NOW())'), '>=', 1]
        ])->firstOrFail()->toArray();
        $arrData['title'] =  'NPCT1 Career - ' . $arrData['objJobs']['job_title'];
        $arrData['action'] = url('applying-jobs');
        $arrData['socmed'] = [
            '' => 'Social Media',
            'FB' => 'Facebook',
            'TW' => 'Twitter',
            'LINK' => 'LinkedIn',
            'GITHUB' => 'Github'
        ];
        return view('components.jobs.uJobSeekerApply', $arrData);
    }

    public function setApplyJobSeeker(Request $request)
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

        $validatorSeeker = Validator::make($request->all(), [
            'seekerResume' => 'required|mimes:pdf|max:1024',
            'seekerName' => 'required',
            'seekerEmail' => 'required',
            'seekerPhoneNumber' => 'required',
            'seekerCurrentCompany' => 'required'
        ], [
            'seekerResume.required' => 'Resume CV is required',
            'seekerName.required' => 'Full name is required',
            'seekerEmail.required' => 'Email is required',
            'seekerPhoneNumber.required' => 'Phone number is required',
            'seekerCurrentCompany.required' => 'Current company is required'
        ]);

        if($validatorSeeker->fails())
        {
             return response()->json([
                 'status' => 400,
                 'error' => $validatorSeeker->errors(),
             ]);
        }
        else
        {
            try
            {
                $resultSet = FALSE;
                $resultZip = FALSE;
                $objMails = [];
                if (!File::isDirectory($this->path))
                {
                    File::makeDirectory($this->path);
                }

                $extension = $request->file('seekerResume')->getClientOriginalExtension();
                $filename = Uuid::uuid4()->toString() . '.' . $extension;
                $request->file('seekerResume')->move($this->path, $filename);

                $jobs = Jobs::where([ ['job_uuid', '=', $request->sluger] ])->firstOrFail();
                $TrJobSeeker['seeker_job_id'] = $jobs->id;
                $TrJobSeeker['seeker_full_name'] = strtoupper($request->seekerName);
                $TrJobSeeker['seeker_email'] = $request->seekerEmail;
                $TrJobSeeker['seeker_phone'] = $request->seekerPhoneNumber;
                $TrJobSeeker['seeker_current_company'] = strtoupper($request->seekerCurrentCompany);
                $TrJobSeeker['seeker_soc_media'] = $request->seekerSocMed;
                $TrJobSeeker['seeker_soc_media_link'] = $request->seekerSocMedLink;
                $TrJobSeeker['seeker_doc_cv'] = $filename;
                $TrJobSeeker['seeker_info'] = $request->seekerInfo;
                $objJobSeeker = JobSeeker::create($TrJobSeeker);
                if($objJobSeeker)
                {
                    $objMails['to'] = 'syafrizal@npct1.co.id';
                    $objMails['fullName'] = 'Syafrizal';
                    $objMails['subject'] = 'FORM APPLICATION - ' . $jobs->job_title;
                    $objMails['attachment'] = $this->path . '/' . $filename;
                    $objMails['applicants'] = [
                        'name' => $TrJobSeeker['seeker_full_name'],
                        'email' => $TrJobSeeker['seeker_email'],
                        'phone' => $TrJobSeeker['seeker_phone'],
                        'company' => $TrJobSeeker['seeker_current_company'],
                        'additional' => $TrJobSeeker['seeker_info']
                    ];
                    $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
                    $beautymail->send('components.emails.uJobsApplicants', [
                        'attribute' => $objMails
                    ], function($message) use ($objMails)
                    {
                        $message->from('notification@npct1.co.id')
                                ->to(trim($objMails['to']), trim($objMails['fullName']))
                                ->subject($objMails['subject'])
                                ->attach($objMails['attachment']);
                    });
                    File::delete($this->path . '/' . $filename);
                    $resultSet = TRUE;
                }
                if($resultSet)
                {
                    return response()->json([
                        'message' => 'Your application sucessfully submited',
                        'redirect' => [
                            'statement' => true,
                            'url' =>  url('npct1-career')
                        ],
                        'status'=> 200,
                        'collection' => []
                    ]);
                }
                else
                {
                    return response()->json(['error'=> [ 'message' => ['Submit application failed, please try again' ]] , 'status'=> 400]);
                }

            }
            catch (Exception $e){
                return response()->json(['error'=> $e, 'status'=> 400]);
            }
        }
    }
}
