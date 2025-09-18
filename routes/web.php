<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return redirect()->route('students.index');
});

Route::resource('students', StudentController::class)->only(['index']);
Route::resource('courses', CourseController::class)->only(['index']);
