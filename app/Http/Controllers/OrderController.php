<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = [
            [
                'id' => 1,
                'oder_date' => '02-14-2025',
                'product_id' => '01',
                'quantity' => '5'
            ],
            [
                'id' => 2,
                'oder_date' => '03-10-2025',
                'product_id' => '02',
                'quantity' => '8'
            ],
        ];
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
