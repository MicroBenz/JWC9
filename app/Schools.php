<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schools extends Model
{
    public $timestamps = false;
    protected $primaryKey = "SchoolID";
    protected $fillable = ['SchoolID', 'SchoolName'];
}
