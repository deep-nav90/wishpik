<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;
class category extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['category_name','wish_date','category_image','status'];

    public function getCategoryImageAttribute($value){
        if(!empty($value)){

            $path_of_file = storage_path("/app/public/admin/category_images") . "/" . $value;
            if(file_exists($path_of_file)){
                return url("/storage/app/public/admin/category_images") . "/" . $value;
            }else{
                return url("/public/dummy.jpg");
            }
        }else{
            return url("/public/dummy.jpg");
        }
        
    }
}
