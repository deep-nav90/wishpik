<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;
use DB;
use Auth;
use File;
use Session;
use App\Models\admin\admin;
use App\Models\admin\category as Category;
use App\Models\admin\Product;
use App\Models\admin\ProductImage;
use App\Models\admin\ProductWish;

class ProductController extends Controller
{
    public static function uploadFile($file, $destinationPath){
        $fileName = date('mdYHis') . uniqid().'.'.$file->getClientOriginalExtension();
        $file->move($destinationPath, $fileName);

        return $fileName;
    }
    public function list()
    {
       $data = Product::select("*", DB::raw('(SELECT category_name from categories WHERE categories.id = products.category_id) AS category_name'))->whereDeletedAt(null)->orderBy("id",'DESC')->get();
    //   $total = $data->get()->count();

     //  $data  =  Category::whereDeletedAt(null)->get();
        return view('admin.product.list',compact('data'));
    }
    public function addProduct(Request $request)
    {
        if($request->isMethod('GET')){
            $categories = Category::where(function($query)use($request){
                $query->whereDeletedAt(null);
                $query->whereStatus('Active');
                
            })->get();
            return view('admin.product.add',compact('categories'));
        }

        if($request->isMethod('POST')){
            $data = $request->all();
          
            $product = new Product();
            $product->category_id=$data['category_id'];
            $product->image_count=count($data['files'][0]);
            $product->wish_count=count($data['wishtext']);
            $product->save();
            $acceptable_files = array_filter($request->acceptable);
            $non_acceptable_files = array_filter($request->non_acceptable);

            $explode_accepted_files = explode(',', $acceptable_files[0]);

            if(isset($non_acceptable_files[0]) && !empty($non_acceptable_files[0])){

                $explode_non_accepted_files = explode(',', $non_acceptable_files[0]);



                //#override and remove dupicate array
                $explode_accepted_files = array_diff($explode_accepted_files, $explode_non_accepted_files);

            }
            foreach ($data['wishtext'] as $wishdata) {
                $product_wish = new ProductWish();
                $product_wish->product_id = $product->id;
                $product_wish->category_id = $product->category_id;
                $product_wish->product_wish = $wishdata['wish'];
               
                $product_wish->save();
              //  print_r($wishdata['wish']);
             }

            $files_uploded = $request->file("files");

            $files = [];

            $have_featured_img = 0;
            foreach ($explode_accepted_files as $acceptable_file) {

                $is_featured_image = 0;
              
                if (isset($data['old_checkbox'])) {
                    // Convert the 'old_checkbox' array to a format that matches acceptable_file if needed
                    if (in_array($acceptable_file, $data['old_checkbox'])) {
                        $is_featured_image = 1; // Match found
                        $have_featured_img = 1; // You can set this too if needed
                    }
                }

                $exp_file = explode('_', $acceptable_file);

                $extension = $files_uploded[$exp_file[0]][$exp_file[1]]->getClientOriginalExtension();

                $file1_thumbname = "";
                if($extension == "jpg" || $extension == "png" || $extension == "jpeg" || $extension == "JPG" || $extension == "PNG" || $extension == "JPEG"){

                    $destinationPath = storage_path("/app/public/admin/product_images");
                    $file_name = $this->uploadFile($files_uploded[$exp_file[0]][$exp_file[1]], $destinationPath);

                    $files[] = ['file_url' => $file_name, 'thumbnail_url' => $file1_thumbname,'file_type' => "image", 'is_featured_image' => $is_featured_image];
                }
             }

            
          
            foreach ($files as $file) {

                // if($have_featured_img == 0){
                //     $file['is_featured_image'] = 1;
                //     $have_featured_img = 1;
                // }else{
                //     $file['is_featured_image'] = $file['is_featured_image'];
                // }
                
                $product_image = new ProductImage();
                $product_image->product_id = $product->id;
                $product_image->category_id = $product->category_id;
                $product_image->product_image = $file['file_url'];
                $product_image->is_featured_image = $file['is_featured_image'];
                $product_image->save();
               
            }
           
            Session::flash('status',"Template has been added successfully.");
            return redirect(route('admin.product_list'));
        }
    }
    public function checkCategoryNameExists(Request $request){
        $cat_id = $request->cat_id;
        $check_exists = Product::whereCategoryId($cat_id)->whereDeletedAt(null)->first();
        if($check_exists){
            return true;
        }else{
            return false;
        }

    }
    public function product_status(Request $request)
    {
       if($request->get('status')=="true")
        {
            $status= 1;
        }
        else
        {
            $status= 0;
        }
        $data  = Product::whereId($request->get('id'))->update(['status' => $status]);
        if($data)
        {
            $imgstatus  = ProductImage::whereproductId($request->get('id'))->update(['status' => $status]);
            $wishstatus  = ProductWish::whereproductId($request->get('id'))->update(['status' => $status]);
            return "status update successfully";
        }

    }
    //edit
    public function editProduct(Request $request, $id){
        if($request->isMethod('GET')){
            $image_count = 0;
            $product_find = Product::whereId($id)->with('productImages')->with('productWishes')->with('category')->first();
            $categories = Category::where(function($query)use($request){
                            $query->whereDeletedAt(null);
                            $query->whereStatus('Active');
                         
                        })
                        
                        ->get();
            // $attributes = Attribute::whereDeletedAt(null)->whereStatus('Active')->get();
            if($product_find){
                $image_count = count($product_find->productImages);
            }
            
            return view('admin.product.edit',compact('categories','product_find','image_count'));

        }

        if($request->isMethod('POST')){
            $data = $request->all();
            
            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";
            // die();
            // $product_find = Product::whereId($id)->with('productImages')->first();
            // $product_find->fill($data);
            // $product_find->update();
            //$product_find = new Product();
            $product_find = Product::whereId($id)->with('productImages')->first();
            $product_find->category_id=$data['category_id'];
            $product_find->image_count=$data['image_count'];
            $product_find->wish_count=count($data['wishtext']);
            $product_find->update();


            $acceptable_files = array_filter($request->acceptable);
            $non_acceptable_files = array_filter($request->non_acceptable);


            $deleted_files = $request->file_deleted;

            if(!empty($deleted_files)){
                $explode_del_files = explode(',',$deleted_files);

                //delete files

                ProductImage::whereIn('id',$explode_del_files)->delete();
                //
            }
            ProductWish::where('product_id',$product_find->id)->delete();
            foreach ($data['wishtext'] as $wishdata) {
                $product_wish = new ProductWish();
                $product_wish->product_id = $product_find->id;
                $product_wish->category_id = $product_find->category_id;
                $product_wish->product_wish = $wishdata['wish'];
               
                $product_wish->save();
              //  print_r($wishdata['wish']);
             }
            if(count($acceptable_files) > 0){

                $explode_accepted_files = explode(',', $acceptable_files[0]);
            }else{
                $explode_accepted_files = [];
            }

            if(isset($non_acceptable_files[0]) && !empty($non_acceptable_files[0])){

                $explode_non_accepted_files = explode(',', $non_acceptable_files[0]);



                //#override and remove dupicate array
                $explode_accepted_files = array_diff($explode_accepted_files, $explode_non_accepted_files);

            }



            $files_uploded = $request->file("files");

            $files = [];

            foreach ($explode_accepted_files as $acceptable_file) {
                $is_featured_image = 0;
                // if(isset($data['new_checkbox'])){
                //     if($data['new_checkbox'] == $acceptable_file){
                //         $is_featured_image = 1;
                //     }
                // }
                $exp_file = explode('_', $acceptable_file);

                $extension = $files_uploded[$exp_file[0]][$exp_file[1]]->getClientOriginalExtension();

                $file1_thumbname = "";
                if($extension == "jpg" || $extension == "png" || $extension == "jpeg" || $extension == "JPG" || $extension == "PNG" || $extension == "JPEG"){

                    $destinationPath = storage_path("/app/public/admin/product_images");
                    $file_name = $this->uploadFile($files_uploded[$exp_file[0]][$exp_file[1]], $destinationPath);

                    $files[] = ['file_url' => $file_name, 'thumbnail_url' => $file1_thumbname,'file_type' => "image", 'is_featured_image' => $is_featured_image];
                }




            }

            foreach ($files as $file) {

                
                    ProductImage::whereProductId($product_find->id)->update(['is_featured_image' => 0]);
               
                
                $product_image = new ProductImage();
                $product_image->product_id = $product_find->id;
                $product_image->product_image = $file['file_url'];
                $product_image->category_id =  $product_find->category_id;


                $product_image->save();
            }

            if(isset($data['old_checkbox'])){
                ProductImage::whereProductId($product_find->id)->update(['is_featured_image' => 0]);
                foreach ($data['old_checkbox'] as $chekced) 
                    {
                       
                        $findImage = ProductImage::whereId($chekced)->update(['is_featured_image' => 1]);
                    }
              
            }


            //delete previous ProductPriceAttribute

            

            Session::flash('status',"Template has been updated successfully.");
            return redirect(route('admin.product_list'));


        }
        
    }
    //end edit
    public function deleteProduct(Request $request){
        Product::find($request->id)->delete();
        ProductWish::where('product_id',$request->id)->delete();
        ProductImage::where('product_id',$request->id)->delete();
        Session::flash('success',"Template has been deleted successfully.");
        return ["success" => 1];

    }
    public function viewProduct(Request $request, $id){
        if($request->isMethod('GET')){
            $product_find = Product::whereId($id)->with('productImages')->with('productWishes')->first();
            $categories = Category::where(function($query)use($request){
                            $query->whereDeletedAt(null);
                            $query->whereStatus('Active');
                            
                        })->get();
           
            $image_count = count($product_find->productImages);
            return view('admin.product.view',compact('categories','product_find','image_count'));

        }
    }
}
