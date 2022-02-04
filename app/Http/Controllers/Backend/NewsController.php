<?php

namespace App\Http\Controllers\Backend;
use App\Models\News;
use App\Http\Controllers\Controller;
use App\Models\user_request;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news_create(){
        return view('admin.layouts.News.news');
    }


    public function news_store(Request $request)
    {


        $request->validate([
              'title'=>'required',
            'news_description'=>'required'
        ]);
    try{
              News::create([
                 'title'=>$request->title,
                  'news_description'=>$request->news_description,
                  ]);

                  return redirect()->back()->with('success', 'News created successfully');

    }
    catch(\Throwable $throwable){
                  return redirect()-> back();
    }

    }

     public function news_list(){
         $list=News::paginate(2);
         return view('admin.layouts.News.news-list', compact('list'));
     }

     public function news_delete($id){
         $list=News::find($id);
         $list->delete();
            return redirect()->back();
     }

}
