<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Storage;
use DB;
use File;
use App\Models\Post;

class ServiceController extends Controller
{

    protected $tmp;
    protected $path;

    public function __construct()
    {
        $this->path = storage_path('app/public');
        $this->tmp = storage_path('app/public/tmp');
    }

    public function getAnnouncementActive()
    {
        try
        {
            $arrAnnouncement = Post::select("title","thumb_file", "posted_at")->where([
                ['post_type', 3],
                [DB::raw('TIMEDIFF(post_expired, NOW())'), '>=', 1],
                ['is_published', 1]
            ])->orderBy('id', 'desc')->limit(3)->get()->toArray();
            return $arrAnnouncement;
        }
        catch(ModelNotFoundException $e)
        {
            return [];
        }
    }

    public function setWhtFile(Request $request)
    {
        $arrRequest = (array)$request->all();
        $name = $arrRequest['number'].'.jpg';
        $image_64 = $arrRequest['image'];
        $extension = explode('/', explode(':', substr($image_64, 0, strpos($image_64, ';')))[1])[1];
        $replace = substr($image_64, 0, strpos($image_64, ',')+1); 
        $image = str_replace($replace, '', $image_64); 
        $image = str_replace(' ', '+', $image); 
        $imageName = $arrRequest['number'].'.'.$extension;
        $response = Storage::disk('public')->put($imageName, base64_decode($image));
        if($response)
        {
            $source = 'https://www.npct1.co.id/storage/' . $imageName;
            $qrImg = urlencode($source);
            $contents = file_get_contents("https://api.qrserver.com/v1/read-qr-code/?fileurl=$qrImg");
            if($contents)
            {
                $qrCode = json_decode($contents, true);
                File::delete($this->path . '/' . $imageName);
                return response()->json([
                    'error' => false,
                    'message' => 'File uploaded',
                    'data' => [
                        'file' => 'https://www.npct1.co.id/storage/' . $imageName,
                        'qrCode' => $qrCode[0]['symbol'][0]['data'],
                        'source' => $arrRequest['user']
                    ]
                ]);
            }
            else
            {
                return response()->json([
                    'error' => true,
                    'message' => 'Error reading file',
                    'data' => [
                        'file' => $response
                    ]
                ], 400);
            }
        }
        else
        {
            return response()->json([
                'message' => 'Error uploading file',
                'data' => [
                    'file' => $response
                ]
            ], 400);
        }
    }
}
