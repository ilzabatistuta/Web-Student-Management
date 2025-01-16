<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/', function () {
//     return view('layout');
// });

// Route::get('/', function () {
//     return view('home'); // Ini mengarah ke resources/views/home.blade.php
// });

// Route::get('/', [HomeController::class, 'index']);


Route::resource('/home', HomeController::class);

Route::resource('/students', StudentController::class);

Route::resource('/teachers', TeacherController::class);

Route::resource('/courses', CourseController::class);

Route::resource('/batches', BatchController::class);

Route::resource('/enrollments', EnrollmentController::class);

Route::resource('/payments', PaymentController::class);


// Route::get('report/report1/{pid}', [ReportController::class,'report']);
Route::get('report/report1/{id}', [ReportController::class, 'report'])->name('report');
Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('report/report1/{id}', [ReportController::class, 'report'])->name('report');
