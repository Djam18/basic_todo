<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['id' => 1, 'name' => 'Livre Laravel', 'price' => 25],
            ['id' => 2, 'name' => 'T-shirt Dev', 'price' => 15],
            ['id' => 3, 'name' => 'Casquette PHP', 'price' => 12],
        ];

        return view('products.index', compact('products'));
    }
}
