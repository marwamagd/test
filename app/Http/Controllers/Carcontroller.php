<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Traits\Common;


class Carcontroller extends Controller
{
    use Common;
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
        $messages=[
            'carTitle.required'=>'Title is required',
            'description.required'=> 'should be text',
        ];

        $data = $request->validate([
            'carTitle'=>'required|string',
            'description'=>'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ], $messages);
        
       
        // $data = $request->only($this->columns);
        $fileName = $this->uploadFile($request->image, 'assets/images');
        $data['image']= $fileName;
         $data['published'] = isset($data['published'])? true : false;
        Car:: create($data);
        return 'done' ;
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
        $data = $request->validate([
            'carTitle' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:2048'
             
        ]);
     
        if ($request->hasFile('image')) {
            $fileName = $this->uploadFile($request->file('image'), 'assets/images');
            $data['image'] = $fileName;
        }
 
    
        Car::where('id', $id)->update($data);
    
        return "Data Updated Successfully";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : RedirectResponse
    {
        Car::where('id', $id)->delete();
        return redirect ('showcars');
     
    }

    public function trashed ()
    {
        $cars = Car::onlyTrashed() ->get ();
        return View ('TrashedCar', compact ('cars'));
     
    }
    public function restore(String $id):RedirectResponse
    {
        Car::where('id',$id)->restore();
        return redirect('showcars');
    }                                                                                                                                                                                                                                                                                                                                                                                                               
    // delete force 

    public function delete(string $id) : RedirectResponse
    {
        Car::where('id',$id)->forceDelete();
        Car::where('id', $id)->delete();
        return redirect ('showcars');
     
    }

     
}

