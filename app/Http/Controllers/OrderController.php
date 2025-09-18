<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {

        $orders = [
            [
                'id' => 1,
                'order_date' => '2025-09-10',
                'quantity' => 2,
                'product' => ['id' => 1, 'product_name' => 'Laptop', 'price' => 45000],
            ],
            [
                'id' => 2,
                'order_date' => '2025-09-12',
                'quantity' => 1,
                'product' => ['id' => 2, 'product_name' => 'Smartphone', 'price' => 25000],
            ],
            [
                'id' => 3,
                'order_date' => '2025-09-14',
                'quantity' => 3,
                'product' => ['id' => 3, 'product_name' => 'Headphones', 'price' => 3500],
            ],
        ];

        return view('orders.index', compact('orders'));
    }
}
