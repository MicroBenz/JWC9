<?php

namespace App\Http\Controllers\Grader;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function getLogin()
    {
        return view('graders/login');
    }

    public function authenticate(Request $request)
    {
        $rules = array(
            'username'             => 'required',
            'password'             => 'required',
        );
        $validator = \Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withInput($request->except('password'))
                    ->withErrors($validator);
        }

        if (Auth::attempt(['Username' => $request->username, 'Password' => $request->password])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        else
        {
            return back()->with('fail', 'Try again!');
        }
    }
}
