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

// DRCARE - START

// HOME - START
Route::get('/', [DrCareController::class, 'index'])->name('drcare-index');
// HOME - END

// ABOUT US - START
Route::get('/about', [DrCareController::class, 'about'])->name('drcare-about');
// ABOUT US - END

// PATIENT EDUCATION - START
Route::get('/patient-education/{id}', [DrCareController::class, 'patientEducation'])->name('drcare-patient-education');
// PATIENT EDUCATION - END

// PROFESSIONAL EDUCATION - START
Route::get('/professional-education/related-courses', [DrCareController::class, 'relatedCourses'])->name('drcare-professional-education-related-courses');
Route::get('/professional-education/help-documents', [DrCareController::class, 'helpDocuments'])->name('drcare-professional-education-help-documents');
Route::get('/professional-education/faculty-resources', [DrCareController::class, 'facultyResources'])->name('drcare-professional-education-faculty-resources');
Route::get('/professional-education/student-resources', [DrCareController::class, 'studentResources'])->name('drcare-professional-education-student-resources');
Route::get('/professional-education/case-studies', [DrCareController::class, 'caseStudies'])->name('drcare-professional-education-case-studies');
// PROFESSIONAL EDUCATION - END

// RESEARCH - START
Route::get('/research', [DrCareController::class, 'research'])->name('drcare-research');
Route::get('/research/{id}', [DrCareController::class, 'researchArticle'])->name('drcare-research-article');
// RESEARCH - END

// PRODUCTS - START
// R - for Read
Route::get('/products/{id}', [DrCareController::class, 'products'])->name('drcare-products');
// PRODUCTS - END

// CONTACT US - START
// C - for Create
Route::get('/drcare/messages/create', [DrCareController::class, 'messagesCreate'])->name('drcare-messages-create');
Route::post('/drcare/messages/store',[DrCareController::class, 'messagesStore'])->name('drcare-messages-store');
// CONTACT US - END

// APPOINTMENTS - START
// C - for Create
Route::get('/appointments/create', [DrCareController::class, 'appointmentsCreate'])->name('drcare-appointments-create');
Route::post('/appointments/store', [DrCareController::class, 'appointmentsStore'])->name('drcare-appointments-store');
// R - for Read
// APPOINTMENTS - END

// DOCTORS - START
Route::get('/doctors', [DrcareController::class, 'doctors'])->name('drcare-doctors');
// DOCTORS - END

// DRCARE - END

Route::get('/login', function() {
    return view('auth.login');
})->name('login');
Route::get('/register', function() {
    return view('auth.register');
})->name('register');

// ADMIN - START
// DASHBOARD - START
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin-dashboard');
// DASHBOARD - END
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
    return \Illuminate\Support\Facades\Redirect::route('admin-appointments-index')->with('message', 'Create Successfull !');
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

// RESEARCH - START
// C - for Create
Route::get('/admin/cresearch/create', [ResearchController::class, 'create'])->name('admin-research-create')->middleware('auth');
Route::post('/admin/research/store', [ResearchController::class, 'store'])->name('admin-research-store')->middleware('auth');

// R - for Read
Route::get('/admin/research/index', [ResearchController::class, 'index'])->name('admin-research-index')->middleware('auth');
Route::get('/admin/research/show/{id}', [ResearchController::class, 'show'])->name('admin-research-show')->middleware('auth');

// U - for Update
Route::get('/admin/research/edit/{id}', [ResearchController::class, 'edit'])->name('admin-research-edit')->middleware('auth');
Route::post('/admin/research/update/{id}', [ResearchController::class, 'update'])->name('admin-research-update')->middleware('auth');

// D - for Delete
Route::get('/admin/research/delete/{id}', [ResearchController::class, 'destroy'])->name('admin-research-delete')->middleware('auth');
// RESEARCH - END

// SERVICES - START
// C - for Create
Route::get('/admin/services/create', [ServiceController::class, 'create'])->name('admin-services-create')->middleware('auth');
Route::post('/admin/services/store', [ServiceController::class, 'store'])->name('admin-services-store')->middleware('auth');

// R - for Read
Route::get('/admin/services/index', [ServiceController::class, 'index'])->name('admin-services-index')->middleware('auth');
Route::get('/admin/services/show/{id}', [ServiceController::class, 'show'])->name('admin-services-show')->middleware('auth');

// U - for Update
Route::get('/admin/services/edit/{id}', [ServiceController::class, 'edit'])->name('admin-services-edit')->middleware('auth');
Route::post('/admin/services/update/{id}', [ServiceController::class, 'update'])->name('admin-services-update')->middleware('auth');

// D - for Delete
Route::get('/admin/services/delete/{id}', [ServiceController::class, 'destroy'])->name('admin-services-delete')->middleware('auth');
// SERVICES - END
// ADMIN - END
