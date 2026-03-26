@extends('layouts.app')

@section('content')
<div class="bg-white min-h-screen">
    <header class="text-center py-16 px-4">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            Edu-<span class="text-orange-500">Center</span>
        </h1>
        <p class="text-gray-500 max-w-2xl mx-auto">
            Pelajari cara merawat hewan peliharaan dengan baik melalui artikel dan panduan dari para ahli.
        </p>

        <form action="{{ route('edu.index') }}" method="GET" class="mt-8 max-w-xl mx-auto relative">
            <i class="ph ph-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 text-lg"></i>
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari artikel..." 
                class="w-full pl-12 pr-4 py-3 rounded-full border border-gray-200 focus:outline-none focus:border-brand-500 focus:ring-1 focus:ring-brand-500 shadow-sm transition">
        </form>

        <div class="mt-6 flex flex-wrap justify-center gap-3">
            @php 
                $categories = ['All', 'Perawatan Dasar', 'Kesehatan', 'Nutrisi', 'Pelatihan', 'Perilaku', 'Adopsi']; 
            @endphp
            
            @foreach($categories as $cat)
                <a href="{{ route('edu.index', ['category' => $cat]) }}" 
                   class="px-5 py-2 rounded-full text-sm font-medium shadow-sm transition 
                   {{ (request('category', 'All') == $cat) ? 'bg-brand-500 text-white' : 'bg-white border border-gray-200 text-gray-600 hover:bg-gray-50' }}">
                    {{ $cat }}
                </a>
            @endforeach
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 md:px-12 pb-20">
        
        @if(!request('search') && (!request('category') || request('category') == 'All'))
            @php $featured = $articles->first(); @endphp
            @if($featured)
            <section class="mb-16">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Artikel Unggulan</h2>
                <div onclick="window.location='{{ route('edu.show', $featured->id) }}'" class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden flex flex-col md:flex-row group cursor-pointer hover:shadow-md transition">
                    <div class="md:w-1/2 h-64 md:h-auto overflow-hidden relative">
                        <img src="{{ $featured->image }}" alt="{{ $featured->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="md:w-1/2 p-8 md:p-10 flex flex-col justify-center">
                        <span class="inline-block bg-brand-50 text-brand-600 text-xs font-semibold px-3 py-1 rounded-full w-max mb-4">{{ $featured->category }}</span>
                        <h3 class="text-3xl font-bold text-gray-900 mb-4 leading-tight group-hover:text-brand-500 transition">{{ $featured->title }}</h3>
                        <p class="text-gray-500 mb-6 leading-relaxed line-clamp-3">{{ $featured->excerpt }}</p>
                        
                        <div class="flex items-center justify-between mt-auto">
                            <div class="flex items-center gap-4 text-sm text-gray-500">
                                <span class="flex items-center gap-1"><i class="ph ph-user"></i> {{ $featured->author }}</span>
                                <span class="flex items-center gap-1"><i class="ph ph-clock"></i> {{ $featured->reading_time }} menit</span>
                            </div>
                        </div>
                        <a href="{{ route('edu.show', $featured->id) }}" class="text-brand-500 font-semibold mt-6 inline-flex items-center gap-2 hover:gap-3 transition-all">Baca Selengkapnya <i class="ph ph-arrow-right"></i></a>
                    </div>
                </div>
            </section>
            @endif
        @endif

        <section>
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-gray-900">
                    {{ request('search') ? 'Hasil Pencarian' : (request('category') && request('category') != 'All' ? 'Kategori: ' . request('category') : 'Semua Artikel') }}
                </h2>
                <span class="text-sm text-gray-500">{{ $articles->count() }} artikel ditemukan</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($articles as $article)
                    <article onclick="window.location='{{ route('edu.show', $article->id) }}'" class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden group cursor-pointer hover:shadow-md transition flex flex-col">
                        <div class="h-48 overflow-hidden relative">
                            <span class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-gray-700 text-xs font-semibold px-3 py-1 rounded-full z-10 shadow-sm">{{ $article->category }}</span>
                            <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        </div>
                        <div class="p-6 flex flex-col flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-brand-500 transition leading-snug">{{ $article->title }}</h3>
                            <p class="text-gray-500 text-sm mb-6 line-clamp-2">{{ $article->excerpt }}</p>
                            
                            <div class="mt-auto flex items-center justify-between text-xs text-gray-500 mb-4">
                                <span class="flex items-center gap-1"><i class="ph ph-user"></i> {{ $article->author }}</span>
                                <span class="flex items-center gap-1"><i class="ph ph-clock"></i> {{ $article->reading_time }} menit</span>
                            </div>
                            <a href="{{ route('edu.show', $article->id) }}" class="text-brand-500 text-sm font-semibold inline-flex items-center gap-2 hover:gap-3 transition-all">Baca Artikel <i class="ph ph-arrow-right"></i></a>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full text-center py-20">
                        <i class="ph ph-magnifying-glass text-6xl text-gray-200 mb-4"></i>
                        <p class="text-gray-500 text-lg">Maaf, artikel tidak ditemukan.</p>
                        <a href="{{ route('edu.index') }}" class="text-brand-500 font-medium underline mt-2 inline-block">Lihat semua artikel</a>
                    </div>
                @endforelse
            </div>
        </section>
    </main>
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