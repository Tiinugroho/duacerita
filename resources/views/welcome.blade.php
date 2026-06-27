@extends('layouts.app')
@section('title', 'Homepage')

@section('content')
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
                    style="animation-delay: -3s;" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                        <i class="fa-solid fa-ring text-xl"></i>
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
                        <i class="fa-solid fa-video text-xl"></i>
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
                        <i class="fa-solid fa-user-tie text-xl"></i>
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
                        <span class="text-xs font-bold text-brand-purple uppercase tracking-widest block mb-1 mt-2">Paket
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
                        class="w-full py-3.5 text-xs font-bold text-white bg-gradient-to-r from-brand-pink to-brand-purple hover:from-brand-pink/90 hover:to-brand-purple/90 transition-all duration-300 shadow-md hover:shadow-lg pointer-events-auto"
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
                                class="w-10 h-10 rounded-xl bg-pink-50 flex items-center justify-center text-pink-600 shrink-0 shadow-inner">
                                <i class="fa-brands fa-instagram text-xl"></i>
                            </div>
                            <div>
                                <h4
                                    class="text-xs font-bold text-gray-700 uppercase tracking-wider group-hover:text-pink-600 transition-colors">
                                    Instagram Resmi</h4>
                                <p class="text-xs text-gray-600 leading-relaxed mt-1">@duacerita</p>
                            </div>
                        </a>

                        <!-- WhatsApp -->
                        <a href="https://wa.me/6281234567890" target="_blank"
                            class="flex gap-4 group hover:translate-x-1 transition-transform">
                            <div
                                class="w-10 h-10 rounded-xl bg-emerald-50 flex items-center justify-center text-emerald-600 shrink-0 shadow-inner">
                                <i class="fa-brands fa-whatsapp text-xl"></i>
                            </div>
                            <div>
                                <h4
                                    class="text-xs font-bold text-gray-700 uppercase tracking-wider group-hover:text-emerald-600 transition-colors">
                                    WhatsApp Hotline</h4>
                                <p class="text-xs text-gray-600 leading-relaxed mt-1">+62 812-3456-7890 (Tanggapan
                                    Cepat)</p>
                            </div>
                        </a>

                        <!-- TikTok -->
                        <a href="https://tiktok.com/@duacerita.wedding" target="_blank"
                            class="flex gap-4 group hover:translate-x-1 transition-transform">
                            <div
                                class="w-10 h-10 rounded-xl bg-zinc-100 flex items-center justify-center text-zinc-900 shrink-0 shadow-inner">
                                <i class="fa-brands fa-tiktok text-xl"></i>
                            </div>
                            <div>
                                <h4
                                    class="text-xs font-bold text-gray-700 uppercase tracking-wider group-hover:text-zinc-900 transition-colors">
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
@endsection