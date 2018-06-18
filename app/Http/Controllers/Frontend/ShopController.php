<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Shop\Products;

class ShopController extends Controller
{
    function index(){
        //get all products and services
        $products = Products::where('visible', 1)->get();
        return view('frontend.shop.index', compact('products'));
    }

    function product($id){
        $product = Products::findOrFail($id);
        return view('frontend.shop.product', compact('product'));
    }
}
