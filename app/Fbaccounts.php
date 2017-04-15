<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Fbaccounts extends Authenticatable
{
    use Notifiable;

    public $timestamps = false;
    protected $primaryKey = 'FacebookUniqueID';
    public $incrementing = false;
    protected $fillable = ['FacebookUniqueID', 'FacebookName', 'FacebookEmail', 'FacebookAvatar'];

    public function camper(){
        return $this->hasOne('App\Campers', 'FacebookUniqueID', 'FacebookUniqueID');
    }

    public function profile() {
        return $this->belongsToMany('App\Profiles', 'campers', 'FacebookUniqueID', 'CamperID');
    }

    public function grader() {
        return $this->hasOne('App\Graders', 'FacebookUniqueID', 'FacebookUniqueID');
    }
}
