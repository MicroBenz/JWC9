<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresentationUploadController extends Controller
{
    public function index ()
    {
		return view('slide');
    }
    public function store (Request $request)
    {
	    $file = $request->file('powerpoint')->store('slides');
	    $file = $request->file('pdf')->store('slides');
    }
}
