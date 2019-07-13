<?php

namespace App\Http\Controllers;

use App\Province;
use App\RealCategory;
use App\Realestate;
use App\RealType;
use App\Status;
use App\Thumbnail;
use App\User;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Real_EstateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $estate = Realestate::orderBy('created_at','desc')->get();
        return view('admin.real_estate.index',compact("estate"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cat = RealCategory::all();
        $province = Province::all();
        $status = Status::all();
        $type = RealType::all();
        return view('admin.real_estate.create',compact('cat','province','status','type'));
    }


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

            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }

        $user->real_estate()->create($input);

        $maxid = Realestate::orderBy('order','asc')->max('id');
        if($request->hasfile('filename'))
        {

            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move('images', $name);
//                $photo = Thumbnail::create(['file'=>$name]);

                $photo = new Thumbnail();
                $photo->realeastate_id =$maxid;
                $photo->file = $name;


                $photo->save();

//                $input['filename'] = $photo->id;
            }
        }

        return redirect('/admin/real_estate');
    }


    public function edit($id)
    {
        //
        $real = Realestate::findOrFail($id);
        $cat = RealCategory::all();
        $province = Province::all();
        $status = Status::all();
        $type = RealType::all();
        return view('admin.real_estate.edit',compact('real','cat','province','status','type'));
    }

    public function update(Request $request, $id)
    {
        //
        $real =Realestate::findOrFail($id);

        $input =$request->all();


        if($file = $request->file('photo_id'))
        {
            $name = time()  .$file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }


        $real->update($input);

        return redirect('/admin/real_estate');
    }


    public function destroy(Realestate $realeastate)
    {
        //
    }
}
