<?php

namespace App\Http\Controllers\Web;

use Session;
use App\Model\Patient;
use App\Model\Disease;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SurveyController extends Controller
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

        return view('web.survey', $data);
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

        //filter the request
        $input = $request->only(['reg_id', 'name', 'email', 'gender', 'dob', 'age', 'designation', 'phone', 'city', 'country', 'medical_test', 'ventilation', 'icu', 'health_condition', 'entry_type']);

        // store data
        $patient = Patient::create($input);

        $patient->reg_id = 5000 + $patient->id;
        $patient->entry_type = 2;
        $patient->save();

        // Attach
        $patient->symptoms()->attach($request->symptoms);
        $patient->conditions()->attach($request->conditions);
        $patient->medicines()->attach($request->medicines);


        Session::flash('success', 'Thank you for attending this survey');

        return redirect()->back();
    }
}
