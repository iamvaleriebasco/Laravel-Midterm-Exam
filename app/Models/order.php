<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'quantity', 'order_date'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }
}
