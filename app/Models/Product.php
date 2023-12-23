<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ProductPriceAttribute;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        
        'status',
        
        'deleted_at',
    ];

    public function productImages(){
        return $this->hasMany(ProductImage::class)->whereDeletedAt(null);
    }

  

}
