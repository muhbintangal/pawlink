@extends('layouts.app')

@section('content')

<div class="max-w-xl mx-auto py-16 px-6">

    <h2 class="text-3xl font-bold mb-6">Form Adopsi</h2>

    <form action="/adopt" method="POST" class="bg-white p-6 rounded-2xl shadow space-y-4">
        @csrf

        <input type="hidden" name="pet_id" value="{{ request('pet_id') }}">

        <input type="text" name="name" placeholder="Nama Lengkap"
            class="w-full border p-3 rounded-lg" required>

        <input type="text" name="nik" placeholder="NIK"
            class="w-full border p-3 rounded-lg" required>

        <textarea name="address" placeholder="Alamat"
            class="w-full border p-3 rounded-lg" required></textarea>

        <input type="text" name="contact" placeholder="No HP / Email"
            class="w-full border p-3 rounded-lg" required>

        <textarea name="experience" placeholder="Pengalaman memelihara (opsional)"
            class="w-full border p-3 rounded-lg"></textarea>

        <button class="w-full bg-orange-500 text-white py-3 rounded-lg hover:bg-orange-600 transition">
            Kirim Pengajuan
        </button>
    </form>

</div>

@endsection