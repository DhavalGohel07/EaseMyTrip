<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\AdminDestinationController;
use App\Http\Controllers\AdminResortController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\ResortController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\AdminloginController;
use App\Http\Controllers\AdmindetailController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\MailPageController;
use App\Http\Controllers\OtpverifyController;



use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});





// Route::post('/booking',[BookingController::class,'store']);
// Route::post('/resort/booking/{id}',[BookingController::class,'store']);





//Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/register', [LoginController::class, 'registerPost'])->name('register');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'loginPost'])->name('login');
    Route::get('/forgot-password',[ForgotPasswordController::class,'index']);
    Route::get('/confirm-password',[ForgotPasswordController::class,'confirmpassword']);
    Route::post('/changepassword',[ForgotPasswordController::class,'changepassword'])->name('changepassword');
    

    Route::get('/admin-register', [AdminloginController::class, 'register'])->name('admin-register');
    Route::post('/admin-register', [AdminloginController::class, 'registerPost'])->name('admin-register');
    Route::get('/admin-login', [AdminloginController::class, 'login'])->name('admin-login');
    Route::post('/admin-login', [AdminloginController::class, 'loginPost'])->name('admin-login');
    // Route::resource('/forgot-password',ForgotPasswordController::class);
    Route::delete('/logout', [AdminloginController::class, 'logout'])->name('logout');


// Route::get('/new-password',[ForgotPasswordController::class,'passindex']);
// Route::post('/new-password',[ForgotPasswordController::class,'passchange']);


Route::get('Verify-email', function () {
  return view('user.emailverify');
});

// Route::get('Verify-otp', function () {
//   return view('user.Otpverify');
// });


Route::post('/sendMail',[SendMailController::class,'index'])->name("sendMail");

Route::post('/fsendMail',[SendMailController::class,'findex'])->name("fsendMail");
Route::get('/Verify-otp',[OtpverifyController::class,'index']);
Route::get('/fVerify-otp',[OtpverifyController::class,'findex']);

Route::post('/checkotp',[OtpverifyController::class,'otpcheck'])->name("checkotp");

Route::post('/fcheckotp',[OtpverifyController::class,'fotpcheck'])->name("fcheckotp");

 
//Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [LoginController::class, 'logout'])->name('logout');
//});

Route::get('/about', function () {
    return view('user.about');
});


route::resource('/contact',ContactusController::class);
route::resource('/destination',DestinationController::class);
route::resource('/resort',ResortController::class);

route::resource('/admin-dash',AdminDashboardController::class);


// Admin Panel Routes
  // Route::get('/admin-dash',function(){
  //   return  view ('admin.dashboard');
  // });
  // Route::get('/admin-destination',function(){
  //   return  view ('admin.destination');
  // });
  // Route::get('/admin-resort',function(){
  //   return  view ('admin.resort');
  // });
  // Route::get('/admin-user',function(){
  //   return  view ('admin.user');
  // });

  Route::resource('/admin-user',AdminUserController::class);
  Route::resource('/admin-admin',AdmindetailController::class);


  Route::resource('/admin-feedback',FeedbackController::class);


  // Route::get('/admin-admin',function(){
  //   return  view ('admin.admin');
  // });
  // Route::get('/admin-feedback',function(){
  //   return  view ('admin.feedback');
  // });

  route::resource('/admin-destination',AdminDestinationController::class);
  route::resource('/admin-resort',AdminResortController::class);

  
  Route::get('/history', [HistoryController::class,'index']);
  Route::get('/download-pdf/{id}', [HistoryController::class,'downloadPDF']);

  
  

//   // Route::resource('/payment',PaymentController::class);
// Route::get('/payment', [PaymentController::class, 'index']);
Route::post('/payment', [BookingController::class, 'store'])->name('payment.store');
Route::post('/pay', [PaymentController::class, 'pay']);
Route::get('/destination/booking/{id}',[BookingController::class,'index']);
Route::get('/resort/booking/{id}',[BookingController::class,'indexresort']);
Route::get('/success',[BookingController::class,'success']);




