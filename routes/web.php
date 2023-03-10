<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/form', function () {
    return view('form');
});
Route::get('/',[HomeController::class,'show']);
Route::get('/index',[HomeController::class,'show'])->name('show');

Route::post('/',[HomeController::class,'store'])->name('store');

Route::get('/edit/{id?}',[HomeController::class,'edit'])->name('edit');
Route::get('/delete/{id?}',[HomeController::class,'delete'])->name('delete');


Route::any('/edit-action',[HomeController::class,'update'])->name('edit-action');

Route::get('/{id}/completed',[HomeController::class,'completed']);