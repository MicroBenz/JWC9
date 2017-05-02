<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scores extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'ScoreID';
    protected $fillable = ['ScoreID', 'GraderID', 'AnswerID', 'Criteria', 'ScoreValue'];
}
