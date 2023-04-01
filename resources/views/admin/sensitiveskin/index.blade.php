@extends('admin.master')
@section('title','ALL skins types | Admin')
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
  <h1 class="h3 mb-4 text-gray-800">{{ __('site.ALL Article') }}</h1>

  @if (session('msg'))
      <div class="alert alert-{{ session('type') }}">{{ session('msg') }}</div>
  @endif


  <table class="table table-bordered  table-striped  table-hover">
  <tr>
    <th>{{ __('site.ID') }}</th>
    <th>{{ __('site.Name') }}</th>
    <th>{{ __('site.Category') }}</th>
    <th>{{ __('site.Actions') }}</th>
    </tr>
    @foreach ($sensitiveskin as $sensitiveskin)
    <tr>
        <td>{{ $sensitiveskin->id }}</td>
        <td>{{ $sensitiveskin->trans_name  }}</td>
        <td>{{ $sensitiveskin->category->trans_name }}</td>
        <td>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.sensitiveskin.edit', $sensitiveskin->id) }}"><i class="fas fa-edit"></i></a>
        <form class="d-inline" method="POST" action="{{ route('admin.sensitiveskin.destroy' , $sensitiveskin->id) }}">
        @csrf
        @method('delete')
        <button onclick="return confirm('Are You sure?!')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
        </form>
        </td>

      </tr>
    @endforeach

  </table>

  @stop
