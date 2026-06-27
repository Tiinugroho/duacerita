<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atur Ulang Sandi | DuaCerita</title>
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body
    class="bg-brand-cream text-gray-800 font-sans min-h-screen h-screen overflow-hidden w-full flex flex-col md:flex-row selection:bg-brand-pink/20 selection:text-brand-pink">

    <!-- Background ambient glow spheres -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
        <div class="glow-sphere w-72 h-72 bg-brand-pink-light top-12 left-12 opacity-30"></div>
        <div class="glow-sphere-reverse w-[400px] h-[400px] bg-brand-purple-light bottom-12 left-24 opacity-25"></div>
    </div>

    <!-- Left Side: Form Container -->
    <div
        class="w-full md:w-1/2 lg:w-[42%] xl:w-[38%] h-full md:h-screen overflow-y-auto bg-white border-r border-slate-100/50 relative z-10 flex flex-col justify-between p-6 sm:p-10 md:p-12 lg:p-16">

        <!-- Header (Back to Login) -->
        <div class="w-full mb-8 md:mb-0">
            <a href="{{ route('login') }}"
                class="inline-flex items-center gap-2 text-brand-pink hover:text-brand-purple transition-colors group">
                <i class="fa-solid fa-arrow-left text-xs group-hover:-translate-x-1 transition-transform"></i>
                <span class="text-[10px] font-bold tracking-wider uppercase">Kembali ke Login</span>
            </a>
        </div>

        <!-- Form Content Area -->
        <div class="my-auto py-4">
            <!-- Mobile Logo Header -->
            <div class="md:hidden text-center mb-6">
                <h2 class="font-wedding text-5xl text-brand-pink mb-1 select-none">DuaCerita</h2>
                <p class="text-xs text-gray-500 font-medium">Buat kata sandi baru Anda</p>
            </div>

            <!-- Title Header -->
            <div class="mb-8 hidden md:block">
                <h1 class="text-2xl font-serif font-bold text-gray-800 mb-1.5">Atur Ulang Sandi</h1>
                <p class="text-xs text-gray-400">
                    Masukkan kode OTP 6-digit yang kami kirimkan ke email
                    <span class="font-semibold text-gray-600">
                        {{ session('reset_email') }}
                    </span> 
                    dan buat kata sandi baru.
                </p>
            </div>

            <!-- Error Alerts -->
            @if ($errors->any())
                <div class="mb-5 p-3.5 bg-red-50 border border-red-100 text-red-600 rounded-2xl text-[11px] font-semibold space-y-1">
                    @foreach ($errors->all() as $error)
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-circle-exclamation text-xs"></i>
                            <span>{{ $error }}</span>
                        </div>
                    @endforeach
                </div>
            @endif

            <!-- Form -->
            <form action="{{ route('password.update') }}" method="POST" class="space-y-4">
                @csrf
                <input type="hidden" name="email" value="{{ session('reset_email') }}">

                <!-- OTP Code Input -->
                <div class="space-y-1.5">
                    <label for="otp_code" class="block text-[11px] font-semibold text-gray-600">Kode OTP 6-Digit</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                            <i class="fa-solid fa-key"></i>
                        </span>
                        <input type="text" id="otp_code" name="otp_code" required maxlength="6" placeholder="000000" pattern="[0-9]{6}" autocomplete="one-time-code"
                            class="w-full pl-10 pr-4 py-2.5 bg-gray-50/50 border border-slate-200/50 focus:border-brand-pink focus:bg-white focus:outline-none rounded-2xl text-center text-base font-bold tracking-[6px] transition-all placeholder:text-gray-300 placeholder:tracking-normal">
                    </div>
                </div>

                <!-- New Password Input -->
                <div class="space-y-1.5">
                    <label for="password" class="block text-[11px] font-semibold text-gray-600">Kata Sandi Baru</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" id="password" name="password" required placeholder="••••••••"
                            class="w-full pl-10 pr-10 py-2.5 bg-gray-50/50 border border-slate-200/50 focus:border-brand-pink focus:bg-white focus:outline-none rounded-2xl text-xs transition-all placeholder:text-gray-400">
                        <button type="button" onclick="togglePasswordVisibility('password', 'password-toggle-icon')" class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-gray-600 transition-colors">
                            <i id="password-toggle-icon" class="fa-regular fa-eye"></i>
                        </button>
                    </div>
                </div>

                <!-- Confirm Password Input -->
                <div class="space-y-1.5">
                    <label for="password_confirmation" class="block text-[11px] font-semibold text-gray-600">Konfirmasi Kata Sandi</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="••••••••"
                            class="w-full pl-10 pr-10 py-2.5 bg-gray-50/50 border border-slate-200/50 focus:border-brand-pink focus:bg-white focus:outline-none rounded-2xl text-xs transition-all placeholder:text-gray-400">
                        <button type="button" onclick="togglePasswordVisibility('password_confirmation', 'confirm-toggle-icon')" class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-gray-600 transition-colors">
                            <i id="confirm-toggle-icon" class="fa-regular fa-eye"></i>
                        </button>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button type="submit"
                        class="w-full py-3 px-4 text-xs font-semibold text-white bg-gradient-to-r from-brand-pink to-brand-purple hover:from-brand-pink/90 hover:to-brand-purple/90 transition-all duration-300 rounded-2xl shadow-md hover:shadow-lg focus:outline-none cursor-pointer text-center">
                        Ubah Kata Sandi
                    </button>
                </div>
            </form>
        </div>

        <!-- Footer / Redirect -->
        <div class="w-full pt-6 border-t border-gray-100 text-center">
            <p class="text-[11px] text-gray-500 font-medium">
                Kembali ke
                <a href="{{ route('login') }}"
                    class="font-bold text-brand-pink hover:text-brand-purple transition-colors ml-1">Halaman Login</a>
            </p>
        </div>
    </div>

    <!-- Right Side: Cover Image -->
    <div class="hidden md:block md:w-1/2 lg:w-[58%] xl:w-[62%] h-screen overflow-hidden relative z-10">
        <!-- Background Image -->
        <img src="https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=1000&auto=format&fit=crop"
            alt="Wedding Image" class="absolute inset-0 w-full h-full object-cover">

        <!-- Soft Brand Overlay -->
        <div
            class="absolute inset-0 bg-gradient-to-br from-brand-purple/45 to-brand-pink/45 flex flex-col justify-between p-12 lg:p-16 text-white">
            <!-- Brand and Quote Overlay -->
            <div class="space-y-4 my-auto max-w-lg">
                <h2 class="font-wedding text-6xl text-white drop-shadow-md select-none">DuaCerita</h2>
                <h3 class="text-xl font-medium tracking-wide drop-shadow-sm font-sans">
                    Setiap kisah cinta memiliki keindahan tersendiri.
                </h3>
                <p class="text-xs text-white/95 font-light leading-relaxed drop-shadow-sm">
                    Kelola undangan digital pernikahan Anda dengan portal terintegrasi. RSVP real-time, kustomisasi musik latar, buku tamu digital, dan siaran langsung berkualitas tinggi.
                </p>
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility(fieldId, iconId) {
            const passwordInput = document.getElementById(fieldId);
            const toggleIcon = document.getElementById(iconId);

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.classList.remove("fa-regular", "fa-eye");
                toggleIcon.classList.add("fa-solid", "fa-eye-slash");
            } else {
                passwordInput.type = "password";
                toggleIcon.classList.remove("fa-solid", "fa-eye-slash");
                toggleIcon.classList.add("fa-regular", "fa-eye");
            }
        }
    </script>
    <!-- Toast Notifications -->
    @include('partials.toast')

</body>

</html>
