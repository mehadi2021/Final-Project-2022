<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Helpers;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
 public function member_create()
    {
        $branches=Branch::all();
         return view('admin.layouts.Members.member', compact('branches'));

    }

      public function  member_store (Request $request)
    {
          $request->validate([
            'member_id'=>'required|unique:members|alpha_num|min:5|max:8',
            'dob'=>'required',
            'address'=>'required|alpha',
            'gender'=>'required',
            'voter_id'=>'required|unique:members',
            'phon_no'=>'required|digits:11',
            'branch'=>'required|alpha'
        ]);
        $filename = "";
                    if($request->hasFile('members_image'))
                    {
                        $file= $request->file('members_image');
                        $filename= date ('Ymdhms').'.'.$file->getClientOriginalExtension();
                        $file->storeAs('/uploads', $filename);
                    }

                 Member::create([
            'name'=>$request->name,
            'member_id'=>$request->member_id,
            'dob'=>$request->dob,
            'address'=>$request->address,
            'gender'=>$request->gender,
            'voter_id'=>$request->voter_id,
            'phon_no'=>$request->phon_no,
            'account_no'=>date('Ymdhms'),
            'branch'=>$request->branch,
            'image'=>$filename
        ]);

          return redirect()->back()->with('success', 'Member added successfully');

    }

public function member_list()
    {
      $key=null;
        if(request()->search)
        {
           $key = request()->search;
        $lists= Member::where('member_id','LIKE','%'.$key.'%')
        ->orwhere('name','LIKE','%'.$key.'%')
        ->paginate(2);
        //  dd($list);
        return view('admin.layouts.Members.member-list', compact('lists','key'));
    }

        $lists=Member::orderBy('id','desc')->paginate(2);
        return view('admin.layouts.Members.member-list', compact('lists','key'));
     }




             public function member_details($id)
             {
                 $user=User::find($id);
                 $member=Member::find($id);
                 return view('admin.layouts.Members.member-details', compact('member','user'));
             }
             public function member_delete($id)
             {
                 //dd($id);
                 $lis=Member::find($id);
                 $lis->delete();


                 return redirect()->back();
             }

            public function member_edit($id)
             {
                 //dd($id);
                 $lis=Member::find($id);
                return  view('admin.layouts.Members.edit-member',compact('lis'));
             }
             public function member_update(Request $request,$id)
             {
        //         $request->validate([
        //     'user_id'=>'required|unique:members|alpha_num|min:5|max:8',
        //     'dob'=>'required',
        //     'address'=>'required|alpha',
        //     'gender'=>'required',
        //     'voter_id'=>'required|unique:members',
        //     'phon_no'=>'required|digits:11',
        //     'account_no'=>'required|numeric|min:6',
        //     'branch'=>'required|alpha'
        // ]);
      $list=Member::find($id);
      $filename =$list->image;
                    if($request->hasFile('members_image'))
                    {
                        $file= $request->file('members_image');
                        $filename= date ('Ymdhms').'.'.$file->getClientOriginalExtension();
                        $file->storeAs('/uploads', $filename);
                    }
        $list->update([
             'name'=>$request->name,
             'member_id'=>$request->member_id,
            'dob'=>$request->dob,
            'address'=>$request->address,
            'gender'=>$request->gender,
            'voter_id'=>$request->voter_id,
            'phon_no'=>$request->phon_no,
            'account_no'=>$request->account_no,
            'branch'=>$request->branch,
             'image'=>$filename
        ]);
                 return redirect()->route('admin.members.list')->with('success','Update Successful');
             }

  public function mehadi1()
             {

           return  view('website.pages.calculation');
             }

   public function mehadi(Request $request)
             {
 $me=$request->m;
 $md=$request->mh;
 $mr=$request->mhr;
// dd($me);
  $CI=null;
    $Ci=null;
    $CI=$p*(pow((1+$r/100),$t));
    $Ci=$CI/$t;
             return  interest($me,$md,$mr);
             }


                 }
