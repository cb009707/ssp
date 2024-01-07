<?php

use App\Http\Controllers\HomeCon;
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

Route::get("/about",function(){
    return view('pages.about');
});

Route::get("/furnitures",function(){
    return view('pages.furnitures');
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
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
}); 
