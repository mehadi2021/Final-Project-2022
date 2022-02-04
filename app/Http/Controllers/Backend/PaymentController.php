<?php

namespace App\Http\Controllers\Backend;
use App\Models\Branch;
use App\Models\Deposit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
     public function payment()
    {
         $branches=Branch::all();
         return view('admin.layouts.Payment.payment',compact('branches'));

        }
          public function store(Request $request)
    {

          Deposit::create([
          'member_id'=>$request->member_id,
          'member_name'=>$request->member_name,
          'account_no'=>$request->account_no,
         'type'=>$request->type,
          'branch'=>$request->branch,
          'method'=>$request->method,
          'amount'=>$request->amount,
          'date'=>$request->date,
          'transaction'=>bcrypt($request->transaction),

           ]);
           return redirect()->back()->with('deposit','Your Request Send');

    }

}
