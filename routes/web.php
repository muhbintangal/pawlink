<?php

use Illuminate\Support\Facades\Route;
// Pastikan pemanggilan namespace ini sesuai dengan lokasi file aslinya
use App\Http\Controllers\User\PetController;
use App\Http\Controllers\User\AdoptionController;
use App\Http\Controllers\User\DonationController;
use App\Http\Controllers\User\EduCenterController;

// 1. Halaman Home (Gabungkan rute agar data muncul di home)
Route::get('/', [PetController::class, 'index'])->name('home');

// 2. Halaman Statis
Route::get('/about', function () {
    return view('about.index');
})->name('about');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');

// 3. Halaman Pets & Adoption
Route::get('/pets', [PetController::class, 'index'])->name('pets.index');
Route::get('/pets/{id}', [PetController::class, 'show'])->name('pets.show');
Route::get('/adoption', [PetController::class, 'index'])->name('adoption.index');
Route::get('/adoption/form', function () {
    return view('adoption.form');
})->name('adoption.form');

// 4. Halaman Edu Center
Route::get('/edu', [EduCenterController::class, 'index'])->name('edu.index');
Route::get('/edu/{id}', [EduCenterController::class, 'show'])->name('edu.show');

// 5. Halaman & Proses Donasi
Route::get('/donation', function () {
    return view('donation.index');
})->name('donation.index');

// Rute POST untuk Form
Route::post('/adopt', [AdoptionController::class, 'store'])->name('adopt.store');
Route::post('/donate', [DonationController::class, 'store'])->name('donate.store');
Route::post('/proses-donasi', [DonationController::class, 'store'])->name('donasi.store');