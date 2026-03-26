@extends('layouts.app')

@section('content')

<div x-data="{ 
    open: false, 
    amount: '', 
    campaign: '', 
    step: 'form',
    showSuccess: false,
    
    // Fungsi Reset & Buka Modal
    openModal(name, defaultAmount) {
        this.campaign = name;
        this.amount = defaultAmount;
        this.step = 'form';
        this.open = true;
    },

    // Simulasi Proses Ke QRIS
    goToPayment() {
        if (!this.amount || this.amount < 10000) {
            alert('Minimal donasi adalah Rp 10.000');
            return;
        }
        this.step = 'qr';
    },

    // Simulasi Berhasil
    confirmPayment() {
        this.step = 'success';
    }
}">

    <section class="relative py-20 overflow-hidden bg-white">
        <div class="absolute top-0 left-0 w-full h-full opacity-[0.03] pointer-events-none" style="background-image: url('https://www.transparenttextures.com/patterns/paws.png');"></div>
        <div class="container mx-auto px-6 text-center relative z-10">
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                Kampanye <span class="text-orange-500">Donasi</span>
            </h1>
            <p class="mt-4 text-slate-500 max-w-2xl mx-auto text-base leading-relaxed">
                Bantu mereka menemukan kebahagiaan melalui uluran tangan Anda.
                Setiap rupiah sangat berarti bagi masa depan mereka.
            </p>
            <div class="mt-8 inline-flex items-center bg-orange-50 px-5 py-2 rounded-full border border-orange-100 shadow-sm">
                <span class="flex h-2 w-2 rounded-full bg-orange-500 mr-3 animate-pulse"></span>
                <span class="text-xs font-bold text-orange-700 uppercase tracking-wider">100% donasi disalurkan ke shelter</span>
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 -mt-10 mb-16 relative z-20">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-0 shadow-[0_20px_50px_rgba(0,0,0,0.1)] rounded-[2.5rem] overflow-hidden border border-white/50">
        <div class="bg-gradient-to-br from-cyan-500 to-cyan-600 p-10 flex flex-col justify-center items-center">
            <h3 class="text-3xl font-black mb-1 text-white">Rp 60.8M</h3>
            <p class="text-[10px] text-white/80 uppercase font-bold tracking-[0.2em]">Donasi Terkumpul</p>
        </div>
        
        <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-10 flex flex-col justify-center items-center border-y md:border-y-0 md:border-x border-white/10">
            <h3 class="text-3xl font-black mb-1 text-white">1,870+</h3>
            <p class="text-[10px] text-white/80 uppercase font-bold tracking-[0.2em]">Donatur Bergabung</p>
        </div>
        
        <div class="bg-gradient-to-br from-indigo-600 to-indigo-700 p-10 flex flex-col justify-center items-center">
            <h3 class="text-3xl font-black mb-1 text-white">8</h3>
            <p class="text-[10px] text-white/80 uppercase font-bold tracking-[0.2em]">Shelter Aktif</p>
        </div>
    </div>
