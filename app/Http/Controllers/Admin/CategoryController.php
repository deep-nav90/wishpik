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

class CategoryController extends Controller
{
    public static function uploadFile($file, $destinationPath){
        $fileName = date('mdYHis') . uniqid().'.'.$file->getClientOriginalExtension();
        $file->move($destinationPath, $fileName);

        return $fileName;
    }
    public function category()
    {
        $data  =  Category::whereDeletedAt(null)->get();
        return view('admin.category.category',compact('data'));
    }
    public function store()
    {
        return view('admin.category.add-category');
    }
    public function checkCategoryNameExists(Request $request){
        $category_name = $request->category_name;
        $check_exists = Category::whereCategoryName($category_name)->whereDeletedAt(null)->first();
        if($check_exists){
            return true;
        }else{
            return false;
        }

    }
    public function addCategory(Request $request){
        if($request->isMethod('GET')){
            return view('admin.category.add');
        }

        if($request->isMethod('POST')){
            $data = $request->all();

            if(isset($data['category_image'])){
                if($data['category_image'] != "undefined"){
                    $destinationPath = storage_path("/app/public/admin/category_images");
                    $data['category_image'] = $this->uploadFile($data['category_image'], $destinationPath);
                }

            }

            $category_name = $request->category_name;
            $check_exists = Category::whereCategoryName($category_name)->whereDeletedAt(null)->first();
            if($check_exists){
                return ['status' => 'false', 'message' =>  "Category Name already exists."];
            }

            $category = new Category();
            $category->fill($data);
            $category->save();
            return ['status' => 'true', 'message' =>  "Category added successfully."];
        }
    }
    public function category_status(Request $request)
    {
       if($request->get('status')=="true")
        {
            $status= "Active";
        }
        else
        {
            $status= "Inactive";
        }
        $data  = Category::whereId($request->get('id'))->update(['status' => $status]);
        if($data)
        {
            return $status." status update successfully";
        }

    }
    public function editCategory(Request $request){
        if($request->isMethod('GET')){
            $category_id = $request->id;
            $category = Category::whereId($request->id)->first();
            
            return view('admin.category.edit-category',compact('category','category_id'));
        }

        if($request->isMethod('POST')){
            //return $request->all();
            $category = Category::whereId($request->id)->first();
            $data = $request->all();
            $check_exists = Category::whereCategoryName($data['category_name'])->where('id', '!=', $request->id)->whereDeletedAt(null)->first();
            if($check_exists){
                return ['status' => 'false', 'message' =>  "Category Name already exists."];
            }

            if(isset($data['category_image'])){
                if($data['category_image'] != "undefined"){
                    $destinationPath = storage_path("/app/public/admin/category_images");
                   $category->category_image = $this->uploadFile($data['category_image'], $destinationPath);
                }

            }
            $category->category_name = $data['category_name'];
            $category->wish_date = $data['wish_date'];
        
         
            $category->update();
            return ['status' => 'true', 'message' =>  "Category updated successfully."];
        }
    }
    public function deleteCategory(Request $request){
        Category::find($request->id)->delete();
        Session::flash('success',"Category has been deleted successfully.");
        return ["success" => 1];

    }
    public function viewCategory(Request $request){
        $category_id = $request->id;
        $category = Category::whereId($request->id)->first();
        
        return view('admin.category.view-category',compact('category','category_id')  );
    }
}
