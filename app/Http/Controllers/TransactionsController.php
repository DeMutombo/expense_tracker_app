<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function index()
    {
        $transactions = Transactions::all();
        // $transaction = Transactions::find(1)->categories->get();
        return view('home', ['transactions' => $transactions]);
    }
}
