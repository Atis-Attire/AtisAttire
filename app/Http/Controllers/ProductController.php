<?php

namespace App\Http\Controllers;

use App\Models\Modell;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products(){
        $products =  Product::all();
        return $products;

    }

    /*public function show($id){
        $product =  Product::find($id);
        return $product;

    }*/


    public function product($id) {
        $product =  Product::find($id);
        return $product->load([
            'modells',
        ]);
    }

    public function deleteProduct($id){
        Product::find($id)->delete();
    }

    public function newProduct(Request $request){
        $product  = new Product();
        $product ->modell = $request->modell;
        $product ->size = $request->size;
        $product ->stock = $request->stock;
        $product ->save();
    }
    public function updateProduct(Request $request, $id){
        $product = Product::find($id);
        $product ->modell = $request->modell;
        $product ->size = $request->size;
        $product ->stock = $request->stock;
        $product ->save();
    }
}
