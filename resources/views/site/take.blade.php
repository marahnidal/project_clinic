
<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="utf-8" />
    <title>  حجز موعد - بيوتي كلينك</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

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
    <link rel="stylesheet" href="{{ asset('siteassets/css/dr.css') }}">
  </head>

  <body style="background: rgb(247, 237, 248)" dir="rtl">





<section class="order" id="order">

<h1 class="heading"> حجز موعد</h1>

@auth
<div class="row">

    <div class="image">
        <img src="{{ asset('siteassets/img/1حجز موعد.png')}}" alt="" style="box-shadow: 10px 10px 10px 10px #888888 !important;">
    </div>

    <form method="POST" action="{{ route('site.take_data') }}" >
        @csrf


    <div class="inputBox">
        <input type="text" name="name" class="form-control @error('name')
        is-invalid
        @enderror" id="name" placeholder=" الإسم "  value="{{ old('name') }}">
        @error('name')
        <small class="invalid-feedback">{{ $message }}</small>

        @enderror
        <input type="email" name="email" class="form-control @error('email')
        is-invalid
        @enderror" id="email" placeholder=" الإيميل  "  value="{{ old('email') }}">
        @error('email')
        <small class="invalid-feedback">{{ $message }}</small>

        @enderror
    </div>

    <div class="inputBox text-center">

        <input type="tel" name="tel" class="form-control @error('tel')
        is-invalid
        @enderror" id="tel" placeholder=" رقم موبايل  "  value="{{ old('tel') }}">
        @error('tel')
        <small class="invalid-feedback">{{ $message }}</small>

        @enderror

        <input  type="date" name="date" class="form-control @error('date')
        is-invalid
        @enderror" id="date"  value="{{ date('Y-m-d' ) }}"  min="<?= date('Y-m-d' ); ?>">
        @error('date')
        <small class="invalid-feedback">{{ $message }}</small>

        @enderror

        <input  type="time" name="time" class="form-control @error('time')
        is-invalid
        @enderror" id="time"  value="{{ old('time') }}">
        @error('time')
        <small class="invalid-feedback">{{ $message }}</small>

        @enderror


    </div>
    <input name="send"  type="submit" value=" حجز" class="btn btn-primary px-6 d-none d-lg-block" style="font-family: 'Cairo', sans-serif !important; width: 200px;" >

    </form>

</div>
@endauth

@guest
<h3 style="font-family: Arial, Helvetica, sans-serif; color:rgb(1, 9, 29) ;background: rgb(214, 184, 214)" class="text-center mt-5">الرجاء قم بتسجيل الدخول لتتمكن من حجز الموعد <a href="{{ route('login') }}">تسجيل الدخول</a></h3>
@endguest
</section>







</body>
</html>
