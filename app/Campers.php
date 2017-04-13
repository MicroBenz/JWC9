<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campers extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'CamperID';
    protected $fillable = ['FacebookUniqueID','TeamID', 'IsLock'];

    public function team() {
        return $this->belongsTo('App\Teams', 'TeamID', 'TeamID');
    }

    public function profile() {
        return $this->hasOne('App\Profiles', 'CamperID');
    }

    public function fbaccount() {
        return $this->belongsTo('App\Fbaccounts', 'FacebookUniqueID');
    }

    public function answers() {
        return $this->hasMany('App\Answers', 'CamperID');
    }
}
