<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Hash;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function __construct () 
    {        
        $this->title     = 'Profile';
        $this->route     = 'admin.profile.';
        $this->view      = 'backend.profile';
        $this->file_path = 'profile';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['file_path'] = $this->file_path;
        
        $data['user'] = User::find(Auth::guard('web')->user()->id);

        return view($this->view.'.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required'
        ]);

        $input = $request->only(['name','email','gender','dob','designation','department','organization','higher_degree','academy','specialty','profile','phone','address','city','country']);
        
        $user = User::find(Auth::guard('web')->user()->id);
        $user->update($input);

        toastr()->success('Update Successfully');

        return redirect()->back();
    }


    // Change password
    public function changePass(Request $request)
    {
        $this->validate($request,[
            'oldpass' => 'required',
            'newpass' => 'required | min:6 | confirmed'
        ]);

        if (Hash::check($request->oldpass, Auth::guard('web')->user()->password)) {
            User::where('id', Auth::guard('web')->user()->id)->update(['password' => Hash::make($request->newpass)]);

            toastr()->success('Password Successfully Changes');

            Auth::guard('web')->logout();        
        }

        toastr()->success('Old Password Not Match!');
        
        return back();
    }
}
