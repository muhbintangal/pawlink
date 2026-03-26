<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    public function index(Request $request)
{
    // 1. Ambil input dari form
    $search = $request->input('search');
    $type = $request->input('type');
    $gender = $request->input('gender');

    // 2. Query dasar
    $query = Pet::query();

    // 3. Filter berdasarkan Nama atau Lokasi
    if ($search) {
        $query->where(function($q) use ($search) {
            $q->where('name', 'like', "%{$search}%")
              ->orWhere('location', 'like', "%{$search}%");
        });
    }

    // 4. Filter berdasarkan Jenis (Kucing/Anjing)
    if ($type && $type !== 'Semua Jenis') {
        $query->where('type', $type);
    }

    // 5. Filter berdasarkan Gender
    if ($gender && $gender !== 'Semua Gender') {
        $query->where('gender', $gender);
    }

    // 6. Ambil hasil akhirnya
    $pets = $query->get();

    return view('pets.index', compact('pets'));
}

    public function show($id)
    {
        $pet = Pet::findOrFail($id);
        return view('pets.detail', compact('pet'));
    }
}