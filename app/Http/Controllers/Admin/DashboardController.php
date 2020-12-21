<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Model\Patient;
use App\Model\TestReport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct () 
    {        
        $this->title     = 'Dasboard';
        $this->route     = 'dashboard.';
        $this->view      = 'backend.dashboard';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        
        $data['users'] = User::count();
        $data['tests'] = TestReport::count();
        $data['search'] = Patient::where('entry_type', 1)->count();
        $data['survey'] = Patient::where('entry_type', 2)->count();

        return view($this->view.'.index', $data);
    }
}
