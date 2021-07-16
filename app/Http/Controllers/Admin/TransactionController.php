<?php

namespace App\Http\Controllers\Admin;

use App\Transaction;
use App\TransactionDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {   
        // $sellTransactions = TransactionDetail::with(['transaction.user', 'product.galleries'])
        //                     ->whereHas('product', function($product){
        //                         $product->where('users_id', Auth::user()->id);
        //                     })->get();
        
        $buyTransactions = TransactionDetail::with(['transaction.user', 'product.galleries'])->get();
        
        // dd($buyTransactions);

        // $buyTransactions = Transaction::with(['user'])->get();
        
        return view('pages.admin.transactions.index', [
            // 'sellTransactions' => $sellTransactions,
            'buyTransactions' => $buyTransactions
        ]);
    }

    // public function edit($id)
    // {
    //     $transaction = Transaction::findOrFail($id);

    //     return view('pages.admin.transactions.edit', [
    //         'transaction' => $transaction
    //     ]);
    // }

    public function updateTransaction(Request $request, $id)
    {
        $data = $request->all();
        
        Transaction::findOrFail($id)->update($data);

        return redirect()->back();


    }

    public function details(Request $request, $id)
    {
        $transaction = TransactionDetail::with(['transaction.user', 'product.galleries'])
                        ->findOrFail($id);
        return view('pages.admin.transactions.details', [
            'transaction' => $transaction
        ]);
    }


    public function update(Request $request, $id)
    {
        $data = $request->all();

        TransactionDetail::where('id', $id)->first()->update($data);
        
    //    $transaction =  Transaction::findOrFail($detail->transactions_id);
        
    //     dd($transaction);

        return redirect()->back();


    }




}
