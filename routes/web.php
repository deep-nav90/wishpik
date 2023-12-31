<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserContoller;
use App\Http\Controllers\Admin\PaymentController;

use App\Http\Controllers\Website\IndexController;

//customer

use App\Http\Controllers\Customer\DashboardController;
use App\Http\Controllers\Customer\HistoryController;
use App\Http\Controllers\Customer\AdminLoginController;
use App\Http\Controllers\Customer\AdminRegisterController;
use App\Http\Controllers\Customer\MyWalletController;
use App\Http\Controllers\Customer\SellController;
use App\Http\Controllers\Customer\MarketPlaceController;
use App\Http\Controllers\Customer\ActiveBidsController;
use App\Http\Controllers\Customer\AllSavedController;
use App\Http\Controllers\Customer\profileController;
use App\Http\Controllers\Customer\SettingController;
use App\Http\Controllers\Customer\NotificationController;
use App\Http\Controllers\Customer\MessageController;
use App\Http\Controllers\Customer\FlorgotPasswordController;
use App\Http\Controllers\Customer\VerifyController;
use App\Http\Controllers\Customer\MyCollectionController;
use App\Http\Controllers\Customer\MarketPlaceDetailsController;
use App\Http\Controllers\Customer\ProductUploadController;





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

Route::get('/my-account',function(){
  return view('website.my-account');
})->name('adminLogin');

Route::get('admin/login',function(){
    return view('auth.login');
})->name('adminLogin');
Route::match(['GET','POST'],'admin/forgot-password',[AdminController::class,'adminForgotPassword'])->name('adminForgotPassword');
Route::match(['GET','POST'],'admin/reset-password/{token}',[AdminController::class,'resetPassword'])->name('adminResetPassword');

