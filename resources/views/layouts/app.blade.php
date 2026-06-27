<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | {{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
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

        @include('partials.header')

        @yield('content')

        @include('partials.footer')

    </div>

    @include('partials.modals')

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

            const observer = new window.IntersectionObserver((entries, observer) => {
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

    @stack('scripts')

</body>

</html>