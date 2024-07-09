<?php

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

Route::redirect('/','/dashboard');  //to start the serve fromt the dashbord

Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});

Route::prefix('web')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
});

