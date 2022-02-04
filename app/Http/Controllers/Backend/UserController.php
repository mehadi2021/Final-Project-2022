<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function profile()
    {
   return view('admin.layouts.Profile.admin-profile');

    }

      public function page()
    {
   return view('admin.layouts.LogIn.login');

    }

     public function registration()
    {
        return view('admin.layouts.Profile.admin-registration');
    }


     public function store(Request $request)
    {
        //validate this request
        // dd($request->all());
        $request->validate([
           'username'=>'required',
           'email'=>'email|required',
           'password'=>'required',
           'mobile'=>'required|digits:11',
        ]);

         $filename = "";
                    if($request->hasFile('image'))
                    {
                        $file= $request->file('image');
                        $filename= date ('Ymdhms').'.'.$file->getClientOriginalExtension();
                        $file->storeAs('/uploads', $filename);
                    }


        User::create([
           'name'=>$request->username,
           'email'=>$request->email,
           'password'=>bcrypt($request->password),
           'mobile'=>$request->mobile,
           'role'=>$request->role,
          'image'=>$filename
        ]);

        return redirect()->route('admin.profile')->with('success','Registration Successful.');



    }
  public function profile_edit($id)
    {
        $lists=User::find($id);
   return view('admin.layouts.Profile.edit-profile',compact('lists'));

    }



 public function profile_update(Request $request,$id)
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
      $list=User::find($id);
      $filename =$list->image;
                    if($request->hasFile('image'))
                    {
                        $file= $request->file('image');
                        $filename= date ('Ymdhms').'.'.$file->getClientOriginalExtension();
                        $file->storeAs('/uploads', $filename);
                    }
        $list->update([
             'name'=>$request->username,
             'email'=>$request->email,
             'password'=>bcrypt($request->password),
           'mobile'=>$request->mobile,
           'role'=>$request->role,
          'image'=>$filename
        ]);
                 return redirect()->route('admin.profile')->with('success','Update Successful');
             }











 public function log(Request $request){
        // dd($request->all());

         $post= $request->except('_token');
        //  dd(post);
        // dd(Auth::attempt($post));
         if (Auth::attempt($post)) {
             return redirect()->route('admin')->with('success','login Successful.....');
         }
         else
         return redirect()->route('admin.page')->with('success','<strong>Sorry!</strong> email and password not match...!');
     }

     public function logout(){
         Auth::logout();
         return redirect()->route('admin.page')->with('success','Thank You');
     }


     public function edit()
    {
   return view('admin.layouts.Profile.edit-profile');

    }
      public function user_list()
    {
    $key=null;
        if(request()->search)
        {
           $key = request()->search;
        $users= User::where('email','LIKE','%'.$key.'%')->paginate(2);
        //  dd($list);
        return view('admin.layouts.User.user-list', compact('users','key'));
    }

        $users=User::orderBy('id','desc')->paginate(2);
        return view('admin.layouts.User.user-list', compact('users','key'));

    }
           public function user_edit($id)
             {
                 //dd($id);
                 $user=User::find($id);
                return  view('admin.layouts.User.approve-user',compact('user'));
             }

               public function user_approve(Request $request,$id)
             {
        //         $request->validate([
        //     'user_id'=>'required|unique:members|alpha_num|min:5|max:8',
        //  ]);
      $list=User::find($id);
        $list->update([
             'member_id'=>$request->member_id
        ]);
                 return redirect()->route('admin.user.list')->with('success','Approve Successful');
             }

                public function user_cancel($id)
             {
                 //dd($id);
                 $lis=User::find($id);
                 $lis->delete();


                 return redirect()->back();
             }



}
