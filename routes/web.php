<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrCareController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\ServiceController;

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



Route::get('/bc-alert', [AdminController::class, 'bcAlert'])->name('bc-alert');
Route::get('/bc-badges', [AdminController::class, 'bcBadges'])->name('bc-badges');
Route::get('/bc-breadcrumb-pagination', [AdminController::class, 'bcBreadcrumbPagination'])->name('bc-breadcrumb-pagination');
Route::get('/bc-button', [AdminController::class, 'bcButton'])->name('bc-button');
Route::get('/bc-card', [AdminController::class, 'bcCard'])->name('bc-card');
Route::get('/bc-carousel', [AdminController::class, 'bcCarousel'])->name('bc-carousel');
Route::get('/bc-collapse', [AdminController::class, 'bcCollapse'])->name('bc-collapse');
Route::get('/bc-extra', [AdminController::class, 'bcExtra'])->name('bc-extra');
Route::get('/bc-modal', [AdminController::class, 'bcModal'])->name('bc-modal');
Route::get('/bc-progress', [AdminController::class, 'bcProgress'])->name('bc-progress');
Route::get('/bc-spinner', [AdminController::class, 'bcSpinner'])->name('bc-spinner');
Route::get('/bc-tabs', [AdminController::class, 'bcTabs'])->name('bc-tabs');
Route::get('/bc-toasts', [AdminController::class, 'bcToasts'])->name('bc-toasts');
Route::get('/bc-tooltip-popover', [AdminController::class, 'bcTooltipPopover'])->name('bc-tooltip-popover');
Route::get('/bc-typography', [AdminController::class, 'bcTypography'])->name('bc-typography');
Route::get('/chart-apex', [AdminController::class, 'chartApex'])->name('chart-apex');
Route::get('/form-elements', [AdminController::class, 'formElements'])->name('form-elements');
Route::get('/map-google', [AdminController::class, 'mapGoogle'])->name('map-google');
Route::get('/sample-page', [AdminController::class, 'samplePage'])->name('sample-page');
Route::get('/auth-signin', [AdminController::class, 'authSignin'])->name('auth-signin');
Route::get('/auth-signup', [AdminController::class, 'authSignup'])->name('auth-signup');
Route::get('/tbl-bootstrap', [AdminController::class, 'tblBootstrap'])->name('tbl-bootstrap');
Route::get('/bc-grid', [AdminController::class, 'bcGrid'])->name('bc-grid');
Route::get('/layout-vertical', [AdminController::class, 'layoutVertical'])->name('layout-vertical');
Route::get('/layout-horizontal', [AdminController::class, 'layoutHorizontal'])->name('layout-horizontal');

//Route::get('/oral-diseases', [AdminController::class, 'oralDiseases'])->name('oral-diseases');
//Route::get('/dental-diseases', [AdminController::class, 'dentalDiseases'])->name('dental-diseases');
//Route::get('/oral-diseases/edit/{id}', [AdminController::class, 'oralDiseasesEdit'])->name('oral-diseases-edit');
//Route::post('/oral-disease/edit/{id}', [DiseaseController::class, 'store'])->name('oral-disease-store');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin-dashboard');
Route::get('/admin/diseases', [DiseaseController::class, 'index'])->name('admin-diseases')->middleware('auth');
Route::get('/admin/appointments', [AppointmentController::class, 'index'])->name('admin-appointments')->middleware('auth');
Route::get('/admin/doctors', [DoctorController::class, 'index'])->name('admin-doctors')->middleware('auth');
Route::get('/admin/products', [ProductController::class, 'index'])->name('admin-products')->middleware('auth');
Route::get('/admin/research', [ResearchController::class, 'index'])->name('admin-research')->middleware('auth');
Route::get('/admin/services', [ServiceController::class, 'index'])->name('admin-services')->middleware('auth');
