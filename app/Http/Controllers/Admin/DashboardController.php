<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $customer = User::count();
        $revenue = Transaction::sum('total_price'); // menghitung sesuai dengan nama fieldnya 
        $transaction = Transaction::count();

        return view('pages.admin.dashboard',[
            'customer' => $customer,
            'revenue' => $revenue,
            'transaction' => $transaction
        ]);
    }
}
