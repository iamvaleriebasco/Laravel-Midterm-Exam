<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    Use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(category::class);
    }
}

