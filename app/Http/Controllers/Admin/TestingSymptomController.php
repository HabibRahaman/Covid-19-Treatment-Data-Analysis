<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Model\TestingSymptom;
use App\Model\TestingDisease;
use App\Http\Controllers\Controller;

class TestingSymptomController extends Controller
{
    public function __construct () 
    {
        $this->middleware('permission:Symptoms');
        
        $this->title = 'Testing Symptom';
        $this->route = 'admin.testing-symptom.';
        $this->view  = 'backend.testing-symptom';
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
        
        $data['diseases'] = TestingDisease::orderBy('name', 'asc')->get();
        $data['symptoms'] = TestingSymptom::orderBy('name', 'asc')->get();

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
            'name'  => 'required | unique:testing_symptoms,name',
            'priority'  => 'required',
            'risk_level'  => 'required',
            'diseases'  => 'required',
        ]);

        // Slug
        $slug = $slug = Str::slug($request->name, '-');

        // Show status
        if($request->show == null || $request->show != 1){
            $show = 0; 
        }
        else {
            $show = 1; 
        }

        $request->request->add(['slug' => $slug, 'show' => $show]); //add request
        $input = $request->only(['name','slug','details','priority','risk_level','show']);

        // store data
        $testingSymptom = TestingSymptom::create($input);

        // Attach
        $testingSymptom->diseases()->attach($request->diseases);

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
    public function update(Request $request, TestingSymptom $testingSymptom)
    {
        $request->validate([
            'name' => 'required | unique:testing_symptoms,name,'.$testingSymptom->id,
            'priority'  => 'required',
            'risk_level'  => 'required',
            'diseases'  => 'required',
        ]);

        // Slug
        $slug = $slug = Str::slug($request->name, '-');

        // Show status
        if($request->show == null || $request->show != 1){
            $show = 0; 
        }
        else {
            $show = 1; 
        }

        $request->request->add(['slug' => $slug, 'show' => $show]); //add request
        //filter the request
        $input = $request->only(['name','slug','details','priority','risk_level','show','status']);

        // store data
        $testingSymptom->update($input);

        // Attach Update
        $testingSymptom->diseases()->sync($request->diseases);

        toastr()->success('Update Successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestingSymptom $testingSymptom)
    {
        // Detach
        $testingSymptom->diseases()->detach();

        // Delete
        $testingSymptom->delete();

        toastr()->success('Delete Successfully');

        return redirect()->back();
    }
}
