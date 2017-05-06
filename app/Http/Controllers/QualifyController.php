<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campers;
use App\Scores;

class QualifyController extends Controller
{
    public function getQualifies ()
    {
	    /*$campers = Campers::where('IsLock', 1)->get();
	    foreach ($campers as $camper) {

	    	$answers = $camper->answers;
		    $verify = $answers->where('QuestionID', 1)->first()->AnswerID;

	    	switch ($camper->TeamID) {
			    case 1 : $answers = $answers->whereIn('QuestionID', [5, 6]);
			    case 2 : $answers = $answers->whereIn('QuestionID', [7, 8]);
			    case 3 : $answers = $answers->whereIn('QuestionID', [9, 10]);
		    }

		    $answersID = $answers->pluck('AnswerID');
		    $scores = Scores::whereIn('AnswerID', $answersID)->get();


		    $verify = Scores::where('AnswerID', $verify)->get();

			if ( $scores->isNotEmpty() ) {
				$groupedScoresByAnswerID = $scores->groupBy('AnswerID')->values();

				$tempScore = [];
				$totalScore = 0;

				foreach ($groupedScoresByAnswerID as $groupedScore) {
					$sum = $groupedScore->sum('ScoreValue');
					$divide = $groupedScore->count();
					$score = $sum/$divide;
					$totalScore += $score;
					array_push($tempScore, ["ScoreValue" => $score]);
				}

				$camper->scores = $tempScore;
				$camper->totalScore = $totalScore;


				echo "<pre>".var_export($camper->totalScore, true)."</pre>";
			}

	    }*/


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


	    echo "<pre>".var_export($contents, true)."</pre>";
	    exit();
    }
}
