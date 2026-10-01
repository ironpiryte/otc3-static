<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Artisan::call('storage:link');
Route::get('/', [HomeController::class, 'index']);

Route::get('/cybersecurity-community-clinic', function () {
    return view('cyber-clinic');
})->name('cyber-clinic');

Route::post('/cybersecurity-community-clinic/inquiry', [CyberClinicController::class, 'submitInquiry'])
    ->name('cyber-clinic.inquiry');
