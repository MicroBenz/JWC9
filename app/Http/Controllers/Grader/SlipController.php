<?php

namespace App\Http\Controllers\Grader;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Announcement;
use Auth;
use Illuminate\Contracts\Encryption\DecryptException;

class SlipController extends Controller
{
    public function getIndex()
    {
        // Auth::loginUsingId(1498012336884637);
        $grader = Auth::user()->grader;

        if($grader->TeamID == 5)
        {
            $initials = Announcement::where('Checked', 'โปรดอัพโหลดหลักฐานการโอนเงิน')->get();
            $waitings = Announcement::where('Checked', 'รอการตรวจสอบ')->get();
            $checked = Announcement::where('Checked', 'ยืนยันสำเร็จ')->get();

            return view('graders.slip')->withWaitings($waitings)
                                        ->withChecked($checked)
                                        ->withInitials($initials);
        }
        else
        {
            return redirect('401-unauthorized');
        }
    }

    public function getSlip($secret)
    {
        try {
            $fbaccount = decrypt($secret);
        } catch (DecryptException $e) {
            return redirect('404-notfound');
        }
        $grader = Auth::user()->grader;
        if($grader->TeamID == 5)
        {
            $camper = Announcement::where('FacebookUniqueID', $fbaccount)->first();

            return view('graders.slip_check')->withCamper($camper);
        }
        else
        {
            return redirect('401-unauthorized');
        }
    }

    public function postCheck(Request $request)
    {
        try {
            $camper_id = decrypt($request->secret);
        } catch (DecryptException $e) {
            return redirect('404-notfound');
        }
        $grader = Auth::user()->grader;
        if($grader->TeamID == 5)
        {
            $camper = Announcement::where('CamperID', $camper_id)->first();
            $camper->checked = $request->checked;
            $camper->save();
            
            return redirect('wearehiring/slip');
        }
        else
        {
            return redirect('401-unauthorized');
        }
    }
}
