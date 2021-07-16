<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::with(['galleries'])->get();

        // dd($products);
        return view('pages.home', [
            'products' => $products
        ]);
    }
}
