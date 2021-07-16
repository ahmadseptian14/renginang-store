<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Transaction;
use App\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function process(Request $request)
    {
        // Save user data
        $user = Auth::user();
        $user->update($request->except('total_price'));

        // Process Checkout
        $carts = Cart::with(['product', 'user'])->where('users_id', Auth::user()->id)->get();

        foreach ($carts as $cart) {
            $transaction = Transaction::create([
                'users_id' => Auth::user()->id,
                'shipping_price' => 13000,  
                'total_price' => $request->total_price,
                'transaction_status' => 'PENDING',
                'kurir' => $request->kurir,
                'total_order' => $cart->quantity_order
            ]);
    
        }

        foreach ($carts as $cart) {

            TransactionDetail::create([
                'transactions_id' => $transaction->id,
                'products_id' => $cart->product->id,
                'price' => $cart->product->price,
                'shipping_status' => 'PENDING',
            ]);
                
            $product = Product::where('id', $cart->products_id)->first();
            $product->quantity = $product->quantity-$cart->quantity_order;
            $product->update();
            
        }

        Cart::where('users_id', Auth::user()->id)->delete();

        return redirect()->back();

    }
}
