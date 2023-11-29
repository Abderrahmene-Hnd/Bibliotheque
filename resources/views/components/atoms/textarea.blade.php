<textarea class=" {{ $class }} rounded-lg p-2 w-full focus:outline-none focus:ring " name="{{ $name }}"
    id="{{ $name }}" placeholder="{{ $holder }}" cols="30" rows="10" required></textarea>
@error('{{ $name }}')
    <p class='text-red-500 text-xs mt-2'>{{ $message }}</p>
@enderror
