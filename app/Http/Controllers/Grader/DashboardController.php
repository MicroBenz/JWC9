<?php

namespace App\Http\Controllers\Grader;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Campers;

class DashboardController extends Controller
{
    public function getIndex()
    {
    	$all = Campers::count();
    	$submit = Campers::where('IsLock', 1)->count();
    	// $team = Campers::select('TeamID', DB::raw('count(*) as total'))->where('IsLock', 1)->groupBy('TeamID')->get();
    	$content = Campers::where('IsLock', 1)->where('TeamID', 1)->count();
    	$designer = Campers::where('IsLock', 1)->where('TeamID', 2)->count();
    	$marketing = Campers::where('IsLock', 1)->where('TeamID', 3)->count();
        return view('graders.dashboard')->withAll($all)
        								->withSubmit($submit)
        								->withContent($content)
        								->withDesigner($designer)
        								->withMarketing($marketing);
    }
}
