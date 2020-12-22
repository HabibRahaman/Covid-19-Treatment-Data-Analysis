<?php

namespace App\Http\Controllers\Admin;

use App\Model\Patient;
use App\Model\Disease;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    public function __construct () 
    {
        $this->middleware('permission:Symptoms');
        
        $this->title = 'Patient';
        $this->route = 'admin.patient.';
        $this->view  = 'backend.patient';
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

        // Disease
        $data['disease'] = Disease::where('status', 1)->firstOrFail();
        
        $data['patients'] = Patient::where('entry_type', 1)->orderBy('id', 'desc')->get();

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        
        // Detach
        $patient->symptoms()->detach();
        $patient->medicines()->detach();
        $patient->conditions()->detach();

        // Delete
        $patient->delete();

        toastr()->success('Delete Successfully');

        return redirect()->back();
    }
}
