<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\category;
use App\Models\admin\ProductImage;
use App\Models\admin\ProductWish;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'category_id',
        'image_count',
        'wish_count',
        'status',
        'deleted_at',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function productImages(){
        return $this->hasMany(ProductImage::class)->whereDeletedAt(null);
    }
    public function productWishes(){
        return $this->hasMany(ProductWish::class)->whereDeletedAt(null);
    }
}
