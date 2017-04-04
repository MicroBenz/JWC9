<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuthExceptions\JWTException;
use App\Profiles;
use App\Schools;
use App\Provinces;
use App\Campers;

class ProfileController extends Controller
{
    public function getProfile() {
        $user = JWTAuth::parseToken()->authenticate();
        $profile = $user->profile()->first();
        return response()->json(compact('profile'));
    }

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


        try {
            $file = $request->file('ProfilePicture');
            $data['errorMessage'] = '';
            $checkMimeType = false;
            $allowMimeType = ['image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/gif'];

            foreach($allowMimeType as $mime){
                $checkMimeType = $checkMimeType || ($file->getMimeType() == $mime);
            }
            if(!$checkMimeType){
                // $data['errorMessage'] .= "ไฟล์ภาพต้องเป็น JPG, PNG หรือ GIF เท่านั้น<br>";
                return response()->json(['error'=> "ไฟล์ภาพต้องเป็น JPG, PNG หรือ GIF เท่านั้น"]);
            }
            if($file->getClientSize() > 2100000){
                // $data['errorMessage'] .= "ไฟล์ภาพต้องไม่ใหญ่กว่า 2MB";
                return response()->json(['error'=> "ไฟล์ภาพต้องไม่ใหญ่กว่า 2MB"]);
            }

            $path = $request->file('ProfilePicture')->storeAs('ProfilePictures', $user->FacebookUniqueID);

            Profiles::create([
                'CamperID' => $camper_id,
                'FirstName' => $request->FirstName,
                'LastName' => $request->LastName,
                'FirstNameEN' => $request->FirstNameEN,
                'LastNameEN' => $request->LastNameEN,
                'Nickname' => $request->Nickname,
                'Birthday' => $request->Birthdat,
                'Gender' => $request->Gender,
                'SchoolID' => $school_id,
                'EducationLevel' => $request->EducationLevel,
                'EducationMajor' => $request->EducationMajor,
                'ShirtSize' => $request->ShirtSize,
                'Allergy' => $request->Allergy,
                'DrugAllergic' => $request->DrugAllergic,
                'FoodAllergic' => $request->FoodAllergic,
                'FoodType' => $request->FoodType,
                'Email' => $request->Email,
                'Telephone' => $request->Telephone,
                'ProvinceID' => $province_id,
                'BloodType' => $request->BloodType,
                'EmergencyContact' => $request->EmergencyContact,
                'EmergencyTel' => $request->EmergencyTel,
                'EmergencyRelation' => $request->EmergencyRelation,
                'Activities' => $request->Activities,
                'ProfilePicture' => $user->FacebookUniqueID
            ]);
        } 
        catch(Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return response()->json(['camper_id' => $camper_id]);
    }

    public function updateProfile() {
        $user = JWTAuth::parseToken()->authenticate();
        $profile = $user->profile()->first();

        if(!Schools::where('SchoolName', $request->SchoolName)->exists()) {
            Schools::create(['SchoolName'=>$request->SchoolName]);
        }
        if(!Provinces::where('ProvinceName', $request->ProvinceName)->exists()) {
            Provinces::create(['ProvinceName'=>$request->ProvinceName]);
        }
        $school_id = Schools::where('SchoolName', $request->SchoolName)->first()['SchoolID'];
        $province_id = Provinces::where('ProvinceName', $request->ProvinceName)->first()['ProvinceID'];
        
        try {
            $file = $request->file('ProfilePicture');
            $data['errorMessage'] = '';
            $checkMimeType = false;
            $allowMimeType = ['image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/gif'];

            foreach($allowMimeType as $mime){
                $checkMimeType = $checkMimeType || ($file->getMimeType() == $mime);
            }
            if(!$checkMimeType){
                // $data['errorMessage'] .= "ไฟล์ภาพต้องเป็น JPG, PNG หรือ GIF เท่านั้น<br>";
                return response()->json(['error'=> "ไฟล์ภาพต้องเป็น JPG, PNG หรือ GIF เท่านั้น"]);
            }
            if($file->getClientSize() > 2100000){
                // $data['errorMessage'] .= "ไฟล์ภาพต้องไม่ใหญ่กว่า 2MB";
                return response()->json(['error'=> "ไฟล์ภาพต้องไม่ใหญ่กว่า 2MB"]);
            }

            $path = $request->file('ProfilePicture')->storeAs('ProfilePictures', $user->FacebookUniqueID);

            $profile = $user->profile()->update([
                'CamperID' => $camper_id,
                'FirstName' => $request->FirstName,
                'LastName' => $request->LastName,
                'FirstNameEN' => $request->FirstNameEN,
                'LastNameEN' => $request->LastNameEN,
                'Nickname' => $request->Nickname,
                'Birthday' => $request->Birthdat,
                'Gender' => $request->Gender,
                'SchoolID' => $school_id,
                'EducationLevel' => $request->EducationLevel,
                'EducationMajor' => $request->EducationMajor,
                'ShirtSize' => $request->ShirtSize,
                'Allergy' => $request->Allergy,
                'DrugAllergic' => $request->DrugAllergic,
                'FoodAllergic' => $request->FoodAllergic,
                'FoodType' => $request->FoodType,
                'Email' => $request->Email,
                'Telephone' => $request->Telephone,
                'ProvinceID' => $province_id,
                'BloodType' => $request->BloodType,
                'EmergencyContact' => $request->EmergencyContact,
                'EmergencyTel' => $request->EmergencyTel,
                'EmergencyRelation' => $request->EmergencyRelation,
                'Activities' => $request->Activities,
                'ProfilePicture' => $user->FacebookUniqueID
            ]);
        } 
        catch(Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return response()->json(['status' => 'OK']);

    }

    public function lockProfile($camper_id) {
        
        try {
            $camper = Campers::find($camper_id);
            $camper->isLock = true;
            $camper->save();
        }
        catch(Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return response()->json(['status' => 'OK']);

    }
}
