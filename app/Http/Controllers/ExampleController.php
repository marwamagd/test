<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 class ExampleController extends Controller
{
    //
public function test1(){    // test1 -> method's name
    return view("login");
}
public function blog(){     
    return view("blog");
}

public function blog1(){     
    return view("blog1");
}
<<<<<<< HEAD
public function mySession(){
   session()->put('test','first laravel session') ;    
    $data = session('test');
    //session()->forget('test');

   return view("session",compact('data'));
}
=======

>>>>>>> fca7a7134065c44a08474e56eb786e69c4eef458

}
