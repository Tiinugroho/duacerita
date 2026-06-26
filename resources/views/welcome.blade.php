<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DuaCerita — Agensi Pernikahan Digital</title>
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="bg-brand-cream text-gray-800 font-sans min-h-screen relative overflow-x-clip selection:bg-brand-pink/20 selection:text-brand-pink">

    <!-- Outer Container with sticky support -->
    <div class="relative w-full min-h-screen flex flex-col justify-between overflow-x-clip">

        <!-- Background ambient glow spheres (contained to prevent horizontal mobile overflow) -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
            <div class="glow-sphere w-72 h-72 bg-brand-pink-light top-24 -left-12 opacity-30"></div>
            <div class="glow-sphere-reverse w-[450px] h-[450px] bg-brand-purple-light top-1/3 -right-24 opacity-35">
            </div>
            <div class="glow-sphere w-80 h-80 bg-brand-pink-light bottom-24 left-10 opacity-30"></div>
        </div>

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
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path id="hamburger-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
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

        <!-- 2. Hero Section (Kartu Utama) -->
        <section id="beranda"
            class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 pb-16 relative z-20 flex-1 flex items-center justify-center min-h-[500px]">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center w-full relative">

                <!-- Floral SVG Decorations flanking the card -->
                <!-- Top Left Floral -->
                <svg class="absolute -top-12 -left-4 sm:-left-12 w-20 sm:w-28 h-20 sm:h-28 text-brand-pink/30 floral-float pointer-events-none select-none z-0"
                    viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 70 Q40 40 50 20" stroke="currentColor" stroke-width="1.5" fill="none" />
                    <path d="M35 52 Q25 45 15 48" stroke="currentColor" stroke-width="1.2" fill="none" />
                    <path d="M42 38 Q58 35 60 45" stroke="currentColor" stroke-width="1.2" fill="none" />
                    <circle cx="50" cy="20" r="10" fill="#D473A9" opacity="0.85" />
                    <circle cx="43" cy="15" r="7" fill="#8F74BE" opacity="0.8" />
                    <circle cx="57" cy="15" r="7" fill="#8F74BE" opacity="0.8" />
                    <circle cx="43" cy="25" r="7" fill="#E3DFFD" opacity="0.9" />
                    <circle cx="57" cy="25" r="7" fill="#FDE5EC" opacity="0.9" />
                    <circle cx="15" cy="48" r="6" fill="#8F74BE" opacity="0.75" />
                </svg>

                <!-- Left Column: Main Hero Card (No hover effects) -->
                <div
                    class="lg:col-span-7 glass-panel rounded-3xl p-6 sm:p-10 md:p-12 text-left shadow-xl border border-white/60 relative z-10 fade-in-up">
                    <span
                        class="text-[10px] sm:text-xs font-bold tracking-widest text-brand-purple uppercase inline-block mb-3 bg-brand-purple-light/40 px-3.5 py-1.5 rounded-full">Solusi
                        Pernikahan Era Baru</span>

                    <h1 class="font-serif font-bold text-2xl sm:text-4xl md:text-5xl text-gray-800 leading-tight mb-5">
                        Wujudkan Pernikahan Impian Anda, Secara <span
                            class="font-wedding text-brand-pink text-4xl sm:text-5xl font-normal lowercase inline-block ml-1">Digital</span>
                    </h1>

                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed mb-6">
                        Wujudkan momen sakral Anda secara digital. Undangan web premium, live streaming kualitas
                        sinematik, dan koordinasi virtual profesional dalam satu genggaman. Praktis, hemat, dan
                        terhubung instan ke seluruh dunia.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-3 items-stretch sm:items-center">
                        <a href="#harga"
                            class="px-8 py-3.5 text-xs font-semibold text-white rounded-xl bg-gradient-to-r from-brand-pink to-brand-purple hover:from-brand-pink/90 hover:to-brand-purple/90 transition-all duration-300 shadow-md hover:shadow-lg text-center">
                            Rencanakan Pernikahanmu
                        </a>
                        <a href="#tentang"
                            class="px-8 py-3.5 text-xs font-semibold text-gray-700 bg-white/70 hover:bg-white rounded-xl transition-all duration-300 border border-white/60 text-center hover:shadow-sm">
                            Pelajari Selengkapnya
                        </a>
                    </div>
                </div>

                <!-- Right Column: Wedding Image Card with Floating Badges (No Hover Effects) -->
                <div class="lg:col-span-5 relative z-10 w-full h-full min-h-[300px] sm:min-h-[400px] fade-in-up"
                    style="animation-delay: 0.15s;">
                    <!-- Bottom Right Floral behind image -->
                    <svg class="absolute -bottom-8 -right-4 sm:-right-8 w-20 sm:w-24 h-20 sm:h-24 text-brand-purple/30 floral-float pointer-events-none select-none z-0"
                        style="animation-delay: -3s;" viewBox="0 0 100 100" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M80 30 Q60 60 50 80" stroke="currentColor" stroke-width="1.5" fill="none" />
                        <path d="M65 48 Q75 55 85 52" stroke="currentColor" stroke-width="1.2" fill="none" />
                        <circle cx="50" cy="80" r="10" fill="#8F74BE" opacity="0.85" />
                        <circle cx="43" cy="75" r="7" fill="#D473A9" opacity="0.8" />
                        <circle cx="57" cy="75" r="7" fill="#D473A9" opacity="0.8" />
                        <circle cx="43" cy="85" r="7" fill="#FDE5EC" opacity="0.9" />
                        <circle cx="57" cy="85" r="7" fill="#E3DFFD" opacity="0.9" />
                        <circle cx="85" cy="52" r="6" fill="#D473A9" opacity="0.75" />
                    </svg>

                    <!-- Floating Glass Badges (No hover style) -->
                    <div
                        class="absolute -top-3 -left-3 sm:-top-5 sm:-left-5 glass-panel px-3.5 py-2 rounded-xl text-[10px] sm:text-xs font-bold text-gray-700 shadow-md border border-white/70 flex items-center gap-1.5 z-20 pointer-events-none">
                        <span class="text-brand-pink">✨</span> RSVP Digital
                    </div>
                    <div
                        class="absolute top-[45%] -right-3 sm:-right-5 -translate-y-1/2 glass-panel px-3.5 py-2 rounded-xl text-[10px] sm:text-xs font-bold text-gray-700 shadow-md border border-white/70 flex items-center gap-1.5 z-20 pointer-events-none">
                        <span class="text-brand-purple">🎥</span> Live Streaming HD
                    </div>
                    <div
                        class="absolute -bottom-3 -left-3 sm:-bottom-5 sm:-left-5 glass-panel px-3.5 py-2 rounded-xl text-[10px] sm:text-xs font-bold text-gray-700 shadow-md border border-white/70 flex items-center gap-1.5 z-20 pointer-events-none">
                        <span class="text-brand-pink">💖</span> 500+ Pasangan
                    </div>

                    <div
                        class="glass-panel p-3 rounded-3xl border border-white/60 shadow-xl w-full h-full overflow-hidden flex items-center justify-center relative">
                        <img id="hero-wedding-img" src="images/hero_wedding.jpg"
                            onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=800&auto=format&fit=crop';"
                            alt="Pernikahan DuaCerita"
                            class="w-full h-[320px] sm:h-[380px] lg:h-[400px] object-cover rounded-2xl shadow-inner image-float">
                    </div>
                </div>

            </div>
        </section>

        <!-- 3. Tentang Kami Section -->
        <section id="tentang" class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative z-20">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <!-- Description Left -->
                <div class="lg:col-span-6 flex flex-col gap-5 reveal-element">
                    <span class="text-xs font-bold tracking-wider text-brand-pink uppercase">Tentang Kami</span>
                    <h2 class="font-serif font-bold text-2xl sm:text-3xl text-gray-800 leading-snug">
                        Menceritakan Kembali Kisah Cinta Anda dalam Harmoni Digital
                    </h2>
                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                        Di <strong>DuaCerita</strong>, kami percaya bahwa jarak fisik tidak boleh membatasi kebersamaan
                        di hari paling bersejarah Anda. Sebagai pelopor agensi pernikahan digital, kami hadir memberikan
                        <em>peace of mind</em> (ketenangan pikiran) bagi calon pengantin modern.
                    </p>
                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                        Kami tidak sekadar membuat undangan tautan web atau streaming biasa. Kami mendesain pengalaman
                        emosional virtual yang khidmat. Kami mengelola detail teknis yang membingungkan—dari RSVP
                        real-time hingga bantuan teknis bagi tamu—agar Anda dapat menikmati kebahagiaan tanpa beban.
                    </p>
                    <div class="flex items-center gap-4 mt-2">
                        <div class="flex flex-col border-r border-gray-200 pr-6">
                            <span class="text-xl sm:text-2xl font-bold font-serif text-brand-purple">500+</span>
                            <span class="text-[9px] sm:text-[10px] text-gray-500 uppercase tracking-wider">Pasangan
                                Berbahagia</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xl sm:text-2xl font-bold font-serif text-brand-pink">99%</span>
                            <span class="text-[9px] sm:text-[10px] text-gray-500 uppercase tracking-wider">Tingkat
                                Kepuasan</span>
                        </div>
                    </div>
                </div>

                <!-- Gallery Right (Responsive Grid with images and fallbacks, scattered rotations like Services) -->
                <div class="lg:col-span-6 grid grid-cols-2 gap-4 items-center justify-center">
                    <!-- Top Row: Photo 1 (Wedding Decor image) -->
                    <div class="reveal-element">
                        <div
                            class="glass-panel rounded-2xl p-2 overflow-hidden shadow-sm aspect-[4/3] border border-white/60 card-dynamic-left h-full">
                            <img src="images/gallery_decor.jpg"
                                onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1511795409834-ef04bbd61622?q=80&w=500&auto=format&fit=crop';"
                                alt="Dekorasi Pernikahan" class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                    <!-- Top Row: Photo 2 (Wedding Couple image) -->
                    <div class="reveal-element delay-100">
                        <div
                            class="glass-panel rounded-2xl p-2 overflow-hidden shadow-sm aspect-[4/3] border border-white/60 card-dynamic-center h-full">
                            <img src="images/gallery_couple.jpg"
                                onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1583939003579-730e3918a45a?q=80&w=500&auto=format&fit=crop';"
                                alt="Pasangan Pengantin" class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                    <!-- Bottom Row: Photo 3 (Wedding Rings image) -->
                    <div class="reveal-element delay-200">
                        <div
                            class="glass-panel rounded-2xl p-2 overflow-hidden shadow-sm aspect-[4/3] border border-white/60 card-dynamic-right h-full">
                            <img src="images/gallery_rings.jpg"
                                onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1465495976277-4387d4b0b4c6?q=80&w=500&auto=format&fit=crop';"
                                alt="Cincin Pernikahan" class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- 4. Layanan Kami Section -->
        <section id="layanan" class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative z-20">
            <div class="text-center max-w-2xl mx-auto mb-12 reveal-element">
                <span class="text-xs font-bold tracking-wider text-brand-purple uppercase">Layanan Kami</span>
                <h2 class="font-serif font-bold text-2xl sm:text-3xl text-gray-800 leading-snug mt-2">
                    Layanan Esensial untuk Kelancaran Pernikahan Virtual
                </h2>
                <p class="text-xs sm:text-sm text-gray-500 mt-2">
                    Setiap pilar layanan dirancang untuk mengeliminasi stres perencanaan logistik dan memaksimalkan
                    pengalaman emosional tamu Anda.
                </p>
            </div>

            <!-- Services Grid (Responsive Staggered Cards) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Card 1: Undangan Digital -->
                <div class="reveal-element">
                    <div
                        class="glass-panel card-dynamic-left rounded-2xl p-6 sm:p-8 border border-white/60 shadow-sm flex flex-col gap-4">
                        <div
                            class="w-12 h-12 rounded-2xl bg-brand-pink-light flex items-center justify-center text-brand-pink mb-2 shadow-inner">
                            <!-- Ring Icon -->
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <circle cx="12" cy="8" r="5" stroke="currentColor" />
                                <circle cx="12" cy="16" r="6" stroke="currentColor" />
                                <path d="M12 3 L12 5" stroke="currentColor" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-bold text-lg text-gray-800">Undangan Digital</h3>
                        <p class="text-xs text-gray-600 leading-relaxed">
                            Halaman web kustom elegan untuk membagikan detail acara, galeri foto, kisah cinta (*love
                            story*), hingga RSVP otomatis terintegrasi. Memotong biaya cetak, amplop, dan kurir
                            pengiriman
                            hingga 100%.
                        </p>
                    </div>
                </div>

                <!-- Card 2: Live Streaming -->
                <div class="reveal-element delay-100">
                    <div
                        class="glass-panel card-dynamic-center rounded-2xl p-6 sm:p-8 border border-white/60 shadow-sm flex flex-col gap-4">
                        <div
                            class="w-12 h-12 rounded-2xl bg-brand-purple-light flex items-center justify-center text-brand-purple mb-2 shadow-inner">
                            <!-- Video Icon -->
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path d="M23 7L16 12L23 17V7Z" stroke="currentColor" stroke-linejoin="round" />
                                <rect x="1" y="5" width="15" height="14" rx="2" stroke="currentColor" />
                                <circle cx="7" cy="12" r="2" stroke="currentColor" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-bold text-lg text-gray-800">Live Streaming</h3>
                        <p class="text-xs text-gray-600 leading-relaxed">
                            Siarkan momen akad dan resepsi secara langsung dengan resolusi ultra-HD yang stabil. Kerabat
                            yang terhalang jarak dapat mengirimkan kado digital secara instan dan memberikan ucapan
                            selamat
                            langsung di layar.
                        </p>
                    </div>
                </div>

                <!-- Card 3: Koordinator Virtual -->
                <div class="reveal-element delay-200">
                    <div
                        class="glass-panel card-dynamic-right rounded-2xl p-6 sm:p-8 border border-white/60 shadow-sm flex flex-col gap-4">
                        <div
                            class="w-12 h-12 rounded-2xl bg-brand-pink-light/60 flex items-center justify-center text-brand-lavender mb-2 shadow-inner">
                            <!-- Person Icon -->
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path d="M18 21a6 6 0 0 0-12 0" stroke="currentColor" />
                                <circle cx="12" cy="10" r="4" stroke="currentColor" />
                                <path d="M12 2v2M12 18v2M2 12h2M20 12h2" stroke="currentColor" />
                            </svg>
                        </div>
                        <h3 class="font-serif font-bold text-lg text-gray-800">Koordinator Virtual</h3>
                        <p class="text-xs text-gray-600 leading-relaxed">
                            Percayakan alur koordinasi virtual kepada tim ahli kami. Kami memandu proses e-RSVP,
                            menyusun
                            urutan acara digital, mengelola ruang virtual, hingga memberikan bantuan teknis bagi tamu
                            lansia.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <!-- 5. Paket Harga Section -->
        <section id="harga" class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative z-20">
            <div class="text-center max-w-2xl mx-auto mb-12 reveal-element">
                <span class="text-xs font-bold tracking-wider text-brand-pink uppercase">Paket Harga</span>
                <h2 class="font-serif font-bold text-2xl sm:text-3xl text-gray-800 leading-snug mt-2">
                    Investasi Terbaik untuk Momen Tak Terlupakan
                </h2>
                <p class="text-xs sm:text-sm text-gray-500 mt-2">
                    Kami menawarkan paket harga transparan tanpa biaya tersembunyi demi memberikan kenyamanan anggaran
                    pernikahan Anda.
                </p>
            </div>

            <!-- Pricing Grid (Responsive Staggered Cards) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">

                <!-- Paket Basic -->
                <div class="reveal-element">
                    <div
                        class="glass-panel card-dynamic-straight rounded-3xl p-6 sm:p-8 border border-white/60 shadow-sm flex flex-col justify-between h-full">
                        <div>
                            <span class="text-xs font-bold text-brand-pink uppercase tracking-widest block mb-1">Paket
                                Basic</span>
                            <div class="flex items-baseline gap-1.5 my-3">
                                <span class="text-2xl font-bold text-gray-800">Rp 120.000</span>
                            </div>
                            <p class="text-[11px] text-gray-500 mb-6">Sempurna untuk perayaan kecil & syukuran keluarga
                                sederhana.</p>

                            <hr class="border-gray-200/50 mb-6" />

                            <ul class="flex flex-col gap-3.5 mb-8">
                                <li class="flex items-start gap-2.5 text-xs text-gray-600">
                                    <span class="text-brand-pink font-semibold">✓</span>
                                    <span>5 Pilihan Tema Undangan Elegant</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-xs text-gray-600">
                                    <span class="text-brand-pink font-semibold">✓</span>
                                    <span>Galeri Album Foto (Maks. 5 Foto)</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-xs text-gray-600">
                                    <span class="text-brand-pink font-semibold">✓</span>
                                    <span>Integrasi Lokasi Maps & RSVP WA</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-xs text-gray-600">
                                    <span class="text-brand-pink font-semibold">✓</span>
                                    <span>Musik Latar Standar (Autoplay)</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-xs text-gray-600">
                                    <span class="text-brand-pink font-semibold">✓</span>
                                    <span>Masa Aktif Aktif 3 Bulan</span>
                                </li>
                            </ul>
                        </div>
                        <button
                            class="w-full py-3.5 text-xs font-bold text-brand-pink bg-brand-pink-light/60 hover:bg-brand-pink-light rounded-xl transition-all duration-300 pointer-events-auto"
                            onclick="choosePackage('Basic', 'Rp 120.000')">
                            Pilih Paket
                        </button>
                    </div>
                </div>

                <!-- Paket Pro (HIGHLIGHTED) -->
                <div class="reveal-element delay-100">
                    <div
                        class="glass-panel card-dynamic-straight rounded-3xl p-6 sm:p-8 border-2 border-brand-purple shadow-lg flex flex-col justify-between relative h-full">
                        <div
                            class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-brand-purple text-white text-[9px] font-bold uppercase tracking-widest px-4 py-1.5 rounded-full shadow-sm z-30">
                            Paling Populer
                        </div>

                        <div>
                            <span
                                class="text-xs font-bold text-brand-purple uppercase tracking-widest block mb-1 mt-2">Paket
                                Pro</span>
                            <div class="flex items-baseline gap-1.5 my-3">
                                <span class="text-2xl font-bold text-gray-800">Rp 250.000</span>
                            </div>
                            <p class="text-[11px] text-gray-500 mb-6">Investasi terlengkap untuk menyatukan keluarga
                                jauh
                                dan membebaskan Anda dari stres koordinasi virtual.</p>

                            <hr class="border-gray-200/50 mb-6" />

                            <ul class="flex flex-col gap-3.5 mb-8">
                                <li class="flex items-start gap-2.5 text-xs text-gray-600">
                                    <span class="text-brand-purple font-bold">✓</span>
                                    <span class="font-medium text-gray-800">Desain Premium Kustom Glassmorphism</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-xs text-gray-600">
                                    <span class="text-brand-purple font-bold">✓</span>
                                    <span>Galeri Foto & Video Tanpa Batas</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-xs text-gray-600">
                                    <span class="text-brand-purple font-bold">✓</span>
                                    <span>Sistem RSVP Otomatis & Buku Tamu</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-xs text-gray-600">
                                    <span class="text-brand-purple font-bold">✓</span>
                                    <span class="font-semibold text-brand-purple">Cinema Live Streaming (Durasi 2
                                        Jam)</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-xs text-gray-600">
                                    <span class="text-brand-purple font-bold">✓</span>
                                    <span>Kirim Undangan WhatsApp Tanpa Batas</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-xs text-gray-600">
                                    <span class="text-brand-purple font-bold">✓</span>
                                    <span>Musik Latar Premium (Kustom)</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-xs text-gray-600">
                                    <span class="text-brand-purple font-bold">✓</span>
                                    <span>Masa Aktif Panjang 1 Tahun</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-xs text-gray-600">
                                    <span class="text-brand-purple font-bold">✓</span>
                                    <span class="font-semibold text-brand-purple">Dukungan Tim Koordinator
                                        Virtual</span>
                                </li>
                            </ul>
                        </div>
                        <button
                            class="w-full py-3.5 text-xs font-bold text-white bg-gradient-to-r from-brand-pink to-brand-purple hover:from-brand-pink/90 hover:to-brand-purple/90 rounded-xl transition-all duration-300 shadow-md hover:shadow-lg pointer-events-auto"
                            onclick="choosePackage('Pro', 'Rp 250.000')">
                            Pilih Paket
                        </button>
                    </div>
                </div>

                <!-- Paket Elite -->
                <div class="reveal-element delay-200">
                    <div
                        class="glass-panel card-dynamic-straight rounded-3xl p-6 sm:p-8 border border-white/60 shadow-sm flex flex-col justify-between h-full">
                        <div>
                            <span class="text-xs font-bold text-brand-purple uppercase tracking-widest block mb-1">Paket
                                Elite</span>
                            <div class="flex items-baseline gap-1.5 my-3">
                                <span class="text-2xl font-bold text-gray-800">Rp 150.000</span>
                            </div>
                            <p class="text-[11px] text-gray-500 mb-6">Pilihan seimbang dengan dukungan live streaming
                                esensial akad nikah.</p>

                            <hr class="border-gray-200/50 mb-6" />

                            <ul class="flex flex-col gap-3.5 mb-8">
                                <li class="flex items-start gap-2.5 text-xs text-gray-600">
                                    <span class="text-brand-pink font-semibold">✓</span>
                                    <span>15 Pilihan Tema Undangan Premium</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-xs text-gray-600">
                                    <span class="text-brand-pink font-semibold">✓</span>
                                    <span>Galeri Album Foto (Maks. 15 Foto)</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-xs text-gray-600">
                                    <span class="text-brand-pink font-semibold">✓</span>
                                    <span>RSVP Otomatis & Notifikasi Tamu</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-xs text-gray-600">
                                    <span class="text-brand-pink font-semibold">✓</span>
                                    <span class="font-semibold text-brand-purple">Cinema Live Streaming (Durasi 1
                                        Jam)</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-xs text-gray-600">
                                    <span class="text-brand-pink font-semibold">✓</span>
                                    <span>Musik Latar Premium (Autoplay)</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-xs text-gray-600">
                                    <span class="text-brand-pink font-semibold">✓</span>
                                    <span>Masa Aktif 6 Bulan</span>
                                </li>
                            </ul>
                        </div>
                        <button
                            class="w-full py-3.5 text-xs font-bold text-brand-purple bg-brand-purple-light/60 hover:bg-brand-purple-light rounded-xl transition-all duration-300 pointer-events-auto"
                            onclick="choosePackage('Elite', 'Rp 150.000')">
                            Pilih Paket
                        </button>
                    </div>
                </div>

            </div>
        </section>

        <!-- 6. Hubungi Kami Section -->
        <section id="kontak" class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative z-20">
            <div class="glass-panel rounded-3xl p-6 sm:p-12 border border-white/60 shadow-lg relative overflow-hidden">

                <!-- Grid Form & Detail (Responsive) -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 relative z-10">
                    <!-- Form Kontak (Kiri) -->
                    <div class="lg:col-span-7 flex flex-col gap-6 reveal-element">
                        <div>
                            <span class="text-xs font-bold tracking-wider text-brand-pink uppercase">Hubungi Kami</span>
                            <h2 class="font-serif font-bold text-2xl text-gray-800 leading-tight mt-1">Konsultasikan
                                Pernikahan Impian Anda (Gratis!)</h2>
                            <p class="text-xs text-gray-500 mt-1">Punya ide kustom atau ingin bertanya tentang detail
                                layanan? Tim konsultan DuaCerita siap membantu mewujudkan hari bahagia Anda.</p>
                        </div>

                        <!-- Contact Form -->
                        <form id="contact-form" class="flex flex-col gap-4" onsubmit="handleFormSubmit(event)">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="flex flex-col gap-1.5">
                                    <label for="form-name"
                                        class="text-[11px] font-bold text-gray-600 uppercase tracking-wider">Nama
                                        Lengkap</label>
                                    <input type="text" id="form-name" placeholder="Masukkan nama lengkap Anda" required
                                        class="px-4 py-3 rounded-xl bg-white/60 border border-white/80 focus:border-brand-pink focus:bg-white text-xs outline-none transition-all placeholder:text-gray-400">
                                </div>
                                <div class="flex flex-col gap-1.5">
                                    <label for="form-email"
                                        class="text-[11px] font-bold text-gray-600 uppercase tracking-wider">Alamat
                                        Email</label>
                                    <input type="email" id="form-email" placeholder="contoh@email.com" required
                                        class="px-4 py-3 rounded-xl bg-white/60 border border-white/80 focus:border-brand-pink focus:bg-white text-xs outline-none transition-all placeholder:text-gray-400">
                                </div>
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label for="form-message"
                                    class="text-[11px] font-bold text-gray-600 uppercase tracking-wider">Pesan
                                    Konsultasi Anda</label>
                                <textarea id="form-message" rows="4"
                                    placeholder="Ceritakan konsep pernikahan digital yang Anda dambakan..." required
                                    class="px-4 py-3 rounded-xl bg-white/60 border border-white/80 focus:border-brand-pink focus:bg-white text-xs outline-none transition-all resize-none placeholder:text-gray-400"></textarea>
                            </div>
                            <button type="submit"
                                class="self-start w-full sm:w-auto px-8 py-3.5 text-xs font-semibold text-white rounded-xl bg-gradient-to-r from-brand-pink to-brand-purple hover:from-brand-pink/90 hover:to-brand-purple/90 transition-all duration-300 shadow-md hover:shadow-lg">
                                Kirim Pesan Konsultasi
                            </button>
                        </form>
                    </div>

                    <!-- Info Kontak (Kanan) -->
                    <div
                        class="lg:col-span-5 flex flex-col justify-between gap-8 lg:border-l lg:border-gray-200/50 lg:pl-10 reveal-element delay-100">
                        <div class="flex flex-col gap-6">
                            <!-- Instagram -->
                            <a href="https://instagram.com/duacerita" target="_blank"
                                class="flex gap-4 group hover:translate-x-1 transition-transform">
                                <div
                                    class="w-10 h-10 rounded-xl bg-brand-pink-light flex items-center justify-center text-brand-pink shrink-0 shadow-inner">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>
                                </div>
                                <div>
                                    <h4
                                        class="text-xs font-bold text-gray-700 uppercase tracking-wider group-hover:text-brand-pink transition-colors">
                                        Instagram Resmi</h4>
                                    <p class="text-xs text-gray-600 leading-relaxed mt-1">@duacerita</p>
                                </div>
                            </a>

                            <!-- WhatsApp -->
                            <a href="https://wa.me/6281234567890" target="_blank"
                                class="flex gap-4 group hover:translate-x-1 transition-transform">
                                <div
                                    class="w-10 h-10 rounded-xl bg-brand-purple-light flex items-center justify-center text-brand-purple shrink-0 shadow-inner">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h4
                                        class="text-xs font-bold text-gray-700 uppercase tracking-wider group-hover:text-brand-purple transition-colors">
                                        WhatsApp Hotline</h4>
                                    <p class="text-xs text-gray-600 leading-relaxed mt-1">+62 812-3456-7890 (Tanggapan
                                        Cepat)</p>
                                </div>
                            </a>

                            <!-- TikTok -->
                            <a href="https://tiktok.com/@duacerita.wedding" target="_blank"
                                class="flex gap-4 group hover:translate-x-1 transition-transform">
                                <div
                                    class="w-10 h-10 rounded-xl bg-brand-pink-light/60 flex items-center justify-center text-brand-lavender shrink-0 shadow-inner">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4
                                        class="text-xs font-bold text-gray-700 uppercase tracking-wider group-hover:text-brand-lavender transition-colors">
                                        TikTok Portfolio</h4>
                                    <p class="text-xs text-gray-600 leading-relaxed mt-1">@duacerita.wedding</p>
                                </div>
                            </a>
                        </div>

                        <!-- Philosophy box -->
                        <div class="glass-panel-accent p-5 rounded-2xl border border-white/60">
                            <p class="font-serif italic text-xs text-brand-purple leading-relaxed">
                                "Menyatukan kerabat dekat dan jauh dalam perayaan kasih suci yang terjalin erat melalui
                                teknologi digital premium."
                            </p>
                            <span class="text-[9px] font-bold text-gray-500 block mt-2 uppercase tracking-widest">—
                                Filosofi DuaCerita</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 7. Footer -->
        <footer
            class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 relative z-20 border-t border-gray-200/50 mt-auto">
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
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                    <a href="https://wa.me/6281234567890" target="_blank"
                        class="w-8 h-8 rounded-full bg-white/80 border border-white hover:border-brand-pink flex items-center justify-center text-gray-500 hover:text-brand-pink shadow-sm transition-all">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                            </path>
                        </svg>
                    </a>
                    <a href="https://tiktok.com/@duacerita.wedding" target="_blank"
                        class="w-8 h-8 rounded-full bg-white/80 border border-white hover:border-brand-pink flex items-center justify-center text-gray-500 hover:text-brand-pink shadow-sm transition-all">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"></path>
                        </svg>
                    </a>
                </div>

                <!-- Copyright -->
                <span class="text-[10px] text-gray-500">
                    &copy; 2024 Agensi Pernikahan Digital. Semua Hak Dilindungi.
                </span>
            </div>
        </footer>

    </div>

    <!-- Modals (Interaktivitas Klien) -->
    <!-- 1. Success Toast -->
    <div id="success-toast"
        class="fixed inset-0 bg-black/10 backdrop-blur-sm z-50 flex items-center justify-center hidden">
        <div
            class="glass-panel p-8 rounded-3xl max-w-xs w-full text-center border border-white/60 shadow-xl transform scale-95 transition-transform duration-300">
            <div
                class="w-12 h-12 rounded-full bg-gradient-to-tr from-brand-pink to-brand-purple flex items-center justify-center text-white mx-auto mb-4 animate-bounce p-3">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                </svg>
            </div>
            <h4 class="font-serif font-bold text-gray-800 text-lg leading-tight mb-2">Pesan Terkirim</h4>
            <p class="text-xs text-gray-600 leading-relaxed mb-6">
                Terima kasih! Pesan Anda telah kami terima. Tim konsultan DuaCerita akan menghubungi Anda dalam waktu
                1x24 jam untuk konsultasi awal gratis.
            </p>
            <button onclick="closeSuccessToast()"
                class="w-full py-2.5 text-xs font-bold text-white bg-gradient-to-r from-brand-pink to-brand-purple rounded-xl shadow-md">
                Tutup
            </button>
        </div>
    </div>

    <!-- 2. Pricing Selection Modal -->
    <div id="pricing-modal"
        class="fixed inset-0 bg-black/10 backdrop-blur-sm z-50 flex items-center justify-center hidden">
        <div
            class="glass-panel p-8 rounded-3xl max-w-sm w-full text-center border border-white/60 shadow-xl transform scale-95 transition-transform duration-300">
            <div
                class="w-14 h-14 rounded-full bg-brand-purple-light flex items-center justify-center text-brand-purple mx-auto mb-4 p-3.5">
                <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <polygon
                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                </svg>
            </div>
            <h4 class="font-serif font-bold text-gray-800 text-lg leading-tight mb-1" id="pricing-modal-title">Paket
                Terpilih</h4>
            <p class="text-[10px] text-brand-pink font-bold uppercase tracking-wider mb-3" id="pricing-modal-price">
                Harga</p>
            <p class="text-xs text-gray-600 leading-relaxed mb-6">
                Pilihan yang luar biasa! Tim desainer dan koordinator virtual DuaCerita siap membantu merealisasikan
                detail pernikahan impian Anda tanpa kerumitan.
            </p>
            <div class="flex flex-col gap-2">
                <button onclick="confirmPricingSelection()"
                    class="w-full py-2.5 text-xs font-bold text-white bg-gradient-to-r from-brand-pink to-brand-purple rounded-xl shadow-md">
                    Lanjutkan ke Konsultasi WA
                </button>
                <button onclick="closePricingModal()"
                    class="w-full py-2.5 text-xs font-bold text-gray-500 hover:text-gray-700 bg-white/50 rounded-xl transition-all">
                    Batalkan
                </button>
            </div>
        </div>
    </div>

    <script>
        // Toggle Mobile Menu
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            const isHidden = menu.classList.contains('hidden');
            if (isHidden) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        }

        // Handle Contact Form Submit
        function handleFormSubmit(event) {
            event.preventDefault();
            const toast = document.getElementById('success-toast');
            toast.classList.remove('hidden');
            document.getElementById('contact-form').reset();
        }

        // Close toast
        function closeSuccessToast() {
            document.getElementById('success-toast').classList.add('hidden');
        }

        // Package selection
        let activePackageName = '';
        function choosePackage(name, price) {
            activePackageName = name;
            document.getElementById('pricing-modal-title').textContent = 'Memilih ' + name;
            document.getElementById('pricing-modal-price').textContent = price;
            document.getElementById('pricing-modal').classList.remove('hidden');
        }

        // Close select modal
        function closePricingModal() {
            document.getElementById('pricing-modal').classList.add('hidden');
        }

        // Confirm select
        function confirmPricingSelection() {
            const message = encodeURIComponent('Halo DuaCerita, saya tertarik berkonsultasi mengenai paket ' + activePackageName + ' yang saya lihat di landing page Anda.');
            const whatsappUrl = 'https://wa.me/6281234567890?text=' + message;
            window.open(whatsappUrl, '_blank');
            closePricingModal();
        }
    </script>

    <!-- Intersection Observer for Scroll Reveal Animations -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const observerOptions = {
                root: null,
                rootMargin: "0px",
                threshold: 0.12
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("revealed");
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const revealElements = document.querySelectorAll(".reveal-element");
            revealElements.forEach(el => observer.observe(el));
        });
    </script>

</body>

</html>