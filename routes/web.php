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

// Home Route
Route::get('/', function () {
    return view('home'); // Pointing to your home view
})->name('home');

// Other routes
Route::get('/about', function () {
    return view('about');
})->name('about');
// Other routes
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/jobs', function () {
    return view('jobs');
})->name('jobs');
Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ProjectController;


// Experience Routes
Route::get('experiences', [ExperienceController::class, 'index'])->name('experiences.index');
Route::get('experiences/create', [ExperienceController::class, 'create'])->name('experiences.create');
Route::post('experiences', [ExperienceController::class, 'store'])->name('experiences.store');
Route::get('experiences/{experience}', [ExperienceController::class, 'show'])->name('experiences.show');
Route::get('experiences/{experience}/edit', [ExperienceController::class, 'edit'])->name('experiences.edit');
Route::put('experiences/{experience}', [ExperienceController::class, 'update'])->name('experiences.update');
Route::delete('experiences/{experience}', [ExperienceController::class, 'destroy'])->name('experiences.destroy');

// Education Routes
Route::get('educations', [EducationController::class, 'index'])->name('educations.index');
Route::get('educations/create', [EducationController::class, 'create'])->name('educations.create');
Route::post('educations', [EducationController::class, 'store'])->name('educations.store');
Route::get('educations/{education}', [EducationController::class, 'show'])->name('educations.show');
Route::get('educations/{education}/edit', [EducationController::class, 'edit'])->name('educations.edit');
Route::put('educations/{education}', [EducationController::class, 'update'])->name('educations.update');
Route::delete('educations/{education}', [EducationController::class, 'destroy'])->name('educations.destroy');

// Project Routes
Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('projects', [ProjectController::class, 'store'])->name('projects.store');
Route::get('projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
Route::put('projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
Route::delete('projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');

use App\Http\Controllers\AdminController;
    Route::middleware(['auth', 'role:admin'])->group(function () {
       
        Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
        Route::get('/admin/users/create', [AdminController::class, 'createUser'])->name('admin.users.create');
        Route::post('/admin/users/store', [AdminController::class, 'storeUser'])->name('admin.users.store');
        Route::get('/admin/users/edit/{id}', [AdminController::class, 'editUser'])->name('admin.users.edit');
        Route::post('/admin/users/update/{id}', [AdminController::class, 'updateUser'])->name('admin.users.update');
        Route::delete('/admin/users/delete/{id}', [AdminController::class, 'deleteUser'])->name('admin.users.delete');
    });
    use App\Http\Controllers\Auth\LoginController;


Route::get('/admin/login', function () {
    return view('admin-login');
})->name('admin.login');

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

use App\Http\Controllers\AboutController;

Route::get('/about', [AboutController::class, 'index'])->name('about');


use App\Http\Controllers\Admin\DashboardController;


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});
use App\Http\Controllers\ResumeController;

Route::resource('resumes', ResumeController::class);
use App\Http\Controllers\ContactController;

Route::resource('contacts', ContactController::class);
Route::get('/contact', [ContactController::class, 'display'])->name('contact');
use App\Http\Controllers\HomeController;
// Routes/web.php
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


use App\Http\Controllers\InquiryController;
Route::post('/inquiry', [InquiryController::class, 'submit'])->name('inquiry.submit');
