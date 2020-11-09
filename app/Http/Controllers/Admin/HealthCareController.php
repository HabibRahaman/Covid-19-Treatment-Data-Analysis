<?php

namespace App\Http\Controllers\Admin;

use App\Model\Disease;
use App\Model\HealthCare;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HealthCareController extends Controller
{
    public function __construct () 
    {
        $this->middleware('permission:HealthCares');
        
        $this->title = 'Health Care';
        $this->route = 'admin.healthcare.';
        $this->view  = 'backend.healthcare';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = $this->title;
        $data['route'] = $this->route;
        
        $data['diseases'] = Disease::orderBy('name', 'asc')->get();
        $data['healthcares'] = HealthCare::orderBy('name', 'asc')->get();

        return view($this->view.'.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required | unique:health_cares,name',
            'type'  => 'required',
            'priority'  => 'required',
            'diseases'  => 'required',
        ]);

        // Slug
        $slug = $slug = Str::slug($request->name, '-');

        $request->request->add(['slug' => $slug]); //add request
        //filter the request
        $input = $request->only(['name','slug','details','type','priority']);

        // store data
        $healthCare = HealthCare::create($input);

        // Attach
        $healthCare->diseases()->attach($request->diseases);

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $request->validate([
            'name' => 'required | unique:health_cares,name,'.$id,
            'type'  => 'required',
            'priority'  => 'required',
            'diseases'  => 'required',
        ]);

        $healthCare = HealthCare::findOrFail($id);

        // Slug
        $slug = $slug = Str::slug($request->name, '-');

        $request->request->add(['slug' => $slug]); //add request
        //filter the request
        $input = $request->only(['name','slug','details','type','priority','status']);

        // store data
        $healthCare->update($input);

        // Attach Update
        $healthCare->diseases()->sync($request->diseases);

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
        $healthCare = HealthCare::findOrFail($id);

        // Detach
        $healthCare->diseases()->detach();

        // Delete
        $healthCare->delete();

        toastr()->success('Delete Successfully');

        return redirect()->back();
    }
}
