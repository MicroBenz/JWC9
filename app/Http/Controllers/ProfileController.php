<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profiles;
use App\Schools;
use App\Provinces;

class ProfileController extends Controller
{
    public function createProfile(Request $request) {
        $user = JWTAuth::parseToken()->authenticate();
        $camper_id = ($user->camper)['CamperID'];
        
        if(!Schools::where('SchoolName', $request->SchoolName)->exists()) {
            Schools::create(['SchoolName'=>$request->SchoolName]);
        }
        if(!Provinces::where('ProvinceName', $request->ProvinceName)->exists()) {
            Provinces::create(['ProvinceName'=>$request->ProvinceName]);
        }
        $school_id = Schools::where('SchoolName', $request->SchoolName)->first()['SchoolID'];
        $province_id = Provinces::where('ProvinceName', $request->ProvinceName)->first()['ProvinceID'];
        
        $profile = new Profiles();
        $profile->CamperID = $camper_id;
        $profile->FirstName = $request->FirstName;
        $profile->LastName = $request->LastName;
        $profile->FirstNameEN = $request->FirstNameEN;
        $profile->LastNameEN = $request->LastNameEN;
        $profile->Nickname = $request->Nickname;
        $profile->Birthday = $request->Birthday;
        $profile->Gender = $request->Gender;
        $profile->SchoolID = $school_id;
        $profile->EducationLevel = $request->EducationLevel;
        $profile->EducationMajor = $request->EducationMajor;
        $profile->ShirtSize = $request->ShirtSize;
        $profile->Allergy = $request->Allergy;
        $profile->DrugAllergic = $request->DrugAllergic;
        $profile->FoodAllergic = $request->FoodAllergic;
        $profile->FoodType = $request->FoodType;
        $profile->Email = $request->Email;
        $profile->Telephone = $request->Telephone;
        $profile->ProvinceID = $province_id;
        $profile->BloodType = $request->BloodType;
        $profile->EmergencyContact = $request->EmergencyContact;
        $profile->EmergencyTel = $request->EmergencyTel;
        $profile->EmergencyRelation = $request->EmergencyRelation;
        $profile->activities = $request->activities;

        $file = $request->file('ProfilePicture-pic');
        $data['errorMessage'] = '';
        $checkMimeType = false;
        $allowMimeType = ['image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/gif'];

        foreach($allowMimeType as $mime){
            $checkMimeType = $checkMimeType || ($file->getMimeType() == $mime);
        }
        if(!$checkMimeType){
            $data['errorMessage'] .= "ไฟล์ภาพต้องเป็น JPG, PNG หรือ GIF เท่านั้น<br>";
        }
        if($file->getClientSize() > 2100000){
            $data['errorMessage'] .= "ไฟล์ภาพต้องไม่ใหญ่กว่า 2MB";
        }
 
        // Return If Error
        if($data['errorMessage']){
            return $data['errorMessage'];
        }
 
        $path = $request->file('ProfilePicture')->storeAs('ProfilePictures', $user->FacebookUniqueID);
        $profile->ProfilePicture = $user->FacebookUniqueID;

        $profile->save();

        return "success";
    }
}
