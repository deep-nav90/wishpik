<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/allcustomer', [ApiController::class, 'allcustomer'])->name('allcustomer');
Route::post('/customer', [ApiController::class, 'customer']);
Route::match(['GET','POST'],'/customer-auth', [ApiController::class, 'customer_auth'])->name('cusomer-auth');
Route::match(['GET','POST'],'/get-phone', [ApiController::class, 'getphone'])->name('get-phone');
Route::match(['GET','POST'],'/newuser', [ApiController::class, 'newuser'])->name('newuser');
Route::match(['GET','POST'],'/updateuser', [ApiController::class, 'updateuser'])->name('updateuser');
//category
Route::get('/wish-category', [ApiController::class, 'wish_category'])->name('wish-category');
Route::post('/wish-template', [ApiController::class, 'wish_template'])->name('wish-template');
Route::post('/wish-text', [ApiController::class, 'wish_text'])->name('wish-text');