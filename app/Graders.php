<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graders extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'GraderID';
    protected $fillable = ['GraderID', 'FacebookUniqueID', 'FirstName', 'LastName', 'Email', 'TeamID'];

    public function fbaccount() {
        return $this->belongsTo('App\Fbaccounts', 'FacebookUniqueID');
    }
}
