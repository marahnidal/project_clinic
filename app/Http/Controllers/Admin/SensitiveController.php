<?php

namespace App\Http\Controllers\Admin;

use App\Models\category;
use Illuminate\Http\Request;
use App\Models\sensitiveskin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class SensitiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('all_article');
        $sensitiveskin= sensitiveskin::with('category')->orderByDesc('id')->get();
        return view('admin.sensitiveskin.index',compact('sensitiveskin'));
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
        return view('admin.sensitiveskin.create',compact('categories'));
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


        sensitiveskin::create($data );

        return redirect()->route('admin.sensitiveskin.index')->with('msg','sensitiveskin created successfully')->with('type','success');
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
    public function edit(Sensitiveskin $sensitiveskin)
    {
        $categories= category::select('id','name')->get();
        return view('admin.sensitiveskin.edit',compact('sensitiveskin','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sensitiveskin $sensitiveskin)
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


        $sensitiveskin->update($data );

        return redirect()->route('admin.sensitiveskin.index')->with('msg','sensitiveskin updated successfully')->with('type','info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        sensitiveskin::destroy($id);
        return redirect()->route('admin.sensitiveskin.index')->with('msg','sensitiveskin deleted successfully')->with('type','danger');
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
        $sensitiveskin= sensitiveskin::onlyTrashed()->get();
        return view('admin.sensitiveskin.trash',compact('sensitiveskin'));
    }



/**
     * restore the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        sensitiveskin::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.sensitiveskin.trash')->with('msg','sensitiveskin restored successfully')->with('type','warning');
    }



/**
     * forcdelete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function forcedelete($id)
    {
        $sensitiveskin=sensitiveskin::onlyTrashed()->find($id)->forcedelete();
        return redirect()->route('admin.sensitiveskin.trash')->with('msg','sensitiveskin deleted parmanintly successfully')->with('type','danger');
    }
}
