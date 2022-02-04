<?php

namespace App\Http\Controllers\Backend;
use App\Models\Add_loan;
use App\Models\Calculation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class New_loanController extends Controller
{
       public function loan_list(){
        $lists=Add_loan::all();
         return view('admin.layouts.AddLoan.new-loan-list', compact('lists'));
     }
      public function loan_request(){
         $list=Add_loan::with('calculation')->get();
         return view('website.pages.loan', compact('list'));
     }



      public function loan_create()
    {
         return view ('admin.layouts.AddLoan.new-loan-add');
    }
     public function loan_store(Request $request)
    {
// dd($request->all());

        // $request->validate([
        //     'name'=>'required|alpha_num'
        // ]);
    // try{
             Add_loan::create([

                  'name'=>$request->name,
                   'amount'=>$request->amount,
                    'time'=>$request->time,
                    'rate'=>$request->rate,
                     'interest'=>$request->interest,
                     'emi'=>$request->emi
                  ]);

                  return redirect()->back()->with('success', 'Loan added successfully');

    // }
    // catch(\Throwable $throwable){
    //               return redirect()-> back();
    // }

    }




}
