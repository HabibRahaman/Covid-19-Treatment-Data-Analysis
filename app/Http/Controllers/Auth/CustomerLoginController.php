<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class CustomerLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('guest:customer')->except('logout');
    }

    /**
    *
    *
    */
    public function guard()
    {
    	return Auth::guard('customer');
    }

    // login from for customer
    public function showLoginForm()
    {
        return view('web.auth.login');
    }
}
