<?php

namespace App\Http\Controllers\frontend;
use App\Models\Deposit;
use App\Models\Member;
use App\Models\Loan;
use App\Models\Withdraw;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report($id)

    {
         if($id=auth()->user()->member_id)
         {

      $lists=Loan::orderBy('id','desc')
      ->where('member_id',$id)->paginate(1);
       $members=Member::where('member_id',$id)->get();
         $deposits=Deposit::orderBy('id','desc')
         ->where('member_id',$id)
        -> where('type','deposit')->paginate(3);

          $loans=Deposit::orderBy('id','desc')
         ->where('member_id',$id)
        -> where('type','loan')->paginate(3);
          $withdraw=Withdraw::orderBy('id','desc')
         ->where('member_id',$id)->paginate(3);
        return view('website.pages.Members.member-report',compact('lists','members','deposits','loans','withdraw'));
         }
         else{
                 return redirect()->back()->with('reporterror','Your Account Not Valid');
         }
    }

}
