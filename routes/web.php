<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\frontend\HomeContoller;
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
Route::get('/',[HomeContoller::class, 'index'])->name('home.page');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::prefix('admin')->group(function(){

Route::get('/login',[AdminController::class, 'index'])->name('login_form');
Route::post('/login/owner',[AdminController::class, 'login'])->name('admin.login');
Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin');

Route::get('/logout',[AdminController::class, 'admin_logout'])->name('admin.logout')->middleware('admin');

//admin register
Route::get('/register',[AdminController::class, 'admin_register'])->name('admin.register');

// admin create user 
Route::post('/user-create',[AdminController::class, 'admin_user_create'])->name('admin.user_create');
Route::get('/user-create',[AdminController::class, 'admin_user_create'])->name('seller_login_form');

});