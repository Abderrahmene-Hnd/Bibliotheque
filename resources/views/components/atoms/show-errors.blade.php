@if ($errors->any())
<div class="flex p-4 mt-4 text-sm text-red-700 rounded-lg bg-red-100" role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z"
      clip-rule="evenodd"></path>
    </svg>
    <span class="sr-only">Info</span>
    <div class="pl-2">
        <span class="font-medium"> Impossible to sumbit ! Fixe the errors </span>
        @foreach ($errors->all() as $error)
                <ul class="mt-1.5 list-disc list-inside">
                    <li> {{ $error }} </li>
                </ul>
        @endforeach
    </div>
</div>
@endif
