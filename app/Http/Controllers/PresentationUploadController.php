<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PresentationUploadController extends Controller
{
    public function index ()
    {
		return view('slide');
    }
    public function store (Request $request)
    {
	    $powerpoint = $request->file('powerpoint');
	    $data['errorMessage'] = '';
	    $checkMimeType = false;
	    $allowMimeType = [
	    	'application/vnd.openxmlformats-officedocument.presentationml.presentation',
		    'application/vnd.ms-powerpoint',
		    'application/pdf'
	    ];

	    foreach($allowMimeType as $mime){
		    $checkMimeType = $checkMimeType || ($powerpoint->getMimeType() == $mime);
	    }
	    if(!$checkMimeType){
		    return ['error'=> "ไฟล์ต้องเป็น .pptx หรือ .pdf เท่านั้น"];
	    }
	    if($powerpoint->getClientSize() > 104857600){
		    // $data['errorMessage'] .= "ไฟล์ภาพต้องไม่ใหญ่กว่า 2MB";
		    return ['error'=> "ไฟล์ภาพต้องไม่ใหญ่กว่า 100MB"];
	    }
	    return response()->json(['status' => 'OK']);
    }
}
