<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    private $columns = ['NewsTitle', 'Author', 'Content', 'published'];
    
    public function index()
    {
        $News = News::get();
        return view("Show-News",compact('News'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('Add-News');
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

        $new = News::findOrFail($id);
        return view('Details-News',compact('new'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $new = News::findOrFail($id);
        return view('update-News',compact('new'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
        {
            $data = $request->only($this->columns);
            $data['published'] = isset($data['published'])? true:false;
    
            News::where('id', $id)->update($data);
            return "updated";
        }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        News::where('id', $id)->delete();
        return "deleted";
     
    
        }
    }

