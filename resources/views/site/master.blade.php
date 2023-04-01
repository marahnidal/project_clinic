<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="utf-8" />
    <title>@yield('title', config('app.name')) </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

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
  </head>
@yield('style')
  <body dir="rtl">
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
   <a href="{{ route('site.index') }}" class="navbar-brand d-flex align-items-center">
     <h3 class="m-0"   style="font-family: 'Cairo', sans-serif !important; " >
       <img
         class="img-fluid me-6"
         src="{{ asset('siteassets/img/mohammed.png') }}"
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
       {{ request()->routeIs('site.doctor') ? 'active' :'' }} ">الأطباء</a>
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

      <div>

        <a href="{{ route('site.contact') }}" class="nav-item nav-link">تواصل الان</a></div>
     </div>
        </div>
    </div>

   </div>



   <a href="{{ route('login') }}" class="btn btn-primary px-6 d-none d-lg-block" style="font-family: 'Cairo', sans-serif !important; " >تسجيل دخول </a>


 </nav>


 <!-- Navbar End -->

@yield('content')


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
            <i class="fa fa-envelope me-3"></i><a href="mailto:nidalmarah586@gmail.com">Beautyclinic@gmail.com</a>
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
    <a href="{{ route('site.index') }}" class="btn btn-lg btn-primary btn-lg-square back-to-top"
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
  </body>
</html>
@yield('script')



