<?php
use App\Http\Controllers\servicesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SyController;
use App\Http\Controllers\StudentManagementController;
use App\Http\Controllers\issuecertController;
use App\Http\Controllers\principalController;
use App\Http\Controllers\CertificateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::resource('student', StudentManagementController::class)->except(['store']);
Route::post('student', [StudentManagementController::class, 'store'])->name('student.store');

Route::resource('schools', SchoolController::class)->except(['store']);
Route::post('schools', [SchoolController::class, 'store'])->name('schools.store');
Route::put('schools/{school}', [SchoolController::class, 'update'])->name('schools.update');
Route::get('schools', [SchoolController::class, 'index'])->name('schools.index');

Route::resource('syear', SyController::class)->except(['store']);
Route::post('syear', [SyController::class, 'store'])->name('syear.store');

Route::resource('issued', issuecertController::class)->except(['store']);
Route::post('issued', [issuecertController::class, 'store'])->name('issued.store');

Route::get('services', [servicesController::class, 'index'])->name('services.index');

Route::resource('principals', principalController::class)->except(['store']);
Route::post('principals', [principalController::class, 'store'])->name('principals.store');
Route::get('principals/{principal}', [principalController::class, 'show'])->name('principals.show');

// Route::get('/generate-certificate', 'CertificateController@generate');

Route::get('certificate/enrollment', 'CertificateController@enrollment')->name('certificate.enrollment');
Route::get('certificate/honor', 'CertificateController@honor')->name('certificate.honor');

Route::post('generate-certificates', 'CertificateController@generateCertificates')->name('generate.certificates');
Route::post('/generate-certificates', [CertificateController::class, 'generateCertificates'])->name('generate.certificates');

// Export route
Route::get('/export-data', [StudentManagementController::class, 'exportData'])->name('export.data');

require __DIR__.'/auth.php';
