<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Questions;
use App\Teams;

class QuestionController extends Controller
{
    public function getTeamQuestion($team){
       $questions =  Teams::where('TeamName', $team)->first()->question()->get();
       foreach($questions as $question){
           unset($question['TeamID']);
       }
       return $questions;
    }


}
