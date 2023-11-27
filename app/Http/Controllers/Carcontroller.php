<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class Carcontroller extends Controller
{
    private $columns = ['carTitle','description','published'];
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
        $cars->save();
        return "Car data added successfully";
    }
     

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cars = Car::findOrFail($id);
        return view('Details-Car',compact('cars'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cars = Car::findOrFail(  $id);
        return view('update-car',compact('cars'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $data = $request->only($this->columns);
        $data['published'] = isset($data['published'])? true:false;

        Car::where('id', $id)->update($data);

       
    
        return "updated";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::where('id', $id)->delete();
        return "deleted";
     
    }
}
