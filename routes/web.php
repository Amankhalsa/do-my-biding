<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Frontend\HomeContoller;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/clear-cache', function() {
    Artisan::call('config:cache');
    return "Cache is cleared";
});



Route::get('/',[HomeContoller::class, 'index'])->name('home.page');