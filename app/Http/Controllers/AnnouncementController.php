<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class AnnouncementController extends Controller
{
    public function uploadSlip (Request $request) {
	    $file = $request->file('slip');
	    $data['errorMessage'] = '';
	    $checkMimeType = false;
	    $allowMimeType = ['image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/gif'];

	    foreach($allowMimeType as $mime){
		    $checkMimeType = $checkMimeType || ($file->getMimeType() == $mime);
	    }
	    if(!$checkMimeType){
		    return ['error'=> "ไฟล์ภาพต้องเป็น JPG, PNG หรือ GIF เท่านั้น"];
	    }
	    if($file->getClientSize() > 2100000){
		    // $data['errorMessage'] .= "ไฟล์ภาพต้องไม่ใหญ่กว่า 2MB";
		    return ['error'=>
			    "ไฟล์ภาพต้องไม่ใหญ่กว่า 2MB"];
	    }
	    $user = JWTAuth::parseToken()->authenticate();
	    $profile = $user->profile()->first();

	    var_dump($user);
	    exit();

	    $filename = $user->FacebookUniqueID.date("YmdHis");

	    $path = $file->storeAs('slip',  $filename.".".$file->getClientOriginalExtension());

	    try {
		    $profile->update(['ProfilePicture'=>$filename.".".$file->getClientOriginalExtension()]);
	    }
	    catch(Exception $e) {
		    return response()->json(['error' => $e->getMessage()], 500);
	    }
	    return response()->json(['status' => 'OK']);
    }
}
