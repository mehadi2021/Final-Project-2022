<?php

namespace App\Http\Controllers\Backend;
use App\Models\Withdraw;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
      public function view()
    {

  {
      $key=null;
        if(request()->search)
        {
           $key = request()->search;
        $lists= Withdraw::where('member_id','LIKE','%'.$key.'%')
        ->orwhere('member_name','LIKE','%'.$key.'%')
        ->paginate(2);
        //  dd($list);
        return view('admin.layouts.Withdraw.withdraw-list', compact('lists','key'));
    }

        $lists=Withdraw::orderBy('id','desc')->paginate(2);
        return view('admin.layouts.Withdraw.withdraw-list', compact('lists','key'));
     }
    }





      public function withdraw_edit($id)
             {
        //         $request->validate([
        //     'user_id'=>'required|unique:members|alpha_num|min:5|max:8',
        //  ]);
         $list=Withdraw::find($id);
                return  view('admin.layouts.Withdraw.approve-withdraw',compact('list'));
             }


     public function withdraw_approve(Request $request,$id)
             {
        //         $request->validate([
        //     'user_id'=>'required|unique:members|alpha_num|min:5|max:8',
        //  ]);
      $list=Withdraw::find($id);
        $list->update([
             'transaction'=>$request->transaction,
                    'status'=>$request->status
        ]);
                 return redirect()->route('admin.withdraw.view')->with('success','Approve Successful');
             }

}
