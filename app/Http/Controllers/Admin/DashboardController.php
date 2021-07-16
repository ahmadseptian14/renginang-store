<?php

namespace App\Http\Controllers\Admin;

use App\Transaction;
use App\TransactionDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {

       $transactions = Transaction::count();

       $revenue = Transaction::where('transaction_status', 'SUCCESS')->sum('total_price');
        
       $pending = Transaction::where('transaction_status', 'PENDING')->count();

        return view('pages.admin.dashboard',[
            'transactions' => $transactions,
            'revenue' => $revenue,
            'pending' => $pending
        ]);
    }
}
