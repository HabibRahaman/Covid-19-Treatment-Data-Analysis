<?php

namespace App\Http\Controllers\Admin;

use App\Model\Symptom;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SymptomController extends Controller
{
    public function __construct () 
    {
        // $this->middleware('permission:Places');
        
        $this->title = 'Symptom';
        $this->route = 'admin.symptom.';
        $this->view  = 'backend.symptom';
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
        
        $data['symptoms'] = Symptom::orderBy('name', 'asc')->paginate(15);

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
            'name'  => 'required | unique:symptoms,name',
            'priority'  => 'required',
            'risk_level'  => 'required',
        ]);

        // Slug
        $slug = $slug = Str::slug($request->name, '-');

        $request->request->add(['slug' => $slug]); //add request
        //filter the request
        $input = $request->only(['name','slug','details','priority','risk_level','show']);

        // store data
        $symptom = Symptom::create($input);

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
    public function update(Request $request, Symptom $symptom)
    {
        $request->validate([
            'name' => 'required | unique:symptoms,name,'.$symptom->id,
            'priority'  => 'required',
            'risk_level'  => 'required',
        ]);

        // Slug
        $slug = $slug = Str::slug($request->name, '-');

        $request->request->add(['slug' => $slug]); //add request
        //filter the request
        $input = $request->only(['name','slug','details','priority','risk_level','show','status']);

        // store data
        $symptom = $symptom->update($input);

        toastr()->success('Update Successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Symptom $symptom)
    {
        // Delete
        $symptom->delete();

        toastr()->success('Delete Successfully');

        return redirect()->back();
    }
}
