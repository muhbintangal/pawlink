@extends('layouts.app')

@section('content')
<main class="max-w-4xl mx-auto px-6 py-12 mt-5">
    <a href="{{ route('edu.index') }}" class="text-brand-500 font-medium inline-flex items-center gap-2 mb-8">
        <i class="ph ph-arrow-left"></i> Kembali ke Edu-Center
    </a>

    <article>
        <span class="bg-brand-50 text-brand-600 text-xs font-semibold px-3 py-1 rounded-full">{{ $article->category }}</span>
        <h1 class="text-4xl font-bold text-gray-900 mt-4 mb-6">{{ $article->title }}</h1>
        
        <div class="flex items-center gap-6 text-sm text-gray-500 mb-8">
            <span class="flex items-center gap-1"><i class="ph ph-user"></i> {{ $article->author }}</span>
            <span class="flex items-center gap-1"><i class="ph ph-calendar"></i> {{ $article->created_at->format('d M Y') }}</span>
            <span class="flex items-center gap-1"><i class="ph ph-clock"></i> {{ $article->reading_time }} menit baca</span>
        </div>

        <img src="{{ $article->image }}" class="w-full h-[400px] object-cover rounded-2xl mb-10 shadow-sm">

        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
            {!! nl2br(e($article->content)) !!}
        </div>
    </article>
</main>
@endsection