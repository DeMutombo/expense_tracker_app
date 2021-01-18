<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Models\User;

class TransactionsController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $transactions = $user->transactions;
        // $transaction = Transactions::find(1)->categories->get();
        return view('home')->with('transactions', $transactions);
    }
}
