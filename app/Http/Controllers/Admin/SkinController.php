<?php

namespace App\Http\Controllers\Admin;


use App\Models\skin;
use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SkinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skins= skin::with('category')->orderByDesc('id')->paginate(5);
        return view('admin.skin.index',compact('skins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories= category::select('id','name')->get();
        return view('admin.skin.create',compact('categories'));
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


        skin::create($data );

        return redirect()->route('admin.skin.index')->with('msg','skin created successfully')->with('type','success');
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
    public function edit(Skin $skin)
    {
        $categories= category::select('id','name')->get();
        return view('admin.skin.edit',compact('skin','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skin $skin)
    {
        $request-> validate([
            'en_name'=>'required',
            'ar_name'=>'required',
            'en_content'=>'nullable',
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


        $skin->update($data );

        return redirect()->route('admin.skin.index')->with('msg','skin updated successfully')->with('type','info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        skin::destroy($id);
        return redirect()->route('admin.skin.index')->with('msg','skin deleted successfully')->with('type','danger');
    }

/**
     * trash the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        $skins= skin::onlyTrashed()->get();
        return view('admin.skin.trash',compact('skins'));
    }



/**
     * restore the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        skin::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.skin.trash')->with('msg','skin restored successfully')->with('type','warning');
    }



/**
     * forcdelete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function forcedelete($id)
    {
        $skin=skin::onlyTrashed()->find($id)->forcedelete();
        return redirect()->route('admin.skin.trash')->with('msg','skin deleted parmanintly successfully')->with('type','danger');
    }
}
