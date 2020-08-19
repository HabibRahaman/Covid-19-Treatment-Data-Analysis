<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        
        $data['user'] = User::find(Auth::guard('web')->user()->id);

        return view($this->view.'.index', $data);
    }
}
