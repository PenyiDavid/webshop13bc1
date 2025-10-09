<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['brand', 'name', 'size', 
        'stock', 'color', 'picture_path', 'description',
        'material', 'price', 'sex', 'product_type_id'];
    
    public function product_type(){
        return $this->belongsTo(ProductType::class);
    }

    public function orders(){
        return $this->belongsToMany(Order::class)->withPivot('count', 'price');
    }
}
