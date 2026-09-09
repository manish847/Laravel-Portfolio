<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\UserController;

// Basic routes for the public pages
Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/experience', [PublicController::class, 'Experience'])->name('experience');
Route::get('/skills', [PublicController::class, 'Skills'])->name('skills');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::get('/projects', [PublicController::class, 'Projects'])->name('projects');
Route::get('/showcase', [PublicController::class, 'Showcase'])->name('showcase');
Route::redirect('/home', '/');

// Basic routes for the account management
Route::get('/login', [AccountController::class, 'login'])->name('auth.login');
Route::get('/redirect', [AccountController::class, 'account'])->name('account');
Route::post('/validate', [AccountController::class, 'validateAccount'])
    ->middleware('auth')
    ->name('validate');
Route::get('/my-dashboard', [AccountController::class, 'userAccount'])
    ->middleware('auth')
    ->name('my-dashboard');

// Basic routes for the admin dashboard User management
Route::get('admin/view-users', [AdminController::class, 'viewUsers'])->middleware('auth')->name('view-users');
Route::get('admin/add-user', [AdminController::class, 'addUser'])->middleware('auth')->name('add-user');
Route::get('admin/user-profile', [AdminController::class, 'userProfile'])->middleware('auth')->name('user-profile');

// Basic routes for the admin dashboard Post management
Route::get('admin/view-posts', [AdminController::class, 'viewPosts'])->middleware('auth')->name('view-posts');
Route::get('admin/add-post', [AdminController::class, 'addPost'])->middleware('auth')->name('add-post');
Route::get('admin/post-categories', [AdminController::class, 'postCategories'])->middleware('auth')->name('post-categories');

// Basic routes for the admin dashboard Products management
Route::get('admin/view-products', [AdminController::class, 'viewProducts'])->middleware('auth')->name('view-products');
Route::get('admin/add-product', [AdminController::class, 'addProduct'])->middleware('auth')->name('add-product');
Route::get('admin/product-categories', [AdminController::class, 'productCategories'])->middleware('auth')->name('product-categories');


Route::get('admin/product/{id}', [PublicController::class, 'productDetails'])->name('product.details');

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
        return view('html.admin.dashboard');
    })->name('dashboard');
});
