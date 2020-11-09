<?php

namespace App\Http\Controllers\Web;

use App\Model\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        
        $data['blog'] = Blog::where('slug', $slug)
        					->where('status', 1)
        					->firstOrFail();

        return view('web.single-blog', $data);
    }
}
