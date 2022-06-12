<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectController;

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

Route::get('/',[projectController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});


Route::get('projectcreate',[projectController::class, 'create']);
Route::post('projectstore',[projectController::class, 'store']);