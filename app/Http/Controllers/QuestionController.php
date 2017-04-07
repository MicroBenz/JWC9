<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuthExceptions\JWTException;

use App\Questions;
use App\Answers;
use App\Teams;

class QuestionController extends Controller
{
    public function getTeamQuestionWithAnswer($team){

        $user = JWTAuth::parseToken()->authenticate();
        $profile = $user->profile()->first();
        
        $questions =  Teams::where('TeamName', $team)->first()->question()->get();
        foreach($questions as $question){
            unset($question['TeamID']);
            $answer = $question->answer()->where('CamperID', $profile['CamperID'])->first();
            $question['answer'] = $answer['AnswerText'];
        }
        return $questions;
    }

    public function answer(Request $request){

        $user = JWTAuth::parseToken()->authenticate();
        $profile = $user->profile()->first();

        $answers = $request->all();

        $update_data = array();
        $create_data = array();
        
        $recent_answers = Answers::where('CamperID', $profile['CamperID'])->pluck('QuestionID', 'AnswerID')->toArray();
        $i = 0;

        foreach($answers as $answer){
            if(!array_search($answer['QuestionID'], $recent_answers)){
                // $update_data[$i]['AnswerID'] = $answer['']
                $update_data[$i]['QuestionID'] = $answer['QuestionID'];
                $update_data[$i]['AnswerText'] = $answer['AnswerText'];
                $update_data[$i]['CamperID'] = $profile['CamperID'];
                $i++;
            }
            else {
                Answers::where('QuestionID', $answer['QuestionID'])->where('CamperID', $profile['CamperID'])->update(['AnswerText'=>$answer['AnswerText']]);
            }
        }

        // dd($update_data);
        
        try {
            Answers::insert($update_data);
        }
        catch(Exception $e) {
            return response()->json(['error'=>$e->getMessage()], 500);
        }

        return response()->json(['status'=>'OK']);
    }
}
