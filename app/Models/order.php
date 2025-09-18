<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name', 'price', 'category_id'];

    public function category()
    {
        return $this->hasMany(Order::class);
    }
}
