<?php

namespace App\Http\Controllers\Grader;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Campers;
use App\Scores;
use Log;

class RankController extends Controller
{
    public function getIndex()
    {
        $contents = collect();
        $markets = collect();
        $designs = collect();
        $campers = Campers::where('IsLock', 1)->get();
        foreach ($campers as $camper) {
            $answers = $camper->answers;
            $verify = $answers->where('QuestionID', 1)->first();
            if($camper->TeamID == 1)
            {
                $answers = $answers->whereIn('QuestionID', [5, 6]);
            }
            if($camper->TeamID == 2)
            {
                $answers = $answers->whereIn('QuestionID', [7, 8]);
            }
            if($camper->TeamID == 3)
            {
                $answers = $answers->whereIn('QuestionID', [9, 10]);
            }
            $answers_id = $answers->pluck('AnswerID');
            $scores = Scores::whereIn('AnswerID', $answers_id)->get();
            $verify = Scores::where('AnswerID', $verify->AnswerID)->get();
            if(!$scores->isEmpty())
            {
                $tmp_score = array();
                $total = 0;
                $grouped = $scores->groupBy('AnswerID')->values();
                foreach ($grouped as $group) {
                    $sum = $group->sum('ScoreValue');
                    $divide = $group->count();
                    $score = $sum/$divide;
                    $total += $score;
                    array_push($tmp_score, array("ScoreValue" => $score));
                }
                $camper->scores = $tmp_score;
                $camper->total = $total;

                if(!$verify->isEmpty())
                {
                    $passed = 'fail';
                    if($verify->sum('ScoreValue')/$verify->count() == 1)
                    {
                        $passed = 'pass';
                    }
                    $camper->verify = $passed;
                }

                if($camper->TeamID == 1)
                {
                    $contents->push($camper);
                }
                if($camper->TeamID == 2)
                {
                    $designs->push($camper);
                }
                if($camper->TeamID == 3)
                {
                    $markets->push($camper);
                }
            }
        }
        $contents = $contents->sortByDesc('total');
        $contents = $contents->values()->all();
        $designs = $designs->sortByDesc('total');
        $designs = $designs->values()->all();
        $markets = $markets->sortByDesc('total');
        $markets = $markets->values()->all();
        return view('graders.rank')->withContents($contents)
                                    ->withDesigns($designs)
                                    ->withMarkets($markets);
    }

    public function getRankAPI()
    {
        $contents = collect();
        $markets = collect();
        $designs = collect();
        $campers = Campers::where('IsLock', 1)->get();
        foreach ($campers as $camper) {
            $answers = $camper->answers;
            $verify = $answers->where('QuestionID', 1)->first();
            if($camper->TeamID == 1)
            {
                $answers = $answers->whereIn('QuestionID', [5, 6]);
            }
            if($camper->TeamID == 2)
            {
                $answers = $answers->whereIn('QuestionID', [7, 8]);
            }
            if($camper->TeamID == 3)
            {
                $answers = $answers->whereIn('QuestionID', [9, 10]);
            }
            $answers_id = $answers->pluck('AnswerID');
            $scores = Scores::whereIn('AnswerID', $answers_id)->get();
            $verify = Scores::where('AnswerID', $verify->AnswerID)->get();
            if(!$scores->isEmpty())
            {
                $tmp_score = array();
                $total = 0;
                $grouped = $scores->groupBy('AnswerID')->values();
                foreach ($grouped as $group) {
                    $sum = $group->sum('ScoreValue');
                    $divide = $group->count();
                    $score = $sum/$divide;
                    $total += $score;
                    array_push($tmp_score, array("ScoreValue" => $score));
                }
                $camper->scores = $tmp_score;
                $camper->total = $total;

                if(!$verify->isEmpty())
                {
                    $passed = 'fail';
                    if($verify->sum('ScoreValue')/$verify->count() == 1)
                    {
                        $passed = 'pass';
                    }
                    $camper->verify = $passed;
                }
                $profile = $camper->profile()->first();
                $toInsert = [
                    'camper' => [
                        'FirstName' => $profile->FirstName,
                        'LastName' => $profile->LastName
                    ],
                    'total' => $camper->total
                ];
                if($camper->TeamID == 1)
                {
                    $contents->push($toInsert);
                }
                if($camper->TeamID == 2)
                {
                    $designs->push($toInsert);
                }
                if($camper->TeamID == 3)
                {
                    $markets->push($toInsert);
                }
            }
        }
        $contents = $contents->sortByDesc('total');
        $contents = $contents->values()->take(14);
        $designs = $designs->sortByDesc('total');
        $designs = $designs->values()->take(14);
        $markets = $markets->sortByDesc('total');
        $markets = $markets->values()->take(14);
        // $designs = $designs->sortByDesc('total');
        // $designs = $designs->values()->all();
        // $markets = $markets->sortByDesc('total');
        // $markets = $markets->values()->all();
        return response()->json(compact('contents', 'designs', 'markets'));
        // return response()->json(compact('contents'));
    }
}
