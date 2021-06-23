<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('product.index');
    }
    public function create()
    {
        return view('product.create');
    }
    public function store()
    {
        $product = new Product();
        $product->name = request('name');
        $product->barcode = request('barcode');
        $product->vendor = request('vendor');
        $product->remainingQuantity = request('remainingquantity');
        $product->buyprice = request('boughtprice');
        $product->sellprice = request('sellprice');
        $product->expireDate = request('expiredate');

        $product->save();
        return redirect('/products')->with('mssg', 'شتوومەکەکە زیادکرا!');
    }
}
