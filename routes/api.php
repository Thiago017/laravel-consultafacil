<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\ClinicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('login', [LoginController::class, 'login'])->name('login');

//Clinic
Route::get('clinic/{id}', [ClinicController::class, 'findById'])->name('clinic.findById');
Route::post('clinic', [ClinicController::class, 'create'])->name('clinic.create');
