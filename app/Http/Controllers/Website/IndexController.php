<?php

namespace App\Http\Controllers\Website;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Str;
use DB;
use Mail;

use App\Models\Category;
use App\Models\Product;
use App\Models\Coupon;
use App\Models\User;
use Session;
use App\Mail\OrderMail;
use App\Mail\ReceivedOrderMailAdmin;
use App\Models\UserAddress;
use App\Models\BillingShippingAddress;
use App\Models\Order;
use App\Models\Payment;
use App\Models\ProductOrder;
class IndexController extends Controller
{
    public function index(Request $request){



        
       //$categories = [];

    	return view('website.index');
    }

 


    public function signUp(Request $request){
        if($request->isMethod('GET')){
            return view('website.sign-up');
        }

        if($request->isMethod('POST')){
            $data = $request->all();

            $checkEmail = User::whereEmail($data['email'])->whereDeletedAt(null)->first();
            if($checkEmail){
                return ['status' => "false", "message" => "Email already exists."];
            }

            $user = new User();
            $user->role_type = "Employee";
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);
            $user->full_name = $data['full_name'];
            $user->save();
            return ['status' => "true", "message" => "Your account has been registered successfully."];


        }
    }

    public function loginWeb(Request $request){
        if($request->isMethod('GET')){

            $checkLogin = Auth::guard('web')->user();
            if($checkLogin){
                return redirect(route('index'));
            }
            return view('website.login');
        }

        if($request->isMethod('POST')){

            $data = $request->all();

            $findUser = User::whereEmail($data['email'])->first();

            if($findUser){

                if($findUser->deleted_at != null){
                    return ['status' => 'false', 'message' => 'Your account has been deleted by admin.'];
                }

                if($findUser->is_block == 1){
                    return ['status' => 'false', 'message' => 'Your account has been blocked by admin.'];
                }


                if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {

                    return ['status' => 'true', 'message' => 'Logged in successfully.'];
                }else{
                    return ['status' => 'false', 'message' => 'Email address and password is invalid.'];
                }

            }else{
                return ['status' => 'false', 'message' => 'Email address and password is invalid.'];
            }
            
        }
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();
        return redirect(route('index'));
    }

    public function accountDetails(Request $request){
        $checkLogin = Auth::guard('web')->user();

        if($checkLogin == ""){
            return redirect(route('loginWeb'));
        }

        return view('website.account-details',compact('checkLogin'));

        
    }

    public function updateAccount(Request $request){
        $checkLogin = Auth::guard('web')->user();

        if($checkLogin == ""){
            return ['status' => 'sessionExpired','message' => "Your Session has been expired. Please login again."];
        }

        $data = $request->all();

        $updateUser = User::whereId($checkLogin->id)->update(['full_name' => $data['full_name']]);
        
        // $findUserAddress = UserAddress::whereId($checkLogin->id)->first();
        // $findUserAddress->fill($data);
        // $findUserAddress->update();

        return ['status' => 'true','message' => "Your Account has been updated successfully."];
    }

    public function changePasswordUser(Request $request){
        $checkLogin = Auth::guard('web')->user();

        if($checkLogin == ""){
            return ['status' => 'sessionExpired','message' => "Your Session has been expired. Please login again."];
        }

        $data = $request->all();


        if(Hash::check($data['old_password'], $checkLogin->password)){
            $hashMake = Hash::make($data['new_password']);
            $updateUser = User::whereId($checkLogin->id)->update(['password' => $hashMake]);
            //after change then logout user
            Auth::guard('web')->logout();
            return ['status' => 'true','message' => "Your Password has been updated successfully."];
        }else{
            return ['status' => 'false', 'message' => 'Old Password is wrong.'];
        }
        
    }

  
}
