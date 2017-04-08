<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'TeamID';
    protected $fillable = ['TeamID', 'TeamName'];

    public function question() {
        return $this->hasMany('App\Questions', 'TeamID', 'TeamID');
    }
}
