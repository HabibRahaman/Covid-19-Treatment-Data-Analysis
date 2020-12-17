<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use Auth;

class JoinController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'dob' => 'required | date',
            'address' => 'required',
            'city' => 'required',
            'gender' => 'required',
            'designation' => 'required',
            'department' => 'required',
            'organization' => 'required',
            'higher_degree' => 'required',
            'academy' => 'required',
            'specialty' => 'required',
            'email' => 'required | email | unique:users,email',
            'password' => 'required | min:6 | confirmed',
        ]);

        $password = Hash::make($request['password']);

        $request->request->add(['status' => 1, 'password' => $password]); //add request
        //filter the request
        $input = $request->only(['name', 'email', 'password', 'gender', 'dob', 'designation', 'department', 'organization', 'higher_degree', 'academy', 'specialty', 'profile', 'phone', 'address', 'city', 'status']);

        // store data
        $user = User::create($input);

        // If Registered
        if($user){
	        // Attach Role
	        $user->assignRole([3]);

	        // Logout other
	        Auth()->logout();

	        toastr()->success('Join Successfully');

	        return redirect()->route('login');
        }
        

        toastr()->error('Something wrong! Please try again');

        return redirect()->back();
    }
}
