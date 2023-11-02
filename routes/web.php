<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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




Route::get('dashborad', function () {
    return view('dashborad');
    
});

Route::get('garph_view', function () {
    return view('garph_view');
    
});

Route::get('master', function () {
    return view('master');
    
});
Route::get('add-user', function () {
    return view('add-user');
    
});
Route::get('user-details', function () {
    return view('user-details');
    
});