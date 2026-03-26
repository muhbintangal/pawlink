<?php

use App\Http\Controllers\User\PetController;
use App\Http\Controllers\User\AdoptionController;
use App\Http\Controllers\User\DonationController;
use App\Http\Controllers\User\EduCenterController;
Route::get('/', [PetController::class, 'index']);
Route::get('/', function () {
    return view('home'); 
});

Route::get('/about', function () {
    return view('about.index');
});

Route::get('/adoption', [PetController::class, 'index']);

Route::get('/donation', function () {
    return view('donation.index');
});

Route::get('/edu', [EduCenterController::class, 'index'])->name('edu.index');

Route::get('/edu/{id}', [EduCenterController::class, 'show'])->name('edu.show');

Route::get('/contact', function () {
    return view('contact.index');
});

Route::get('/pets', [PetController::class, 'index']);
Route::get('/pets/{id}', [PetController::class, 'show']);

Route::post('/adopt', [AdoptionController::class, 'store']);
Route::post('/donate', [DonationController::class, 'store']);
Route::get('/adoption/form', function () {
    return view('adoption.form');
});

// Pastikan ada bagian ->name('pets.index') di akhir rute
Route::get('/pets', [PetController::class, 'index'])->name('pets.index');

Route::post('/proses-donasi', [DonationController::class, 'store'])->name('donasi.store');