<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return "Trang chủ Laravel";
});

Route::get('/students/create', [StudentController::class, 'create']);
Route::post('/students/store', [StudentController::class, 'store']);
