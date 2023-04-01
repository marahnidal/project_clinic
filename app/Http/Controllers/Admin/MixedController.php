<?php

namespace App\Http\Controllers\Admin;

use App\Models\category;
use App\Models\mixedskin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class MixedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('all_article');
        $mixedskin= mixedskin::with('category')->orderByDesc('id')->get();
        return view('admin.mixedskin.index',compact('mixedskin'));
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
        return view('admin.mixedskin.create',compact('categories'));
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


        mixedskin::create($data );

        return redirect()->route('admin.mixedskin.index')->with('msg','mixedskin created successfully')->with('type','success');
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
    public function edit(Mixedskin $mixedskin)
    {
        $categories= category::select('id','name')->get();
        return view('admin.mixedskin.edit',compact('mixedskin','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mixedskin $mixedskin)
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


        $mixedskin->update($data );

        return redirect()->route('admin.mixedskin.index')->with('msg','mixedskin updated successfully')->with('type','info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        mixedskin::destroy($id);
        return redirect()->route('admin.mixedskin.index')->with('msg','mixedskin deleted successfully')->with('type','danger');
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
        $mixedskin= mixedskin::onlyTrashed()->get();
        return view('admin.mixedskin.trash',compact('mixedskin'));
    }



/**
     * restore the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
       mixedskin::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.mixedskin.trash')->with('msg','normixedskinmalskin restored successfully')->with('type','warning');
    }



/**
     * forcdelete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function forcedelete($id)
    {
        $mixedskin= mixedskin::onlyTrashed()->find($id)->forcedelete();
        return redirect()->route('admin.mixedskin.trash')->with('msg','mixedskin deleted parmanintly successfully')->with('type','danger');
    }
}
