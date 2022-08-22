<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Post;
use App\Models\Segment;
use App\Models\ThumbsLink;
use Carbon\Carbon;
use DB;
use Validator;
use Image;
use File;
use rndediiv2\SmartDevTable\Facades\SmartDevTable;

class NewsController extends Controller
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
        $this->resizeImages = [['120', '120'], ['190', '120'], ['380', '240'], ['760', '480']];
        $this->separatorDimension = '|';
    }

    public function getListNews(Request $request)
    {
        $type = (Auth::user()->group == "PR" ? "Tender" : "News");

        if(Auth::user()->group == "IT")
        {
            $sqlListNews = "SELECT id, slug, title, CASE WHEN post_type = 1 THEN 'News' WHEN post_type = 2 THEN 'Tender' END as 'Type', CASE WHEN is_published = 1 THEN 'Published' ELSE 'No Published' END as 'Status', posted_at as 'Posted At' FROM tr_post WHERE post_type IN (1,2)";
        }
        else
        {
            $sqlListNews = "SELECT id, slug, title, CASE WHEN post_type = 1 THEN 'News' WHEN post_type = 2 THEN 'Tender' END as 'Type', CASE WHEN is_published = 1 THEN 'Published' ELSE 'No Published' END as 'Status', posted_at as 'Posted At' FROM tr_post WHERE user_group = '" . Auth::user()->group . "'";
        }

        SmartDevTable::keys(['slug']);
        SmartDevTable::hiddens(['id','slug']);
        SmartDevTable::columns([
            'title', 'CASE WHEN post_type = 1 THEN \'News\' WHEN post_type = 2 THEN \'Tender\' END', 'CASE WHEN is_published = 1 THEN \'Published\' ELSE \'No Published\' END', 'posted_at'
        ]);
        SmartDevTable::orderBy(1);
        SmartDevTable::sortBy("DESC");
        SmartDevTable::width([
            'title' => '350',
            'Type' => '100',
            'Status' => '75',
            'Posted At' => '125'
        ]);
        SmartDevTable::showSearch(TRUE);
        SmartDevTable::showChk(TRUE);
        SmartDevTable::single(FALSE);
        SmartDevTable::search([
            ['title','Title']
        ]);
        SmartDevTable::menu([
            'Add ' . $type => [
                'GET', url('console/news-new'), '0', 'home', 'metismenu-icon pe-7s-news-paper'
            ],
            'Edit ' . $type => [
                'GET', url('console/news-edit'), '1', 'fa fa-file-o'
            ],
        ]);
        SmartDevTable::iconCustoms(array(
            'panel-top-close' => 'pe-7s-close-circle'
        ));
        SmartDevTable::action(url('console/news'));
        SmartDevTable::postMethod(TRUE);
        SmartDevTable::tbTarget('listNews');
        SmartDevTable::expandRow(FALSE);
        SmartDevTable::title($type);

        $smartTable = SmartDevTable::generate($sqlListNews,$request);

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

    public function getDefaultNews()
    {
        $type = (Auth::user()->group == "PR" ? "Tender" : "News");
        $arrData = [
            'action' => url('/console/news-add'),
            'title' => 'NPCT1 - ' . $type
        ];
        $arrData['published'] = [
            '' => 'Publish it ?',
            '1' => 'Yes',
            '0' => 'No'
        ];
        if(Auth::user()->group == "IT" || Auth::user()->group == "COM")
        {
            $arrData['postType'] = [
                '' => 'Type ?',
                '1' => 'News',
                '2' => 'Tender'
            ];
        }
        else if(Auth::user()->group == "PR")
        {
            $arrData['postType'] = [
                '' => 'Type ?',
                '2' => 'Tender'
            ];
        }
        else
        {
            $arrData['postType'] = [
                '' => 'Type ?',
                '1' => 'News'
            ];
        }
        $arrData['type'] = ucfirst($type);
        return view('components.news.uNewsPost', $arrData);
    }

    public function getEditNews($id)
    {
        $type = (Auth::user()->group == "PR" ? "Tender" : "News");
        $arrData['published'] = [
            '' => 'Publish it ?',
            '1' => 'Yes',
            '0' => 'No'
        ];
        if(Auth::user()->group == "IT" || Auth::user()->group == "COM")
        {
            $arrData['postType'] = [
                '' => 'Type ?',
                '1' => 'News',
                '2' => 'Tender'
            ];
        }
        else if(Auth::user()->group == "PR")
        {
            $arrData['postType'] = [
                '' => 'Type ?',
                '2' => 'Tender'
            ];
        }
        else
        {
            $arrData['postType'] = [
                '' => 'Type ?',
                '1' => 'News'
            ];
        }
        $arrData['type'] = ucfirst($type);
        $arrData['objNews'] = Post::where([
            ['slug', '=', $id]
        ])->whereIn('post_type', [1,2])->firstOrFail()->toArray();
        $arrData['title'] = 'NPCT1 - Edit ' . $type;
        $arrData['action'] = url('/console/news-edit');
        return view('components.news.uEditNewsPost', $arrData);
    }

    public function setCallBackCreateNews(Request $request)
    {
        $typeNews = (Auth::user()->group == "PR" ? "Tender" : "News");
        $validatorNews = Validator::make($request->all(), [
            'newsTitle' => 'required',
            'newsBody' => 'required',
            'newsPublished' => 'required',
            'newsType' => 'required'
        ], [
            'newsTitle.required' => 'News Title is required',
            'newsBody.required' => 'News Body is required',
            'newsPublished.required' => 'Is Published required',
            'newsType.required' => 'News Type is required'
        ]);

        if($validatorNews->fails())
        {
             return response()->json([
                 'status' => 400,
                 'error' => $validatorNews->errors()
             ]);
        }
        else
        {
            try
            {
                $childDimension = '';
                $resultSet = FALSE;
                $postBody=$request->newsBody;
                $dom = new \domdocument();
                $dom->loadHtml($postBody, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
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
                if (!File::isDirectory($this->path)) 
                {
                    File::makeDirectory($this->path);
                }

                if($request->file('newsThumb'))
                {
                    $file = $request->file('newsThumb');
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
                }
                else 
                {
                    if($request->newsType == '1')
                    {
                        $fileName = 'news.jpeg';
                    }
                    else if($request->newsType == '2')
                    {
                        $fileName = 'tender.jpeg';
                    }
                }

                $postBody = $dom->savehtml();
                $TrNews['user_id'] = Auth::user()->id;
                $TrNews['user_group'] = Auth::user()->group;
                $TrNews['title'] = $request->newsTitle;
                $TrNews['subtitle'] = $request->newsSubTitle;
                $TrNews['short_description'] = $request->newsShortDescription;
                // $TrNews['post_body'] = clean($postBody);
                $TrNews['post_body'] = $postBody;
                $TrNews['post_type'] = $request->newsType;
                if($request->newsExpired) 
                {
                    $TrNews['post_expired'] = date('Y-m-d H:i', strtotime($request->newsExpired));
                }
                $TrNews['thumb_file'] = $fileName;
                $TrNews['thumb_dimension'] = substr($childDimension, 0, -1);
                $TrNews['is_published'] = $request->newsPublished;
                $TrNews['posted_at'] = date("Y-m-d H:i:s");
                $objTrNews = Post::create($TrNews);
                if($objTrNews)
                {
                    $TrUriSegment['uri_slug'] = $objTrNews->slug;
                    $TrUriSegment['handle_controller'] = '\App\Http\Controllers\Slug\SlugController';
                    $TrUriSegment['handle_action'] = 'getNewsFromSlug';
                    $TrUriSegment['handle_dynamic'] = 1;
                    $TrUriSegment['handle_status'] = 1;
                    $objTrUriSegment = Segment::create($TrUriSegment);
                    
                    if($request->newsType != 9)
                    {
                        $typeIsDeleted = ThumbsLink::where('thumbs_type', $objTrNews->post_type)->delete();
                        $TrThumbsLinked['thumbs_title'] = $objTrNews->title;
                        $TrThumbsLinked['thumbs_short'] = $objTrNews->short_description;
                        $TrThumbsLinked['thumbs_src'] = $objTrNews->thumb_file;
                        $TrThumbsLinked['thumbs_dimension'] = $objTrNews->thumb_dimension;
                        $TrThumbsLinked['thumbs_linked'] = $objTrNews->slug;
                        $TrThumbsLinked['thumbs_type'] = $objTrNews->post_type;
                        $TrThumbsLinked['thumbs_pinned'] = 0;
                        $TrThumbsLinked['create_by'] = $objTrNews->user_id;
                        $objTrThumbsLinked = ThumbsLink::create($TrThumbsLinked);
                    }
                    $resultSet = TRUE;
                }
                if($resultSet)
                {
                    return response()->json([
                        'message' => $typeNews . ' successfully added',
                        'redirect' => [
                            'statement' => true,
                            'url' =>  url('/console/post/' . $objTrNews->slug)
                        ],
                        'status'=> 200,
                        'collection' => []
                    ]);
                }
                else
                {
                    return response()->json(['error'=> [ 'message' => ['Add ' . $typeNews . ' failed. Please try again' ]] , 'status'=> 400]);
                }
            }
            catch (Exception $e){
                return response()->json(['error'=> $e, 'status'=> 400]);
            }
        }
    }

    public function setEditNews(Request $request)
    {
        $typeNews = (Auth::user()->group == "PR" ? "Tender" : "News");
        if($request->file('newsThumb'))
        {
            $validatorNews = Validator::make($request->all(), [
                'newsTitle' => 'required',
                'newsBody' => 'required',
                'newsPublished' => 'required',
                'newsType' => 'required'
            ], [
                'newsTitle.required' => 'News Title is required',
                'newsBody.required' => 'News Body is required',
                'newsPublished.required' => 'Is Published required',
                'newsType.required' => 'News Type is required'
            ]);
        }
        else
        {
            $validatorNews = Validator::make($request->all(), [
                'newsTitle' => 'required',
                'newsBody' => 'required',
                'newsPublished' => 'required',
                'newsType' => 'required'
            ], [
                'newsTitle.required' => 'News Title is required',
                'newsBody.required' => 'News Body is required',
                'newsPublished.required' => 'Is Published required',
                'newsType.required' => 'News Type is required'
            ]);
        }

        if($validatorNews->fails())
        {
             return response()->json([
                 'status' => 400,
                 'error' => $validatorNews->errors()
             ]);
        }
        else
        {
            try
            {
                $childDimension = '';
                $resultSet = FALSE;
                $postBody=$request->newsBody;
                $dom = new \domdocument();
                $dom->loadHtml($postBody, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
                $images = $dom->getelementsbytagname('img');
                foreach($images as $k => $img){
                    $data = $img->getattribute('src');
                    if (preg_match('/data:image/', $data)) 
                    {
                        list($type, $data) = explode(';', $data);
                        list(, $data)      = explode(',', $data);
                        $data = base64_decode($data);
                        $image_name= "content/". time().$k.'.png';
                        $path = public_path() .'/'. $image_name;
                        file_put_contents($path, $data);
                        $img->removeattribute('src');
                        $img->setattribute('src', asset($image_name));
                    }
                }
                if (!File::isDirectory($this->path)) 
                {
                    File::makeDirectory($this->path);
                }

                if($request->file('newsThumb'))
                {
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
                    $TrNews['thumb_file'] = $fileName;
                }
                else
                {
                    if($request->newsType == '1')
                    {
                        $fileName = 'news.jpeg';
                    }
                    else if($request->newsType == '2')
                    {
                        $fileName = 'tender.jpeg';
                    }
                }

                $postBody = $dom->savehtml();
                $TrNews['title'] = $request->newsTitle;
                $TrNews['subtitle'] = $request->newsSubTitle;
                $TrNews['short_description'] = $request->newsShortDescription;
                // $TrNews['post_body'] = clean($postBody);
                $TrNews['post_body'] = $postBody;
                $TrNews['post_type'] = $request->newsType;
                if($request->newsExpired) 
                {
                    $TrNews['post_expired'] = date('Y-m-d H:i', strtotime($request->newsExpired));
                }
                $TrNews['thumb_dimension'] = substr($childDimension, 0, -1);
                $TrNews['is_published'] = $request->newsPublished;
                $TrNews['posted_at'] = date("Y-m-d H:i:s");
                $objTrNews= Post::where([
                    ['slug', '=', $request->id]
                ])->update($TrNews);
                if($objTrNews)
                {
                    $resultSet = TRUE;
                }
                if($resultSet)
                {
                    return response()->json([
                        'message' => $typeNews . ' successfully edited',
                        'redirect' => [
                            'statement' => true,
                            'url' =>  url('/console/post/' . $request->id)
                        ],
                        'status'=> 200,
                        'collection' => []
                    ]);
                }
                else
                {
                    return response()->json(['error'=> [ 'message' => ['Edit ' . $typeNews . ' failed. Please try again' ]] , 'status'=> 400]);
                }
            }
            catch (Exception $e){
                return response()->json(['error'=> $e, 'status'=> 400]);
            }
        }
    }

    public function getPublishedNews($id)
    {
        $arrData['objPost'] = Post::where('slug', $id)->get()->toArray();
        $arrData['title'] =  $arrData['objPost'][0]['title'];
        $arrData['type'] = (Auth::user()->group == "PR" ? "Tender" : "News");
        return view('components.news.uPublishedNews', $arrData);
    }

    public function getAllNews()
    {
        $arrData['objNews'] = Post::with(['hasOwner'])->where([
            ['is_published', 1],
            ['post_type', 1]
        ])->orderBy('posted_at', 'desc')->paginate(3);
        $arrData['title'] =  'NPCT1 News';
        return view('components.news.uListNews', $arrData);
    }

    public function getAllTender()
    {
        $arrData['objTender'] = Post::with(['hasOwner'])->where([
            ['is_published', '=', 1],
            ['post_type', '=', 2],
            [DB::raw('TIMEDIFF(post_expired, NOW())'), '>=', 1]
        ])->orderBy('posted_at', 'desc')->paginate(3);
        $arrData['title'] =  'NPCT1 Tender';
        return view('components.news.uTenderNews', $arrData);
    }

    public function getListAnnouncement(Request $request)
    {
        if(Auth::user()->group == "IT")
        {
            $sqlListAnnouncement = "SELECT id, slug, title, CASE WHEN is_published = 1 THEN 'Published' ELSE 'No Published' END as 'Status', posted_at as 'Posted At' FROM tr_post WHERE post_type = 3";
        }
        else
        {
            $sqlListAnnouncement = "SELECT id, slug, title, CASE WHEN is_published = 1 THEN 'Published' ELSE 'No Published' END as 'Status', posted_at as 'Posted At' FROM tr_post WHERE post_type = 3 AND user_group = '" . Auth::user()->group . "'";
        }
        SmartDevTable::keys(['slug']);
        SmartDevTable::hiddens(['id','slug']);
        SmartDevTable::columns([
            'title', 'CASE WHEN is_published = 1 THEN \'Published\' ELSE \'No Published\' END', 'posted_at'
        ]);
        SmartDevTable::orderBy(1);
        SmartDevTable::sortBy("DESC");
        SmartDevTable::width([
            'title' => '350',
            'Status' => '75',
            'Posted At' => '125'
        ]);
        SmartDevTable::showSearch(TRUE);
        SmartDevTable::showChk(TRUE);
        SmartDevTable::single(FALSE);
        SmartDevTable::search([
            ['title','Announcement Title']
        ]);
        SmartDevTable::menu([
            'New Announcement' => [
                'GET', url('console/announcement-new'), '0', 'home', 'metismenu-icon pe-7s-speaker'
            ],
            'Edit Announcement' => [
                'GET', url('console/announcement-edit'), '1', 'fa fa-file-o'
            ],
        ]);
        SmartDevTable::iconCustoms(array(
            'panel-top-close' => 'pe-7s-close-circle'
        ));
        SmartDevTable::action(url('console/announcement'));
        SmartDevTable::postMethod(TRUE);
        SmartDevTable::tbTarget('listAnnouncement');
        SmartDevTable::expandRow(FALSE);
        SmartDevTable::title("Announcement");

        $smartTable = SmartDevTable::generate($sqlListAnnouncement,$request);

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

    public function getNewAnnouncement()
    {
        $arrData['title'] = 'NPCT1 - Announcement';
        $arrData['action'] = url('/console/announcement-add');
        return view('components.news.uNewAnnouncement', $arrData);
    }

    public function setCallBackNewAnnouncement(Request $request)
    {
        $validatorAnnouncement = Validator::make($request->all(), [
            'announcementTitle' => 'required',
            'announcementBody' => 'required',
            'announcementThumb' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048'
        ], [
            'announcementTitle.required' => 'News Title is required',
            'announcementBody.required' => 'News Body is required',
            'announcementThumb.required' => 'News thumbnails is required'
        ]);
        if($validatorAnnouncement->fails())
        {
             return response()->json([
                 'status' => 400,
                 'error' => $validatorAnnouncement->errors()
             ]);
        }
        else
        {
            try
            {
                $childDimension = '';
                $resultSet = FALSE;
                $postBody=$request->announcementBody;
                $dom = new \domdocument();
                $dom->loadHtml($postBody, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
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
                if (!File::isDirectory($this->path)) 
                {
                    File::makeDirectory($this->path);
                }

                $file = $request->file('announcementThumb');
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

                $postBody = $dom->savehtml();
                $TrNews['user_id'] = Auth::user()->id;
                $TrNews['user_group'] = Auth::user()->group;
                $TrNews['title'] = $request->announcementTitle;
                $TrNews['subtitle'] = $request->announcementSubTitle;
                $TrNews['short_description'] = $request->announcementShortDescription;
                $TrNews['post_body'] = $postBody;
                // $TrNews['post_body'] = clean($postBody);
                $TrNews['post_type'] = 3;
                $TrNews['post_expired'] = date('Y-m-d H:i', strtotime($request->announcementExpired));
                $TrNews['thumb_file'] = $fileName;
                $TrNews['thumb_dimension'] = substr($childDimension, 0, -1);
                $TrNews['is_published'] = 1;
                $TrNews['posted_at'] = date("Y-m-d H:i:s");
                $objTrNews = Post::create($TrNews);
                if($objTrNews)
                {
                    $TrUriSegment['uri_slug'] = $objTrNews->slug;
                    $TrUriSegment['handle_controller'] = '\App\Http\Controllers\Slug\SlugController';
                    $TrUriSegment['handle_action'] = 'getNewsFromSlug';
                    $TrUriSegment['handle_dynamic'] = 1;
                    $TrUriSegment['handle_status'] = 1;
                    $objTrUriSegment = Segment::create($TrUriSegment);
                    $resultSet = TRUE;
                }
                if($resultSet)
                {
                    return response()->json([
                        'message' => 'Announcement successfully added',
                        'redirect' => [
                            'statement' => true,
                            'url' =>  url('/console/post/' . $objTrNews->slug)
                        ],
                        'status'=> 200,
                        'collection' => []
                    ]);
                }
                else
                {
                    return response()->json(['error'=> [ 'message' => ['Add Announcement failed. Please try again' ]] , 'status'=> 400]);
                }
            }
            catch (Exception $e){
                return response()->json(['error'=> $e, 'status'=> 400]);
            }
        }
    }

    public function getEditAnnouncement($id)
    {
        $arrData['objAnnouncement'] = Post::where([
            ['slug', '=', $id],
            ['post_type', '=', 3]
        ])->firstOrFail()->toArray();
        $arrData['published'] = [
            '' => 'Publish it ?',
            '1' => 'Yes',
            '0' => 'No'
        ];
        $arrData['title'] = 'NPCT1 - Edit Announcement';
        $arrData['action'] = url('/console/announcement-edit');
        return view('components.news.uEditAnnouncement', $arrData);
    }

    public function setEditAnnouncement(Request $request)
    {
        if($request->file('announcementThumb'))
        {
            $validatorAnnouncement = Validator::make($request->all(), [
                'announcementTitle' => 'required',
                'announcementBody' => 'required',
                'announcementThumb' => 'required|image|mimes:jpg,png,jpeg|max:1024',
                'newsPublished' => 'required'
            ], [
                'announcementTitle.required' => 'News Title is required',
                'announcementBody.required' => 'News Body is required',
                'announcementThumb.required' => 'News thumbnails is required',
                'newsPublished.required' => 'News published is required'
            ]);
        }
        else
        {
            $validatorAnnouncement = Validator::make($request->all(), [
                'announcementTitle' => 'required',
                'announcementBody' => 'required',
                'newsPublished' => 'required'
            ], [
                'announcementTitle.required' => 'News Title is required',
                'announcementBody.required' => 'News Body is required',
                'newsPublished.required' => 'News published is required'
            ]);
        }
        if($validatorAnnouncement->fails())
        {
             return response()->json([
                 'status' => 400,
                 'error' => $validatorAnnouncement->errors()
             ]);
        }
        else
        {
            try
            {
                $childDimension = '';
                $resultSet = FALSE;
                $postBody=$request->announcementBody;
                $dom = new \domdocument();
                $dom->loadHtml($postBody, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
                $images = $dom->getelementsbytagname('img');
                foreach($images as $k => $img){
                    $data = $img->getattribute('src');
                    if (preg_match('/data:image/', $data)) 
                    {
                        list($type, $data) = explode(';', $data);
                        list(, $data)      = explode(',', $data);
                        $data = base64_decode($data);
                        $image_name= "content/". time().$k.'.png';
                        $path = public_path() .'/'. $image_name;
                        file_put_contents($path, $data);
                        $img->removeattribute('src');
                        $img->setattribute('src', asset($image_name));
                    }
                }
                if (!File::isDirectory($this->path)) 
                {
                    File::makeDirectory($this->path);
                }
                if($request->file('announcementThumb'))
                {
                    $file = $request->file('announcementThumb');
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
                    $TrNews['thumb_file'] = $fileName;
                }

                $postBody = $dom->savehtml();
                $TrNews['title'] = $request->announcementTitle;
                $TrNews['subtitle'] = $request->announcementSubTitle;
                $TrNews['short_description'] = $request->announcementShortDescription;
                // $TrNews['post_body'] = clean($postBody);
                $TrNews['post_body'] = $postBody;
                $TrNews['post_type'] = 3;
                $TrNews['post_expired'] = date('Y-m-d H:i', strtotime($request->announcementExpired));
                $TrNews['thumb_dimension'] = substr($childDimension, 0, -1);
                $TrNews['is_published'] = $request->newsPublished;
                $TrNews['posted_at'] = date("Y-m-d H:i:s");
                $objTrNews= Post::where([
                    ['slug', '=', $request->id]
                ])->update($TrNews);

                if($objTrNews)
                {
                    $resultSet = TRUE;
                }
                if($resultSet)
                {
                    return response()->json([
                        'message' => 'Announcement successfully edited',
                        'redirect' => [
                            'statement' => true,
                            'url' =>  url('/console/post/' . $request->id)
                        ],
                        'status'=> 200,
                        'collection' => []
                    ]);
                }
                else
                {
                    return response()->json(['error'=> [ 'message' => ['Edit announcement failed. Please try again' ]] , 'status'=> 400]);
                }
            }
            catch (Exception $e){
                return response()->json(['error'=> $e, 'status'=> 400]);
            }
        }
    }
}
