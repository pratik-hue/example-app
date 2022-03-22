<?php

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
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('students', [App\Http\Controllers\StudentController::class, 'index'])->name('students');
Route::get('/add-student', [App\Http\Controllers\StudentController::class, 'create'])->name('add-student');
Route::post('add-student', [App\Http\Controllers\StudentController::class, 'store'])->name('add-students');
Route::get('edit-student/{id}', [App\Http\Controllers\StudentController::class, 'edit'])->name('edit-student');
Route::put('update-student/{id}', [App\Http\Controllers\StudentController::class, 'update'])->name('update-student');
Route::get('/delete/{id}', [App\Http\Controllers\StudentController::class, 'destroy'])->name('delete');
Route::get('/contactform', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contactform');
Route::post('/contactforms', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contactforms');


