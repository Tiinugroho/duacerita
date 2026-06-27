<!-- Footer -->
<footer
    class="w-full bg-white/90 backdrop-blur-md border-t border-slate-100 px-4 lg:px-8 py-4 mt-auto flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-400 sticky bottom-0 z-30">
    <div>
        &copy; {{ date('Y') }} <span class="font-semibold text-slate-700">{{ config('app.name') }}</span>. All Rights
        Reserved.
    </div>
    <div class="flex items-center gap-4">
        <a href="#" class="hover:text-slate-600 transition-colors">Privacy Policy</a>
        <a href="#" class="hover:text-slate-600 transition-colors">Terms of Service</a>
        <span class="text-slate-200">|</span>
        <span>Version 1.0.0</span>
    </div>
</footer>
<!-- End Footer -->