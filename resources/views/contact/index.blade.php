@extends('layouts.app')

@section('content')
<div class="bg-white min-h-screen font-sans mt-5">
    <header class="text-center py-16 px-4 bg-gray-50 mt-5">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            Hubungi <span class="text-orange-500">Kami</span>
        </h1>
        <p class="text-gray-500 max-w-2xl mx-auto">
            Kami akan membantu Anda dengan pertanyaan apa pun. Kirimkan pesan atau hubungi kami melalui kontak di bawah.
        </p>
    </header>

    <main class="max-w-7xl mx-auto px-6 md:px-12 py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
            <div class="bg-orange-50 p-8 rounded-2xl text-center border border-orange-100">
                <div class="bg-orange-500 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 text-white">
                    <i class="ph-bold ph-envelope-simple text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Email</h3>
                <p class="text-sm text-gray-500 mb-4">Kirimkan pertanyaan kapan saja</p>
                <a href="mailto:info@pawlink.id" class="text-orange-600 font-semibold">info@pawlink.id</a>
            </div>

            <div class="bg-cyan-50 p-8 rounded-2xl text-center border border-cyan-100">
                <div class="bg-cyan-500 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 text-white">
                    <i class="ph-bold ph-phone text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Telepon</h3>
                <p class="text-sm text-gray-500 mb-4">Hubungi kami Senin-Jumat</p>
                <a href="tel:+6281234567890" class="text-cyan-600 font-semibold">+62 812-3456-7890</a>
            </div>

            <div class="bg-blue-50 p-8 rounded-2xl text-center border border-blue-100">
                <div class="bg-blue-500 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 text-white">
                    <i class="ph-bold ph-map-pin text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Lokasi</h3>
                <p class="text-sm text-gray-500 mb-4">Kunjungi kantor pusat kami</p>
                <a href="#" class="text-blue-600 font-semibold">Jakarta, Indonesia</a>
            </div>
        </div>

        <div class="max-w-3xl mx-auto bg-white p-8 md:p-12 rounded-3xl border border-gray-100 shadow-2xl mb-24">
            <h2 class="text-2xl font-bold text-center text-gray-900 mb-8">Kirim Pesan</h2>
            <form action="#" method="POST" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                        <input type="text" placeholder="Eko Budi" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-orange-500 outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" placeholder="contoh@email.com" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-orange-500 outline-none">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Nomor Telepon</label>
                    <input type="text" placeholder="0812xxxxxxxx" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-orange-500 outline-none">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                    <textarea rows="4" placeholder="Tuliskan pesan Anda..." class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-orange-500 outline-none"></textarea>
                </div>
                <button type="submit" class="w-full bg-orange-500 text-white font-bold py-4 rounded-xl hover:bg-orange-600 transition-colors shadow-lg shadow-orange-200">
                    Kirim Pesan
                </button>
            </form>
        </div>

        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Lokasi <span class="text-orange-500">Shelter Mitra</span></h2>
            <p class="text-gray-500 mt-2">Kunjungi shelter mitra kami di berbagai lokasi</p>
        </div>
        
        <div class="w-full h-96 bg-gray-200 rounded-3xl mb-12 flex items-center justify-center border-4 border-white shadow-lg overflow-hidden relative">
            <div class="text-center">
                <i class="ph-bold ph-map-trifold text-5xl text-gray-400 mb-2"></i>
                <p class="text-gray-500 font-medium">Peta Interaktif Shelter</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-24">
            @foreach(['Jakarta Utara', 'Jakarta Selatan', 'Tangerang', 'Bekasi'] as $loc)
            <div class="p-6 border border-gray-100 rounded-2xl flex justify-between items-center group hover:border-orange-200 transition-colors">
                <div>
                    <h4 class="font-bold text-gray-900">Shelter {{ $loc }}</h4>
                    <p class="text-xs text-gray-400 mt-1">Jl. Alamat Lengkap No. 123, {{ $loc }}</p>
                    <p class="text-xs text-orange-500 mt-1 font-medium italic">+62 21-345-678</p>
                </div>
                <i class="ph-bold ph-caret-right text-gray-300 group-hover:text-orange-500 transition-colors"></i>
            </div>
            @endforeach
        </div>

        <div class="max-w-3xl mx-auto pb-24">
    <h2 class="text-3xl font-bold text-center mb-12">Pertanyaan <span class="text-orange-500">Umum</span></h2>
    <div class="space-y-4">
        @foreach([
            ['q' => 'Bagaimana cara mengadopsi hewan di PawLink?', 'a' => 'Cukup pilih hewan di menu Adopsi, klik tombol Adopsi, dan lengkapi formulir yang disediakan. Tim kami akan menghubungi Anda dalam 2x24 jam.'],
            ['q' => 'Apakah saya bisa jadi sukarelawan?', 'a' => 'Tentu saja! Kami selalu membuka kesempatan bagi relawan. Silakan hubungi kami melalui formulir kontak di atas dengan subjek Relawan.'],
            ['q' => 'Bagaimana cara kerja Paw-Shop?', 'a' => 'Setiap keuntungan dari Paw-Shop akan didonasikan langsung untuk biaya operasional shelter mitra kami.']
        ] as $faq)
        <div class="faq-item border border-gray-100 rounded-xl overflow-hidden transition-all duration-300">
            <button class="faq-button w-full flex justify-between items-center p-5 text-left font-semibold text-gray-700 hover:bg-gray-50 transition-colors">
                <span>{{ $faq['q'] }}</span>
                <i class="ph-bold ph-plus text-sm transition-transform duration-300"></i>
            </button>
            <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-white">
                <div class="p-5 pt-0 text-gray-500 text-sm leading-relaxed">
                    {{ $faq['a'] }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
    </main>
</div>
<script>
    document.querySelectorAll('.faq-button').forEach(button => {
        button.addEventListener('click', () => {
            const faqItem = button.parentElement;
            const content = button.nextElementSibling;
            const icon = button.querySelector('i');

            // Tutup FAQ lain yang sedang terbuka (Optional)
            document.querySelectorAll('.faq-content').forEach(otherContent => {
                if (otherContent !== content) {
                    otherContent.style.maxHeight = null;
                    otherContent.parentElement.classList.remove('border-orange-500');
                    otherContent.previousElementSibling.querySelector('i').style.transform = 'rotate(0deg)';
                }
            });

            // Toggle FAQ yang diklik
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
                icon.style.transform = 'rotate(0deg)';
                faqItem.classList.remove('border-orange-500', 'shadow-md');
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
                icon.style.transform = 'rotate(45deg)'; // Ikon plus jadi silang
                faqItem.classList.add('border-orange-500', 'shadow-md');
            }
        });
    });
</script>

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

