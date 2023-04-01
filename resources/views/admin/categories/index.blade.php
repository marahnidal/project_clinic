@extends('admin.master')
@section('title','ALL Categories | Admin')
@section('content')
@section('styles')
<style>
    .table th ,
    .table td{
        vertical-align: middle;
    }
</style>
@stop
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">{{ __('site.ALL Categories') }}</h1>

  @if (session('msg'))
      <div class="alert alert-{{ session('type') }}">{{ session('msg') }}</div>
  @endif


  <table class="table table-bordered  table-striped  table-hover">
  <tr>
    <th>{{ __('site.ID') }}</th>
    <th>{{ __('site.Name') }}</th>
    <th>{{ __('site.Parent') }}</th>
    <th>{{ __('site.Actions') }}</th>
    </tr>
    @foreach ($categories as $category)
    <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->trans_name  }}</td>
        <td>{{ $category->parent->trans_name }}</td>
        <td>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.categories.edit' , $category->id) }}"><i class="fas fa-edit"></i></a>
        <form class="d-inline" method="POST" action="{{ route('admin.categories.destroy' , $category->id) }}">
        @csrf
        @method('delete')
        <button onclick="return confirm('Are You sure?!')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
        </form>
        </td>

      </tr>
    @endforeach

  </table>
  {{ $categories->links() }}
  @stop
