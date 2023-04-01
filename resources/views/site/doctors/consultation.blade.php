@extends('site.master')
@section('content')
@section('title', ' الإستشارات - ' . config('app.name'))

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center mx-auto" style="max-width: 500px">
            <h1 class="display-6 mb-5" style="font-family: 'Cairo', sans-serif !important; ">    إستشر طبيبك   </h1>
          </div>
          <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="team-item rounded">
                <img class="img-fluid" src="{{ asset('siteassets/img/team-11.jpg') }}" alt="" />
                <div class="text-center p-4">
                  <h5 style="font-family: 'Cairo', sans-serif !important; ">الدكتور مجدي نعيم</h5>
                  <span>للامراض الجلدية والعناية بالبشرة والليزر </span>
                </div>
                <div class="team-text text-center bg-white p-4">
                  <h5  style="font-family: 'Cairo', sans-serif !important; "> الدكتور مجدي نعيم</h5>
                  <p>للامراض الجلدية والعناية بالبشرة والليزر </p>
                  <div class="d-flex justify-content-center">
                    <a href="{{ route('site.dr') }}" class="btn btn-white px-3 d-none d-lg-block" style="font-family: 'Cairo', sans-serif !important; "> اطلب الاستشارة الآن</a>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item rounded">
                <img class="img-fluid" src="{{ asset('siteassets/img/د اسامة.jfif')}}" alt="" />
                <div class="text-center p-4">
                  <h5 style="font-family: 'Cairo', sans-serif !important; ">الدكتور أسامة الترك</h5>
                  <span>متخصصة في البوتكس والفيلر وشد الوجه</span>
                </div>
                <div class="team-text text-center bg-white p-4">
                  <h5  style="font-family: 'Cairo', sans-serif !important; ">الدكتور أسامة الترك</h5>
                  <p>متخصصة في البوتكس والفيلر وشد الوجه</p>
                  <div class="d-flex justify-content-center">
                    <a href="{{ route('site.dr2') }}" class="btn btn-white px-3 d-none d-lg-block" style="font-family: 'Cairo', sans-serif !important; "> اطلب الاستشارة الآن</a>

                  </div>
                </div>
              </div>
            </div>


            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="team-item rounded">
                <img class="img-fluid" src="{{ asset('siteassets/img/زياد ابو دقة.jpg') }}" alt="" />
                <div class="text-center p-4">
                  <h5 style="font-family: 'Cairo', sans-serif !important; ">الدكتور زياد أبو دقة</h5>
                  <span>للامراض الجلدية والعناية بالبشرة والليزر </span>
                </div>
                <div class="team-text text-center bg-white p-4">
                  <h5  style="font-family: 'Cairo', sans-serif !important; "> الدكتور زياد أبو دقة  </h5>
                  <p>للامراض الجلدية والعناية بالبشرة والليزر </p>
                  <div class="d-flex justify-content-center">
                    <a href="{{ route('site.dr5') }}" class="btn btn-white px-3 d-none d-lg-block" style="font-family: 'Cairo', sans-serif !important; "> اطلب الاستشارة الآن</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="team-item rounded">
                <img class="img-fluid" src="{{ asset('siteassets/img/team-40.jpg') }}" alt="" />
                <div class="text-center p-4">
                  <h5 style="font-family: 'Cairo', sans-serif !important; ">الدكتور محمدالنادي  </h5>
                  <span>للامراض الجلدية والعناية بالبشرة والليزر </span>
                </div>
                <div class="team-text text-center bg-white p-4">
                  <h5  style="font-family: 'Cairo', sans-serif !important; "> الدكتور محمد النادي</h5>
                  <p>للامراض الجلدية والعناية بالبشرة والليزر </p>
                  <div class="d-flex justify-content-center">
                    <a href="{{ route('site.dr4') }}" class="btn btn-white px-3 d-none d-lg-block" style="font-family: 'Cairo', sans-serif !important; "> اطلب الاستشارة الآن</a>
                  </div>
                </div>
              </div>
            </div>



            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded">
                  <img class="img-fluid" src="{{ asset('siteassets/img/team-3.png') }}" alt="" />
                  <div class="text-center p-4">
                    <h5  style="font-family: 'Cairo', sans-serif !important; ">  الدكتورة هبة الهسي</h5>
                    <span> أخصائية الأمراض الجلدية والتجميل والليزر </span>
                  </div>
                  <div class="team-text text-center bg-white p-4">
                    <h5 style="font-family: 'Cairo', sans-serif !important;">  الدكتورة هبة الهسي</h5>
                    <p> أخصائية الأمراض الجلدية والتجميل والليزر </p>
                    <div class="d-flex justify-content-center">
                      <a href="{{ route('site.dr3') }}" class="btn btn-white px-3 d-none d-lg-block" style="font-family: 'Cairo', sans-serif !important; "> اطلب الاستشارة الآن</a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <!-- Team End -->
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

