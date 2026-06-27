<!DOCTYPE html>
<html lang="en"
    x-data="{ sidebarOpen: true, mobileSidebarOpen: false, profileDropdown: false, notificationDropdown: false, activeModal: null, selectedApplicant: {}, showLogoutModal: false }">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AbynnTech Dashboard') | {{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('adm/assets/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adm/assets/css/buttons.dataTables.min.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Define Brand Theme Colors for Tailwind v4 CDN -->
    <style type="tailwindcss">
        @theme {
            --color-brand-cream: #faf8f5;
            --color-brand-pink: #d473a9;
            --color-brand-pink-light: #fde5ec;
            --color-brand-purple: #8f74be;
            --color-brand-purple-light: #e3dffd;
            --color-brand-lavender: #b0a8b9;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('adm/assets/css/style.css') }}">

    <style>
        [x-cloak] {
            display: none !important;
        }

        body {
            opacity: 0;
            visibility: hidden;
        }

        body.ready {
            opacity: 1;
            visibility: visible;
            transition: opacity 0.3s ease-in;
        }
    </style>
    @stack('styles')
</head>

<body class="text-slate-700 antialiased overflow-x-hidden min-h-screen bg-[#f4f8fa] flex flex-col justify-between">
    <div class="hidden w-[280px] w-[88px] lg:pl-[280px] lg:pl-[88px]"></div>
    <div
        class="fixed top-[-10%] left-[-10%] w-[50vw] h-[50vw] rounded-full bg-brand-pink-light/40 blur-[130px] pointer-events-none z-0">
    </div>
    <div
        class="fixed bottom-[-10%] right-[-10%] w-[40vw] h-[40vw] rounded-full bg-brand-purple-light/25 blur-[110px] pointer-events-none z-0">
    </div>

    <!-- Sidebar Partial -->
    @include('admin.partials.sidebar')

    <!-- Main Content Wrapper -->
    <div class="flex-1 flex flex-col min-h-screen z-10 w-full transition-all duration-300 min-w-0"
        :class="sidebarOpen ? 'lg:pl-[280px]' : 'lg:pl-[88px]'">

        <!-- Header Partial -->
        @include('admin.partials.header')

        <!-- Dynamic Page Content -->
        <main class="flex flex-col xl:flex-row flex-1 p-4 lg:p-8 gap-6 w-full max-w-[100vw]">
            <div class="flex-1 space-y-6 min-w-0 w-full">
                @yield('content')
            </div>
        </main>

        <!-- Footer Partial -->
        @include('admin.partials.footer')
    </div>

    <!-- Modals Partial -->
    @include('admin.partials.modals')

    <!-- Logout Confirmation Modal -->
    <div x-show="showLogoutModal"
        class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/40 backdrop-blur-sm"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak>
        <div class="bg-white rounded-2xl p-6 shadow-xl border border-slate-100 max-w-sm w-full transform transition-all"
            @click.away="showLogoutModal = false" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="scale-95 translate-y-4" x-transition:enter-end="scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="scale-100 translate-y-0"
            x-transition:leave-end="scale-95 translate-y-4">
            <div class="text-center">
                <div
                    class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-rose-50 text-rose-600 mb-4">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 11-6 0v-1m6-3a2 2 0 11-4 0h4v3"></path>
                    </svg>
                </div>
                <h3 class="text-sm font-bold text-slate-900 font-heading">Konfirmasi Keluar</h3>
                <p class="text-xs text-slate-500 mt-2">
                    Apakah Anda yakin ingin keluar dari sistem DuaCerita? Sesi aktif Anda akan diakhiri.
                </p>
            </div>
            <div class="mt-6 flex items-center gap-3">
                <button @click="showLogoutModal = false"
                    class="flex-1 bg-slate-50 hover:bg-slate-100 text-slate-600 py-2 rounded-xl text-xs font-semibold border border-slate-200 transition-all cursor-pointer">
                    Batal
                </button>
                <form action="{{ route('logout') }}" method="POST" class="flex-1">
                    @csrf
                    <button type="submit"
                        class="w-full bg-rose-600 hover:bg-rose-700 text-white py-2 rounded-xl text-xs font-semibold shadow-sm shadow-rose-200 transition-all cursor-pointer">
                        Ya, Keluar
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Toast Notifications -->
    @include('partials.toast')

    <!-- Scripts -->
    <script src="{{ asset('adm/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('adm/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adm/assets/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('adm/assets/js/jszip.min.js') }}"></script>
    <script src="{{ asset('adm/assets/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('adm/assets/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('adm/assets/js/buttons.html5.min.js') }}"></script>

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                document.body.classList.add('ready');
            }, 100);
        });
    </script>

    @stack('scripts')
</body>

</html>