Route::middleware(['auth:admin'])->group(function () {
  // Admin Panel
  Route::group(['prefix' => 'admin'], function () {
   
    // Common
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


    // Users Management
    Route::group(['prefix' => 'users'], function () {
      // Normal Customer
        Route::match(['GET','POST'],'/list', [UserContoller::class, 'index'])->name('user_index');
        
        Route::get('/view/{id}', [UserContoller::class, 'viewUser'])->name('user_view');
        
        Route::post('/delete/user', [UserContoller::class, 'deleteUser'])->name('delete_user');

        Route::post('/order-history', [UserContoller::class, 'orderHistoryList'])->name('orderHistoryList');
        Route::post('/payment-history', [UserContoller::class, 'paymentHistoryList'])->name('paymentHistoryList');
        
    });
   // Admin Management
    Route::group(['prefix' => 'admins'], function () {
      Route::post('check-email-exists',[AdminsController::class,'checkEmail'])->name('checkEmailInAdminTable');
      Route::get('/list', [AdminsController::class, 'adminsList'])->name('admins_list');
      Route::get('/view/{id}', [AdminsController::class, 'viewAdmin'])->name('view_admin');
      Route::get('/edit/{id}', [AdminsController::class, 'editAdmin'])->name('edit_admin');
      Route::post('/update', [AdminsController::class, 'updateAdmin'])->name('update_admin');
      Route::post('/delete', [AdminsController::class, 'deleteAdmin'])->name('delete_admin');
      
      Route::get('/add', [AdminsController::class, 'addAdmin'])->name('add_admin');
      Route::post('/save', [AdminsController::class, 'saveAdmin'])->name('save_admin');
    });

     // Category Management
    Route::group(['prefix' => 'categories'], function () {
      Route::match(['GET','POST'],'/list', [CategoryController::class, 'categoryList'])->name('category_list');
      Route::match(['GET','POST'],'/add', [CategoryController::class, 'addCategory'])->name('add_category');
      Route::post('/check_category_name', [CategoryController::class, 'checkCategoryNameExists'])->name('check_category_name');
      Route::match(['GET','POST'],'/view/{id}', [CategoryController::class, 'viewCategory'])->name('view_category');
      Route::match(['GET','POST'],'/edit/{id}', [CategoryController::class, 'editCategory'])->name('edit_category');
      Route::post('/delete', [CategoryController::class, 'deleteCategory'])->name('delete_category');
      
    });


    // Attribute Management
    Route::group(['prefix' => 'attributes'], function () {
      Route::match(['GET','POST'],'/list', [AttributeController::class, 'attributeList'])->name('attribute_list');
      Route::match(['GET','POST'],'/add', [AttributeController::class, 'addAttribute'])->name('add_attribute');
      Route::post('/check_attribute_name', [AttributeController::class, 'checkAttributeNameExists'])->name('check_attribute_name');
      Route::match(['GET','POST'],'/view/{id}', [AttributeController::class, 'viewAttribute'])->name('view_attribute');
      Route::match(['GET','POST'],'/edit/{id}', [AttributeController::class, 'editAttribute'])->name('edit_attribute');
      Route::post('/delete', [AttributeController::class, 'deleteAttribute'])->name('delete_attribute');
      
    });

    // Coupon Management
    Route::group(['prefix' => 'coupons'], function () {
      Route::match(['GET','POST'],'/list', [CouponController::class, 'couponList'])->name('coupon_list');
      Route::match(['GET','POST'],'/add', [CouponController::class, 'addCoupon'])->name('add_coupon');
      Route::post('/check_coupon_name', [CouponController::class, 'checkCouponNameExists'])->name('check_coupon_name');
      Route::match(['GET','POST'],'/view/{id}', [CouponController::class, 'viewCoupon'])->name('view_coupon');
      Route::match(['GET','POST'],'/edit/{id}', [CouponController::class, 'editCoupon'])->name('edit_coupon');
      Route::post('/delete', [CouponController::class, 'deleteCoupon'])->name('delete_coupon');
      
    });

    // Sub Category Management
    Route::group(['prefix' => 'sub-categories'], function () {
      Route::match(['GET','POST'],'/list', [SubCategoryController::class, 'subCategoryList'])->name('sub_category_list');
      Route::match(['GET','POST'],'/add', [SubCategoryController::class, 'addSubCategory'])->name('add_sub_category');
      Route::post('/check_sub_category_name', [SubCategoryController::class, 'checkSubCategoryNameExists'])->name('check_sub_category_name');
      Route::match(['GET','POST'],'/view/{id}', [SubCategoryController::class, 'viewSubCategory'])->name('view_sub_category');
      Route::match(['GET','POST'],'/edit/{id}', [SubCategoryController::class, 'editSubCategory'])->name('edit_sub_category');
      Route::post('/delete', [SubCategoryController::class, 'deleteSubCategory'])->name('delete_sub_category');
      
    });


    // Product Management
    Route::group(['prefix' => 'products'], function () {
      Route::match(['GET','POST'],'/list', [ProductController::class, 'productList'])->name('product_list');
      Route::match(['GET','POST'],'/add', [ProductController::class, 'addProduct'])->name('add_product');
      Route::match(['GET','POST'],'/view/{id}', [ProductController::class, 'viewProduct'])->name('view_product');
      Route::match(['GET','POST'],'/edit/{id}', [ProductController::class, 'editProduct'])->name('edit_product');
      Route::post('/delete', [ProductController::class, 'deleteProduct'])->name('delete_product');
      
    });


    // Orders Management
    Route::group(['prefix' => 'orders'], function () {
      Route::match(['GET','POST'],'/list', [OrderController::class, 'orderList'])->name('order_list');
      Route::match(['GET','POST'],'/view/{id}', [OrderController::class, 'viewOrder'])->name('view_order');

      Route::post('/accept-reject-order', [OrderController::class, 'acceptRejectOrder'])->name('acceptRejectOrder');

      Route::post('/ship-order', [OrderController::class, 'shipOrder'])->name('shipOrder');
      Route::post('complete-order',[OrderController::class,'completeOrder'])->name('completeOrder');

      
    });


    // Payments Management
    Route::group(['prefix' => 'payments'], function () {
      Route::match(['GET','POST'],'/list', [PaymentController::class, 'paymentList'])->name('payment_list');
      Route::match(['GET','POST'],'/view/{id}', [PaymentController::class, 'viewPayment'])->name('view_payment');

      
    });




    // Access Controls
    Route::group(['prefix' => 'roles'], function () {
      Route::get('/view/{id}', [RolesController::class, 'viewRole'])->name('view_role');
      Route::get('/list', [RolesController::class, 'rolesList'])->name('roles_list');
      Route::get('/add', [RolesController::class, 'addRole'])->name('add_role');
      Route::post('/save', [RolesController::class, 'saveRole'])->name('save_role');
      Route::get('/edit/{id}', [RolesController::class, 'editRole'])->name('edit_role');
      Route::post('/update', [RolesController::class, 'updateRole'])->name('update_role');
      Route::post('/get_role_permissions', [RolesController::class, 'getRolePermissions'])->name('get_role_permissions');
      Route::get('/role_permissions', [RolesController::class, 'rolePermissions'])->name('role_permissions');
      Route::post('/save_permissions', [RolesController::class, 'saveRolePermissions'])->name('save_permissions');
      Route::post('/delete', [RolesController::class, 'deleteRole'])->name('delete_role');
    });


  });
});

