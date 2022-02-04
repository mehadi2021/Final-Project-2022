<?php

namespace App\Http\Controllers\Backend;
use App\Models\Branch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function branch_list(){
         $branches=Branch::all();
         return view('admin.layouts.Branch.branch-list', compact('branches'));
     }

       public function branch_deposit(){
         $branches=Branch::all();
         return view('website.pages.deposit', compact('branches'));
     }

     public function branch_create()
    {
         return view ('admin.layouts.Branch.add-branch');
    }


    public function branch_store(Request $request)
    {
// dd($request->all());

        $request->validate([
            'name'=>'required|alpha_num'
        ]);
    try{
              Branch::create([

                  'name'=>$request->name
                  ]);

                  return redirect()->back()->with('success', 'Branch added successfully');

    }
    catch(\Throwable $throwable){
                  return redirect()-> back();
    }

    }

     public function branch_delete($id){
         $list=Branch::find($id);
         $list->delete();
            return redirect()->back();
     }

}

