<?php

namespace App\Http\Controllers\frontend;
use App\Models\Branch;
use App\Models\Member;
use App\Models\Deposit;
use App\Models\Withdraw;
use App\Models\Add_loan;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service()
    {
    return view('website.pages.service');

    }
 public function payment()
    {
          $branches=Branch::all();
         return view('website.pages.payment', compact('branches'));

    }
    public function loan()
    {
            $list=Add_loan::all();
    return view('website.pages.loan',compact('list'));

    }
    public function profile($id)
    {
          $members=User::find($id);
           $deposits=Deposit::where('member_id',auth()->User()->member_id)
           ->where('type','deposit')->sum('amount');
            $loans=Deposit::where('member_id',auth()->User()->member_id)
           ->where('type','loan')->sum('amount');
            $balance=Deposit::where('member_id',auth()->User()->member_id)
                 ->where('type','deposit')->sum('amount');
            $Cbalance=Withdraw::where('member_id',auth()->User()->member_id)
            ->where('status','approve')->sum('amount');

         return view('website.pages.Members.member-profile', compact('members','deposits','loans','balance','Cbalance'));

    }










}
