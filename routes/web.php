<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Customer\CustomerController;

//admin
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;


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
Auth::routes();
Route::get('/', [FrontController::class, 'index'])->name('index');
//end
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return "will clear the all cached!";
});
//customer controler
Route::group(['prefix' => 'customer'], function () {
    Route::get('/', [CustomerController::class, 'login'])->name('customer.login');
    Route::match(['GET','POST'],'/signup', [CustomerController::class, 'signup'])->name('customer.signup');

    Route::get('/otp', [CustomerController::class, 'otp'])->name('customer.otp');
    Route::get('/profile', [CustomerController::class, 'profile'])->name('customer.profile');
    Route::get('/signupdone', [CustomerController::class, 'signupdone'])->name('customer.signupdone');
    Route::get('/wish-select', [CustomerController::class, 'wish_select'])->name('customer.wish-select');
 });
//end customer controller
//admin controller
Route::group(['prefix' => 'admin'], function () {
    //auth
    Route::get('/', [AdminController::class, 'login'])->name('adminLogin');
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
}); 

//end admin controller





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
