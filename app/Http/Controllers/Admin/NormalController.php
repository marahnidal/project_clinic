<?php

namespace App\Http\Controllers\Admin;

use App\Models\category;
use App\Models\normalskin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class NormalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('all_article');
        $normalskin= normalskin::with('category')->orderByDesc('id')->get();
        return view('admin.normalskin.index',compact('normalskin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('add_article');

        $categories= category::select('id','name')->get();
        return view('admin.normalskin.create',compact('categories'));
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
            'en_content'=>'required',
            'ar_content'=>'required',
            'category_id'=>'nullable|exists:categories,id'
        ]    ,
        [
            'en_name.required'=>'Please Enter The Name in English',
            'ar_name.required'=>'Please Enter The Name in Arabic',

        ]);



        $name=json_encode([
            'en'=>$request->en_name ,
            'ar'=>$request->ar_name
        ],JSON_UNESCAPED_UNICODE);

        $content=json_encode([
            'en'=>$request->en_content ,
            'ar'=>$request->ar_content
        ],JSON_UNESCAPED_UNICODE);

        $data = $request->except('_token');
        unset($data['en_name']);
        unset($data['ar_name']);
        unset($data['en_content']);
        unset($data['ar_content']);
        $data['name']=$name;
        $data['content']=$content;
        $data['user_id']=Auth::id();


        normalskin::create($data );

        return redirect()->route('admin.normalskin.index')->with('msg','normalskin created successfully')->with('type','success');
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
    public function edit(Normalskin $normalskin)
    {
        $categories= category::select('id','name')->get();
        return view('admin.normalskin.edit',compact('normalskin','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Normalskin $normalskin)
    {
        $request-> validate([
            'en_name'=>'required',
            'ar_name'=>'required',
            'en_content'=>'required',
            'ar_content'=>'required',
            'category_id'=>'nullable|exists:categories,id'
        ]    ,
        [
            'en_name.required'=>'Please Enter The Name in English',
            'ar_name.required'=>'Please Enter The Name in Arabic',
            'en_content.required'=>'Please Enter The content in English',
            'ar_content.required'=>'Please Enter The content in Arabic',

        ]);


        $name=json_encode([
            'en'=>$request->en_name ,
            'ar'=>$request->ar_name
        ],JSON_UNESCAPED_UNICODE);

        $content=json_encode([
            'en'=>$request->en_content ,
            'ar'=>$request->ar_content
        ],JSON_UNESCAPED_UNICODE);


        $data = $request->except('_token');
        unset($data['en_name']);
        unset($data['ar_name']);
        unset($data['en_content']);
        unset($data['ar_content']);
        $data['name']=$name;
        $data['content']=$content;


        $normalskin->update($data );

        return redirect()->route('admin.normalskin.index')->with('msg','normalskin updated successfully')->with('type','info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        normalskin::destroy($id);
        return redirect()->route('admin.normalskin.index')->with('msg','normalskin deleted successfully')->with('type','danger');
    }

/**
     * trash the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        Gate::authorize('trash_article');
        $normalskin= normalskin::onlyTrashed()->get();
        return view('admin.normalskin.trash',compact('normalskin'));
    }



/**
     * restore the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        normalskin::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.normalskin.trash')->with('msg','normalskin restored successfully')->with('type','warning');
    }



/**
     * forcdelete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function forcedelete($id)
    {
        $normalskin=normalskin::onlyTrashed()->find($id)->forcedelete();
        return redirect()->route('admin.normalskin.trash')->with('msg','normalskin deleted parmanintly successfully')->with('type','danger');
    }
}
