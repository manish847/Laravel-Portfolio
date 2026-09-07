<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\UserController;

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/experience', [PublicController::class, 'Experience'])->name('experience');
Route::get('/skills', [PublicController::class, 'Skills'])->name('skills');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::get('/projects', [PublicController::class, 'Projects'])->name('projects');
Route::get('/showcase', [PublicController::class, 'Showcase'])->name('showcase');
Route::redirect('/home', '/');

Route::get('/login', [AccountController::class, 'login'])->name('auth.login');
Route::get('/redirect', [AccountController::class, 'account'])->name('account');
Route::post('/validate', [AccountController::class, 'validateAccount'])
    ->middleware('auth')
    ->name('validate');
Route::get('/my-dashboard', [AccountController::class, 'userAccount'])
    ->middleware('auth')
    ->name('my-dashboard');


Route::post('adduser', [UserController::class, 'addUser'])->name('add.user');
Route::post('loginuser', [UserController::class, 'loginUser'])->name('login.user');

// Route::get('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/product/{id}', [PublicController::class, 'productDetails'])->name('product.details');

// redirect home to welcome page
// Route::view('/home', 'home');


// Route::get('/about/{name}', function ($name) {
//     return view('about',["name" => $name]);
// });

Route::get('/admin', [AdminController::class, 'index']);


// Auth::routes();
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
