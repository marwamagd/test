<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Carcontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



/*Route::fallback(function(){
    return redirect('/');
});*/

Route::get('cv',function(){
    return view('cv');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',function(){
    return view('login');
});
Route::post('receive',function(){
    return ('receive');
})->name('receive');

Route::get('test1',[ExampleController::class, 'test1']);


//Route::get('AddCar',[ExampleController::class, 'AddCar']);

/*Route::post('cardata',[ExampleController::class, 'cardata']);*/

Route::get('addcar',[Carcontroller::class, 'create']);

Route::get('showcars',[Carcontroller::class,'index']);
Route::post('store-data',[Carcontroller::class, 'store'])->name('store-data');
Route::get('editcar/{id}',[Carcontroller::class,'edit'])->name('editcar');

Route::get('News',[NewsController::class,'create']);
Route::post('store-data',[NewsController::class, 'store'])->name('store-data');
Route::get('edit-News/{News_id}',[NewsController::class,'edit']);
Route::put('update-News/{News_id}',[NewsController::class,'update'])->name('update-News');
Route::get('Show-News',[NewsController::class,'index']);
Route::get('Add-News',[NewsController::class, 'create']);
