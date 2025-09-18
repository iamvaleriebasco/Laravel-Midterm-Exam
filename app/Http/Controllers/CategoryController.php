<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = [
            [
                'id' => 1,
                'category_name' => 'Electronics',
                'products' => [
                    ['id' => 1, 'product_name' => 'Laptop', 'price' => 45000],
                    ['id' => 2, 'product_name' => 'Smartphone', 'price' => 25000],
                ],
            ],
            [
                'id' => 2,
                'category_name' => 'Accessories',
                'products' => [
                    ['id' => 3, 'product_name' => 'Headphones', 'price' => 3500],
                    ['id' => 4, 'product_name' => 'Mouse', 'price' => 1200],
                ],
            ],
            [
                'id' => 3,
                'category_name' => 'Furniture',
                'products' => [
                    ['id' => 5, 'product_name' => 'Office Chair', 'price' => 7000],
                ],
            ],
        ];

        return view('categories.index', compact('categories'));
    }
}
