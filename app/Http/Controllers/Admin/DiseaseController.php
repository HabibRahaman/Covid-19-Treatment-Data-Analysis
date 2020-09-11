<?php

namespace App\Http\Controllers\Admin;

use App\Model\Disease;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiseaseController extends Controller
{
    public function __construct () 
    {
        // $this->middleware('permission:Places');
        
        $this->title = 'Disease';
        $this->route = 'admin.disease.';
        $this->view  = 'backend.disease';
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
            'name'  => 'required | unique:diseases,name',
            'type'  => 'required',
            'risk_level'  => 'required',
        ]);

        // Slug
        $slug = $slug = Str::slug($request->name, '-');

        $request->request->add(['slug' => $slug]); //add request
        //filter the request
        $input = $request->only(['name','slug','details','type','risk_level']);

        // store data
        $disease = Disease::create($input);

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
    public function update(Request $request, Disease $disease)
    {
        $request->validate([
            'name' => 'required | unique:diseases,name,'.$disease->id,
            'type'  => 'required',
            'risk_level'  => 'required',
        ]);

        // Slug
        $slug = $slug = Str::slug($request->name, '-');

        $request->request->add(['slug' => $slug]); //add request
        //filter the request
        $input = $request->only(['name','slug','details','type','risk_level','status']);

        // store data
        $disease->update($input);

        toastr()->success('Update Successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disease $disease)
    {
        // Delete
        $disease->delete();

        toastr()->success('Delete Successfully');

        return redirect()->back();
    }
}
