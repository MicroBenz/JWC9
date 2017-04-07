<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'QuestionID';

    public function answer() {
        return $this->hasMany('App\Answers', 'QuestionID', 'QuestionID');
    }
}
