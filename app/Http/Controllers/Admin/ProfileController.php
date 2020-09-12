<?php

namespace App\Http\Controllers\Admin;

use File;
use Auth;
use Hash;
use Image;
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
        $this->path = 'profile';
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
        $data['path'] = $this->path;
        
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
            'name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'designation' => 'required',
            'organization' => 'required',
            'higher_degree' => 'required',
            'academy' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'photo' => 'nullable | image',
        ]);


        // image upload, fit and store inside public folder 
        if($request->hasFile('photo')){
            //Upload New Image
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            $extension = $request->file('photo')->getClientOriginalExtension();
            $imageNameToStore = $filename.'_'.time().'.'.$extension;

            //Crete Folder Location
            $path = public_path('uploads/'.$this->path.'/');
            if (! File::exists($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            //Resize And Crop as Fit image here (400 width, 400 height)
            $thumbnailpath = $path.$imageNameToStore;
            $img = Image::make($request->file('photo')->getRealPath())->fit(400, 400, function ($constraint) { $constraint->upsize(); })->save($thumbnailpath);
        }
        else{
            $imageNameToStore = Null;
        }

        
        // store data
        $user = User::find(Auth::guard('web')->user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->dob = $request->dob;
        $user->designation = $request->designation;
        $user->department = $request->department;
        $user->organization = $request->organization;
        $user->higher_degree = $request->higher_degree;
        $user->academy = $request->academy;
        $user->specialty = $request->specialty;
        $user->profile = $request->profile;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->photo = $imageNameToStore;
        $user->save();

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
