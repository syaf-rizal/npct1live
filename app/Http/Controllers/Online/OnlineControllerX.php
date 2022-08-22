<?php

namespace App\Http\Controllers\Online;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Encryption\DecryptException;
use Ixudra\Curl\Facades\Curl;
use rndediiv2\CustomHelper\Facades\CustomHelper;
use Validator;
use DB;
use Carbon\Carbon;
use Cookie;
use Mail;
use File;
use Session;

class OnlineController extends Controller
{
    var $arrayWeekly = ['Monday', 'Tuesday', 'Wednesday', 'Thursday'];
    var $arrayWeekend = ['Friday', 'Saturday'];
    var $arrBeforeHolidays = [
        '2020-12-31', '2021-02-11', '2021-03-10', '2021-04-01', '2021-04-30', '2021-05-12', '2021-06-25', '2021-05-31', '2021-07-19', '2021-08-09', '2021-08-16', '2021-10-18', '2021-12-24'
    ];

    public function getOnlineServiceContainerFromHome(Request $request)
    {
        $validatorVesselTracking = Validator::make($request->all(), [
            'vesselTracking' => 'required|max:6',
            'vesselVoyage' => 'required|max:4',
            'vesselDirection' => 'required|max:3',
            'vesselContainer' => 'required|max:13'
        ], [
            'vesselTracking.required' => 'Vessel is required',
            'vesselVoyage.required' => 'Voyage is required',
            'vesselDirection.required' => 'Direction required',
            'vesselContainer.required' => 'Container number is required'
        ]);
        if($validatorVesselTracking->fails())
        {
             return response()->json([
                 'status' => 400,
                 'error' => $validatorVesselTracking->errors()
             ]);
        }
        else
        {
            $data = $request->vesselTracking . '|' . strtoupper($request->vesselVoyage) . '|' . $request->vesselDirection . '|' . str_replace(" ", "", $request->vesselContainer);
            $params = Crypt::encryptString($data);
            return response()->json([
                'status' => 200,
                'redirect' => [
                    'statement' => true,
                    'url' =>  url('/container/' . $params )
                ]
            ]);
        }
    }

    public function getRestOnlineServiceContainer($id)
    {
        $arrParams = Crypt::decryptString($id);
        $arrParams = explode("|", $arrParams);
        $containerTrackingRest = Curl::to('https://econ.npct1.co.id/npct1rest/api/containerTracking')
            ->withHeaders(array('Content-Type: application/json'))
            ->withData([
                'vessel' => $arrParams[0],
                'voyage' => strtoupper($arrParams[1]),
                'direction' => strtoupper($arrParams[2]),
                'container' => strtoupper($arrParams[3])
            ])
            ->WithTimeout(60)
            ->asJson(true)
            ->post();
        $arrData['tracking'] = json_decode(json_encode($containerTrackingRest), true);
        $vesselCombobox = Curl::to('https://econ.npct1.co.id/npct1rest/api/vessel')
            ->get();
        $responseVesselCombobox = json_decode($vesselCombobox, true);
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
        $arrData['direction'] = [
            'IN' => 'Export',
            'OUT' => 'Import'
        ];
        $arrData['containerAttribute'] = [
            'vessel' => $arrParams[0],
            'voyage' => strtoupper($arrParams[1]),
            'direction' => strtoupper($arrParams[2]),
            'container' => strtoupper($arrParams[3])
        ];
        $arrData['changeSearchContainer'] = url('req/container');
        $arrData['title'] = 'NPCT1 - Container Tracking';
        return view('components.online.uOnlineContainerTracking', $arrData);
    }

    public function getOnlineServiceEirFromHome(Request $request)
    {
        $validatorEirTracking = Validator::make($request->all(), [
            'vesselEir' => 'required|max:6',
            'voyageEir' => 'required|max:4',
            'directionEir' => 'required|max:3',
            'containerEir' => 'required|max:13'
        ], [
            'vesselEir.required' => 'Vessel is required',
            'voyageEir.required' => 'Voyage is required',
            'directionEir.required' => 'Direction required',
            'containerEir.required' => 'Container number is required'
        ]);
        if($validatorEirTracking->fails())
        {
             return response()->json([
                 'status' => 400,
                 'error' => $validatorEirTracking->errors()
             ]);
        }
        else
        {
            $data = $request->vesselEir . '|' . strtoupper($request->voyageEir) . '|' . $request->directionEir . '|' . str_replace(" ", "", $request->containerEir);
            $params = Crypt::encryptString($data);
            return response()->json([
                'status' => 200,
                'redirect' => [
                    'statement' => true,
                    'url' =>  url('/eir/' . $params )
                ]
            ]);
        }
    }

    public function getRestOnlineServiceEir($id)
    {
        $arrParams = Crypt::decryptString($id);
        $arrParams = explode("|", $arrParams);
        $containerEirRest = Curl::to('https://econ.npct1.co.id/npct1rest/api/containerEir')
            ->withHeaders(array('Content-Type: application/json'))
            ->withData([
                'vessel' => $arrParams[0],
                'voyage' => strtoupper($arrParams[1]),
                'direction' => strtoupper($arrParams[2]),
                'container' => strtoupper($arrParams[3])
            ])
            ->WithTimeout(60)
            ->asJson(true)
            ->post();
        $arrData['eir'] = json_decode(json_encode($containerEirRest), true);
        $vesselCombobox = Curl::to('https://econ.npct1.co.id/npct1rest/api/vessel')
            ->get();
        $responseVesselCombobox = json_decode($vesselCombobox, true);
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

        $arrData['containerAttribute'] = [
            'vessel' => $arrParams[0],
            'voyage' => strtoupper($arrParams[1]),
            'direction' => strtoupper($arrParams[2]),
            'container' => strtoupper($arrParams[3])
        ];
        
        $arrData['direction'] = [
            'IN' => 'Export',
            'OUT' => 'Import'
        ];
        $arrData['changeSearchEir'] = url('req/eir');
        $arrData['title'] = 'NPCT1 - Online Service EIR';
        return view('components.online.uOnlineContainerEir', $arrData);
    }

    public function getOnlineServiceVesselFromHome(Request $request)
    {
        $data = strtoupper($request->scheduleVessel) . '|' . strtoupper($request->scheduleLine);
        $params = Crypt::encryptString($data);
        return response()->json([
            'status' => 200,
            'redirect' => [
                'statement' => true,
                'url' =>  url('/vessel/' . $params )
            ]
        ]);
    }

    public function getOnlineServiceVgmFromHome(Request $request)
    {
        $validatorVgmTracking = Validator::make($request->all(), [
            'vesselVgm' => 'required|max:6',
            'voyageVgm' => 'required|max:4',
            'directionVgm' => 'required|max:3',
            'containerVgm' => 'required|max:13'
        ], [
            'vesselVgm.required' => 'Vessel is required',
            'voyageVgm.required' => 'Voyage is required',
            'directionVgm.required' => 'Direction required',
            'containerVgm.required' => 'Container number is required'
        ]);
        if($validatorVgmTracking->fails())
        {
             return response()->json([
                 'status' => 400,
                 'error' => $validatorVgmTracking->errors()
             ]);
        }
        else
        {
            $data = $request->vesselVgm . '|' . strtoupper($request->voyageVgm) . '|' . $request->directionVgm . '|' . str_replace(" ", "", $request->containerVgm);
            $params = Crypt::encryptString($data);
            return response()->json([
                'status' => 200,
                'redirect' => [
                    'statement' => true,
                    'url' =>  url('/vgm/' . $params)
                ]
            ]);
        }
    }

