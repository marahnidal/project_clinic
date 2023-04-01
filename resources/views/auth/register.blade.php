
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <title>بيوتي كلينيك</title>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.1.2/tailwind.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
 <!--===============================================================================================-->
     <link rel="icon" type="image/png" href="{{ asset('siteassets/images/icon/favicon.ico') }}"/>
 <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="{{ asset('siteassets/vendor/bootstrap/css/bootstrap.min.css') }}">
 <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="{{ asset('siteassets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
 <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="{{ asset('siteassets/vendor/animate/animate.css') }}">
 <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="{{ asset('siteassets/vendor/css-hamburgers/hamburgers.min.css') }}">
 <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="{{ asset('siteassets/vendor/select2/select2.min.css') }}">
 <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="{{ asset('siteassets/css/util.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('siteassets/css/main.css') }}">
 <!--===============================================================================================-->
 </head>
 <body>

     <div class="limiter">
         <div class="container-login100">
             <div class="wrap-login100">
                 <div class="login100-pic js-tilt" data-tilt>
                     <img src="{{ asset('siteassets/img/icon/icon-02-primary.png') }}" alt="IMG">
                 </div>
                 <form action="{{ route('register') }}" method="POST" method="POST" >
                    @csrf
                     <span class="login100-form-title">
                         إنشاء حساب
                     </span>
                     <div class="wrap-input100 validate-input">
                         <input class="input100" id="name" type="name"
                         name="name" value="{{ old('name') }}"autocomplete="name" autofocus placeholder="الإسم " >
                         <span class="focus-input100"></span>
                         <span class="symbol-input100">
                            <i class="fa fa-user"></i>
                         </span>
                         @error('name')
                         <span class="text-red-500" role="alert">
                             {{ $message }}
                         </span>
                     @enderror
                     </div>
                     <div class="wrap-input100 validate-input">
                         <input class="input100" id="email" type="email"
                         name="email" value="{{ old('email') }}"autocomplete="email" autofocus placeholder="الإيميل " >
                         <span class="focus-input100"></span>
                         <span class="symbol-input100">
                             <i class="fa fa-envelope" aria-hidden="true"></i>
                         </span>
                         @error('email')
                         <span class="text-red-500" role="alert">
                             {{ $message }}
                         </span>
                     @enderror
                     </div>
                     <div class="wrap-input100 validate-input">
                        <input class="input100" id="tel" type="tel"
                        name="tel" value="{{ old('tel') }}"autocomplete="tel" autofocus placeholder="رقم الموبايل " >
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                           <i class="fa fa-phone"></i>
                        </span>
                        @error('tel')
                        <span class="text-red-500" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                    </div>

                     <div class="wrap-input100 validate-input" >
                         <input class="input100" type="password" name="password" id="password" placeholder="كلمة المرور" minlength="6">
                         <span class="focus-input100"></span>
                         <span class="symbol-input100">
                             <i class="fa fa-lock" aria-hidden="true"></i>
                         </span>
                         @error('password')
                         <span class="text-red-500" role="alert">
                             {{ $message }}
                         </span>
                     @enderror
                     </div>
                     <div class="wrap-input100 validate-input" >
                         <input class="input100" id="password-confirm" type="password" placeholder="تأكيد كلمة المرور"  name="password_confirmation"  autocomplete="new-password">
                         <span class="focus-input100"></span>
                         <span class="symbol-input100">
                             <i class="fa fa-lock" aria-hidden="true"></i>
                         </span>
                         @error('password')
                         <span class="text-red-500" role="alert">
                             {{ $message }}
                         </span>
                     @enderror
                     </div>




                     <div class="container-login100-form-btn">
                         <button class="login100-form-btn" name="register" type="submit">
                              إنشاء حساب
                         </button>
                     </div>

                     <div class="text-center p-t-70">
                         <a class="txt2" href="{{ route('login') }}">
                              تسجيل الدخول
                             <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                         </a>
                     </div>
                     <hr class="my-6 border-gray-300 w-full">
                     <div>   <p class="text-sm text-gray-500 mt-12">&copy; {{ date('Y') }} {{ config('app.name') }} - All Rights Reserved.</p></div>
                 </form>
             </div>
         </div>
     </div>




 <!--===============================================================================================-->
     <script src="{{ asset('siteassets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
 <!--===============================================================================================-->
     <script src="{{ asset('siteassets/vendor/bootstrap/js/popper.js') }}"></script>
     <script src="{{ asset('siteassets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
 <!--===============================================================================================-->
     <script src="{{ asset('siteassets/vendor/select2/select2.min.js') }}"></script>
 <!--===============================================================================================-->
     <script src="{{ asset('siteassets/vendor/tilt/tilt.jquery.min.js') }}"></script>
     <script >
         $('.js-tilt').tilt({
             scale: 1.1
         })
     </script>
 <!--===============================================================================================-->
     <script src="{{ asset('siteassets/js/main.js') }}"></script>

 </body>
 </html>
   </body>
 </html>
