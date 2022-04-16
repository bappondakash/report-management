<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DesignationController;
use App\Http\Controllers\Acland\AclandController;
use App\Http\Controllers\Basic\UserController;
use App\Http\Controllers\Office\DivisionalOfficeController;
use App\Http\Controllers\Location\DivisionController;
use App\Http\Controllers\Location\DistricController;
use App\Http\Controllers\Location\UpazilaController;
use App\Http\Controllers\Basic\DropdownController;
use App\Http\Controllers\Basic\FiscalYearController;
use App\Http\Controllers\Basic\MonthController;
use App\Http\Controllers\Office\DistricOfficeController;
use App\Http\Controllers\Office\UpazilaOfficeController;
use App\Http\Controllers\Basic\ReportTypeController;
use App\Http\Controllers\Basic\ReportController;

Route::get('/', [UserController::class, 'login'])->name('user.login');
Route::post('/dashboard/login', [UserController::class, 'checkDetails'])->name('user.login.check');

Route::get('get-divisions', [DropdownController::class, 'index']);
Route::post('fetch-districs', [DropdownController::class, 'fetchDistrics']);
Route::post('fetch-upazilas', [DropdownController::class, 'fetchUpazilas']);
Route::post('fetch-division-offices', [DropdownController::class, 'fetchDivisionOffices']);
Route::post('fetch-distric-offices', [DropdownController::class, 'fetchDistricOffices']);
Route::post('fetch-upazila-offices', [DropdownController::class, 'fetchUpazilaOffices']);

// all link for admin dashboard
Route::prefix('admin')->name('admin.')->middleware('admin')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::get('/update-profile', [AdminController::class, 'updateProfile'])->name('update.profile');
    Route::post('/update-profile', [AdminController::class, 'updateProfileStore'])->name('update.profile.store');
    Route::get('create/user', [AdminController::class, 'createUser'])->name('create.user');
    Route::post('create/user', [AdminController::class, 'store'])->name(('create.user.store'));
    Route::get('all/users', [AdminController::class, 'allUsers'])->name('users');
    Route::resource('designations', DesignationController::class);
    Route::get('designation/{id}/delete', [DesignationController::class, 'delete'])->name('delete.designation');
    Route::resource('divisions', DivisionController::class);
    Route::get('divisions/{id}/delete', [DivisionController::class, 'delete'])->name('delete.division');
    Route::resource('districs', DistricController::class);
    Route::get('/districs/{id}/delete', [DistricController::class, 'delete'])->name('delete.distric');
    Route::resource('upazila', UpazilaController::class);
    Route::get('upazila/{id}/delete', [UpazilaController::class, 'delete'])->name('delete.upazila');
    Route::resource('fiscal-years', FiscalYearController::class);
    Route::get('fiscal-years/{id}/delete', [FiscalYearController::class, 'delete'])->name('delete.fiscal.year');
    Route::resource('months', MonthController::class);
    Route::get('month/{id}/delete', [MonthController::class, 'delete'])->name('delete.month');
    Route::resource('divisional-offices', DivisionalOfficeController::class);
    Route::get('divisional-offices/{id}/delete', [DivisionalOfficeController::class, 'delete'])->name('delete.divisional.office');
    Route::resource('distric-offices', DistricOfficeController::class);
    Route::get('/distric-offices/{id}/delete', [DistricOfficeController::class, 'delete'])->name('delete.distric.office');
    Route::resource('upazila-offices', UpazilaOfficeController::class);
    Route::get('upazila-offices/{id}/delete', [UpazilaOfficeController::class, 'delete'])->name('delete.upazila.office');
    Route::resource('report-type', ReportTypeController::class);
    Route::get('report-type/{id}/delete', [ReportTypeController::class, 'delete']);
});

// all link for acland dashboard
Route::prefix('acland')->name('acland.')->middleware('acland')->group(function() {
    Route::get('/dashboard', [AclandController::class, 'index'])->name('dashboard');
    Route::get('/update-profile', [AclandController::class, 'updateProfile'])->name('update.profile');
    Route::post('/update-profile', [AclandController::class, 'updateProfileStore'])->name('update.profile.store');

    Route::get('/report-initial', [AclandController::class, 'reportInitial'])->name('report.initial');
    Route::post('/report-initial', [AclandController::class, 'reportInitialPost'])->name('report.initial.post');
    Route::get('/report-detail-informations', [AclandController::class, 'reportDetail'])->name('report.detail');
    Route::post('/report-detail-informations', [AclandController::class, 'reportDetailPost'])->name('report.detail.post');
    Route::get('/report-detail-preview', [AclandController::class, 'reportDetailPreview'])->name('report.detail.preview');
    Route::post('/report-detail-preview', [AclandController::class, 'reportDetailPreviewPost'])->name('report.detail.preview.post');
    Route::get('/report-save', [AclandController::class, 'reportSave'])->name('report.save');
    Route::post('/report-save', [AclandController::class, 'reportSavePost'])->name('report.save.post');

    Route::get('pending-reports', [AclandController::class, 'pendingReport'])->name('pending.report');
    Route::get('/logout', [AclandController::class, 'logout'])->name('logout');
});

require __DIR__.'/auth.php';
