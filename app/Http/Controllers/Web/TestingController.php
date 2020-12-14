<?php

namespace App\Http\Controllers\Web;

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
}
