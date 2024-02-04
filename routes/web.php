<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeCon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


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



Route::get("/",[HomeCon::class,"index"]);







//Route::get("/redirects",[HomeCon::class,"redirects"]);

Route::get("/about",function(){
    return view('pages.about');
});


Route::get("/contact",function(){
    return view('pages.contact');
});

Route::get("/testimonial",function(){
    return view('pages.testimonial');
});

 Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])
->prefix('admin')
->name('admin.')
->group(function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::resource('user', \App\Http\Controllers\usercon::class);
    
    Route::resource('booking', \App\Http\Controllers\BookingController::class);
}); 


Route::put('/booking/{booking}', [BookingController::class, 'update'])->name('booking.update');

Route::get('/booking', [
    BookingController::class,
    'frontEndForm'
])->name('booking.form');

Route::post('/booking', [
    BookingController::class,
    'store'
])->name('booking.store');

// Route::resource('productcategory', \app\Http\Controllers\ProductController::class);

//  Route::get('/booking',function(){
//      $bookings = DB::table('bookings')->get();
//      dd($bookings);
//      return view('admin.user.userdataform');
//  });

// Route::get('/',function(){
//          $bookings = DB::table('bookings')->get();
//         return view('admin.user.details',[
//                  'bookings' => $bookings]);
//       });