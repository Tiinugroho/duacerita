<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar | DuaCerita</title>
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Alpine.js for Interactive Modals -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body
    class="bg-brand-cream text-gray-800 font-sans min-h-screen h-screen overflow-hidden w-full flex flex-col md:flex-row selection:bg-brand-pink/20 selection:text-brand-pink"
    x-data="{ showTermsModal: false, showPrivacyModal: false }">

    <!-- Background ambient glow spheres (behind left side panel) -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
        <div class="glow-sphere w-72 h-72 bg-brand-pink-light top-12 left-12 opacity-30"></div>
        <div class="glow-sphere-reverse w-[400px] h-[400px] bg-brand-purple-light bottom-12 left-24 opacity-25"></div>
    </div>

    <!-- Left Side: Registration Form (Fixed height, independent scrolling) -->
    <div
        class="w-full md:w-1/2 lg:w-[42%] xl:w-[38%] h-full md:h-screen overflow-y-auto bg-white border-r border-slate-100/50 relative z-10 flex flex-col justify-between p-6 sm:p-10 md:p-12 lg:p-16">

        <!-- Header (Back to Home) -->
        <div class="w-full mb-6 md:mb-0">
            <a href="/"
                class="inline-flex items-center gap-2 text-brand-pink hover:text-brand-purple transition-colors group">
                <i class="fa-solid fa-arrow-left text-xs group-hover:-translate-x-1 transition-transform"></i>
                <span class="text-[10px] font-bold tracking-wider uppercase">Kembali ke Beranda</span>
            </a>
        </div>

        <!-- Form Content Area -->
        <div class="my-auto py-3">
            <!-- Mobile Logo Header (Only visible on small screens) -->
            <div class="md:hidden text-center mb-6">
                <h2 class="font-wedding text-5xl text-brand-pink mb-1 select-none">DuaCerita</h2>
                <p class="text-xs text-gray-500 font-medium">Daftar sekarang untuk memulai acara Anda</p>
            </div>

            <!-- Title Header -->
            <div class="mb-6 hidden md:block">
                <h1 class="text-2xl font-serif font-bold text-gray-800 mb-1.5">Buat Akun Baru</h1>
                <p class="text-xs text-gray-455">Mulai rancang momen impian Anda secara mudah</p>
            </div>

            <!-- Form -->
            <form action="{{ route('register') }}" method="POST" class="space-y-3.5">
                @csrf

                <!-- Google OAuth Button -->
                <div>
                    <a href="{{ url('auth/google') }}"
                        class="w-full flex items-center justify-center gap-3 px-4 py-2.5 bg-white hover:bg-gray-50 border border-slate-200/50 rounded-2xl text-xs font-semibold text-gray-600 transition-all duration-200 hover:shadow-sm">
                        <!-- Custom Google SVG Icon -->
                        <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                                fill="#4285F4" />
                            <path
                                d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                                fill="#34A853" />
                            <path
                                d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"
                                fill="#FBBC05" />
                            <path
                                d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"
                                fill="#EA4335" />
                        </svg>
                        <span>Daftar dengan Google</span>
                    </a>
                </div>

                <!-- Custom Divider -->
                <div class="flex items-center gap-4 py-0.5">
                    <div class="flex-1 h-px bg-gray-200"></div>
                    <span class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">atau dengan email</span>
                    <div class="flex-1 h-px bg-gray-200"></div>
                </div>

                <!-- Name Input -->
                <div class="space-y-1">
                    <label for="name" class="block text-[11px] font-semibold text-gray-600">Nama Lengkap</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                            <i class="fa-regular fa-user"></i>
                        </span>
                        <input type="text" id="name" name="name" required placeholder="John Doe"
                            class="w-full pl-10 pr-4 py-2.5 bg-gray-50/50 border border-slate-200/50 focus:border-brand-pink focus:bg-white focus:outline-none rounded-2xl text-xs transition-all placeholder:text-gray-400 @error('name') border-red-500 @enderror"
                            value="{{ old('name') }}">
                    </div>
                    @error('name')
                        <p class="text-[10px] text-red-500 mt-0.5 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Input -->
                <div class="space-y-1">
                    <label for="email" class="block text-[11px] font-semibold text-gray-600">Alamat Email</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                            <i class="fa-regular fa-envelope"></i>
                        </span>
                        <input type="email" id="email" name="email" required placeholder="nama@contoh.com"
                            class="w-full pl-10 pr-4 py-2.5 bg-gray-50/50 border border-slate-200/50 focus:border-brand-pink focus:bg-white focus:outline-none rounded-2xl text-xs transition-all placeholder:text-gray-400 @error('email') border-red-500 @enderror"
                            value="{{ old('email') }}">
                    </div>
                    @error('email')
                        <p class="text-[10px] text-red-500 mt-0.5 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="space-y-1">
                    <label for="password" class="block text-[11px] font-semibold text-gray-600">Kata Sandi</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" id="password" name="password" required placeholder="Min. 8 karakter"
                            class="w-full pl-10 pr-10 py-2.5 bg-gray-50/50 border border-slate-200/50 focus:border-brand-pink focus:bg-white focus:outline-none rounded-2xl text-xs transition-all placeholder:text-gray-400 @error('password') border-red-500 @enderror">
                        <button type="button" onclick="togglePasswordVisibility('password', 'password-toggle-icon')"
                            class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-gray-600 transition-colors">
                            <i id="password-toggle-icon" class="fa-regular fa-eye"></i>
                        </button>
                    </div>
                    @error('password')
                        <p class="text-[10px] text-red-500 mt-0.5 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Confirmation Input -->
                <div class="space-y-1">
                    <label for="password_confirmation" class="block text-[11px] font-semibold text-gray-600">Konfirmasi
                        Kata Sandi</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                            <i class="fa-solid fa-lock-open"></i>
                        </span>
                        <input type="password" id="password_confirmation" name="password_confirmation" required
                            placeholder="Ketik ulang kata sandi"
                            class="w-full pl-10 pr-10 py-2.5 bg-gray-50/50 border border-slate-200/50 focus:border-brand-pink focus:bg-white focus:outline-none rounded-2xl text-xs transition-all">
                        <button type="button"
                            onclick="togglePasswordVisibility('password_confirmation', 'confirm-toggle-icon')"
                            class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-gray-600 transition-colors">
                            <i id="confirm-toggle-icon" class="fa-regular fa-eye"></i>
                        </button>
                    </div>
                </div>

                <!-- Agree to Terms -->
                <div class="flex items-start py-0.5">
                    <input type="checkbox" id="terms" name="terms" required
                        class="w-4 h-4 text-brand-pink bg-gray-50 border-slate-200 rounded focus:ring-brand-pink/50 accent-brand-pink mt-0.5">
                    <label for="terms" class="ml-2.5 text-[10px] text-gray-500 font-medium leading-normal select-none">
                        Saya menyetujui <a href="#" @click.prevent="showTermsModal = true"
                            class="font-bold text-brand-pink hover:underline">Ketentuan Layanan</a> & <a href="#"
                            @click.prevent="showPrivacyModal = true"
                            class="font-bold text-brand-pink hover:underline">Kebijakan Privasi</a>.
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="pt-1.5">
                    <button type="submit"
                        class="w-full py-3 px-4 text-xs font-semibold text-white bg-gradient-to-r from-brand-pink to-brand-purple hover:from-brand-pink/90 hover:to-brand-purple/90 transition-all duration-300 rounded-2xl shadow-md hover:shadow-lg focus:outline-none cursor-pointer text-center">
                        Daftar Akun
                    </button>
                </div>
            </form>
        </div>

        <!-- Footer / Redirect -->
        <div class="w-full pt-6 border-t border-gray-100 text-center">
            <p class="text-[11px] text-gray-500 font-medium">
                Sudah memiliki akun?
                <a href="{{ route('login') }}"
                    class="font-bold text-brand-pink hover:text-brand-purple transition-colors ml-1">Masuk Sekarang</a>
            </p>
        </div>
    </div>

    <!-- Right Side: Cover Image (Fixed full-viewport container) -->
    <div class="hidden md:block md:w-1/2 lg:w-[58%] xl:w-[62%] h-screen overflow-hidden relative z-10">
        <!-- Background Image -->
        <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?q=80&w=1000&auto=format&fit=crop"
            alt="Wedding Registry" class="absolute inset-0 w-full h-full object-cover">

        <!-- Soft Brand Overlay -->
        <div
            class="absolute inset-0 bg-gradient-to-br from-brand-purple/45 to-brand-pink/45 flex flex-col justify-between p-12 lg:p-16 text-white">
            <!-- Brand and Quote Overlay -->
            <div class="space-y-4 my-auto max-w-lg">
                <h2 class="font-wedding text-6xl text-white drop-shadow-md select-none">DuaCerita</h2>
                <h3 class="font-serif text-3xl font-bold leading-tight drop-shadow-sm">
                    Mulai rancang langkah indah Anda bersama kami.
                </h3>
                <p class="text-xs text-white/95 font-light leading-relaxed drop-shadow-sm">
                    Daftar untuk mengklaim tautan undangan digital kustom Anda, mendesain kolase galeri interaktif,
                    serta membuat undangan musik yang dapat dibagikan dengan sekali sentuh.
                </p>
            </div>

            <!-- Bottom Copyright -->
            <div class="text-[10px] text-white/80 font-medium mt-auto">
                &copy; {{ date('Y') }} DuaCerita Wedding. All Rights Reserved.
            </div>
        </div>
    </div>

    <!-- Modal: Ketentuan Layanan -->
    <div x-show="showTermsModal"
        class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/40 backdrop-blur-sm" x-cloak
        x-transition style="display: none;">
        <div class="bg-white rounded-3xl border border-slate-100/50 shadow-2xl max-w-lg w-full p-6 text-xs text-gray-600 relative flex flex-col max-h-[80vh]"
            @click.away="showTermsModal = false">
            <div class="flex items-center justify-between pb-3 border-b border-gray-100">
                <h3 class="text-sm font-bold font-serif text-gray-800">Ketentuan Layanan DuaCerita</h3>
                <button @click="showTermsModal = false" class="text-gray-400 hover:text-gray-655 transition-colors">
                    <i class="fa-solid fa-xmark text-base"></i>
                </button>
            </div>
            <div class="overflow-y-auto py-4 space-y-3 leading-relaxed pr-1 text-slate-500">
                <p class="font-semibold text-gray-700">1. Penerimaan Ketentuan</p>
                <p>Dengan mengakses dan mendaftar di DuaCerita, Anda dianggap telah membaca, memahami, dan menyetujui
                    seluruh ketentuan layanan yang kami tetapkan di sini.</p>
                <p class="font-semibold text-gray-700">2. Penggunaan Layanan</p>
                <p>Pengguna bertanggung jawab penuh atas informasi dan data konten yang diunggah ke undangan digital
                    mereka, termasuk foto, teks detail acara, musik pengiring, dan detail RSVP tamu.</p>
                <p class="font-semibold text-gray-700">3. Hak Kekayaan Intelektual</p>
                <p>Seluruh materi desain, aset ilustrasi, template CSS/HTML, dan kode sistem pada platform DuaCerita
                    adalah hak kekayaan intelektual milik DuaCerita. Pengguna hanya diberikan hak guna personal
                    non-komersial.</p>
                <p class="font-semibold text-gray-700">4. Pembatalan & Pengembalian Dana</p>
                <p>Kebijakan pengembalian dana atau upgrade paket tunduk pada ketentuan administrasi yang berlaku pada
                    masing-masing transaksi pembayaran.</p>
            </div>
            <div class="pt-4 border-t border-gray-100 flex justify-end">
                <button @click="showTermsModal = false"
                    class="px-5 py-2.5 bg-gradient-to-r from-brand-pink to-brand-purple text-white font-semibold rounded-xl hover:shadow transition-all cursor-pointer">Saya
                    Mengerti</button>
            </div>
        </div>
    </div>

    <!-- Modal: Kebijakan Privasi -->
    <div x-show="showPrivacyModal"
        class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/40 backdrop-blur-sm" x-cloak
        x-transition style="display: none;">
        <div class="bg-white rounded-3xl border border-slate-100/50 shadow-2xl max-w-lg w-full p-6 text-xs text-gray-600 relative flex flex-col max-h-[80vh]"
            @click.away="showPrivacyModal = false">
            <div class="flex items-center justify-between pb-3 border-b border-gray-100">
                <h3 class="text-sm font-bold font-serif text-gray-800">Kebijakan Privasi DuaCerita</h3>
                <button @click="showPrivacyModal = false" class="text-gray-400 hover:text-gray-655 transition-colors">
                    <i class="fa-solid fa-xmark text-base"></i>
                </button>
            </div>
            <div class="overflow-y-auto py-4 space-y-3 leading-relaxed pr-1 text-slate-500">
                <p class="font-semibold text-gray-700">1. Pengumpulan Informasi</p>
                <p>Kami mengumpulkan data personal yang Anda berikan secara sukarela saat pendaftaran seperti nama,
                    email, dan detail kontak Google Anda (apabila menggunakan integrasi Google Auth).</p>
                <p class="font-semibold text-gray-700">2. Keamanan Data</p>
                <p>Kami berkomitmen untuk menjaga keamanan data personal Anda dari akses yang tidak sah dengan
                    menggunakan protokol keamanan enkripsi standar industri.</p>
                <p class="font-semibold text-gray-700">3. Penggunaan Cookies</p>
                <p>DuaCerita menggunakan cookies browser untuk mengidentifikasi session login Anda dan mempermudah
                    kustomisasi dashboard administrasi Anda.</p>
            </div>
            <div class="pt-4 border-t border-gray-100 flex justify-end">
                <button @click="showPrivacyModal = false"
                    class="px-5 py-2.5 bg-gradient-to-r from-brand-pink to-brand-purple text-white font-semibold rounded-xl hover:shadow transition-all cursor-pointer">Saya
                    Mengerti</button>
            </div>
        </div>
    </div>

    <!-- Toggle Password Visibility JS -->
    <script>
        function togglePasswordVisibility(fieldId, iconId) {
            const passwordInput = document.getElementById(fieldId);
            const toggleIcon = document.getElementById(iconId);

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.classList.remove("fa-regular", "fa-eye");
                toggleIcon.classList.add("fa-regular", "fa-eye-slash");
            } else {
                passwordInput.type = "password";
                toggleIcon.classList.remove("fa-regular", "fa-eye-slash");
                toggleIcon.classList.add("fa-regular", "fa-eye");
            }
        }
    </script>

</body>

</html>