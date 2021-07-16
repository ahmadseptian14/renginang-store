<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    public function index(Request $request, $id) {
        $product = Product::with(['galleries'])->where('slug', $id)->firstOrFail();

        $products = Product::with(['galleries'])->get();
        
        return view('pages.detail', [
            'product' => $product,
            'products' => $products
        ]);
    }

    public function add(Request $request, $id)
    {   
        $product = Product::where('id', $id)->first();

        $data = [
            'products_id' => $id,
            'users_id' => Auth::user()->id,
            'quantity_order' => $request->quantity_order,
            'total_price' => $product->price*$request->quantity_order
        ];
        
        $product->quantity = $product->quantity-$request->quantity_order;

        Cart::create($data);

        

        return redirect()->route('cart');
        
    }
}
