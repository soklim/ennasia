<?php

namespace App\Http\Controllers;

use App\Photo;
use App\SysStatic;
use Illuminate\Http\Request;

class SysStaticController extends Controller
{
    //
    public function index()
    {
        //
        $static = SysStatic::all();
        return view('admin.static.index',compact("static"));
    }

    public function create()
    {
        //
        return view('admin.static.create');
    }

    public function store(Request $request)
    {
        //
        $input = $request->all();

        if($file = $request->file('photo_id'))
        {
            $name = time()  .$file->getClientOriginalName();

            $file->move('images',$name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }

        SysStatic::create($input);

        return redirect('/admin/sys_static');
    }
    public function edit($id)
    {
        //
        $sys_statics = SysStatic::findOrFail($id);


        return view('admin.static.edit',compact('sys_statics'));
    }
    public function update(Request $request, $id)
    {
        //
        $sys_statics = SysStatic::findOrFail($id);

        $input =$request->all();

        if($file = $request->file('photo_id'))
        {
            $name = time()  .$file->getClientOriginalName();

            $file->move('images',$name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;

        }

        $sys_statics->update($input);

        return redirect('admin/sys_static');

    }
}
