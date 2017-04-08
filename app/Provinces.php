<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
    public $timestamps = false;
    protected $primaryKey = "ProvinceID";
    protected $fillable = ['ProvinceID', 'ProvinceName'];
}
