@extends('admin.master')
@section('title','Add Product | Admin')
@section('content')
@include('admin.errors')
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">{{ __('site.Add New Product') }}</h1>
  <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data" >
    @csrf
 <div class="row">
<div class="col-md-6">
    <div class="mb-3">
        <label>{{ __('site.English Name') }}</label>
       <input type="text" class="form-control" placeholder="{{ __('site.Please Enter The Name in English') }}" name="en_name" value="{{ old('en_name') }}">
   </div>
</div>

   <div class="col-md-6">
    <div class="mb-3">
        <label>{{ __('site.Arabic Name') }}</label>
        <input type="text" class="form-control" placeholder="{{ __('site.Please Enter The Name in Arabic') }}" name="ar_name" value="{{ old('ar_name') }}">
    </div>
  </div>
   </div>


   <div class="mb-3">
    <label>{{ __('site.Image') }}</label>
    <input type="file" class="form-control"  name="image" >
</div>


 <div class="mb-3">
        <label>{{ __('site.Price') }}</label>
        <input type="number" class="form-control" placeholder="{{ __('site.Price') }}" name="price" value="{{ old('Price') }}">
    </div>


    <div class="mb-3">
        <label>{{ __('site.Category') }}</label>
        <select class="form-control" name="category_id" >
            <option value="">{{ __('site.--Select Category--') }}</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->trans_name }}</option>
            @endforeach
        </select>
    </div>
<div class="text-center">
  <button class="btn btn-outline-primary w-25 mt-4 ">{{ __('site.Add') }}</button>
</div>
</form>
  @stop
