<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BiodataController;
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

Route::get('/', [DashboardController::class,"index"]);

Route::get('/form', [BiodataController::class,"daftar"]);
Route::post('/signup', [BiodataController::class,"register"]);
Route::get('/data-table', function(){
    return view('pages.data-table');
});

Route::get('/table', function(){
    return view('pages.table');
});
