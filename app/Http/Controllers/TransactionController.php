<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransactionResourceCollection;
use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //
    public function index()
    {
        $transaction = Transaction::with(['detail'])->orderBy('created_at', 'DESC');

        return new TransactionResourceCollection($transaction->paginate(5));
    }
}
