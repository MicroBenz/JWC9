<?php

namespace App\Http\Controllers\Grader;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Campers;
use Illuminate\Contracts\Encryption\DecryptException;

class SneakpeekController extends Controller
{
    public function getIndex()
    {
    	$campers = Campers::where('IsLock', '1')->orderBy('TeamID')->get();
        $waitings = Campers::where('IsLock', 0)->orderBy('TeamID')->get();
        return view('graders.sneakpeek')->withCampers($campers)
                                        ->withWaitings($waitings);
    }

    public function getInfo($secret)
    {
        try {
            $fbaccount = decrypt($secret);
        } catch (DecryptException $e) {
            return redirect('404-notfound');
        }
    	$camper = Campers::where('FacebookUniqueID', $fbaccount)->first();
        return view('graders.sneakpeek_info')->withCamper($camper);
    }
}
