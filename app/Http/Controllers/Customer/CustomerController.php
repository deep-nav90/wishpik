<?php

namespace App\Http\Controllers\Customer;
 use App\Http\Controllers\Controller;
 use Carbon\Carbon;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use App\Models\otp;
class CustomerController extends Controller
{
    
    public function login(Request $request)
    {
      if($request->isMethod('GET')){
        return view('customer.login');
     }
     else
     {
        if($request->isMethod('POST'))
        {
          $messages = [
            'cust_phone.required' => 'Please enter your phone number.',
            'cust_phone.digits' => 'Phone number must be 10 digits.',
            'cust_password.required' => 'Please enter password.',
           
        ];
    
        // Validation rules
        $request->validate([
            'cust_phone' => 'required|digits:10',
            'cust_password' => 'required',
        ], $messages);
          $validator = Validator::make($request->all(), [
            'cust_password' => 'required|min:1',
            'cust_phone' => 'required|digits:10',
          
          ]);
  
          if ($validator->fails()) {
            $errors = $this->object_error($validator->errors());
            return response()->json(['status'=>false,'message' => $errors,'type' => 'object'], 422);
          }
          date_default_timezone_set('Asia/Kolkata');
           $currentdate=date("Y-m-d H:i:s");
          $checklogin=Customer::where('phone',$request->input('cust_phone'))->where('status',1)->first();
          if($checklogin)
          {
              if (auth()->guard('customer')->attempt(['phone' => $request->input('cust_phone'), 'password' => ($request->input('cust_password'))])) {
                $user = auth()->guard('customer')->user();
                $update_lastlogin=Customer::where('phone',$request->input('cust_phone'))->update(array('last_login'=>$currentdate));
               
              $otp_code=base64_encode(base64_encode(111111));
              $request->session()->put('user_type', 'login');
              $request->session()->put('otp', $otp_code);
              $request->session()->put('key_id', base64_encode($user->id));
              $request->session()->put('otp_expires_at', Carbon::now()->addMinute(5)); 
              // $sessiondata = json_decode(base64_decode($request->session()->get('user')), true);
              $request->session()->put('success', 'You have successfully logged in!!');
              return response()->json(['status' => true ,'message' => "User login Successfully",'type' => 'string'],200);
             
              }
              
              else {
                return response()->json(['status' => true ,'message' => "The username and password you entered are incorrect",'type' => 'string'],400);
                //return back()->with('error', 'The username and password you entered are incorrect.');
            }
          }
          else
          {
            return response()->json(['status' => true ,'message' => "User is invalid",'type' => 'string'],400);
          }

        }
      }
     
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
        
        $messages = [
          'cust_name.required' => 'Please enter your name.',
          'cust_phone.required' => 'Please enter your phone number.',
          'cust_phone.digits' => 'Phone number must be 10 digits.',
          'cust_email.required' => 'Please enter your email address.',
          'cust_email.email' => 'Please enter a valid email address.',
          'cust_phone.unique' => 'This phone number is already registered.',
      ];
  
      // Validation rules
      $request->validate([
          'cust_name' => 'required|string|max:255',
          'cust_phone' => 'required|digits:10|unique:customers,phone',
          'cust_email' => 'required|email',
      ], $messages);
        $validator = Validator::make($request->all(), [
          'cust_name' => 'required|min:3',
          'cust_phone' => 'required|digits:10',
        
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
        $registerForm->signup_type = 'web';
        if($registerForm->save())
        {
          $otp_expires_time = Carbon::now('Asia/Kolkata')->addSeconds(60);
          $otp_code=base64_encode(base64_encode(111111));
         
          $request->session()->put('otp', $otp_code);
          $request->session()->put('user_type', 'signup');
          $request->session()->put('key_id', base64_encode($registerForm->id));
          $request->session()->put('otp_expires_at', Carbon::now()->addMinute(5)); 
          
          return response()->json(['status' => true ,'message' => "User Register Successfully",'type' => 'string'],200);
        }
        else
        {
          return response()->json(['status' => false ,'message' => "Technical issue",'type' => 'string'],400);
        }
        
        
      }
     }
    
    }

