@extends('admin.master')
@section('title','Add Category | Admin')
@section('content')
@include('admin.errors')
@section('styles')
<style>
    ul{
        column-count: 2;
    }
</style>
@stop
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">{{ __('site.Add New Role') }}</h1>
  <form method="POST" action="{{ route('admin.role.store') }}" >
    @csrf

    <div class="mb-3">
        <label>{{ __('site.Name') }}</label>
       <input type="text" class="form-control" placeholder="{{ __('site.Please Enter The Name') }}" name="name" value="{{ old('name') }}">
   </div>
   <label><input type="checkbox" id="check_all">Select All</label><br>

 <ul class="list-unstyled">
    @foreach ($abilities as $ability)
    <li><input type="checkbox" name="ability[]" value="{{ $ability->id }}">{{ $ability->name }}</li>
    @endforeach
 </ul>

<div class="text-center">
  <button class="btn btn-outline-primary w-25 mt-4 ">{{ __('site.Add') }}</button>
</div>
</form>
  @stop
@section('scripts')
<script>
    $('#check_all').on('change', function(){
    $('input[type=checkbox]').prop('checked',$(this).prop('checked'));
})
</script>
@stop
