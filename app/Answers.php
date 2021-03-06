<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Answers extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'AnswerID';
    protected $fillable = ['CamperID', 'AnswerID', 'QuestionID', 'AnswerText', 'Attachment'];

    public function question() {
        return $this->belongsTo('App\Questions', 'QuestionID');
    }

    public function scoreByGrader()
	{
		return $this->hasMany('App\Scores', 'AnswerID')
					->where('GraderID', Auth::user()->grader->GraderID);
	}
}
