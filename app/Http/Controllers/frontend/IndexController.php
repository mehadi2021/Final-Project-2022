<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home()
    {
        $lists=News::orderBy('id','desc')->simplepaginate(2);
        return view('website.pages.home',compact('lists'));
    }
      public function about()
      {
        return view('website.pages.about');
    }
}
