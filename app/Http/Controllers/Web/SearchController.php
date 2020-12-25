<?php

namespace App\Http\Controllers\Web;

use Session;
use App\Model\Patient;
use App\Model\Disease;
use App\Model\Symptom;
use App\Model\Prescription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Disease
        $data['disease'] = Disease::where('status', 1)
        					->firstOrFail();

        return view('web.search', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'email' => 'nullable | email | unique:patients,email',
        ]);

        // Filter the request
        $input = $request->only(['reg_id', 'name', 'email', 'gender', 'dob', 'age', 'designation', 'phone', 'city', 'country', 'medical_test', 'ventilation', 'icu', 'health_condition', 'entry_type']);

        // Store data
        $patient = Patient::create($input);

        $patient->reg_id = 5000 + $patient->id;
        $patient->entry_type = 1;
        $patient->save();


        // Attach
        $patient->symptoms()->attach($request->symptoms);
        $patient->conditions()->attach($request->conditions);


        // Dynamic Prescription 
        $count = [];
        $medicine_id = [];

        foreach ($request->symptoms as $key => $symptom_id) {

            $symptom = Symptom::find($symptom_id);

            $count[$key] = 0;
            $medicine_id[$key] = 0;

            foreach ($symptom->medicines as $medicine) {
                if($count[$key] < $medicine->patients->count()) {
                    $count[$key] = $medicine->patients->count();
                    $medicine_id[$key] = $medicine->id;
                }
            }
        }

        foreach ($medicine_id as $key => $value) {
            if($value != 0) {
                // Attach
                $patient->medicines()->attach($value);
            }
        }

        
        // Create Prescription
        $prescription = new Prescription();
        $prescription->patient_id = $patient->id;
        $prescription->save();

        Session::flash('success', 'Your request has been submitted successfully. Prescription will be mailed in your email address.');

        return redirect()->route('thanks');
    }
}
