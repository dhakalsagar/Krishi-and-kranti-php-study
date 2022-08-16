<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InformationnController;
use App\Http\Controllers\ContactUsController;

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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

route::get('/redirect',[HomeController::class,'redirect']);

route::get('/',[HomeController::class,'index']);

route::get('/pedigree',[AdminController::class,'pedigree']);

route::get('/registereddata',[AdminController::class,'registereddata']);

route::get('/deletedata/{id}',[AdminController::class,'deletedata']);

route::post('/uploadpedigree',[AdminController::class,'uploadpedigree']);

route::get('/search',[HomeController::class,'search']);

// Route::post('/store-input-fields', [AdminController::class, 'store']);

route::get('/informationn',[AdminController::class,'informationn']);

route::post('/uploadinformationn',[AdminController::class,'uploadinformationn']);

// route::get('/animal',[HomeController::class,'animal']);

route::get('/detail',[HomeController::class,'detail']);

Route::get('/contact', [ContactUsController::class, 'showForm']);

Route::post('/contact', [ContactUsController::class, 'ContactUsForm'])->name('contact.save');

route::get('/data',[HomeController::class,'dataa']);

// Route::('/pedigree/{id}',
// 	['uses' => 'HomeController@detail']);











