<?php

namespace App\Http\Controllers\Web;

use PDF;
use App\Model\Patient;
use App\Model\Symptom;
use Illuminate\Http\Request;
use App\Model\MedicalCondition;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Patients
        $data['total_patients'] = Patient::count();

        // By Gender
        $data['total_male'] = Patient::where('gender', 1)->count();
        $data['total_female'] = Patient::where('gender', 2)->count();

        // By Age
        $data['total_age1'] = Patient::where('age', 1)->count();
        $data['total_age2'] = Patient::where('age', 2)->count();
        $data['total_age3'] = Patient::where('age', 3)->count();
        $data['total_age4'] = Patient::where('age', 4)->count();
        $data['total_age5'] = Patient::where('age', 5)->count();
        $data['total_age6'] = Patient::where('age', 6)->count();
        $data['total_age7'] = Patient::where('age', 7)->count();
        $data['total_age8'] = Patient::where('age', 8)->count();
        $data['total_age9'] = Patient::where('age', 9)->count();

        // Symptoms
        $data['symptoms'] = Symptom::withCount('patients')
                                    ->where('status', 1)
                                    ->orderBy('patients_count', 'desc')
                                    ->limit(6)
                                    ->get();

        // Medical Conditions
        $data['conditions'] = MedicalCondition::where('status', 1)
                                    ->get();

        return view('web.index', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function thanks()
    {

        return view('web.thanks');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function download($reg_id)
    {
    	$patient = Patient::where('reg_id', $reg_id)->firstOrFail();

    	// Passing data to email template
        $data['name'] = $patient->name;
        $data['email'] = $patient->email;
        $data['reg_id'] = $patient->reg_id;
        $data['date'] = $patient->prescription->updated_at;
        $data['patient'] = $patient;
        $data['subject'] = 'Virtual Prescription';
        $data['message'] = $patient->prescription->details;

        $pdf = PDF::loadView('pdf.prescription', $data);
		return $pdf->download('Prescription.pdf');
    }
}
