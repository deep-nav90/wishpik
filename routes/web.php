<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Website\IndexController;
//admin
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
//customer
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Customer\WishController;
use App\Http\Controllers\Customer\ProfileController;
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
Auth::routes();
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return "will clear the all cached!";
});

//newcode rajinder
Route::get('/user/login',function(){
    return view('user.login');
  });
  Route::get('/user/signup',function(){
    return view('user.signup');
  });
  Route::get('/user/otp',function(){
    return view('user.otp');
  });
  Route::get('/user/profile',function(){
    return view('user.profile');
  });
  Route::get('/user/signupdone',function(){
    return view('user.signupdone');
  });
  Route::get('/user/wish-select',function(){
    return view('user.wish-select');
  });
  Route::get('/user/template-select',function(){
    return view('user.template-select');
  });
  Route::get('/user/template-upload',function(){
    return view('user.template-upload');
  });
  Route::get('/user/template-download',function(){
    return view('user.template-download');
  });
  Route::get('/user/edit-profile',function(){
    return view('user.edit-profile');
  });
  Route::get('/user/terms-and-conditions',function(){
    return view('user.terms-and-conditions');
  });
  Route::get('/user/privacy-policy',function(){
    return view('user.privacy-policy');
  });
  Route::get('/user/cancellation-and-refund',function(){
    return view('user.cancellation-and-refund');
  });
  Route::get('/user/shipping-and-delivery',function(){
    return view('user.shipping-and-delivery');
  });

  Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return "will clear the all cached!";
});
  //front
  Route::get('/', [IndexController::class, 'index'])->name('index');
  Route::get('/shipping-policy',function(){
    return view('website.shipping-policy');
  });
  Route::get('/privacy-policy',function(){
    return view('website.privacy-policy');
  });
  Route::get('/term-and-condition',function(){
    return view('website.term-condition');
  });
  Route::get('/refund-policy',function(){
    return view('website.refund-policy');
  });
  //end
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//admin
Route::group(['prefix' => 'admin'], function () {
  //auth
  Route::get('/', [AdminController::class, 'login'])->name('login');
  Route::post('/logincheck', [AdminController::class, 'logincheck'])->name('logincheck');
  //end
  Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');

});

Route::get('/checkguard', [AdminController::class, 'checkguard'])->name('checkguard');
Route::group(['prefix' => 'admin', 'middleware' => 'adminAuth'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    //category
    Route::get('/category', [CategoryController::class, 'category'])->name('admin.category');
    Route::get('/category_status', [CategoryController::class, 'category_status'])->name('admin.category_status');
    Route::get('/add-category', [CategoryController::class, 'store'])->name('admin.add-category');
    Route::match(['GET','POST'],'/add', [CategoryController::class, 'addCategory'])->name('admin.add_category');
    Route::post('/check_category_name', [CategoryController::class, 'checkCategoryNameExists'])->name('admin.check_category_name');
    Route::match(['GET','POST'],'/edit/{id}', [CategoryController::class, 'editCategory'])->name('admin.edit_category');
    Route::post('/delete', [CategoryController::class, 'deleteCategory'])->name('admin.delete_category');
    Route::get('/view/{id}', [CategoryController::class, 'viewCategory'])->name('admin.view-category');
    Route::match(['GET','POST'],'/changepassword', [AdminController::class, 'changepassword'])->name('admin.changepassword');
    //end
    //product
    Route::group(['prefix' => 'product'], function () {
    Route::get('/', [ProductController::class, 'list'])->name('admin.product_list');
    Route::match(['GET','POST'],'/add', [ProductController::class, 'addProduct'])->name('admin.product.add');
    Route::get('/categoryExist', [ProductController::class, 'checkCategoryNameExists'])->name('admin.categoryExist');
    Route::get('/product_status', [ProductController::class, 'product_status'])->name('admin.product_status');
    Route::match(['GET','POST'],'/edit/{id}', [ProductController::class, 'editProduct'])->name('admin.edit_product');
    Route::post('/delete', [ProductController::class, 'deleteProduct'])->name('admin.delete_product');
    Route::get('/view/{id}', [ProductController::class, 'viewProduct'])->name('admin.view-product');
    
});
    //end product
    Route::group(['prefix' => 'customer'], function () {
      Route::get('/', [AdminController::class, 'customer_list'])->name('admin.customer_list');
    });

}); 
//customer controler
Route::group(['prefix' => 'customer'], function () {
  Route::get('/', [CustomerController::class, 'login'])->name('customer.login');
  Route::match(['GET','POST'],'/login', [CustomerController::class, 'login'])->name('customer.login');
  Route::match(['GET','POST'],'/signup', [CustomerController::class, 'signup'])->name('customer.signup');
  Route::match(['GET','POST'],'/otp', [CustomerController::class, 'otp'])->name('customer.otp');
  Route::match(['GET','POST'],'/profile', [CustomerController::class, 'profile'])->name('customer.profile');
 
  
});
  //wish
  Route::group(['prefix' => 'customer', 'middleware' => 'customer'], function () {
    Route::get('/signupdone', [CustomerController::class, 'signupdone'])->name('customer.signupdone');

  Route::get('/wish-select', [WishController::class, 'wish_select'])->name('customer.wish-select');
  Route::post('/filter-category', [WishController::class, 'filterCategory'])->name('filter.category');
  Route::get('/wish-template', [WishController::class, 'wish_template'])->name('customer.wish-template');
  Route::get('/logo-upload', [WishController::class, 'logo_upload'])->name('customer.logo-upload');
  Route::get('/template-wish', [WishController::class, 'template_wish'])->name('customer.template-wish');
  Route::match(['GET','POST'],'/filter-product', [WishController::class, 'filterProduct'])->name('filter.product');
  Route::get('/template-select', [WishController::class, 'template_select'])->name('customer.template-select');
  //profile
  // Route::get('/profile', [ProfileController::class, 'customer_profile'])->name('customer.profile');
 
});
//end customer controller


