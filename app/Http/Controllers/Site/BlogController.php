<?php
namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;


class BlogController extends Controller
{
    /**
     * Handle the incoming request.

     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.blog.index');
    }
}
