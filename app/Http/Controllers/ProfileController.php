<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use JWTAuth;
use Tymon\JWTAuthExceptions\JWTException;
use App\Profiles;
use App\Schools;
use App\Provinces;
use App\Campers;
use App\Questions;
use App\Teams;

class ProfileController extends Controller
{
    public function getProfile() {
        $user = JWTAuth::parseToken()->authenticate();
        $profile = $user->profile()->first();
        $profile['SchoolName'] = $profile->school()->first()['SchoolName'];
        $profile['ProvinceName'] = $profile->province()->first()['ProvinceName'];
        $profile['Team'] = $profile->team()->first()['TeamName'];
        $profile['ProfilePicture'] = is_null($profile->ProfilePicture)? null:Storage::url('public'.'/'.$profile->ProfilePicture);
        unset($profile['ProvinceID']);
        unset($profile['SchoolID']);
        return response()->json(compact('profile'));
    }

    public function createProfile(Request $request) {
        $user = JWTAuth::parseToken()->authenticate();
        $camper_id = $user->camper->first()['CamperID'];

        $data = $request->all();
        
        if(array_key_exists('SchoolName', $data)) {
            if(!Schools::where('SchoolName', $data['SchoolName'])->exists()) {
                Schools::create(['SchoolName'=> $data['SchoolName']]);
            }
            $data['SchoolID'] = Schools::where('SchoolName', $data['SchoolName'])->first()['SchoolID'];
            unset($data['SchoolName']);
        }

        if(array_key_exists('ProvinceName', $data)) {
            if(!Provinces::where('ProvinceName', $data['ProvinceName'])->exists()) {
                Provinces::create(['ProvinceName'=>$data['ProvinceName']]);
            }
            $data['ProvinceID'] = Provinces::where('ProvinceName', $data['ProvinceName'])->first()['ProvinceID'];
            unset($data['ProvinceName']);
        }

        try {
            // $file = $request->file('ProfilePicture');
            // $data['errorMessage'] = '';
            // $checkMimeType = false;
            // $allowMimeType = ['image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/gif'];

            // foreach($allowMimeType as $mime){
            //     $checkMimeType = $checkMimeType || ($file->getMimeType() == $mime);
            // }
            // if(!$checkMimeType){
            //     // $data['errorMessage'] .= "ไฟล์ภาพต้องเป็น JPG, PNG หรือ GIF เท่านั้น<br>";
            //     return response()->json(['error'=> "ไฟล์ภาพต้องเป็น JPG, PNG หรือ GIF เท่านั้น"]);
            // }
            // if($file->getClientSize() > 2100000){
            //     // $data['errorMessage'] .= "ไฟล์ภาพต้องไม่ใหญ่กว่า 2MB";
            //     return response()->json(['error'=> "ไฟล์ภาพต้องไม่ใหญ่กว่า 2MB"]);
            // }

            // $path = $request->file('ProfilePicture')->storeAs('ProfilePictures', $user->FacebookUniqueID);

            // $data['ProfilePicture'] = $user->FacebookUniqueID;

            // Profiles::create([
            //     'CamperID' => $camper_id,
            //     'FirstName' => $request->FirstName,
            //     'LastName' => $request->LastName,
            //     'FirstNameEN' => $request->FirstNameEN,
            //     'LastNameEN' => $request->LastNameEN,
            //     'Nickname' => $request->Nickname,
            //     'Birthday' => $request->Birthdat,
            //     'Gender' => $request->Gender,
            //     'SchoolID' => $school_id,
            //     'EducationLevel' => $request->EducationLevel,
            //     'EducationMajor' => $request->EducationMajor,
            //     'ShirtSize' => $request->ShirtSize,
            //     'Allergy' => $request->Allergy,
            //     'DrugAllergic' => $request->DrugAllergic,
            //     'FoodAllergic' => $request->FoodAllergic,
            //     'FoodType' => $request->FoodType,
            //     'Email' => $request->Email,
            //     'Telephone' => $request->Telephone,
            //     'ProvinceID' => $province_id,
            //     'BloodType' => $request->BloodType,
            //     'EmergencyContact' => $request->EmergencyContact,
            //     'EmergencyTel' => $request->EmergencyTel,
            //     'EmergencyRelation' => $request->EmergencyRelation,
            //     'Activities' => $request->Activities,
            //     'ProfilePicture' => $user->FacebookUniqueID
            // ]);
            Profiles::create($data);
        } 
        catch(Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return response()->json(['camper_id' => $camper_id]);
    }

    public function updateProfile(Request $request) {
        $user = JWTAuth::parseToken()->authenticate();
        $profile = $user->profile()->first();

        $data = $request->all();
        var_dump($user);

        if(array_key_exists('SchoolName', $data)) {
            if(!Schools::where('SchoolName', $data['SchoolName'])->exists()) {
                Schools::create(['SchoolName'=> $data['SchoolName']]);
            }
            $data['SchoolID'] = Schools::where('SchoolName', $data['SchoolName'])->first()['SchoolID'];
            unset($data['SchoolName']);
        }

        if(array_key_exists('ProvinceName', $data)) {
            if(!Provinces::where('ProvinceName', $data['ProvinceName'])->exists()) {
                Provinces::create(['ProvinceName'=>$data['ProvinceName']]);
            }
            $data['ProvinceID'] = Provinces::where('ProvinceName', $data['ProvinceName'])->first()['ProvinceID'];
            unset($data['ProvinceName']);
        }
        try {
            // if(array_key_exists('ProfilePicture', $data)) {
            //     $file = $request->file('ProfilePicture');
            //     $data['errorMessage'] = '';
            //     $checkMimeType = false;
            //     $allowMimeType = ['image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/gif'];

            //     foreach($allowMimeType as $mime){
            //         $checkMimeType = $checkMimeType || ($file->getMimeType() == $mime);
            //     }
            //     if(!$checkMimeType){
            //         // $data['errorMessage'] .= "ไฟล์ภาพต้องเป็น JPG, PNG หรือ GIF เท่านั้น<br>";
            //         return response()->json(['error'=> "ไฟล์ภาพต้องเป็น JPG, PNG หรือ GIF เท่านั้น"]);
            //     }
            //     if($file->getClientSize() > 2100000){
            //         // $data['errorMessage'] .= "ไฟล์ภาพต้องไม่ใหญ่กว่า 2MB";
            //         return response()->json(['error'=> "ไฟล์ภาพต้องไม่ใหญ่กว่า 2MB"]);
            //     }

            //     $path = $request->file('ProfilePicture')->storeAs('ProfilePictures', $user->FacebookUniqueID);

            //     $data['ProfilePicture'] = $user->FacebookUniqueID;
            // }
            $profile->update($data);

            // $profile = $user->profile()->update([
            //     'CamperID' => $camper_id,
            //     'FirstName' => $request->FirstName,
            //     'LastName' => $request->LastName,
            //     'FirstNameEN' => $request->FirstNameEN,
            //     'LastNameEN' => $request->LastNameEN,
            //     'Nickname' => $request->Nickname,
            //     'Birthday' => $request->Birthdat,
            //     'Gender' => $request->Gender,
            //     'SchoolID' => $school_id,
            //     'EducationLevel' => $request->EducationLevel,
            //     'EducationMajor' => $request->EducationMajor,
            //     'ShirtSize' => $request->ShirtSize,
            //     'Allergy' => $request->Allergy,
            //     'DrugAllergic' => $request->DrugAllergic,
            //     'FoodAllergic' => $request->FoodAllergic,
            //     'FoodType' => $request->FoodType,
            //     'Email' => $request->Email,
            //     'Telephone' => $request->Telephone,
            //     'ProvinceID' => $province_id,
            //     'BloodType' => $request->BloodType,
            //     'EmergencyContact' => $request->EmergencyContact,
            //     'EmergencyTel' => $request->EmergencyTel,
            //     'EmergencyRelation' => $request->EmergencyRelation,
            //     'Activities' => $request->Activities,
            //     'ProfilePicture' => $user->FacebookUniqueID
            // ]);
        } 
        catch(Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return response()->json(['status' => 'OK']);

    }

    public function updateProfilePicture(Request $request) {

        $user = JWTAuth::parseToken()->authenticate();
        $profile = $user->profile()->first();

        if($user->camper->first()['IsLock']){
            return response()->json(['error'=> "ไม่สามารถแก้ไขข้อมูลได้"]);
        }

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

        if(!is_null($profile['ProfilePicture'])){
            Storage::delete('public/'.$profile->ProfilePicture);
        }

        $filename = $user->FacebookUniqueID.date("YmdHis");

        $path = $file->storeAs('public', $filename.".".$file->getClientOriginalExtension());

        try {
            $profile->update(['ProfilePicture'=>$filename.".".$file->getClientOriginalExtension()]);
        }
        catch(Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return response()->json(['status' => 'OK']);
    }

    public function lockProfile() {

        $user = JWTAuth::parseToken()->authenticate();
        $camper = $user->camper()->first();
        $profile = $user->profile()->first()->toArray();

        // $can_lock = true;

        foreach($profile as $key=>$value) {
            if($key == 'pivot') continue;
            if($key == 'ProfilePicture' && is_null($value))
                return response()->json(['error'=>'ยังไม่ได้อัพโหลดรูปโปรไฟล์']);
            if(is_null($value))
                return response()->json(['error'=>'กรอกข้อมูลไม่ครบ']);
        }

        $central_questions =  Teams::where('TeamName', 'central')->first()->question()->get();
        foreach($central_questions as $question){
            $answer = $question->answer()->where('CamperID', $profile['CamperID'])->first();
            if(is_null($answer)) 
                return response()->json(['error'=>'กรอกข้อมูลไม่ครบ']);
        }

        $team_questions = Teams::where('TeamID', $camper['TeamID'])->first()->question()->get();
        foreach($team_questions as $question){
            $answer = $question->answer()->where('CamperID', $profile['CamperID'])->first();
            if(is_null($answer)) 
                return response()->json(['error'=>'กรอกข้อมูลไม่ครบ']);
        }

        // if(!$can_lock) {
        //     return response()->json(['error'=>'กรอกข้อมูลไม่ครบ']);
        // }
            
        $camper->isLock = true;
        $camper->save();

        
        // try {
        //     $camper = Campers::find($camper_id);
        //     $camper->isLock = true;
        //     $camper->save();
        // }
        // catch(Exception $e) {
        //     return response()->json(['error' => $e->getMessage()], 500);
        // }

        return response()->json(['status' => 'OK']);

    }
}
