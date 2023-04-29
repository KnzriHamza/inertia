<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexContoller;
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

Route::get('/', [IndexContoller::class,'Index']);
Route::get('/home', [IndexContoller::class,'Show']);
