<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\pages\SignUpController;

use App\Http\Controllers\pages\LoginController;

use App\Http\Controllers\pages\TermConditionController;

use App\Http\Controllers\pages\VerifyController;

use App\Http\Controllers\Admin\DashboardController;

use App\Http\Middleware\CheckAdmin;

use App\Http\Controllers\Users\DashboardUserController as UserController;



use App\Http\Controllers\courses\CourseCategoryController as CourseCategoryController;

use App\Http\Controllers\courses\CourseController as CourseController;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::middleware(['ShareData'])->group(function () {
    // Login and Sign up
    Route::get('/login', [LoginController::class, 'login'])->name('login');

    Route::post('/login', [LoginController::class, 'handleLogin'])->name('login');

    Route::post('/logout', [LoginController::class, 'handleLogout'])->name('logout');

    Route::get('/signup', [SignUpController::class, 'signup'])->name('signup');

    Route::post('/signup', [SignUpController::class, 'register'])->name('post-signup');

    Route::get('/forget-password', [LoginController::class, 'forget'])->name('forget-password');

    Route::post('/forget-password', [LoginController::class, 'handleForgetPassword'])->name('forget-password');

    Route::get('/verify/{token}', [VerifyController::class, 'verify'])->name('verify');

    Route::get('/send/{token}', [VerifyController::class, 'send'])->name('send');
    
    // User
    Route::get('/Dashboard', [UserController::class, 'index'])->name('dashboard-user');

    Route::get('/profile/{id}', [UserController::class, 'InstructorProfile'])->name('profile');


    // Courses
    Route::get('/course-list', [CourseCategoryController::class, 'index'])->name('course-list');

    Route::get('/course-category/{id}', [CourseCategoryController::class, 'show'])->name('course-category');
    
    Route::get('/course-detail/{id}', [CourseController::class, 'detail'])->name('course-detail');

    Route::get('/course-lecture/{id}', [CourseController::class, 'lecture'])->name('course-lecture');



    // Term
    Route::get('/term-condition', [TermConditionController::class, 'index'])->name('term-condition');
});

Route::prefix('/admin')->middleware([CheckAdmin::class])->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});
