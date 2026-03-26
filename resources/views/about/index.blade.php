@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-gradient-to-r from-gray-100 to-green-50 py-16 text-center px-6 mt-5">
    <h1 class="text-4xl font-bold">
        Tentang <span class="text-orange-500">PawLink Indonesia</span>
    </h1>
    <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
        Platform teknologi yang menghubungkan hewan dengan keluarga yang tepat,
        sambil membangun ekosistem ekonomi berkelanjutan untuk shelter di Indonesia.
    </p>
</section>

<!-- STORY -->
<section class="py-16 px-10">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">

        <!-- TEXT -->
        <div>
            <h2 class="text-2xl font-bold">
                Kisah <span class="text-orange-500">Kami</span>
            </h2>

            <p class="mt-4 text-gray-600">
                Indonesia menghadapi tantangan besar dalam pengelolaan populasi hewan liar.
                Ribuan anjing dan kucing terlantar membutuhkan rumah, sementara shelter lokal
                berjuang dengan keterbatasan dana dan sumber daya.
            </p>

            <p class="mt-4 text-gray-600">
                PawLink Indonesia hadir sebagai solusi teknologi yang tidak hanya memfasilitasi
                adopsi, tetapi juga menciptakan model bisnis berkelanjutan.
            </p>

            <p class="mt-4 text-gray-600">
                Dengan menggabungkan teknologi, transparansi, dan komunitas,
                kami menciptakan perubahan positif untuk kesejahteraan hewan.
            </p>
        </div>

        <!-- IMAGE -->
        <div>
            <img src="https://images.unsplash.com/photo-1548199973-03cce0bbc87b"
                 class="rounded-2xl shadow-lg">
        </div>

    </div>
</section>

<!-- MISSION -->
<section class="bg-gray-50 py-16 text-center px-10">
    <h2 class="text-3xl font-bold">
        Misi <span class="text-orange-500">Kami</span>
    </h2>

    <p class="text-gray-600 mt-3">
        Empat pilar utama yang menjadi fondasi PawLink Indonesia
    </p>

    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-6 mt-10">

        <div class="bg-white p-6 rounded-2xl shadow text-left">
            ❤️
            <h3 class="font-bold mt-2">Social Impact</h3>
            <p class="text-gray-500 text-sm mt-2">
                Mengurangi populasi hewan liar melalui adopsi.
            </p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow text-left">
            📈
            <h3 class="font-bold mt-2">Economic Sustainability</h3>
            <p class="text-gray-500 text-sm mt-2">
                Membangun model bisnis berkelanjutan untuk shelter.
            </p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow text-left">
            🛡️
            <h3 class="font-bold mt-2">Animal Welfare</h3>
            <p class="text-gray-500 text-sm mt-2">
                Memastikan perawatan dan kesehatan hewan.
            </p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow text-left">
            👥
            <h3 class="font-bold mt-2">Community Building</h3>
            <p class="text-gray-500 text-sm mt-2">
                Membangun komunitas pecinta hewan.
            </p>
        </div>

    </div>
</section>

<!-- VALUES -->
<section class="py-16 text-center px-10">
    <h2 class="text-3xl font-bold">
        Nilai-Nilai <span class="text-orange-500">Kami</span>
    </h2>

    <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-6 mt-10">

        <div class="bg-white p-6 rounded-2xl shadow">
            ❤️
            <h3 class="font-bold mt-2">Compassion</h3>
            <p class="text-gray-500 text-sm mt-2">
                Setiap hewan berhak mendapatkan kasih sayang.
            </p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow">
            🎯
            <h3 class="font-bold mt-2">Transparency</h3>
            <p class="text-gray-500 text-sm mt-2">
                Keterbukaan dalam proses dan donasi.
            </p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow">
            ⭐
            <h3 class="font-bold mt-2">Excellence</h3>
            <p class="text-gray-500 text-sm mt-2">
                Standar tinggi dalam pelayanan.
            </p>
        </div>

    </div>
</section>



<!-- CTA -->
<section class="py-16 text-center text-white"
    style="background: linear-gradient(90deg, #f97316, #22c55e);">

    <h2 class="text-3xl font-bold">Bergabunglah dengan Misi Kami</h2>

    <p class="mt-3">
        Bersama kita bisa membuat perubahan nyata.
    </p>

    <a href="/contact"
       class="inline-block mt-6 bg-white text-orange-500 px-6 py-2 rounded-lg">
        Hubungi Kami
    </a>
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
                    <li><a href="/home" class="hover:text-white transition">Home</a></li>
                    <li><a href="/about" class="hover:text-white transition">About Us</a></li>
                    <li><a href="/adoption" class="hover:text-white transition">Adoption</a></li>
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