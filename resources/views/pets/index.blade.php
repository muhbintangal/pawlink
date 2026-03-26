@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-gradient-to-r from-gray-100 to-green-50 py-16 text-center mt-5">
    <h1 class="text-4xl font-bold">
        Galeri <span class="text-orange-500">Adopsi</span>
    </h1>
    <p class="text-gray-600 mt-3">
        Temukan teman berbulu baru Anda
    </p>
</section>

<section class="container mx-auto px-6 -mt-8">
    <form action="{{ route('pets.index') }}" method="GET" class="bg-white p-4 rounded-2xl shadow-xl shadow-slate-200/50 border border-slate-100 flex flex-col md:flex-row gap-4">
        
        <div class="relative flex-1">
            <i data-lucide="search" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400"></i>
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama atau lokasi..." 
                   class="w-full pl-12 pr-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-orange-500/20 focus:border-orange-500 transition">
        </div>

        <div class="flex gap-4">
            <select name="type" onchange="this.form.submit()" class="px-6 py-3 rounded-xl border border-slate-200 text-sm font-medium text-slate-600 focus:outline-none focus:border-orange-500 bg-white">
                <option value="Semua Jenis">Semua Jenis</option>
                <option value="Kucing" {{ request('type') == 'Kucing' ? 'selected' : '' }}>Kucing</option>
                <option value="Anjing" {{ request('type') == 'Anjing' ? 'selected' : '' }}>Anjing</option>
            </select>

            <select name="gender" onchange="this.form.submit()" class="px-6 py-3 rounded-xl border border-slate-200 text-sm font-medium text-slate-600 focus:outline-none focus:border-orange-500 bg-white">
                <option value="Semua Gender">Semua Gender</option>
                <option value="Jantan" {{ request('gender') == 'Jantan' ? 'selected' : '' }}>Jantan</option>
                <option value="Betina" {{ request('gender') == 'Betina' ? 'selected' : '' }}>Betina</option>
            </select>
            
            <button type="submit" class="bg-orange-500 text-white px-6 py-3 rounded-xl font-bold hover:bg-orange-600 transition">
                Cari
            </button>
        </div>
    </form>

    <p class="mt-6 text-sm text-slate-400 font-medium">
        Menampilkan <span class="text-slate-900">{{ $pets->count() }} hewan</span>
    </p>
</section>
<!-- GRID -->
<div class="max-w-7xl mx-auto px-6 py-10 grid md:grid-cols-4 gap-6">

@foreach ($pets as $pet)
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden group hover:shadow-xl transition-all">
        <img src="https://images.unsplash.com/photo-1543466835-00a7907e9de1?auto=format&fit=crop&w=500&q=80" class="w-full h-48 object-cover">
        <div class="p-6">
            <h3 class="font-bold text-xl">Buddy</h3>
            <p class="text-slate-500 text-sm">Golden Retriever • Jantan</p>
            <a href="#" class="mt-4 block text-center bg-orange-500 text-white py-2 rounded-xl font-bold">Lihat Detail</a>
        </div>
    </div>

    <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden group hover:shadow-xl transition-all">
        <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?auto=format&fit=crop&w=500&q=80" class="w-full h-48 object-cover">
        <div class="p-6">
            <h3 class="font-bold text-xl">Milo</h3>
            <p class="text-slate-500 text-sm">Domestic Cat • Betina</p>
            <a href="#" class="mt-4 block text-center bg-orange-500 text-white py-2 rounded-xl font-bold">Lihat Detail</a>
        </div>
    </div>
</div>
@endforeach

</div>

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