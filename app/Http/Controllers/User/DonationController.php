<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'amount' => 'required|numeric|min:10000',
            'payment' => 'required',
            'campaign' => 'required'
        ]);

        // 2. Simpan ke Database
        $donation = Donation::create([
            'campaign_name' => $request->campaign,
            'amount' => $request->amount,
            'payment_method' => $request->payment,
            'status' => 'pending', // Default
        ]);

        // 3. Redirect ke halaman "Terima Kasih" atau "Instruksi Pembayaran"
        // Di sini biasanya Anda mengintegrasikan payment gateway seperti Midtrans
        return redirect()->back()->with('success', 'Terima kasih! Pesanan donasi Anda sebesar Rp ' . number_format($request->amount) . ' telah dibuat.');
    }
}
