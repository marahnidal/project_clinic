@extends('admin.master')
@section('title','Add Type | Admin')
@section('content')
@include('admin.errors')
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">{{ __('site.Add New Article')}}</h1>
  <form method="POST" action="{{ route('admin.mixedskin.store') }}"  >
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


   <div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label> {{ __('site.English Content') }}</label>
            <textarea name="en_content"  class="form-control customarea">{{ old('en_content') }}</textarea>
        </div>
    </div>

    <div class="col-md-6">
        <div class="mb-3">
            <label>{{ __('site.Arabic Content') }}</label>
            <textarea name="ar_content"  class="form-control customarea">{{ old('ar_content') }}</textarea>
        </div>
    </div>
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
<div class=" mb-2 text-center">
  <button class="btn btn-outline-primary w-25 mt-4 ">{{ __('site.Add') }}</button>
</div>
</form>
  @stop
  @section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.1.2/tinymce.min.js"></script>

  <script>
      tinymce.init({
          selector: '.customarea',
          plugins: ['code']
      })
  </script>

  @stop