Auth::routes([
  'register' => false,
  'reset' => false,
  'verify' => false,
]);



// WEBSITE ROUTES


Route::get('/', [IndexController::class, 'index'])->name('index');
Route::match(['GET','POST'],'signup',[IndexController::class,'signUp'])->name('signUp');
Route::match(['GET','POST'],'loginWeb',[IndexController::class,'loginWeb'])->name('loginWeb');
Route::get('logout',[IndexController::class,'logout'])->name('logout');
//AFTER LOGIN ROUTES

Route::get('account-details',[IndexController::class,'accountDetails'])->name('accountDetails');
Route::post('updateAccount',[IndexController::class,'updateAccount'])->name('updateAccount');
Route::post('changePasswordUser',[IndexController::class,'changePasswordUser'])->name('changePasswordUser');
//customer
Route::group(['prefix' => 'customer'], function () {
  Route::get('/',[DashboardController::class,'index']);

Route::get('/load-login',[AdminLoginController::class,'index']);
Route::post('/admin-login',[AdminLoginController::class,'login']);

Route::get('/load-register',[AdminRegisterController::class,'index']);
Route::post('/register',[AdminRegisterController::class,'register']);

Route::get('/history',[HistoryController::class,'index']);


Route::get('/my-wallet',[MyWalletController::class,'index']);

Route::get('/sell',[SellController::class,'index']);


Route::get('/market-place',[MarketPlaceController::class,'index']);

Route::get('/active-bids',[ActiveBidsController::class,'index']);

Route::get('/all-saved',[AllSavedController::class,'index']);


Route::get('/my-profile',[profileController::class,'index']);

Route::get('/setting',[SettingController::class,'index']);

Route::get('/notification',[NotificationController::class,'index']);

Route::get('/message',[MessageController::class,'index']);

Route::get('/forgot-password',[FlorgotPasswordController::class,'index']);
Route::post('/find-password',[FlorgotPasswordController::class,'findPassword']);

Route::get('/verify',[VerifyController::class,'index']);
Route::post('/verification',[VerifyController::class,'verification']);

Route::get('/my-collection',[MyCollectionController::class,'index']);

Route::get('/market-place-details',[MarketPlaceDetailsController::class,'index']);

Route::get('/upload-product',[ProductUploadController::class,'index']);

Route::post('/change-password',[SettingController::class,'changePassword']);

});




