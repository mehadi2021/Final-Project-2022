<?php
namespace App\Http\Controllers\Backend;
use App\Models\Deposit;
use App\Models\Member;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Loan_listController extends Controller
{
    public function loan_list()
    {
  $key=null;
        if(request()->search)
        {
           $key = request()->search;
       $loans=Deposit::where('type','loan')->where('member_id','LIKE','%'.$key.'%')->paginate(2);
        //  dd($list);
        return view('admin.layouts.Loan.loan-list', compact('loans','key'));
    }

        $loans=Deposit::orderBy('id','desc')->where('type','loan')->paginate(1);
        return view('admin.layouts.Loan.loan-list', compact('loans','key'));
     }

  public function loan_details($id){
          $members=Member::where('member_id',$id)->get();

        //   $users=User::all();
            $amount=Deposit::where('member_id',$id)
            ->where('type','loan')->sum('amount');
            $loans=Deposit::where('member_id',$id)
            ->where('type','loan')->get();
       return   view('admin.layouts.Loan.loan-details',compact('members','loans','amount'));
    }


    }
