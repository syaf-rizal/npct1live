<?php

namespace App\Http\Controllers\Tender;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Validator;
use File;
use DB;
use ZipArchive;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use rndediiv2\CustomHelper\Facades\CustomHelper;
use App\Models\Tender;
use App\Models\TenderDocument;
use App\Models\Post;

class TenderController extends Controller
{
    protected $path;
    protected $tmp;

    public function __construct()
    {
        $this->path = storage_path('app/public/bidding');
        $this->tmp = storage_path('app/public/tmp');
    }

    public function getBiddingTenderFromSlug($id)
    {
        $arrData['objPost'] = Post::where('slug', $id)->firstOrFail()->toArray();
        $arrData['title'] =  'NPCT1 Bidding ' . $arrData['objPost']['title'];
        $arrData['actionBidding'] = url('bidding-propose');
        return view('components.tender.uBiddingStepFirst', $arrData);
    }

    public function setPropsedTenderBidding(Request $request)
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

        $validatorTender = Validator::make($request->all(), [
            'sluger' => 'required',
            'companyName' => 'required',
            'picName' => 'required',
            'emailCorrespondence' => 'required',
            'phoneNumber' => 'required',
            'taxId' => 'required',
            'siup' => 'required',
            'deedEst' => 'required',
        ], [
            'sluger.required' => 'Slugger is required',
            'companyName.required' => 'Company name is required',
            'picName.required' => 'PIC Name is required',
            'emailCorrespondence.required' => 'Email Correspondence is required',
            'phoneNumber.required' => 'Phone Number is required',
            'taxId.required' => 'NPWP is required',
            'siup.required' => 'SIUP is required',
            'deedEst.required' => 'DEED Establishment is required',
        ]);

        if($validatorTender->fails())
        {
             return response()->json([
                 'status' => 400,
                 'error' => $validatorTender->errors()
             ]);
        }
        else
        {
            try
            {
                $resultSet = FALSE;
                $resultZip = FALSE;
                $arrFiles = [];
                $objMails = [];
                if (!File::isDirectory($this->path))
                {
                    File::makeDirectory($this->path);
                }
                $post = Post::where([ ['slug', '=', $request->sluger] ])->firstOrFail();
                $TrTender['tender_slug'] = $request->sluger;
                $TrTender['tender_number'] = strtoupper($request->sluger);
                $TrTender['tender_name'] = strtoupper($post->title);
                $TrTender['tender_company'] = strtoupper($request->companyName);
                $TrTender['tender_pic'] = strtoupper($request->picName);
                $TrTender['tender_email'] = $request->emailCorrespondence;
                $TrTender['tender_phone'] = $request->phoneNumber;
                $objTender = Tender::create($TrTender);
                if($objTender)
                {
                    $TrTenderDoc['doc_tender_id'] = $objTender->tender_id;
                    $TrTenderDoc['doc_tax_id'] = $request->taxId;
                    $TrTenderDoc['doc_siup'] = $request->siup;
                    $TrTenderDoc['doc_deed_establish'] = $request->deedEst;
                    if($request->cprofile)
                    {
                        File::move(Storage::disk('local')->getDriver()->getAdapter()->applyPathPrefix('public/tmp/'. $request->cprofile), $this->path . '/' . $request->cprofile);
                        $TrTenderDoc['doc_company_profile'] = $request->cprofile;
                        $arrFiles[] = $request->cprofile;
                    }
                    if($request->deedChange)
                    {
                        File::move(Storage::disk('local')->getDriver()->getAdapter()->applyPathPrefix('public/tmp/'. $request->deedChange), $this->path . '/' . $request->deedChange);
                        $TrTenderDoc['doc_deed_change'] = $request->deedChange;
                        $arrFiles[] = $request->deedChange;
                    }
                    if($request->deedChanges)
                    {
                        File::move(Storage::disk('local')->getDriver()->getAdapter()->applyPathPrefix('public/tmp/'. $request->deedChanges), $this->path . '/' . $request->deedChanges);
                        $TrTenderDoc['doc_deed_changes'] = $request->deedChanges;
                        $arrFiles[] = $request->deedChanges;
                    }
                    $objTrTenderDoc = TenderDocument::create($TrTenderDoc);
                    if($objTrTenderDoc)
                    {
                        File::move(Storage::disk('local')->getDriver()->getAdapter()->applyPathPrefix('public/tmp/'. $request->taxId), $this->path . '/' . $request->taxId);
                        File::move(Storage::disk('local')->getDriver()->getAdapter()->applyPathPrefix('public/tmp/'. $request->siup), $this->path . '/' . $request->siup);
                        File::move(Storage::disk('local')->getDriver()->getAdapter()->applyPathPrefix('public/tmp/'. $request->deedEst), $this->path . '/' . $request->deedEst);
                        $arrFiles[] = $request->taxId;
                        $arrFiles[] = $request->siup;
                        $arrFiles[] = $request->deedEst;
                        $resultSet = TRUE;
                    }

                }
                if($resultSet)
                {
                    $filesTemp = [];
                    foreach($arrFiles as $file)
                    {
                        $filesTemp[] = basename(Storage::disk('local')->getDriver()->getAdapter()->applyPathPrefix('public/bidding/'. $file));
                    }
                    $zip = new ZipArchive;
                    $zipPath = $this->path . '/';
                    $zipFileName = Uuid::uuid4()->toString() . '.zip';
                    if($zip->open($zipPath.$zipFileName, ZipArchive::CREATE) == TRUE)
                    {
                        foreach($filesTemp as $val)
                        {
                            if(is_file($zipPath.$val))
                            {
                                $zip->addFile($zipPath.$val, $val);
                            }
                        }
                        $zip->close();
                        $resultZip = TRUE;
                    }

                    if($resultZip)
                    {
                        $objMails['to'] = 'procurement@npct1.co.id';
                        $objMails['fullName'] = 'Procurement Team';
                        $objMails['subject'] = $TrTender['tender_name'];
                        $objMails['attachment'] = $this->path . '/' . $zipFileName;
                        $objMails['vendor'] = [
                            'name' => $TrTender['tender_name'],
                            'company' => $TrTender['tender_company'],
                            'pic' => $TrTender['tender_pic'],
                            'email' => $TrTender['tender_email'],
                            'phone' => $TrTender['tender_phone']
                        ];
                        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
                        $beautymail->send('components.emails.uBiddingProposal', [
                            'attribute' => $objMails
                        ], function($message) use ($objMails)
                        {
                            $message->from('notification@npct1.co.id')
                                    ->to(trim($objMails['to']), trim($objMails['fullName']))
                                    ->subject($objMails['subject'])
                                    ->attach($objMails['attachment']);
                        });
                        File::delete($this->path . '/' . $zipFileName);
                        foreach($arrFiles as $file)
                        {
                            File::delete($this->path . '/' . $file);
                        }
                    }
                    return response()->json([
                        'message' => 'Bidding proposal succesfully submited',
                        'redirect' => [
                            'statement' => true,
                            'url' =>  url('bidding/' . $request->sluger)
                        ],
                        'status'=> 200,
                        'collection' => []
                    ]);
                }
                else
                {
                    return response()->json(['error'=> [ 'message' => ['Bidding proposal fail' ]] , 'status'=> 400]);
                }
            }
            catch (Exception $e){
                return response()->json(['error'=> $e, 'status'=> 400]);
            }
        }
    }
}
