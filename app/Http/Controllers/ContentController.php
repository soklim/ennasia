<?php

namespace App\Http\Controllers;

use App\category;
use App\Content;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $content = Content::orderBy('created_at','desc')->get();
        $cat = category::all();
        return view('admin.content.index',compact("content","cat"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cat = category::all();
        return view('admin.content.create',compact("cat"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $user = Auth::user();
        $input = $request->all();

        $this->validate($request, [
            'photo_id'  => 'required|image|mimes:,jpeg,jpg,png,gif|max:2048'
        ]);

        if($file = $request->file('photo_id'))
        {
            $name = time()  .$file->getClientOriginalName();

//            $file->move('images',$name);
            $file->move(public_path().'/images/', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }

        $user->content()->create($input);

        return redirect('/admin/content');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $content = Content::findOrFail($id);
        $cat = category::all();
        return view('admin.content.edit',compact('content','cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $content =Content::findOrFail($id);

        $input =$request->all();


        if($file = $request->file('photo_id'))
        {
            $name = time()  .$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;

        }


        $content->update($input);

        return redirect('/admin/content');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        //
        $content->delete();

        return redirect()->route('content.index')->withStatus(__('Content successfully deleted.'));
    }
}
