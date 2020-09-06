<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class PatientLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('guest:patient')->except('logout');
    }

    /**
    *
    *
    */
    public function guard()
    {
    	return Auth::guard('patient');
    }

    // login from for patient
    public function showLoginForm()
    {
        return view('web.auth.login');
    }
}
