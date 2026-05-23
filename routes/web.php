<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    //student management
    Route::get('students', [\App\Http\Controllers\studentmngtController::class, 'index'])->name('student.index');
    route::get('students/create', [\App\Http\Controllers\studentmngtController::class, 'create'])->name('student.create');

    //employee management
    Route::resource('employee', \App\Http\Controllers\EmployeeController::class);
    route::get('employee/create', [\App\Http\Controllers\EmployeeController::class, 'create'])->name('employee.create');
    route::get('employee/{id}/edit', [\App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit');
    route::delete('employee/{id}', [\App\Http\Controllers\EmployeeController::class, 'destroy'])->name('employee.destroy');
    route::get('employee/{id}', [\App\Http\Controllers\EmployeeController::class, 'show'])->name('employee.show');
    route::put('employee/{id}', [\App\Http\Controllers\EmployeeController::class, 'update'])->name('employee.update');
    route::post('employee', [\App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
