<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\Customer;

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
}
