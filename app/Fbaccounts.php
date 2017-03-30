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
}
