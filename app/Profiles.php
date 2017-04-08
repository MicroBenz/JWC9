<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'CamperID';
    protected $fillable = [
        'CamperID',
        'FirstName',
        'LastName',
        'FirstNameEN',
        'LastNameEN',
        'Nickname',
        'Birthday',
        'Gender',
        'Religion',
        'SchoolID',
        'EducationLevel',
        'EducationMajor',
        'ShirtSize',
        'Allergy',
        'DrugAllergic',
        'FoodAllergic',
        'FoodType',
        'Email',
        'Telephone',
        'ProvinceID',
        'BloodType',
        'EmergencyContact',
        'EmergencyTel',
        'EmergencyRelation',
        'ProfilePicture'
        ];
    
    public function school(){
        return $this->belongsTo('App\Schools', 'SchoolID', 'SchoolID');
    }

    public function province(){
        return $this->belongsTo('App\Provinces', 'ProvinceID', 'ProvinceID');
    }
}
