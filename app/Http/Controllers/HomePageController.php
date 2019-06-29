<?php

namespace App\Http\Controllers;

use App\Content;
use App\SysStatic;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //
    public function index()
    {
        $sys1 = SysStatic::where('id',1)->get();
        $sys2 = SysStatic::where('id',2)->get();
        $sys3 = SysStatic::where('id',3)->get();
        $term = "sponsor vertical";
        $term2 = "sponsor horizontal";
        $sys4 = SysStatic::where('static_name','LIKE',"%{$term2}%")->get();


        $sys6 = SysStatic::where('static_name','LIKE',"%{$term}%")->get();

        $popContent=Content::where('isActive',0)->orderBy('created_at','desc')->get()->take(10);

        $topContent=Content::where('isActive',0)->orderBy('created_at','desc')->get()->take(1);
        $mainContent=Content::where('isActive',0)->orderBy('created_at','desc')->limit(4)->offset(1)->get();

        $topSocial=Content::where('isActive',0)->where('category_id',1)->orderBy('created_at','desc')->get()->take(1);
        $SecondSocial=Content::where('isActive',0)->where('category_id',1)->orderBy('created_at','desc')->limit(1)->offset(1)->get();
        $SocialCol1=Content::where('isActive',0)->where('category_id',1)->orderBy('created_at','desc')->limit(3)->offset(2)->get();
        $SocialCol2=Content::where('isActive',0)->where('category_id',1)->orderBy('created_at','desc')->limit(3)->offset(5)->get();

        $top4Eco = Content::where('isActive',0)->where('category_id',2)->orderBy('created_at','desc')->get()->take(4);
        $top6Techno = Content::where('isActive',0)->where('category_id',3)->orderBy('created_at','desc')->get()->take(6);


        return view('front.page.homepage',compact('sys1','sys2','sys3','sys4','sys6','popContent','top6Techno','top4Eco','topContent','mainContent','topSocial','SecondSocial','SocialCol1','SocialCol2'));
    }

    public function newsdetail($id)
    {
        $sys1 = SysStatic::where('id',1)->get();
        $sys2 = SysStatic::where('id',2)->get();
        $sys3 = SysStatic::where('id',3)->get();
        $term = "sponsor vertical";
        $term2 = "sponsor horizontal";
        $sys4 = SysStatic::where('static_name','LIKE',"%{$term2}%")->get();
        $sys6 = SysStatic::where('static_name','LIKE',"%{$term}%")->get();

        $singlecontent = Content::where('id',$id)->get();

        return view('front.page.singlepost',compact('sys1','sys2','sys3','sys4','sys6','singlecontent'));
    }

    public function category($id)
    {
        $sys1 = SysStatic::where('id',1)->get();
        $sys2 = SysStatic::where('id',2)->get();
        $sys3 = SysStatic::where('id',3)->get();
        $term = "sponsor vertical";
        $term2 = "sponsor horizontal";
        $sys4 = SysStatic::where('static_name','LIKE',"%{$term2}%")->get();
        $sys6 = SysStatic::where('static_name','LIKE',"%{$term}%")->get();

        $category = Content::where('category_id',$id)->orderBy('created_at','desc')->paginate(8);
        $top = Content::where('category_id',$id)->orderBy('created_at','desc')->get()->take(1);

        return view('front.page.category',compact('sys1','sys2','sys3','sys4','sys6','category','top'));
    }
}
