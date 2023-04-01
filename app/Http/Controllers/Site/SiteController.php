<?php

namespace App\Http\Controllers\Site;


use App\Models\skin;
use App\Models\doctor;
use App\Models\product;
use App\Mail\DoctorMail;
use App\Models\oilyskin;
use App\Mail\Doctor1Mail;
use App\Mail\IndexUsMail;
use App\Models\mixedskin;
use App\Models\oily_skin;
use App\Models\normalskin;
use Illuminate\Http\Request;
use App\Models\sensitiveskin;
use App\Models\TakeAppointment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public $data;
   public function index()
   {
        return view('site.index');

   }
   public function index_data(Request $request)
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
    Mail::to('BeautyClinic@gmail.com')->send(new IndexUsMail($request->except('_token')));
    return redirect()->route('site.index')->with('msg','تم إرسال الرسالة بنجاح')->with('type','success');
   }




   public function product()
   {
        $p_products = product::orderBy('id')->paginate(7);
        return view('site.product',compact('p_products'));
   }

   public function normal_skin()
   {
    $normalskins = normalskin::orderBy('id')->get();
        return view('site.skin.normal_skin',compact('normalskins'));
   }

   public function oily_skin()
   {
    $oilyskins = oilyskin::orderBy('id')->get();
        return view('site.skin.oily_skin',compact('oilyskins'));
   }

   public function sensitive_skin()
   {
    $sensitiveskins = sensitiveskin::orderBy('id')->get();
        return view('site.skin.sensitive_skin',compact('sensitiveskins'));
   }

   public function mixed_skin()
   {
    $mixedskins = mixedskin::orderBy('id')->get();
        return view('site.skin.mixed_skin',compact('mixedskins'));
   }

   public function skin()
   {
    $skins = skin::orderBy('id')->paginate(7);

        return view('site.skin.skin',compact('skins'));
   }

   public function doctor()
   {
    $doctors = doctor::orderBy('id')->paginate(5);
        return view('site.doctors.doctor',compact('doctors'));
   }

   public function consultation()
   {
        return view('site.doctors.consultation');
   }

   public function doctor_data(Request $request)
   {

    $request->validate([
        'name'=>'required',
        'email'=>'required',
        'mobile'=>'required |numeric|digits:10',
        'image'=>'required',
        'message'=>'required',
    ],
    [
            'name.required'=>'الرجاء قم بإدخال الإسم',
            'email.required'=>'الرجاء قم بإدخال الإيميل',
            'image.required'=>'الرجاء قم بإدخال الصورة',
            'mobile.required'=>'الرجاء قم بإدخال رقم الموبايل',
            'message.required'=>'الرجاء قم بإدخال الرسالة',


    ]);

         $img_name = rand().time().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads/doctors'),$img_name);

    Mail::to('doctor@gmail.com')->send(new Doctor1Mail($request->except('_token'),$img_name));
    return redirect()->route('site.consultation')->with('msg','تم إرسال الرسالة بنجاح')->with('type','success');
   }
   public function dr()
   {
        return view('site.doctors.dr');
   }
   public function dr2()
   {
        return view('site.doctors.dr2');
   }
   public function dr3()
   {
        return view('site.doctors.dr3');
   }
   public function dr4()
   {
        return view('site.doctors.dr4');
   }
   public function dr5()
   {
        return view('site.doctors.dr5');
   }


   public function take()
   {

       return view('site.take');
   }



   public function take_data (Request $request )
   {

    $request->validate([
        'name'=>'required',
        'email'=>'required',
        'date'=>'required |date|after_or_equal:today',
        'tel'=>'required|numeric|digits:10',
        'time'=>'required',
    ],
    [
            'name.required'=>'الرجاء قم بإدخال الإسم',
            'email.required'=>'الرجاء قم بإدخال الإيميل',
            'date.required'=>'الرجاء قم بإدخال التاريخ',
            'tel.required'=>'الرجاء قم بإدخال رقم الموبايل',
            'time.required'=>'الرجاء قم بإدخال الوقت',

    ]);
    TakeAppointment::Create([
        'name'=> $request->name,
        'email'=> $request->email,
        'date'=> $request->date,
        'tel'=> $request->tel,
        'time'=> $request->time,
        'user_id' => auth()->id()
    ]);

    Mail::to('Doctor@gmail.com')->send(new DoctorMail($request->except('_token')));
    return redirect()->route('site.pay')->with('msg','تم إرسال الرسالة بنجاح' )->with('type','success') ;

   }

   public function privacy()
   {
    return view('site.privacy');
   }

}
