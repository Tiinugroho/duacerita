<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi OTP | DuaCerita</title>
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Alpine.js for interactive countdown -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body
    class="bg-brand-cream text-gray-800 font-sans min-h-screen h-screen overflow-hidden w-full flex flex-col md:flex-row selection:bg-brand-pink/20 selection:text-brand-pink">

    <!-- Background ambient glow spheres -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
        <div class="glow-sphere w-72 h-72 bg-brand-pink-light top-12 left-12 opacity-30"></div>
        <div class="glow-sphere-reverse w-[400px] h-[400px] bg-brand-purple-light bottom-12 left-24 opacity-25"></div>
    </div>

    <!-- Left Side: OTP Verification Form (Fixed height, independent scrolling) -->
    <div
        class="w-full md:w-1/2 lg:w-[42%] xl:w-[38%] h-full md:h-screen overflow-y-auto bg-white border-r border-slate-100/50 relative z-10 flex flex-col justify-between p-6 sm:p-10 md:p-12 lg:p-16">

        <!-- Header (Logout / Return to Login) -->
        <div class="w-full mb-8 md:mb-0">
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit"
                    class="inline-flex items-center gap-2 text-brand-pink hover:text-brand-purple transition-colors group cursor-pointer border-none bg-transparent p-0">
                    <i class="fa-solid fa-arrow-left text-xs group-hover:-translate-x-1 transition-transform"></i>
                    <span class="text-[10px] font-bold tracking-wider uppercase">Kembali ke Login</span>
                </button>
            </form>
        </div>

        <!-- Form Content Area -->
        <div class="my-auto py-6" x-data="{ timer: 60, canResend: false }"
            x-init="let interval = setInterval(() => { if(timer > 0) { timer-- } else { canResend = true; clearInterval(interval) } }, 1000)">

            <!-- Mobile Logo Header -->
            <div class="md:hidden text-center mb-6">
                <h2 class="font-wedding text-5xl text-brand-pink mb-1 select-none">DuaCerita</h2>
                <p class="text-xs text-gray-500 font-medium">Verifikasi Email Anda</p>
            </div>

            <!-- Title Header -->
            <div class="mb-8 hidden md:block">
                <h1 class="text-2xl font-serif font-bold text-gray-800 mb-1.5">Verifikasi OTP</h1>
                <p class="text-xs text-gray-400">
                    Masukkan 6 digit kode yang telah dikirim ke
                    <span class="font-semibold text-gray-600">
                        @if(Auth::check())
                            {{ substr(Auth::user()->email, 0, 3) }}***@ {{ explode('@', Auth::user()->email)[1] ?? '' }}
                        @endif
                    </span>
                </p>
            </div>

            <!-- Session Status Alert -->
            @if (session('status'))
                <div
                    class="mb-5 p-3.5 bg-green-50 border border-green-100 text-green-600 rounded-2xl text-[11px] font-semibold flex items-center gap-2.5">
                    <i class="fa-solid fa-circle-check text-xs"></i>
                    <span>{{ session('status') }}</span>
                </div>
            @endif

            <!-- Form -->
            <form action="{{ url('/verify-otp') }}" method="POST" class="space-y-5">
                @csrf

                <!-- OTP Input -->
                <div class="space-y-2">
                    <label for="otp_code" class="block text-[11px] font-semibold text-gray-600">Kode Verifikasi</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                            <i class="fa-solid fa-key"></i>
                        </span>
                        <input type="text" id="otp_code" name="otp_code" required maxlength="6" placeholder="000000"
                            pattern="[0-9]{6}" autocomplete="one-time-code"
                            class="w-full pl-10 pr-4 py-3 bg-gray-50/50 border border-slate-200/50 focus:border-brand-pink focus:bg-white focus:outline-none rounded-2xl text-center text-lg font-bold tracking-[8px] transition-all placeholder:text-gray-300 placeholder:tracking-normal @error('otp_code') border-red-500 @enderror">
                    </div>
                    @error('otp_code')
                        <p class="text-[10px] text-red-500 mt-1 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button type="submit"
                        class="w-full py-3 px-4 text-xs font-semibold text-white bg-gradient-to-r from-brand-pink to-brand-purple hover:from-brand-pink/90 hover:to-brand-purple/90 transition-all duration-300 rounded-2xl shadow-md hover:shadow-lg focus:outline-none cursor-pointer text-center">
                        Verifikasi Kode
                    </button>
                </div>
            </form>

            <!-- Resend Container -->
            <div class="mt-6 text-center">
                <p class="text-[11px] text-gray-500 font-medium">
                    Belum menerima kode OTP?
                </p>
                <div class="mt-2">
                    <template x-if="!canResend">
                        <span
                            class="text-[10px] font-bold text-gray-400 uppercase tracking-wider bg-gray-50 px-3.5 py-1.5 rounded-full border border-slate-100/50">
                            Kirim ulang dalam <span x-text="timer"></span>s
                        </span>
                    </template>
                    <template x-if="canResend">
                        <form action="{{ route('otp.resend') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit"
                                class="text-xs font-bold text-brand-pink hover:text-brand-purple transition-colors cursor-pointer border-none bg-transparent p-0 underline decoration-brand-pink/30 hover:decoration-brand-purple/30">
                                Kirim Ulang OTP
                            </button>
                        </form>
                    </template>
                </div>
            </div>
        </div>

        <!-- Footer / Redirect -->
        <div class="w-full pt-6 border-t border-gray-100 text-center">
            <p class="text-[10px] text-gray-400 font-medium">
                &copy; {{ date('Y') }} DuaCerita Wedding. All Rights Reserved.
            </p>
        </div>
    </div>

    <!-- Right Side: Cover Image -->
    <div class="hidden md:block md:w-1/2 lg:w-[58%] xl:w-[62%] h-screen overflow-hidden relative z-10">
        <!-- Background Image -->
        <img src="https://images.unsplash.com/photo-1465495976277-4387d4b0b4c6?q=80&w=1000&auto=format&fit=crop"
            alt="Wedding Couple" class="absolute inset-0 w-full h-full object-cover">

        <!-- Soft Brand Overlay -->
        <div
            class="absolute inset-0 bg-gradient-to-br from-brand-purple/45 to-brand-pink/45 flex flex-col justify-between p-12 lg:p-16 text-white">
            <!-- Decorative Top Sparkle -->
            <div class="text-right">
                <i class="fa-solid fa-star text-xl opacity-75"></i>
            </div>

            <!-- Brand and Quote Overlay -->
            <div class="space-y-4 my-auto max-w-lg">
                <h2 class="font-wedding text-6xl text-white drop-shadow-md select-none">DuaCerita</h2>
                <h3 class="font-serif text-3xl font-bold leading-tight drop-shadow-sm">
                    Langkah awal verifikasi kebahagiaan Anda.
                </h3>
                <p class="text-xs text-white/95 font-light leading-relaxed drop-shadow-sm">
                    Kami menjaga privasi dan keamanan setiap data kisah Anda dengan validasi otentikasi menyeluruh, demi
                    kenyamanan Anda dan seluruh para undangan kehormatan.
                </p>
            </div>

            <!-- Bottom Copyright -->
            <div class="text-[10px] text-white/80 font-medium mt-auto">
                &copy; {{ date('Y') }} DuaCerita Wedding. All Rights Reserved.
            </div>
        </div>
    </div>

    <!-- Toast Notifications -->
    @include('partials.toast')

</body>

</html>