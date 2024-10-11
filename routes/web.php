<?php

use App\Http\Controllers\AgendaMedicaController;
use App\Http\Controllers\CitaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use App\Livewire\Counter;

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

Route::get('Dashboard/index', [CustomAuthController::class, 'dashboard']); 
Route::get('Pages/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('Pages/register', [CustomAuthController::class, 'registration'])->name('register');
Route::post('custom-register', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


Route::get('/', function () {
    return view('Dashboard/index');
})->name('index');

Route::get('/doctor-dashboard', function () {
    return view('Dashboard/doctor-dashboard');
})->name('doctor-dashboard');

Route::get('/patient-dashboard', function () {
    return view('Dashboard/patient-dashboard');
})->name('patient-dashboard');

Route::get('/doctors', function () {
    return view('Doctors/doctors');
})->name('doctors');

Route::get('/add-doctor', function () {
    return view('Doctors/add-doctor');
})->name('add-doctor');

Route::get('/edit-doctor', function () {
    return view('Doctors/edit-doctor');
})->name('edit-doctor');

Route::get('/doctor-profile', function () {
    return view('Doctors/doctor-profile');
})->name('doctor-profile');

Route::get('/doctor-setting', function () {
    return view('Doctors/doctor-setting');
})->name('doctor-setting');

// Route::get('/patients', function () {
//     return view('Patients/patients');
// })->name('patients');
Route::get('patients', [PacienteController::class,'index'])->name('patients.index');
Route::get('/add-patient', function () {
    return view('Patients/add-patient');
})->name('add-patient');


Route::get('patients/create', [PacienteController::class,'create'])->name('add-patient');
Route::post('patients/store', [PacienteController::class,'store'])->name('add-patient');
Route::get('patients/edit/{patient}', [PacienteController::class,'edit'])->name('edit-patient');
Route::post('patients/update/{patient}', [PacienteController::class,'update'])->name('update-patient');
Route::get('patients/show/{patient}', [PacienteController::class,'show'])->name('show-patient');
Route::get('patients/delete/{doctor}', [PacienteController::class,'delete']);
Route::post('/search-appointments', [PacienteController::class, 'search']);
Route::get('/patients/search', [PacienteController::class, 'search']);

Route::get('/counter', Counter::class);

Route::get('doctors', [MedicoController::class,'index'])->name('doctors.index');
Route::get('doctors/edit/{doctor}', [MedicoController::class,'edit'])->name('edit-doctor');
Route::get('doctors/create', [MedicoController::class,'create'])->name('add-doctor');
Route::post('doctors/update/{doctor}', [MedicoController::class,'update'])->name('update-doctor');
Route::post('doctors/store/', [MedicoController::class,'store'])->name('add-doctor');
Route::get('doctors/show/{doctors}', [MedicoController::class,'show'])->name('show-doctor');
Route::get('doctors/delete/{doctor}', [MedicoController::class,'delete']);

Route::get('/add-appointment', function () {
    return view('Appointments/add-appointment');
})->name('add-patient');
Route::get('/appointments', [CitaController::class,'index'])->name('appointments.index');
Route::get('/appointments/create', [CitaController::class,'create'])->name('add-appointment');
Route::get('appointments/edit/{cita}', [CitaController::class,'edit'])->name('edit-appointment');
Route::post('appointments/update/{cita}', [CitaController::class,'update'])->name('update-appointment');
Route::post('appointments/store/', [CitaController::class,'store'])->name('add-appointment');
Route::get('appointments/show/{cita}', [CitaController::class,'show'])->name('show-appointment');
Route::get('appointments/delete/{cita}', [CitaController::class,'delete']);

Route::get('/add-schedule', function () {
    return view('Doctorschedule/add-schedule');
})->name('add-schedule');
Route::get('/schedule', [AgendaMedicaController::class,'index'])->name('schedule.index');
Route::get('/schedule/create', [AgendaMedicaController::class,'create'])->name('schedule.create');
Route::get('schedule/edit/{cita}', [AgendaMedicaController::class,'edit'])->name('edit-schedule');
Route::post('schedule/update/{cita}', [AgendaMedicaController::class,'update'])->name('update-appointment');
Route::post('schedule/store/', [AgendaMedicaController::class,'store'])->name('add-appointment');
Route::get('schedule/show/{cita}', [AgendaMedicaController::class,'show'])->name('show-appointment');
Route::get('schedule/delete/{cita}', [AgendaMedicaController::class,'delete']);

// Route::get('/add-patient', function () {
//     return view('Patients/add-patient');
// })->name('add-patient');

// Route::get('/edit-patient', function () {
//     return view('Patients/edit-patient');
// })->name('edit-patient');

// Route::get('/patient-profile', function () {
//     return view('Patients/patient-profile');
// })->name('patient-profile');

// Route::get('/patient-setting', function () {
//     return view('Patients/patient-setting');
// })->name('patient-setting');


// Route::get('/appointments', function () {
//     return view('Appointments/appointments');
// })->name('appointments');



// Route::get('/edit-appointment', function () {
//     return view('Appointments/edit-appointment');
// })->name('edit-appointment');

// Route::get('/schedule', function () {
//     return view('Doctorschedule/schedule');
// })->name('schedule');

// Route::get('/add-schedule', function () {
//     return view('Doctorschedule/add-schedule');
// })->name('add-schedule');

// Route::get('/edit-schedule', function () {
//     return view('Doctorschedule/edit-schedule');
// })->name('edit-schedule');

Route::get('/departments', function () {
    return view('Departments/departments');
})->name('departments');

Route::get('/add-department', function () {
    return view('Departments/add-department');
})->name('add-department');

Route::get('/edit-department', function () {
    return view('Departments/edit-department');
})->name('edit-department');

Route::get('/add-invoice', function () {
    return view('Invoice/add-invoice');
})->name('add-invoice');

Route::get('/edit-invoice', function () {
    return view('Accounts/edit-invoice');
})->name('edit-invoice');

Route::get('/edit-invoices', function () {
    return view('Invoice/edit-invoices');
})->name('edit-invoices');

Route::get('/invoice-reports', function () {
    return view('Reports/invoice-reports');
})->name('invoice-reports');

Route::get('/invoice-view', function () {
    return view('Invoice/invoice-view');
})->name('invoice-view');

Route::get('/invoices-cancelled', function () {
    return view('Invoice/invoices-cancelled');
})->name('invoices-cancelled');

Route::get('/invoices-draft', function () {
    return view('Invoice/invoices-draft');
})->name('invoices-draft');

Route::get('/invoices-grid', function () {
    return view('Invoice/invoices-grid');
})->name('invoices-grid');

Route::get('/invoices-list', function () {
    return view('Invoice/invoices-list');
})->name('invoices-list');

Route::get('/invoices-overdue', function () {
    return view('Invoice/invoices-overdue');
})->name('invoices-overdue');

Route::get('/invoices-paid', function () {
    return view('Invoice/invoices-paid');
})->name('invoices-paid');

Route::get('/invoices-recurring', function () {
    return view('Invoice/invoices-recurring');
})->name('invoices-recurring');

Route::get('/invoices-settings', function () {
    return view('Invoice/invoices-settings');
})->name('invoices-settings');

Route::get('/invoices', function () {
    return view('Accounts/invoices');
})->name('invoices');

Route::get('/view-invoice', function () {
    return view('Invoice/view-invoice');
})->name('view-invoice');

Route::get('/settings', function () {
    return view('Settings/settings');
})->name('settings');

Route::get('/setting', function () {
    return view('setting');
})->name('setting');

Route::get('/payments', function () {
    return view('Accounts/payments');
})->name('payments');

Route::get('/expenses', function () {
    return view('Accounts/expenses');
})->name('expenses');

Route::get('/taxes', function () {
    return view('Accounts/taxes');
})->name('taxes');

Route::get('/provident-fund', function () {
    return view('Accounts/provident-fund');
})->name('provident-fund');

Route::get('/expense-reports', function () {
    return view('Reports/expense-reports');
})->name('expense-reports');

Route::get('/tax-settings', function () {
    return view('Invoice/tax-settings');
})->name('tax-settings');

Route::get('/add-provident-fund', function () {
    return view('Accounts/add-provident-fund');
})->name('add-provident-fund');

Route::get('/edit-provident-fund', function () {
    return view('Accounts/edit-provident-fund');
})->name('edit-provident-fund');

Route::get('/payment-settings', function () {
    return view('Settings/payment-settings');
})->name('payment-settings');

Route::get('/add-payment', function () {
    return view('Accounts/add-payment');
})->name('add-payment');

Route::get('/edit-payment', function () {
    return view('Accounts/edit-payment');
})->name('edit-payment');

Route::get('/salary', function () {
    return view('Payroll/salary');
})->name('salary');

Route::get('/salary-view', function () {
    return view('Payroll/salary-view');
})->name('salary-view');

Route::get('/chat', function () {
    return view('chat');
})->name('chat');

Route::get('/voice-call', function () {
    return view('Calls/voice-call');
})->name('voice-call');

Route::get('/video-call', function () {
    return view('Calls/video-call');
})->name('video-call');

Route::get('/incoming-call', function () {
    return view('Calls/incoming-call');
})->name('incoming-call');

Route::get('/compose', function () {
    return view('Email/compose');
})->name('compose');

Route::get('/inbox', function () {
    return view('Email/inbox');
})->name('inbox');

Route::get('/mail-view', function () {
    return view('Email/mail-view');
})->name('mail-view');

Route::get('/blog', function () {
    return view('Blog/blog');
})->name('blog');

Route::get('/blog-details', function () {
    return view('Blog/blog-details');
})->name('blog-details');

Route::get('/add-blog', function () {
    return view('Blog/add-blog');
})->name('add-blog');

Route::get('/edit-blog', function () {
    return view('Blog/edit-blog');
})->name('edit-blog');

Route::get('/asset', function () {
    return view('Asset/asset');
})->name('asset');

Route::get('/activities', function () {
    return view('activities');
})->name('activities');

Route::get('/bank-settings', function () {
    return view('Invoice/bank-settings');
})->name('bank-settings');

Route::get('/localization-details', function () {
    return view('Settings/localization-details');
})->name('localization-details');

Route::get('/email-settings', function () {
    return view('Settings/email-settings');
})->name('email-settings');

Route::get('/social-settings', function () {
    return view('Settings/social-settings');
})->name('social-settings');

Route::get('/social-links', function () {
    return view('Settings/social-links');
})->name('social-links');

Route::get('/seo-settings', function () {
    return view('Settings/seo-settings');
})->name('seo-settings');

Route::get('/theme-settings', function () {
    return view('Settings/theme-settings');
})->name('theme-settings');

Route::get('/change-password', function () {
    return view('Settings/change-password');
})->name('change-password');

Route::get('/others-settings', function () {
    return view('Settings/others-settings');
})->name('others-settings');

Route::get('/change-password2', function () {
    return view('Pages/change-password2');
})->name('change-password2');

Route::get('/uikit', function () {
    return view('Uielements/uikit');
})->name('uikit');

Route::get('/typography', function () {
    return view('Uielements/typography');
})->name('typography');

Route::get('/tables-datatables', function () {
    return view('Tables/tables-datatables');
})->name('tables-datatables');

Route::get('/tables-basic', function () {
    return view('Tables/tables-basic');
})->name('tables-basic');

Route::get('/tabs', function () {
    return view('Uielements/tabs');
})->name('tabs');

Route::get('/register', function () {
    return view('Pages/register');
})->name('register');

Route::get('/profile', function () {
    return view('Pages/profile');
})->name('profile');

Route::get('/lock-screen', function () {
    return view('Pages/lock-screen');
})->name('lock-screen');

Route::get('/login', function () {
    return view('Pages/login');
})->name('login');

Route::get('/gallery', function () {
    return view('Pages/gallery');
})->name('gallery');

Route::get('/form-vertical', function () {
    return view('Forms/form-vertical');
})->name('form-vertical');

Route::get('/form-input-groups', function () {
    return view('Forms/form-input-groups');
})->name('form-input-groups');

Route::get('/form-horizontal', function () {
    return view('Forms/form-horizontal');
})->name('form-horizontal');

Route::get('/form-basic-inputs', function () {
    return view('Forms/form-basic-inputs');
})->name('form-basic-inputs');

Route::get('/forgot-password', function () {
    return view('Pages/forgot-password');
})->name('forgot-password');

Route::get('/error-404', function () {
    return view('Pages/error-404');
})->name('error-404');

Route::get('/error-500', function () {
    return view('Pages/error-500');
})->name('error-500');

Route::get('/edit-tax', function () {
    return view('Accounts/edit-tax');
})->name('edit-tax');

Route::get('/edit-salary', function () {
    return view('Payroll/edit-salary');
})->name('edit-salary');

Route::get('/edit-profile', function () {
    return view('Pages/edit-profile');
})->name('edit-profile');

Route::get('/edit-expense', function () {
    return view('Accounts/edit-expense');
})->name('edit-expense');

Route::get('/edit-asset', function () {
    return view('Asset/edit-asset');
})->name('edit-asset');

Route::get('/create-invoice', function () {
    return view('Accounts/create-invoice');
})->name('create-invoice');

Route::get('/confirm-mail', function () {
    return view('confirm-mail');
})->name('confirm-mail');

Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('/blank-page', function () {
    return view('Pages/blank-page');
})->name('blank-page');

Route::get('/add-tax', function () {
    return view('Accounts/add-tax');
})->name('add-tax');

Route::get('/add-salary', function () {
    return view('Payroll/add-salary');
})->name('add-salary');

Route::get('/add-leave', function () {
    return view('Staff/add-leave');
})->name('add-leave');

Route::get('/add-expense', function () {
    return view('Accounts/add-expense');
})->name('add-expense');

Route::get('/add-asset', function () {
    return view('Asset/add-asset');
})->name('add-asset');