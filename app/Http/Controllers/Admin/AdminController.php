<?php

namespace App\Http\Controllers\Admin;

use App\Models\category;
use Illuminate\Http\Request;
use App\Models\ScoutPaymenth;
use App\Models\TakeAppointment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function index()
    {
        Gate::authorize('main');
        $c_count = category::count();
        $t_count = TakeAppointment::count();
        $u_count = Auth::user()->where('type','user')->count();
        $d_count = Auth::user()->where('type','doctor')->count();

        $m_earning = ScoutPaymenth::WhereMonth('created_at', date('m'))->WhereYear('created_at', date('Y'))->sum('total');
        $y_earning = ScoutPaymenth::WhereYear('created_at', date('Y'))->sum('total');
        return view('admin.index', compact('c_count','t_count','m_earning','y_earning','u_count','d_count'));
    }

}
