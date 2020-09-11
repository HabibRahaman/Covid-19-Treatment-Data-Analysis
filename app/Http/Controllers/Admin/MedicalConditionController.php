<?php

namespace App\Http\Controllers\Admin;

use App\Model\Disease;
use App\Model\MedicalCondition;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MedicalConditionController extends Controller
{
    public function __construct () 
    {
        // $this->middleware('permission:Places');
        
        $this->title = 'Medical Condition';
        $this->route = 'admin.condition.';
        $this->view  = 'backend.condition';
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
        $data['conditions'] = MedicalCondition::orderBy('name', 'asc')->get();

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
            'name'  => 'required | unique:medical_conditions,name',
            'instructions'  => 'required',
            'risk_level'  => 'required',
            'diseases'  => 'required',
        ]);

        // Slug
        $slug = $slug = Str::slug($request->name, '-');

        $request->request->add(['slug' => $slug]); //add request
        //filter the request
        $input = $request->only(['name','slug','details','instructions','risk_level','show']);

        // store data
        $medicalCondition = MedicalCondition::create($input);

        // Attach
        $medicalCondition->diseases()->attach($request->diseases);

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
            'name' => 'required | unique:medical_conditions,name,'.$id,
            'instructions'  => 'required',
            'risk_level'  => 'required',
            'diseases'  => 'required',
        ]);

        $medicalCondition = MedicalCondition::findOrFail($id);

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
        $input = $request->only(['name','slug','details','instructions','risk_level','show','status']);

        // store data
        $medicalCondition->update($input);

        // Attach Update
        $medicalCondition->diseases()->sync($request->diseases);

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
        $medicalCondition = MedicalCondition::findOrFail($id);

        // Detach
        $medicalCondition->diseases()->detach();

        // Delete
        $medicalCondition->delete();

        toastr()->success('Delete Successfully');

        return redirect()->back();
    }
}
