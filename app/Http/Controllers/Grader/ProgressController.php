<?php

namespace App\Http\Controllers\Grader;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Scores;
use App\Graders;
use App\Campers;
use App\Questions;
use Auth;

class ProgressController extends Controller
{
    public function getIndex()
    {
        $content = collect();
        $design = collect();
        $market = collect();
        for ($i=1; $i < 4; $i++) { 
            $graders = Graders::where('TeamID', $i)->get();
            $countcamp = Campers::where('TeamID', $i)->where('IsLock', 1)->count();
            $sumques = Questions::where('TeamID', $i)->sum('Criteria');
            $sumgrader = collect();
            foreach ($graders as $grader) {
                $tmpgrader = collect();
                $tmpgrader->put('grader', $grader->fbaccount);
                $tmpgrader->put('percentnow', ((Scores::where('GraderID', $grader->GraderID)->count()/$sumques)*100)/$countcamp);

                $sumgrader->push($tmpgrader);
            }

            $percentnow = $sumgrader->sum('percentnow')/$graders->count();
            if($i == 1)
            {
                $content->put('graders', $sumgrader);
                $content->put('percentnow', $percentnow);
            }
            if($i == 2)
            {
                $design->put('graders', $sumgrader);
                $design->put('percentnow', $percentnow);
            }
            if($i == 3)
            {
                $market->put('graders', $sumgrader);
                $market->put('percentnow', $percentnow);
            }
        }
        $all = ($content["percentnow"]+$design["percentnow"]+$market["percentnow"])/3;
        return view('graders.progress')->withAll($all)
                                        ->withContent($content)
                                        ->withDesign($design)
                                        ->withMarket($market);
    }

}
