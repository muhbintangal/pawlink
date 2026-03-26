<?php

use Illuminate\Support\Facades\Route;

// 1. Halaman Home
Route::get('/', function () {
    return view('home'); 
})->name('home');

// 2. Halaman About
Route::get('/about', function () {
    return view('about.index');
})->name('about');

// 3. Halaman Adoption (Diubah ke view langsung)
Route::get('/adoption', function () {
    return view('adoption.index'); // Pastikan file ini ada di resources/views/adoption/index.blade.php
})->name('adoption.index');

Route::get('/adoption/form', function () {
    return view('adoption.form');
})->name('adoption.form');

// 4. Halaman Edu Center
Route::get('/edu', function () {
    return view('edu.index'); // Pastikan file ini ada
})->name('edu.index');

// 5. Halaman Donation
Route::get('/donation', function () {
    return view('donation.index');
})->name('donation.index');

// 6. Halaman Contact
Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');

// 7. Halaman Pets (Halaman list hewan, diarahkan ke view)
Route::get('/pets', function () {
    return view('pets.index');
})->name('pets.index');