<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowVideoController;


Route::get('/', [ShowVideoController::class,'category']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/library', [ShowVideoController::class,'showlib']);

Route::get('/videoEditing', [ShowVideoController::class,'showvideo']);

Route::get('/webdevelopment', [ShowVideoController::class,'webvideo']);

Route::get('/basicComputing',[ShowVideoController::class,'basicvideo']);

Route::get('/graphicDesign',[ShowVideoController::class,'graphicvideo']);

Route::get('/freecourse',[ShowVideoController::class,'freevideo']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/curriculum', function () {
    return view('curriculum');
});

Route::get('/register', [StudentsController::class,'register'])->name('register');
Route::post('/register', [StudentsController::class,'students'])->name('student.register');

Route::get('/welcome', function () {
    return view('welcome');
});
