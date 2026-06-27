<!-- Modals (Interaktivitas Klien) -->
<!-- 1. Success Toast -->
<div id="success-toast"
    class="fixed inset-0 bg-black/10 backdrop-blur-sm z-50 flex items-center justify-center hidden">
    <div
        class="glass-panel p-8 rounded-3xl max-w-xs w-full text-center border border-white/60 shadow-xl transform scale-95 transition-transform duration-300">
        <div
            class="w-12 h-12 rounded-full bg-gradient-to-tr from-brand-pink to-brand-purple flex items-center justify-center text-white mx-auto mb-4 animate-bounce">
            <i class="fa-solid fa-heart text-lg"></i>
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
            class="w-14 h-14 rounded-full bg-brand-purple-light flex items-center justify-center text-brand-purple mx-auto mb-4">
            <i class="fa-solid fa-star text-xl"></i>
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
