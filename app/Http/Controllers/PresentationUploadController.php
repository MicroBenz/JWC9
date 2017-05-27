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

	    if($powerpoint->getClientSize() > 104857600){
		    // $data['errorMessage'] .= "ไฟล์ภาพต้องไม่ใหญ่กว่า 2MB";
		    return ['error'=> "ไฟล์ภาพต้องไม่ใหญ่กว่า 100MB"];
	    }

	    $filename = $powerpoint->getClientOriginalName();

	    $path = $powerpoint->storeAs('public/slides',  $filename);








	    $pdf = $request->file('pdf');
	    $data['errorMessage'] = '';

	    if($powerpoint->getClientSize() > 104857600){
		    // $data['errorMessage'] .= "ไฟล์ภาพต้องไม่ใหญ่กว่า 2MB";
		    return ['error'=> "ไฟล์ภาพต้องไม่ใหญ่กว่า 100MB"];
	    }

	    $filename = $powerpoint->getClientOriginalName();

	    $path = $powerpoint->storeAs('public/slides',  $filename);

	    return response()->json(['status' => 'OK']);
    }
}
