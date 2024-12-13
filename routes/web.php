<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminSkillController;
use App\Http\Controllers\AdminCertificateController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\AdminContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/', [dashboardController::class, 'index'])->name('index');

Route::resource('/admin/home', AdminHomeController::class);
Route::resource('/admin/about', AdminAboutController::class);
Route::resource('/admin/skill', AdminSkillController::class);
Route::resource('/admin/certificate', AdminCertificateController::class);
Route::resource('/admin/project', AdminProjectController::class);
Route::resource('/admin/contact', AdminContactController::class);


Route::post('/index', [dashboardController::class, 'store'])->name('contact.store');
Route::get('/about', [YourController::class, 'about'])->name('about');



require __DIR__.'/auth.php';
