<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;


//Task 1: Request Validation
Route::get('/', function () {
    return redirect('/register');
});
Route::get('/register', [RegistrationController::class,'showRegistrationForm']);
Route::post('/register', [RegistrationController::class, 'store'])->name('register');
//__________________________________________________________________________________________


//Task 2: Request Redirect
Route::get('/home', function () {
    return redirect('/dashboard', 302);
});
Route::get('/home', function () {
    return view('redirect', ['redirectCode' => 302]);
});


//Task 4: Route Middleware Group
Route::middleware([AuthMiddleware::class])->group(function () {
    Route::get('/profile', function () {
        // Profile route logic
    });

    Route::get('/settings', function () {
        // Settings route logic
    });
});


//Task 6: Single Action Controller
Route::post('/contact', ContactController::class)->name('contact');


//Task 7: Resource Controller
Route::resource('posts', PostController::class);


//Task 8: Blade Template Engine
Route::get('/welcome', function(){
    return view('welcome');
});