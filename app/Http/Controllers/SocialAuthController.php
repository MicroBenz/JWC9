<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuthExceptions\JWTException;
use \App\Fbaccounts;
use \App\Teams;
use \App\Campers;
use \Config;
use Socialite;

class SocialAuthController extends Controller
{
    public function redirect($team)
    {
        Config::set('services.facebook.redirect', env('FACEBOOK_REDIRECT_URL').'/'.$team);
        return Socialite::driver('facebook')->redirect();   
    }   

    public function callback($team)
    {
        Config::set('services.facebook.redirect', env('FACEBOOK_REDIRECT_URL').'/'.$team);
        $user = Socialite::driver('facebook')->stateless()->user();
        $team_id = Teams::where('TeamName', $team)->first()['TeamID'];
        if(!Fbaccounts::where('FacebookUniqueID', $user->getId())->exists()) {
            Fbaccounts::create(['FacebookUniqueID'=>$user->getId(), 'FacebookName'=>$user->getName(), 'FacebookEmail'=>$user->getEmail(), 'FacebookAvatar'=>$user->getAvatar()]);
            Campers::create(['FacebookUniqueID'=>$user->getId(), 'TeamID'=>$team_id]);
        }
        $fbaccount = Fbaccounts::where('FacebookUniqueID', $user->getId())->first();
        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::fromUser($fbaccount)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        return response()->json(compact('token'));
    }

    public function authen(Request $request, $team)
    {
        $token = $request->input('access_token');
        $user = Socialite::driver('facebook')->userFromToken($token);
        $team_id = Teams::where('TeamName', $team)->first()['TeamID'];
        if(!Fbaccounts::where('FacebookUniqueID', $user->getId())->exists()) {
            Fbaccounts::create(['FacebookUniqueID'=>$user->getId(), 'FacebookName'=>$user->getName(), 'FacebookEmail'=>$user->getEmail(), 'FacebookAvatar'=>$user->getAvatar()]);
            Campers::create(['FacebookUniqueID'=>$user->getId(), 'TeamID'=>$team_id]);
        }
        $fbaccount = Fbaccounts::where('FacebookUniqueID', $user->getId())->first();
        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::fromUser($fbaccount)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        return response()->json(compact('token'));
    }
}
