<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\SiteSettingController;
use App\Http\Controllers\Frontend\HomeContoller;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\AddLocatController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Backend\SubSubCategoryController;
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



Route::get('/config-clear', function() {
    Artisan::call('config:cache');
    return "config  is cleared";
});

Route::get('/cache-clear', function() {
    Artisan::call('config:cache');
    return "Cache is cleared";
});



Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return "view is cleared";
});
//#################################### Front end controllers start   ####################################

Route::get('/',[HomeContoller::class, 'index'])->name('home.page');
Route::get('/services',[HomeContoller::class, 'frontend_services'])->name('serives.page');
Route::get('/add-post',[PostController::class, 'frontend_addpost'])->name('add.page.view');
Route::post('/store-post',[PostController::class, 'store_frontend_post'])->name('store.front.post');


Route::get('/ajax/{category_id}', [PostController::class, 'Get_Sub_Category']);
// apned sub category in admin padenl area 




//#################################### Front end controllers end   ####################################

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// ================================================ Admin prefix start  ================================================
Route::prefix('admin')->group(function(){

Route::get('/login',[AdminController::class, 'index'])->name('login_form');
Route::post('/login/owner',[AdminController::class, 'login'])->name('admin.login');
Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin');

Route::get('/logout',[AdminController::class, 'admin_logout'])->name('admin.logout')->middleware('admin');
########################## mange users #######################
//admin register
Route::get('/register',[AdminController::class, 'admin_register'])->name('admin.register')->middleware('admin');
// admin create user 
Route::post('/user-create',[AdminController::class, 'admin_user_create'])->name('admin.user_create')->middleware('admin');
// Route::get('/admin-create',[AdminController::class, 'admin_user_create'])->name('seller_login_form')->middleware('admin');
Route::get('/view/admin-user',[AdminController::class, 'add_admin_user'])->name('add.admin_user')->middleware('admin');
// edit admin user 
Route::get('/edit/admin-profile/{id}',[AdminController::class, 'edit_admin_user'])->name('edit.admin_user')->middleware('admin');
//update admin user profile 
Route::post('/update/admin-profile/{id}',[AdminController::class, 'update_admin_user'])->name('update.admin_user')->middleware('admin');

Route::get('/delete/admin-user/{id}',[AdminController::class, 'delete_admin_user'])->name('delete.admin_user')->middleware('admin');




// ======================== admin user =================
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
//add sub category 
Route::get('/add',[SubCategoryController::class, 'add_front_subcategory'])->name('add.front.subcategory');
//store sub category 
Route::post('/store',[SubCategoryController::class, 'store_front_subcategory'])->name('store.front.subcategory');
// edit sub category 
Route::get('/edit/{id}',[SubCategoryController::class, 'edit_front_subcategory'])->name('edit.front.subcategory');
// update.front.subcategory
Route::post('/update/{id}',[SubCategoryController::class, 'update_front_subcategory'])->name('update.front.subcategory');

// delete.front.subcategory
Route::get('/delete/{id}',[SubCategoryController::class, 'delete_front_subcategory'])->name('delete.front.subcategory');
// ================== sub sub  category started ===================
Route::get('/sub/sub-view',[SubSubCategoryController::class, 'view_sub_subcategory'])->name('view.front.sub_subcategory');

// add page for sub sub category 
Route::get('/sub/add',[SubSubCategoryController::class, 'add_sub_subcategory'])->name('add.sub.subcategory');

// Ajax for append sub category 
Route::get('/ajax/{category_id}', [SubSubCategoryController::class, 'GetSubCategory']);
//store sub sub cat data 
Route::post('/sub/store',[SubSubCategoryController::class, 'store_sub_subcategory'])->name('store.sub.subcategory');
// edit sub sub cat data 
Route::get('/sub/edit/{id}',[SubSubCategoryController::class, 'edit_sub_subcategory'])->name('edit.sub.subcategory');
// update.sub.subcategory
Route::post('/sub/update/{id}',[SubSubCategoryController::class, 'update_sub_subcategory'])->name('update.sub.subcategory');
//delete sub sub cat data 
Route::get('/sub/delete/{id}',[SubSubCategoryController::class, 'delete_sub_subcategory'])->name('delete.sub.subcategory');









});
// locations prefix start from here 
Route::prefix('location')->group(function(){
Route::get('/view',[AddLocatController::class, 'view_front_location'])->name('view.all.location');
Route::get('/add',[AddLocatController::class, 'add_frontview_location'])->name('add.all.location');
Route::post('/store',[AddLocatController::class, 'store_frontview_location'])->name('store.all.location');
Route::get('/edit/{id}',[AddLocatController::class, 'edit_frontview_location'])->name('edit.all.location');
Route::post('/update/{id}',[AddLocatController::class, 'update_frontview_location'])->name('update.all.location');
Route::get('/delete/{id}',[AddLocatController::class, 'delete_frontview_location'])->name('delete.all.location');





    });

#################### sub category prefix end  ####################
});

//################################## admin middleware end  ##################################



});
// ================================================ Admin prefix end  ================================================





    
