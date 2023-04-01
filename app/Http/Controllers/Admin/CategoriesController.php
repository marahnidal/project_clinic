<?php

namespace App\Http\Controllers\Admin;

use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('all_categories');
        $categories= category::with('parent')->orderByDesc('id')->paginate(5);
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('add_category');
        $categories= category::select('id','name')->get();
        return view('admin.categories.create',compact('categories'));
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
            'parent_id'=>'nullable|exists:categories,id'
        ]    ,
        [
            'en_name.required'=>'Please Enter The Name in English',
            'ar_name.required'=>'Please Enter The Name in Arabic',

        ]);


        $name=json_encode([
            'en'=>$request->en_name ,
            'ar'=>$request->ar_name
        ],JSON_UNESCAPED_UNICODE);

        category::create([
            'name'=>$name,
            'parent_id'=>$request->parent_id
        ]);

        return redirect()->route('admin.categories.index')->with('msg','category created successfully')->with('type','success');
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
    public function edit(Category $category)
    {
        $categories= category::select('id','name')->where('id', '!=' ,$category->id)->get();
        return view('admin.categories.edit',compact('category','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request-> validate([
            'en_name'=>'required',
            'ar_name'=>'required',
            'parent_id'=>'nullable|exists:categories,id|not_in:'.$category->id
        ]    ,
        [
            'en_name.required'=>'Please Enter The Name in English',
            'ar_name.required'=>'Please Enter The Name in Arabic',

        ]);


        $name=json_encode([
            'en'=>$request->en_name ,
            'ar'=>$request->ar_name
        ],JSON_UNESCAPED_UNICODE);

        $category->update([
            'name'=>$name,
            'parent_id'=>$request->parent_id
        ]);

        return redirect()->route('admin.categories.index')->with('msg','category updated successfully')->with('type','info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category =Category::find($id);
        Category::where('parent_id',$id)->update(['parent_id'=>null]);
        $category->delete();
        return redirect()->route('admin.categories.index')->with('msg','category deleted successfully')->with('type','danger');
    }

    public function trash()
    {
        Gate::authorize('trash_category');
        $categories= category::onlyTrashed()->get();
        return view('admin.categories.trash',compact('categories'));
    }
    public function restore($id)
    {
        Category::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.categories.trash')->with('msg','category restored successfully')->with('type','warning');
    }
    public function forcedelete($id)
    {
        $category=Category::onlyTrashed()->find($id)->forcedelete();
        return redirect()->route('admin.categories.trash')->with('msg','category deleted parmanintly successfully')->with('type','danger');
    }
}
