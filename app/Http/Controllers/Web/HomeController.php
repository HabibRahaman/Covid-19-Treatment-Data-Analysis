<?php

namespace App\Http\Controllers\Web;

use PDF;
use App\Model\Patient;
use Illuminate\Http\Request;
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

        return view('web.index');
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
