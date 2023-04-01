@extends('admin.master')
@section('title','Edit Product | Admin')
@section('content')
@include('admin.errors')
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">{{ __('site.Edit Product') }}</h1>
  <form method="POST" action="{{ route('admin.doctors.update', $doctor->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
 <div class="row">
<div class="col-md-6">
    <div class="mb-3">
        <label>{{ __('site.English Name') }}</label>
       <input type="text" class="form-control" placeholder="{{ __('site.Please Enter The Name in English') }}" name="en_name" value="{{ $doctor->name_en }}">
   </div>
</div>

   <div class="col-md-6">
    <div class="mb-3">
        <label>{{ __('site.Arabic Name') }}</label>
        <input type="text" class="form-control" placeholder="{{ __('site.Please Enter The Name in Arabic') }}" name="ar_name" value="{{ $doctor->name_ar  }}">
    </div>
  </div>
   </div>


   <div class="mb-3">
    <label>{{ __('site.Image') }}</label>
    <input type="file" class="form-control"  name="image"  >
    <img width="80" src="{{ asset('uploads/doctor/'.$doctor->image) }}">
</div>




    <div class="mb-3">
        <label>{{ __('site.Category') }}</label>
        <select class="form-control" name="category_id" >
            <option value="">{{ __('site.--Select Category--') }}</option>
            @foreach ($categories as $item)
            <option {{ $doctor->category_id == $item->id ?'selected' :'' }}
             value="{{ $item->id }}">{{ $item->trans_name }}</option>
            @endforeach
        </select>
    </div>
<div class="text-center">
  <button class="btn btn-outline-primary w-25 mt-4 ">{{ __('site.Updated') }}</button>
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
