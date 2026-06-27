<!DOCTYPE html>
<html lang="en"
    x-data="{ sidebarOpen: true, mobileSidebarOpen: false, profileDropdown: false, notificationDropdown: false, activeModal: null, selectedApplicant: {} }">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AbynnTech Dashboard') | {{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('adm/assets/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adm/assets/css/buttons.dataTables.min.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('adm/assets/icon/OIP.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('adm/assets/icon/logo.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

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
        class="fixed top-[-10%] left-[-10%] w-[50vw] h-[50vw] rounded-full bg-[#C4E2F5]/40 blur-[130px] pointer-events-none z-0">
    </div>
    <div
        class="fixed bottom-[-10%] right-[-10%] w-[40vw] h-[40vw] rounded-full bg-[#4BB8FA]/20 blur-[110px] pointer-events-none z-0">
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

    <!-- Scripts -->
    <script src="{{ asset('adm/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('adm/assets/js/jquery.dataTables.min.js') }}"></script>
    <script defer src="{{ asset('adm/assets/js/alpine.min.js') }}"></script>
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