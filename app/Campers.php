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
}
