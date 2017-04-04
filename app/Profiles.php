<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    public $timestamps = false;
    private $fillable = [
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
        'activities',
        'ProfilePicture'
        ];
        
}
