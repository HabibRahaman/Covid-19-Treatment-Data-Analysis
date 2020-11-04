<?php

namespace App\Http\Controllers\Admin;

use File;
use Image;
use App\Model\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function __construct () 
    {
        $this->middleware('permission:InfoBlogs');
        
        $this->title = 'Blog';
        $this->route = 'admin.blog.';
        $this->view  = 'backend.blog';
        $this->path  = 'blog';
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
        $data['path'] = $this->path;
        
        $data['blogs'] = Blog::orderBy('id', 'desc')->get();

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
            'name'  => 'required | unique:blogs,name',
            'details'  => 'required',
            'thumb'  => 'nullable | image',
        ]);

        // Slug
        $slug = Str::slug($request->name, '-');


        // image upload, fit and store inside public folder 
        if($request->hasFile('thumb')){
            //Upload New Image
            $filenameWithExt = $request->file('thumb')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            $extension = $request->file('thumb')->getClientOriginalExtension();
            $imageNameToStore = $filename.'_'.time().'.'.$extension;

            //Crete Folder Location
            $path = public_path('uploads/'.$this->path.'/');
            if (! File::exists($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            //Resize And Crop as Fit image here (800 width, 500 height)
            $thumbnailpath = $path.$imageNameToStore;
            $img = Image::make($request->file('thumb')->getRealPath())->fit(800, 500, function ($constraint) { $constraint->upsize(); })->save($thumbnailpath);
        }
        else{
            $imageNameToStore = Null;
        }


        // store data
        $blog = new Blog();
        $blog->name = $request->name;
        $blog->slug = $slug;
        $blog->details = $request->details;
        $blog->thumb = $imageNameToStore;
        $blog->save();

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
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'name' => 'required | unique:blogs,name,'.$blog->id,
            'details'  => 'required',
            'thumb'  => 'nullable | image',
        ]);

        // Slug
        $slug = Str::slug($request->name, '-');


        // image upload, fit and store inside public folder 
        if($request->hasFile('thumb')){

            $thumb = public_path('uploads/'.$this->path.'/'.$blog->thumb);
            if(File::isFile($thumb)){
                File::delete($thumb);
            }

            //Upload New Image
            $filenameWithExt = $request->file('thumb')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            $extension = $request->file('thumb')->getClientOriginalExtension();
            $imageNameToStore = $filename.'_'.time().'.'.$extension;

            //Crete Folder Location
            $path = public_path('uploads/'.$this->path.'/');
            if (! File::exists($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            //Resize And Crop as Fit image here (800 width, 500 height)
            $thumbnailpath = $path.$imageNameToStore;
            $img = Image::make($request->file('thumb')->getRealPath())->fit(800, 500, function ($constraint) { $constraint->upsize(); })->save($thumbnailpath);
        }
        else{

            $imageNameToStore = $blog->thumb; 
        }


        // store data
        $blog->name = $request->name;
        $blog->slug = $slug;
        $blog->details = $request->details;
        $blog->thumb = $imageNameToStore;
        $blog->status = $request->status;
        $blog->save();

        toastr()->success('Update Successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        // Delete
        $thumb = public_path('uploads/'.$this->path.'/'.$blog->thumb);
        if(File::isFile($thumb)){
            File::delete($thumb);
        }

        $blog->delete();

        toastr()->success('Delete Successfully');

        return redirect()->back();
    }
}
