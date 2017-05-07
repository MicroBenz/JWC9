<?php

namespace App\Http\Controllers;

use App\Announcement;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AnnouncementController extends Controller
{
    public function uploadSlip (Request $request, $facebookUniqueID) {
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
	    if($file->getClientSize() > 4100000){
		    // $data['errorMessage'] .= "ไฟล์ภาพต้องไม่ใหญ่กว่า 2MB";
		    return ['error'=> "ไฟล์ภาพต้องไม่ใหญ่กว่า 4MB"];
	    }

	    $user = Announcement::where('facebookUniqueID', $facebookUniqueID)->firstOrFail();

	    $filename = $user->FacebookUniqueID.'-'.date("YmdHis"); // String Concaternation
	    $filename = $filename.".".$file->getClientOriginalExtension();

	    $path = $file->storeAs('public/slip',  $filename);

	    try {
	    	$user::where('facebookUniqueID', $user->FacebookUniqueID)->update([
	    		    'Slip' => $filename,
			        'Checked' => 'รอการตรวจสอบ'
		        ]);
	    }
	    catch(Exception $e) {
		    return response()->json(['error' => $e->getMessage()], 500);
	    }
	    return response()->json(['status' => 'OK']);
    }
}
