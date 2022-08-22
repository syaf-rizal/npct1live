<?php

namespace App\Http\Controllers\Uploads;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Validator;
use File;

class UploadsController extends Controller
{
    protected $tmp;

    public function __construct()
    {
        $this->tmp = storage_path('app/public/tmp');
    }

    public function getUploadPlugAndPlay(Request $request)
    {
        $params = 'mimes:' . str_replace("|", ",", $request->allowed) . '|max:'. $request->maxsize;
        $validatorFiles = Validator::make($request->all(), [
            'file' => 'required|'. $params,
        ], [
            'file.required' => $request->document . ' is required',
        ]);
        if($validatorFiles->fails())
        {
             return response()->json([
                 'status' => 400,
                 'error' => $validatorFiles->errors()
             ]);
        }
        else
        {
            try 
            {
                if (!File::isDirectory($this->tmp))
                {
                    File::makeDirectory($this->tmp);
                }
                $extension = $request->file('file')->getClientOriginalExtension();
                $filename = Uuid::uuid4()->toString() . '.' . $extension;
                $request->file('file')->move($this->tmp, $filename);
                return response()->json([
                    'status' => 200,
                    'collections' => [
                        'document' => $filename
                    ]
                ]);
            }
            catch (Exception $e){
                return response()->json(['error'=> $e, 'status'=> 400]);
            }
        }
    }
}