    public function getRestOnlineServiceVgm__($id)
    {
        $arrParams = Crypt::decryptString($id);
        $arrParams = explode("|", $arrParams);
        $containerVgmRest = Curl::to('https://econ.npct1.co.id/npct1rest/api/containerVgm')
            ->withHeaders(array('Content-Type: application/json'))
            ->withData([
                'vessel' => $arrParams[0],
                'voyage' => strtoupper($arrParams[1]),
                'direction' => strtoupper($arrParams[2]),
                'container' => strtoupper($arrParams[3])
            ])
            ->WithTimeout(60)
            ->asJson(true)
            ->post();
        $arrData['vgm'] = json_decode(json_encode($containerVgmRest), true);
        $vesselCombobox = Curl::to('https://econ.npct1.co.id/npct1rest/api/vessel')
            ->get();
        $responseVesselCombobox = json_decode($vesselCombobox, true);
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
        $arrData['containerAttribute'] = [
            'vessel' => $arrParams[0],
            'voyage' => strtoupper($arrParams[1]),
            'direction' => strtoupper($arrParams[2]),
            'container' => strtoupper($arrParams[3])
        ];
        $arrData['changeSearchVgm'] = url('req/vgm');
        $arrData['title'] = 'NPCT1 - Online Service VGM';
        return view('components.online.uOnlineContainerVgm', $arrData);
    }

    public function getRestOnlineServiceVesselSchedule($id)
    {
        $arrParams = Crypt::decryptString($id);
        $arrParams = explode("|", $arrParams);
        $vesselScheduleRest = Curl::to('https://econ.npct1.co.id/npct1rest/api/vesselSchedule')
            ->withHeaders(array('Content-Type: application/json'))
            ->withData([
                'vessel' => $arrParams[0],
                'line' => strtoupper($arrParams[1])
            ])
            ->WithTimeout(60)
            ->asJson(true)
            ->post();
        $arrData['vesselSchedule'] = json_decode(json_encode($vesselScheduleRest), true);
        $arrData['vesselAttribute'] = [
            'vessel' => $arrParams[0],
            'line' => $arrParams[1]
        ];
        $arrData['changeSearchVessel'] = url('req/vessel');
        $arrData['title'] = 'NPCT1 - Vessel Schedule';
        return view('components.online.uOnlineVesselSchedule', $arrData);
    }

    public function setMessageMe(Request $request)
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

        $validatorComments = Validator::make($request->all(), [
            'fullName' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'comments' => 'required'
        ], [
            'fullName.required' => 'Full name is required',
            'email.required' => 'Email is required',
            'phone.required' => 'Phone number is required',
            'comments.required' => 'Comments is required'
        ]);

