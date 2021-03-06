<?php

namespace App\Http\Controllers\Admin;

use Mail;
use Carbon\Carbon;
use App\Model\Patient;
use App\Model\Disease;
use App\Model\Prescription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\Prescription as PrescriptionMail;

class PatientController extends Controller
{
    public function __construct () 
    {
        $this->middleware('permission:Patients');
        
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
        $patient = Patient::find($id);
        $patient->status = 0;
        $patient->save();

        toastr()->success('Rejected Successfully');

        return redirect()->back();
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
        $patient = Patient::find($id);
        $patient->status = 2;
        $patient->save();

        // Create Prescription
        $prescription = Prescription::where('patient_id', $id)->first();
        $prescription->details = $request->details;
        $prescription->save();

        // Attach
        $patient->medicines()->detach();
        $patient->medicines()->attach($request->medicines);

        // Health Cares
        $disease = Disease::where('status', 1)
                            ->firstOrFail();

        $patient->health_cares()->detach();
        foreach ($disease->health_cares as $health_care) {
          if ($health_care->status == 1) {
            // Attach
            $patient->health_cares()->attach($health_care->id);
          }
        }


        // Passing data to email template
        $data['name'] = $patient->name;
        $data['email'] = $patient->email;
        $data['reg_id'] = $patient->reg_id;
        $data['date'] = $patient->prescription->updated_at;
        $data['patient'] = $patient;

        // Mail Information
        $data['subject'] = 'Virtual Prescription';
        $data['from'] = 'info@example.com';
        $data['message'] = $request->details;

        // Send Mail
        Mail::to($data['email'])->send(new PrescriptionMail($data));


        toastr()->success('Prescription Sent Successfully');

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
        //
    }
}
