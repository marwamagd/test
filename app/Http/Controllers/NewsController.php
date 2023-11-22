<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('News');
    }

   
    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $new= new News();
        $new->NewsTitle = $request->title;
        $new->Content = $request->content; 
        $new->Author = $request->author;
        $published = $request->published;
        if ($published)  {
            $new->published =1;
        }    
        else {
            $new->published =0;
        }  
        $new->save();
        return 'News data Added Successfully';   
     }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
