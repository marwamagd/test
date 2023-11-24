<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class Carcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars= Car ::get();
        return view('car' , compact('cars'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AddCar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cars = new Car;
        $cars->carTitle = $request->carTitle;
        $cars->description = $request->description;
        if(isset($request->published)){
            $cars->published = true;
        }else{
            $cars->published = false;
        }
        
        return "Car data added successfully";  
        $cars->save();
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
        return "the car's id is:".$id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
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
