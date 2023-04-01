<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\MailsController;
use App\Http\Controllers\Site\PayController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\OilyController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SkinController;
use App\Http\Controllers\Admin\TakeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MixedController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\NormalController;
use App\Http\Controllers\Admin\DoctorsController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\SensitiveController;
use App\Http\Controllers\Admin\CategoriesController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::prefix( LaravelLocalization::setLocale())->group(function(){

    Route::prefix('admin')->name('admin.')->middleware('auth', 'CheckUserType')->group(function(){
         Route::get('/',[AdminController::class,'index'])->name('index');


         //categories Route
         Route::get('/categories/trash',[CategoriesController::class,'trash'])->name('categories.trash');
         Route::get('/categories/{id}/restore',[CategoriesController::class,'restore'])
         ->name('categories.restore');
         Route::get('/categories/{id}/forcedelete',[CategoriesController::class,'forcedelete'])
         ->name('categories.forcedelete');
         Route::resource('categories', CategoriesController ::class);


         //Skin  Route
         Route::get('/skin/trash',[SkinController::class,'trash'])->name('skin.trash');
         Route::get('/skin/{id}/restore',[SkinController::class,'restore'])->name('skin.restore');
         Route::get('/skin/{id}/forcedelete',[SkinController::class,'forcedelete'])
         ->name('skin.forcedelete');
         Route::resource('skin', SkinController::class);

         //Skin  Route
         Route::get('/oilyskin/trash',[OilyController::class,'trash'])->name('oilyskin.trash');
         Route::get('/oilyskin/{id}/restore',[OilyController::class,'restore'])->name('oilyskin.restore');
         Route::get('/oilyskin/{id}/forcedelete',[OilyController::class,'forcedelete'])
         ->name('oilyskin.forcedelete');
         Route::resource('oilyskin', OilyController::class);



         //Skin  Route
         Route::get('/normalskin/trash',[NormalController::class,'trash'])->name('normalskin.trash');
         Route::get('/normalskin/{id}/restore',[NormalController::class,'restore'])
         ->name('normalskin.restore');
         Route::get('/normalskin/{id}/forcedelete',[NormalController::class,'forcedelete'])
         ->name('normalskin.forcedelete');
         Route::resource('normalskin', NormalController::class);

         //Skin  Route
         Route::get('/sensitiveskin/trash',[SensitiveController::class,'trash'])
         ->name('sensitiveskin.trash');
         Route::get('/sensitiveskin/{id}/restore',[SensitiveController::class,'restore'])
         ->name('sensitiveskin.restore');
         Route::get('/sensitiveskin/{id}/forcedelete',[SensitiveController::class,'forcedelete'])
         ->name('sensitiveskin.forcedelete');
         Route::resource('sensitiveskin', SensitiveController::class);

         //Skin  Route
         Route::get('/mixedskin/trash',[MixedController::class,'trash'])->name('mixedskin.trash');
         Route::get('/mixedskin/{id}/restore',[MixedController::class,'restore'])
         ->name('mixedskin.restore');
         Route::get('/mixedskin/{id}/forcedelete',[MixedController::class,'forcedelete'])
         ->name('mixedskin.forcedelete');
         Route::resource('mixedskin', MixedController::class);



         //Products  Route
         Route::get('/products/trash',[ProductsController::class,'trash'])->name('products.trash');
         Route::get('/products/{id}/restore',[ProductsController::class,'restore'])
         ->name('products.restore');
         Route::get('/products/{id}/forcedelete',[ProductsController::class,'forcedelete'])
         ->name('products.forcedelete');
         Route::resource('products', ProductsController ::class);

         //take  Route
         Route::get('/takes/trash',[TakeController::class,'trash'])->name('takes.trash');
         Route::get('/takes/{id}/restore',[TakeController::class,'restore'])->name('takes.restore');
         Route::get('/takes/{id}/forcedelete',[TakeController::class,'forcedelete'])
         ->name('takes.forcedelete');
         Route::resource('takes', TakeController ::class);

        //Route doctors
        Route::get('/doctors/trash',[UserController::class,'trash'])->name('users.trash');
        Route::get('/users/{id}/restore',[UserController::class,'restore'])->name('users.restore');
        Route::get('/users/{id}/forcedelete',[UserController::class,'forcedelete'])
        ->name('users.forcedelete');
        Route::resource('users', UserController ::class);

        //Route doctors
        Route::get('/doctors/trash',[DoctorsController::class,'trash'])->name('doctors.trash');
        Route::get('/doctors/{id}/restore',[DoctorsController::class,'restore'])->name('doctors.restore');
        Route::get('/doctors/{id}/forcedelete',[DoctorsController::class,'forcedelete'])
        ->name('doctors.forcedelete');
        Route::resource('doctors', DoctorsController ::class);

        //Route role

        Route::resource('role', RoleController ::class);



    });
});


//Route::view('/','welcome')->name('site.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');



Route::view('not-allowed','not-allowed');




Route::get('/', function () {
    return view('welcome');

});

    //Route Web
Route::prefix('site')->name('site.')->group(function(){
    Route::get('/',[SiteController::class,'index'])->name('index');
    Route::post('/indexdata',[SiteController::class,'index_data'])->name('index_data');
    Route::get('/products',[SiteController::class,'product'])->name('product');
    Route::get('/normal',[SiteController::class,'normal_skin'])->name('normal_skin');
    Route::get('/oily',[SiteController::class,'oily_skin'])->name('oily_skin');
    Route::get('/sensitive',[SiteController::class,'sensitive_skin'])->name('sensitive_skin');
    Route::get('/mixed',[SiteController::class,'mixed_skin'])->name('mixed_skin');
    Route::get('/skin',[SiteController::class,'skin'])->name('skin');
    Route::get('/doctors',[SiteController::class,'doctor'])->name('doctor');
    Route::get('/consultation',[SiteController::class,'consultation'])->name('consultation');
    Route::post('/doctordata',[SiteController::class,'doctor_data'])->name('doctor_data');

    Route::get('/doctors/dr',[SiteController::class,'dr'])->name('dr');
    Route::get('/doctors/dr2',[SiteController::class,'dr2'])->name('dr2');
    Route::get('/doctors/dr3',[SiteController::class,'dr3'])->name('dr3');
    Route::get('/doctors/dr4',[SiteController::class,'dr4'])->name('dr4');
    Route::get('/doctors/dr5',[SiteController::class,'dr5'])->name('dr5');

    Route::get('/Privacy',[SiteController::class,'privacy'])->name('privacy');

    Route::get('/contact',[MailsController::class,'contact'])->name('contact');
    Route::post('/contact',[MailsController::class,'contact_data'])->name('contact_data');

    Route::get('/pay',[PayController::class,'pay'])->name('pay');
    Route::get('/take',[SiteController::class,'take'])->name('take');
    Route::post('/take/data',[SiteController::class,'take_data'])->name('take_data');





});








