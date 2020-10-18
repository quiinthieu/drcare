<?php

use App\Models\Appointment;
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
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin-dashboard');
Route::get('/admin/research', [ResearchController::class, 'index'])->name('admin-research')->middleware('auth');
Route::get('/admin/services', [ServiceController::class, 'index'])->name('admin-services')->middleware('auth');



// ADMIN - START

// APPOINTMENTS - START
// C - for Create
Route::get('/admin/appointments/create', function() {
    return view('admin.appointments-create');
})->name('admin-appointments-create')->middleware('auth');
Route::post('/admin/appointments/store', function(\Illuminate\Http\Request $request) {
    $appointment = new Appointment();
    $appointment->first_name = $request->get('first_name');
    $appointment->last_name = $request->get('last_name');
    $appointment->setServiceTypeId($request->get('service_type_id'));
    $appointment->phone = $request->get('phone');
    $appointment->setDate($request->get('date'));
    $appointment->setTime($request->get('time'));
    $appointment->message = $request->get('message');
    $appointment->save();
    return \Illuminate\Support\Facades\Redirect::route('admin-appointments-index');
})->name('admin-appointments-store')->middleware('auth');

// R - for Read
Route::get('/admin/appointments', [AppointmentController::class, 'index'])->name('admin-appointments-index')->middleware('auth');
Route::get('/admin/appointments/{id}', [AppointmentController::class, 'show'])->name('admin-appointments-show')->middleware('auth');

// U - for Update
Route::get('/admin/appointments/edit/{id}', [AppointmentController::class, 'edit'])->name('admin-appointments-edit')->middleware('auth');
Route::post('/admin/appointments/update/{id}', [AppointmentController::class, 'update'])->name('admin-appointments-update')->middleware('auth');

// D - for Delete
Route::get('/admin/appointments/delete/{id}', [AppointmentController::class, 'destroy'])->name('admin-appointments-delete');
// APPOINTMENTS - END

// DISEASES - START
// C - for Create
Route::get('/admin/diseases/create', [DiseaseController::class, 'create'])->name('admin-diseases-create')->middleware('auth');
Route::post('/admin/diseases/store', [DiseaseController::class, 'store'])->name('admin-diseases-store')->middleware('auth');

// R - for Read
Route::get('/admin/diseases/index', [DiseaseController::class, 'index'])->name('admin-diseases-index')->middleware('auth');
Route::get('/admin/diseases/show/{id}', [DiseaseController::class, 'show'])->name('admin-diseases-show')->middleware('auth');

// U - for Update
Route::get('/admin/diseases/edit/{id}', [DiseaseController::class, 'edit'])->name('admin-diseases-edit')->middleware('auth');
Route::post('/admin/diseases/update/{id}', [DiseaseController::class, 'update'])->name('admin-diseases-update')->middleware('auth');

// D - for Delete
Route::get('/admin/diseases/delete/{id}', [DiseaseController::class, 'destroy'])->name('admin-diseases-delete')->middleware('auth');
// DISEASES - END


// DOCTORS - START
// C - for Create
Route::get('/admin/doctors/create', [DoctorController::class, 'create'])->name('admin-doctors-create')->middleware('auth');
Route::post('/admin/doctors/store', [DoctorController::class, 'store'])->name('admin-doctors-store')->middleware('auth');

// R - for Read
Route::get('/admin/doctors/index', [DoctorController::class, 'index'])->name('admin-doctors-index')->middleware('auth');
Route::get('/admin/doctors/show/{id}', [DoctorController::class, 'show'])->name('admin-doctors-show')->middleware('auth');

// U - for Update
Route::get('/admin/doctors/edit/{id}', [DoctorController::class, 'edit'])->name('admin-doctors-edit')->middleware('auth');
Route::post('/admin/doctors/update/{id}', [DoctorController::class, 'update'])->name('admin-doctors-update')->middleware('auth');

// D - for Delete
Route::get('/admin/doctors/delete/{id}', [DoctorController::class, 'destroy'])->name('admin-doctors-delete')->middleware('auth');
// DOCTORS - END

// PRODUCTS - START
// C - for Create
Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin-products-create')->middleware('auth');
Route::post('/admin/products/store', [ProductController::class, 'store'])->name('admin-products-store')->middleware('auth');

// R - for Read
Route::get('/admin/products/index', [ProductController::class, 'index'])->name('admin-products-index')->middleware('auth');
Route::get('/admin/products/show/{id}', [ProductController::class, 'show'])->name('admin-products-show')->middleware('auth');

// U - for Update
Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin-products-edit')->middleware('auth');
Route::post('/admin/products/update/{id}', [ProductController::class, 'update'])->name('admin-products-update')->middleware('auth');

// D - for Delete
Route::get('/admin/products/delete/{id}', [ProductController::class, 'destroy'])->name('admin-products-delete')->middleware('auth');
// PRODUCTS - END

// ADMIN - END
