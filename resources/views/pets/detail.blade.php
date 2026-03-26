@extends('layouts.app')

@section('content')

<div class="max-w-5xl mx-auto py-16 px-6">

    <div class="grid md:grid-cols-2 gap-10">

        <!-- IMAGE -->
        <img src="{{ $pet->image ?: 'https://via.placeholder.com/400' }}"
             class="rounded-2xl shadow-lg">

        <!-- INFO -->
        <div>
            <h2 class="text-3xl font-bold">{{ $pet->name }}</h2>

            <p class="text-gray-500 mt-2">
                {{ $pet->type }} • {{ $pet->gender }}
            </p>

            <p class="mt-2 text-gray-600">
                Umur: {{ $pet->age }} tahun
            </p>

            <p class="mt-2 text-gray-600">
                Lokasi: {{ $pet->location ?? 'Jakarta' }}
            </p>

            <p class="mt-4 text-gray-600">
                {{ $pet->description }}
            </p>

            <!-- STATUS -->
            <span class="inline-block mt-4 px-4 py-1 rounded-full
                {{ $pet->status == 'urgent' ? 'bg-red-100 text-red-600' : 'bg-green-100 text-green-600' }}">
                {{ $pet->status == 'urgent' ? 'Urgent' : 'Ready to Adopt' }}
            </span>

            <!-- BUTTON -->
            <a href="/adoption/form?pet_id={{ $pet->id }}"
               class="block mt-6 bg-orange-500 text-white px-6 py-3 rounded-lg text-center">
               Ajukan Adopsi
            </a>
        </div>

    </div>

</div>

@endsection