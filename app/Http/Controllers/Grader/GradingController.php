<?php

namespace App\Http\Controllers\Grader;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Campers;
use App\Questions;
use App\Answers;
use App\Scores;
use Illuminate\Contracts\Encryption\DecryptException;

class GradingController extends Controller
{
    public function getIndex()
    {
    	$all = Campers::where('IsLock', '1')->where('TeamID', 3)->get();
        $answers = Scores::where('GraderID', 2)->pluck('AnswerID');
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
    	$camper = Campers::where('FacebookUniqueID', $fbaccount)->first();
        if($camper->TeamID == 3)
        {
            $questions = Questions::where('TeamID', $camper->TeamID)->pluck('QuestionID');
            $answers = Answers::where('CamperID', $camper->CamperID)->whereIn('QuestionID', $questions)->get();
            return view('graders.grading_check')->withCamper($camper)
                                                ->withAnswers($answers);
        }
        else
        {
            return redirect('401-unauthorized');
        }
    }

    public function postScore(Request $request)
    {
        try {
            $camper_id = decrypt($request->secret);
        } catch (DecryptException $e) {
            return redirect('404-notfound');
        }
        foreach (array_combine($request->answers, $request->scores) as $answer => $score) {
            try {
                $answer_id = decrypt($answer);
            } catch (DecryptException $e) {
                return redirect('404-notfound');
            }
            $score = Scores::updateOrCreate(
                ['AnswerID' => $answer_id, 'GraderID' => 2],
                ['ScoreValue' => $score]
            );
        }
        return redirect('wearehiring/grading');
    }
}
