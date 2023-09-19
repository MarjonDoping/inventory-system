<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function get($year, $month, $day)
    {

        $transaction = DB::select(DB::raw("SELECT * FROM transactions"));

        if ($year != 0) {
            $transaction = DB::select(DB::raw("SELECT * FROM transactions WHERE YEAR(date) = $year"));
        }
        if ($month != 0) {
            $transaction = DB::select(DB::raw("SELECT * FROM transactions WHERE YEAR(date) = $year AND MONTH(date) = $month"));
        }
        if ($day != 0) {
            $transaction = DB::select(DB::raw("SELECT * FROM transactions WHERE YEAR(date) = $year AND MONTH(date) = $month AND DAY(date) = $day"));
        }

        $data['transactions'] = $transaction;
        $data['page_title'] = 'sales';
        return response()->json($data);
    }
}
