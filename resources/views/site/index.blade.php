@extends('site.master')
@section('content')
@section('title', 'الصفحة الرئيسية - ' . config('app.name'))
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
      <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="w-100" src="{{ asset('siteassets/img/رئيسية2.jfif') }}" alt="Image" style="opacity:0.7" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <h1 class="display-3 text-dark mb-4 animated slideInDown"  style="font-family: 'Cairo', sans-serif !important; ">
                      تمتعي ببشرة أكثر جمالاً
                    </h1>
                    <p class="fs-4 text-body mb-5" >يوفر الموقع لك أفضل الأطباء والمنتجات  </p>

                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="carousel-item">
            <img  class="w-100 " src="{{ asset('siteassets/img/الرئيسية1.jfif') }}" alt="Image" style="opacity:0.7 "/>
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <h1 class="display-3 text-dark mb-4 animated slideInDown"  style="font-family: 'Cairo', sans-serif !important; ">
                        تمتعي ببشرة أكثر جمالاً
                      </h1>
                      <p class="fs-4 text-body mb-5" >يوفر الموقع لك أفضل الأطباء والمنتجات  </p>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div
              class="position-relative overflow-hidden rounded ps-5 pt-5 h-100"
              style="min-height: 400px"
            >
              <img
                class="position-absolute w-100 h-100"
                src="{{ asset('siteassets/img/about.jpg') }}"
                alt=""
                style="object-fit: cover"
              />
              <div
                class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3"
                style="width: 200px; height: 200px"
              >
                <div
                  class="d-flex flex-column justify-content-center text-center rounded h-100 p-3" style="background-color:#6f42c1 !important ;"
                >
                  <h1 class="text-white mb-0"  style="font-family: 'Cairo', sans-serif !important; ">5</h1>
                  <h2 class="text-white"  style="font-family: 'Cairo', sans-serif !important; ">سنوات</h2>
                  <h5 class="text-white mb-0"  style="font-family: 'Cairo', sans-serif !important; ">من الخبرة</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="h-100">
              <h1 class="display-6 mb-5" style="font-family: 'Cairo', sans-serif !important; ">
                أطباءنا متواجدون لتوفير حماية أكبر لبشرتك
              </h1>
              <p class="fs-5 mb-4" style="color:#6f42c1 !important ;">
                من أجل  بشرة صافية وجميلة عليك بشغلتين الصبر والالتزام بالاضافة الى التالي
              </p>
              <div class="row g-4 mb-4">
                <div class="col-sm-6">
                  <div class="d-flex align-items-center">
                    <img
                      class="flex-shrink-0 me-3"
                      src="{{ asset('siteassets/img/icon/icon-04-primary.png') }}"
                      alt=""
                    />
                    <h5 class="mb-0"  style="font-family: 'Cairo', sans-serif !important; ">خطة مرنة وفعالة</h5>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="d-flex align-items-center">
                    <img
                      class="flex-shrink-0 me-3"
                      src="{{ asset('siteassets/img/icon/icon-03-primary.png') }}"
                      alt=""
                    />
                    <h5 class="mb-0"  style="font-family: 'Cairo', sans-serif !important; ">الالتزام بالصبر والمواعيد</h5>
                  </div>
                </div>
              </div>
              <p class="mb-4">
                الأن الوقت المناسب من أجل التخلص من حب الشباب بإمكانك التواصل مع اكتر الأطباء خبرة  في غزة من أجل الحصول على بشرة أكثر نضارة وإشراق
              </p>
              <div class="border-top mt-4 pt-4" >
                <div class="d-flex align-items-center" >

                  <h5 class="mb-0"  style="font-family: 'Cairo', sans-serif !important; " >تواصل معنا :   0598098550</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-fluid overflow-hidden my-5 px-lg-0">
      <div class="container facts px-lg-0">
        <div class="row g-0 mx-lg-0">
          <div class="col-lg-6 facts-text wow fadeIn" data-wow-delay="0.1s">
            <div class="h-100 px-4 ps-lg-0">
              <h1 class="text-white mb-4"  style="font-family: 'Cairo', sans-serif !important; ">منصتنا متاحة لجميع الأعمار </h1>
              <p class="text-light mb-5">
                اذا كنت تعاني من بشرتك كل ما عليك فعله هو التواصل معنا

              </p>
            </div>
          </div>
          <div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s">
            <div class="h-100 px-4 pe-lg-0">
              <div class="row g-5">
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1250</h1>
                  <p class="fs-5 text-primary">عملاء سعداء</p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1000</h1>
                  <p class="fs-5 text-primary">  الذين سنهم تجاوز ال 15 عام </p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">300</h1>
                  <p class="fs-5 text-primary">من الذكور</p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">50</h1>
                  <p class="fs-5 text-primary">الحالات الجاري علاجها</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Facts End -->

    <!-- Features Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-6 mb-5"  style="font-family: 'Cairo', sans-serif !important; ">بتعرف ليش الناس بتحب تتعامل معنا؟</h1>
            <p class="mb-4">
              بعض الخصائص الي بتميزنا وبتخليك تعرف ليش الناس اختارت بيوتي كلينيك عن غيرها من المنصات تعال نشوف شو الي بميزنا عن غيرنا
            </p>
            <div class="row g-3">
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="{{ asset('siteassets/img/icon/icon-06-primary.png') }}"
                      alt=""
                    />
                    <h5 class="mb-0"  style="font-family: 'Cairo', sans-serif !important; ">سهولة التواصل مع الأطباء </h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="{{ asset('siteassets/img/icon/icon-03-primary.png') }}"
                      alt=""
                    />
                    <h5 class="mb-0"  style="font-family: 'Cairo', sans-serif !important; ">تكاليف أقل وعروضات أكبر</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="{{ asset('siteassets/img/icon/icon-04-primary.png') }}"
                      alt=""
                    />
                    <h5 class="mb-0"  style="font-family: 'Cairo', sans-serif !important; ">خطتنا آمنة وفعالة</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="{{ asset('siteassets/img/icon/icon-07-primary.png') }}"
                      alt=""
                    />
                    <h5 class="mb-0"  style="font-family: 'Cairo', sans-serif !important; ">المتابعة الفورية </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div
              class="position-relative rounded overflow-hidden h-100"
              style="min-height: 400px"
            >
              <img
                class="position-absolute w-100 h-100"
                src="{{ asset('siteassets/img/feature.jpg') }}"
                alt=""
                style="object-fit: cover"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Features End -->



    <!-- Appointment Start -->
    <div
      class="container-fluid appointment my-5 py-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
            <h1 class="display-6 text-white mb-5"  style="font-family: 'Cairo', sans-serif !important; ">
              ادا انت بحاجة لتفاصيل أكتر فيك تتواصل معنا
            </h1>
            <p class="text-white mb-5">
              بنقدملك خدمة احترافية وسهولة كبيرة في التواصل مع الأطباء لمتابعة بشرتك الصحية
              وبنقدملك أكبر المزايا الإلكترونية الي حتساعدك وحتريحك جدا
              لأنو راحتك بتهمنا
              ما عليك الا تبعت رسالة على الايميل الخاص فينا أو تتواصل عن طريق الواتساب حنرد عليك بأسرع وقت
            </p>
            <div class="bg-white rounded p-3">
              <div class="d-flex align-items-center rounded p-3" style="background-color:#6f42c1 !important ;">

                <a class="text-white mb-0" href="https://api.whatsapp.com/send?phone=+972 59-407-9549"  style="font-family: 'Cairo', sans-serif !important; ">الواتس اب : + 012 345 6789 </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            @auth
            <div class="bg-white rounded p-5">
                <form method="POST" action="{{ route('site.index_data') }}">
                  @csrf


                  <div class="row g-3">
                    <div class="col-sm-6">
                      <div class="form-floating">
                        <input
                          type="text"
                          class="form-control  @error('name')
                          is-invalid
                          @enderror"
                          id="gname" name="name"
                          placeholder="Gurdian Name"
                        />@error('name')
                        <small class="invalid-feedback">{{ $message }}</small>
                        @enderror
                        <label for="gname">الإسم</label>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-floating">
                        <input
                          type="email" name="email"
                          class="form-control  @error('email')
                          is-invalid
                          @enderror"
                          id="gmail"
                          placeholder="Gurdian Email"
                        />@error('email')
                        <small class="invalid-feedback">{{ $message }}</small>
                        @enderror
                        <label for="gmail">الإيميل</label>
                      </div>
                    </div>


                    <div class="col-12">
                      <div class="form-floating">
                        <textarea
                          class="form-control @error('message')
                          is-invalid
                          @enderror"
                          placeholder="Leave a message here"
                          id="message" name="message"
                          style="height: 80px"
                        ></textarea>@error('message')
                        <small class="invalid-feedback">{{ $message }}</small>
                        @enderror
                        <label for="message">الموضوع</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary py-3 px-5" type="submit">
                        أرسل
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            @endauth
           @guest
           <h3 style="font-family: Arial, Helvetica, sans-serif; color:rgb(1, 9, 29) ;background: rgb(255, 255, 255)" class="text-center mt-5">الرجاء قم بتسجيل الدخول من أجل التواصل معنا <a href="{{ route('login') }}">تسجيل الدخول</a></h3>
           @endguest
          </div>
        </div>
      </div>
    </div>
    <!-- Appointment End -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if (session('msg'))
    Swal.fire({
        title: 'تم الإرسال',
        text: 'تم إرسال الرسالة بنجاح ',
        icon: 'success',
        confirmButtonText: 'ok'
      })@endif
      </script>

@stop
