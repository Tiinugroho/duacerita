<!-- Modals -->
<div x-show="activeModal"
    class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/30 backdrop-blur-sm"
    style="display: none;" x-transition>
    <div class="bg-white rounded-2xl shadow-xl border border-slate-100 max-w-sm w-full p-6 text-xs text-slate-600 relative"
        @click.away="activeModal = null">

        <!-- View Applicant Modal -->
        <div x-show="activeModal === 'view'">
            <h3 class="text-sm font-bold font-heading text-slate-900 mb-4 flex items-center gap-2">
                <svg class="w-4 h-4 text-[#1591DC]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                    </path>
                </svg>
                <span>Applicant Profile Data</span>
            </h3>
            <div class="space-y-2.5 bg-slate-50 p-4 rounded-xl border border-slate-100">
                <p class="text-[10px] text-slate-400">Registration ID: <span
                        class="text-slate-950 font-semibold block text-xs mt-0.5"
                        x-text="selectedApplicant.id"></span></p>
                <p class="text-[10px] text-slate-400">Full Legal Name: <span
                        class="text-slate-950 font-semibold block text-xs mt-0.5"
                        x-text="selectedApplicant.name"></span></p>
                <p class="text-[10px] text-slate-400">Assigned Faculty: <span
                        class="text-slate-950 font-semibold block text-xs mt-0.5"
                        x-text="selectedApplicant.faculty"></span></p>
            </div>
            <button @click="activeModal = null"
                class="mt-4 w-full py-2 bg-[#2C5EAD] hover:bg-[#1591DC] text-white font-semibold rounded-xl transition-all cursor-pointer">Close
                Profile Workspace</button>
        </div>

        <!-- Edit Applicant Modal -->
        <div x-show="activeModal === 'edit'">
            <h3 class="text-sm font-bold font-heading text-slate-900 mb-4 flex items-center gap-2">
                <svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                    </path>
                </svg>
                <span>Modification Matrix</span>
            </h3>
            <div class="space-y-3">
                <div>
                    <label class="block text-[10px] font-semibold text-slate-400 mb-1">Applicant Name</label>
                    <input type="text"
                        class="w-full border border-slate-200 px-3 py-1.5 rounded-lg focus:outline-none focus:border-[#2C5EAD]"
                        :value="selectedApplicant.name">
                </div>
            </div>
            <div class="flex gap-2 mt-5">
                <button @click="activeModal = null"
                    class="flex-1 py-1.5 bg-slate-100 text-slate-600 font-medium rounded-lg hover:bg-slate-200 transition-all cursor-pointer">Cancel</button>
                <button @click="activeModal = null"
                    class="flex-1 py-1.5 bg-[#2C5EAD] text-white font-semibold rounded-lg hover:bg-[#1591DC] transition-all cursor-pointer">Save
                    Updates</button>
            </div>
        </div>

        <!-- Delete Applicant Modal -->
        <div x-show="activeModal === 'delete'" class="text-center">
            <div
                class="h-10 w-10 bg-rose-50 text-rose-600 rounded-full flex items-center justify-center mx-auto mb-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                    </path>
                </svg>
            </div>
            <h3 class="text-sm font-bold font-heading text-slate-900 mb-1">Destructive Action Warning</h3>
            <p class="text-[11px] text-slate-400 leading-relaxed mb-4">Are you certain you want to remove <span
                    class="font-bold text-slate-900" x-text="selectedApplicant.name"></span>?</p>
            <div class="flex gap-2">
                <button @click="activeModal = null"
                    class="flex-1 py-1.5 bg-slate-100 text-slate-600 font-medium rounded-lg hover:bg-slate-200 transition-all cursor-pointer">Cancel</button>
                <button @click="activeModal = null"
                    class="flex-1 py-1.5 bg-rose-600 text-white font-semibold rounded-lg hover:bg-rose-700 transition-all cursor-pointer">Confirm</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modals -->
