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
use DB;

class RegistrantController extends Controller {

	public function index () {
		$registrants = DB::table('campers')
						->join('fbaccounts', 'campers.FacebookUniqueID', '=', 'fbaccounts.FacebookUniqueID')
						->get();

		//echo "<pre>".var_export($registrants, true)."</pre>";
		return view('gallery', [
			'registrants' => $registrants,
		]);
	}

}