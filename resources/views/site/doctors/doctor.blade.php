@extends('site.master')
@section('content')
@section('title', ' الأطباء - ' . config('app.name'))
    <!-- Page Header Start -->
    <div style="background: rgb(238, 204, 241)"
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div  class="container py-5">
        <h1 class="text-center display-4 animated slideInDown mb-4" style="font-family: 'Cairo', sans-serif !important; ">فريق متخصص من أشهر  الاطباء في غزة</h1>
        <nav aria-label="breadcrumb animated slideInDown">
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
          <h1 class="display-6 mb-5" style="font-family: 'Cairo', sans-serif !important; ">إختار الطبيب وإحجز معه موعد</h1>
        </div>
        <div class="row g-4">
            @foreach ($doctors as $doctor )
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded">
                  <img class="img-fluid" src="{{ asset('uploads/doctor/'.$doctor->image) }}" alt="" />
                  <div class="text-center p-4">
                    <h5 style="font-family: 'Cairo', sans-serif !important; ">{{ $doctor->name_ar }}</h5>
                    <span></span>
                  </div>
                  <div class="team-text text-center bg-white p-4">
                    <h5  style="font-family: 'Cairo', sans-serif !important; ">{{ $doctor->name_ar }}</h5>
                    <p>  {!!  $doctor->content_ar !!}   </p>
                    <div class="d-flex justify-content-center">
                      <a href="{{ route('site.take') }}" class="btn btn-white px-3 d-none d-lg-block" style="font-family: 'Cairo', sans-serif !important; "> إحجز موعدك الآن</a>

                    </div>
                  </div>
                </div>
              </div>

            @endforeach





        </div>
      </div>
    </div>
    <!-- Team End -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if (session('msg'))
    Swal.fire({
        title: 'تم الإرسال',
        text: 'تم إرسال طلب الإستشارة بنجاح ',
        icon: 'success',
        confirmButtonText: 'ok'
      })@endif
      </script>
   @stop
{{ $doctors->links() }}
