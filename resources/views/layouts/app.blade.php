<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PawLink</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.min.js"></script>

    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <style>
        [x-cloak] { display: none !important; }
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-[#F7F7F7] text-gray-800">

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full z-50 bg-white px-10 py-4 flex justify-between items-center shadow-sm">
        <div class="flex items-center gap-2 font-semibold text-lg">
            <div class="bg-orange-500 text-white w-8 h-8 flex items-center justify-center rounded-md">
                <i class="ph-bold ph-paw-print"></i>
            </div>
            PawLink Indonesia
        </div>

        <div class="hidden md:flex gap-8 text-gray-600 text-sm">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/pets">Adoption</a>
            <a href="/donation">Donation</a>
            <a href="/edu">Edu-Center</a>
            <a href="/contact">Contact</a>
        </div>
    </nav>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 text-center">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')

</body>
</html>