<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>  دفع كشفية - بيوتي كلينك</title>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' rel='stylesheet'>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
   <style>::-webkit-scrollbar {
         width: 8px;
       }
       ::-webkit-scrollbar-track {
     background: #f1f1f1;
    }
    ::-webkit-scrollbar-thumb {
    background: #888;
      }

      /* Handle on hover */
      ::-webkit-scrollbar-thumb:hover {
      background: #555;
    } body{background: #f5f5f5}.rounded{border-radius: 1rem}.nav-pills .nav-link{color: #555}.nav-pills .nav-link.active{ background:#6f42c1 }input[type="radio"]{margin-right: 5px}.bold{font-weight:bold}</style>
</head>
<body className='snippet-body'>
<div class="container py-5">
    <!-- For demo purpose -->
    <div class="row mb-4">
        <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-6">ثمن الكشفية  50 شيكل فقط </h1>
        </div>
    </div> <!-- End -->
   @auth
        <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                            <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Credit Card </a> </li>
                        </ul>
                    </div> <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form role="form" onsubmit="event.preventDefault()">
                                <div class="form-group"> <label for="username">
                                        <h6>الاسم بالكامل</h6>
                                    </label> <input type="text" name="username" placeholder="الاسم كما هو على البطاقة" required class="form-control "> </div>
                                <div class="form-group"> <label for="cardNumber">
                                        <h6>رقم البطاقة</h6>
                                    </label>
                                    <div class="input-group"> <input type="text" name="cardNumber" placeholder="رقم البطاقة" class="form-control " required>
                                        <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> <label><span class="hidden-xs">
                                                    <h6>تاريخ الانتهاء</h6>
                                                </span></label>
                                            <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                            </label> <input type="text" required class="form-control"> </div>
                                    </div>
                                </div>
                                <div class="card-footer"> <button type="button" class="subscribe btn btn-primary btn-block shadow-sm" style="background-color:#6f42c1 !important ;"> تاكيد الدفع </button>
                            </form>
                        </div>
                    </div> <!-- End -->


                    <!-- End -->
                </div>
            </div>
        </div>
    </div>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript'>$(function() {
  $('[data-toggle="tooltip"]').tooltip()
})</script>
                                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                                myLink.addEventListener('click', function(e) {
                                  e.preventDefault();
                                });</script>
   @endauth
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@guest
<h3 style="font-family: Arial, Helvetica, sans-serif; color:rgb(1, 9, 29) ;background: rgb(214, 184, 214)" class="text-center mt-5">الرجاء قم بتسجيل الدخول لتتمكن من حجز الموعد <a href="{{ route('login') }}">تسجيل الدخول</a></h3>
@endguest
<script>
    @if (session('msg'))
Swal.fire({
    title: 'تم الحجز بنجاح',
    text: ' الرجاء قم بدفع الكشفية ومتابعة إيميلك ',
    icon: 'success',
    confirmButtonText: 'ok'
  })@endif
  </script>
                    </body>
                            </html>
