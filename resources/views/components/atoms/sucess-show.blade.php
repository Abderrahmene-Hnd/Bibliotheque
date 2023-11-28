@if (session()->has('success'))
<div class="flex p-4 mb-4 text-sm text-green-700 rounded-lg bg-green-100 dark:bg-gray-800 dark:text-blue-400" role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path fill-rule="evenodd" d="M 10 18 a 8 8 0 1 0 0 -16 a 8 8 0 0 0 0 16 Z m 3.857 -9.809 a 0.75 0.75 0 0 0 -1.214 -0.882 l -3.483 4.79 l -1.88 -1.88 a 0.75 0.75 0 1 0 -1.06 1.061 l 2.5 2.5 a 0.75 0.75 0 0 0 1.137 -0.089 l 4 -5.5 Z" clip-rule="evenodd"></path>
    </svg>
    <span class="sr-only">Info</span>
    <div class="pl-2">
      <span class="font-medium">{{ session('success') }}</span>
    </div>
</div>
@endif
