<?php

use App\Http\Controllers\CourseController;
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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/cindex', [CourseController::class, ('index')])->name('course.index');
Route::get('/cadd', [CourseController::class, 'add'])->name('course.add');
Route::post('/cindex', [CourseController::class, 'store'])->name('course.store');
Route::get('/cview', [CourseController::class, 'view'])->name('course.view');
Route::get('/cindex/{course}/edit', [CourseController::class, 'edit'])->name('course.edit');
Route::put('/cindex/{course}/update', [CourseController::class, 'update'])->name('course.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin_dashboard', 'App\Http\Controllers\Admin\DashboardController@index')->middleware('role:admin');
Route::get('/student_dashboard', 'App\Http\Controllers\Student\DashboardController@index')->middleware('role:student');
