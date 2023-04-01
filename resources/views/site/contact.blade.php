
<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="utf-8" />
    <title>  تواصل معنا - بيوتي كلينك</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{ asset('siteassets/img/favicon.ico') }}" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('siteassets/lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('siteassets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('siteassets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('siteassets/css/style.css') }}" rel="stylesheet" />

    <style>
      .contact .info {
  width: 100%;
  background: #fff;
}

.contact .info i {
  font-size: 20px;
  color: #6f42c1;
  float: left;
  width: 44px;
  height: 44px;
  background: #d6e9fa;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
}

.contact .info h4 {
  padding: 0 0 0 60px;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #6f42c1;
}

.contact .info p {
  padding: 0 0 0 60px;
  margin-bottom: 0;
  font-size: 14px;
  color: #4b7dab;
}

.contact .info .email,
.contact .info .phone {
  margin-top: 40px;
}

.contact .info .email:hover i,
.contact .info .address:hover i,
.contact .info .phone:hover i {
  background: #c850c0;
  color: #fff;
}

.contact .php-email-form {
  width: 100%;
  background: #fff;
}

.contact .php-email-form .form-group {
  padding-bottom: 8px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br+br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form input {
  height: 44px;
}

.contact .php-email-form textarea {
  padding: 10px 12px;
}

.contact .php-email-form button[type=submit] {
  background: #6f42c1;
  border: 0;
  padding: 10px 35px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}

.contact .php-email-form button[type=submit]:hover {
  background: #c850c0;
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

    </style>
  </head>

  <body dir="rtl" >
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->
<!-- Navbar Start -->
<nav
class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5"
>
<a href="index.php" class="navbar-brand d-flex align-items-center">
  <h3 class="m-0"   style="font-family: 'Cairo', sans-serif !important; " >
    <img
      class="img-fluid me-6"
      src="{{ asset('siteassets/img/icon/icon-02-primary.png') }}"
      alt=""
    />بيوتي كلينيك
  </h3>
</a>
<button
  type="button"
  class="navbar-toggler"
  data-bs-toggle="collapse"
  data-bs-target="#navbarCollapse"
>
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
  <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
    <a href="{{ route('site.index') }}" class="nav-item nav-link
    {{ request()->routeIs('site.index') ? 'active' :'' }} ">الصفحة الرئيسية</a>
    <a href="{{ route('site.doctor') }}" class="nav-item nav-link
    {{ request()->routeIs('site.doctor') ? 'active' :'' }}">الأطباء</a>
    <a href="{{ route('site.consultation') }}" class="nav-item nav-link
    {{ request()->routeIs('site.consultation') ? 'active' :'' }} ">إستشارات</a>
    <a href="{{ route('site.product') }}" class="nav-item nav-link
    {{ request()->routeIs('site.product') ? 'active' :'' }}">منتجات</a>
    <div class="nav-item dropdown">
      <a href="#" class="nav-link" data-bs-toggle="dropdown">توصيات البشرة</a>
      <div class="dropdown-menu bg-light border-0 m-0">
        <a href="{{ route('site.normal_skin') }}" class="dropdown-item
        {{ request()->routeIs('site.normal_skin') ? 'active' :'' }}"> البشرة العادية</a>
        <a href="{{ route('site.oily_skin') }}" class="dropdown-item
        {{ request()->routeIs('site.oily_skin') ? 'active' :'' }}">البشرة الدهنية</a>
        <a href="{{ route('site.sensitive_skin') }}" class="dropdown-item
        {{ request()->routeIs('site.sensitive_skin') ? 'active' :'' }}"> البشرة الحساسة</a>
        <a href="{{ route('site.mixed_skin') }}" class="dropdown-item
        {{ request()->routeIs('site.mixed_skin') ? 'active' :'' }}">البشرة المختلطة</a>
      </div>
    </div>

    <a href="{{ route('site.contact') }}" class="nav-item nav-link">تواصل الان</a>
  </div>
</div>
<a href="{{ route('login') }}" class="btn btn-primary px-6 d-none d-lg-block" style="font-family: 'Cairo', sans-serif !important; " >تسجيل دخول </a>
</nav>
<!-- Navbar End -->







   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">
      <div class="container mt-5">

        <div class="section-title mt-5">
          <h2 style="font-family: 'Cairo', sans-serif !important; " >تواصل معنا</h2>
          <p>بامكانك التواصل معنا فور حدوث اي خلل وسنرد عليك ابسرع وقت ممكن ولا تتردد بطلب اي استفسار لأن رايك يهمنا.</p>
        </div>
      </div>
      @guest
      <h3 style="font-family: Arial, Helvetica, sans-serif; color:rgb(1, 9, 29) ;background: rgb(255, 255, 255)" class="text-center mt-5">الرجاء قم بتسجيل الدخول من أجل التواصل معنا <a href="{{ route('login') }}">تسجيل الدخول</a></h3>
      @endguest
      <div class="container"  dir="ltr">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
              <a href="https://www.instagram.com/rewaa_m_red/" target="_blank"><i class="bi bi-instagram"></i></a>
                <h4 style="font-family: 'Cairo', sans-serif !important; " >انستقرام</h4>
                <p>Beauty.Clinic</p>
              </div>

              <div class="email">
              <a href="mailto:marahnidal01@gmail.com" target="_blank"><i class="bi bi-envelope"></i></a>
                <h4 style="font-family: 'Cairo', sans-serif !important; " >الإيميل</h4>
                <p>Beautyclinic@gmail.com</p>
              </div>

              <div class="phone">
              <a class="text-white mb-0" href="https://api.whatsapp.com/send?phone=+972 59-809-8550" target="_blank"><i class="bi bi-phone"></i>  </a>
                <h4 style="font-family: 'Cairo', sans-serif !important; " >الواتساب</h4>
                <p>+972 59-809-8550</p>
              </div>

            </div>

          </div>


         @auth
         <div class="col-lg-8 mt-5 mt-lg-0">

            <form method="POST" action="{{ route('site.contact_data') }}" class="php-email-form">
                @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control @error('name')
                  is-invalid
                  @enderror" id="name" placeholder="الاسم "  value="{{ old('name') }}">
                  @error('name')
                  <small class="invalid-feedback">{{ $message }}</small>

                  @enderror
                </div>

                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control @error('email')
                  is-invalid
                  @enderror" name="email" id="email" placeholder="الإيميل" value="{{ old('email') }}" >
                  @error('email')
                  <small class="invalid-feedback">{{ $message }}</small>

                  @enderror
                </div>
              </div>

              <div class="form-group mt-3">
                <textarea class="form-control  @error('message')
                is-invalid
                @enderror" name="message" rows="5" placeholder="الرسالة" >{{ old('message') }}</textarea>
                @error('message')
                <small class="invalid-feedback">{{ $message }}</small>

                @enderror
              </div>
              <div class="my-3">

                <p class="success"> </p>
                <p class="failed"></p>


              <div class="text-center"><button type="submit" name="send" style="font-family: 'Cairo', sans-serif !important; " >إرسال الرسالة</button></div>
            </form>

          </div>
         @endauth


        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- Footer Start -->
    <div
      class="container-fluid footer mt-5 pt-5 wow fadeIn " style="background-color:#000 !important ;"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-3">
          <div class="col-lg-3 col-md-6">
            <h1 class="text-white mb-4"  style="font-family: 'Cairo', sans-serif !important; ">
             بيوتي كلينيك
            </h1>
            <p>
              يمكنك التواصل معنا  عبر السوشيال ميديا ومتابعة اخبارنا
            </p>
            <div class="d-flex pt-2">
                <a class="btn btn-square me-1" href="https://twitter.com/facesbeautyme"
                ><i class="fab fa-twitter"></i
              ></a>
                <a class="btn btn-square me-1" href="https://www.facebook.com/profile.php?id=100086365425095&sk=about"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-square me-0" href="https://www.instagram.com/rewaa_m_red/"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4"> أرقام الدعم الفني</h5>
            <div><i class="fa fa-phone-alt me-3"></i><a href="tel:0598098550">0598098550</a></div>
            <div><i class="fa fa-phone-alt me-3"></i><a href="tel:0567310820">0567310820</a></div>
            <div><i class="fa fa-phone-alt me-3"></i><a href="tel:0598954452">0598954452</a></div>

          </div>
          <div class="col-lg-3 col-md-6 ">
            <h5 class="text-light mb-4">روابط سريعة</h5>
            <a class=" btn btn-link" href="{{ route('site.index') }}">الصفحة الرئيسية</a>
            <a class=" btn btn-link" href="{{ route('site.product') }}">المنتجات</a>
            <a class="btn btn-link" href="{{ route('site.doctor') }}">الأطباء</a>
            <a class="btn btn-link" href="{{ route('site.consultation') }}">الإستشارات</a>
            <a class="btn btn-link" href="{{ route('site.privacy') }}">سياسة الخصوصية</a>
            <a class="btn btn-link" href="{{ route('site.contact') }}">تواصل معنا</a>

          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">اخر الاخبار</h5>
            <p>إذا كنت تريدالتواصل معنا عبر البريد الإلكتروني قم بالضغط عليه</p>
            <i class="fa fa-envelope me-3"></i><a href="mailto:marahnidal01@gmail.com">Beautyclinic@gmail.com</a>
          </div>
        </div>
      </div>

      <div class="container-fluid copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-8 text-center text-md-start mb-3 mb-md-0">
                جميع الحقوق محفوظة&copy;<a href="{{ route('site.index') }}">بيوتي كلينك</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('siteassets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('siteassets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('siteassets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('siteassets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('siteassets/lib/counterup/counterup.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('siteassets/js/main.js') }}"></script>
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

  </body>
</html>

