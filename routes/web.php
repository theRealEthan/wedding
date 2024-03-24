<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::post('/save-data', [YourController::class, 'saveData'])->name('save.data');

