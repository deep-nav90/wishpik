<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'category_id',
        'product_image',
        'is_featured_image',
        'status',
        'deleted_at'
    ];
    public function getProductImageAttribute($value){
        if(!empty($value)){

            $path_of_file = storage_path("/app/public/admin/product_images") . "/" . $value;
            if(file_exists($path_of_file)){
                return url("/storage/app/public/admin/product_images") . "/" . $value;
            }else{
                return url("/public/dummy.jpg");
            }
        }else{
            return url("/public/dummy.jpg");
        }
        
    }
}
