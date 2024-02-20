<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(StudentController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
});
