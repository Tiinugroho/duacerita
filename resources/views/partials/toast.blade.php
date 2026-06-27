<div x-data="{ 
         show: false, 
         type: 'success', 
         message: '', 
         title: '',
         initToast(type, title, message) {
             this.type = type;
             this.title = title;
             this.message = message;
             this.show = true;
             setTimeout(() => { this.show = false; }, 5000);
         }
     }" 
     x-init="
         $nextTick(() => {
             @if(session('status') || session('success'))
                 initToast('success', 'Berhasil', '{{ session('status') ?? session('success') }}');
             @endif
             @if(session('error'))
                 initToast('error', 'Kesalahan', '{{ session('error') }}');
             @endif
             @if($errors->any())
                 initToast('error', 'Terjadi Kesalahan', '{{ $errors->first() }}');
             @endif
         });
     "
     x-show="show"
     x-transition:enter="transition ease-out duration-300 transform"
     x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
     x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
     x-transition:leave="transition ease-in duration-200 transform"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
     class="fixed top-5 right-5 max-w-sm w-full bg-[#faf8f5] border border-slate-200/50 shadow-2xl rounded-2xl overflow-hidden pointer-events-auto flex"
     style="z-index: 9999; display: none;"
     x-cloak>
     <!-- Left color strip -->
     <div class="w-1.5 shrink-0" :class="type === 'success' ? 'bg-gradient-to-b from-[#d473a9] to-[#8f74be]' : 'bg-[#8f74be]'"></div>
     
     <div class="p-4 flex-1 flex items-start gap-3">
         <!-- Icon -->
         <div class="h-8 w-8 rounded-xl flex items-center justify-center shrink-0" :class="type === 'success' ? 'bg-[#fde5ec] text-[#d473a9]' : 'bg-[#e3dffd] text-[#8f74be]'">
             <template x-if="type === 'success'">
                 <i class="fa-solid fa-circle-check text-sm"></i>
             </template>
             <template x-if="type === 'error'">
                 <i class="fa-solid fa-circle-exclamation text-sm"></i>
             </template>
         </div>
         
         <!-- Details -->
         <div class="flex-1 min-w-0 pr-2 text-left">
             <p class="text-xs font-bold text-gray-900 font-sans" x-text="title"></p>
             <p class="text-[11px] text-gray-500 mt-1 font-medium leading-relaxed" x-text="message"></p>
         </div>
         
         <!-- Close Button -->
         <button @click="show = false" class="text-gray-400 hover:text-gray-600 focus:outline-none cursor-pointer">
             <i class="fa-solid fa-xmark text-xs"></i>
         </button>
     </div>
</div>
