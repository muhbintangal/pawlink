@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-gradient-to-r from-[#f3f4f6] to-[#e5f4ef] py-20 px-10 mt-5">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">

        <!-- TEXT -->
        <div>
            <h1 class="text-5xl font-bold leading-tight">
                Beri Mereka <br>
                <span class="text-orange-500">Kesempatan Kedua</span>
            </h1>

            <p class="mt-5 text-gray-600 text-lg max-w-md">
                Bangun ekonomi berkelanjutan untuk shelter sambil memberikan rumah penuh kasih untuk hewan.
            </p>

            <div class="mt-8 flex gap-4">
                <a href="/pets" class="bg-orange-500 text-white px-6 py-3 rounded-lg shadow hover:bg-orange-600 transition">
                    Mulai Adopsi →
                </a>

                <a href="#" class="bg-white px-6 py-3 rounded-lg shadow hover:bg-gray-100 transition">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>

        <!-- IMAGE -->
        <div class="relative">
            <img src="https://images.unsplash.com/photo-1519052537078-e6302a4968d4"
                 class="rounded-3xl shadow-xl border">

            <!-- FLOAT CARD -->
            <div class="absolute -bottom-6 left-10 bg-white px-5 py-3 rounded-xl shadow flex items-center gap-3">
                <div class="bg-orange-100 p-2 rounded">
                    ❤️
                </div>
                <div>
                    <p class="font-bold text-lg">50+</p>
                    <p class="text-sm text-gray-500">Hewan Teradopsi</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- STATS -->
<section class="py-16">
    <div class="max-w-7xl mx-auto grid md:grid-cols-4 gap-6 px-10">

        <div class="bg-white p-6 rounded-2xl shadow text-center">
            <p class="text-2xl font-bold">50+</p>
            <p class="text-gray-500">Hewan Teradopsi</p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow text-center">
            <p class="text-2xl font-bold">12</p>
            <p class="text-gray-500">Shelter Mitra</p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow text-center">
            <p class="text-2xl font-bold">Rp10jt</p>
            <p class="text-gray-500">Donasi Tersalurkan</p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow text-center">
            <p class="text-2xl font-bold">200+</p>
            <p class="text-gray-500">Keluarga Bahagia</p>
        </div>

    </div>
</section>

<!-- FEATURES -->
<section class="py-20 text-center">
    <h2 class="text-3xl font-bold">
        Platform Lengkap untuk 
        <span class="text-orange-500">Kesejahteraan Hewan</span>
    </h2>

    <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-8 mt-12 px-10">

        <div class="bg-white p-8 rounded-2xl shadow text-left hover:shadow-lg transition">
            <div class="text-2xl">❤️</div>
            <h3 class="font-bold mt-4 text-lg">Adoption Gallery</h3>
            <p class="text-gray-500 mt-2 text-sm">
                Temukan teman berbulu baru dan berikan mereka rumah penuh kasih.
            </p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow text-left hover:shadow-lg transition">
            <div class="text-2xl">💰</div>
            <h3 class="font-bold mt-4 text-lg">Donation Campaign</h3>
            <p class="text-gray-500 mt-2 text-sm">
                100% donasi langsung ke shelter.
            </p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow text-left hover:shadow-lg transition">
            <div class="text-2xl">📘</div>
            <h3 class="font-bold mt-4 text-lg">Edu-Center</h3>
            <p class="text-gray-500 mt-2 text-sm">
                Pelajari cara merawat hewan dengan benar.
            </p>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="py-20 text-center text-white"
    style="background: linear-gradient(90deg, #f97316, #22c55e);">

    <h2 class="text-3xl font-bold">Siap Membuat Perbedaan?</h2>

    <p class="mt-4">
        Bergabunglah membantu hewan yang membutuhkan.
    </p>

    <div class="mt-6 flex justify-center gap-4">
        <a href="/pets" class="bg-white text-orange-500 px-6 py-3 rounded-lg">
            Mulai Adopsi →
        </a>
        <a href="#" class="border px-6 py-3 rounded-lg">
            Hubungi Kami
        </a>
    </div>
</section>
<footer class="bg-[#0B132B] text-white pt-20 pb-10 mt-20">
        <div class="container mx-auto px-6 grid md:grid-cols-4 gap-12 border-b border-slate-800 pb-12 mb-8">
            <div class="col-span-1">
                <div class="flex items-center gap-2 font-bold text-lg mb-6">
                    <div class="w-8 h-8 bg-orange-500 rounded flex items-center justify-center"><i class="ph-bold ph-paw-print"></i></div>
                    <span>PawLink Indonesia</span>
                    
                </div>
                <p class="text-sm text-slate-400 leading-relaxed">Menghubungkan hewan dengan keluarga yang penuh kasih.</p>
            </div>
            <div>
                <h5 class="font-bold mb-6 text-orange-500 text-xs uppercase tracking-widest">Quick Links</h5>
                <ul class="text-sm text-slate-400 space-y-3">
                    <li><a href="index.html" class="hover:text-white transition">Home</a></li>
                    <li><a href="about.html" class="hover:text-white transition">About Us</a></li>
                    <li><a href="#" class="hover:text-white transition">Adoption</a></li>
                </ul>
            </div>
            <div>
                <h5 class="font-bold mb-6 text-orange-500 text-xs uppercase tracking-widest">Resources</h5>
                <ul class="text-sm text-slate-400 space-y-3">
                    <li><a href="#" class="hover:text-white transition">FAQ</a></li>
                    <li><a href="#" class="hover:text-white transition">Privacy Policy</a></li>
                </ul>
            </div>
            <div>
                <h5 class="font-bold mb-6 text-orange-500 text-xs uppercase tracking-widest">Contact</h5>
                <ul class="text-sm text-slate-400 space-y-3">
                    <li class="flex items-center gap-2"><i data-lucide="mail" class="w-4"></i> info@pawlink.id</li>
                    <li class="flex items-center gap-2"><i data-lucide="map-pin" class="w-4"></i> Jakarta, Indonesia</li>
                </ul>
            </div>
        </div>
        <p class="text-center text-xs text-slate-500">&copy; 2026 PawLink Indonesia. All rights reserved.</p>
</footer>
@endsection