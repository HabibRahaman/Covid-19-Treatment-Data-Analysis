<?php

namespace App\Http\Controllers\Admin;

use App\Model\Symptom;
use App\Model\Medicine;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MedicineController extends Controller
{
    public function __construct () 
    {
        // $this->middleware('permission:Places');
        
        $this->title = 'Medicine';
        $this->route = 'admin.medicine.';
        $this->view  = 'backend.medicine';
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
        
        $data['symptoms'] = Symptom::orderBy('name', 'asc')->get();
        $data['medicine_groups'] = Medicine::where('group', 1)->orderBy('name', 'asc')->get();
        $data['medicines'] = Medicine::orderBy('name', 'asc')->paginate(15);

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
        $request->validate([
            'name'  => 'required | unique:medicines,name',
            'group'  => 'required',
            'risk_level'  => 'required',
            // 'diseases'  => 'required',
        ]);

        // Slug
        $slug = $slug = Str::slug($request->name, '-');

        $request->request->add(['slug' => $slug]); //add request
        //filter the request
        $input = $request->only(['name','slug','details','group','risk_level','show']);

        // store data
        $medicine = Medicine::create($input);

        // Attach
        // $medicine->diseases()->attach($request->diseases);

        toastr()->success('Create Successfully');

        return redirect()->back();
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        $request->validate([
            'name' => 'required | unique:medicines,name,'.$medicine->id,
            'group'  => 'required',
            'risk_level'  => 'required',
            // 'diseases'  => 'required',
        ]);

        // Slug
        $slug = $slug = Str::slug($request->name, '-');

        // Show status
        if($request->show == null || $request->show != 1){
            $show = 0; 
        }
        else {
            $show = 1; 
        }

        $request->request->add(['slug' => $slug, 'show' => $show]); //add request
        //filter the request
        $input = $request->only(['name','slug','details','group','risk_level','show','status']);

        // store data
        $medicine->update($input);

        // Attach Update
        // $medicine->diseases()->sync($request->diseases);

        toastr()->success('Update Successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        // Detach
        // $medicine->diseases()->detach();

        // Delete
        $medicine->delete();

        toastr()->success('Delete Successfully');

        return redirect()->back();
    }
}
