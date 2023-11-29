        <input class=" {{ $class }} rounded-lg p-2 w-full focus:outline-none focus:ring "
            type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" placeholder="{{ $holder }}" required>
        @error('{{ $name }}')
            <p class='text-red-500 text-xs mt-2'> {{ $message }}</p>
        @enderror
