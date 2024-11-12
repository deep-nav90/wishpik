<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductWish extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'category_id',
        'product_wish',
        'status',
        'deleted_at'
    ];
}
