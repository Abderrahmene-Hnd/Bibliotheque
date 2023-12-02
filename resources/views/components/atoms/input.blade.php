<input
    class=" {{ $class }} block w-full rounded-md py-1.5 text-gray-900 shadow-sm ring-gray-300 placeholder:text-gray-400 focus:ring-2 sm:text-sm sm:leading-6 border-gray-900/25"
    wire:model.lazy="{{ $model }}" type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
    placeholder="{{ $holder }}" required>
{{-- @error("{{ $name }}")
<p class='text-red-500 text-xs mt-2'> {{ $message }}</p>
@enderror --}}
