<?php

namespace App\Http\Controllers\Grader;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Campers;
use App\Questions;
use App\Answers;
use App\Scores;
use Auth;
use Illuminate\Contracts\Encryption\DecryptException;

class GradingController extends Controller
{
    public function getIndex()
    {
        $grader = Auth::user()->grader;
        if($grader->TeamID == 4)
        {
            $all = Campers::where('IsLock', '1')->get();
        }
        else
        {
            $all = Campers::where('IsLock', '1')->where('TeamID', $grader->TeamID)->get();
        }
        $answers = Scores::where('GraderID', $grader->GraderID)->pluck('AnswerID');
        $campers = Answers::whereIn('AnswerID', $answers)->pluck('CamperID')->unique();
        $completed = Campers::whereIn('CamperID', $campers)->get();
        $waitings = $all->diff($completed);
        return view('graders.grading')->withCompleted($completed)
                                    ->withWaitings($waitings);
    }

    public function getAnswer($secret)
    {
        try {
            $fbaccount = decrypt($secret);
        } catch (DecryptException $e) {
            return redirect('404-notfound');
        }
        $grader = Auth::user()->grader;
    	$camper = Campers::where('FacebookUniqueID', $fbaccount)->first();
        if($grader->TeamID == 4)
        {
            $answers = Answers::where('CamperID', $camper->CamperID)->where('QuestionID', '<', 3)->get();
            return view('graders.grading_central')->withCamper($camper)
                                                    ->withAnswers($answers);
        }
        else
        {
            if($camper->TeamID == $grader->TeamID)
            {
                $questions = Questions::where('TeamID', $camper->TeamID)->pluck('QuestionID');
                $questions = $questions->push(3)->push(4);
                $answers = Answers::where('CamperID', $camper->CamperID)->whereIn('QuestionID', $questions)->get();
                return view('graders.grading_check')->withCamper($camper)
                                                    ->withAnswers($answers);
            }
            else
            {
                return redirect('401-unauthorized');
            }
        }
    }

    public function postScore(Request $request)
    {
        try {
            $camper_id = decrypt($request->secret);
        } catch (DecryptException $e) {
            return redirect('404-notfound');
        }
        $grader = Auth::user()->grader;
        foreach (array_combine($request->answers, $request->scores) as $answer => $score) {
            try {
                $answer_id = decrypt($answer);
            } catch (DecryptException $e) {
                return redirect('404-notfound');
            }
            $score = Scores::updateOrCreate(
                ['AnswerID' => $answer_id, 'GraderID' => $grader->GraderID],
                ['ScoreValue' => $score]
            );
        }
        return redirect('wearehiring/grading');
    }
}
