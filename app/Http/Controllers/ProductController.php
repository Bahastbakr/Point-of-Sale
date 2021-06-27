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
        return redirect('/products')->with('mssg', 'شتوومەکەکە زیادکرا!');
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
        return redirect('/products')->with('mssg_destroy', 'شتوومەکەکە سڕایەوە!');
    }
    public function update(Request $request, $id)
    {
        // $this->validate($request, [
        //     'name' => 'required',
        //     'barcode' => 'required',
        //     'buyprice' => 'required',
        //     'sellprice' => 'required',
        //     'expireDate' => 'required',
        //     'remainingQuantity' => 'required',
        //     'boughtquantity' => 'required',
        //     'expireDate' => 'required',
        //     'vendor' => 'required',
        // ]);
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


        return redirect('/products' . '/' . $id)->with('mssg_updated', 'شتوومەکە بە سەرکەوتووی چاککرا');
    }
}
