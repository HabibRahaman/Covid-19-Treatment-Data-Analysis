<?php

namespace App\Http\Controllers\Web;

use App\Model\TestReport;
use Illuminate\Http\Request;
use App\Model\TestingSymptom;
use App\Http\Controllers\Controller;

class TestingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        // Commons
        $data['commons'] = TestingSymptom::where('status', 1)
        					->where('risk_level', '!=', 3)
        					->get();

        // Emergencies
        $data['emergencies'] = TestingSymptom::where('status', 1)
        					->where('risk_level', 3)
        					->get();

        return view('web.online-test', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function result(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'email' => 'nullable | email',
        ]);

        //filter the request
        $input = $request->only(['name', 'email', 'gender', 'dob', 'age', 'designation', 'phone', 'city', 'country']);

        // store data
        $report = TestReport::create($input);

        // Attach
        $report->symptoms()->attach($request->symptoms);

        // Attach
        // $report->diseases()->attach($request->diseases);



        // Commons
        $data['commons'] = TestingSymptom::where('status', 1)
                            ->where('risk_level', '!=', 3)
                            ->get();

        // Emergencies
        $data['emergencies'] = TestingSymptom::where('status', 1)
                            ->where('risk_level', 3)
                            ->get();

        return view('web.online-test', $data);
    }
}
