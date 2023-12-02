@error('login')
    <div x-data="{show:true}"
         x-init="setTimeout(()=> show = false,3000)"
         x-show="show"
         x-transition:leave="transition ease-in duration-700"
         x-transition:leave-end="opacity-0 scale-90"
         class="fixed bg-red-400 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
    <svg class="flex-shrink-0 mb-0.5 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z"
      clip-rule="evenodd"></path>
    </svg>
        <span>{{ $message }}</span>
    </div>
@enderror
