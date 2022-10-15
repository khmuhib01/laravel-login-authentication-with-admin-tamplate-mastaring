<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard',  [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/student/index',  [StudentController::class, 'index'])->name('admin.student.index');
    Route::get('/student/create',  [StudentController::class, 'create'])->name('admin.student.create');
    Route::get('/student/edit/{id}',  [StudentController::class, 'edit'])->name('admin.student.edit');
    Route::post('/student/store',  [StudentController::class, 'store'])->name('admin.student.store');
    Route::put('/student/update/{id}',  [StudentController::class, 'update'])->name('admin.student.update');
    Route::get('/student/delete/{id}',  [StudentController::class, 'delete'])->name('admin.student.delete');
});


