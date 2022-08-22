<?php

namespace App\Http\Controllers\Bod;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Bod;
use App\Models\Segment;
use Carbon\Carbon;
use Validator;
use Image;
use File;
use rndediiv2\SmartDevTable\Facades\SmartDevTable;

class BodController extends Controller
{
    public $paths;
    public $dimensions;

    public function __construct()
    {
        $this->middleware('auth');
        $this->paths = storage_path('app/public/images');
        $this->dimensions = ['150', '245', '300', '500'];
    }

    public function getListBoardOfDirectors(Request $request)
    {
        $arrAllowed = ['COM','IT','PNC'];
        if(!in_array(Auth::user()->group, $arrAllowed))
        {
            return redirect('/console/dashboard');
            exit();
        }

        $sqlListBod = "SELECT id, slug, bod_position, name as 'Name', title as 'Title', CASE WHEN is_active = 1 THEN 'Active' ELSE 'Non Active' END AS 'Status' FROM tr_bod";
        SmartDevTable::keys(['slug']);
        SmartDevTable::hiddens(['id','slug', 'bod_position']);
        SmartDevTable::columns([
            'name', 'title', 'CASE WHEN is_active = 1 THEN \'Active\' ELSE \'Non Active\' END'
        ]);
        SmartDevTable::orderBy(3);
        SmartDevTable::sortBy("ASC");
        SmartDevTable::width([
            'Name' => '350',
            'Title' => '100',
            'Status' => '75'
        ]);
        SmartDevTable::showSearch(TRUE);
        SmartDevTable::showChk(TRUE);
        SmartDevTable::single(FALSE);
        SmartDevTable::search([
            ['name','BOD Name']
        ]);
        SmartDevTable::menu([
            'Add New BOD' => [
                'GET', url('console/board-of-directors-new'), '0', 'home', 'metismenu-icon pe-7s-id'
            ],
            'Edit Profile BOD' => [
                'GET', url('console/board-of-directors-edit'), '1', 'fa fa-file-o'
            ],
        ]);
        SmartDevTable::iconCustoms(array(
            'panel-top-close' => 'pe-7s-close-circle'
        ));
        SmartDevTable::action(url('console/list-board-of-directors'));
        SmartDevTable::postMethod(TRUE);
        SmartDevTable::tbTarget('listOfBod');
        SmartDevTable::expandRow(FALSE);
        SmartDevTable::title("Board Of Directors");

        $smartTable = SmartDevTable::generate($sqlListBod,$request);

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

    public function getNewBoardOfDirectors()
    {
        $arrAllowed = ['COM','IT','PNC'];
        if(!in_array(Auth::user()->group, $arrAllowed))
        {
            return redirect('/console/dashboard');
            exit();
        }
        $arrData = [
            'action' => url('/console/board-of-directors-add'),
            'title' => 'NPCT1 - Board Of Director'
        ];
        $arrData['titleBod'] = [
            '' => 'Select Title',
            '1' => 'President Director',
            '2' => 'Regional Director',
            '3' => 'Director'
        ];
        return view('components.bod.uBoardOfDirector', $arrData);
    }

    public function setNewBoardOfDirectors(Request $request)
    {
        $arrAllowed = ['COM','IT','PNC'];
        if(!in_array(Auth::user()->group, $arrAllowed))
        {
            return redirect('/console/dashboard');
            exit();
        }
        $validatorBod = Validator::make($request->all(), [
            'nameBod' => 'required',
            'titleBod' => 'required',
            'descriptionBod' => 'required',
            'myThumbnail' => 'required|image|mimes:jpg,png,jpeg|max:5024'
        ], [
            'nameBod.required' => 'Name of BOD is required',
            'titleBod.required' => 'Title of BOD is required',
            'descriptionBod.required' => 'Description of BOD is required',
            'myThumbnail.required' => 'Photo of BOD is required'
        ]);
        if($validatorBod->fails())
        {
             return response()->json([
                 'status' => 400,
                 'error' => $validatorBod->errors()
             ]);
        } 
        else
        {
            try {
                $resultSet = FALSE;
                $descriptionBod=$request->descriptionBod;
                $dom = new \domdocument();
                $dom->loadHtml($descriptionBod, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
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
                $descriptionBod = $dom->savehtml();

                if (!File::isDirectory($this->paths)) 
                {
                    File::makeDirectory($this->paths);
                }
                $file = $request->file('myThumbnail');
                $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                Image::make($file)->save($this->paths . '/' . $fileName);
                foreach ($this->dimensions as $row)
                {
                    $canvas = Image::canvas($row, $row);
                    $resizeImage  = Image::make($file)->resize($row, $row, function($constraint) {
                        $constraint->aspectRatio();
                    });
                    if (!File::isDirectory($this->paths . '/' . $row)) {
                        File::makeDirectory($this->paths . '/' . $row);
                    }
                    $canvas->insert($resizeImage, 'center');
                    $canvas->save($this->paths . '/' . $row . '/' . $fileName);
                }
                if($request->titleBod == 1)
                {
                    $title = 'President Director';
                    $bodPosition = 1;
                }
                else if($request->titleBod == 2)
                {
                    $title = 'Regional Director';
                    $bodPosition = 2;
                }
                else if($request->titleBod == 3)
                {
                    $title = 'Director';
                    $bodPosition = 3;
                }
                $TrBod['name'] = $request->nameBod;
                $TrBod['title'] = $title;
                $TrBod['description'] = $descriptionBod;
                $TrBod['photo'] = $fileName;
                $TrBod['bod_position'] = $bodPosition;
                $TrBod['dimension'] = implode('|', $this->dimensions);
                $objTrBod = Bod::create($TrBod);
                if($objTrBod)
                {
                    $TrUriSegment['uri_slug'] = $objTrBod->slug;
                    $TrUriSegment['handle_controller'] = '\App\Http\Controllers\Slug\SlugController';
                    $TrUriSegment['handle_action'] = 'getBoardOfDirectorsByName';
                    $TrUriSegment['handle_dynamic'] = 1;
                    $TrUriSegment['handle_status'] = 1;
                    $objTrUriSegment = Segment::create($TrUriSegment);
                    $resultSet = TRUE;
                }

                if($resultSet)
                {
                    return response()->json([
                        'message' => 'BOD successfully added',
                        'redirect' => [
                            'statement' => true,
                            'url' =>  url('/console/board-of-directors-details/' . $objTrBod->slug)
                        ],
                        'status'=> 200,
                        'collection' => []
                    ]);
                }
                else
                {
                    return response()->json(['error'=> [ 'message' => ['Add New BOD fail. Please try again' ]] , 'status'=> 400]);
                }
            }
            catch (Exception $e){
                return response()->json(['error'=> $e, 'status'=> 400]);
            }
        }
    }
    
    public function getEditBoardOfDirectors($id)
    {
        $arrAllowed = ['COM','IT','PNC'];
        if(!in_array(Auth::user()->group, $arrAllowed))
        {
            return redirect('/console/dashboard');
            exit();
        }
        $arrData['objBod'] = Bod::where([
            ['slug', '=', $id]
        ])->firstOrFail()->toArray();
        $arrData['title'] = 'NPCT1 - Edit BOD';
        $arrData['action'] = url('/console/board-of-directors-edit');
        $arrData['titleBod'] = [
            '' => 'Select Title',
            '1' => 'President Director',
            '2' => 'Regional Director',
            '3' => 'Director'
        ];
        $arrData['isActive'] = [
            '1' => 'Active',
            '0' => 'Non-Active'
        ];
        return view('components.bod.uEditBoardOfDirector', $arrData);
    }

    public function setEditBoardOfDirectors(Request $request)
    {
        $arrAllowed = ['COM','IT','PNC'];
        if(!in_array(Auth::user()->group, $arrAllowed))
        {
            return redirect('/console/dashboard');
            exit();
        }
        if($request->file('myThumbnail'))
        {
            $validatorBod = Validator::make($request->all(), [
                'nameBod' => 'required',
                'titleBod' => 'required',
                'descriptionBod' => 'required',
                'myThumbnail' => 'required|image|mimes:jpg,png,jpeg|max:5024'
            ], [
                'nameBod.required' => 'Name of BOD is required',
                'titleBod.required' => 'Title of BOD is required',
                'descriptionBod.required' => 'Description of BOD is required',
                'myThumbnail.required' => 'Photo of BOD is required'
            ]);
        }
        else
        {
            $validatorBod = Validator::make($request->all(), [
                'nameBod' => 'required',
                'titleBod' => 'required',
                'descriptionBod' => 'required'
            ], [
                'nameBod.required' => 'Name of BOD is required',
                'titleBod.required' => 'Title of BOD is required',
                'descriptionBod.required' => 'Description of BOD is required'
            ]);
        }
        
        if($validatorBod->fails())
        {
             return response()->json([
                 'status' => 400,
                 'error' => $validatorBod->errors()
             ]);
        } 
        else
        {
            try {
                $resultSet = FALSE;
                $descriptionBod=$request->descriptionBod;
                $dom = new \domdocument();
                $dom->loadHtml($descriptionBod, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
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
                $descriptionBod = $dom->savehtml();

                if (!File::isDirectory($this->paths)) 
                {
                    File::makeDirectory($this->paths);
                }

                if($request->file('myThumbnail'))
                {
                    $file = $request->file('myThumbnail');
                    $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                    Image::make($file)->save($this->paths . '/' . $fileName);
                    foreach ($this->dimensions as $row)
                    {
                        $canvas = Image::canvas($row, $row);
                        $resizeImage  = Image::make($file)->resize($row, $row, function($constraint) {
                            $constraint->aspectRatio();
                        });
                        if (!File::isDirectory($this->paths . '/' . $row)) {
                            File::makeDirectory($this->paths . '/' . $row);
                        }
                        $canvas->insert($resizeImage, 'center');
                        $canvas->save($this->paths . '/' . $row . '/' . $fileName);
                    }
                    $TrBod['photo'] = $fileName;
                }
                if($request->titleBod == 1)
                {
                    $title = 'President Director';
                    $bodPosition = 1;
                }
                else if($request->titleBod == 2)
                {
                    $title = 'Regional Director';
                    $bodPosition = 2;
                }
                else if($request->titleBod == 3)
                {
                    $title = 'Director';
                    $bodPosition = 3;
                }
                $TrBod['name'] = $request->nameBod;
                $TrBod['title'] = $title;
                $TrBod['description'] = $descriptionBod;
                $TrBod['bod_position'] = $bodPosition;
                $TrBod['is_active'] = $request->isActive;
                $TrBod['dimension'] = implode('|', $this->dimensions);
                $objTrBod= Bod::where([
                    ['slug', '=', $request->id]
                ])->update($TrBod);
                if($objTrBod)
                {
                    $resultSet = TRUE;
                }

                if($resultSet)
                {
                    return response()->json([
                        'message' => 'BOD successfully edited',
                        'redirect' => [
                            'statement' => true,
                            'url' =>  url('/console/board-of-directors')
                        ],
                        'status'=> 200,
                        'collection' => []
                    ]);
                }
                else
                {
                    return response()->json(['error'=> [ 'message' => ['Edit BOD fail. Please try again' ]] , 'status'=> 400]);
                }
            }
            catch (Exception $e){
                return response()->json(['error'=> $e, 'status'=> 400]);
            }
        }
    }

    public function getDetailBoardOfDirectors($id)
    {
        $arrData['objBod'] = Bod::where('slug', $id)->get()->toArray();
        $arrData['title'] =  $arrData['objBod'][0]['name'];
        $arrData['action'] = '#';
        return view('components.bod.uBoardOfDirectorDetails', $arrData);
    }
}
