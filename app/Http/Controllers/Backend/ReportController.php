<?php

namespace App\Http\Controllers\Backend;
use App\Models\Deposit;
use App\Models\Withdraw;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
      public function report_search(Request $request){
     $key[1]=request()->from;
    $key[2]=request()->to;
    //dd($key[1]);
        $reports = Deposit::whereBetween('created_at',[$request->from,$request->to])->get();
        // dd($reports);
        return view('admin.layouts.Report.report',compact('reports','key'));
    }
      public function withdraw_report(Request $request){
     $key[1]=request()->from;
    $key[2]=request()->to;
    //dd($key[1]);
        $lists =Withdraw::whereBetween('created_at',[$request->from,$request->to])->get();
        // dd($reports);
        return view('admin.layouts.Report.withdraw-report',compact('lists','key'));
    }
}
