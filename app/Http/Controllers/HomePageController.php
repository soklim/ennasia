<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //
    public function index()
    {

        $topContent=Content::where('isActive',0)->orderBy('created_at','desc')->get()->take(1);
        $mainContent=Content::where('isActive',0)->orderBy('created_at','desc')->limit(4)->offset(1)->get();

        $topSocial=Content::where('isActive',0)->where('category_id',1)->orderBy('created_at','desc')->get()->take(1);
        $SecondSocial=Content::where('isActive',0)->where('category_id',1)->orderBy('created_at','desc')->limit(1)->offset(1)->get();
        $SocialCol1=Content::where('isActive',0)->where('category_id',1)->orderBy('created_at','desc')->limit(3)->offset(2)->get();
        $SocialCol2=Content::where('isActive',0)->where('category_id',1)->orderBy('created_at','desc')->limit(3)->offset(5)->get();

        $top4Eco = Content::where('isActive',0)->where('category_id',2)->orderBy('created_at','desc')->get()->take(4);
        $top6Techno = Content::where('isActive',0)->where('category_id',3)->orderBy('created_at','desc')->get()->take(6);


        return view('front.page.homepage',compact('top6Techno','top4Eco','topContent','mainContent','topSocial','SecondSocial','SocialCol1','SocialCol2'));
    }

    public function newsdetail($id)
    {
        $singlecontent = Content::where('id',$id)->get();

        return view('front.page.singlepost',compact('singlecontent'));
    }
}
