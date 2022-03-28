<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\SiteSettingController;
use App\Http\Controllers\Frontend\HomeContoller;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
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
//     return view('frontend.index');
// })->name('home.page');





Route::get('/cache-clear', function() {
    Artisan::call('config:cache');
    return "Cache is cleared";
});

Route::get('/config-clear', function() {
    Artisan::call('config:cache');
    return "config  is cleared";
});

Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return "view is cleared";
});


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
// Route::get('/register',[AdminController::class, 'admin_register'])->name('admin.register');
########################## mange users #######################
// admin create user 
Route::post('/user-create',[AdminController::class, 'admin_user_create'])->name('admin.user_create');
// Route::get('/user-create',[AdminController::class, 'admin_user_create'])->name('seller_login_form');

// =================== add admin user ============================

//################################## admin middleware start  ##################################
Route::group(['middleware'=>'admin'],function(){
// Manage site users prefix start 
Route::prefix('/site-users')->group(function(){
// view all site user table 
Route::get('/all/user',[AdminController::class, 'add_user'])->name('add.site_user');
// view form for add new site user  
Route::get('/add-user',[AdminController::class, 'add_site_user'])->name('add.newsite_user');
// store site user 
Route::post('/store-new',[AdminController::class, 'store_site_user'])->name('store.newsite_user');
// view user by single id 
Route::get('/view/{id}',[AdminController::class, 'view_site_user'])->name('view.site_user');
// Edit user by single id 
Route::get('/edit/{id}',[AdminController::class, 'edit_site_user'])->name('edit.site_user');
// update user by single id
Route::post('/update/{id}',[AdminController::class, 'update_site_user'])->name('update.site_user');
// Delete user by single id 
 Route::get('/delete/{id}',[AdminController::class, 'delete_site_user'])->name('delete.site_user');


});

// ================================ frontend  logo setting ===============================
Route::prefix('logo')->group(function(){
Route::get('/view',[SiteSettingController::class, 'view_site_logo'])->name('view.site.logo');
//view form for logo change
Route::get('/add',[SiteSettingController::class, 'add_site_logo'])->name('add.site.logo');
// store frontend logo
Route::post('/store',[SiteSettingController::class, 'store_site_logo'])->name('store.site.logo');

Route::get('/edit/{id}',[SiteSettingController::class, 'edit_site_logo'])->name('edit.site.logo');

Route::post('/update/{id}',[SiteSettingController::class, 'update_site_logo'])->name('update.site.logo');
//delete logo
Route::get('/delete/{id}',[SiteSettingController::class, 'delete_site_logo'])->name('delete.site.logo');

});
###################### logo prefix end #########################
Route::prefix('banner')->group(function(){
// ================================ frontend  banner  setting =============================== 
// view front banner
Route::get('/view-banner',[SiteSettingController::class, 'view_front_banners'])->name('view.front.banners');
// add front banner
Route::get('/add-banner',[SiteSettingController::class, 'add_front_banners'])->name('add.front.banner');
// store banner
Route::post('/store-banner',[SiteSettingController::class, 'store_front_banners'])->name('store.front.banner');
//Edit front end banner 
Route::get('/edit_banner/{id}',[SiteSettingController::class, 'edit_front_banner'])->name('edit.front.banner');
// edit banner 
Route::post('/update_banner/{id}',[SiteSettingController::class, 'update_front_banners'])->name('update.front.banner');
//delete banner images fron frontend 
Route::get('/delete_banner/{id}',[SiteSettingController::class, 'delete_front_banner'])->name('delete.front.banner');

});
######################  banner prefix end #########################

Route::prefix('category')->group(function(){
Route::get('/view',[CategoryController::class, 'view_front_category'])->name('view.front.category');
//add category 
Route::get('/add',[CategoryController::class, 'add_front_category'])->name('add.front.category');
// store category 
Route::post('/store',[CategoryController::class, 'store_front_category'])->name('store.add.category');
// edit
Route::get('/edit/{id}',[CategoryController::class, 'edit_front_category'])->name('edit.front.category');
// update
Route::post('/update/{id}',[CategoryController::class, 'update_front_category'])->name('update.add.category');
// delete
Route::get('/delete/{id}',[CategoryController::class, 'delete_front_category'])->name('delete.front.category');


});
#################### category prefix end  ####################
Route::prefix('subcategory')->group(function(){
Route::get('/view',[SubCategoryController::class, 'view_front_subcategory'])->name('view.front.subcategory');

});
#################### sub category prefix end  ####################
});
//################################## admin middleware end  ##################################

// Manage site users prefix  end 

// =================== Manage and edit site user ==========================


// ======================== admin user =================
Route::get('/view/admin-user',[AdminController::class, 'add_admin_user'])->name('add.admin_user');

});




    
