<?php

namespace App\Http\Controllers\Banner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Banner;
use App\Models\BannerChild;
use Carbon\Carbon;
use Validator;
use Image;
use File;
use rndediiv2\SmartDevTable\Facades\SmartDevTable;

class BannerController extends Controller
{
    public $path;
    public $dimensions;
    public $resizeImages;
    public $separatorDimension;

    public function __construct()
    {
        $this->middleware('auth');
        $this->path = storage_path('app/public/images');
        $this->dimensions = ['150', '245', '300', '500'];
        $this->resizeImages = [['190', '120'], ['380', '240'], ['760', '480']];
        $this->separatorDimension = '|';
    }

    public function getListBanner(Request $request)
    {
        $sqlListBanner = "SELECT banner_uuid, banner_title as 'Title', case when banner_active = 1 then 'Active' else 'Deactive' end as 'Status', case when banner_pinned = 1 then 'Yes' else 'No' end as 'Pinned' 
        FROM tr_banner tb WHERE banner_active = 1";

        SmartDevTable::keys(['banner_uuid']);
        SmartDevTable::hiddens(['banner_uuid']);
        SmartDevTable::columns([
            'banner_uuid', 'banner_title', 'case when banner_active = 1 then \'Active\' else \'Deactive\' end', 'case when banner_pinned = 1 then \'Yes\' else \'No\' end'
        ]);
        SmartDevTable::orderBy('banner_pinned');
        SmartDevTable::sortBy("DESC");
        SmartDevTable::width([
            'Title' => '350',
            'Status' => '75',
            'Pinned' => '75'
        ]);
        SmartDevTable::showSearch(TRUE);
        SmartDevTable::showChk(TRUE);
        SmartDevTable::single(FALSE);
        SmartDevTable::search([
            ['banner_title','Title']
        ]);
        SmartDevTable::menu([
            'New Banner' => [
                'GET', url('console/banner'), '0', 'home', 'metismenu-icon pe-7s-news-paper'
            ],
            'Edit ' . $type => [
                'GET', url('console/banner-edit'), '1', 'fa fa-file-o'
            ],
        ]);
        SmartDevTable::iconCustoms(array(
            'panel-top-close' => 'pe-7s-close-circle'
        ));
        SmartDevTable::action(url('console/list-banner'));
        SmartDevTable::postMethod(TRUE);
        SmartDevTable::tbTarget('listBanner');
        SmartDevTable::expandRow(FALSE);
        SmartDevTable::title('List Banner');

        $smartTable = SmartDevTable::generate($sqlListBanner,$request);

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

    public function getDefaultBanner()
    {
        $arrData = [
            'action' => url('/console/banner-add'),
            'title' => 'NPCT1 - Banner'
        ];
        $arrData['bannerStatus'] = [
            '' => 'status ?',
            '1' => 'Active',
            '0' => 'DeActive'
        ];
        $arrData['bannerPinned'] = [
            '' => 'Is pinned ?',
            '1' => 'Yes',
            '0' => 'No'
        ];
        return view('components.banner.uBannerPost', $arrData);
    }

    public function setCallBackCreateBanner(Request $request)
    {
        $validatorBanner = Validator::make($request->all(), [
            'mycarousel' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'bannerTitle' => 'required',
            'bannerSubTitle' => 'required'
        ], [
            'mycarousel.required' => 'Banner image is required',
            'bannerTitle.required' => 'Banner title required',
            'bannerSubTitle.required' => 'Banner sub title required'
        ]);
        if($validatorBanner->fails())
        {
             return response()->json([
                 'status' => 400,
                 'error' => $validatorBanner->errors()
             ]);
        }
        else
        {
            try
            {
                if (!File::isDirectory($this->path))
                {
                    File::makeDirectory($this->path);
                }
                $file = $request->file('mycarousel');
                $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                Image::make($file)->save($this->path . '/' . $fileName);
                foreach ($this->dimensions as $row)
                {
                    $canvas = Image::canvas($row, $row);
                    $resizeImage  = Image::make($file)->resize($row, $row, function($constraint) {
                        $constraint->aspectRatio();
                    });
                    if (!File::isDirectory($this->path . '/' . $row)) {
                        File::makeDirectory($this->path . '/' . $row);
                    }
                    $canvas->insert($resizeImage, 'center');
                    $canvas->save($this->path . '/' . $row . '/' . $fileName);
                }
                $TrBanner['banner_title'] = $request->bannerTitle;
                $TrBanner['banner_sub_title'] = $request->bannerSubTitle;
                $TrBanner['banner_src'] = $this->path;
                $TrBanner['banner_filename'] = $fileName;
                $TrBanner['banner_dimension'] = implode('|', $this->dimensions);
                $TrBanner['banner_active'] = 1;
                $TrBanner['banner_pinned'] = $request->bannerPinned;
                $TrBanner['create_by'] = Auth::user()->id;
                $objTrBanner = Banner::create($TrBanner);
                $redirect = ($request->addBannerThumbs ? url('/console/thumbs/' . $objTrBanner->banner_uuid) : url('/console/list-banner'));
                return response()->json([
                    'message' => 'Banner successfully added',
                    'redirect' => [
                        'statement' => true,
                        'url' =>  $redirect
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

    public function getThumbsForBanner($id)
    {
        $arrBanner = Banner::with(['hasBanner'])->where('banner_uuid', '=', $id)->get()->toArray();
        $arrData = [
            'action' => url('/console/thumbs-add'),
            'title' => 'NPCT1 - Banner Thumbs',
            'banner' => $arrBanner
        ];
        return view('components.banner.uBannerThumbs', $arrData);
    }

    public function setCallBackCreateThumbnailsFromBanner(Request $request)
    {
        $validatorThumbs = Validator::make($request->all(), [
            'myThumbnail' => 'required|image|mimes:jpg,png,jpeg|max:1024',
            'thumbsTitle' => 'required',
            'thumbsLink' => 'required'
        ], [
            'myThumbnail.required' => 'Image thumbnail is required',
            'thumbsTitle.required' => 'Title of thumbnail required',
            'thumbsLink.required' => 'Link of thumbnail title required'
        ]);
        if($validatorThumbs->fails())
        {
             return response()->json([
                 'status' => 400,
                 'error' => $validatorThumbs->errors()
             ]);
        }
        else
        {
            try
            {
                $childDimension = '';
                $TrBannerParentId = Banner::where('banner_uuid', '=', $request->thumbsParent)->pluck('banner_id')->toArray();
                if (!File::isDirectory($this->path)) 
                {
                    File::makeDirectory($this->path);
                }
                $file = $request->file('myThumbnail');
                $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                Image::make($file)->save($this->path . '/' . $fileName);
                foreach ($this->resizeImages as $row)
                {
                    $canvas = Image::canvas($row[0], $row[1]);
                    $resizeImage  = Image::make($file)->resize($row[0], $row[1], function($constraint) {
                        $constraint->aspectRatio();
                    });
                    if (!File::isDirectory($this->path . '/' . $row[0].'x'.$row[1])) {
                        File::makeDirectory($this->path . '/' . $row[0].'x'.$row[1]);
                    }
                    $canvas->insert($resizeImage, 'center');
                    $canvas->save($this->path . '/' . $row[0].'x'.$row[1] . '/' . $fileName);
                    $childDimension .= $row[0].'x'.$row[1];
                    $childDimension .= $this->separatorDimension;
                }
                $TrBannerChild['child_parent_id'] = $TrBannerParentId[0];
                $TrBannerChild['child_desc'] = $request->thumbsTitle;
                $TrBannerChild['child_src'] = $fileName;
                $TrBannerChild['child_dimension'] = substr($childDimension, 0, -1); //implode('|', $this->dimensions);
                $TrBannerChild['child_linked'] = $request->thumbsLink;
                $TrBannerChild['child_active'] = 1;
                $BannerChild = BannerChild::create($TrBannerChild);
                return response()->json([
                    'message' => 'Thumbnail successfully added',
                    'redirect' => [
                        'statement' => true,
                        'url' =>  url('/console/thumbs/' . $request->thumbsParent)
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

    public function getEditBanner($id)
    {
        $arrData['banner'] = Banner::where([
            ['banner_uuid', '=', $id]
        ])->firstOrFail()->toArray();
        $arrData['bannerStatus'] = [
            '' => 'status ?',
            '1' => 'Active',
            '0' => 'DeActive'
        ];
        $arrData['title'] = 'NPCT1 - Edit Banner';
        $arrData['action'] = url('/console/banner-edit');
        return view('components.banner.uBannerEdit', $arrData);
    }

    public function setEditBanner(Request $request)
    {
        try
        {
            $TrBanner['banner_active'] = $request->bannerStatus;
            $TrBanner['updated_at'] = date("Y-m-d H:i:s");
            $objTrBanner= banner::where([
                ['banner_uuid', '=', $request->id]
            ])->update($TrBanner);
            if($objTrBanner)
            {
                $resultSet = TRUE;
            }
            if($resultSet)
            {
                return response()->json([
                    'message' => 'Update banner successfully edited',
                    'redirect' => [
                        'statement' => true,
                        'url' =>  url('/console/list-banner')
                    ],
                    'status'=> 200,
                    'collection' => []
                ]);
            }
            else
            {
                return response()->json(['error'=> [ 'message' => ['Edit banner failed. Please try again' ]] , 'status'=> 400]);
            }
        }
        catch (Exception $e){
            return response()->json(['error'=> $e, 'status'=> 400]);
        }
    }
}
