<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users =Auth::user()->where('type','doctor')->get();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users= Auth::user()->get();
        return view('admin.users.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request-> validate([
            'name'=>'required',
            'type'=>'required',
            'email'=>'required',

        ]    ,
        [
            'en_name.required'=>'Please Enter The Name in English',
            'ar_name.required'=>'Please Enter The Name in Arabic',

        ]);

        $img_name=null;
        if( $request->hasFile('image')){
        $img_name = rand().time().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads/doctor'),$img_name);
    }





    $data = $request->except('_token');
    unset($data['image']);
    $data['image']=$img_name;
    $data['password']=Auth::id();


    Auth::user()->create($data );

    return redirect()->route('admin.users.index')->with('msg','doctor created successfully')
    ->with('type','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Auth::user('type','doctor')->destroy($id);
        return redirect()->route('admin.users.index')->with('msg','doctor deleted successfully')->
          with('type','danger');
    }

/**
     * trash the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        $users= Auth::user('type','doctor')::onlyTrashed()->get();
        return view('admin.users.trash',compact('users'));
    }



/**
     * restore the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        Auth::user('type','doctor')::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.users.trash')->with('msg','doctor restored successfully')->with('type','warning');
    }



/**
     * forcdelete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function forcedelete($id)
    {
        $user= Auth::user('type','doctor')::onlyTrashed()->find($id);
        File::delete(public_path('uploads/doctor'),$user->image);
        $user->forcedelete();

        return redirect()->route('admin.users.trash')->with('msg','doctor deleted parmanintly successfully')->with('type','danger');
    }
}
