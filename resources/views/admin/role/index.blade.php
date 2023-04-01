@extends('admin.master')
@section('title','ALL Roles | Admin')
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
  <div class="d-flex justify-content-between align-items-center  mb-4">
    <h1 class="h3 text-gray-800">{{ __('site.ALL Roles') }}</h1>
  <a class="btn btn-success w-25" href="{{ route('admin.role.create') }}">{{ __('site.Add New ') }}</a>
  </div>
  @if (session('msg'))
      <div class="alert alert-{{ session('type') }}">{{ session('msg') }}</div>
  @endif


  <table class="table table-bordered  table-striped  table-hover">
  <tr>
    <th>{{ __('site.ID') }}</th>
    <th>{{ __('site.Name') }}</th>
    <th>{{ __('site.Actions') }}</th>
    </tr>
    @foreach ($roles as $role)
    <tr>
        <td>{{ $role->id }}</td>
        <td>{{ $role->name  }}</td>
        <td>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.role.edit' , $role->id) }}"><i class="fas fa-edit"></i></a>

        </td>

      </tr>
    @endforeach

  </table>

  @stop