</section>

    <section class="max-w-7xl mx-auto px-6 mb-24">
        <div class="grid md:grid-cols-2 gap-10">
            
            <div class="bg-white rounded-[2rem] shadow-sm border border-slate-100 overflow-hidden group hover:shadow-xl transition-all duration-300">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1548199973-03cce0bbc87b?auto=format&fit=crop&w=800&q=80" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                    <span class="absolute top-5 left-5 bg-red-500 text-white text-[10px] font-black px-4 py-1.5 rounded-lg uppercase shadow-lg">Mendesak</span>
                </div>
                <div class="p-8">
                    <h3 class="text-xl font-bold leading-snug">Penyediaan Nutrisi Untuk 100 Anjing Rescue</h3>
                    <div class="mt-6 p-5 bg-slate-50 rounded-2xl mb-6">
                        <div class="flex justify-between items-end mb-3">
                            <span class="text-lg font-bold text-slate-800">Rp 7.500.000</span>
                            <span class="text-2xl font-bold text-orange-500">75%</span>
                        </div>
                        <div class="w-full bg-slate-200 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-orange-500 h-full" style="width: 75%"></div>
                        </div>
                    </div>
                    <button @click="openModal('Nutrisi 100 Anjing Rescue', '50000')" 
                            class="w-full bg-orange-500 hover:bg-orange-600 text-white py-4 rounded-2xl font-bold shadow-xl shadow-orange-200 transition-all active:scale-95">
                        Donasi Sekarang
                    </button>
                </div>
            </div>

            <div class="bg-white rounded-[2rem] shadow-sm border border-slate-100 overflow-hidden group hover:shadow-xl transition-all duration-300">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1523626797181-8c5ae80d40c2?auto=format&fit=crop&w=800&q=80" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                    <span class="absolute top-5 left-5 bg-red-500 text-white text-[10px] font-black px-4 py-1.5 rounded-lg uppercase shadow-lg">Mendesak</span>
                </div>
                <div class="p-8">
                    <h3 class="font-bold text-xl">Operasi Caesar & Medis Kucing Rescue</h3>
                    <div class="mt-6 p-5 bg-slate-50 rounded-2xl mb-6">
                        <div class="flex justify-between items-end mb-3">
                            <span class="text-lg font-bold text-slate-800">Rp 1.200.000</span>
                            <span class="text-2xl font-bold text-orange-500">30%</span>
                        </div>
                        <div class="w-full bg-slate-200 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-orange-500 h-full" style="width: 30%"></div>
                        </div>
                    </div>
                    <button @click="openModal('Operasi Medis Kucing', '100000')" 
                            class="w-full bg-orange-500 hover:bg-orange-600 text-white py-4 rounded-2xl font-bold shadow-xl shadow-orange-200 transition-all active:scale-95">
                        Donasi Sekarang
                    </button>
                </div>
            </div>
            <div class="bg-white rounded-[2rem] shadow-sm border border-slate-100 overflow-hidden group hover:shadow-xl transition-all duration-300">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1523626797181-8c5ae80d40c2?auto=format&fit=crop&w=800&q=80" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                    <span class="absolute top-5 left-5 bg-red-500 text-white text-[10px] font-black px-4 py-1.5 rounded-lg uppercase shadow-lg">Mendesak</span>
                </div>
                <div class="p-8">
                    <h3 class="font-bold text-xl">Operasi Caesar & Medis Kucing Rescue</h3>
                    <div class="mt-6 p-5 bg-slate-50 rounded-2xl mb-6">
                        <div class="flex justify-between items-end mb-3">
                            <span class="text-lg font-bold text-slate-800">Rp 1.200.000</span>
                            <span class="text-2xl font-bold text-orange-500">30%</span>
                        </div>
                        <div class="w-full bg-slate-200 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-orange-500 h-full" style="width: 30%"></div>
                        </div>
                    </div>
                    <button @click="openModal('Operasi Medis Kucing', '100000')" 
                            class="w-full bg-orange-500 hover:bg-orange-600 text-white py-4 rounded-2xl font-bold shadow-xl shadow-orange-200 transition-all active:scale-95">
                        Donasi Sekarang
                    </button>
                </div>
            </div>
            <div class="bg-white rounded-[2rem] shadow-sm border border-slate-100 overflow-hidden group hover:shadow-xl transition-all duration-300">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1523626797181-8c5ae80d40c2?auto=format&fit=crop&w=800&q=80" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                    <span class="absolute top-5 left-5 bg-red-500 text-white text-[10px] font-black px-4 py-1.5 rounded-lg uppercase shadow-lg">Mendesak</span>
                </div>
                <div class="p-8">
                    <h3 class="font-bold text-xl">Operasi Caesar & Medis Kucing Rescue</h3>
                    <div class="mt-6 p-5 bg-slate-50 rounded-2xl mb-6">
                        <div class="flex justify-between items-end mb-3">
                            <span class="text-lg font-bold text-slate-800">Rp 1.200.000</span>
                            <span class="text-2xl font-bold text-orange-500">30%</span>
                        </div>
                        <div class="w-full bg-slate-200 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-orange-500 h-full" style="width: 30%"></div>
                        </div>
                    </div>
                    <button @click="openModal('Operasi Medis Kucing', '100000')" 
                            class="w-full bg-orange-500 hover:bg-orange-600 text-white py-4 rounded-2xl font-bold shadow-xl shadow-orange-200 transition-all active:scale-95">
                        Donasi Sekarang
                    </button>
                </div>
            </div>

        </div>
    </section>

    <div x-show="open" 
         class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-slate-900/90 backdrop-blur-sm"
         x-transition.opacity x-cloak>
        
        <div @click.away="open = false" 
             class="bg-white w-full max-w-lg rounded-[2.5rem] shadow-2xl overflow-hidden relative"
             x-transition:enter="transition ease-out duration-300 transform"
             x-transition:enter-start="scale-90 opacity-0"
             x-transition:enter-end="scale-100 opacity-100">
            
            <button @click="open = false" class="absolute top-6 right-6 text-slate-300 hover:text-red-500 text-3xl z-10 transition-colors">&times;</button>

            <div class="p-10">
                
                <div x-show="step === 'form'">
                    <h3 class="text-2xl font-black text-slate-800 mb-2">Kirim <span class="text-orange-500">Donasi</span></h3>
                    <p class="text-xs text-slate-400 font-bold uppercase mb-8 tracking-widest">Pilih nominal bantuan Anda</p>

                    <div class="bg-orange-50 border border-orange-100 p-6 rounded-3xl mb-8 text-center">
                        <p class="text-[10px] uppercase font-black text-orange-400 tracking-widest mb-1">Membantu Kampanye:</p>
                        <p class="text-sm font-bold text-slate-700" x-text="campaign"></p>
                    </div>

                    <div class="grid grid-cols-3 gap-3 mb-6">
                        <template x-for="val in ['10000', '50000', '100000']">
                            <button @click="amount = val" 
                                class="py-4 border-2 rounded-2xl text-xs font-black transition-all"
                                :class="amount == val ? 'border-orange-500 bg-orange-500 text-white shadow-lg shadow-orange-100' : 'border-slate-100 text-slate-400 hover:border-orange-200'">
                                <span x-text="'Rp ' + parseInt(val).toLocaleString('id-ID')"></span>
                            </button>
                        </template>
                    </div>

                    <div class="relative mb-10">
                        <span class="absolute left-6 top-1/2 -translate-y-1/2 font-black text-slate-300 italic">Rp</span>
                        <input type="number" x-model="amount" placeholder="Nominal lain..." 
                               class="w-full pl-16 pr-6 py-5 bg-slate-50 border-none rounded-2xl focus:ring-2 focus:ring-orange-500 text-lg font-black text-slate-800 transition-all">
                    </div>

                    <button @click="goToPayment()" 
                            class="w-full bg-orange-500 text-white py-5 rounded-2xl font-black text-sm shadow-xl shadow-orange-200 hover:bg-orange-600 transition-all active:scale-95">
                        Lanjutkan Pembayaran
                    </button>
                </div>

                <div x-show="step === 'qr'" class="text-center py-4">
                    <div class="mb-8 relative inline-block">
                        <div class="absolute -inset-4 bg-orange-50 rounded-[2.5rem] -z-10 animate-pulse"></div>
                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=PAWLINK-DONASI-DUMMY" 
                             class="w-48 h-48 mx-auto p-4 bg-white rounded-3xl shadow-sm border border-slate-100" alt="QRIS Dummy">
                    </div>
                    
                    <h3 class="text-xl font-black text-slate-800 mb-2">Pindai Kode QRIS</h3>
                    <p class="text-sm text-slate-500 mb-8 leading-relaxed">
                        Silakan scan untuk donasi sebesar:<br>
                        <span class="text-2xl font-black text-slate-900" x-text="'Rp ' + (amount ? parseInt(amount).toLocaleString('id-ID') : '0')"></span>
                    </p>
                    
                    <div class="flex flex-col gap-3">
                        <button @click="confirmPayment()" class="w-full bg-slate-900 text-white py-5 rounded-2xl font-black shadow-xl hover:bg-slate-800 transition-all">
                            Saya Sudah Bayar
                        </button>
                        <button @click="step = 'form'" class="text-xs font-bold text-slate-400 uppercase tracking-widest hover:text-orange-500 transition-colors">
                            Ganti Nominal
                        </button>
                    </div>
                </div>

                <div x-show="step === 'success'" class="text-center py-6">
                    <div class="w-24 h-24 bg-green-500 text-white rounded-full flex items-center justify-center mx-auto mb-8 shadow-2xl shadow-green-200">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    
                    <h3 class="text-3xl font-black text-slate-800 mb-3">Terima Kasih!</h3>
                    <p class="text-sm text-slate-500 mb-10 leading-relaxed px-4">
                        Donasi Anda sebesar <span class="font-bold text-slate-800" x-text="'Rp ' + parseInt(amount).toLocaleString('id-ID')"></span> telah kami terima. Kebaikan Anda sangat berarti bagi para anabul!
                    </p>

                    <button @click="open = false" class="w-full bg-slate-100 text-slate-600 py-4 rounded-2xl font-black hover:bg-slate-200 transition-all">
                        Tutup Halaman
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>

<style>
    [x-cloak] { display: none !important; }
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button { -webkit-appearance: none; margin: 0; }
</style>


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