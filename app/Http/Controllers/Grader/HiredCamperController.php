<?php

namespace App\Http\Controllers\Grader;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Announcement;
use DB;

class HiredCamperController extends Controller
{
    public function index ()
    {
	    return view('graders.nongnarak')->with([
	    	'qualifies' => Announcement::join('profiles', 'profiles.CamperID', '=', 'announcements.CamperID')->get()
	    ]);
    }
}
