<?php

namespace App\Http\Controllers\Web;

use Session;
use Illuminate\Http\Request;
use App\Model\Disease;
use App\Model\TestingSymptom;
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
}
