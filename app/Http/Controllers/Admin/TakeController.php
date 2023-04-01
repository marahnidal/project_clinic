<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\TakeAppointment;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Gate;

class TakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('all_take');
        $TakeAppointments = TakeAppointment::with('User')->get();
        return view('admin.take.index',compact('TakeAppointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

    }

    public function destroy($id)
    {
        TakeAppointment::destroy($id);
        return redirect()->route('admin.takes.index')->with('msg','TakeAppointment deleted successfully')->with('type','danger');
    }

/**
     * trash the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        Gate::authorize('trash_take');
        $TakeAppointments= TakeAppointment::onlyTrashed()->get();
        return view('admin.take.trash',compact('TakeAppointments'));
    }



/**
     * restore the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        TakeAppointment::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.takes.trash')->with('msg','Take restored successfully')->with('type','warning');
    }



/**
     * forcdelete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function forcedelete($id)
    {
        $TakeAppointment=TakeAppointment::onlyTrashed()->find($id)->forcedelete();
        return redirect()->route('admin.takes.trash')->with('msg','Take deleted parmanintly successfully')->with('type','danger');
    }
}
