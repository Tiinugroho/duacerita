<!-- 1. Header / Navigation -->
<header class="sticky top-4 z-50 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-4">
    <nav
        class="glass-panel px-6 py-3.5 rounded-2xl flex items-center justify-between shadow-sm border border-white/60">
        <!-- Logo Section (Long Logo Image) -->
        <a href="#beranda" class="flex items-center group">
            <img src="/images/logo-panjang-removebg.png"
                onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=800&auto=format&fit=crop';"
                alt="DuaCerita Logo"
                class="h-9 sm:h-11 w-auto object-contain transition-transform duration-300 group-hover:scale-102">
        </a>

        <!-- Desktop Nav Menu (Larger Font Size) -->
        <div class="hidden md:flex items-center gap-1 sm:gap-2">
            <a href="#beranda"
                class="px-3.5 sm:px-4 py-2 rounded-xl text-sm sm:text-[15px] font-bold text-gray-600 hover:text-brand-pink hover:bg-brand-pink-light/60 transition-all duration-300">Beranda</a>
            <a href="#tentang"
                class="px-3.5 sm:px-4 py-2 rounded-xl text-sm sm:text-[15px] font-bold text-gray-600 hover:text-brand-pink hover:bg-brand-pink-light/60 transition-all duration-300">Tentang</a>
            <a href="#layanan"
                class="px-3.5 sm:px-4 py-2 rounded-xl text-sm sm:text-[15px] font-bold text-gray-600 hover:text-brand-pink hover:bg-brand-pink-light/60 transition-all duration-300">Layanan</a>
            <a href="#harga"
                class="px-3.5 sm:px-4 py-2 rounded-xl text-sm sm:text-[15px] font-bold text-gray-600 hover:text-brand-pink hover:bg-brand-pink-light/60 transition-all duration-300">Harga</a>
            <a href="#kontak"
                class="px-3.5 sm:px-4 py-2 rounded-xl text-sm sm:text-[15px] font-bold text-gray-600 hover:text-brand-pink hover:bg-brand-pink-light/60 transition-all duration-300">Kontak</a>
        </div>

        <!-- Header CTA (Larger Font) -->
        <div class="hidden md:block">
            <a href="#kontak"
                class="px-5 py-2.5 text-sm font-bold text-white rounded-xl bg-gradient-to-r from-brand-pink to-brand-purple hover:from-brand-pink/90 hover:to-brand-purple/90 transition-all duration-300 shadow-sm hover:shadow-md hover:scale-[1.02]">
                Hubungi Kami
            </a>
        </div>

        <!-- Hamburger Button (Mobile) -->
        <button id="menu-btn" class="md:hidden text-gray-600 hover:text-brand-pink focus:outline-none"
            onclick="toggleMobileMenu()">
            <i class="fa-solid fa-bars text-xl"></i>
        </button>
    </nav>

    <!-- Mobile Nav Menu (Initially Hidden, aligned to navbar width) -->
    <div id="mobile-menu"
        class="hidden md:hidden mt-3 glass-panel rounded-2xl p-5 flex flex-col gap-4 shadow-lg absolute inset-x-0 z-40 transition-all duration-300 border border-white/50">
        <a href="#beranda"
            class="text-sm font-semibold text-gray-700 hover:text-brand-pink px-2 py-1 transition-colors"
            onclick="toggleMobileMenu()">Beranda</a>
        <a href="#tentang"
            class="text-sm font-semibold text-gray-700 hover:text-brand-pink px-2 py-1 transition-colors"
            onclick="toggleMobileMenu()">Tentang</a>
        <a href="#layanan"
            class="text-sm font-semibold text-gray-700 hover:text-brand-pink px-2 py-1 transition-colors"
            onclick="toggleMobileMenu()">Layanan</a>
        <a href="#harga"
            class="text-sm font-semibold text-gray-700 hover:text-brand-pink px-2 py-1 transition-colors"
            onclick="toggleMobileMenu()">Harga</a>
        <a href="#kontak"
            class="text-sm font-semibold text-gray-700 hover:text-brand-pink px-2 py-1 transition-colors"
            onclick="toggleMobileMenu()">Kontak</a>
        <a href="#kontak"
            class="w-full text-center px-4 py-2.5 text-sm font-bold text-white rounded-xl bg-gradient-to-r from-brand-pink to-brand-purple block transition-all"
            onclick="toggleMobileMenu()">
            Hubungi Kami
        </a>
    </div>
</header>
