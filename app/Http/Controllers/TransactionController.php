<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Transaction_details;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request)
    {
        $id = auth()->user()->id;
        $transaction = new Transaction();
        $transaction->totalPrice = $request['total'];
        $transaction->cashier_id = $id;
        if ($transaction->save()) {
            return $transaction->id;
        }
    }
    public function store_transaction_details(Request $request)
    {


        parse_str($request->formdata, $formdata);
        foreach ($formdata['pr_id'] as $key => $value) {
            $tr_details = new Transaction_details();
            $tr_details->sold_quantity = $formdata['pr_quantity'][$key];
            $tr_details->product_id = $formdata['pr_id'][$key];
            $tr_details->transaction_id = $request['transaction_id'];
            if ($tr_details->save()) {
                return true;
            }
        }
        return false;
    }
}
