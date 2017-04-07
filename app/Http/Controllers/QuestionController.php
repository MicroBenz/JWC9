<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Questions;
use App\Teams;

class QuestionController extends Controller
{
    public function getCentralQuestion(){
       $questions =  Teams::where('TeamName', 'central')->first()->question()->get();
       foreach($questions as $question){
           unset($question['TeamID']);
       }
       return $questions;
    }
}
