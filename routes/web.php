<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\SiteSettingController;
use App\Http\Controllers\Frontend\HomeContoller;
use App\Http\Controllers\Frontend\UserDetailController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\AddLocatController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Backend\SubSubCategoryController;
use App\Http\Controllers\Backend\BidController;
use App\Http\Controllers\Backend\StaticPageContoller;
use App\Http\Controllers\Frontend\ReportController;
use App\Http\Controllers\Frontend\AddSearchController;
use App\Http\Controllers\Frontend\ClasifiedController;

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


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

// Route::get('/', function () {
//     return view('frontend.index');
// })->name('home.page');

Route::get('send-email', [HomeContoller::class, 'sendmail']);

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
// showing services page 
Route::get('/services',[HomeContoller::class, 'frontend_services'])->name('serives.page');
//Add post page view  
Route::get('/add-post',[PostController::class, 'frontend_addpost'])->name('add.page.view');
// Add store in DB  
Route::post('/store-post',[PostController::class, 'store_frontend_post'])->name('store.front.post');
// apned sub category in admin padenl area 
Route::get('/ajax/{category_id}', [PostController::class, 'Get_Sub_Category']);
//sub sub category append
// niche wala route hai upar wala to theek hai 
Route::get('/sub-subcat/ajax/{subcategory_id}', [PostController::class, 'Get_Sub_subCategory']);
// showing add page 
Route::get('/add-page/{id}',[HomeContoller::class, 'frontend_add'])->name('frontend.add.page');
// classifieds
Route::get('/classifieds',[UserDetailController::class,'show_classifieds'])->name('user.classifieds');
// email-alerts
Route::get('/email-alerts',[UserDetailController::class,'show_email_alerts'])->name('user.email.alert');
// profile
Route::get('/profile',[UserDetailController::class,'user_profile'])->name('user.profile');
// update password 
Route::post('/update/password',[UserDetailController::class,'update_user_password'])->name('user.password.update');
// user profile data update 

Route::post('/update/profile/{id}',[UserDetailController::class,'update_user_profile_data'])->name('user.data.update');

//update profile photo 
Route::post('/update/photo/{id}',[UserDetailController::class,'update_user_picture'])->name('update.profile.photo');

// ================================= clasified add =======================
Route::prefix('clasified')->group(function(){
    // view user posted add 
    Route::get('/view/{id}',[ClasifiedController::class,'view_clasified_add'])->name('View.clasified.add');
    //edit clasified
    Route::get('/edit/{id}',[ClasifiedController::class,'edit_clasified_add'])->name('edit.clasified.add');
    // update clasified add 
    Route::post('/update/{id}',[ClasifiedController::class,'update_clasified_add'])->name('update.clasified.add');
   //delete
    Route::get('/delete/{id}',[ClasifiedController::class,'delete_clasified_add'])->name('delete.clasified.add');

    

});



// Report by user on post 
Route::get('/reported/{id}',[ReportController::class,'post_report'])->name('frontend.report_on.post');
// searched-adds
Route::get('/searched-adds',[AddSearchController::class,'search_adds'])->name('frontend.add_lists');



