<!-- 7. Footer -->
<footer class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 relative z-20 border-t border-gray-200/50 mt-auto">
    <div class="flex flex-col sm:flex-row items-center justify-between gap-6">

        <!-- Quick Menu -->
        <div class="flex flex-wrap justify-center gap-6 text-[11px] font-semibold text-gray-500">
            <a href="#beranda" class="hover:text-brand-pink transition-colors">Beranda</a>
            <a href="#tentang" class="hover:text-brand-pink transition-colors">Tentang</a>
            <a href="#layanan" class="hover:text-brand-pink transition-colors">Layanan</a>
            <a href="#harga" class="hover:text-brand-pink transition-colors">Harga</a>
            <a href="#kontak" class="hover:text-brand-pink transition-colors">Kontak</a>
        </div>

        <!-- Social Icons -->
        <div class="flex items-center gap-4">
            <a href="https://instagram.com/duacerita" target="_blank"
                class="w-8 h-8 rounded-full bg-white/80 border border-white hover:border-brand-pink flex items-center justify-center text-gray-500 hover:text-brand-pink shadow-sm transition-all">
                <i class="fa-brands fa-instagram text-sm"></i>
            </a>
            <a href="https://wa.me/6281234567890" target="_blank"
                class="w-8 h-8 rounded-full bg-white/80 border border-white hover:border-brand-pink flex items-center justify-center text-gray-500 hover:text-brand-pink shadow-sm transition-all">
                <i class="fa-brands fa-whatsapp text-sm"></i>
            </a>
            <a href="https://tiktok.com/@duacerita.wedding" target="_blank"
                class="w-8 h-8 rounded-full bg-white/80 border border-white hover:border-brand-pink flex items-center justify-center text-gray-500 hover:text-brand-pink shadow-sm transition-all">
                <i class="fa-brands fa-tiktok text-sm"></i>
            </a>
        </div>

        <!-- Copyright -->
        <span class="text-[10px] text-gray-500">
            &copy; {{ config('app.name', 'Laravel') }} {{date('Y')}}. Semua Hak Dilindungi.
        </span>
    </div>
</footer>