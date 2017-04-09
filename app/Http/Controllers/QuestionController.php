<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuthExceptions\JWTException;
use Storage;

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
            if($question['QuestionID'] == 7) 
                $question['answer'] = Storage::url('public'.'/'.$answer['AnswerText']);
        }
        return $questions;
    }

    public function answer(Request $request){

        $user = JWTAuth::parseToken()->authenticate();
        $profile = $user->profile()->first();

        if($user->camper()->first()['IsLock']){
            return response()->json(['error'=> "ไม่สามารถแก้ไขข้อมูลได้"]);
        }

        $answers = $request->all();

        $update_data = array();
        $create_data = array();
        
        $recent_answers = Answers::where('CamperID', $profile['CamperID'])->pluck('QuestionID')->unique()->toArray();
        $i = 0;

        foreach($answers as $answer){
            if(is_null($answer['AnswerText']) || $answer['AnswerText'] == "") continue;
            if(!in_array($answer['QuestionID'], $recent_answers)){
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

    public function uploadPictureAnswer(Request $request){
        $user = JWTAuth::parseToken()->authenticate();
        $profile = $user->profile()->first();

        if($user->camper()->first()['IsLock']){
            return response()->json(['error'=> "ไม่สามารถแก้ไขข้อมูลได้"]);
        }

        $file = $request->file('designAttachment');
        $data['errorMessage'] = '';
        $checkMimeType = false;
        $allowMimeType = ['image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/gif'];

        foreach($allowMimeType as $mime){
            $checkMimeType = $checkMimeType || ($file->getMimeType() == $mime);
        }
        if(!$checkMimeType){
            // $data['errorMessage'] .= "ไฟล์ภาพต้องเป็น JPG, PNG หรือ GIF เท่านั้น<br>";
            return response()->json(['error'=> "ไฟล์ภาพต้องเป็น JPG, PNG หรือ GIF เท่านั้น"]);
        }
        if($file->getClientSize() > 2100000){
            // $data['errorMessage'] .= "ไฟล์ภาพต้องไม่ใหญ่กว่า 2MB";
            return response()->json(['error'=> "ไฟล์ภาพต้องไม่ใหญ่กว่า 2MB"]);
        }

        $design_answer = Answers::where('QuestionID', 7)->where('CamperID', $profile['CamperID'])->first();

        if(!is_null($design_answer)){
            Storage::delete('public/'.$design_answer->AnswerText);
        }

        $filename = "Design-".$user->FacebookUniqueID.date("YmdHis");

        $path = $file->storeAs('public', $filename.".".$file->getClientOriginalExtension());

        try {
            Answers::create(['QuestionID'=>7, 'CamperID'=>$profile['CamperID'], 'AnswerText'=> $filename.".".$file->getClientOriginalExtension()]);
            // $profile->update(['ProfilePicture'=>$filename.".".$file->getClientOriginalExtension()]);
        }
        catch(Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return response()->json(['status' => 'OK']);
    }
}
