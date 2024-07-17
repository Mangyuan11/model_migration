<?php

use Illuminate\Support\Facades\Route;
use App\Http\COntrollers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', StudentController::class);
