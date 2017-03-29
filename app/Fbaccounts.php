<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fbaccounts extends Model
{
    public $timestamps = false;
    protected $fillable = ['FacebookUniqueID', 'FacebookName', 'FacebookEmail', 'FacebookAvatar'];
}
