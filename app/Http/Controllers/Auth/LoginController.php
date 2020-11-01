<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:web')->except('logout');
        $this->middleware('guest:patient')->except('logout');
    }


    public function showPatientLoginForm()
    {
        return view('auth.login', ['url' => 'patient']);
    }

    public function patientLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email'
        ]);

        if (Auth::guard('patient')->attempt(['email' => $request->email])){

            return redirect()->intended('/patient');
        }
        return back()->withInput($request->only('email'));
    }


    public function login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6',
        ]);


        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->route('dashboard.index');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
