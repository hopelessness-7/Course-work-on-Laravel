<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\SubjectsController;
use App\Http\Controllers\Admin\BallController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Student\StatementController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Admin\TableScheduleController;
use App\Http\Controllers\Student\StudentScheduleController;
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
    return view('auth.login');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index']);
    Route::resource('students', StudentController::class);
    Route::resource('teachers', TeacherController::class);
    Route::resource('subjects', SubjectsController::class);
    Route::resource('balls', BallController::class);
    Route::resource('users', UserController::class);
    Route::resource('schedules', TableScheduleController::class);
    Route::get('upload-file', [ScheduleController::class, 'createForm']);
    Route::post('upload-file', [ScheduleController::class, 'fileUpload'])->name('fileUpload');
});


Route::middleware(['role:student',])->prefix('student')->group(function () {
    Route::get('/', [App\Http\Controllers\Student\HomeController::class, 'index']);
    Route::resource('statement', StatementController::class);
    Route::resource('studentSchedules', StudentScheduleController::class);
});
