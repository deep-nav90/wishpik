<?php


namespace App\Http\Controllers\Admin;
 use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;
use DB;

use Illuminate\Support\Facades\Session;
use App\Models\admin\admin;
use App\Models\Customer;
use App\Models\User;

class AdminController extends Controller
{
    
    use AuthenticatesUsers;
    protected $redirectTo = '/login';
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    public function dashboard()
    {
      return view('admin.dashboard');
    }
    public function login()
    {
        // if(auth()->guard('admin'))
        // {
        //     return redirect()->route('admin.dashboard');
        // }
        // else
        // {
            return view('admin.auth.login');
        // }
        
    }
    public function logincheck(Request $request)
    {
      

        date_default_timezone_set('Asia/Kolkata');
        $currentdate=date("Y-m-d H:i:s");
        // dd(DB::connection());
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $checklogin=admin::where('email',$request->input('email'))->where('status',1)->first();
        if($checklogin)
        {
            if (auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
                $user = auth()->guard('admin')->user();
                $update_lastlogin=admin::where('email',$request->input('email'))->update(array('last_login'=>$currentdate));
                $user = auth()->guard('admin')->user();
                $mychecklogin=admin::find($user->id);
               // $token = $mychecklogin->createToken('auth_token')->plainTextToken;
               // admin::where('id',$user->id)->update(['admin_auth' =>$token]);
               // Session::put('token', $token);
                Session::put('user', $user->id);
                Session::put('success', 'You have successfully logged in!!');
                return redirect()->route('admin.dashboard');
            } else {
                return back()->with('error', 'The username and password you entered are incorrect.');
            }
        }
        else{
            return back()->with('error', 'User is invalid');
        }
       
    }
    public function checkguard()
    {
        if(auth()->guard('admin'))
        {
            echo "set";
        }
        else
        {
            echo "no set";
        }
    }
    public function logout()
    {
        auth()->guard('admin')->logout();
        Session::flush();
        Session::put('success', 'Logout Successfully.');
        return redirect('/admin');
    }

    public function customer_list()
    {
        $data  =  Customer::whereDeletedAt(null)->get();
        return view('admin.customer.list',compact('data'));
    }
    
}
