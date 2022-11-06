<?php

use App\Http\Controllers\OtomotifCarController;
use App\Http\Controllers\PokedexController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/', [OtomotifCarController::class, 'index']);

//add
Route::get('/Add',[OtomotifCarController::class,'add_view'])->name('display_add_view');

