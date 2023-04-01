<?php

namespace App\Http\Controllers\Admin;

use App\Models\doctor;
use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('all_doctors');
        $doctors= doctor::with('category')->orderByDesc('id')->paginate(10);
        return view('admin.doctors.index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('add_doctor');
        $categories= category::select('id','name')->get();
        return view('admin.doctors.create',compact('categories'));
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
            'en_name'=>'required',
            'ar_name'=>'required',
            'category_id'=>'nullable|exists:categories,id'
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

    $name=json_encode([
        'en'=>$request->en_name ,
        'ar'=>$request->ar_name
    ],JSON_UNESCAPED_UNICODE);




    $data = $request->except('_token');
    unset($data['en_name']);
    unset($data['ar_name']);
    unset($data['image']);
    $data['name']=$name;
    $data['image']=$img_name;
    $data['user_id']=Auth::id();


    doctor::create($data );

    return redirect()->route('admin.doctors.index')->with('msg','doctor created successfully')->with('type','success');
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
    public function edit(doctor $doctor)
    {
        $categories= category::select('id','name')->get();
        return view('admin.doctors.edit',compact('doctor','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, doctor $doctor)
    {
        $request-> validate([
            'en_name'=>'required',
            'ar_name'=>'required',
            'image'=>'nullable',
            'category_id'=>'nullable|exists:categories,id'
        ]    ,
        [
            'en_name.required'=>'Please Enter The Name in English',
            'ar_name.required'=>'Please Enter The Name in Arabic',

        ]);



        $img_name=$doctor->image;
        if( $request->hasFile('image')){
        $img_name = rand().time().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads/doctor'),$img_name);
    }

    $name=json_encode([
        'en'=>$request->en_name ,
        'ar'=>$request->ar_name
    ],JSON_UNESCAPED_UNICODE);



    $data = $request->except('_token');
    unset($data['en_name']);
    unset($data['ar_name']);
    unset($data['image']);
    $data['name']=$name;
    $data['image']=$img_name;
    $data['user_id']=Auth::id();



        $doctor->update($data );

        return redirect()->route('admin.doctors.index')->with('msg','doctor updated successfully')->with('type','info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        doctor::destroy($id);
        return redirect()->route('admin.doctors.index')->with('msg','doctor deleted successfully')->with('type','danger');
    }

/**
     * trash the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        Gate::authorize('trash_doctor');
        $doctors= doctor::onlyTrashed()->get();
        return view('admin.doctors.trash',compact('doctors'));
    }



/**
     * restore the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
       doctor::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.doctors.trash')->with('msg','doctor restored successfully')->with('type','warning');
    }
    public function forcedelete($id)
    {
        $doctor=doctor::onlyTrashed()->find($id);
        File::delete(public_path('uploads/doctor'),$doctor->image);
        $doctor->forcedelete();
        return redirect()->route('admin.doctors.trash')->with('msg','doctor deleted parmanintly successfully')->with('type','danger');
    }
}
