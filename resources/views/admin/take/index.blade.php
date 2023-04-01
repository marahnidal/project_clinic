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
  <h1 class="h3 mb-4 text-gray-800">{{ __('site.ALL Takes') }}</h1>

  @if (session('msg'))
      <div class="alert alert-{{ session('type') }}">{{ session('msg') }}</div>
  @endif


  <table class="table table-bordered  table-striped  table-hover">
  <tr>
    <th>{{ __('site.ID') }}</th>
    <th>{{ __('site.Name') }}</th>
    <th>{{ __('site.Email') }}</th>
    <th>{{ __('site.Date') }}</th>
    <th>{{ __('site.Time') }}</th>
    <th>{{ __('site.Tel') }}</th>
    <th>{{ __('site.Actions') }}</th>
    </tr>
    @foreach ($TakeAppointments as $TakeAppointment)
    <tr>
        <td>{{ $TakeAppointment->id }}</td>
        <td>{{ $TakeAppointment->name  }}</td>
        <td>{{ $TakeAppointment->email  }}</td>
        <td>{{ $TakeAppointment->date  }}</td>
        <td>{{ $TakeAppointment->time  }}</td>
        <td>{{ $TakeAppointment->tel  }}</td>
        <td>
        <form class="d-inline" method="POST" action="{{ route('admin.takes.destroy' , $TakeAppointment->id) }}">
        @csrf
        @method('delete')
        <button onclick="return confirm('Are You sure?!')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
        </form>
        </td>

      </tr>
    @endforeach

  </table>

  @stop
