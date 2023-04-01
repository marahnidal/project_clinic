@extends('admin.master')
@section('title','Add Type | Admin')
@section('content')
@include('admin.errors')
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">{{ __('site.Add New Type')}}</h1>
  <form method="POST" action="{{ route('admin.users.store') }}" enctype="multipart/form-data" >
    @csrf

    <div class="mb-3">
        <label>{{ __('site. Name') }}</label>
       <input type="text" class="form-control" placeholder="{{ __('site.Please Enter The Name in English') }}" name="name" value="{{ old('name') }}">
   </div>




        <div class="mb-3">
            <label> {{ __('site.Type') }}</label>
            <input type="text" class="form-control"  name="type" >
        </div>



<div class="mb-3">
    <label>{{ __('site.Email') }}</label>
    <input type="email" class="form-control"  name="email" >
</div>





<div class="mb-3">
    <label>{{ __('site.Image') }}</label>
    <input type="file" class="form-control"  name="image" >
</div>





<div class=" mb-2 text-center">
  <button class="btn btn-outline-primary w-25 mt-4 ">{{ __('site.Add') }}</button>
</div>
</form>
  @stop



