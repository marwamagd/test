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



//car

Route::get('AddCar', [Carcontroller::class, 'create']);
Route::post('receive', [Carcontroller::class, 'store'])->name('receive');
Route::get('showcars', [Carcontroller::class, 'index']);

Route::put('updateCar/{id}', [Carcontroller::class, 'update'])->name('updateCar');
Route::get('editCar/{id}', [Carcontroller::class, 'edit']);
 
Route::get('Details-cars/{id}',[Carcontroller::class,'show'])->name('Details-cars');
Route::get('DeleteCar/{id}',[Carcontroller::class,'destroy'])->name('DeleteCar');


//news
Route::get('News',[NewsController::class,'create']);
Route::post('store-data',[NewsController::class, 'store'])->name('store-data');
Route::get('edit-News/{News_id}',[NewsController::class,'edit']);
Route::put('update-News/{News_id}',[NewsController::class,'update'])->name('update-News');
Route::get('Show-News',[NewsController::class,'index']);
Route::get('Add-News',[NewsController::class, 'create']);
Route::get('Details-News/{News_id}',[NewsController::class,'show'])->name('Details-News');
Route::get('Delete-News/{News_id}',[NewsController::class,'destroy'])->name('Delete-News');
Route::post('addNews', [NewsController::class, 'store'])->name('addNews');   

 