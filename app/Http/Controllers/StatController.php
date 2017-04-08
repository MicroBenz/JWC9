<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campers;

class StatController extends Controller
{
    public function getTeamRegisterAmount() {
        $campers = Campers::all();
        $content = 0;
        $design = 0;
        $marketing = 0;
        foreach($campers as $camper){
            if($camper['IsLock'] && $camper->team()->first()['TeamName']=='content'){
                $content++;
            }
            else if($camper['IsLock'] && $camper->team()->first()['TeamName']=='design'){
                $design++;
            }
            else if($camper['IsLock'] && $camper->team()->first()['TeamName']=='marketing'){
                $marketing++;
            }
        }

        return response()->json(compact('content', 'design', 'marketing'));
    }
}
