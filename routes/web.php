<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});
Route::resource("/student", StudentController::class);
Route::resource("/teacher", TeacherController::class);
Route::resource('/course', CourseController::class);

