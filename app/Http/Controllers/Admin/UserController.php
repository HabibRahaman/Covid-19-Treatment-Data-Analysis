<?php

namespace App\Http\Controllers\Admin;

use DB;
use File;
use Hash;
use Image;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct () 
    {
        $this->middleware('permission:Users');
        
        $this->title     = 'User';
        $this->route     = 'admin.user.';
        $this->view      = 'backend.user';
        $this->path = 'profile';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;

        $data['name'] = $name = $request->name;
        $data['designation'] = $designation = $request->designation;
        $data['organization'] = $organization = $request->organization;
        
        $users = User::where('id', '!=', null);
                        if(!empty($name)){
                            $users->where('name', 'LIKE', '%'.$name.'%');
                        }
                        if(!empty($designation)){
                            $users->where('designation', 'LIKE', '%'.$designation.'%');
                        }
                        if(!empty($organization)){
                            $users->where('organization', 'LIKE', '%'.$organization.'%');
                        }
        $data['users'] = $users->orderBy('id', 'desc')
                            ->paginate(15);

        return view($this->view.'.index', $data)
                ->with('i', ($request->input('page', 1) - 1) * 10);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;

        $data['roles'] = Role::all();

        return view($this->view.'.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);


        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        
        toastr()->success('Create Successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;

        $data['user'] = User::find($id);

        return view($this->view.'.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['path']      = $this->path;

        $data['user'] = $user = User::find($id);

        $data['roles'] = Role::all();
        $data['userRoles'] = $user->roles->all();

        return view($this->view.'.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
            'email' => 'nullable|email|unique:users,email,'.$id,
            'roles' => 'required'
        ]);


        $user = User::find($id);

        // image upload, fit and store inside public folder 
        if($request->hasFile('photo')){

            $thumb = public_path('uploads/'.$this->path.'/'.$user->photo);
            if(File::isFile($thumb)){
                File::delete($thumb);
            }
            
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
            $imageNameToStore = $user->photo;
        }

        
        // store data
        $user->name = $request->name;
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


        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

        
        toastr()->success('Update Successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        // Delete
        $thumb = public_path('uploads/'.$this->path.'/'.$user->photo);
        if(File::isFile($thumb)){
            File::delete($thumb);
        }

        $user->delete();

        toastr()->success('Delete Successfully');

        return redirect()->back();
    }
}
