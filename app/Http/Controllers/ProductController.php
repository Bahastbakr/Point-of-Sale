<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Response;


class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $products = Product::get();
        return view('product.index', [
            'products' => $products
        ]);
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
        return redirect('/products')->with('toast_success', 'شتوومەکەکە زیادکرا!');
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', ['product' => $product]);
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/products')->with('toast_success', 'شتوومەکەکە سڕایەوە!');
    }
    public function update($id)
    {
        $product = Product::findOrFail($id);
        $product->name = request('name');
        $product->barcode = request('barcode');
        $product->vendor = request('vendor');
        $product->remainingQuantity = request('remainingquantity');
        $product->boughtquantity = request('boughtquantity');
        $product->buyprice = request('buyprice');
        $product->sellprice = request('sellprice');
        $product->expireDate = request('expiredate');

        $product->save();
        return redirect('/products' . '/' . $id)->with('toast_success', 'شتوومەکە بە سەرکەوتووی چاککرا');
    }


    public function sell()
    {
        return view('product.sell');
    }
    public function search_barcode($barcode)
    {
        $product = Product::where('barcode', $barcode)->get();
        $response['data'] = $product;
        return Response::json($response);
    }
}
