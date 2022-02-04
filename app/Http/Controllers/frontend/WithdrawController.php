<?php

namespace App\Http\Controllers\frontend;
use App\Models\Branch;
use App\Models\Withdraw;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function withdraw()
    {
           $branches=Branch::all();
         return view('website.pages.withdraw',compact('branches'));
    }

 public function store(Request $request)
    {

       if($request->member_id==auth()->user()->member_id && $request->member_name==auth()->user()->name)
        {
          Withdraw::create([
          'member_id'=>$request->member_id,
          'member_name'=>$request->member_name,
          'account_no'=>$request->account_no,
          'branch'=>$request->branch,
          'method'=>$request->method,
        'phone'=>$request->phone,
          'amount'=>$request->amount,
          'date'=>$request->date,
          'transaction'=>bcrypt('1'),

           ]);
           return redirect()->back()->with('deposit','Your payment feadfack');
        }
           else
           {
                return redirect()->back()->with('depositerror','Your Account Not Valid');
           }


    }


}
