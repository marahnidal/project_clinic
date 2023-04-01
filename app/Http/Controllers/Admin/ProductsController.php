<?php

namespace App\Http\Controllers\Admin;


use App\Models\product;
use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('all_products');
        $products= product::with('category')->orderByDesc('id')->paginate(10);
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('add_product');
        $categories= category::select('id','name')->get();
        return view('admin.products.create',compact('categories'));
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
            'price'=>'required',
            'category_id'=>'nullable|exists:categories,id'
        ]    ,
        [
            'en_name.required'=>'Please Enter The Name in English',
            'ar_name.required'=>'Please Enter The Name in Arabic',

        ]);

        $img_name=null;
        if( $request->hasFile('image')){
        $img_name = rand().time().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads/products'),$img_name);
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


    product::create($data );

    return redirect()->route('admin.products.index')->with('msg','product created successfully')->with('type','success');
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
    public function edit(product $product)
    {
        $categories= category::select('id','name')->get();
        return view('admin.products.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        $request-> validate([
            'en_name'=>'required',
            'ar_name'=>'required',
            'image'=>'nullable',
            'price'=>'required',
            'category_id'=>'nullable|exists:categories,id'
        ]    ,
        [
            'en_name.required'=>'Please Enter The Name in English',
            'ar_name.required'=>'Please Enter The Name in Arabic',

        ]);



        $img_name=$product->image;
        if( $request->hasFile('image')){
        $img_name = rand().time().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads/products'),$img_name);
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



        $product->update($data );

        return redirect()->route('admin.products.index')->with('msg','product updated successfully')->with('type','info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        product::destroy($id);
        return redirect()->route('admin.products.index')->with('msg','product deleted successfully')->with('type','danger');
    }

/**
     * trash the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function trash()
     {
        Gate::authorize('trash_product');
         $products= product::onlyTrashed()->get();
         return view('admin.products.trash',compact('products'));
     }

     public function restore($id)
     {
         product::onlyTrashed()->find($id)->restore();
         return redirect()->route('admin.products.trash')->with('msg','product restored successfully')->with('type','warning');
     }
     public function forcedelete($id)
     {
         $product=product::onlyTrashed()->find($id);
         File::delete(public_path('uploads/products'),$product->image);
         $product->forcedelete();
         return redirect()->route('admin.products.trash')->with('msg','product deleted parmanintly successfully')->with('type','danger');
     }
 }
