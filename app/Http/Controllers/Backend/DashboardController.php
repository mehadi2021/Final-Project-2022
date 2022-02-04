<?php

namespace App\Http\Controllers\Backend;
use App\Models\Member;
use App\Models\Loan;
use App\Models\Deposit;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

           public function dashboard()
           {
               $member=Member::count();
                  $loans=Loan::count();
                   $deposit=Deposit::where('type','deposit')->count();
                       $user=User::count();
                         $deposit=Deposit::where('type','deposit')->count();
                          $adeposit=Deposit::where('type','deposit')->sum('amount');
                              $aloans=Deposit::where('type','loan')->count();
                          $aloan=Deposit::where('type','loan')->sum('amount');
                              $total=Deposit::sum('amount');
           return view('admin.layouts.DashBoard.home',compact('member','loans','deposit','user','adeposit','aloan','aloans','total'));


           }

}
