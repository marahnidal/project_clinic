@extends('admin.master')
@section('title','ALL Products | Admin')
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
  <h1 class="h3 mb-4 text-gray-800">{{ __('site.ALL Users') }}</h1>

  @if (session('msg'))
      <div class="alert alert-{{ session('type') }}">{{ session('msg') }}</div>
  @endif


  <table class="table table-bordered  table-striped  table-hover">
  <tr>
    <th>{{ __('site.ID') }}</th>
    <th>{{ __('site.Name') }}</th>
    <th>{{ __('site.Email') }}</th>
    <th>{{ __('site.Type') }}</th>
    <th>{{ __('site.Image') }}</th>
    <th>{{ __('site.Actions') }}</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name  }}</td>
        <td>{{ $user->email  }}</td>
        <td>{{ $user->type  }}</td>
        <td><img width="80" src="{{ asset('uploads/doctor/'.$user->image) }}"></td>
        <td>
        <form class="d-inline" method="POST" action="{{ route('admin.users.destroy' , $user->id) }}">
        @csrf
        @method('delete')
        <button onclick="return confirm('Are You sure?!')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
        </form>
        </td>

      </tr>
    @endforeach

  </table>

  @stop
