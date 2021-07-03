<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class InventoryController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('inventory.index', [
            'products' => $products
        ]);
    }
}
