<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        
        $products = [
            ['id' => 1, 'product_name' => 'Laptop', 'price' => 45000, 'category' => 'Electronics'],
            ['id' => 2, 'product_name' => 'Smartphone', 'price' => 25000, 'category' => 'Electronics'],
            ['id' => 3, 'product_name' => 'Headphones', 'price' => 3500, 'category' => 'Accessories'],
            ['id' => 4, 'product_name' => 'Office Chair', 'price' => 7000, 'category' => 'Furniture'],
        ];

        return view('products.index', compact('products'));
    }
}
