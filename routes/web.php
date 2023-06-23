<?php

use App\Http\Controllers\AllCourses;
use App\Http\Controllers\MyCoursesController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/all-courses', [AllCourses::class, 'courses'])->name('courses');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/my-profile', [MyProfileController::class, 'profile'])->name('my-profile');
    Route::get('/my-courses', [MyCoursesController::class, 'my_courses'])->name('my-courses');
});

require __DIR__.'/auth.php';
