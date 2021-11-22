<?php
namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
class CategoryController extends  Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     */
    public function show($slug)
    {
        return view('site.category.show', ['slug' => $slug]);
    }
}

