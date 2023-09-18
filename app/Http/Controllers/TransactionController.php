<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //
    public function show()
    {
        $transaction = Transaction::all();

        $data['transactions'] = $transaction;
        $data['page_title'] = 'sales';
        return view('admin.sales.sales-show', $data);
    }
}
