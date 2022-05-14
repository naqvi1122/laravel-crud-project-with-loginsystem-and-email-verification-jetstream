<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/about',[ProjectController::class,'about'] );
Route::get('/contact',[ProjectController::class,'contact'] );
Route::post('/shah',[ProjectController::class,'store'] );
Route::get('/display',[ProjectController::class,'show'] );
Route::get('/project/delete/{id}',[ProjectController::class,'destroy'] );
Route::get('/project/edit/{id}',[ProjectController::class,'edit'] );
Route::post('/project/update/{id}',[ProjectController::class,'update'] );

Route::get('/tabledit',[ProjectController::class,'index'] );

Route::post('/tabledit/action/',[ProjectController::class,'action'] )->name('tabledit.action');


