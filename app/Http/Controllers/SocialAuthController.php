<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $user = Socialite::driver('facebook')->user();
        $fbaccount = Fbaccounts::where('FacebookUniqueID', $user->getId())->first();
        $team_id = Teams::where('TeamName', $team)->first()['TeamID'];
        // dd($fbaccount);
        if(is_null($fbaccount)) {
            Fbaccounts::create(['FacebookUniqueID'=>$user->getId(), 'FacebookName'=>$user->getName(), 'FacebookEmail'=>$user->getEmail(), 'FacebookAvatar'=>$user->getAvatar()]);
            Campers::create(['FacebookUniqueID'=>$user->getId(), 'TeamID'=>$team_id]);
        }
        else {
            echo "Already";
        }
    }
}
