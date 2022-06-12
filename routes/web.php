<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/dashboard/', [PageController::class, 'instructor'])
    ->name('dashboard')
    ->middleware('is_admin');

Route::get('/about', function() {
    return view('pages.about');
});


// Courses Page
Route::get('/courses', [PageController::class, 'courses'])->name('courses');
Route::get('/courses/{id}', [PageController::class, 'CourseDetail'])
    ->name('courses')
    ->middleware('auth');

// Instructor Page
Route::get('/instructor', [PageController::class, 'HomeInstructor']);

Route::get('/profile', [PageController::class, 'profile'])
        ->middleware('auth')
        ->name('profil');
Route::get('/change', [PageController::class, 'setting'])
        ->middleware('auth')
        ->name('chane');
Route::post('/change', [PageController::class, 'change']);


Route::get('/signup', [SignupController::class, 'index'])->name('signup');
Route::post('/signup', [SignupController::class, 'store']);

Route::get('/signin', [SigninController::class, 'index'])->name('login')->middleware('guest');
Route::post('/signin', [SigninController::class, 'authenticate']);
Route::post('/signout', [SigninController::class, 'signout']);

// Course CRUD Route
Route::resource('course', CourseController::class);

