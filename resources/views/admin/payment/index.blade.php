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
  <h1 class="h3 mb-4 text-gray-800">{{ __('site.ALL Payments') }}</h1>

  @if (session('msg'))
      <div class="alert alert-{{ session('type') }}">{{ session('msg') }}</div>
  @endif


  <table class="table table-bordered  table-striped  table-hover">
  <tr>
    <th>{{ __('site.ID') }}</th>
    <th>{{ __('site.Name') }}</th>
    <th>{{ __('site.Price') }}</th>

    </tr>
    @foreach ($ScoutPaymenths as $ScoutPaymenth)
    <tr>
        <td>{{ $ScoutPaymenth->id }}</td>
        <td>{{ $ScoutPaymenth->name  }}</td>
        <td>{{ $ScoutPaymenth->$m_earning  }}</td>


      </tr>
    @endforeach

  </table>

  @stop
