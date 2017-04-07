<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'TeamID';

    public function question() {
        return $this->hasMany('App\Questions', 'TeamID', 'TeamID');
    }
}
