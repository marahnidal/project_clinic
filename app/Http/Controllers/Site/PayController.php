<?php

namespace App\Http\Controllers\Site;

use App\Mail\TakeMail;
use Illuminate\Http\Request;
use App\Models\TakeAppointment;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PayController extends Controller
{
    public function pay()
    {

        return view('site.pay');
    }


}
