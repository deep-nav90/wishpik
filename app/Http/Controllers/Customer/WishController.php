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
use App\Models\admin\category as Category;
use App\Models\admin\Product;
use App\Models\admin\ProductImage;
use App\Models\admin\ProductWish;

class WishController extends Controller
{
   public function wish_select(Request $request)
    {
        if($request->isMethod('GET'))
        {
            $startDate = Carbon::now();
            $endDate = Carbon::now()->addMonths(2);
             $categories = Category::whereBetween('wish_date', [$startDate, $endDate])->whereStatus('Active')->whereDeletedAt(null)->orderBy('wish_date', 'asc')->get();
            return view('customer.wish-select',compact('categories'));

        }
    
    }
    public function wish_template(Request $request)
    {
        $categoryId= $_GET['category'];
         $products = ProductImage::where('category_id', $categoryId)->get();
        $category = Category::where('id', $categoryId)->first();

        // // Pass the filtered data to the next page (a Blade view, for example)
       
        return view('customer.template-select', compact('products', 'category'));
    }
    public function filterCategory(Request $request)
    {
        // Get the category ID from the request
        $categoryId = $request->input('category_id');
         // // Find the selected category
         $category = Category::find($categoryId);
         
        $products = ProductImage::where('category_id', $categoryId)->get();

        // // Pass the filtered data to the next page (a Blade view, for example)
        return redirect(route('customer.wish-template', compact('products', 'category')));
    // return view('customer.template-select', compact('products', 'category'));
    }
    public function logo_upload(Request $request)
    {
        return view('customer.template-upload');
    }
    public function template_wish(Request $request)
    {
        return view('customer.template-download');
    }

    public function filterProduct(Request $request)
    {
        $wishes=[];
        $category=[];
        $products = ProductImage::where('id', $request->product_id)->first();
        if($products)
        {
            $category = Category::find($products->category_id)->first();
            $wishes= ProductWish::where('product_id', $products->product_id)->get();
        }
        return view('customer.template-download', compact('products', 'wishes','category'));
      
    }
}
