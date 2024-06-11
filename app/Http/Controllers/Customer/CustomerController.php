<?php

namespace App\Http\Controllers\Customer;
 use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
class CustomerController extends Controller
{
    
    public function login()
    {
      return view('customer.login');
    }
    public function signup(Request $request)
    {
      if($request->isMethod('GET')){
        return view('customer.signup');
     }
     else
     {
      if($request->isMethod('POST'))
      {
        $validator = Validator::make($request->all(), [
          'cust_name' => 'required|min:3',
          'cust_phone' => 'required|min:10',
        
        ]);
        if ($validator->fails()) {
          $errors = $this->object_error($validator->errors());
          return response()->json(['status'=>false,'message' => $errors,'type' => 'object'], 422);
        }
        $password =123456;
        
        $data = $request->all();
        $registerForm=new Customer();
        $registerForm->name = $request->cust_name;
        $registerForm->email = $request->cust_email;
        $registerForm->phone = $request->cust_phone;
        $registerForm->password = Hash::make($password);
        if($registerForm->save())
        {
          return response()->json(['status' => true ,'message' => "User Register Successfully",'type' => 'string'],201);
        }
        
        
      }
     }
    
    }

    public function otp()
    {
      return view('customer.otp');
    }
    public function profile()
    {
      return view('customer.profile');
    }
    public function signupdone()
    {
      return view('customer.signupdone');
    }
    public function wish_select()
    {
      return view('customer.wish-select');
    }
   
    
}