//#################################### Front end controllers end   ####################################
Route::get('/dashboard', function () {
    // return view('dashboard');
    return redirect()->route('user.profile');
})->middleware(['auth','verified'])->name('dashboard');
require __DIR__.'/auth.php';
// ================================================ Admin prefix start  ================================================
Route::prefix('admin')->group(function(){
//################ ################ Admin  Controller group  ################  ################
Route::controller(AdminController::class)->group(function () {
  
Route::get('/login','index')->name('login_form');
Route::post('/login/owner', 'login')->name('admin.login');
// admin middleware group start 
Route::group(['middleware'=>'admin'],function(){
// admin dashboard 
Route::get('/dashboard', 'dashboard')->name('admin.dashboard');
// admin logout 
Route::get('/logout', 'admin_logout')->name('admin.logout');
########################## mange users #######################
//admin register
Route::get('/register', 'admin_register')->name('admin.register');
// admin create user 
Route::post('/user-create', 'admin_user_create')->name('admin.user_create');
// Route::get('/admin-create',[AdminController::class, 'admin_user_create'])->name('seller_login_form')->middleware('admin');
Route::get('/view/admin-user', 'add_admin_user')->name('add.admin_user');
// edit admin user 
Route::get('/edit/admin-profile/{id}', 'edit_admin_user')->name('edit.admin_user');
//update admin user profile 
Route::post('/update/admin-profile/{id}', 'update_admin_user')->name('update.admin_user');

Route::get('/delete/admin-user/{id}', 'delete_admin_user')->name('delete.admin_user');
});

//Admin middle ware   end 


// =================== add admin user ============================
//################################## admin middleware start  ##################################
Route::group(['middleware'=>'admin'],function(){
// Manage site by admin panel users prefix start 
Route::prefix('/site-users')->group(function(){
// view all site user table 
Route::get('/all/user', 'add_user')->name('add.site_user');
// view form for add new site user  
Route::get('/add-user', 'add_site_user')->name('add.newsite_user');
// store site user 
Route::post('/store-new', 'store_site_user')->name('store.newsite_user');
// view user by single id 
Route::get('/view/{id}', 'view_site_user')->name('view.site_user');
// Edit user by single id 
Route::get('/edit/{id}', 'edit_site_user')->name('edit.site_user');
// update user by single id
Route::post('/update/{id}', 'update_site_user')->name('update.site_user');
// Delete user by single id 
 Route::get('/delete/{id}', 'delete_site_user')->name('delete.site_user');

});
// site user prefix end 

//################ ################ Controller group  end  ################  ################

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
// manage logo prefix end 
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
// manage banner prefix end 
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
// category prefix end 
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
// subcat prefix end 
//  ===================== bids  prefix ============================
Route::prefix('bids')->group(function(){
Route::get('/view',[BidController::class, 'front_bid_view'])->name('front.bid.view');
// apned sub category in admin padenl area 
Route::get('/ajax/{category_id}', [BidController::class, 'Get_Sub_Category']);

Route::get('/edit/{id}',[BidController::class, 'front_bid_edit'])->name('front.bid.edit');
// update.front.bidpost
Route::post('/update/{id}',[BidController::class, 'update_front_bid'])->name('update.front.bidpost');
Route::get('/delete/{id}',[BidController::class, 'delete_front_bid'])->name('delete.front.bidpost');

// active bid
Route::get('/active/{id}',[BidController::class, 'active_front_bid'])->name('active.front.bidpost');
// inactive bid
Route::get('/inactive/{id}',[BidController::class, 'inactive_front_bid'])->name('inactive.front.bidpost');


});
// bid prefix end 


// locations prefix start from here 
Route::prefix('location')->group(function(){
Route::get('/view',[AddLocatController::class, 'view_front_location'])->name('view.all.location');
Route::get('/add',[AddLocatController::class, 'add_frontview_location'])->name('add.all.location');
Route::post('/store',[AddLocatController::class, 'store_frontview_location'])->name('store.all.location');
Route::get('/edit/{id}',[AddLocatController::class, 'edit_frontview_location'])->name('edit.all.location');
Route::post('/update/{id}',[AddLocatController::class, 'update_frontview_location'])->name('update.all.location');
Route::get('/delete/{id}',[AddLocatController::class, 'delete_frontview_location'])->name('delete.all.location');

    });
    // prefic location end 
    // locations prefix start from here 
Route::prefix('static-pages')->group(function(){
    Route::controller(StaticPageContoller::class)->group(function () {
    Route::get('/privacy-page', 'privacy')->name('backend.privacy.page');
    // Route::get('/add','add_frontview_location')->name('add.all.location');
    // Route::post('/store', 'store_frontview_location')->name('store.all.location');
    // Route::get('/edit/{id}', 'edit_frontview_location')->name('edit.all.location');
    // Route::post('/update/{id}', 'update_frontview_location')->name('update.all.location');
    // Route::get('/delete/{id}', 'delete_frontview_location')->name('delete.all.location');      
});
// email prefix start 



  
// mail prefix end 
});
// end static pages prefix and contoller routes  

#################### sub category prefix end  ####################
});
});
//################################## admin middleware end  ##################################



});
// ================================================ Admin prefix end  ================================================





    
