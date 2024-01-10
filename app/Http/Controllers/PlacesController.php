<?php

namespace App\Http\Controllers;
use App\Models\Explore;
use App\Traits\Common;

use Illuminate\Http\Request;

class PlacesController extends Controller
{
use common;    
    public function index()
    {
        $explores = Explore::all();
        return view('place',compact('explores'));
    }

    public function create()
    {
        return view('add-place-form');
    }


    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'title' => 'required|string',
            'rating' => 'required|numeric',
            'price' => 'required|numeric',  
            'description' => 'required|string',
        ]);

        $fileName = $this->uploadFile($request->file('image'), 'assets/images/places');
        
        $explores = Explore ::create([
            'image' => $fileName,
            'title' => $request->input('title'),
            'rating' => $request->input('rating'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'is_featured' => $request->has('is_featured'),
        ]);

       return('Data Added  ');
     }
}
