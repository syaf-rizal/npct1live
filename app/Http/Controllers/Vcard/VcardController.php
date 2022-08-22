<?php

namespace App\Http\Controllers\Vcard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VcardController extends Controller
{
    protected $path;

    public function __construct()
    {
        $this->path = storage_path('app/public/tmp');
    }

    public function getVCardAttribute($id)
    {
        $url = 'https://vcard.npct1.co.id/vcf/' . $id . '.vcf';
        $fileName = $id.'.vcf';
        $tempFile = tempnam(sys_get_temp_dir(), $fileName);
        copy($url, $tempFile);
        return response()->download($tempFile, $fileName);

        // $arrContextOptions=array(
        //     "ssl"=>array(
        //         "verify_peer"=>false,
        //         "verify_peer_name"=>false,
        //     ),
        // );
        // $fileContent = file_get_contents($url, false, stream_context_create($arrContextOptions));
        // $response = response($fileContent, 200, [
        //     'Content-Type' => 'application/json',
        //     'Content-Disposition' => 'attachment; filename="'.$id.'.vcf"',
        // ]);
        // return $response;
    }
}