        if($validatorComments->fails())
        {
             return response()->json([
                 'status' => 400,
                 'error' => $validatorComments->errors(),
             ]);
        }
        else
        {
            try
            {
                $resultSet = FALSE;
                $objMails['to'] = 'commercial@npct1.co.id';
                $objMails['fullName'] = 'Commercial Team';
                $objMails['subject'] = 'Contact Us - Website';
                $objMails['commentator'] = [
                    'name' => $request->fullName,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'company' => $request->company,
                    'vessel' => $request->vessel,
                    'container' => $request->container,
                    'comments' => $request->comments
                ];
                $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
                $beautymail->send('components.emails.uContactSendMessage', [
                    'attribute' => $objMails
                ], function($message) use ($objMails)
                {
                    $message->from('notification@npct1.co.id')
                            ->to(trim($objMails['to']), trim($objMails['fullName']))
                            ->bcc('syafrizal@npct1.co.id')
                            ->subject($objMails['subject']);
                });
                return response()->json([
                    'message' => 'Thank you for your comment',
                    'redirect' => [
                        'statement' => true,
                        'url' =>  url('contact-us')
                    ],
                    'status'=> 200,
                    'collection' => []
                ]);
            }
            catch (Exception $e){
                return response()->json(['error'=> $e, 'status'=> 400]);
            }
        }
    }

    public function getContainerTracking()
    {
        $vesselCombobox = Curl::to('https://econ.npct1.co.id/npct1rest/api/vessel')
            ->get();
        $responseVesselCombobox = json_decode($vesselCombobox, true);
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
        $arrData['actionTracking'] = url('req/container');
        $arrData['title'] = 'NPCT1 - Container Tracking';
        return view('components.online.uServiceContainterTracking', $arrData);
    }

    public function getVesselSchedule()
    {
        $vesselScheduleRest = Curl::to('https://econ.npct1.co.id/npct1rest/api/vesselSchedule')
            ->withHeaders(array('Content-Type: application/json'))
            ->withData([
                'vessel' => '',
                'line' => ''
            ])
            ->WithTimeout(60)
            ->asJson(true)
            ->post();
        $arrData['vesselSchedule'] = json_decode(json_encode($vesselScheduleRest), true);
        $arrData['changeSearchVessel'] = url('req/vessel');
        $arrData['title'] = 'NPCT1 - Vessel Schedule';
        return view('components.online.uServiceVesselSchedule', $arrData);
    }

    public function getVesselGtos()
    {
        $vesselScheduleRest = Curl::to(env('URISEGMENT') . 'vessel-schedule')
            ->withHeaders(array(
                'Accept' => 'application/json', 
                'Content-Type' => 'application/json', 
                'App-Id' => env('CUMIBAKARID'), 
                'App-Key' => env('CUMIBAKARKEY')
                )
            ) 
            ->get();
        $contextVesselSchedule = json_decode($vesselScheduleRest, true);
        print_r($contextVesselSchedule);
    }

    public function getEirTracking()
    {
        $vesselCombobox = Curl::to('https://econ.npct1.co.id/npct1rest/api/vessel')
            ->get();
        $responseVesselCombobox = json_decode($vesselCombobox, true);
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
        $arrData['actionEir'] = url('req/eir');
        $arrData['title'] = 'NPCT1 - EIR';
        return view('components.online.uServiceEirTracking', $arrData);
    }

    public function getVgmTracking__()
    {
        $vesselCombobox = Curl::to('https://econ.npct1.co.id/npct1rest/api/vessel')
            ->get();
        $responseVesselCombobox = json_decode($vesselCombobox, true);
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
        $arrData['actionVGM'] = url('req/vgm');
        $arrData['title'] = 'NPCT1 - VGM';
        return view('components.online.uServiceVgmTracking', $arrData);
    }

    public function getAppointment()
    {
        $arrData['title'] = 'NPCT1 - Appointment';
        return view('components.online.uAppointment', $arrData);
    }

    public function getTariffSimulation()
    {
        $arrData['title'] = 'NPCT1 - Tariff Simulation';
        $arrData['direction'] = [
            'IN' => 'Export',
            'OUT' => 'Import'
        ];
        $arrData['pm'] = [
            '1' => '< 12 PM',
            '0' => '> 12 PM'
        ];
        $arrData['customType'] = [
            'SPB' => 'SPPB',
            'NPE' => 'NPE'
        ];
        $arrData['contType'] = [
            '' => 'Choose Size',
            '20' => '20 Feet',
            '40' => '40 Feet',
            '45' => '45 Feet'
        ];
        $arrData['contStatus'] = [
            '' => 'Choose Status',
            'F' => 'Full',
            'E' => 'Empty'
        ];
        $arrData['action'] = url('req/tarrif-simulation-new');
        return view('components.online.uServiceTariffSimulation', $arrData);
    }

    public function getWhistleblowingNew()
    {
        $arrData['title'] = 'NPCT1 - Whistleblowing';
        $arrData['action'] = url('req/whistleblowing');
        if (Session::get('Lang') !== null){

			if(Session::get('Lang') == 'id'){
				return view('components.online.uServiceWhistleblowingInd', $arrData);
			}else{
				return view('components.online.uServiceWhistleblowing', $arrData);
			}
		}else{

			//Cookie::queue(Cookie::make('Lang', 'eng', 42000));
            Session::put('Lang', 'eng');
			return view('components.online.uServiceWhistleblowing', $arrData);
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

    public function setEmailWhistle(Request $request)
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
         
        $data['email'] = $request->email;
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['category'] = $request->category;
        $data['chronology'] = $request->chronology;
        $data['company'] = $request->company;
        $data['filename'] = $request->filename;
        //$mails = array('herdian.wicaksono@npct1.co.id', 'dianbagus96@gmail.com');
        if($data['name'] != '') {
            if($data['name'] != 'tName'){
                Mail::send('email', $data, function ($m) use ($data) {
                    $m->from('notification@npct1.co.id', 'Mail');
                    $m->to( array('whistleblowing@npct1.co.id'), 'Whistleblowing Committee')->subject('[NPCT1] New Whistle Blowing Report at '.date("d F Y"));
                    //$m->to( array('herdian.wicaksono@npct1.co.id', 'syafrizal@npct1.co.id', 'erik.trianto@npct1.co.id'), 'Whistleblowing Committee')->subject('[NPCT1] New Whistle Blowing Report at '.date("d F Y"));
                    if($data['filename'] != ''){
                        $m->attach(Storage::disk('public')->path($data['filename']));
                    }
                });
            }
        }
    }
    public function getEmailWhistle(){

        $data['email'] = "";
        $data['name'] = "";
        $data['phone'] = "";
        $data['category'] = "";
        $data['chronology'] = "";
        $data['company'] = "";

        Mail::send('email', $data, function ($m) use ($data) {
            $m->from('notification@npct1.co.id', 'Mail');
            $m->to('dianbagus96@gmail.com', 'Whistleblowing Committee')->subject('[NPCT1] New Whistle Blowing Report at '.date("d F Y"));
            $m->attach(Storage::disk('public')->path('lXD1LO0J6Pf8Y1f9NhShh2ZdWI5Y1JujsmO5uwbV.xml'));
        });
    }

    public function uploadSubmit(Request $request){
        $photos = [];

        foreach ($request->photos as $photo) {
            $filename = $photo->store('public');
            $photo->getClientOriginalName();

            $photo_object = new \stdClass();
            $photo_object->name = str_replace('public/', '', $photo->getClientOriginalName());
            $photo_object->size = round(Storage::size($filename) / 1024, 2);
            $photos[] = $photo_object;
            //$p = $photo->getClientOriginalName();
            $photos[] = str_replace('public/', '', $filename);
        }


        return response()->json(array('files' => str_replace('public/', '', $filename)), 200);
    }

    public function getTariffSimulationFromService(Request $request)
    {
        $sppbDayName =\Carbon\Carbon::parse($request->customsDate);
        $dayName = $sppbDayName->isoFormat('dddd');
        $direction = $request->direction;
        $detail = $request->detail;
        $arrContType = [];
        $arrRawTarrif = [];
        $arrCollections = [];
        $union = '';
        $tmp = '';
        $lloReefer = '';
        $qty = 0;

        foreach($detail as $key => $val)
        {
            if($key == 'size')
            {
                for($i = 0; $i < count($detail['size']); $i++)
                {
                    $arrContType[$detail['size'][$i]][] = [
                        'type' => $detail['status'][$i],
                        'rfr' => $detail['rfr'][$i],
                        'oog' => $detail['oog'][$i],
                        'dg' => $detail['dg'][$i],
                        'qty' => $detail['qty'][$i],
                        'stacked' => $request->eta
                    ];
                    $qty = $qty + $detail['qty'][$i];
                }
            }
        }


        foreach($arrContType as $size => $params)
        {
            for($j = 0; $j < count($params); $j++)
            {
                $sqlRaw = '';
                if($params[$j]['rfr'] == '' && $params[$j]['oog'] == '' && $params[$j]['dg'] == '')
                {
                    $clause = " WHERE type = '" . $params[$j]['type']. "' AND cont_type = '" . $size . "' AND status = 1";
                }
                if($params[$j]['rfr'] == 'on')
                {
                    $clause = " WHERE cont_type = '" . $size . "' AND (type = 'R' OR category = 'RS') AND status = 1";
                    if($request->pm == 1)
                        $lloReefer = " UNION ALL SELECT category, category_description, type, type_desc, cont_type, uom, tarrif, '" . date("Y-m-d H:i:s", strtotime($params[$j]['stacked'] . ' 00:00:00')) . "' as stacked, " . $params[$j]['qty'] . " as qty FROM tr_tarrif WHERE cont_type = '" . $size . "' AND type = '" . $params[$j]['type']. "' AND category = 'LLO' AND status = 1";
                    else 
                        $lloReefer = " UNION ALL SELECT category, category_description, type, type_desc, cont_type, uom, tarrif, '" . date("Y-m-d H:i:s", strtotime($params[$j]['stacked'] . ' 12:00:00')) . "' as stacked, " . $params[$j]['qty'] . " as qty FROM tr_tarrif WHERE cont_type = '" . $size . "' AND type = '" . $params[$j]['type']. "' AND category = 'LLO'";

                }
                if($params[$j]['oog'] == 'on') 
                {
                    $clause = " WHERE cont_type = '" . $size . "' AND type = 'O' AND status = 1";
                }

                if($params[$j]['dg'] == 'on')
                {
                    $clause = " WHERE cont_type = '" . $size . "' AND type = 'D' AND status = 1";
                }

                if($request->pm == 1)
                    $sqlRaw .= "$union SELECT category, category_description, type, type_desc, cont_type, uom, tarrif, '" . date("Y-m-d H:i:s", strtotime($params[$j]['stacked'] . ' 00:00:00')) . "' as stacked, " . $params[$j]['qty'] . " as qty FROM tr_tarrif " . $clause;
                else 
                    $sqlRaw .= "$union SELECT category, category_description, type, type_desc, cont_type, uom, tarrif, '" . date("Y-m-d H:i:s", strtotime($params[$j]['stacked'] . ' 12:00:00')) . "' as stacked, " . $params[$j]['qty'] . " as qty FROM tr_tarrif " . $clause;
                $union = " UNION ALL ";
                $tmp .= $sqlRaw;
            }
            $tmp .= $lloReefer;
        }
        if(strlen($tmp) > 0) 
        {
            if($request->direction == 'OUT')
            {
                $tmp .= " UNION ALL SELECT category, category_description, type, type_desc, cont_type, uom, tarrif, '" . date("Y-m-d H:i:s", strtotime($request->eta . ' 00:00:00')) . "' as stacked, " . $qty ." as qty FROM tr_tarrif WHERE category IN ('CR', 'GP', 'PT') AND status = 1";
            }
            else if($request->direction == 'IN')
            {
                $tmp .= " UNION ALL SELECT category, category_description, type, type_desc, cont_type, uom, tarrif, '" . date("Y-m-d H:i:s", strtotime($request->eta . ' 00:00:00')) . "' as stacked, " . $qty ." as qty FROM tr_tarrif WHERE category IN ('CR', 'GP', 'PT', 'VGM', 'WG') AND status = 1";
            }
            $sqlRawTarif = DB::select($tmp . " ORDER BY 2");
            if(sizeof($sqlRawTarif) > 0)
            {
                foreach($sqlRawTarif as $row)
                {
                    $arrRawTarrif[] = (array)$row;
                }
            }
        }
        
        if(count($arrRawTarrif) > 0)
        {
            foreach($arrRawTarrif as $rowTarrif)
            {
                if($request->direction == 'OUT')
                {   
                    $stacked = $rowTarrif['stacked'];
                    $paidThrough = date("Y-m-d", strtotime($request->paid)) . ' 23:59:59';
                    $sppbDate = date("Y-m-d", strtotime($request->customsDate)) . ' 00:00:00';
                    $createdSp2 = date("Y-m-d", strtotime($request->created)) . ' 23:59:59';

                    $stacking = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $stacked);
                    $paidThroughFormatted = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $paidThrough);
                    
                    $sppbDateFormat = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $sppbDate);
                    $createdSp2Formated = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $createdSp2);
                    
                    $hoursStacked = $stacking->diffInHours($paidThroughFormatted);
                    // Storage periode
                    $dayPeriod = $stacking->diffInDays($paidThroughFormatted);
                    $dayPeriod = ($request->pm == 1 ? ((int)$dayPeriod + 1) : $dayPeriod);
                    
                    if($request->pm == 1) 
                    {
                        $sppbPenalty = $sppbDateFormat->diffInDays($createdSp2Formated);
                        $sppbPenalty = (int)$sppbPenalty + 1;

                        $sp2Penalty = $createdSp2Formated->diffInDays($paidThroughFormatted);
                        $sp2Penalty = ($request->pm == 1 ? ((int)$sp2Penalty + 1) : $sp2Penalty);

                    }
                    else
                    {
                        $sp2Penalty = ceil(abs(strtotime($createdSp2) - strtotime($paidThrough))/(60*60) / 24) + 1; 
                        $sppbPenalty = ceil(abs(strtotime($createdSp2) - strtotime($sppbDate))/(60*60) / 24); 
                    }

                    $isBeforeDischarge = $sppbDateFormat->lessThan($stacked);

                    if($isBeforeDischarge)
                    {
                        if($request->pm == 1) 
                        {
                            $sppbBeforDischarge = ceil(abs(strtotime($stacking) - strtotime($createdSp2))/(60*60) / 24) + 1;
                        }
                        else 
                        {
                            $sppbBeforDischarge = ceil(abs(strtotime($stacking) - strtotime($createdSp2))/(60*60) / 24) ;
                        }
                    }
                    
                    $qtyStorage4 = 1;
                    $tariffStorage4 = 0;

                    if($rowTarrif['category'] == 'CR' || $rowTarrif['category'] == 'GP' || $rowTarrif['category'] == 'PT') 
                    {
                        $arrCollections[] = [
                            'category' => $rowTarrif['category'],
                            'category_description' => $rowTarrif['category_description'],
                            'type_desc' => $rowTarrif['type_desc'],
                            'uom' => $rowTarrif['uom'],
                            'tarrif' => $rowTarrif['tarrif'],
                            'qty' => $rowTarrif['qty'],
                            'total' => $rowTarrif['tarrif'] * $rowTarrif['qty']
                        ];
                    }

                    if($rowTarrif['category'] == 'LLO')
                    {
                        $arrCollections[] = [
                            'category' => $rowTarrif['category'],
                            'category_description' => $rowTarrif['category_description'],
                            'type_desc' => 'Lift On ' . $rowTarrif['type_desc'],
                            'uom' => $rowTarrif['uom'],
                            'tarrif' => $rowTarrif['tarrif'],
                            'qty' => $rowTarrif['qty'],
                            'total' => $rowTarrif['tarrif'] * $rowTarrif['qty']
                        ];
                    }

                    /** Container Storage */
                    if($rowTarrif['category'] == 'CS' && ($rowTarrif['type'] == 'E' || $rowTarrif['type'] == 'F' || $rowTarrif['type'] == 'O' || $rowTarrif['type'] == 'R' || $rowTarrif['type'] == 'D'))
                    {
                        if($dayPeriod > 2)
                        {
                            $tariffStorage = $rowTarrif['tarrif'] * 3;
                            $arrCollections[] = [
                                'category' => $rowTarrif['category'],
                                'category_description' => $rowTarrif['category_description'],
                                'type_desc' => 'Storage Import Day 2 ' . $rowTarrif['type_desc'],
                                'uom' => 'DAY',
                                'tarrif' => $tariffStorage,
                                'qty' => $rowTarrif['qty'],
                                'total' => $tariffStorage * $rowTarrif['qty']
                            ];
                        }
                        if($dayPeriod > 3)
                        {
                            $tariffStorage = $rowTarrif['tarrif'] * 6;
                            $arrCollections[] = [
                                'category' => $rowTarrif['category'],
                                'category_description' => $rowTarrif['category_description'],
                                'type_desc' => 'Storage Import Day 3 ' . $rowTarrif['type_desc'],
                                'uom' => 'DAY',
                                'tarrif' => $tariffStorage,
                                'qty' => $rowTarrif['qty'],
                                'total' => $tariffStorage * $rowTarrif['qty']
                            ];
                        }
                        if($dayPeriod >= 4)
                        {
                            $intFreeDay = $dayPeriod - 3;
                            $qtyStorage4 = ($intFreeDay * $rowTarrif['qty']);
                            $tariffStorage = $qtyStorage4 * ($rowTarrif['tarrif'] * 9);
                            $arrCollections[] = [
                                'category' => $rowTarrif['category'],
                                'category_description' => $rowTarrif['category_description'],
                                'type_desc' => 'Storage Import Day > 4 ' . $rowTarrif['type_desc'],
                                'uom' => 'DAY',
                                'tarrif' => ($rowTarrif['tarrif'] * 9),
                                'qty' => $qtyStorage4,
                                'total' => $tariffStorage
                            ];
                        };
                        if($sp2Penalty > 2)
                        {
                            $cntBl = ($qty < 30 ? ' < 30 Cnt / Bl' : '');
                            if($qty < 30)
                            {
                                $betweenDaysPenalty = $sp2Penalty - 2;
                            }
                            else
                            {
                                $betweenDaysPenalty = $sp2Penalty - 4;
                            }

                            if($betweenDaysPenalty > 0)
                            {
                                $tarifSp2 = (9 * $rowTarrif['tarrif']) * 3;
                                $tariffSp2Penalty = ($tarifSp2 * ($betweenDaysPenalty * $rowTarrif['qty']));
                                $arrCollections[] = [
                                    'category' => $rowTarrif['category'],
                                    'category_description' => $rowTarrif['category_description'],
                                    'type_desc' => 'Sp2 Penalty ' . $cntBl,
                                    'uom' => 'DAY',
                                    'tarrif' => $tarifSp2,
                                    'qty' => $betweenDaysPenalty * $rowTarrif['qty'],
                                    'total' => $tariffSp2Penalty
                                ];
                            }
                        }

                        if($isBeforeDischarge)
                        {
                            if($sppbBeforDischarge >= 3)
                            {
                                $tariffStorage = ($rowTarrif['tarrif'] * 6) * 2;
                                $arrCollections[] = [
                                    'category' => $rowTarrif['category'],
                                    'category_description' => $rowTarrif['category_description'],
                                    'type_desc' => 'Sppb Before Discharge ' . $rowTarrif['type_desc'],
                                    'uom' => 'DAY',
                                    'tarrif' => $tariffStorage,
                                    'qty' => $rowTarrif['qty'],
                                    'total' => $tariffStorage * $rowTarrif['qty']
                                ];
                            }
                            if($sppbBeforDischarge >= 4) 
                            {
                                $betweenDays = $sppbBeforDischarge - 4;
                                if($betweenDays > 0)
                                {
                                    $tariffStorage = ($rowTarrif['tarrif'] * 9) * 2;
                                    $qtyTarif = $rowTarrif['qty'] * $betweenDays;
                                    $arrCollections[] = [
                                        'category' => $rowTarrif['category'],
                                        'category_description' => $rowTarrif['category_description'],
                                        'type_desc' => 'Sppb Before Discharge ' . $rowTarrif['type_desc'],
                                        'uom' => 'DAY',
                                        'tarrif' => $tariffStorage,
                                        'qty' => $qtyTarif,
                                        'total' => $tariffStorage * $qtyTarif
                                    ];
                                }                                
                            }
                        }
                        else
                        {
                            if(in_array($dayName, $this->arrayWeekly))
                            {   
                                if($sppbPenalty > 2)
                                {
                                    $betweenDays = $sppbPenalty - 2;
                                    $tariffStorage = ($rowTarrif['tarrif'] * 9) * 2;
                                    if($request->pm == 0  && $betweenDays == 1)
                                    {
                                        $tariffStorage = ($rowTarrif['tarrif'] * 6) * 2;
                                    }
                                    $qtyTarif = $rowTarrif['qty'] * ($sppbPenalty - 2);
                                    $arrCollections[] = [
                                        'category' => $rowTarrif['category'],
                                        'category_description' => $rowTarrif['category_description'],
                                        'type_desc' => 'Sppb Penalty (Mon - Thu) ' . $rowTarrif['type_desc'],
                                        'uom' => 'DAY',
                                        'tarrif' => $tariffStorage,
                                        'qty' => $qtyTarif,
                                        'total' => $tariffStorage * $qtyTarif
                                    ];
                                }

                            }

                            if(in_array($dayName, $this->arrayWeekend))
                            {
                                if($sppbPenalty > 2)
                                {
                                    $betweenDays = $sppbPenalty - 2;
                                    $tariffStorage = ($rowTarrif['tarrif'] * 9) * 2;
                                    if($request->pm == 0  && $betweenDays == 1)
                                    {
                                        $tariffStorage = ($rowTarrif['tarrif'] * 6) * 2;
                                    }
                                    $qtyTarif = $rowTarrif['qty'] * ($sppbPenalty - 2);
                                    $arrCollections[] = [
                                        'category' => $rowTarrif['category'],
                                        'category_description' => $rowTarrif['category_description'],
                                        'type_desc' => 'Sppb Penalty (Fri - Sat & Holiday) ' . $rowTarrif['type_desc'],
                                        'uom' => 'DAY',
                                        'tarrif' => $tariffStorage,
                                        'qty' => $qtyTarif,
                                        'total' => $tariffStorage * $qtyTarif
                                    ];
                                }
                            }
                        }
                    }

                    /** Reefer */
                    if($rowTarrif['category'] == 'RS')
                    {
                        $startReefer = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $stacked);
                        $endReefer = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $paidThroughFormatted);
                        
                        $diffInHours = $startReefer->diffInHours($endReefer);
                        $shifting = ceil($diffInHours / 8);
                        $arrCollections[] = [
                            'category' => $rowTarrif['category'],
                            'category_description' => $rowTarrif['category_description'],
                            'type_desc' => $rowTarrif['type_desc'] . ' | ' . $shifting . ' shift',
                            'uom' => $rowTarrif['uom'],
                            'tarrif' => $rowTarrif['tarrif'],
                            'qty' => $rowTarrif['qty'],
                            'total' => ($rowTarrif['tarrif'] * $shifting) * $rowTarrif['qty']
                        ];
                    }
                    /** End Reefer */
                }
                else if($request->direction == 'IN')
                {
                    $stacked = $rowTarrif['stacked'];
                    $openStack = date("Y-m-d", strtotime($request->eta)) . ' 00:00:00';
                    $estimateDepartured = date("Y-m-d", strtotime($request->paid)) . ' 23:59:59';

                    $openStackFormated = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $openStack);
                    $estimateDeparturedFormatted = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $estimateDepartured);
                    $dayPeriod = ceil(abs(strtotime($openStack) - strtotime($estimateDepartured))/(60*60) / 24) ;
                    $hoursStacked = $openStackFormated->diffInHours($estimateDeparturedFormatted);



                    if($rowTarrif['category'] == 'CR' || $rowTarrif['category'] == 'VGM' || $rowTarrif['category'] == 'WG' || $rowTarrif['category'] == 'PT' || $rowTarrif['category'] == 'GP') 
                    {
                        $arrCollections[] = [
                            'category' => $rowTarrif['category'],
                            'category_description' => $rowTarrif['category_description'],
                            'type_desc' => $rowTarrif['type_desc'],
                            'uom' => $rowTarrif['uom'],
                            'tarrif' => $rowTarrif['tarrif'],
                            'qty' => $rowTarrif['qty'],
                            'total' => $rowTarrif['tarrif'] * $rowTarrif['qty']
                        ];
                    }

                    if($rowTarrif['category'] == 'LLO')
                    {
                        $arrCollections[] = [
                            'category' => $rowTarrif['category'],
                            'category_description' => $rowTarrif['category_description'],
                            'type_desc' => 'Lift On ' . $rowTarrif['type_desc'],
                            'uom' => $rowTarrif['uom'],
                            'tarrif' => $rowTarrif['tarrif'],
                            'qty' => $rowTarrif['qty'],
                            'total' => $rowTarrif['tarrif'] * $rowTarrif['qty']
                        ];
                    }
                    if($rowTarrif['category'] == 'CS' && ($rowTarrif['type'] == 'E' || $rowTarrif['type'] == 'F' || $rowTarrif['type'] == 'O' || $rowTarrif['type'] == 'R' || $rowTarrif['type'] == 'D'))
                    {
                        if($dayPeriod >= 1)
                        {
                            $tariffStorage = $rowTarrif['tarrif'] * 1;
                            $arrCollections[] = [
                                'category' => $rowTarrif['category'],
                                'category_description' => $rowTarrif['category_description'],
                                'type_desc' => 'Storage Export Period I.1 ' . $rowTarrif['type_desc'],
                                'uom' => 'DAY',
                                'tarrif' => $tariffStorage,
                                'qty' => $rowTarrif['qty'],
                                'total' => $tariffStorage * $rowTarrif['qty']
                            ];
                        } 
                        else if($dayPeriod >= 6)
                        {
                            if($dayPeriod > 10)
                            {
                                $cumulateDays = 5;
                            }
                            else
                            {
                                $cumulateDays = 10 - $dayPeriod; 
                            }

                            $tariffStorage = ($rowTarrif['tarrif'] * 2);
                            $arrCollections[] = [
                                'category' => $rowTarrif['category'],
                                'category_description' => $rowTarrif['category_description'],
                                'type_desc' => 'Storage Export Period I.1 ' . $rowTarrif['type_desc'],
                                'uom' => 'DAY',
                                'tarrif' => $tariffStorage,
                                'qty' => $cumulateDays,
                                'total' => ($tariffStorage * $rowTarrif['qty']) * $cumulateDays
                            ];
                        }

                        if($dayPeriod >= 11)
                        {
                            $cumulateDays = $dayPeriod - 11; 
                            $tariffStorage = ($rowTarrif['tarrif'] * 3);
                            $arrCollections[] = [
                                'category' => $rowTarrif['category'],
                                'category_description' => $rowTarrif['category_description'],
                                'type_desc' => 'Storage Export Period II ' . $rowTarrif['type_desc'],
                                'uom' => 'DAY',
                                'tarrif' => $tariffStorage,
                                'qty' => $cumulateDays,
                                'total' => ($tariffStorage * $rowTarrif['qty']) * $cumulateDays
                            ];
                        }
                    }

                    /** Reefer */
                    if($rowTarrif['category'] == 'RS')
                    {
                        // $startReefer = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $stacked);
                        // $endReefer = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $estimateTimeFormat);

                        // $diffInHours = $startReefer->diffInHours($endReefer);
                        $shifting = ceil($hoursStacked / 8);
                        $arrCollections[] = [
                            'category' => $rowTarrif['category'],
                            'category_description' => $rowTarrif['category_description'],
                            'type_desc' => $rowTarrif['type_desc'],
                            'uom' => $rowTarrif['uom'],
                            'tarrif' => $rowTarrif['tarrif'],
                            'qty' => $shifting,
                            'total' => ($rowTarrif['tarrif'] * $shifting) * $rowTarrif['qty']
                        ];
                    }
                    /** End Reefer */
                    
                }
            }
        }
        $arrData['collections'] = $arrCollections;
        return view('components.online.uServiceTarrifSimulationResult', $arrData);
    }
    
    public function getTariffSimulationNew()
    {
        $arrData['title'] = 'NPCT1 - Tariff Simulation';
        $arrData['direction'] = [
            'IN' => 'Export',
            'OUT' => 'Import'
        ];
        $arrData['pm'] = [
            '1' => '< 12 PM',
            '0' => '> 12 PM'
        ];
        $arrData['customType'] = [
            'SPB' => 'SPPB',
            'NPE' => 'NPE'
        ];
        $arrData['contType'] = [
            '' => 'Choose Size',
            '20' => '20 Feet',
            '40' => '40 Feet',
            '45' => '45 Feet'
        ];
        $arrData['contStatus'] = [
            '' => 'Choose Status',
            'F' => 'Full',
            'E' => 'Empty'
        ];
        $arrData['action'] = url('req/tarrif-simulation-new');
        return view('components.online.uServiceTariffSimulationNew', $arrData);
    }
    
    public function getTariffSimulationFromServiceNew(Request $request)
    {
        $sppbDayName =\Carbon\Carbon::parse($request->customsDate);
        $dayName = $sppbDayName->isoFormat('dddd');
        $direction = $request->direction;
        $detail = $request->detail;
        $arrContType = [];
        $arrRawTarrif = [];
        $arrCollections = [];
        $union = '';
        $tmp = '';
        $lloReefer = '';
        $qty = 0;

        foreach($detail as $key => $val)
        {
            if($key == 'size')
            {
                for($i = 0; $i < count($detail['size']); $i++)
                {
                    $arrContType[$detail['size'][$i]][] = [
                        'type' => $detail['status'][$i],
                        'rfr' => $detail['rfr'][$i],
                        'oog' => $detail['oog'][$i],
                        'dg' => $detail['dg'][$i],
                        'qty' => $detail['qty'][$i],
                        'stacked' => $request->eta
                    ];
                    $qty = $qty + $detail['qty'][$i];
                }
            }
        }


        foreach($arrContType as $size => $params) 
        {
            for($j = 0; $j < count($params); $j++)
            {
                $sqlRaw = '';
                if($params[$j]['rfr'] == '' && $params[$j]['oog'] == '' && $params[$j]['dg'] == '')
                {
                    $clause = " WHERE type = '" . $params[$j]['type']. "' AND cont_type = '" . $size . "' AND status = 2";
                }
                if($params[$j]['rfr'] == 'on')
                {
                    $clause = " WHERE cont_type = '" . $size . "' AND (type = 'R' OR category = 'RS') AND status = 2";
                    if($request->pm == 1)
                        $lloReefer = " UNION ALL SELECT category, category_description, type, type_desc, cont_type, uom, tarrif, '" . date("Y-m-d H:i:s", strtotime($params[$j]['stacked'] . ' 00:00:00')) . "' as stacked, " . $params[$j]['qty'] . " as qty FROM tr_tarrif WHERE cont_type = '" . $size . "' AND type = '" . $params[$j]['type']. "' AND category = 'LLO' AND status = 2";
                    else 
                        $lloReefer = " UNION ALL SELECT category, category_description, type, type_desc, cont_type, uom, tarrif, '" . date("Y-m-d H:i:s", strtotime($params[$j]['stacked'] . ' 12:00:00')) . "' as stacked, " . $params[$j]['qty'] . " as qty FROM tr_tarrif WHERE cont_type = '" . $size . "' AND type = '" . $params[$j]['type']. "' AND category = 'LLO' AND status = 2";

                }
                if($params[$j]['oog'] == 'on') 
                {
                    $clause = " WHERE cont_type = '" . $size . "' AND type = 'O' AND status = 2";
                }

                if($params[$j]['dg'] == 'on')
                {
                    $clause = " WHERE cont_type = '" . $size . "' AND type = 'D' AND status = 2";
                }

                if($request->pm == 1)
                    $sqlRaw .= "$union SELECT category, category_description, type, type_desc, cont_type, uom, tarrif, '" . date("Y-m-d H:i:s", strtotime($params[$j]['stacked'] . ' 00:00:00')) . "' as stacked, " . $params[$j]['qty'] . " as qty FROM tr_tarrif " . $clause;
                else 
                    $sqlRaw .= "$union SELECT category, category_description, type, type_desc, cont_type, uom, tarrif, '" . date("Y-m-d H:i:s", strtotime($params[$j]['stacked'] . ' 12:00:00')) . "' as stacked, " . $params[$j]['qty'] . " as qty FROM tr_tarrif " . $clause;
                $union = " UNION ALL ";
                $tmp .= $sqlRaw;
            }
            $tmp .= $lloReefer;
        }
        if(strlen($tmp) > 0) 
        {
            if($request->direction == 'OUT')
            {
                $tmp .= " UNION ALL SELECT category, category_description, type, type_desc, cont_type, uom, tarrif, '" . date("Y-m-d H:i:s", strtotime($request->eta . ' 00:00:00')) . "' as stacked, " . $qty ." as qty FROM tr_tarrif WHERE category IN ('CR', 'GP', 'PT') AND status = 2";
            }
            else if($request->direction == 'IN')
            {
                $tmp .= " UNION ALL SELECT category, category_description, type, type_desc, cont_type, uom, tarrif, '" . date("Y-m-d H:i:s", strtotime($request->eta . ' 00:00:00')) . "' as stacked, " . $qty ." as qty FROM tr_tarrif WHERE category IN ('CR', 'GP', 'PT', 'VGM', 'WG') AND status = 2";
            }
            $sqlRawTarif = DB::select($tmp . " ORDER BY 2");
            if(sizeof($sqlRawTarif) > 0)
            {
                foreach($sqlRawTarif as $row)
                {
                    $arrRawTarrif[] = (array)$row;
                }
            }
        }

        if(count($arrRawTarrif) > 0)
        {
            $boxes = 0;
            foreach($arrRawTarrif as $rowTarrif)
            {
                if($request->direction == 'OUT')
                {   
                    $stacked = $rowTarrif['stacked'];
                    $paidThrough = date("Y-m-d", strtotime($request->paid)) . ' 23:59:59';
                    $sppbDate = date("Y-m-d", strtotime($request->customsDate)) . ' 00:00:00';
                    $createdSp2 = date("Y-m-d", strtotime($request->created)) . ' 23:59:59';

                    $stacking = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $stacked);
                    $paidThroughFormatted = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $paidThrough);
                    
                    $sppbDateFormat = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $sppbDate);
                    $createdSp2Formated = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $createdSp2);
                    
                    $hoursStacked = $stacking->diffInHours($paidThroughFormatted);
                    // Storage periode
                    $dayPeriod = $stacking->diffInDays($paidThroughFormatted);
                    $dayPeriod = ($request->pm == 1 ? ((int)$dayPeriod + 1) : $dayPeriod);
                    
                    if($request->pm == 1) 
                    {
                        $sppbPenalty = $sppbDateFormat->diffInDays($createdSp2Formated);
                        $sppbPenalty = (int)$sppbPenalty + 1;

                        $sp2Penalty = $createdSp2Formated->diffInDays($paidThroughFormatted);
                        $sp2Penalty = ($request->pm == 1 ? ((int)$sp2Penalty + 1) : $sp2Penalty);

                    }
                    else
                    {
                        $sp2Penalty = ceil(abs(strtotime($createdSp2) - strtotime($paidThrough))/(60*60) / 24) + 1; 
                        $sppbPenalty = ceil(abs(strtotime($createdSp2) - strtotime($sppbDate))/(60*60) / 24); 
                    }

                    $isBeforeDischarge = $sppbDateFormat->lessThan($stacked);

                    if($isBeforeDischarge)
                    {
                        if($request->pm == 1) 
                        {
                            $sppbBeforDischarge = ceil(abs(strtotime($stacking) - strtotime($createdSp2))/(60*60) / 24) + 1;
                        }
                        else 
                        {
                            $sppbBeforDischarge = ceil(abs(strtotime($stacking) - strtotime($createdSp2))/(60*60) / 24) ;
                        }
                    }
                    
                    $qtyStorage4 = 1;
                    $tariffStorage4 = 0;

                    if($rowTarrif['category'] == 'CR' || $rowTarrif['category'] == 'GP' || $rowTarrif['category'] == 'PT') 
                    {
                        $arrCollections[] = [
                            'category' => $rowTarrif['category'],
                            'category_description' => $rowTarrif['category_description'],
                            'type_desc' => $rowTarrif['type_desc'],
                            'uom' => $rowTarrif['uom'],
                            'tarrif' => $rowTarrif['tarrif'],
                            'qty' => $rowTarrif['qty'],
                            'total' => $rowTarrif['tarrif'] * $rowTarrif['qty']
                        ];
                    }

                    if($rowTarrif['category'] == 'LLO')
                    {
                        $arrCollections[] = [
                            'category' => $rowTarrif['category'],
                            'category_description' => $rowTarrif['category_description'],
                            'type_desc' => 'Lift On ' . $rowTarrif['type_desc'],
                            'uom' => $rowTarrif['uom'],
                            'tarrif' => $rowTarrif['tarrif'],
                            'qty' => $rowTarrif['qty'],
                            'total' => $rowTarrif['tarrif'] * $rowTarrif['qty']
                        ];
                    }

                    /** Container Storage */
                    if($rowTarrif['category'] == 'CS' && ($rowTarrif['type'] == 'E' || $rowTarrif['type'] == 'F' || $rowTarrif['type'] == 'O' || $rowTarrif['type'] == 'R' || $rowTarrif['type'] == 'D'))
                    {
                        if($dayPeriod > 2)
                        {
                            $tariffStorage = $rowTarrif['tarrif'] * 3;
                            $arrCollections[] = [
                                'category' => $rowTarrif['category'],
                                'category_description' => $rowTarrif['category_description'],
                                'type_desc' => 'Storage Import Day 2 ' . $rowTarrif['type_desc'],
                                'uom' => 'DAY',
                                'tarrif' => $tariffStorage,
                                'qty' => $rowTarrif['qty'],
                                'total' => $tariffStorage * $rowTarrif['qty']
                            ];
                        }
                        // if($dayPeriod > 3)
                        // {
                        //     $tariffStorage = $rowTarrif['tarrif'] * 6;
                        //     $arrCollections[] = [
                        //         'category' => $rowTarrif['category'],
                        //         'category_description' => $rowTarrif['category_description'],
                        //         'type_desc' => 'Storage Import Day 3 ' . $rowTarrif['type_desc'],
                        //         'uom' => 'DAY',
                        //         'tarrif' => $tariffStorage,
                        //         'qty' => $rowTarrif['qty'],
                        //         'total' => $tariffStorage * $rowTarrif['qty']
                        //     ];
                        // }
                        if($dayPeriod >= 3)
                        {
                            $intFreeDay = $dayPeriod - 2; 
                            $qtyStorage4 = ($intFreeDay * $rowTarrif['qty']);
                            $tariffStorage = $qtyStorage4 * ($rowTarrif['tarrif'] * 6);
                            $arrCollections[] = [
                                'category' => $rowTarrif['category'],
                                'category_description' => $rowTarrif['category_description'],
                                'type_desc' => 'Storage Import Day 3 ' . $rowTarrif['type_desc'],
                                'uom' => 'DAY',
                                'tarrif' => ($rowTarrif['tarrif'] * 6),
                                'qty' => $qtyStorage4,
                                'total' => $tariffStorage
                            ];
                        };
                        
                        
                        if($sp2Penalty > 2)
                        {
                            $cntBl = ($qty < 30 ? ' < 30 Cnt / Bl' : ' > 30 Cnt / Bl');
                            if($qty < 30)
                            {
                                $betweenDaysPenalty = $sp2Penalty - 2;
                            }
                            else
                            {
                                $betweenDaysPenalty = $sp2Penalty - 4;
                            }

                            if($betweenDaysPenalty > 0)
                            {
                                $basicTarrif = ($rowTarrif['tarrif'] * 6) * 2;
                                // $tariffStorage = ($rowTarrif['tarrif'] * 6) * 2;
                                $tariffStorage = 0;
                                $qtyTarif = $rowTarrif['qty'] * $betweenDaysPenalty;
                                $totalTarrif = $basicTarrif + $tariffStorage; 
                                $arrCollections[] = [
                                    'category' => $rowTarrif['category'],
                                    'category_description' => $rowTarrif['category_description'],
                                    'type_desc' => 'Sp2 Penalty ' . $cntBl,
                                    'uom' => 'DAY',
                                    'tarrif' => $totalTarrif,
                                    'qty' => $qtyTarif,
                                    'total' => $totalTarrif * $qtyTarif
                                ];
                            }
                        }

                        if($isBeforeDischarge)
                        {
                            if($sppbBeforDischarge >= 4) 
                            { 
                                $betweenDays = $sppbBeforDischarge - 4;
                                if($betweenDays > 0)
                                {
                                    if($betweenDays == 1)
                                    {
                                        $basicTarrif = ($rowTarrif['tarrif'] * 3);
                                        $tariffStorage = 0; 
                                        $totalTarrif = $basicTarrif + $tariffStorage;
                                        $qtyTarif = $rowTarrif['qty'] * $betweenDays;
                                        $arrCollections[] = [
                                            'category' => $rowTarrif['category'],
                                            'category_description' => $rowTarrif['category_description'],
                                            'type_desc' => 'Sppb Before Discharge ' . $rowTarrif['type_desc'],
                                            'uom' => 'DAY',
                                            'tarrif' => $totalTarrif,
                                            'qty' => $qtyTarif,
                                            'total' => $totalTarrif * $qtyTarif
                                        ];
                                    }
                                    else if($betweenDays > 1)
                                    {
                                        if($betweenDays == 2)
                                        {
                                            $basicTarrif = ($rowTarrif['tarrif'] * 6);
                                            $tariffStorage = 0;
                                            $totalTarrif = $basicTarrif * $betweenDays;
                                        }
                                        else if($betweenDays > 2)
                                        {
                                            $basicTarrif = ($rowTarrif['tarrif'] * 6) * 2;
                                            $tariffStorage = 0;
                                            $totalTarrif = $basicTarrif + $tariffStorage;
                                        } 
                                        $qtyTarif = $rowTarrif['qty'] * $betweenDays;
                                        $arrCollections[] = [
                                            'category' => $rowTarrif['category'],
                                            'category_description' => $rowTarrif['category_description'],
                                            'type_desc' => 'Sppb Before Discharge ' . $rowTarrif['type_desc'],
                                            'uom' => 'DAY',
                                            'tarrif' => $totalTarrif,
                                            'qty' => $qtyTarif,
                                            'total' => $totalTarrif * $qtyTarif
                                        ];
                                    }                                    
                                }                                
                            }
                        }
                        else
                        {
                            if(in_array($dayName, $this->arrayWeekly))
                            { 
                                if($rowTarrif['qty'] >= 1 && $rowTarrif['qty'] <= 5)
                                { 
                                    if($sppbPenalty > 3)
                                    {
                                        $betweenDays = $sppbPenalty - 3;
                                        $basicTarrif = ($rowTarrif['tarrif'] * 6) * 1.5;
                                        // $tariffStorage = ($rowTarrif['tarrif'] * 6) * 1.5;
                                        $tariffStorage = 0;
                                        // if($request->pm == 0 && $betweenDays == 1)
                                        // {
                                        //     $basicTarrif = ($rowTarrif['tarrif'] * 6) * 1.5;
                                        // }
                                        $qtyTarif = $rowTarrif['qty'] * ($sppbPenalty - 3);
                                        $totalTarrif = $basicTarrif + $tariffStorage; 
                                        $arrCollections[] = [
                                            'category' => $rowTarrif['category'],
                                            'category_description' => $rowTarrif['category_description'],
                                            'type_desc' => 'Sppb Penalty (Mon - Thu) ' . $rowTarrif['type_desc'],
                                            'uom' => 'DAY',
                                            'tarrif' => $totalTarrif,
                                            'qty' => $qtyTarif,
                                            'total' => $totalTarrif * $qtyTarif
                                        ];
                                    }
                                }
                                else if($rowTarrif['qty'] > 5)
                                {
                                    // if($sppbPenalty == 4)
                                    // {
                                    //     // $tariffStorage = ($rowTarrif['tarrif'] * 6) * 1.5;
                                    //     $tariffStorage = 0;
                                    //     // if($request->pm == 0)
                                    //     // {
                                    //     //     $tariffStorage = ($rowTarrif['tarrif'] * 6) * 1.5;
                                    //     // }
                                    //     $basicTarrif = ($rowTarrif['tarrif'] * 6) * 1.5;
                                    //     $totalTarrif = $basicTarrif + $tariffStorage; 
                                    //     $qtyTarif = $rowTarrif['qty'] * 1;
                                    //     $arrCollections[] = [
                                    //         'category' => $rowTarrif['category'],
                                    //         'category_description' => $rowTarrif['category_description'],
                                    //         'type_desc' => 'Sppb Penalty (Mon - Thu) ' . $rowTarrif['type_desc'],
                                    //         'uom' => 'DAY',
                                    //         'tarrif' => $totalTarrif,
                                    //         'qty' => $qtyTarif,
                                    //         'total' => $totalTarrif * $qtyTarif
                                    //     ];
                                    // }
                                    // else 
                                    if($sppbPenalty >= 5 )
                                    {
                                        $betweenDays = $sppbPenalty - 4;
                                        // $tariffStorage = ($rowTarrif['tarrif'] * 6) * 1.5;
                                        $tariffStorage = 0;
                                        // if($request->pm == 0 && $betweenDays == 1)
                                        // {
                                        //     $tariffStorage = ($rowTarrif['tarrif'] * 6) * 1.5;
                                        // }
                                        $basicTarrif = ($rowTarrif['tarrif'] * 6) * 1.5;
                                        $totalTarrif = $basicTarrif + $tariffStorage; 
                                        $qtyTarif = $rowTarrif['qty'] * ($sppbPenalty - 4);
                                        $arrCollections[] = [
                                            'category' => $rowTarrif['category'],
                                            'category_description' => $rowTarrif['category_description'],
                                            'type_desc' => 'Sppb Penalty (Mon - Thu) ' . $rowTarrif['type_desc'],
                                            'uom' => 'DAY',
                                            'tarrif' => $totalTarrif,
                                            'qty' => $qtyTarif,
                                            'total' => $totalTarrif * $qtyTarif
                                        ];
                                    }
                                }

                            }

                            if(in_array($dayName, $this->arrayWeekend))
                            {
                                if($sppbPenalty > 4)
                                {
                                    $betweenDays = $sppbPenalty - 4;
                                    $tariffStorage = 0; //($rowTarrif['tarrif'] * 6) * 1.5;
                                    // if($request->pm == 0  && $betweenDays == 1)
                                    // {
                                    //     $tariffStorage = ($rowTarrif['tarrif'] * 6) * 1.5;
                                    // }
                                    $basicTarrif = ($rowTarrif['tarrif'] * 6) * 1.5;
                                    $totalTarrif = $basicTarrif + $tariffStorage; 
                                    $qtyTarif = $rowTarrif['qty'] * ($sppbPenalty - 4);
                                    $arrCollections[] = [
                                        'category' => $rowTarrif['category'],
                                        'category_description' => $rowTarrif['category_description'],
                                        'type_desc' => 'Sppb Penalty (Fri - Sun / Holiday) ' . $rowTarrif['type_desc'],
                                        'uom' => 'DAY',
                                        'tarrif' => $totalTarrif,
                                        'qty' => $qtyTarif,
                                        'total' => $totalTarrif * $qtyTarif
                                    ];
                                }
                            }
                        }
                    }

                    /** Reefer */
                    if($rowTarrif['category'] == 'RS')
                    {
                        $startReefer = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $stacked);
                        $endReefer = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $paidThroughFormatted);
                        
                        $diffInHours = $startReefer->diffInHours($endReefer);
                        $shifting = ceil($diffInHours / 8);
                        $arrCollections[] = [
                            'category' => $rowTarrif['category'],
                            'category_description' => $rowTarrif['category_description'],
                            'type_desc' => $rowTarrif['type_desc'] . ' | ' . $shifting . ' shift',
                            'uom' => $rowTarrif['uom'],
                            'tarrif' => $rowTarrif['tarrif'],
                            'qty' => $rowTarrif['qty'],
                            'total' => ($rowTarrif['tarrif'] * $shifting) * $rowTarrif['qty']
                        ];
                    }
                    /** End Reefer */
                }
                else if($request->direction == 'IN')
                {
                    $stacked = $rowTarrif['stacked'];
                    $openStack = date("Y-m-d", strtotime($request->eta)) . ' 00:00:00';
                    $estimateDepartured = date("Y-m-d", strtotime($request->paid)) . ' 23:59:59';

                    $openStackFormated = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $openStack);
                    $estimateDeparturedFormatted = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $estimateDepartured);
                    $dayPeriod = ceil(abs(strtotime($openStack) - strtotime($estimateDepartured))/(60*60) / 24) ;
                    $hoursStacked = $openStackFormated->diffInHours($estimateDeparturedFormatted);



                    // if($rowTarrif['category'] == 'CR' || $rowTarrif['category'] == 'VGM' || $rowTarrif['category'] == 'WG' || $rowTarrif['category'] == 'PT' || $rowTarrif['category'] == 'GP') 
                    if($rowTarrif['category'] == 'VGM' || $rowTarrif['category'] == 'WG' || $rowTarrif['category'] == 'PT' || $rowTarrif['category'] == 'GP') 
                    {
                        $arrCollections[] = [
                            'category' => $rowTarrif['category'],
                            'category_description' => $rowTarrif['category_description'],
                            'type_desc' => $rowTarrif['type_desc'],
                            'uom' => $rowTarrif['uom'],
                            'tarrif' => $rowTarrif['tarrif'],
                            'qty' => $rowTarrif['qty'],
                            'total' => $rowTarrif['tarrif'] * $rowTarrif['qty']
                        ];
                    }

                    if($rowTarrif['category'] == 'LLO')
                    {
                        $arrCollections[] = [
                            'category' => $rowTarrif['category'],
                            'category_description' => $rowTarrif['category_description'],
                            'type_desc' => 'Lift On ' . $rowTarrif['type_desc'],
                            'uom' => $rowTarrif['uom'],
                            'tarrif' => $rowTarrif['tarrif'],
                            'qty' => $rowTarrif['qty'],
                            'total' => $rowTarrif['tarrif'] * $rowTarrif['qty']
                        ];
                    }
                    if($rowTarrif['category'] == 'CS' && ($rowTarrif['type'] == 'E' || $rowTarrif['type'] == 'F' || $rowTarrif['type'] == 'O' || $rowTarrif['type'] == 'R' || $rowTarrif['type'] == 'D'))
                    {
                        if($dayPeriod >= 1)
                        {
                            $tariffStorage = $rowTarrif['tarrif'] * 1;
                            $arrCollections[] = [
                                'category' => $rowTarrif['category'],
                                'category_description' => $rowTarrif['category_description'],
                                'type_desc' => 'Storage Export Period I.1 ' . $rowTarrif['type_desc'],
                                'uom' => 'DAY',
                                'tarrif' => $tariffStorage,
                                'qty' => $rowTarrif['qty'],
                                'total' => $tariffStorage * $rowTarrif['qty']
                            ];
                        } 
                        else if($dayPeriod >= 6)
                        {
                            if($dayPeriod > 10)
                            {
                                $cumulateDays = 5;
                            }
                            else
                            {
                                $cumulateDays = 10 - $dayPeriod; 
                            }

                            $tariffStorage = ($rowTarrif['tarrif'] * 2);
                            $arrCollections[] = [
                                'category' => $rowTarrif['category'],
                                'category_description' => $rowTarrif['category_description'],
                                'type_desc' => 'Storage Export Period I.1 ' . $rowTarrif['type_desc'],
                                'uom' => 'DAY',
                                'tarrif' => $tariffStorage,
                                'qty' => $cumulateDays,
                                'total' => ($tariffStorage * $rowTarrif['qty']) * $cumulateDays
                            ];
                        }

                        if($dayPeriod >= 11)
                        {
                            $cumulateDays = $dayPeriod - 11; 
                            $tariffStorage = ($rowTarrif['tarrif'] * 3);
                            $arrCollections[] = [
                                'category' => $rowTarrif['category'],
                                'category_description' => $rowTarrif['category_description'],
                                'type_desc' => 'Storage Export Period II ' . $rowTarrif['type_desc'],
                                'uom' => 'DAY',
                                'tarrif' => $tariffStorage,
                                'qty' => $cumulateDays,
                                'total' => ($tariffStorage * $rowTarrif['qty']) * $cumulateDays
                            ];
                        }
                    }

                    /** Reefer */
                    if($rowTarrif['category'] == 'RS')
                    {
                        $shifting = ceil($hoursStacked / 8);
                        $arrCollections[] = [
                            'category' => $rowTarrif['category'],
                            'category_description' => $rowTarrif['category_description'],
                            'type_desc' => $rowTarrif['type_desc'],
                            'uom' => $rowTarrif['uom'],
                            'tarrif' => $rowTarrif['tarrif'],
                            'qty' => $shifting,
                            'total' => ($rowTarrif['tarrif'] * $shifting) * $rowTarrif['qty']
                        ];
                    }
                    /** End Reefer */
                    
                }
                $boxes = 0;
            }
        }
        $arrData['collections'] = $arrCollections;
        return view('components.online.uServiceTarrifSimulationResultNew', $arrData);
    }
}
