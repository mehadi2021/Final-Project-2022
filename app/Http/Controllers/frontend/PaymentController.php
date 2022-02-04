<?php

namespace App\Http\Controllers\frontend;
use App\Models\Deposit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function store(Request $request)
    {

    if($request->member_id==auth()->user()->member_id && $request->member_name==auth()->user()->name)
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
          'transaction'=>bcrypt('transaction'),

           ]);
           return redirect()->back()->with('deposit','Your payment feadfack');
        }
           else
           {
                return redirect()->back()->with('depositerror','Your Account Not Valid');
           }


    }
      public function me($id)
    {
         $message=Deposit::orderBy('id','desc')->where('member_id',$id)->paginate(1);
         return view('website.pages.message',compact('message'));

        }

}
