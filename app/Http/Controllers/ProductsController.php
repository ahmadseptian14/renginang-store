<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $products = Product::with(['galleries'])->get();
        
        return view('pages.products', [
            'products' => $products
        ]);
    }
}
