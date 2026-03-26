<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdoptionRequest;

class AdoptionController extends Controller
{
    public function store(Request $request)
    {
        // VALIDASI
        $request->validate([
            'pet_id' => 'required',
            'name' => 'required',
            'nik' => 'required',
            'address' => 'required',
            'contact' => 'required',
        ]);

        // SIMPAN DATA
        AdoptionRequest::create([
            'pet_id' => $request->pet_id,
            'name' => $request->name,
            'nik' => $request->nik,
            'address' => $request->address,
            'contact' => $request->contact,
            'experience' => $request->experience,
            'status' => 'pending'
        ]);

        return redirect('/')->with('success', 'Pengajuan berhasil!');
    }
}