<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribes;
use Illuminate\Http\Response;

class SubscribeController extends Controller
{
    public function insert (Request $request) {
		$subscriber = new Subscribes();
		$subscriber->Email = $request->email;
		return ($subscriber->save())? Response::HTTP_OK : Response::HTTP_INTERNAL_SERVER_ERROR;
    }
}
