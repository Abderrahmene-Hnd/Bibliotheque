@if (session()->has('success'))
    <div x-data="{show:true}"
         x-init="setTimeout(()=> show = false,3000)"
         x-show="show"
         x-transition:leave="transition ease-in duration-700"
         x-transition:leave-end="opacity-0 scale-90"
         class="fixed bg-green-500 text-white py-3 px-6 rounded-3xl bottom-3 right-3 text-xl">
        <svg class="flex-shrink-0 mb-1.5 inline w-5 h-5 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M 10 18 a 8 8 0 1 0 0 -16 a 8 8 0 0 0 0 16 Z m 3.857 -9.809 a 0.75 0.75 0 0 0 -1.214 -0.882 l -3.483 4.79 l -1.88 -1.88 a 0.75 0.75 0 1 0 -1.06 1.061 l 2.5 2.5 a 0.75 0.75 0 0 0 1.137 -0.089 l 4 -5.5 Z" clip-rule="evenodd"></path>
        </svg>
        <span>{{ session('success') }}</span>
    </div>
@endif
