<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'AnswerID';
    protected $fillable = ['CamperID', 'AnswerID', 'QuestionID', 'AnswerText', 'Attachment'];
}
