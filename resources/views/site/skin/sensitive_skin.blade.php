
   @extends('site.master')
   @section('content')
   @section('title', ' البشرةالحساسة - ' . config('app.name'))
       <!-- Page Header Start -->
       <div style=" background: rgba(252, 248, 255, 0.952);padding:30px;border:2px solid rgb(234, 184, 249);margin:30px auto" class="container py-5">
       <h1  class="text-center display-4 animated slideInDown mb-4" style="font-family: 'Cairo', sans-serif !important; "> البشرة الحساسة</h1>
       @foreach ($sensitiveskins as $sensitiveskin)

       <div
       class="container-fluid page-header py-5 mb-5 wow fadeIn"
       data-wow-delay="0.1s" id="{{ $sensitiveskin->category_id}}">
           <div id="abody">
               <p>{!!  $sensitiveskin->content_ar !!}</p>

       </div>

   </div>
       @endforeach

   </div>


   @stop
