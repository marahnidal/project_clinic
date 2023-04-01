@extends('admin.master')
@section('title',' TrashCategory | Admin')
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
  <h1 class="h3 mb-4 text-gray-800">{{ __('site.Trash Category') }}</h1>

  @if (session('msg'))
      <div class="alert alert-{{ session('type') }}">{{ session('msg') }}</div>
  @endif


  <table class="table table-bordered  table-striped  table-hover">
  <tr>
    <th>{{ __('site.ID') }}</th>
    <th>{{ __('site.Name') }}</th>
    <th>{{ __('site.Actions') }}</th>
    </tr>
    @foreach ($categories as $category)
    <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->trans_name  }}</td>
        <td>
        <a class="btn btn-sm btn-primary" href="{{  route('admin.categories.restore', $category->id)  }}"><i class="fas fa-undo"></i></a>
        <a  onclick="return confirm('Are You sure?!')"class="btn btn-sm btn-danger" href="{{ route('admin.categories.forcedelete', $category->id) }}"><i class="fas fa-times"></i></a>

        </td>

      </tr>
    @endforeach

  </table>
  @stop

