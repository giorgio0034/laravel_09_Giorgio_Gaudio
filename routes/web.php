<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::post('/trainee/create',[CourseController::class,'signup'])->name('trainee.signup');
Route::get('/trainee/list',[CourseController::class,'list'])->name('trainee.list');

