<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function test1(){
       return view("login");
    }
    public function AddCar(){
        return view("AddCar");

     }
 
     public function cardata(Request $request){
     $The_carTitle=$request->title;
     $The_price=$request->price;
     $The_Des=$request->Description;
     $The_pub=$request->published;
     if ($The_pub) {
       $The_pub= "Yes";
   } else {
       $The_pub= "No";
       
     $The_carTitle=$request->title;
    }   return view("show_cardata", compact('The_carTitle', 'The_price', 'The_Des', 'The_pub'));
}
}
