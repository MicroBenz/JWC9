<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'QuestionID';
    protected $fillable = ['QuestionText', 'QuestionNumber', 'TeamID'];

    public function answer() {
        return $this->hasMany('App\Answers', 'QuestionID', 'QuestionID');
    }
}