    public function otp(Request $request)
    {
      if($request->isMethod('GET')){
        return view('customer.otp');
     }
     else
     {
        if($request->isMethod('POST'))
        {
          $messages = [
            'otp.required' => 'Please enter otp.',
            'otp.digits' => 'Phone number must be 6 digits.',
            
        ];
    
        // Validation rules
        $request->validate([
            'otp' => 'required|digits:6',
        ], $messages);
          $validator = Validator::make($request->all(), [
          
            'otp' => 'required|digits:6',
          
          ]);
  
          if ($validator->fails()) {
            $errors = $this->object_error($validator->errors());
            return response()->json(['status'=>false,'message' => $errors,'type' => 'object'], 422);
          }
          $data = $request->all();
          $inputOtp = (int)$request->input('otp');

          $sessionOtp =base64_decode(base64_decode($request->session()->get('otp')));
          $cust_id=base64_decode($request->session()->get('key_id'));
          $otpExpiresAt = $request->session()->get('otp_expires_at');
          $user_type=$request->session()->get('user_type');
          if (Carbon::now()->greaterThan($otpExpiresAt)) {
            // OTP has expired, so remove it from the session
            $request->session()->forget('otp');
            $request->session()->forget('otp_expires_at');
            return response()->json(['status' => false ,'message' => "OTP has expired. Please request a new one.",'type' => 'string'],400);
               
              }
              $phone_verify = Carbon::now('Asia/Kolkata');
              if ($inputOtp == $sessionOtp) {
                // OTP is correct, clear it from the session
               $request->session()->forget('otp');
               $request->session()->forget('otp_expires_at');
               $registerForm=new Customer();
               date_default_timezone_set('Asia/Kolkata');
               $currentdate=date("Y-m-d H:i:s");
                if($user_type=='signup')
                {
                  $data  = Customer::whereId($cust_id)->update(['cust_login' =>1,'phone_verified'=>$phone_verify,'status' =>1,]);
                }
                if($user_type=='login')
                {
                  $user = Customer::whereId($cust_id)->first();
                  $sessiondata = [
                    "user_id" => $user->id,
                    "user_name"=>$user->name,
                    "user_phone"=>$user->phone,
                    "account_type"=>$user->account_type,
  
                ];
                
                $request->session()->put('user', base64_encode(json_encode($sessiondata)));
                  $data  = Customer::whereId($cust_id)->update(['cust_login' =>1,'last_login'=>$currentdate,'login_type'=>'web']);
                } 
              
               return response()->json(['status' => true ,'message' => "OTP is valid",'type' => 'string','type'=>$user_type],200);
               
            } else {
                // Incorrect OTP
                return response()->json(['status' => false ,'message' => "Invalid OTP. Please try again.",'type' => 'string','data'=>$sessionOtp],400);
              
            }

        }
     }
      
    }
    public function profile(Request $request)
    {
      if($request->isMethod('GET')){
        return view('customer.profile');
     }
     else
     {
        if($request->isMethod('POST')){
         
           $businesstype=$request->imageId == 2 ? 'Individual' : 'Business';
          
          $cust_id=base64_decode($request->session()->get('key_id'));
          if($cust_id)
          { 
            $data  = Customer::whereId($cust_id)->update(['cust_login' =>1,'account_type'=>$businesstype]);
            $message = $businesstype.' profile update';

            //cus login
            date_default_timezone_set('Asia/Kolkata');
            $currentdate=date("Y-m-d H:i:s");
           $checklogin=Customer::whereId($cust_id)->first();
           if($checklogin)
           {
            if (auth()->guard('customer')->attempt(['phone' => $checklogin->phone])) {
              $user = auth()->guard('customer')->user();
              $sessiondata = [
                "user_id" => $user->id,
                "user_name"=>$user->name,
                "user_phone"=>$user->phone,
                "account_type"=>$user->account_type,

            ];
            
            $request->session()->put('user', base64_encode(json_encode($sessiondata)));

            }
           }
            //end
            return response()->json(['status' => true ,'message' => $message,'type' => 'string'],200);
          }
          else{
            return response()->json(['status' => true ,'message' => 'Invalid User','type' => 'string'],400);
           
          }

          
      }
     }
     
    }
    public function signupdone()
    {

      return view('customer.signupdone');
    }
   
   
    
}
