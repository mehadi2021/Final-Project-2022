<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    public function home()
    {
        return view('website.pages.home');
    }
    public function registration(Request $request)
    {
        //validate this request
        // dd($request->all());
        $request->validate([
           'username'=>'required',
           'email'=>'email|required',
           'password'=>'required',
           'mobile'=>'required|digits:11',
        ]);

        //  $filename = "";
        //             if($request->hasFile('image'))
        //             {
        //                 $file= $request->file('image');
        //                 $filename= date ('Ymdhms').'.'.$file->getClientOriginalExtension();
        //                 $file->storeAs('/uploads', $filename);
        //             }

        User::create([
           'name'=>$request->username,
           'email'=>$request->email,
           'password'=>bcrypt($request->password),
           'mobile'=>$request->mobile
        ]);

        return redirect()->back()->with('batch','Registration Successful.');



    }

 public function userLogin(Request $request){
        // dd($request->all());

         $post= $request->except('_token');
        //  dd(post);
        // dd(Auth::attempt($post));
         if (Auth::attempt($post)) {
             return redirect()->back()->with('batch','login Successful.');;
         }
         else
         return redirect()->back()->with('error','email not found.');
     }

     public function userLogout(){
         Auth::logout();
         return redirect()->route('user')->with('error','Logout Successful.');
     }



}
