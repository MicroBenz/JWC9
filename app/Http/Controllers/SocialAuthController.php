<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use JWTAuth;
use Tymon\JWTAuthExceptions\JWTException;
use App\Fbaccounts;
use App\Teams;
use App\Campers;
use App\Profiles;
use App\Graders;
use \Config;
use Socialite;
use Auth;

class SocialAuthController extends Controller
{
    public function redirect_for_login()
    {
        Config::set('services.facebook.redirect', env('FACEBOOK_REDIRECT_URL').'/wearehiring/login/callback');
        return Socialite::driver('facebook')->redirect();   
    }

    public function redirect_for_register($team)
    {
        Config::set('services.facebook.redirect', env('FACEBOOK_REDIRECT_URL').'/wearehiring/register'.'/'.$team.'/callback');
        return Socialite::driver('facebook')->redirect();   
    }   

    public function login()
    {
        Config::set('services.facebook.redirect', env('FACEBOOK_REDIRECT_URL').'/wearehiring/login/callback');
        $fb_user = Socialite::driver('facebook')->stateless()->user();
        $user = Fbaccounts::find($fb_user->getId());
        if(is_null($user)) return redirect('/wearehiring/login');
        $grader = $user->grader()->first();
        if(is_null($grader) ) return redirect('/wearehiring/login');

        Auth::loginUsingId($user['FacebookUniqueID']);
        return redirect('/wearehiring/grading');
    }

    public function register($team)
    {
        Config::set('services.facebook.redirect', env('FACEBOOK_REDIRECT_URL').'/wearehiring/register'.'/'.$team.'/callback');
        $fb_user = Socialite::driver('facebook')->stateless()->user();
        $user = Fbaccounts::find($fb_user->getId());
        $team_id = Teams::where('TeamName', $team)->first()['TeamID'];
        if(is_null($user)) 
            Fbaccounts::create(['FacebookUniqueID'=>$fb_user->getId(), 'FacebookName'=>$fb_user->getName(), 'FacebookEmail'=>$fb_user->getEmail(), 'FacebookAvatar'=>$fb_user->getAvatar()]);
        $grader = Graders::where('FacebookUniqueID', $fb_user->getId())->first();
        if(is_null($grader))
            Graders::create(['FacebookUniqueID'=>$fb_user->getId(), 'TeamID'=>$team_id]);
        else {
            $grader->TeamID = $team_id;
            $grader->save();
        }
        return redirect('/wearehiring/login');
    }

    public function logout() {
        $user = Auth::user();
        if(is_null($user)) return redirect('wearehiring/login');
        Auth::logout();
        Session::flush();
        return redirect('wearehiring/login');

    }

    // public function callback($team)
    // {
    //     Config::set('services.facebook.redirect', env('FACEBOOK_REDIRECT_URL').'/'.$team);
    //     $user = Socialite::driver('facebook')->stateless()->user();
    //     $team_id = Teams::where('TeamName', $team)->first()['TeamID'];
    //     if(!Fbaccounts::where('FacebookUniqueID', $user->getId())->exists()) {
    //         Fbaccounts::create(['FacebookUniqueID'=>$user->getId(), 'FacebookName'=>$user->getName(), 'FacebookEmail'=>$user->getEmail(), 'FacebookAvatar'=>$user->getAvatar()]);
    //         Campers::create(['FacebookUniqueID'=>$user->getId(), 'TeamID'=>$team_id]);
    //     }
    //     $fbaccount = Fbaccounts::where('FacebookUniqueID', $user->getId())->first();
    //     try {
    //         // attempt to verify the credentials and create a token for the user
    //         if (! $token = JWTAuth::fromUser($fbaccount)) {
    //             return response()->json(['error' => 'invalid_credentials'], 401);
    //         }
    //     } catch (JWTException $e) {
    //         // something went wrong whilst attempting to encode the token
    //         return response()->json(['error' => 'could_not_create_token'], 500);
    //     }

    //     // all good so return the token
    //     return response()->json(compact('token'));
    // }

    public function authen(Request $request, $team)
    {
        if($team!='marketing' && $team!='content' && $team!='design') {
            return response()->json(['error' => 'wrong team'], 500);
        }

        $token = $request->input('access_token');
        $user = Socialite::driver('facebook')->userFromToken($token);
        $team_id = Teams::where('TeamName', $team)->first()['TeamID'];
        if(!Fbaccounts::where('FacebookUniqueID', $user->getId())->exists()) {
            Fbaccounts::create(['FacebookUniqueID'=>$user->getId(), 'FacebookName'=>$user->getName(), 'FacebookEmail'=>$user->getEmail(), 'FacebookAvatar'=>$user->getAvatar()]);
            Campers::create(['FacebookUniqueID'=>$user->getId(), 'TeamID'=>$team_id, 'IsLock'=>false]);
            Profiles::create(['CamperID'=>Campers::where('FacebookUniqueID', $user->getId())->first()['CamperID']]);
        }
        else {
            $camper = Fbaccounts::where('FacebookUniqueID', $user->getId())->first()->camper()->first();
            if(!$camper['IsLock'] && $camper['TeamID']!=$team_id){
                Campers::where('FacebookUniqueID', $user->getId())->update(["TeamID"=>$team_id]);
            }
        }
        $fbaccount = Fbaccounts::where('FacebookUniqueID', $user->getId())->first();
        $camper = Campers::where('FacebookUniqueID', $user->getId())->first();

        try {
            // attempt to verify the credentials and create a token for the user
            if (!$token = JWTAuth::fromUser($fbaccount)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        //return response()->json(compact('token', 'team', $camper['CamperID']));
        return [
        	'token' => $token,
	        'team' => $team,
	        'camper_id' => $camper->CamperID,
	        'isLock' => $camper->IsLock
        ];
    }
}
