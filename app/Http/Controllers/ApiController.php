<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\Customer;
use App\Models\testapi;
use Illuminate\Support\Facades\Hash;
use App\Models\admin\category as Category;
use App\Models\admin\Product;
use App\Models\admin\ProductImage;
use App\Models\admin\ProductWish;
use Carbon\Carbon;
class ApiController extends Controller
{
    /**
     * @OA\Post(
     * path="/customer",
     * summary="Register Customer",
     * description="customer  user with name ,phone number",
     * operationId="customer1",
     * tags={"customer"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass user credentials",
     *    @OA\JsonContent(
     *       required={"name","phone"},
     *       @OA\Property(property="name", type="string", format="text", example="sarb3"),
    
     *       @OA\Property(property="phone_no", type="string", format="phone_no", example="7046487636"),
    
     *    ),
     * ),
     * @OA\Response(
     *    response=422,
     *    description="Wrong credentials response",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="Sorry, wrong email address or password. Please try again")
     *        )
     *     )
     * )
     */
    public function customer(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'phone' => 'required|min:10',
          
          ]);
          if ($validator->fails()) {
            $errors = $this->object_error($validator->errors());
            return response()->json(['status'=>false,'message' => $errors,'type' => 'object'], 422);
          }
          else{
            return response()->json(['status' => true ,'message' => "ok store value",'type' => 'string'],201);
        }

    }
    public function allcustomer()
    {
        return response()->json(['status' => true ,'message' => "ok store value",'type' => 'string'],201);
    }
    public function customer_auth(Request $request)
    {
      $apidata=new testapi();
      $apidata->name=$request->name;
      $apidata->des=$request->name;
      $apidata->save();
        return 'sarb';
    }
    public function getphone(Request $request)
    {
      date_default_timezone_set('Asia/Kolkata');
      $currentdate=date("Y-m-d H:i:s");
      if($request->cust_phone)
      {
        $checklogin=Customer::where('phone',$request->cust_phone)->where('status',1)->first();
        if($checklogin)
        {
          
          if(!$checklogin->payment_id && $checklogin->item_download >=5   )
          {
            return response()->json(['status' => false ,'message' => "Subscription Pending",'type' => 'pending'],400);
          }
          else
          {
            $update_lastlogin=Customer::where('phone',$request->input('cust_phone'))->update(array('last_login'=>$currentdate,'login_type'=>'whatsapp'));
            return response()->json(['default_options' => "" ,'image_url' => "",'question_text' => 'Welecome to WishPik, Please Select Category','type'=>'statement'],200);
            // return response()->json(['status' => true ,'message' => "User login Successfully",'type' => 'success'],200);
            
          }
        }
        else
        {
          $password =123456;
          $registerForm=new Customer();
          $registerForm->name = $request->cust_name;
          $registerForm->email = $request->cust_email;
          $registerForm->password = Hash::make($password);
          $registerForm->phone = $request->cust_phone;
          $registerForm->status = 1;
          $registerForm->signup_type = 'whatsapp';
          if($registerForm->save())
          {
            return response()->json(['default_options' => "" ,'image_url' => "",'question_text' => 'Welecome to WishPik, Please Select Category','type'=>'statement'],200);
            // return response()->json(['status' => true ,'message' => "User Register Successfully",'type' => 'register'],200);
          }
         // return response()->json(['status' => false ,'message' => "This phone no is not registred",'type' => 'newuser'],400);
        }

      }
      else
      {
        return response()->json(['status' => false ,'message' => "no enter phone number",'type' => 'noenter'],400);
      }


    }
    //new user
    public function newuser(Request $request)
    {
      date_default_timezone_set('Asia/Kolkata');
      $currentdate=date("Y-m-d H:i:s");
      if($request->cust_phone)
      {
        $checklogin=Customer::where('phone',$request->cust_phone)->where('status',1)->first();
        if(!$checklogin)
        {
          $password =123456;
          $registerForm=new Customer();
          $registerForm->phone = $request->cust_phone;
          $registerForm->password = Hash::make($password);
          $registerForm->phone = $request->cust_phone;
          $registerForm->status = 1;
          $registerForm->signup_type = 'whatsapp';
          if($registerForm->save())
          {
            return response()->json(['status' => true ,'message' => "User Register Successfully",'type' => 'register'],200);
          }
        }
      }
    }
    public function updateuser(Request $request)
    {
      if($request->cust_phone)
      {
        $checklogin=Customer::where('phone',$request->cust_phone)->where('status',1)->first();
        if($checklogin)
        {
          if($request->name)
          {
            $update_lastlogin=Customer::where('phone',$request->cust_phone)->update(array('name'=>$request->name));
            return response()->json(['status' => true ,'message' => "name update",'type' => 'update'],200);
          }
          if($request->email)
          {
            $update_lastlogin=Customer::where('phone',$request->cust_phone)->update(array('email'=>$request->email));
            return response()->json(['status' => true ,'message' => "email update",'type' => 'update'],200);
          }
        }
        else
        {
          return response()->json(['status' => false ,'message' => "no enter phone number",'type' => 'noenter'],400);
        }
      }
    }
    //end
    //category
    public function wish_category(Request $request)
    {
        if($request->isMethod('GET'))
        {
            $startDate = Carbon::now();
            $endDate = Carbon::now()->addMonths(2);
             $categories = Category::whereBetween('wish_date', [$startDate, $endDate])->whereStatus('Active')->whereDeletedAt(null)->orderBy('wish_date', 'asc')->get();
          if($categories)
          {

            return response()->json(['default_options' => $categories ,'image_url' => "",'question_text' => 'Please Select Category','type'=>'radio'],200);
            // return response()->json(['status' => true ,'data' => $categories,'type' => 'categorylist'],200);
          }
        }
    }

    public function wish_template(Request $request)
    {
        $categoryId= $request->category_id;
         $products = ProductImage::where('category_id', $categoryId)->get();
        $category = Category::where('id', $categoryId)->first();
        if($products)
        {

          return response()->json(['default_options' => $products ,'image_url' => "",'question_text' => 'Please Select Template','type'=>'radio'],200);
          //return response()->json(['status' => true ,'data' =>compact('products', 'category'),'type' => 'wishtemplate'],200);
        }

    }
  

     public function wish_text(Request $request)
    {
        $wishes=[];
        $category=[];
        $products = ProductImage::where('id', $request->product_id)->first();
        if($products)
        {
            $category = Category::find($products->category_id)->first();
            $wishes= ProductWish::where('product_id', $products->product_id)->get();
        }
        return response()->json(['default_options' => $wishes ,'image_url' => "",'question_text' => 'Please Select Template','type'=>'radio'],200);
        // return response()->json(['status' => true ,'data' =>compact('products', 'wishes','category'),'type' => 'wishtemplate'],200);
  
      
    }
    //end


}
