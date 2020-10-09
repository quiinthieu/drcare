<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrCareController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;

Auth::routes();

Route::get('/', [DrCareController::class, 'index'])->name('index');
Route::get('/about', [DrCareController::class, 'about'])->name('about');
Route::get('pricing', function() {
    return view('drcare.services');
})->name('services');
Route::get('/diseases/{id}', function($id) {
    return view('drcare.diseases', ['id' => $id]);
})->name('diseases');
Route::get('/research', [DrCareController::class, 'research'])->name('research');
Route::get('/research/{id}', function ($id) {
    return view('drcare.research-single', ['id' => $id]);
})->name('research-single');
Route::get('/doctor',[DrCareController::class, 'doctor'])->name('doctor');
Route::get('/products', function() {
    return view('drcare.pricing');
});
Route::get('/products/{id}', [DrCareController::class, 'product'])->name('product');



Route::get('/blog', function() {
    return view('drcare.blog');
})->name('blog');
Route::get('/blog-single', function() {
    return view('drcare.blog-single');
})->name('blog-single');
Route::get('/contact', function() {
    return view('drcare.contact');
})->name('contact');
Route::get('/department', function() {
    return view('drcare.department');
})->name('department');

Route::resource('appointments', AppointmentController::class);

Route::get('/login', function() {
    return view('auth.login');
})->name('login');
Route::get('/register', function() {
    return view('auth.register');
})->name('register');

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

Route::get('/bcalert', [AdminController::class, 'bcalert'])->name('bcalert');
Route::get('/bcbadges', [AdminController::class, 'bcbadges'])->name('bcbadges');
Route::get('/bcbreadcrumbpagination', [AdminController::class, 'bcbreadcrumbpagination'])->name('bcbreadcrumbpagination');
Route::get('/bcbutton', [AdminController::class, 'bcbutton'])->name('bcbutton');
Route::get('/bccard', [AdminController::class, 'bccard'])->name('bccard');
Route::get('/bscarousel', [AdminController::class, 'bccarousel'])->name('bccarousel');



