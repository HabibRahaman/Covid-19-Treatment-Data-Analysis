<?php

namespace App\Http\Controllers\Admin;

use DB;
use Hash;
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
        $this->file_path = 'user';
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
        $data['file_path'] = $this->file_path;

        $data['users'] = User::orderBy('id','DESC')->paginate(15);

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
        $data['file_path'] = $this->file_path;

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
        $data['file_path'] = $this->file_path;

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
        $data['file_path'] = $this->file_path;

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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'nullable|email|unique:users,email,'.$id,
            'roles' => 'required'
        ]);


        $input = $request->only(['name','email','gender','dob','designation','department','organization','higher_degree','academy','specialty','profile','phone','address','city','country']);

        $user = User::find($id);
        $user->update($input);

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
        User::find($id)->delete();

        toastr()->success('Delete Successfully');

        return redirect()->back();
    }
}
