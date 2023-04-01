<?php

namespace App\Http\Controllers;


use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailsController extends Controller
{
    public function contact()
    {
        return view('site.contact');
    }



    public function contact_data( Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
        ],
        [
                'name.required'=>'الرجاء قم بإدخال الإسم',
                'email.required'=>'الرجاء قم بإدخال الإيميل',
                'message.required'=>'الرجاء قم بإدخال الرسالة',

        ]);

        Mail::to('BeautyClinic@gmail.com')->send(new ContactUsMail($request->except('_token')));
        return redirect()->route('site.contact')->with('msg','تم إرسال الرسالة بنجاح')->with('type','success');
    }



}
