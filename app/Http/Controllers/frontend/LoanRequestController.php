<?php

namespace App\Http\Controllers\frontend;
use App\Models\Loan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoanRequestController extends Controller
{
public function loan_store(Request $request )
     {
        // dd($request->all());
     // dd($request->all());
        //  $request->validate([
        //    'member_id'=>'required|alpha_num|min:5|max:8',
        //    'loan_amount'=>'required|numeric',
        //     'loan_interest'=>'required|numeric',
        //      'payment_term'=>'required|numeric',
        //     'total_amount_interest'=>'required|numeric',
        //      'payment_schedule'=>'required|date',
        //      'due_date'=>'required|date'

        //   ]);
         if($request->member_id==auth()->user()->member_id && $request->member_name==auth()->user()->name)
         {
              Loan::create([
              'member_id'=>$request->member_id,
             'member_name'=>$request->member_name,
               'ac_no'=>$request->ac_no,
               'type'=>$request->type,
              'loan_amount'=>$request->loan_amount,
              'rate'=>$request->rate,
              'time'=>$request->time,
              'interest'=>$request->interest,
              'emi'=>$request->emi,
              'payment_date'=>$request->payment_date,

               ]);
               return redirect()->back()->with('loan','Data entry successfully');
            }
            else{
                 return redirect()->back()->with('loanerror','Your Account Not Valid');
            }

    }
}
